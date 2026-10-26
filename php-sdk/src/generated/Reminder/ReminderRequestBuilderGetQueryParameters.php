<?php

namespace Infosoft\InfoSubscription\Generated\Reminder;

use DateTime;

/**
 * Get reminders matching a given query filter.
*/
class ReminderRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("BuyerReference")
     * @var string|null $buyerReference Gets or sets the buyer reference.
    */
    public ?string $buyerReference = null;
    
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
     * @QueryParameter("InvoiceId")
     * @var string|null $invoiceId Gets or sets the identifier of the invoice.
    */
    public ?string $invoiceId = null;
    
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
     * @QueryParameter("ReminderNumber")
     * @var int|null $reminderNumber Gets or sets the reminder number.
    */
    public ?int $reminderNumber = null;
    
    /**
     * @QueryParameter("StartDate")
     * @var DateTime|null $startDate Gets or sets the start date.
    */
    public ?DateTime $startDate = null;
    
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
     * Instantiates a new ReminderRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $buyerReference Gets or sets the buyer reference.
     * @param DateTime|null $endDate Gets or sets the end date.
     * @param string|null $externalInvoiceIdentifier Filters on the external identifier, uses exact matching. For Reminders this refers to the original Invoice.
     * @param string|null $invoiceId Gets or sets the identifier of the invoice.
     * @param string|null $invoiceNumber Filters on the invoice number. For credit notes and reminders this refers to the Original Invoice Number
     * @param DateTime|null $maximumIssuedOn The max date that the Issued time should be within range of.
     * @param DateTime|null $minimumIssuedOn The minimum date that the Issued time should be within range of. For Reminder this is the ReminderDate.
     * @param string|null $orderReference Gets or sets the order reference.
     * @param string|null $organizationId Filters by OrganizationId if set. If not set all organizations are considered.
     * @param int|null $reminderNumber Gets or sets the reminder number.
     * @param DateTime|null $startDate Gets or sets the start date.
     * @param string|null $subscriberId Filters on the subscriber Id.
     * @param string|null $trackingId Filters on the external tracking Id.
    */
    public function __construct(?string $buyerReference = null, ?DateTime $endDate = null, ?string $externalInvoiceIdentifier = null, ?string $invoiceId = null, ?string $invoiceNumber = null, ?DateTime $maximumIssuedOn = null, ?DateTime $minimumIssuedOn = null, ?string $orderReference = null, ?string $organizationId = null, ?int $reminderNumber = null, ?DateTime $startDate = null, ?string $subscriberId = null, ?string $trackingId = null) {
        $this->buyerReference = $buyerReference;
        $this->endDate = $endDate;
        $this->externalInvoiceIdentifier = $externalInvoiceIdentifier;
        $this->invoiceId = $invoiceId;
        $this->invoiceNumber = $invoiceNumber;
        $this->maximumIssuedOn = $maximumIssuedOn;
        $this->minimumIssuedOn = $minimumIssuedOn;
        $this->orderReference = $orderReference;
        $this->organizationId = $organizationId;
        $this->reminderNumber = $reminderNumber;
        $this->startDate = $startDate;
        $this->subscriberId = $subscriberId;
        $this->trackingId = $trackingId;
    }

}
