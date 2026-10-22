<?php

namespace Infosoft\InfoSubscription\Generated\Subscription;

/**
 * Get all subscriptions.
*/
class SubscriptionRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("Cancelled")
     * @var bool|null $cancelled Gets or sets the cancelled.
    */
    public ?bool $cancelled = null;
    
    /**
     * @QueryParameter("EnterprisePlanId")
     * @var string|null $enterprisePlanId Gets or sets the identifier of the enterprise plan.
    */
    public ?string $enterprisePlanId = null;
    
    /**
     * @QueryParameter("Id")
     * @var string|null $id Gets or sets the identifier.
    */
    public ?string $id = null;
    
    /**
     * @QueryParameter("InvoiceContactId")
     * @var string|null $invoiceContactId Gets or sets the identifier of the invoice contact.
    */
    public ?string $invoiceContactId = null;
    
    /**
     * @QueryParameter("NextInvoiceContactId")
     * @var string|null $nextInvoiceContactId Gets or sets the identifier of the next invoice contact.
    */
    public ?string $nextInvoiceContactId = null;
    
    /**
     * @QueryParameter("NextSubscription")
     * @var string|null $nextSubscription Gets or sets the next subscription.
    */
    public ?string $nextSubscription = null;
    
    /**
     * @QueryParameter("OrganizationId")
     * @var string|null $organizationId Gets or sets the identifier of the organization.
    */
    public ?string $organizationId = null;
    
    /**
     * @QueryParameter("Renewed")
     * @var bool|null $renewed Gets or sets the renewed.
    */
    public ?bool $renewed = null;
    
    /**
     * @QueryParameter("SubscriberAccount")
     * @var string|null $subscriberAccount Gets or sets the identifier of the subscriber account.
    */
    public ?string $subscriberAccount = null;
    
    /**
     * @QueryParameter("SubscriberId")
     * @var string|null $subscriberId Gets or sets the identifier of the subscriber.
    */
    public ?string $subscriberId = null;
    
    /**
     * Instantiates a new SubscriptionRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $cancelled Gets or sets the cancelled.
     * @param string|null $enterprisePlanId Gets or sets the identifier of the enterprise plan.
     * @param string|null $id Gets or sets the identifier.
     * @param string|null $invoiceContactId Gets or sets the identifier of the invoice contact.
     * @param string|null $nextInvoiceContactId Gets or sets the identifier of the next invoice contact.
     * @param string|null $nextSubscription Gets or sets the next subscription.
     * @param string|null $organizationId Gets or sets the identifier of the organization.
     * @param bool|null $renewed Gets or sets the renewed.
     * @param string|null $subscriberAccount Gets or sets the identifier of the subscriber account.
     * @param string|null $subscriberId Gets or sets the identifier of the subscriber.
    */
    public function __construct(?bool $cancelled = null, ?string $enterprisePlanId = null, ?string $id = null, ?string $invoiceContactId = null, ?string $nextInvoiceContactId = null, ?string $nextSubscription = null, ?string $organizationId = null, ?bool $renewed = null, ?string $subscriberAccount = null, ?string $subscriberId = null) {
        $this->cancelled = $cancelled;
        $this->enterprisePlanId = $enterprisePlanId;
        $this->id = $id;
        $this->invoiceContactId = $invoiceContactId;
        $this->nextInvoiceContactId = $nextInvoiceContactId;
        $this->nextSubscription = $nextSubscription;
        $this->organizationId = $organizationId;
        $this->renewed = $renewed;
        $this->subscriberAccount = $subscriberAccount;
        $this->subscriberId = $subscriberId;
    }

}
