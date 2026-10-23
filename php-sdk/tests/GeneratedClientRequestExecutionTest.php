<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Infosoft\InfoSubscription\Generated\InfoSubscription;
use Infosoft\InfoSubscription\Generated\Models\ProductExtendedCreate;
use Infosoft\InfoSubscription\Generated\Models\ProductExtendedView;
use Infosoft\InfoSubscription\Generated\Models\TemplatePackageView;
use Microsoft\Kiota\Abstractions\Authentication\AnonymousAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\StreamInterface;

final class GeneratedClientRequestExecutionTest extends TestCase
{
    public function testMockedGetRequestsDeserializeModels(): void
    {
        $history = [];
        $client = $this->createClient(
            [
                new Response(200, ['Content-Type' => 'application/json'], '[{"id":"product-1","partNo":"P-001"}]'),
                new Response(200, ['Content-Type' => 'application/json'], '[{"id":"package-1"}]'),
            ],
            $history,
        );

        $products = $client->product()->get()->wait();
        $packages = $client->package()->get()->wait();

        self::assertIsArray($products);
        self::assertCount(1, $products);
        self::assertInstanceOf(ProductExtendedView::class, $products[0]);
        self::assertSame('product-1', $products[0]->getId());
        self::assertSame('P-001', $products[0]->getPartNo());

        self::assertIsArray($packages);
        self::assertCount(1, $packages);
        self::assertInstanceOf(TemplatePackageView::class, $packages[0]);
        self::assertSame('package-1', $packages[0]->getId());

        self::assertCount(2, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
        self::assertSame('https://api.info-subscription.com/product', (string) $history[0]['request']->getUri());
        self::assertSame('GET', $history[1]['request']->getMethod());
        self::assertSame('https://api.info-subscription.com/package', (string) $history[1]['request']->getUri());
    }

    public function testMockedPostRequestSerializesJsonBodyAndReturnsModel(): void
    {
        $history = [];
        $client = $this->createClient(
            [
                new Response(200, ['Content-Type' => 'application/json'], '{"id":"product-2","partNo":"P-POST"}'),
            ],
            $history,
        );

        $requestBody = new ProductExtendedCreate();
        $requestBody->setPartNo('P-POST');
        $result = $client->product()->post($requestBody)->wait();

        self::assertInstanceOf(ProductExtendedView::class, $result);
        self::assertSame('product-2', $result->getId());
        self::assertSame('P-POST', $result->getPartNo());

        self::assertCount(1, $history);
        $request = $history[0]['request'];
        self::assertSame('POST', $request->getMethod());
        self::assertSame('https://api.info-subscription.com/product', (string) $request->getUri());

        $serializedPayload = json_decode((string) $request->getBody(), true, flags: JSON_THROW_ON_ERROR);
        self::assertSame('P-POST', $serializedPayload['partNo'] ?? null);
    }

    public function testMockedInvoiceFileRequestReturnsStream(): void
    {
        $history = [];
        $client = $this->createClient(
            [
                new Response(200, ['Content-Type' => 'application/pdf'], "%PDF-1.7\nmock-content"),
            ],
            $history,
        );

        $result = $client->invoice()->byId('invoice-id')->file()->byType('pdf')->get()->wait();

        self::assertInstanceOf(StreamInterface::class, $result);
        self::assertSame("%PDF-1.7\nmock-content", (string) $result);
        self::assertCount(1, $history);
        self::assertSame('https://api.info-subscription.com/invoice/invoice-id/file/pdf', (string) $history[0]['request']->getUri());
    }

    /**
     * @param list<Response> $responses
     * @param array<int, array<string,mixed>> $history
     */
    private function createClient(array $responses, array &$history): InfoSubscription
    {
        $mockHandler = new MockHandler($responses);
        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($history));

        $httpClient = new Client(['handler' => $handlerStack]);
        $requestAdapter = new GuzzleRequestAdapter(new AnonymousAuthenticationProvider(), null, null, $httpClient);
        $requestAdapter->setBaseUrl('https://api.info-subscription.com');

        return new InfoSubscription($requestAdapter);
    }
}
