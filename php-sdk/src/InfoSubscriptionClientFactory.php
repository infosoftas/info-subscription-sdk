<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription;

use GuzzleHttp\HandlerStack;
use Infosoft\InfoSubscription\Generated\InfoSubscription;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use Microsoft\Kiota\Http\KiotaClientFactory;

final class InfoSubscriptionClientFactory
{
    public static function create(
        InfoSubscriptionSettings $settings,
    ): InfoSubscription {
        $apiHost = (string) parse_url($settings->apiEndpoint, PHP_URL_HOST);
        $authenticationProvider = new ConfidentialClientAuthenticationProvider($settings->auth, [$apiHost]);

        $httpClient = KiotaClientFactory::createWithMiddleware(self::createHandlerStack($settings->tenantId, $apiHost));

        $requestAdapter = new GuzzleRequestAdapter($authenticationProvider, null, null, $httpClient);
        $requestAdapter->setBaseUrl($settings->apiEndpoint);

        return new InfoSubscription($requestAdapter);
    }

    /**
     * @internal
     */
    public static function createHandlerStack(string $tenantId, string $apiHost): HandlerStack
    {
        $handlerStack = KiotaClientFactory::getDefaultHandlerStack();
        // Inside the redirect handler so each hop is host-checked; Guzzle copies custom headers across origins.
        $handlerStack->after('kiotaRedirectHandler', new TenantHeaderMiddleware($tenantId, $apiHost), 'tenantHeader');

        return $handlerStack;
    }
}
