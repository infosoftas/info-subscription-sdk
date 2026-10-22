# INFO-Subscription PHP SDK

Generated PHP SDK for INFO-Subscription API.

Package name: `infosoftas/info-subscription-php`

## Usage

```php
use Infosoft\InfoSubscription\B2CAuthSettings;
use Infosoft\InfoSubscription\InfoSubscriptionClientFactory;
use Infosoft\InfoSubscription\InfoSubscriptionSettings;

$settings = new InfoSubscriptionSettings(
    tenantId: 'your-tenant-id',
    auth: new B2CAuthSettings(
        clientId: 'client-id',
        clientSecret: 'client-secret',
    ),
);

$client = InfoSubscriptionClientFactory::create($settings);
$products = $client->product()->get()->wait();
```

The factory configures Kiota's default Guzzle handler stack, adds `S4-TenantId` middleware for API-host requests, and sets the configured API base URL before constructing the generated client.
