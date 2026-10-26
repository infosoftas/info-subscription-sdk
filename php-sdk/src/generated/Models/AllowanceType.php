<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AllowanceType extends Enum {
    public const NONE = "None";
    public const EXTRA_PAYMENT = "ExtraPayment";
    public const DEMAND_CREDITED = "DemandCredited";
    public const BALANCE = "Balance";
    public const ALLOWANCE_SPLIT = "AllowanceSplit";
    public const PAYMENT_DEMAND_SETTLED = "PaymentDemandSettled";
    public const TRANSFERRED = "Transferred";
}
