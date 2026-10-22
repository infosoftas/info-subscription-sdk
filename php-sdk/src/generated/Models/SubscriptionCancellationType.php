<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SubscriptionCancellationType extends Enum {
    public const REGULAR = "Regular";
    public const AUTOMATIC = "Automatic";
    public const PAYMENT_STOP = "PaymentStop";
    public const PAUSE = "Pause";
    public const PLAN_CHANGE = "PlanChange";
    public const DELETE = "Delete";
}
