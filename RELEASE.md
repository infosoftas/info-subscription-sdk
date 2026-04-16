# Release Process

Releases are driven by **git tags**. Pushing a semver tag triggers all three ADO pipelines simultaneously, packing and publishing all SDKs and creating a GitHub Release.

## Prerequisites (one-time setup)

Two secrets must be configured on the **NuGet** ADO pipeline (`package-nuget.yml`):

| Variable | Description |
|---|---|
| `NUGET_APIKEY` | API key for the `Infosoft.Info.Subscription.Dotnet` package on NuGet.org |
| `GITHUB_TOKEN` | GitHub PAT with `contents: write` permission on this repository (for creating GitHub Releases) |

One secret must be configured on the **npm** ADO pipeline (`package-npm.yml`):

| Variable | Description |
|---|---|
| `NPM_TOKEN` | Access token for the `@infosoft/info-subscription-ts` package on npmjs.org |

One secret must be configured on the **Python** ADO pipeline (`package-python.yml`):

| Variable | Description |
|---|---|
| `PYPI_TOKEN` | API token for the `infosoft-info-subscription` package on PyPI |

The internal Azure Artifacts feeds (`S4/Internal`) use the build agent's identity — no additional secrets needed for internal publishing.

### Internal feed publishing

Preview packages are published to `S4/Internal` automatically by `azure-pipeline.yml` whenever API changes are detected (i.e., whenever a PR is created). Versions follow the pattern `0.0.0-preview.{BuildId}` (NuGet/npm) and `0.0.0.dev{BuildId}` (Python). These are not tagged releases — they reflect the current API shape after each Kiota regeneration run.

## Releasing a new version

### 1. Decide the version

Follow [Semantic Versioning](https://semver.org/):

- **Patch** (`1.0.x`) — bug fixes, no API changes
- **Minor** (`1.x.0`) — new endpoints or non-breaking additions
- **Major** (`x.0.0`) — breaking changes to the SDK interface

### 2. Tag and push

```sh
git checkout main
git pull

git tag 1.2.3
git push origin 1.2.3
```

> The tag must point to a commit on `main`. Do not tag pre-merge commits.

### 3. All pipelines run automatically

A single tag triggers **all three** pipelines simultaneously. All SDKs share the same version number.

**`package-nuget.yml`** (2 stages):
1. **Pack** — validate tag, `dotnet pack` (MinVer reads version from tag), publish artifact
2. **Deploy** — push to [NuGet.org](https://www.nuget.org/packages/Infosoft.Info.Subscription.Dotnet) + create [GitHub Release](https://github.com/infosoftas/didactic-octo-chainsaw/releases) with auto-generated notes

**`package-npm.yml`** (2 stages):
1. **Pack** — validate tag, `npm ci`, `npm run build`, inject version via `npm version`, `npm pack`, publish artifact
2. **Deploy** — push to [npmjs.org](https://www.npmjs.com/package/@infosoft/info-subscription-ts)

**`package-python.yml`** (2 stages):
1. **Pack** — validate tag, inject version into `pyproject.toml` via `sed`, `python -m build`, publish artifact
2. **Deploy** — push to [PyPI](https://pypi.org/project/infosoft-info-subscription/) via `twine`

Release notes are generated automatically from merged PRs and commits since the previous tag (GitHub's `generate_release_notes` feature). No manual changelog editing is required.

### 4. Verify

- NuGet: https://www.nuget.org/packages/Infosoft.Info.Subscription.Dotnet
- npm: https://www.npmjs.com/package/@infosoft/info-subscription-ts
- PyPI: https://pypi.org/project/infosoft-info-subscription/
- GitHub Releases: https://github.com/infosoftas/didactic-octo-chainsaw/releases

## Pre-release versions

To publish a pre-release (e.g. a beta), use a pre-release tag suffix:

```sh
git tag 1.2.0-beta.1
git push origin 1.2.0-beta.1
```

MinVer will produce the NuGet pre-release version `1.2.0-beta.1` automatically. npm and PyPI will receive the same tag string as their version.

## Hotfixes

For a hotfix to an older release:

1. Create a branch from the relevant release tag: `git checkout -b hotfix/1.1.x 1.1.0`
2. Apply the fix and merge via PR
3. Tag the tip of the hotfix branch: `git tag 1.1.1 && git push origin 1.1.1`
