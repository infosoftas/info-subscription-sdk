# INFO-Subscription API SDKs

This repository contains multi-language SDK clients for the **INFO-Subscription API**, generated via
[Microsoft Kiota](https://learn.microsoft.com/en-us/openapi/kiota/) from the OpenAPI spec at
`https://api.info-subscription.com/swagger/latest/swagger.json`.

Active SDKs:

| Language | Package | Directory |
|---|---|---|
| .NET | [`Infosoft.Info.Subscription.Dotnet`](https://www.nuget.org/packages/Infosoft.Info.Subscription.Dotnet) on NuGet.org | `dotnet-sdk/` |
| TypeScript | [`@infosoftas/info-subscription-ts`](https://www.npmjs.com/package/@infosoftas/info-subscription-ts) on npmjs.org | `typescript-sdk/` |
| Python | [`infosoft-info-subscription`](https://pypi.org/project/infosoft-info-subscription/) on PyPI | `python-sdk/` |
| PHP | [`infosoftas/info-subscription-php`](https://packagist.org/packages/infosoftas/info-subscription-php) on Packagist | `php-sdk/` |

> **Note on the repository name:** this repo was renamed from its original GitHub auto-generated
> placeholder name (`didactic-octo-chainsaw`) to `info-subscription-sdk` once the SDK generation
> and release pipelines stabilized. The repository is public.

## Getting started

Each SDK has its own README with installation and usage instructions:
- [.NET SDK](dotnet-sdk/src/README.md)
- [TypeScript SDK](typescript-sdk/README.md)
- [Python SDK](python-sdk/README.md)
- [PHP SDK](php-sdk/README.md)

## Repository layout

```
dotnet-sdk/       # .NET SDK (Kiota-generated client + auth/DI helpers + Sample app)
typescript-sdk/   # TypeScript SDK (Kiota-generated client + auth/middleware helpers)
python-sdk/       # Python SDK (Kiota-generated client + auth/middleware helpers)
php-sdk/          # PHP SDK (Kiota-generated client + auth/middleware helpers + Sample app)
eng/              # Azure DevOps: azure-pipeline.yml (active, weekly SDK regeneration) plus
                  #   package-*.yml (historical/reference only -- releases moved to GitHub Actions)
.github/workflows/ # Active GitHub Actions workflows: package releases (NuGet/npm/PyPI) + PHP release asset + tag bot
```

## Releasing

See [RELEASE.md](RELEASE.md) for the full release process, including how CalVer tags trigger the
GitHub Actions release workflows that publish to NuGet.org, npmjs.org, and PyPI, attach the PHP
Composer archive, and create shared GitHub Releases. Packagist indexes PHP tags automatically after
its GitHub webhook has been configured; PHP is not published to the internal preview feed.
