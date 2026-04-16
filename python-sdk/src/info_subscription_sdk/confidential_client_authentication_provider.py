from __future__ import annotations
from typing import Any

from kiota_abstractions.authentication import AccessTokenProvider, AllowedHostsValidator
import msal


class ConfidentialClientAuthenticationProvider(AccessTokenProvider):
    """Kiota AccessTokenProvider that acquires tokens via an MSAL ConfidentialClientApplication.

    Mirrors the .NET ConfidentialClientAuthenticationProvider.
    """

    def __init__(self, token_client: msal.ConfidentialClientApplication, scopes: list[str]) -> None:
        self._token_client = token_client
        self._scopes = scopes
        self._validator = AllowedHostsValidator()

    async def get_authorization_token(
        self,
        uri: str,
        additional_authentication_context: dict[str, Any] = {},
    ) -> str:
        result = self._token_client.acquire_token_for_client(scopes=self._scopes)
        if not result or "access_token" not in result:
            error = result.get("error_description", "unknown error") if result else "no response"
            raise RuntimeError(f"Failed to acquire access token from Azure AD B2C: {error}")
        return result["access_token"]

    def get_allowed_hosts_validator(self) -> AllowedHostsValidator:
        return self._validator
