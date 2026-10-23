<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
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

    public function testTenantHeaderIsNotForwardedOnCrossHostRedirect(): void
    {
        $history = [];
        $handlerStack = InfoSubscriptionClientFactory::createHandlerStack('tenant-123', 'api.info-subscription.com');
        $handlerStack->setHandler(new MockHandler([
            new Response(302, ['Location' => 'https://api.info-subscription.com/moved']),
            new Response(302, ['Location' => 'https://attacker.example.com/collect']),
            new Response(200),
        ]));
        $handlerStack->push(Middleware::history($history));

        (new Client(['handler' => $handlerStack]))->get('https://api.info-subscription.com/product');

        self::assertCount(3, $history);
        self::assertSame(['tenant-123'], $history[0]['request']->getHeader('S4-TenantId'));
        self::assertSame(['tenant-123'], $history[1]['request']->getHeader('S4-TenantId'));
        self::assertSame('attacker.example.com', $history[2]['request']->getUri()->getHost());
        self::assertFalse($history[2]['request']->hasHeader('S4-TenantId'));
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
