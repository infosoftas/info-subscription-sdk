from enum import Enum

class OrderStatus(str, Enum):
    InProgress = "InProgress",
    Completed = "Completed",
    Cancelled = "Cancelled",
    Rejected = "Rejected",

