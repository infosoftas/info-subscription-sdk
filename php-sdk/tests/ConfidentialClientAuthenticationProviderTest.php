<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Infosoft\InfoSubscription\B2CAuthSettings;
use Infosoft\InfoSubscription\ConfidentialClientAuthenticationProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Microsoft\Kiota\Abstractions\RequestInformation;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ConfidentialClientAuthenticationProviderTest extends TestCase
{
    #[DataProvider('authSettingsProvider')]
    public function testRequestsExpectedTokenUrlAndBodyAndAppliesBearerHeader(
        B2CAuthSettings $settings,
        string $expectedTokenUrl,
        string $expectedScope,
    ): void {
        $history = [];
        $provider = new ConfidentialClientAuthenticationProvider(
            $settings,
            ['api.info-subscription.com'],
            $this->createTokenClient(
                [new Response(200, ['Content-Type' => 'application/json'], '{"access_token":"token-value","token_type":"Bearer","expires_in":3600}')],
                $history,
            ),
        );

        $request = new RequestInformation();
        $request->setUri('https://api.info-subscription.com/product');

        $provider->authenticateRequest($request)->wait();

        self::assertCount(1, $history);
        $tokenRequest = $history[0]['request'];
        self::assertSame('POST', $tokenRequest->getMethod());
        self::assertSame($expectedTokenUrl, (string) $tokenRequest->getUri());

        parse_str((string) $tokenRequest->getBody(), $formData);
        self::assertSame('client_credentials', $formData['grant_type'] ?? null);
        self::assertSame($settings->clientId, $formData['client_id'] ?? null);
        self::assertSame($settings->clientSecret, $formData['client_secret'] ?? null);
        self::assertSame($expectedScope, $formData['scope'] ?? null);
        self::assertFalse($tokenRequest->hasHeader('S4-TenantId'));

        $authorization = $request->getHeaders()->get('Authorization');
        self::assertCount(1, $authorization);
        self::assertStringEndsWith('token-value', $authorization[0]);
    }

    public function testOauthErrorResponseIsPropagated(): void
    {
        $history = [];
        $provider = new ConfidentialClientAuthenticationProvider(
            new B2CAuthSettings('client-id', 'client-secret'),
            ['api.info-subscription.com'],
            $this->createTokenClient(
                [new Response(400, ['Content-Type' => 'application/json'], '{"error":"invalid_client","error_description":"bad credentials"}')],
                $history,
            ),
        );

        $request = new RequestInformation();
        $request->setUri('https://api.info-subscription.com/subscription');

        $this->expectException(IdentityProviderException::class);
        $provider->authenticateRequest($request)->wait();
    }

    public function testMissingTokenPayloadIsPropagatedAsFailure(): void
    {
        $history = [];
        $provider = new ConfidentialClientAuthenticationProvider(
            new B2CAuthSettings('client-id', 'client-secret'),
            ['api.info-subscription.com'],
            $this->createTokenClient(
                [new Response(200, ['Content-Type' => 'application/json'], '{"token_type":"Bearer","expires_in":3600}')],
                $history,
            ),
        );

        $request = new RequestInformation();
        $request->setUri('https://api.info-subscription.com/subscription');

        $this->expectException(\InvalidArgumentException::class);
        $provider->authenticateRequest($request)->wait();
    }

    public function testUnrelatedHostSkipsBearerAndTokenExchange(): void
    {
        $history = [];
        $provider = new ConfidentialClientAuthenticationProvider(
            new B2CAuthSettings('client-id', 'client-secret'),
            ['api.info-subscription.com'],
            $this->createTokenClient(
                [new Response(200, ['Content-Type' => 'application/json'], '{"access_token":"token-value","token_type":"Bearer","expires_in":3600}')],
                $history,
            ),
        );

        $request = new RequestInformation();
        $request->setUri('https://unrelated.example.com/subscription');

        $provider->authenticateRequest($request)->wait();

        self::assertCount(0, $history);
        self::assertSame([], $request->getHeaders()->get('Authorization'));
    }

    /**
     * @return array<string, array{B2CAuthSettings,string,string}>
     */
    public static function authSettingsProvider(): array
    {
        return [
            'default settings' => [
                new B2CAuthSettings('default-client-id', 'default-client-secret'),
                'https://prodlogins4.b2clogin.com/prodlogins4.onmicrosoft.com/B2C_1A_V2SIGNIN/oauth2/v2.0/token',
                'https://prodlogins4.onmicrosoft.com/api/.default',
            ],
            'custom settings' => [
                new B2CAuthSettings(
                    'custom-client-id',
                    'custom-client-secret',
                    'customtenant',
                    'B2C_1A_CUSTOM',
                    'customscope',
                ),
                'https://customtenant.b2clogin.com/customtenant.onmicrosoft.com/B2C_1A_CUSTOM/oauth2/v2.0/token',
                'https://customtenant.onmicrosoft.com/customscope/.default',
            ],
        ];
    }

    /**
     * @param list<Response> $responses
     * @param array<int, array<string,mixed>> $history
     */
    private function createTokenClient(array $responses, array &$history): ClientInterface
    {
        $mockHandler = new MockHandler($responses);
        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($history));

        return new Client(['handler' => $handlerStack]);
    }
}
