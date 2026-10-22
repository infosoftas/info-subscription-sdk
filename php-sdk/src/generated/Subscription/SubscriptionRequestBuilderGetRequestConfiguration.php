<?php

namespace Infosoft\InfoSubscription\Generated\Subscription;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscriptionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriptionRequestBuilderGetQueryParameters.
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
     * @return SubscriptionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $cancelled = null, ?string $enterprisePlanId = null, ?string $id = null, ?string $invoiceContactId = null, ?string $nextInvoiceContactId = null, ?string $nextSubscription = null, ?string $organizationId = null, ?bool $renewed = null, ?string $subscriberAccount = null, ?string $subscriberId = null): SubscriptionRequestBuilderGetQueryParameters {
        return new SubscriptionRequestBuilderGetQueryParameters($cancelled, $enterprisePlanId, $id, $invoiceContactId, $nextInvoiceContactId, $nextSubscription, $organizationId, $renewed, $subscriberAccount, $subscriberId);
    }

}
