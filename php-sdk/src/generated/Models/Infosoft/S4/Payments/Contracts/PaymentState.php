<?php

namespace Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Payments\Contracts;

use Microsoft\Kiota\Abstractions\Enum;

class PaymentState extends Enum {
    public const AWAITING_IDENTIFICATION = "AwaitingIdentification";
    public const AWAITING_APPROVAL = "AwaitingApproval";
    public const COMPLETED = "Completed";
}
