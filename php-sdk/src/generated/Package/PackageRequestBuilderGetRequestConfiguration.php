<?php

namespace Infosoft\InfoSubscription\Generated\Package;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PackageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PackageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PackageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PackageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PackageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PackageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PackageRequestBuilderGetQueryParameters.
     * @param string|null $billingPlanId Gets or sets the identifier of the billing plan.
     * @param string|null $currency Gets or sets the currency.
     * @param bool|null $disabled Gets or sets the disabled.
     * @param string|null $id Gets or sets the identifier.
     * @param int|null $initialTermType Gets or sets the type of the initial term.
     * @param string|null $organizationId Gets or sets the identifier of the organization.
     * @param bool|null $organizationIdNull Gets or sets a value indicating whether the organization identifier null.
     * @param string|null $organizationIdOrNull Gets or sets the organization identifier or null.
     * @param float|null $price Gets or sets the price.
     * @param string|null $productId Gets or sets the identifier of the product.
     * @return PackageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $billingPlanId = null, ?string $currency = null, ?bool $disabled = null, ?string $id = null, ?int $initialTermType = null, ?string $organizationId = null, ?bool $organizationIdNull = null, ?string $organizationIdOrNull = null, ?float $price = null, ?string $productId = null): PackageRequestBuilderGetQueryParameters {
        return new PackageRequestBuilderGetQueryParameters($billingPlanId, $currency, $disabled, $id, $initialTermType, $organizationId, $organizationIdNull, $organizationIdOrNull, $price, $productId);
    }

}
