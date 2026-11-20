<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Source\External;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExternalRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExternalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExternalRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExternalRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExternalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExternalRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExternalRequestBuilderGetQueryParameters.
     * @param string|null $name Gets or sets the name of the source (like the name of the external system)
     * @param string|null $userId Get or set the user identifier
     * @return ExternalRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $name = null, ?string $userId = null): ExternalRequestBuilderGetQueryParameters {
        return new ExternalRequestBuilderGetQueryParameters($name, $userId);
    }

}
