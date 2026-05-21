from enum import Enum

class DemandType(str, Enum):
    Unknown = "Unknown",
    Account = "Account",
    Order = "Order",
    Subscription = "Subscription",
    EnterprisePlan = "EnterprisePlan",

