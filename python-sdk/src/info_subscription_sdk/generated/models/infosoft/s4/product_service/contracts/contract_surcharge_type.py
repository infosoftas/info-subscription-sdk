from enum import Enum

class ContractSurchargeType(str, Enum):
    None_ = "None",
    Fixed = "Fixed",
    Calculated = "Calculated",

