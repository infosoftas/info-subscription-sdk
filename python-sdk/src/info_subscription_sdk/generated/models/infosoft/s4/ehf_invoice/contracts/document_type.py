from enum import Enum

class DocumentType(str, Enum):
    Invoice = "Invoice",
    CreditNote = "CreditNote",
    All = "All",

