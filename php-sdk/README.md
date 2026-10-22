# INFO-Subscription PHP SDK

Generated PHP SDK for INFO-Subscription API. Requires PHP 8.4 or later.

## Install

Install from [Packagist](https://packagist.org/packages/infosoftas/info-subscription-php):

```sh
composer require infosoftas/info-subscription-php
```

## Use

```php
use Infosoft\InfoSubscription\B2CAuthSettings;
use Infosoft\InfoSubscription\InfoSubscriptionClientFactory;
use Infosoft\InfoSubscription\InfoSubscriptionSettings;

$required = static fn (string $name): string =>
    getenv($name) ?: throw new RuntimeException("Set $name before creating the client.");

$settings = new InfoSubscriptionSettings(
    tenantId: $required('INFO_SUBSCRIPTION_TENANT_ID'),
    auth: new B2CAuthSettings(
        clientId: $required('INFO_SUBSCRIPTION_CLIENT_ID'),
        clientSecret: $required('INFO_SUBSCRIPTION_CLIENT_SECRET'),
    ),
);

$client = InfoSubscriptionClientFactory::create($settings);
$products = $client->product()->get()->wait();
```

`tenantId`, `clientId`, and `clientSecret` are required. B2C defaults are `prodlogins4`,
`B2C_1A_V2SIGNIN`, and `api`; API endpoint defaults to `https://api.info-subscription.com`.
Override these with `b2cTenantName`, `signInPolicy`, `scopeName`, or `apiEndpoint` constructor
arguments. The client uses client-credentials authentication and sends `S4-TenantId` to the
configured API host.

For a runnable read-only sample using environment variables and Docker, see
[`Sample/README.md`](Sample/README.md). Never commit real credentials.

## Develop

From repository root, install dependencies and run lint/tests:

```sh
composer install
composer lint
composer test
```

PHP package metadata lives in root `composer.json`; SDK sources live under `php-sdk/`. Packagist
auto-indexes pushed tags through its configured GitHub webhook. `composer archive.exclude` narrows
the ZIP attached to GitHub Releases, but Packagist's automatically generated GitHub source ZIP still
includes monorepo content.

## Release

All SDKs share numeric CalVer tags (`YYYY.M.MICRO`). The PHP workflow validates and attaches a
Composer ZIP to the shared GitHub Release; it does not publish through a Packagist API token or
create a PHP preview package. Packagist indexes versions from Git tags after webhook delivery,
which can happen before or after the GitHub workflow finishes. See [`RELEASE.md`](../RELEASE.md)
for one-time webhook setup and release details.
