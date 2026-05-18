from enum import Enum

class OrderPlanSourceType(str, Enum):
    TemplatePackage = "TemplatePackage",
    InlinePlan = "InlinePlan",
    ExistingPlan = "ExistingPlan",

