<?php

declare(strict_types=1);

use Infosoft\InfoSubscription\B2CAuthSettings;
use Infosoft\InfoSubscription\InfoSubscriptionClientFactory;
use Infosoft\InfoSubscription\InfoSubscriptionSettings;

require dirname(__DIR__, 2) . '/vendor/autoload.php';

function environmentValue(string $name): ?string
{
    $value = getenv($name);

    return $value === false || trim($value) === '' ? null : $value;
}

function requiredEnvironmentValues(array $names): array
{
    $values = [];
    $missing = [];

    foreach ($names as $name) {
        $value = environmentValue($name);
        if ($value === null) {
            $missing[] = $name;
            continue;
        }

        $values[$name] = $value;
    }

    if ($missing !== []) {
        throw new InvalidArgumentException(
            'Missing required environment variables: ' . implode(', ', $missing) . '.',
        );
    }

    return $values;
}

function printProducts(?array $products): void
{
    if ($products === null || $products === []) {
        echo "No products found.\n";
        return;
    }

    printf("Found %d product(s):\n", count($products));
    foreach ($products as $product) {
        printf(
            "- %s (part no: %s; id: %s)\n",
            $product->getName() ?? '(unnamed)',
            $product->getPartNo() ?? '(not set)',
            $product->getId() ?? '(not set)',
        );
    }
}

function printPackages(?array $packages): void
{
    if ($packages === null || $packages === []) {
        echo "No packages found.\n";
        return;
    }

    printf("Found %d package(s):\n", count($packages));
    foreach ($packages as $package) {
        printf(
            "- %s (id: %s)\n",
            $package->getName() ?? '(unnamed)',
            $package->getId() ?? '(not set)',
        );
    }
}

try {
    $required = requiredEnvironmentValues(['TENANT_ID', 'CLIENT_ID', 'CLIENT_SECRET']);

    $settings = new InfoSubscriptionSettings(
        tenantId: $required['TENANT_ID'],
        auth: new B2CAuthSettings(
            clientId: $required['CLIENT_ID'],
            clientSecret: $required['CLIENT_SECRET'],
            b2cTenantName: environmentValue('B2C_TENANT_NAME') ?? 'prodlogins4',
            signInPolicy: environmentValue('SIGN_IN_POLICY') ?? 'B2C_1A_V2SIGNIN',
            scopeName: environmentValue('SCOPE_NAME') ?? 'api',
        ),
        apiEndpoint: environmentValue('API_ENDPOINT') ?? 'https://api.info-subscription.com',
    );

    $client = InfoSubscriptionClientFactory::create($settings);
    printProducts($client->product()->get()->wait());
    echo "\n";
    printPackages($client->package()->get()->wait());
} catch (Throwable $error) {
    if ($error instanceof InvalidArgumentException && str_starts_with(
        $error->getMessage(),
        'Missing required environment variables:',
    )) {
        fwrite(STDERR, $error->getMessage() . "\n");
    } else {
        fwrite(STDERR, "Failed to list products and packages.\n");
    }
    exit(1);
}
