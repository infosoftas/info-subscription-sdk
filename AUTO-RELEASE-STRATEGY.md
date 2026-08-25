# Auto-Release Strategy

Working document describing how this repository moves from *manual* releases (human merges the
Kiota-generated PR, then hand-tags `main`) to *automated* releases.

Status: **proposal / in progress**. Steps 1–2 are implemented; steps 3–5 are not started.

## Where we are today

| Pipeline | Trigger | What it does |
|---|---|---|
| `eng/azure-pipeline.yml` | Weekly cron (Mon 03:00 UTC), `always: true` | Regenerates all three SDKs from the live OpenAPI spec, publishes `0.0.0-preview…` packages to the `S4/Internal` feed, opens **one PR per language** |
| `eng/package-nuget.yml` | CalVer git tag | Pack + push to NuGet.org, create GitHub Release |
| `eng/package-npm.yml` | CalVer git tag | Pack + push to npmjs.org |
| `eng/package-python.yml` | CalVer git tag | Build + push to PyPI |

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

A cheap first heuristic: flag any **file deletion** inside a `generated/` tree, or any removed
public member. Anything flagged goes to a human.

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
3. Add the tag bot, running in dry-run (log the tag, do not push) for a few cycles.
4. Enable tag push.
5. Enable auto-merge — only once steps 1–4 are trusted.

Each step is independently useful and independently revertible.
