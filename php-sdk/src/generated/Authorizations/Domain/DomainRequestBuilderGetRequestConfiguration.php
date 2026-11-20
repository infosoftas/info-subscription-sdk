<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Domain;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DomainRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DomainRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DomainRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DomainRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DomainRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DomainRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DomainRequestBuilderGetQueryParameters.
     * @param string|null $domainName Gets or sets the domain name.
     * @param string|null $subscriberAccountId Gets or sets the identifier of the subscriber account.
     * @return DomainRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $domainName = null, ?string $subscriberAccountId = null): DomainRequestBuilderGetQueryParameters {
        return new DomainRequestBuilderGetQueryParameters($domainName, $subscriberAccountId);
    }

}
