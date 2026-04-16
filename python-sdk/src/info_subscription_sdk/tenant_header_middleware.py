from __future__ import annotations

import httpx
from kiota_http.middleware import BaseMiddleware


class TenantHeaderMiddleware(BaseMiddleware):
    """Kiota middleware that injects the ``S4-TenantId`` header into every outgoing request.

    Mirrors the DefaultRequestHeaders configuration on the .NET HttpClient.
    """

    def __init__(self, tenant_id: str) -> None:
        super().__init__()
        self._tenant_id = tenant_id

    async def send(
        self,
        request: httpx.Request,
        transport: httpx.AsyncBaseTransport,
    ) -> httpx.Response:
        request.headers["S4-TenantId"] = self._tenant_id
        return await super().send(request, transport)
