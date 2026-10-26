<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MatchingType extends Enum {
    public const UNKNOWN = "Unknown";
    public const NO_INVOICE_MATCH = "NoInvoiceMatch";
    public const USE_EXTERNAL_IDENTIFIER = "UseExternalIdentifier";
    public const USE_SUBSCRIBER_AND_INVOICE = "UseSubscriberAndInvoice";
    public const USE_SUBSCRIBER_FROM_EXTERNAL_IDENTIFIER = "UseSubscriberFromExternalIdentifier";
    public const USE_BILLING_ACCOUNT = "UseBillingAccount";
}
