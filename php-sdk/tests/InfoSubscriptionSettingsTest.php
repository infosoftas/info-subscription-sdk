<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription\Tests;

use Infosoft\InfoSubscription\B2CAuthSettings;
use Infosoft\InfoSubscription\InfoSubscriptionSettings;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class InfoSubscriptionSettingsTest extends TestCase
{
    public function testUsesDefaultApiEndpoint(): void
    {
        $settings = new InfoSubscriptionSettings(
            'tenant-id',
            new B2CAuthSettings('client-id', 'client-secret'),
        );

        self::assertSame('https://api.info-subscription.com', $settings->apiEndpoint);
    }

    public function testTrimsApiEndpointTrailingSlash(): void
    {
        $settings = new InfoSubscriptionSettings(
            'tenant-id',
            new B2CAuthSettings('client-id', 'client-secret'),
            'https://api.info-subscription.com/',
        );

        self::assertSame('https://api.info-subscription.com', $settings->apiEndpoint);
    }

    public function testRejectsBlankTenantId(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        new InfoSubscriptionSettings(
            '   ',
            new B2CAuthSettings('client-id', 'client-secret'),
        );
    }

    #[DataProvider('invalidApiEndpointProvider')]
    public function testRejectsApiEndpointThatIsNotAbsoluteHttps(string $apiEndpoint): void
    {
        $this->expectException(\InvalidArgumentException::class);

        new InfoSubscriptionSettings(
            'tenant-id',
            new B2CAuthSettings('client-id', 'client-secret'),
            $apiEndpoint,
        );
    }

    /**
     * @return array<string, array{string}>
     */
    public static function invalidApiEndpointProvider(): array
    {
        return [
            'relative' => ['/api'],
            'http scheme' => ['http://api.info-subscription.com'],
            'missing scheme' => ['api.info-subscription.com'],
        ];
    }
}
