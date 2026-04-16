import { BaseBearerTokenAuthenticationProvider } from '@microsoft/kiota-abstractions';
import { FetchRequestAdapter, HttpClient, MiddlewareFactory } from '@microsoft/kiota-http-fetchlibrary';
import { ConfidentialClientApplication } from '@azure/msal-node';
import { createInfoSubscription, type InfoSubscription } from './generated/infoSubscription.js';
import { ConfidentialClientAuthenticationProvider } from './confidentialClientAuthenticationProvider.js';
import { TenantHeaderMiddleware } from './tenantHeaderMiddleware.js';
import type { InfoSubscriptionSettings } from './infoSubscriptionSettings.js';

const DEFAULT_API_ENDPOINT = 'https://api.info-subscription.com';
const DEFAULT_SIGN_IN_POLICY = 'B2C_1A_V2SIGNIN';
const DEFAULT_SCOPE_NAME = 'api';

/**
 * Creates a configured {@link InfoSubscription} client.
 *
 * @example
 * ```typescript
 * const client = createInfoSubscriptionClient({
 *   tenantId: 'your-tenant-guid',
 *   auth: {
 *     clientId: 'your-client-id',
 *     clientSecret: 'your-client-secret',
 *     b2cTenantName: 'yourb2ctenant',
 *   },
 * });
 * const products = await client.product.get();
 * ```
 */
export function createInfoSubscriptionClient(settings: InfoSubscriptionSettings): InfoSubscription {
  const { auth, tenantId, apiEndpoint = DEFAULT_API_ENDPOINT } = settings;
  const policy = auth.signInPolicy ?? DEFAULT_SIGN_IN_POLICY;
  const scopeName = auth.scopeName ?? DEFAULT_SCOPE_NAME;

  const authority = `https://${auth.b2cTenantName}.b2clogin.com/tfp/${auth.b2cTenantName}.onmicrosoft.com/${policy}`;
  const scopes = [`https://${auth.b2cTenantName}.onmicrosoft.com/${scopeName}/.default`];

  const msalApp = new ConfidentialClientApplication({
    auth: {
      clientId: auth.clientId,
      clientSecret: auth.clientSecret,
      authority,
      knownAuthorities: [`${auth.b2cTenantName}.b2clogin.com`],
    },
  });

  const tokenProvider = new ConfidentialClientAuthenticationProvider(msalApp, scopes);
  const authProvider = new BaseBearerTokenAuthenticationProvider(tokenProvider);

  // Inject the tenant header before the standard Kiota middleware chain
  const httpClient = new HttpClient(
    undefined,
    new TenantHeaderMiddleware(tenantId),
    ...MiddlewareFactory.getDefaultMiddlewares(),
  );

  const adapter = new FetchRequestAdapter(authProvider, undefined, undefined, httpClient);
  adapter.baseUrl = apiEndpoint;

  return createInfoSubscription(adapter);
}
