# Release Process

Releases are driven by **git tags**. Pushing a semver tag triggers the ADO pipeline (`eng/package-nuget.yml`) which packs and publishes the NuGet package, then creates a GitHub Release automatically.

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

The internal Azure Artifacts feeds (`S4/Internal`) use the build agent's identity — no additional secret needed for either pipeline.

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

### 3. Both pipelines run automatically

A single tag triggers **both** pipelines simultaneously. Both SDKs share the same version number.

**`package-nuget.yml`** (3 stages):
1. **Pack** — validate tag, `dotnet pack` (MinVer reads version from tag), publish artifact
2. **PublishInternal** — push to `S4/Internal` Azure Artifacts NuGet feed via `DotNetCoreCLI@2`
3. **Deploy** — push to [NuGet.org](https://www.nuget.org/packages/Infosoft.Info.Subscription.Dotnet) + create [GitHub Release](https://github.com/infosoftas/didactic-octo-chainsaw/releases) with auto-generated notes

**`package-npm.yml`** (3 stages):
1. **Pack** — validate tag, `npm ci`, `npm run build`, inject version via `npm version`, `npm pack`, publish artifact
2. **PublishInternal** — push to `S4/Internal` Azure Artifacts npm feed via `Npm@1`
3. **Deploy** — push to [npmjs.org](https://www.npmjs.com/package/@infosoft/info-subscription-ts)

Release notes are generated automatically from merged PRs and commits since the previous tag (GitHub's `generate_release_notes` feature). No manual changelog editing is required.

### 4. Verify

- NuGet: https://www.nuget.org/packages/Infosoft.Info.Subscription.Dotnet
- GitHub Releases: https://github.com/infosoftas/didactic-octo-chainsaw/releases

## Pre-release versions

To publish a pre-release (e.g. a beta), use a pre-release tag suffix:

```sh
git tag 1.2.0-beta.1
git push origin 1.2.0-beta.1
```

MinVer will produce the NuGet pre-release version `1.2.0-beta.1` automatically.

## Hotfixes

For a hotfix to an older release:

1. Create a branch from the relevant release tag: `git checkout -b hotfix/1.1.x 1.1.0`
2. Apply the fix and merge via PR
3. Tag the tip of the hotfix branch: `git tag 1.1.1 && git push origin 1.1.1`
