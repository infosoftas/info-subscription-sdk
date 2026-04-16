from __future__ import annotations
from dataclasses import dataclass, field


@dataclass
class B2CAuthSettings:
    """Azure AD B2C application credentials for machine-to-machine authentication."""

    client_id: str
    """Azure AD B2C application (client) ID."""

    client_secret: str
    """Azure AD B2C client secret."""

    b2c_tenant_name: str
    """Azure AD B2C tenant name (e.g. ``"mycompany"`` for ``mycompany.b2clogin.com``)."""

    sign_in_policy: str = "B2C_1A_V2SIGNIN"
    """B2C sign-in policy name."""

    scope_name: str = "api"
    """API scope name (the part before ``/.default``)."""


@dataclass
class InfoSubscriptionSettings:
    """Options for configuring the InfoSubscription SDK client."""

    tenant_id: str
    """Tenant GUID, sent as the ``S4-TenantId`` request header on every request."""

    auth: B2CAuthSettings
    """Azure AD B2C application credentials."""

    api_endpoint: str = "https://api.info-subscription.com"
    """API base URL."""
