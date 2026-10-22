<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PackageRules extends Enum {
    public const FIXED_NUMBER_OF_PRODUCTS = "FixedNumberOfProducts";
    public const FREE_NUMBER_OF_PRODUCTS = "FreeNumberOfProducts";
    public const FIXED_PRICE = "FixedPrice";
    public const DISCOUNT_PERCENT = "DiscountPercent";
    public const DISCOUNT_AMOUNT = "DiscountAmount";
    public const DISCOUNT_PERCENT_FOR_NUMBER_OF_PRODUCTS = "DiscountPercentForNumberOfProducts";
    public const AUTOMATIC_STOP = "AutomaticStop";
    public const ALLOW_PRICE_OVERRIDE = "AllowPriceOverride";
}
