from enum import Enum

class BillingFlow(str, Enum):
    Default = "Default",
    None_ = "None",
    Recurring = "Recurring",
    Initial = "Initial",

