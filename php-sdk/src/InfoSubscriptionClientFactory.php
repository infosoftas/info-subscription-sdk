<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription;

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

        $handlerStack = KiotaClientFactory::getDefaultHandlerStack();
        $handlerStack->unshift(new TenantHeaderMiddleware($settings->tenantId, $apiHost));
        $httpClient = KiotaClientFactory::createWithMiddleware($handlerStack);

        $requestAdapter = new GuzzleRequestAdapter($authenticationProvider, null, null, $httpClient);
        $requestAdapter->setBaseUrl($settings->apiEndpoint);

        return new InfoSubscription($requestAdapter);
    }
}
