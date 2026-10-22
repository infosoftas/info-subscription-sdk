<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription\Tests;

use Infosoft\InfoSubscription\B2CAuthSettings;
use Infosoft\InfoSubscription\Generated\InfoSubscription;
use Infosoft\InfoSubscription\InfoSubscriptionClientFactory;
use Infosoft\InfoSubscription\InfoSubscriptionSettings;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class InfoSubscriptionClientFactoryTest extends TestCase
{
    #[DataProvider('settingsProvider')]
    public function testFactoryUsesConfiguredBaseUrlOnGeneratedRequests(
        InfoSubscriptionSettings $settings,
        string $expectedProductUri,
    ): void {
        $client = InfoSubscriptionClientFactory::create($settings);

        self::assertInstanceOf(InfoSubscription::class, $client);
        self::assertSame($expectedProductUri, (string) $client->product()->toGetRequestInformation()->getUri());
    }

    public function testFactoryConstructionMakesNoHttpCalls(): void
    {
        $settings = new InfoSubscriptionSettings(
            tenantId: 'tenant-id',
            auth: new B2CAuthSettings('client-id', 'client-secret'),
        );

        $client = InfoSubscriptionClientFactory::create($settings);

        self::assertInstanceOf(InfoSubscription::class, $client);
    }

    /**
     * @return array<string, array{InfoSubscriptionSettings,string}>
     */
    public static function settingsProvider(): array
    {
        return [
            'default endpoint' => [
                new InfoSubscriptionSettings(
                    tenantId: 'tenant-id',
                    auth: new B2CAuthSettings('client-id', 'client-secret'),
                ),
                'https://api.info-subscription.com/product',
            ],
            'custom endpoint with base path' => [
                new InfoSubscriptionSettings(
                    tenantId: 'tenant-id',
                    auth: new B2CAuthSettings('client-id', 'client-secret'),
                    apiEndpoint: 'https://api.example.com/custom/base',
                ),
                'https://api.example.com/custom/base/product',
            ],
        ];
    }
}
