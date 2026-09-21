from enum import Enum

class PaymentMethods(str, Enum):
    Invoice = "Invoice",
    Vipps = "Vipps",
    AvtaleGiro = "AvtaleGiro",
    Email = "Email",
    EHF = "EHF",
    MobilePay = "MobilePay",
    OIO = "OIO",
    SwedbankPay = "SwedbankPay",
    BetalingsService = "BetalingsService",
    Autogiro = "Autogiro",
    EFaktura = "eFaktura",
    Mollie = "Mollie",

