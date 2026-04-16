from enum import Enum

class BillingFrequencies(str, Enum):
    OneDay = "OneDay",
    TwoDays = "TwoDays",
    SevenDays = "SevenDays",
    TwoWeeks = "TwoWeeks",
    ThreeWeeks = "ThreeWeeks",
    FourWeeks = "FourWeeks",
    ThirtyDays = "ThirtyDays",
    SixWeeks = "SixWeeks",
    EightWeeks = "EightWeeks",
    OneMonth = "OneMonth",
    TwoMonths = "TwoMonths",
    ThreeMonths = "ThreeMonths",
    FourMonths = "FourMonths",
    SixMonths = "SixMonths",
    TwelveMonths = "TwelveMonths",
    TwentyFourMonths = "TwentyFourMonths",
    Editions = "Editions",

