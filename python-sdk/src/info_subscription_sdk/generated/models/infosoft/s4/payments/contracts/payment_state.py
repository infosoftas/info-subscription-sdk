from enum import Enum

class PaymentState(str, Enum):
    AwaitingIdentification = "AwaitingIdentification",
    AwaitingApproval = "AwaitingApproval",
    Completed = "Completed",

