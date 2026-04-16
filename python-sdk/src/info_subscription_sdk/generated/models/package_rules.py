from enum import Enum

class PackageRules(str, Enum):
    FixedNumberOfProducts = "FixedNumberOfProducts",
    FreeNumberOfProducts = "FreeNumberOfProducts",
    FixedPrice = "FixedPrice",
    DiscountPercent = "DiscountPercent",
    DiscountAmount = "DiscountAmount",
    DiscountPercentForNumberOfProducts = "DiscountPercentForNumberOfProducts",
    AutomaticStop = "AutomaticStop",
    AllowPriceOverride = "AllowPriceOverride",

