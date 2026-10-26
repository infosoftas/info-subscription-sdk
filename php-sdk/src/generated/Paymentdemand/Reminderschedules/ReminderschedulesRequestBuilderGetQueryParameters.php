<?php

namespace Infosoft\InfoSubscription\Generated\Paymentdemand\Reminderschedules;

/**
 * Get payment demand reminder schedules.
*/
class ReminderschedulesRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("BillingPlanId")
     * @var string|null $billingPlanId Gets or sets the billing plan identifier
    */
    public ?string $billingPlanId = null;
    
    /**
     * @QueryParameter("EnterprisePlanId")
     * @var string|null $enterprisePlanId Gets or sets the enterprise plan identifier
    */
    public ?string $enterprisePlanId = null;
    
    /**
     * @QueryParameter("Id")
     * @var string|null $id Gets or sets the identifier.
    */
    public ?string $id = null;
    
    /**
     * @QueryParameter("OrderId")
     * @var string|null $orderId Gets or sets the order identifier
    */
    public ?string $orderId = null;
    
    /**
     * @QueryParameter("OrganizationId")
     * @var string|null $organizationId Gets or sets OrganizationId identifier.
    */
    public ?string $organizationId = null;
    
    /**
     * @QueryParameter("PaymentDemandId")
     * @var string|null $paymentDemandId The identifier of the payment demand that the reminder is for.
    */
    public ?string $paymentDemandId = null;
    
    /**
     * @QueryParameter("PaymentProviderType")
     * @var string|null $paymentProviderType Gets or sets the payment method type
    */
    public ?string $paymentProviderType = null;
    
    /**
     * @QueryParameter("SubscriberId")
     * @var string|null $subscriberId Gets or sets the subscriber identifier
    */
    public ?string $subscriberId = null;
    
    /**
     * @QueryParameter("SubscriptionId")
     * @var string|null $subscriptionId Gets or sets the subscription identifier
    */
    public ?string $subscriptionId = null;
    
    /**
     * Instantiates a new ReminderschedulesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $billingPlanId Gets or sets the billing plan identifier
     * @param string|null $enterprisePlanId Gets or sets the enterprise plan identifier
     * @param string|null $id Gets or sets the identifier.
     * @param string|null $orderId Gets or sets the order identifier
     * @param string|null $organizationId Gets or sets OrganizationId identifier.
     * @param string|null $paymentDemandId The identifier of the payment demand that the reminder is for.
     * @param string|null $paymentProviderType Gets or sets the payment method type
     * @param string|null $subscriberId Gets or sets the subscriber identifier
     * @param string|null $subscriptionId Gets or sets the subscription identifier
    */
    public function __construct(?string $billingPlanId = null, ?string $enterprisePlanId = null, ?string $id = null, ?string $orderId = null, ?string $organizationId = null, ?string $paymentDemandId = null, ?string $paymentProviderType = null, ?string $subscriberId = null, ?string $subscriptionId = null) {
        $this->billingPlanId = $billingPlanId;
        $this->enterprisePlanId = $enterprisePlanId;
        $this->id = $id;
        $this->orderId = $orderId;
        $this->organizationId = $organizationId;
        $this->paymentDemandId = $paymentDemandId;
        $this->paymentProviderType = $paymentProviderType;
        $this->subscriberId = $subscriberId;
        $this->subscriptionId = $subscriptionId;
    }

}
