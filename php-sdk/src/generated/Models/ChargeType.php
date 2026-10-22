<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChargeType extends Enum {
    public const NONE = "None";
    public const PARTIAL_PAYMENT = "PartialPayment";
    public const DEMAND_NOT_SETTLED = "DemandNotSettled";
    public const BALANCE = "Balance";
    public const TRANSFERED_FROM_CREDITED_DEMAND = "TransferedFromCreditedDemand";
    public const REFUND = "Refund";
    public const TRANSFERRED = "Transferred";
    public const PURCHASE = "Purchase";
}
