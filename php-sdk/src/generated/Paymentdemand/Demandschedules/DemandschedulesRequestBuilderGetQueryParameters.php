<?php

namespace Infosoft\InfoSubscription\Generated\Paymentdemand\Demandschedules;

/**
 * Get payment demand schedules based on the query parameters.
*/
class DemandschedulesRequestBuilderGetQueryParameters 
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
     * @QueryParameter("PaymentMethod")
     * @var string|null $paymentMethod Gets or sets the payment method
    */
    public ?string $paymentMethod = null;
    
    /**
     * @QueryParameter("PaymentMethodType")
     * @var string|null $paymentMethodType Gets or sets the payment method type
    */
    public ?string $paymentMethodType = null;
    
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
     * Instantiates a new DemandschedulesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $billingPlanId Gets or sets the billing plan identifier
     * @param string|null $enterprisePlanId Gets or sets the enterprise plan identifier
     * @param string|null $id Gets or sets the identifier.
     * @param string|null $orderId Gets or sets the order identifier
     * @param string|null $organizationId Gets or sets OrganizationId identifier.
     * @param string|null $paymentMethod Gets or sets the payment method
     * @param string|null $paymentMethodType Gets or sets the payment method type
     * @param string|null $subscriberId Gets or sets the subscriber identifier
     * @param string|null $subscriptionId Gets or sets the subscription identifier
    */
    public function __construct(?string $billingPlanId = null, ?string $enterprisePlanId = null, ?string $id = null, ?string $orderId = null, ?string $organizationId = null, ?string $paymentMethod = null, ?string $paymentMethodType = null, ?string $subscriberId = null, ?string $subscriptionId = null) {
        $this->billingPlanId = $billingPlanId;
        $this->enterprisePlanId = $enterprisePlanId;
        $this->id = $id;
        $this->orderId = $orderId;
        $this->organizationId = $organizationId;
        $this->paymentMethod = $paymentMethod;
        $this->paymentMethodType = $paymentMethodType;
        $this->subscriberId = $subscriberId;
        $this->subscriptionId = $subscriptionId;
    }

}
