<?php

namespace Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Invoice\Contracts\ReadModel;

use Microsoft\Kiota\Abstractions\Enum;

class InvoiceState extends Enum {
    public const OPEN = "Open";
    public const ISSUED = "Issued";
    public const CREDITED = "Credited";
    public const PAID = "Paid";
    public const WRITTEN_OFF = "WrittenOff";
}
