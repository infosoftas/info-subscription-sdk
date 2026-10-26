<?php

namespace Infosoft\InfoSubscription\Generated\Invoice;

use DateTime;
use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Invoice\Contracts\ReadModel\InvoiceState;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InvoiceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InvoiceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InvoiceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InvoiceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InvoiceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InvoiceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new InvoiceRequestBuilderGetQueryParameters.
     * @param string|null $buyerReference Gets or sets the buyer reference.
     * @param string|null $creditNoteId Filters on the Credit Note. Invoices without credit notes will not be included.
     * @param DateTime|null $endDate Gets or sets the end date.
     * @param string|null $externalInvoiceIdentifier Filters on the external identifier, uses exact matching. For Reminders this refers to the original Invoice.
     * @param string|null $invoiceNumber Filters on the invoice number. For credit notes and reminders this refers to the Original Invoice Number
     * @param DateTime|null $maximumIssuedOn The max date that the Issued time should be within range of.
     * @param DateTime|null $minimumIssuedOn The minimum date that the Issued time should be within range of. For Reminder this is the ReminderDate.
     * @param string|null $orderReference Gets or sets the order reference.
     * @param string|null $organizationId Filters by OrganizationId if set. If not set all organizations are considered.
     * @param DateTime|null $startDate Gets or sets the start date.
     * @param InvoiceState|null $state Filters invoices by state. Supports combined flag values for OR-semantics.E.g. `State=Issued,Paid` returns invoices in either the Infosoft.S4.Invoice.Contracts.ReadModel.InvoiceState.Issued or Infosoft.S4.Invoice.Contracts.ReadModel.InvoiceState.Paid state.Note: invoice states are never combined in storage; each invoice always has exactly one state.The combined flag value is only used as a filter expression.Infosoft.S4.Invoice.Contracts.ReadModel.InvoiceState.Open is handled with exact equality and will never be includedwhen filtering on any other state value, even if combined.
     * @param string|null $subscriberId Filters on the subscriber Id.
     * @param string|null $trackingId Filters on the external tracking Id.
     * @return InvoiceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $buyerReference = null, ?string $creditNoteId = null, ?DateTime $endDate = null, ?string $externalInvoiceIdentifier = null, ?string $invoiceNumber = null, ?DateTime $maximumIssuedOn = null, ?DateTime $minimumIssuedOn = null, ?string $orderReference = null, ?string $organizationId = null, ?DateTime $startDate = null, ?InvoiceState $state = null, ?string $subscriberId = null, ?string $trackingId = null): InvoiceRequestBuilderGetQueryParameters {
        return new InvoiceRequestBuilderGetQueryParameters($buyerReference, $creditNoteId, $endDate, $externalInvoiceIdentifier, $invoiceNumber, $maximumIssuedOn, $minimumIssuedOn, $orderReference, $organizationId, $startDate, $state, $subscriberId, $trackingId);
    }

}
