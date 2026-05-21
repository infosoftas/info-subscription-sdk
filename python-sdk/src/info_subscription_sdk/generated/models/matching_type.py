from enum import Enum

class MatchingType(str, Enum):
    Unknown = "Unknown",
    NoInvoiceMatch = "NoInvoiceMatch",
    UseExternalIdentifier = "UseExternalIdentifier",
    UseSubscriberAndInvoice = "UseSubscriberAndInvoice",
    UseSubscriberFromExternalIdentifier = "UseSubscriberFromExternalIdentifier",
    UseBillingAccount = "UseBillingAccount",

