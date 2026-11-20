<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Source\Emaildomain;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EmaildomainRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EmaildomainRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EmaildomainRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EmaildomainRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EmaildomainRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EmaildomainRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EmaildomainRequestBuilderGetQueryParameters.
     * @param string|null $domainAuthorizationId Gets or sets the identifier of the domain authorization.
     * @param string|null $userId Get or set the user identifier
     * @return EmaildomainRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $domainAuthorizationId = null, ?string $userId = null): EmaildomainRequestBuilderGetQueryParameters {
        return new EmaildomainRequestBuilderGetQueryParameters($domainAuthorizationId, $userId);
    }

}
