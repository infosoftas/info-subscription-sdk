from enum import Enum

class ContractType(str, Enum):
    FixedDate = "FixedDate",
    NumberOfFrequencies = "NumberOfFrequencies",

