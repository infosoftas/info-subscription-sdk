<?php

namespace Infosoft\InfoSubscription\Generated\Paymentdemand;

/**
 * Return a collection of payment demands that matches the given query filter.
*/
class PaymentdemandRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("BillingPlanId")
     * @var string|null $billingPlanId Gets or sets the identifier of the billing plan.
    */
    public ?string $billingPlanId = null;
    
    /**
     * @QueryParameter("CreditLedgerId")
     * @var string|null $creditLedgerId Gets or sets the identifier of the credit ledger.
    */
    public ?string $creditLedgerId = null;
    
    /**
     * @QueryParameter("CreditNoteId")
     * @var string|null $creditNoteId Gets or sets the identifier of the credit note.
    */
    public ?string $creditNoteId = null;
    
    /**
     * @QueryParameter("EnterprisePlanId")
     * @var string|null $enterprisePlanId Gets or sets the enterprise plan identifier.
    */
    public ?string $enterprisePlanId = null;
    
    /**
     * @QueryParameter("InvoiceId")
     * @var string|null $invoiceId Gets or sets the identifier of the invoice.
    */
    public ?string $invoiceId = null;
    
    /**
     * @QueryParameter("NextSubscriptionId")
     * @var string|null $nextSubscriptionId Gets or sets the identifier of the next subscription.
    */
    public ?string $nextSubscriptionId = null;
    
    /**
     * @QueryParameter("OrderId")
     * @var string|null $orderId Gets or sets the identifier of the order.
    */
    public ?string $orderId = null;
    
    /**
     * @QueryParameter("SubscriberAccount")
     * @var string|null $subscriberAccount Gets or sets the subscriber account.
    */
    public ?string $subscriberAccount = null;
    
    /**
     * @QueryParameter("SubscriberId")
     * @var string|null $subscriberId Get or set the subscriber identifier.
    */
    public ?string $subscriberId = null;
    
    /**
     * @QueryParameter("SubscriptionId")
     * @var string|null $subscriptionId Gets or sets the identifier of the subscription.
    */
    public ?string $subscriptionId = null;
    
    /**
     * Instantiates a new PaymentdemandRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $billingPlanId Gets or sets the identifier of the billing plan.
     * @param string|null $creditLedgerId Gets or sets the identifier of the credit ledger.
     * @param string|null $creditNoteId Gets or sets the identifier of the credit note.
     * @param string|null $enterprisePlanId Gets or sets the enterprise plan identifier.
     * @param string|null $invoiceId Gets or sets the identifier of the invoice.
     * @param string|null $nextSubscriptionId Gets or sets the identifier of the next subscription.
     * @param string|null $orderId Gets or sets the identifier of the order.
     * @param string|null $subscriberAccount Gets or sets the subscriber account.
     * @param string|null $subscriberId Get or set the subscriber identifier.
     * @param string|null $subscriptionId Gets or sets the identifier of the subscription.
    */
    public function __construct(?string $billingPlanId = null, ?string $creditLedgerId = null, ?string $creditNoteId = null, ?string $enterprisePlanId = null, ?string $invoiceId = null, ?string $nextSubscriptionId = null, ?string $orderId = null, ?string $subscriberAccount = null, ?string $subscriberId = null, ?string $subscriptionId = null) {
        $this->billingPlanId = $billingPlanId;
        $this->creditLedgerId = $creditLedgerId;
        $this->creditNoteId = $creditNoteId;
        $this->enterprisePlanId = $enterprisePlanId;
        $this->invoiceId = $invoiceId;
        $this->nextSubscriptionId = $nextSubscriptionId;
        $this->orderId = $orderId;
        $this->subscriberAccount = $subscriberAccount;
        $this->subscriberId = $subscriberId;
        $this->subscriptionId = $subscriptionId;
    }

}
