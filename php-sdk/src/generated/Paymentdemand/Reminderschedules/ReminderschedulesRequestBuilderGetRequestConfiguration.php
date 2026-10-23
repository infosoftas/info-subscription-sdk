<?php

namespace Infosoft\InfoSubscription\Generated\Paymentdemand\Reminderschedules;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReminderschedulesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReminderschedulesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReminderschedulesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReminderschedulesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReminderschedulesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReminderschedulesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReminderschedulesRequestBuilderGetQueryParameters.
     * @param string|null $billingPlanId Gets or sets the billing plan identifier
     * @param string|null $enterprisePlanId Gets or sets the enterprise plan identifier
     * @param string|null $id Gets or sets the identifier.
     * @param string|null $orderId Gets or sets the order identifier
     * @param string|null $organizationId Gets or sets OrganizationId identifier.
     * @param string|null $paymentDemandId The identifier of the payment demand that the reminder is for.
     * @param string|null $paymentProviderType Gets or sets the payment method type
     * @param string|null $subscriberId Gets or sets the subscriber identifier
     * @param string|null $subscriptionId Gets or sets the subscription identifier
     * @return ReminderschedulesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $billingPlanId = null, ?string $enterprisePlanId = null, ?string $id = null, ?string $orderId = null, ?string $organizationId = null, ?string $paymentDemandId = null, ?string $paymentProviderType = null, ?string $subscriberId = null, ?string $subscriptionId = null): ReminderschedulesRequestBuilderGetQueryParameters {
        return new ReminderschedulesRequestBuilderGetQueryParameters($billingPlanId, $enterprisePlanId, $id, $orderId, $organizationId, $paymentDemandId, $paymentProviderType, $subscriberId, $subscriptionId);
    }

}
