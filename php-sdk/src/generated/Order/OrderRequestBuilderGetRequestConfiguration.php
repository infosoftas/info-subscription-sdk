<?php

namespace Infosoft\InfoSubscription\Generated\Order;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OrderRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OrderRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OrderRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OrderRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OrderRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OrderRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OrderRequestBuilderGetQueryParameters.
     * @param string|null $id Gets or sets the identifier.
     * @param string|null $subscriberId Gets or sets the identifier of the subscriber.
     * @return OrderRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $id = null, ?string $subscriberId = null): OrderRequestBuilderGetQueryParameters {
        return new OrderRequestBuilderGetQueryParameters($id, $subscriberId);
    }

}
