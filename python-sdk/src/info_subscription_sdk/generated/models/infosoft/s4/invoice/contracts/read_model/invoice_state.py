from enum import Enum

class InvoiceState(str, Enum):
    Open = "Open",
    Issued = "Issued",
    Credited = "Credited",
    Paid = "Paid",
    WrittenOff = "WrittenOff",

