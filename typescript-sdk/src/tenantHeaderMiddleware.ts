import { type RequestOption } from '@microsoft/kiota-abstractions';
import { type Middleware } from '@microsoft/kiota-http-fetchlibrary';

/**
 * Kiota middleware that injects the `S4-TenantId` header into every outgoing request.
 * Mirrors the DefaultRequestHeaders configuration on the .NET HttpClient.
 */
export class TenantHeaderMiddleware implements Middleware {
  next: Middleware | undefined;

  constructor(private readonly tenantId: string) {}

  async execute(
    url: string,
    requestInit: RequestInit,
    requestOptions?: Record<string, RequestOption>,
  ): Promise<Response> {
    const headers = new Headers(requestInit.headers);
    headers.set('S4-TenantId', this.tenantId);
    requestInit.headers = headers;

    if (!this.next) {
      throw new Error('TenantHeaderMiddleware: no next middleware configured.');
    }
    return this.next.execute(url, requestInit, requestOptions);
  }
}
