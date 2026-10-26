<?php

namespace Infosoft\InfoSubscription\Generated\Creditnote;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CreditnoteRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CreditnoteRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CreditnoteRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CreditnoteRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CreditnoteRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CreditnoteRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CreditnoteRequestBuilderGetQueryParameters.
     * @param string|null $buyerReference Gets or sets the buyer reference.
     * @param string|null $creditNoteNumber Gets or sets the credit note number.
     * @param DateTime|null $endDate Gets or sets the end date.
     * @param string|null $externalInvoiceIdentifier Filters on the external identifier, uses exact matching. For Reminders this refers to the original Invoice.
     * @param string|null $invoiceId Gets or sets the invoice identifier.
     * @param string|null $invoiceNumber Filters on the invoice number. For credit notes and reminders this refers to the Original Invoice Number
     * @param DateTime|null $maximumIssuedOn The max date that the Issued time should be within range of.
     * @param DateTime|null $minimumIssuedOn The minimum date that the Issued time should be within range of. For Reminder this is the ReminderDate.
     * @param string|null $orderReference Gets or sets the order reference.
     * @param string|null $organizationId Filters by OrganizationId if set. If not set all organizations are considered.
     * @param DateTime|null $startDate Gets or sets the start date.
     * @param string|null $subscriberId Filters on the subscriber Id.
     * @param string|null $trackingId Filters on the external tracking Id.
     * @return CreditnoteRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $buyerReference = null, ?string $creditNoteNumber = null, ?DateTime $endDate = null, ?string $externalInvoiceIdentifier = null, ?string $invoiceId = null, ?string $invoiceNumber = null, ?DateTime $maximumIssuedOn = null, ?DateTime $minimumIssuedOn = null, ?string $orderReference = null, ?string $organizationId = null, ?DateTime $startDate = null, ?string $subscriberId = null, ?string $trackingId = null): CreditnoteRequestBuilderGetQueryParameters {
        return new CreditnoteRequestBuilderGetQueryParameters($buyerReference, $creditNoteNumber, $endDate, $externalInvoiceIdentifier, $invoiceId, $invoiceNumber, $maximumIssuedOn, $minimumIssuedOn, $orderReference, $organizationId, $startDate, $subscriberId, $trackingId);
    }

}
