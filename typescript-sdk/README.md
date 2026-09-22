# @infosoftas/info-subscription-ts

A TypeScript SDK for the [INFO-Subscription API](https://api.info-subscription.com), generated with [Microsoft Kiota](https://learn.microsoft.com/en-us/openapi/kiota/) and wrapped with Azure AD B2C machine-to-machine authentication.

## Installation

```sh
npm install @infosoftas/info-subscription-ts
```

## Getting started

### 1. Create the client

Call `createInfoSubscriptionClient` with your Azure AD B2C credentials and tenant configuration:

```typescript
import { createInfoSubscriptionClient } from '@infosoftas/info-subscription-ts';

const client = createInfoSubscriptionClient({
  tenantId: 'your-tenant-guid',           // sent as S4-TenantId on every request
  auth: {
    clientId: 'your-b2c-client-id',
    clientSecret: 'your-b2c-client-secret',
    b2cTenantName: 'prodlogins4',          // default if omitted; uses prodlogins4.b2clogin.com
    // signInPolicy: 'B2C_1A_V2SIGNIN',   // optional, this is the default
    // scopeName: 'api',                  // optional, this is the default
  },
  // apiEndpoint: 'https://api.info-subscription.com', // optional, this is the default
});
```

If you do not specify `auth.b2cTenantName`, the SDK uses `prodlogins4` automatically.

### 2. Use the client

```typescript
// List products
const products = await client.product.get();
for (const p of products ?? []) {
  console.log(`${p.name} (${p.id})`);
}

// Get a subscription
const subscription = await client.subscription.get();

// Get an order
const order = await client.order.get();
```

## Configuration reference

| Property | Type | Required | Default | Description |
|---|---|---|---|---|
| `tenantId` | `string` | ✅ | — | Tenant GUID sent as `S4-TenantId` on every request |
| `auth.clientId` | `string` | ✅ | — | Azure AD B2C application (client) ID |
| `auth.clientSecret` | `string` | ✅ | — | Azure AD B2C client secret |
| `auth.b2cTenantName` | `string` | | `"prodlogins4"` | B2C tenant name (e.g. `"mycompany"` or `"prodlogins4"`) |
| `auth.signInPolicy` | `string` | | `"B2C_1A_V2SIGNIN"` | B2C sign-in policy |
| `auth.scopeName` | `string` | | `"api"` | API scope name |
| `apiEndpoint` | `string` | | `"https://api.info-subscription.com"` | API base URL |

## Loading config from environment variables

For Node.js applications, a typical pattern is to read settings from environment variables:

```typescript
const client = createInfoSubscriptionClient({
  tenantId: process.env.S4_TENANT_ID!,
  auth: {
    clientId: process.env.ADB2C_CLIENT_ID!,
    clientSecret: process.env.ADB2C_CLIENT_SECRET!,
    b2cTenantName: process.env.ADB2C_TENANT_NAME!,
  },
});
```

## Advanced: bringing your own authentication

If you need to swap out the Azure AD B2C authentication (e.g. for testing or a different identity provider), you can construct the adapter directly:

```typescript
import {
  BaseBearerTokenAuthenticationProvider,
} from '@microsoft/kiota-abstractions';
import { FetchRequestAdapter } from '@microsoft/kiota-http-fetchlibrary';
import { createInfoSubscription } from '@infosoftas/info-subscription-ts/generated/infoSubscription.js';

const authProvider = new BaseBearerTokenAuthenticationProvider(myCustomTokenProvider);
const adapter = new FetchRequestAdapter(authProvider);
adapter.baseUrl = 'https://api.info-subscription.com';

const client = createInfoSubscription(adapter);
```

## Project structure

```
src/
  generated/                        # Kiota-generated — do not edit manually
  infoSubscriptionSettings.ts       # Settings interface
  confidentialClientAuthenticationProvider.ts  # MSAL B2C token provider
  tenantHeaderMiddleware.ts         # Injects S4-TenantId header
  infoSubscriptionClientFactory.ts  # Main factory function
  index.ts                          # Public API barrel export
```

## Feedback and contributions

Open an issue or pull request on [GitHub](https://github.com/infosoftas/info-subscription-sdk).

## Support

This is an **unsupported** package provided as-is without any warranties. For official API support, contact Infosoft support.
