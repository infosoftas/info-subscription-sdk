<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Infosoft\InfoSubscription\TenantHeaderMiddleware;
use PHPUnit\Framework\TestCase;

final class TenantHeaderMiddlewareTest extends TestCase
{
    public function testSetsAndReplacesTenantHeaderForApiHostOnly(): void
    {
        $history = [];
        $client = $this->createClient(
            [
                new Response(200, ['Content-Type' => 'application/json'], '{}'),
                new Response(200, ['Content-Type' => 'application/json'], '{}'),
            ],
            $history,
            new TenantHeaderMiddleware('tenant-123', 'api.info-subscription.com'),
        );

        $client->request('POST', 'https://API.INFO-SUBSCRIPTION.COM/product', [
            'headers' => [
                'S4-TenantId' => 'old-value',
                'X-Correlation-Id' => 'corr-1',
            ],
            'body' => 'payload',
        ]);
        $client->request('GET', 'https://other.example.com/product', [
            'headers' => [
                'S4-TenantId' => 'external-tenant',
            ],
        ]);

        self::assertCount(2, $history);

        $apiRequest = $history[0]['request'];
        self::assertSame(['tenant-123'], $apiRequest->getHeader('S4-TenantId'));
        self::assertSame(['corr-1'], $apiRequest->getHeader('X-Correlation-Id'));
        self::assertSame('payload', (string) $apiRequest->getBody());

        $otherHostRequest = $history[1]['request'];
        self::assertSame(['external-tenant'], $otherHostRequest->getHeader('S4-TenantId'));
        self::assertSame('https://other.example.com/product', (string) $otherHostRequest->getUri());
    }

    /**
     * @param list<Response> $responses
     * @param array<int, array<string,mixed>> $history
     */
    private function createClient(
        array $responses,
        array &$history,
        TenantHeaderMiddleware $middleware,
    ): Client {
        $mockHandler = new MockHandler($responses);
        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->unshift($middleware);
        $handlerStack->push(Middleware::history($history));

        return new Client(['handler' => $handlerStack]);
    }
}
