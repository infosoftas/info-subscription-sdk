<?php

namespace Infosoft\InfoSubscription\Generated\Reminder;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReminderRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReminderRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReminderRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReminderRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReminderRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReminderRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReminderRequestBuilderGetQueryParameters.
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
     * @return ReminderRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $buyerReference = null, ?DateTime $endDate = null, ?string $externalInvoiceIdentifier = null, ?string $invoiceId = null, ?string $invoiceNumber = null, ?DateTime $maximumIssuedOn = null, ?DateTime $minimumIssuedOn = null, ?string $orderReference = null, ?string $organizationId = null, ?int $reminderNumber = null, ?DateTime $startDate = null, ?string $subscriberId = null, ?string $trackingId = null): ReminderRequestBuilderGetQueryParameters {
        return new ReminderRequestBuilderGetQueryParameters($buyerReference, $endDate, $externalInvoiceIdentifier, $invoiceId, $invoiceNumber, $maximumIssuedOn, $minimumIssuedOn, $orderReference, $organizationId, $reminderNumber, $startDate, $subscriberId, $trackingId);
    }

}
