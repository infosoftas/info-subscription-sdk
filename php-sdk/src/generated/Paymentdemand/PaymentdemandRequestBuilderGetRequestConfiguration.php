<?php

namespace Infosoft\InfoSubscription\Generated\Paymentdemand;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PaymentdemandRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PaymentdemandRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PaymentdemandRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PaymentdemandRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PaymentdemandRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PaymentdemandRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PaymentdemandRequestBuilderGetQueryParameters.
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
     * @return PaymentdemandRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $billingPlanId = null, ?string $creditLedgerId = null, ?string $creditNoteId = null, ?string $enterprisePlanId = null, ?string $invoiceId = null, ?string $nextSubscriptionId = null, ?string $orderId = null, ?string $subscriberAccount = null, ?string $subscriberId = null, ?string $subscriptionId = null): PaymentdemandRequestBuilderGetQueryParameters {
        return new PaymentdemandRequestBuilderGetQueryParameters($billingPlanId, $creditLedgerId, $creditNoteId, $enterprisePlanId, $invoiceId, $nextSubscriptionId, $orderId, $subscriberAccount, $subscriberId, $subscriptionId);
    }

}
