from enum import Enum

class SubscriptionCancellationType(str, Enum):
    Regular = "Regular",
    Automatic = "Automatic",
    PaymentStop = "PaymentStop",
    Pause = "Pause",
    PlanChange = "PlanChange",
    Delete = "Delete",

