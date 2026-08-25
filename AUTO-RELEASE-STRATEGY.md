# Auto-Release Strategy

Working document describing how this repository moves from *manual* releases (human merges the
Kiota-generated PR, then hand-tags `main`) to *automated* releases.

Status: **all 5 steps implemented.** Auto-merge is wired and the two one-time repo governance
settings (`allow_auto_merge`, branch protection on `main`) are enabled.

## Where we are today

| Pipeline | Trigger | What it does |
|---|---|---|
| `eng/azure-pipeline.yml` | Weekly cron (Mon 03:00 UTC), `always: true` | Regenerates all three SDKs from the live OpenAPI spec, classifies the spec diff as breaking/additive via `oasdiff`, publishes `0.0.0-preview…` packages to the `S4/Internal` feed, opens **one PR** labeled `breaking` or `auto-release` |
| `eng/package-nuget.yml` | CalVer git tag | Pack + push to NuGet.org, create GitHub Release |
| `eng/package-npm.yml` | CalVer git tag | Pack + push to npmjs.org |
| `eng/package-python.yml` | CalVer git tag | Build + push to PyPI |
| `.github/workflows/release-tag.yml` | Push to `main` touching SDK `src/` (or manual dispatch) | Computes the next CalVer tag and pushes it |

Two manual steps sit between "the API changed" and "consumers can install it":

1. A human reviews and merges up to three generated PRs.
2. A human decides the next CalVer number and pushes the tag.

## The core problem

Generation is split into three independent stages producing three independent PRs, but all three
SDKs share **one** version number. Auto-releasing from that shape means three merges racing to
produce three tags on the same day, and no single point that owns the decision "main changed →
cut a release".

## Proposed shape

### 1. Add build/smoke validation to the generator (safety first)

Today the generator publishes preview packages **without ever compiling the generated code** for
TypeScript and Python. `dotnet pack` incidentally builds the .NET SDK, but `npm run build` and
`python -m build` do not type-check or import the generated modules in a way that would fail the
pipeline reliably.

Add, per language, before any packaging or PR creation:

- **.NET** — `dotnet build` on the solution in `Release`.
- **TypeScript** — `npm run build` (tsc) plus an import smoke test of the public barrel export.
- **Python** — `pip install -e .` plus an import smoke test of `info_subscription_sdk`.

If validation fails, no preview package is published and no PR is opened. A broken generation
should be loud, not silently shipped to the internal feed.

> **This was not hypothetical.** Adding the TypeScript build gate immediately failed: the generated
> code called `getCollectionOfPrimitiveValues<T>("string")` while the pinned
> `@microsoft/kiota-bundle` 1.0.0-preview.100 declared a zero-argument overload — 13 `TS2554`
> errors. `tsc` emits output despite type errors, so the broken package had been shipping to the
> internal feed unnoticed. Fixed by bumping the runtime to 1.0.0-preview.103, which matches the
> generator. Keeping the Kiota generator and its language runtimes in step is now an ongoing
> maintenance concern that only a build gate will surface.

### 2. Collapse three PRs into one

One branch `sdk-update-<date>-<buildid>` containing all three regenerated SDKs, one PR.

- One merge equals one release; no 3-way race producing multiple tags in a day.
- Version parity across the three registries becomes intrinsic rather than hoped-for.
- Generation stages can still run in parallel; a final stage assembles the branch and opens the PR.

Trade-off: one language breaking blocks the whole update. Acceptable — the SDKs are already
lockstep-versioned, so a partial release is not a meaningful outcome anyway.

> **Implemented.** `eng/azure-pipeline.yml` collapsed from three parallel stages (one per
> language, each with its own branch/PR) into a single stage and job that runs the three
> languages sequentially: detect change → create one shared branch → regenerate only the
> languages that changed onto it → validate only those languages → one commit, one push →
> publish preview packages only for changed languages → one `gh pr create`. Sequential (not
> parallel) execution was chosen deliberately: three stages pushing to the same branch from
> separate agents/checkouts would race; a single job avoids that without needing branch-level
> locking. Per-language change detection is preserved so an update that only touches one
> language's generated output doesn't needlessly regenerate/validate/republish the other two —
> but all languages that *did* change land in the same branch and PR.

### 3. Auto-merge rather than auto-tag

Do not release directly out of the generator. Instead:

- The generated PR carries an `auto-release` label.
- Required checks are the per-language builds and smoke tests from step 1.
- GitHub auto-merge (squash) fires once checks are green.
- The merge to `main` is what triggers a release.

Humans retain a veto by simply not enabling auto-merge on a risky diff.

> **Implemented — with a correction to the original assumption.** The plan above assumed ADO
> would post a commit status back to GitHub for free, since `resources.repositories.self` is
> declared as a GitHub-type resource. That's false: checked against a real PR commit created by a
> full pipeline run and it had `total_count: 0` GitHub commit statuses — only GitHub's own default
> CodeQL code-scanning checks appeared. Branch protection had nothing real to require. Fixed by
> having the pipeline explicitly report its own result: right after the shared branch is pushed
> (i.e. once build/smoke validation and the oasdiff classification have already succeeded), a
> "Report validation status to GitHub" step calls
> `gh api repos/.../statuses/{sha} -f state=success -f context=sdk-pipeline/validated`. The PR
> creation step then calls `gh pr merge --auto --squash` whenever the diff was classified
> `auto-release`; `breaking`-labeled PRs are left unmerged for a human. Two one-time repo
> settings were required and are now applied: `allow_auto_merge` on the repo, and branch
> protection on `main` requiring the `sdk-pipeline/validated` status plus the existing CodeQL
> checks (`CodeQL`, `Analyze (csharp)`, `Analyze (python)`, `Analyze (javascript-typescript)`) —
> the latter is a repo-wide policy change (affects human PRs too), applied with the user's
> explicit sign-off.

### 4. Tag bot on `main`

New pipeline (`eng/release-tag.yml`), triggered by `main`, path-filtered to the SDK source trees:

- Compute the next CalVer: `YYYY.M.<highest micro this month + 1>`, read from
  `git tag --list "YYYY.M.*"`.
- Skip if `HEAD` is already tagged.
- Push the tag. The three existing release pipelines fire unchanged.

This is the smallest change that yields auto-release — everything downstream already works.

### 5. Breaking-change gate

Kiota regeneration can silently drop or rename operations. Classify the diff before auto-merging:

- Removed or renamed request builders / parameters → apply a `breaking` label, block auto-merge,
  require a human.
- Additive only → allow auto-merge.

> **Implemented — using `oasdiff` against the spec, not the generated code.** Rather than a
> per-language regex heuristic over generated `.cs`/`.ts`/`.py` (three heuristics, three failure
> modes), the generator pipeline commits a spec snapshot at `eng/openapi-spec.json` and diffs it
> against the freshly fetched live spec with `oasdiff breaking --fail-on WARN` right after
> regeneration. `--fail-on WARN` is required — verified locally that `oasdiff` exits `0` by
> default even when it reports removed operations, since those are ⚠️-level by default; without
> that flag every run would look clean. Non-zero exit (breaking, or any oasdiff error) applies the
> `breaking` label and includes the markdown changelog in the PR body; a clean diff applies
> `auto-release`. The baseline file is updated to the new spec in the same commit as the code, so
> the next run's diff always starts from what was actually last shipped. Labels are created
> on-the-fly (`gh label create ... || true`) so no separate one-time repo setup is needed for this
> part. As explicitly accepted up front: this only catches API-contract regressions that trace
> back to the spec — a Kiota/runtime regression with no spec change (like the
> `@microsoft/kiota-bundle` version-mismatch bug found in step 1) won't be flagged here, but that
> class of problem is already caught by the build/smoke validation from step 1, which runs
> regardless of this classification's result.

## CalVer versus auto-release

CalVer's MICRO segment carries no semantic meaning, so a consumer cannot tell an additive release
from a breaking one. Under automation that matters more than it does today. Two options:

- **Keep CalVer** and rely on release notes plus the breaking-change gate. Simplest; no consumer
  migration.
- **Switch to SemVer** derived from the diff classification (major on removal, minor on addition).
  More honest signal, considerably more work.

No decision made yet.

## Other issues worth fixing regardless

- **Preview packages publish without validation.** Covered by step 1.
- **`always: true` on the weekly cron** produces a fresh branch every Monday even when the spec is
  unchanged. The double-generation guard prevents empty PRs, but stale unmerged SDK-update PRs will
  accumulate. The generator should close or supersede the previous open SDK-update PR.
- **No rollback story.** NuGet, npm and PyPI all forbid republishing a version. The yank/deprecate
  path for each registry should be documented in `RELEASE.md`.

## Rollout order

1. Add build and smoke validation to the generator pipeline. ✅ done
2. Merge the three generated PRs into one. ✅ done
3. Add the tag bot, running in dry-run (log the tag, do not push) for a few cycles. ✅ done
4. Enable tag push. ✅ done
5. Enable auto-merge — only once steps 1–4 are trusted. ✅ done: `oasdiff` classification labels
   the PR `breaking`/`auto-release`, the pipeline posts its own `sdk-pipeline/validated` GitHub
   commit status (ADO does not do this automatically), `gh pr merge --auto --squash` is called for
   `auto-release` PRs, and `main` now requires that status plus CodeQL before any merge.

> **Known trade-off: `sdk-pipeline/validated` blocks ordinary human PRs to `main` too.** Required
> status checks in classic branch protection apply to every PR targeting the branch — there's no
> way to scope one to "only PRs opened by this pipeline". Since `sdk-pipeline/validated` is only
> ever posted by the generator pipeline, any other PR (docs, CI changes, this repo's own PR #132)
> sits with that check permanently "expected, never reported". Considered removing the check from
> branch protection (it's arguably redundant anyway — the pipeline posts it *before* creating the
> PR, once validation already passed in the same job, so it never actually needs branch protection
> to make `--auto` "wait"). Decided to keep it as documentation-by-configuration of intent and
> accept manual bypass (`gh pr merge --admin` / "merge without waiting for requirements") for
> non-pipeline PRs instead — see `RELEASE.md`.

> **Step 3 implemented — as a GitHub Actions workflow, not an ADO pipeline.** Unlike steps 1–2,
> the tag bot doesn't touch ADO-specific resources (agent pools, service connections, internal
> feeds) — it only reads git tags/history and pushes a tag back to this repo, so it lives at
> `.github/workflows/release-tag.yml` instead of under `eng/`. It triggers on pushes to `main`
> that touch `dotnet-sdk/src`, `typescript-sdk/src`, or `python-sdk/src` (plus a manual
> `workflow_dispatch` for on-demand runs). It computes the CalVer tag that *would* be created next
> (`YYYY.M.<highest existing MICRO this month + 1>`, unpadded per `RELEASE.md`), skips entirely if
> `HEAD` is already tagged, and — gated by a `DRY_RUN` env var that defaults to `true` — only logs
> the tag it would push. No tag is created or pushed yet. `permissions: contents: write` is
> already granted so flipping `DRY_RUN` to `false` later (step 4) is a one-line change. Pushing
> the resulting tag still fires the three existing ADO release pipelines unchanged, since those
> trigger off tags on the GitHub repo resource. The repo has no tags today, so the first computed
> tag would be `YYYY.M.1`; confirmed with a standalone simulation of the arithmetic. The
> multi-tag/multi-month case (highest MICRO within the current month only) was reviewed by hand
> rather than executed live — a local WSL bash quoting quirk got in the way of a local dry run —
> so this is worth an extra look at the first real dry-run execution in Actions.
>
> **Step 4 implemented.** Push-triggered runs of `.github/workflows/release-tag.yml` now default
> `DRY_RUN` to `false` — a push to `main` touching an SDK `src/` tree computes the next CalVer tag
> and actually pushes it, which fires the three ADO release pipelines and publishes real packages
> to NuGet.org, npmjs.org and PyPI. Manual `workflow_dispatch` runs still default to dry-run
> (`dry_run: true`) as a safety net; pass `dry_run: false` explicitly to push a tag by hand. No
> live end-to-end run was performed as part of implementing this step — doing so would push a real
> tag and trigger real publishes to public package registries, which cannot be undone (none of the
> three registries allow republishing a version), so that should only happen with an explicit,
> deliberate go-ahead, not as a routine verification step.

Each step is independently useful and independently revertible.
