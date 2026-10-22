<?php

namespace Infosoft\InfoSubscription\Generated\Product;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProductRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProductRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProductRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProductRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProductRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProductRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ProductRequestBuilderGetQueryParameters.
     * @param string|null $categoryId Gets or sets the identifier of the category.
     * @param string|null $externalPartNo Gets or sets the external part no.
     * @param string|null $id Gets or sets the identifier.
     * @param string|null $organizationId Gets or sets the identifier of the organization.
     * @param string|null $partNo Gets or sets the part no.
     * @return ProductRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $categoryId = null, ?string $externalPartNo = null, ?string $id = null, ?string $organizationId = null, ?string $partNo = null): ProductRequestBuilderGetQueryParameters {
        return new ProductRequestBuilderGetQueryParameters($categoryId, $externalPartNo, $id, $organizationId, $partNo);
    }

}
