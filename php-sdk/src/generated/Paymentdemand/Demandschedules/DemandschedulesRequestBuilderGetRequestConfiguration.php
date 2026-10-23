<?php

namespace Infosoft\InfoSubscription\Generated\Paymentdemand\Demandschedules;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DemandschedulesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DemandschedulesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DemandschedulesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DemandschedulesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DemandschedulesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DemandschedulesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DemandschedulesRequestBuilderGetQueryParameters.
     * @param string|null $billingPlanId Gets or sets the billing plan identifier
     * @param string|null $enterprisePlanId Gets or sets the enterprise plan identifier
     * @param string|null $id Gets or sets the identifier.
     * @param string|null $orderId Gets or sets the order identifier
     * @param string|null $organizationId Gets or sets OrganizationId identifier.
     * @param string|null $paymentMethod Gets or sets the payment method
     * @param string|null $paymentMethodType Gets or sets the payment method type
     * @param string|null $subscriberId Gets or sets the subscriber identifier
     * @param string|null $subscriptionId Gets or sets the subscription identifier
     * @return DemandschedulesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $billingPlanId = null, ?string $enterprisePlanId = null, ?string $id = null, ?string $orderId = null, ?string $organizationId = null, ?string $paymentMethod = null, ?string $paymentMethodType = null, ?string $subscriberId = null, ?string $subscriptionId = null): DemandschedulesRequestBuilderGetQueryParameters {
        return new DemandschedulesRequestBuilderGetQueryParameters($billingPlanId, $enterprisePlanId, $id, $orderId, $organizationId, $paymentMethod, $paymentMethodType, $subscriberId, $subscriptionId);
    }

}
