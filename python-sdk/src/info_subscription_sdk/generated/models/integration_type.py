from enum import Enum

class IntegrationType(str, Enum):
    Auth0 = "Auth0",
    AzureADB2C = "AzureADB2C",
    SiteAccess = "SiteAccess",
    External = "External",

