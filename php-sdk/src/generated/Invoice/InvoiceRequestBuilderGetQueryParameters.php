<?php

namespace Infosoft\InfoSubscription\Generated\Invoice;

use DateTime;
use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Invoice\Contracts\ReadModel\InvoiceState;

/**
 * Get all invoices.
*/
class InvoiceRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("BuyerReference")
     * @var string|null $buyerReference Gets or sets the buyer reference.
    */
    public ?string $buyerReference = null;
    
    /**
     * @QueryParameter("CreditNoteId")
     * @var string|null $creditNoteId Filters on the Credit Note. Invoices without credit notes will not be included.
    */
    public ?string $creditNoteId = null;
    
    /**
     * @QueryParameter("EndDate")
     * @var DateTime|null $endDate Gets or sets the end date.
    */
    public ?DateTime $endDate = null;
    
    /**
     * @QueryParameter("ExternalInvoiceIdentifier")
     * @var string|null $externalInvoiceIdentifier Filters on the external identifier, uses exact matching. For Reminders this refers to the original Invoice.
    */
    public ?string $externalInvoiceIdentifier = null;
    
    /**
     * @QueryParameter("InvoiceNumber")
     * @var string|null $invoiceNumber Filters on the invoice number. For credit notes and reminders this refers to the Original Invoice Number
    */
    public ?string $invoiceNumber = null;
    
    /**
     * @QueryParameter("MaximumIssuedOn")
     * @var DateTime|null $maximumIssuedOn The max date that the Issued time should be within range of.
    */
    public ?DateTime $maximumIssuedOn = null;
    
    /**
     * @QueryParameter("MinimumIssuedOn")
     * @var DateTime|null $minimumIssuedOn The minimum date that the Issued time should be within range of. For Reminder this is the ReminderDate.
    */
    public ?DateTime $minimumIssuedOn = null;
    
    /**
     * @QueryParameter("OrderReference")
     * @var string|null $orderReference Gets or sets the order reference.
    */
    public ?string $orderReference = null;
    
    /**
     * @QueryParameter("OrganizationId")
     * @var string|null $organizationId Filters by OrganizationId if set. If not set all organizations are considered.
    */
    public ?string $organizationId = null;
    
    /**
     * @QueryParameter("StartDate")
     * @var DateTime|null $startDate Gets or sets the start date.
    */
    public ?DateTime $startDate = null;
    
    /**
     * @QueryParameter("State")
     * @var InvoiceState|null $state Filters invoices by state. Supports combined flag values for OR-semantics.E.g. `State=Issued,Paid` returns invoices in either the Infosoft.S4.Invoice.Contracts.ReadModel.InvoiceState.Issued or Infosoft.S4.Invoice.Contracts.ReadModel.InvoiceState.Paid state.Note: invoice states are never combined in storage; each invoice always has exactly one state.The combined flag value is only used as a filter expression.Infosoft.S4.Invoice.Contracts.ReadModel.InvoiceState.Open is handled with exact equality and will never be includedwhen filtering on any other state value, even if combined.
    */
    public ?InvoiceState $state = null;
    
    /**
     * @QueryParameter("SubscriberId")
     * @var string|null $subscriberId Filters on the subscriber Id.
    */
    public ?string $subscriberId = null;
    
    /**
     * @QueryParameter("TrackingId")
     * @var string|null $trackingId Filters on the external tracking Id.
    */
    public ?string $trackingId = null;
    
    /**
     * Instantiates a new InvoiceRequestBuilderGetQueryParameters and sets the default values.
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
    */
    public function __construct(?string $buyerReference = null, ?string $creditNoteId = null, ?DateTime $endDate = null, ?string $externalInvoiceIdentifier = null, ?string $invoiceNumber = null, ?DateTime $maximumIssuedOn = null, ?DateTime $minimumIssuedOn = null, ?string $orderReference = null, ?string $organizationId = null, ?DateTime $startDate = null, ?InvoiceState $state = null, ?string $subscriberId = null, ?string $trackingId = null) {
        $this->buyerReference = $buyerReference;
        $this->creditNoteId = $creditNoteId;
        $this->endDate = $endDate;
        $this->externalInvoiceIdentifier = $externalInvoiceIdentifier;
        $this->invoiceNumber = $invoiceNumber;
        $this->maximumIssuedOn = $maximumIssuedOn;
        $this->minimumIssuedOn = $minimumIssuedOn;
        $this->orderReference = $orderReference;
        $this->organizationId = $organizationId;
        $this->startDate = $startDate;
        $this->state = $state;
        $this->subscriberId = $subscriberId;
        $this->trackingId = $trackingId;
    }

}
