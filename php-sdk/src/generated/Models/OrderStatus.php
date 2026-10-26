<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OrderStatus extends Enum {
    public const IN_PROGRESS = "InProgress";
    public const COMPLETED = "Completed";
    public const CANCELLED = "Cancelled";
    public const REJECTED = "Rejected";
}
