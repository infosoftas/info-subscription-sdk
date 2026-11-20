<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Identityprovider;

use Infosoft\InfoSubscription\Generated\Models\IntegrationType;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentityproviderRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IdentityproviderRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentityproviderRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IdentityproviderRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IdentityproviderRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentityproviderRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IdentityproviderRequestBuilderGetQueryParameters.
     * @param IntegrationType|null $integrationType Gets or sets the integration type.
     * @param string|null $name Gets or sets the name.
     * @return IdentityproviderRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?IntegrationType $integrationType = null, ?string $name = null): IdentityproviderRequestBuilderGetQueryParameters {
        return new IdentityproviderRequestBuilderGetQueryParameters($integrationType, $name);
    }

}
