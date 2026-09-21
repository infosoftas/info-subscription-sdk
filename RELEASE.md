# Release Process

Releases are driven by **git tags**. Pushing a CalVer tag triggers all three ADO pipelines simultaneously, packing and publishing all SDKs and creating a GitHub Release.

## Prerequisites (one-time setup)

One secret must be configured on the **NuGet** ADO pipeline (`package-nuget.yml`):

| Variable | Description |
|---|---|
| `NUGET_APIKEY` | API key for the `Infosoft.Info.Subscription.Dotnet` package on NuGet.org |

One secret must be configured on the **npm** ADO pipeline (`package-npm.yml`):

| Variable | Description |
|---|---|
| `NPM_TOKEN` | Access token for the `@infosoft/info-subscription-ts` package on npmjs.org |

One secret must be configured on the **Python** ADO pipeline (`package-python.yml`):

| Variable | Description |
|---|---|
| `PYPI_TOKEN` | API token for the `infosoft-info-subscription` package on PyPI |

The internal Azure Artifacts feeds (`S4/Internal`) use the build agent's identity — no additional secrets needed for internal publishing.

No `GITHUB_TOKEN` secret is required for creating GitHub Releases. All three pipelines generate a
short-lived GitHub App installation token at run time via the `get-github-token-task@1` task
(same pattern as `azure-pipeline.yml`), using the `infosoftas` GitHub service connection.

### Internal feed publishing

Preview packages are published to `S4/Internal` automatically by `azure-pipeline.yml` whenever API changes are detected (i.e., whenever a PR is created). Versions follow the pattern `0.0.0-preview{today}{BuildId}` (NuGet), `0.0.0-preview.{today}{BuildId}` (npm), and `0.0.0.dev{today}{BuildId}` (Python), where `{today}` is the `yyyyMMdd` pipeline run date. These are not tagged releases — they reflect the current API shape after each Kiota regeneration run.

## Releasing a new version

### 1. Decide the version

Versions follow **CalVer**: `YYYY.M.MICRO`

- **YYYY** — full year (e.g. `2024`)
- **M** — month, **unpadded**, `1`–`12` (never `01`)
- **MICRO** — release counter within that month, starting at `1`, incremented for every release published in that month (not tied to day-of-month)

> **No zero-padding, ever.** `2024.08.1` is invalid — npm's SemVer parser rejects leading zeros in any segment. Always use `2024.8.1`.

### 2. Tag and push

```sh
git checkout main
git pull

git tag 2024.8.1
git push origin 2024.8.1
```

> The tag must point to a commit on `main`. Do not tag pre-merge commits.

### 3. All pipelines run automatically

A single tag triggers **all three** pipelines simultaneously. All SDKs share the same version number.

**`package-nuget.yml`** (2 stages):
1. **Pack** — validate tag on HEAD, `dotnet pack` with `-p:Version=<tag>` (version injected explicitly from the git tag), publish artifact
2. **Deploy** — push to [NuGet.org](https://www.nuget.org/packages/Infosoft.Info.Subscription.Dotnet) + create [GitHub Release](https://github.com/infosoftas/didactic-octo-chainsaw/releases) with auto-generated notes (skipped if already created)

**`package-npm.yml`** (2 stages):
1. **Pack** — validate tag, `npm ci`, `npm run build`, inject version via `npm version`, `npm pack`, publish artifact
2. **Deploy** — push to [npmjs.org](https://www.npmjs.com/package/@infosoft/info-subscription-ts) + create [GitHub Release](https://github.com/infosoftas/didactic-octo-chainsaw/releases) with auto-generated notes (skipped if already created)

**`package-python.yml`** (2 stages):
1. **Pack** — validate tag, inject version into `pyproject.toml` via `sed`, `python -m build`, publish artifact
2. **Deploy** — push to [PyPI](https://pypi.org/project/infosoft-info-subscription/) via `twine` + create [GitHub Release](https://github.com/infosoftas/didactic-octo-chainsaw/releases) with auto-generated notes (skipped if already created)

Since a single tag fires all three pipelines simultaneously, each Deploy stage checks whether the
GitHub Release already exists (`gh release view`) before creating it, so only the first pipeline
to reach that step actually creates the release — the others no-op.

Release notes are generated automatically from merged PRs and commits since the previous tag (GitHub's `generate_release_notes` feature). No manual changelog editing is required.

### 4. Verify

- NuGet: https://www.nuget.org/packages/Infosoft.Info.Subscription.Dotnet
- npm: https://www.npmjs.com/package/@infosoft/info-subscription-ts
- PyPI: https://pypi.org/project/infosoft-info-subscription/
- GitHub Releases: https://github.com/infosoftas/didactic-octo-chainsaw/releases

## Pre-release versions

To publish a pre-release (e.g. a beta), use a pre-release tag suffix:

```sh
git tag 2024.8.1-beta.1
git push origin 2024.8.1-beta.1
```

All three pipelines inject the version explicitly from the git tag string — NuGet via `-p:Version=<tag>`, npm via `npm version <tag>`, and PyPI via `sed` on `pyproject.toml`. The tag string is used verbatim, so a tag of `2024.8.1-beta.1` will produce pre-release packages on all three registries.

## Automation (auto-release)

`eng/azure-pipeline.yml` regenerates the SDKs weekly, validates them, classifies the API diff via
`oasdiff`, opens a PR labeled `breaking` or `auto-release`, and — for `auto-release` PRs — calls
`gh pr merge --auto`. The tag bot (`.github/workflows/release-tag.yml`) then tags `main`
automatically on merge, which fires the three pipelines above.

### Branch protection on `main` and merging regular PRs

`main` requires the `sdk-pipeline/validated` status check to pass before merging. **That status
is only ever posted by the SDK generator pipeline itself** — it is not, and cannot easily be made,
scoped to just the SDK-update PRs, so it will show as permanently pending ("expected, never
reported") on any other PR to `main` (docs, CI tweaks, this file, etc.).

For those PRs, either:
- Merge via **"Merge without waiting for requirements to be met"** in the GitHub UI (requires
  admin/bypass permission on the repo), or
- `gh pr merge <number> --admin --squash`

This is a deliberate, accepted trade-off rather than a bug.

## Hotfixes

For a hotfix to an older release:

1. Create a branch from the relevant release tag: `git checkout -b hotfix/2024.8.x 2024.8.1`
2. Apply the fix and merge via PR
3. Tag the tip of the hotfix branch with the next MICRO for that month: `git tag 2024.8.2 && git push origin 2024.8.2`
