from enum import Enum

class BillingFrequencyUnits(str, Enum):
    TimeSpan = "TimeSpan",
    Months = "Months",
    Items = "Items",

