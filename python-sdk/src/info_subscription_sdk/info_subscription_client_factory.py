from __future__ import annotations

import msal
from kiota_abstractions.authentication import BaseBearerTokenAuthenticationProvider
from kiota_http.httpx_request_adapter import HttpxRequestAdapter
from kiota_http.kiota_client_factory import KiotaClientFactory

from .confidential_client_authentication_provider import ConfidentialClientAuthenticationProvider
from .generated.info_subscription import InfoSubscription
from .info_subscription_settings import InfoSubscriptionSettings
from .tenant_header_middleware import TenantHeaderMiddleware


def create_info_subscription_client(settings: InfoSubscriptionSettings) -> InfoSubscription:
    """Create a fully configured :class:`InfoSubscription` client.

    Example::

        from info_subscription_sdk import create_info_subscription_client, InfoSubscriptionSettings, B2CAuthSettings
        import asyncio

        client = create_info_subscription_client(
            InfoSubscriptionSettings(
                tenant_id="your-tenant-guid",
                auth=B2CAuthSettings(
                    client_id="your-client-id",
                    client_secret="your-client-secret",
                    b2c_tenant_name="yourb2ctenant",
                ),
            )
        )

        async def main():
            products = await client.product.get()

        asyncio.run(main())
    """
    auth = settings.auth
    authority = (
        f"https://{auth.b2c_tenant_name}.b2clogin.com"
        f"/tfp/{auth.b2c_tenant_name}.onmicrosoft.com/{auth.sign_in_policy}"
    )
    scopes = [f"https://{auth.b2c_tenant_name}.onmicrosoft.com/{auth.scope_name}/.default"]

    msal_app = msal.ConfidentialClientApplication(
        client_id=auth.client_id,
        client_credential=auth.client_secret,
        authority=authority,
    )

    token_provider = ConfidentialClientAuthenticationProvider(msal_app, scopes)
    auth_provider = BaseBearerTokenAuthenticationProvider(token_provider)

    # Inject tenant header before the standard Kiota middleware chain
    middleware = [TenantHeaderMiddleware(settings.tenant_id), *KiotaClientFactory.get_default_middleware()]
    http_client = KiotaClientFactory.create_with_custom_middleware(middleware)

    adapter = HttpxRequestAdapter(auth_provider, http_client=http_client, base_url=settings.api_endpoint)

    return InfoSubscription(adapter)
