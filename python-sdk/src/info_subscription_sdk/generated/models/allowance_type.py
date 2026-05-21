from enum import Enum

class AllowanceType(str, Enum):
    None_ = "None",
    ExtraPayment = "ExtraPayment",
    DemandCredited = "DemandCredited",
    Balance = "Balance",
    AllowanceSplit = "AllowanceSplit",
    PaymentDemandSettled = "PaymentDemandSettled",
    Transferred = "Transferred",

