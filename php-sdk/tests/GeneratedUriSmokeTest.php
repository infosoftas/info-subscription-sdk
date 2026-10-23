<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription\Tests;

use Infosoft\InfoSubscription\Generated\InfoSubscription;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use PHPUnit\Framework\TestCase;

final class GeneratedUriSmokeTest extends TestCase
{
    public function testProductRequestUriUsesExpectedDefaultBaseUrl(): void
    {
        $baseUrl = '';
        $requestAdapter = $this->createStub(RequestAdapter::class);
        $requestAdapter->method('getBaseUrl')->willReturnCallback(static function () use (&$baseUrl): string {
            return $baseUrl;
        });
        $requestAdapter->method('setBaseUrl')->willReturnCallback(static function (string $url) use (&$baseUrl): void {
            $baseUrl = $url;
        });

        $client = new InfoSubscription($requestAdapter);
        $requestInformation = $client->product()->toGetRequestInformation();

        self::assertSame('https://api.info-subscription.com/product', (string) $requestInformation->getUri());
    }
}
