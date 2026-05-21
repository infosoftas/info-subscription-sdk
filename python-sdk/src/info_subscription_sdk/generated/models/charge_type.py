from enum import Enum

class ChargeType(str, Enum):
    None_ = "None",
    PartialPayment = "PartialPayment",
    DemandNotSettled = "DemandNotSettled",
    Balance = "Balance",
    TransferedFromCreditedDemand = "TransferedFromCreditedDemand",
    Refund = "Refund",
    Transferred = "Transferred",
    Purchase = "Purchase",

