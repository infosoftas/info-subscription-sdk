<?php

namespace Infosoft\InfoSubscription\Generated\Subscriber;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriberRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscriberRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriberRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscriberRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriberRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriberRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriberRequestBuilderGetQueryParameters.
     * @param string|null $externalId Gets or sets the identifier of the external.
     * @param int|null $subscriberNumber Gets or sets the subscriber number.
     * @return SubscriberRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $externalId = null, ?int $subscriberNumber = null): SubscriberRequestBuilderGetQueryParameters {
        return new SubscriberRequestBuilderGetQueryParameters($externalId, $subscriberNumber);
    }

}
