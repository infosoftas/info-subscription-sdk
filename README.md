# INFO-Subscription API SDKs

This repository contains multi-language SDK clients for the **INFO-Subscription API**, generated via
[Microsoft Kiota](https://learn.microsoft.com/en-us/openapi/kiota/) from the OpenAPI spec at
`https://api.info-subscription.com/swagger/latest/swagger.json`.

Active SDKs:

| Language | Package | Directory |
|---|---|---|
| .NET | [`Infosoft.Info.Subscription.Dotnet`](https://www.nuget.org/packages/Infosoft.Info.Subscription.Dotnet) on NuGet.org | `dotnet-sdk/` |
| TypeScript | [`@infosoft/info-subscription-ts`](https://www.npmjs.com/package/@infosoft/info-subscription-ts) on npmjs.org | `typescript-sdk/` |
| Python | [`infosoft-info-subscription`](https://pypi.org/project/infosoft-info-subscription/) on PyPI | `python-sdk/` |

> **Note on the repository name:** `didactic-octo-chainsaw` is a GitHub auto-generated placeholder
> name. It hasn't been renamed yet while we're still ironing out quirks in the SDK generation and
> release pipelines, and the repository remains private in the meantime. It will be renamed to
> something more descriptive once things stabilize.

## Getting started

Each SDK has its own README with installation and usage instructions:
- [.NET SDK](dotnet-sdk/src/README.md)
- [TypeScript SDK](typescript-sdk/README.md)
- [Python SDK](python-sdk/README.md)

## Repository layout

```
dotnet-sdk/       # .NET SDK (Kiota-generated client + auth/DI helpers + Sample app)
typescript-sdk/   # TypeScript SDK (Kiota-generated client + auth/middleware helpers)
python-sdk/       # Python SDK (Kiota-generated client + auth/middleware helpers)
eng/              # Azure DevOps: azure-pipeline.yml (active, weekly SDK regeneration) plus
                  #   package-*.yml (historical/reference only -- releases moved to GitHub Actions)
.github/workflows/ # Active GitHub Actions workflows: package releases (NuGet/npm/PyPI) + tag bot
```

## Releasing

See [RELEASE.md](RELEASE.md) for the full release process, including how CalVer tags trigger the
GitHub Actions release workflows that publish to NuGet.org, npmjs.org, and PyPI, and create GitHub
Releases.
