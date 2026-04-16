from enum import Enum

class InitialPackageTermTypes(str, Enum):
    FixedDate = "FixedDate",
    FixedTimeSpan = "FixedTimeSpan",
    RemainingOfMonth = "RemainingOfMonth",
    RemainingOfYear = "RemainingOfYear",

