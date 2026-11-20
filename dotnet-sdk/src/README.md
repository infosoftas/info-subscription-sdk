This project serves as a class library containing a .NET SDK/API Client for the INFO-Subscription API.

To simplify things the main client is generated using Kiota based on the OpenAPI specification (swagger.json) provided by the INFO-Subscription API.

Only a subset of the API is currently generated to keep things manageable. 
If you need additional endpoints please open an issue or a pull request.

## Getting started

1. Install the package via NuGet:
```shell
dotnet add package infosoft.info.subscription.dotnet
```

2. Add the required settings to `appsettings.json` (or configure the same values in environment variables / your hosting config):

```json
{
  "InfoSubscription": {
    "TenantId": "00000000-0000-0000-0000-000000000000",
    "ApiEndpoint": "https://api.info-subscription.com"
  },
  "Adb2cSettings": {
    "ClientId": "00000000-0000-0000-0000-000000000000",
    "ClientSecret": "your-b2c-client-secret",
    "B2CTenantName": "prodlogins4",
    "SignInPolicy": "B2C_1A_V2SIGNIN",
    "ScopeName": "api"
  }
}
```

`B2CTenantName` defaults to `prodlogins4` if omitted, but it is shown here explicitly so the tenant and API audience are obvious.

3. Wire up the client to the DI container:

```csharp
builder.Services.AddInfoSubscription(builder.Configuration);
```

4. Call the client from your code:

```csharp
public class MyService
{
    private readonly InfoSubscription client;

    public MyService(InfoSubscription client)
    {
        this.client = client;
    }

    public async Task DoSomethingAsync()
    {
        var products = await client.Product.GetAsync();
        // Do something with the Products
    }
}
```

The sample in the GitHub repository shows a more complete example for a console application.

### Resolve an external identity to products

Use the identity-provider ID configured in S4 together with the provider-specific
external identifier (for example, an `oid` or `sub` claim). The identifier is passed
as a path parameter and is encoded by Kiota.

```csharp
var products = await client.Authorizations
    .Identityprovider[identityProviderId]
    .User[externalId]
    .GetAsync(cancellationToken: cancellationToken);

foreach (var product in products ?? [])
{
    // Apply your application's access policy using the resolved products.
}
```

An empty collection means that no products are currently resolved. Authentication,
validation, and upstream failures are reported as exceptions rather than an empty result.
This endpoint resolves products; it does not provide a universal access decision or
per-source product attribution.

## Configuration reference

| Section / property | Required | Default | Description |
|---|---|---|---|
| `InfoSubscription:TenantId` | ✅ | — | Tenant GUID sent as `S4-TenantId` on each request |
| `InfoSubscription:ApiEndpoint` | | `https://api.info-subscription.com` | Base API URL used by the generated client |
| `Adb2cSettings:ClientId` | ✅ | — | Azure AD B2C application (client) ID |
| `Adb2cSettings:ClientSecret` | ✅ | — | Azure AD B2C client secret |
| `Adb2cSettings:B2CTenantName` | | `prodlogins4` | B2C tenant name, e.g. `prodlogins4` for `prodlogins4.b2clogin.com` |
| `Adb2cSettings:SignInPolicy` | | `B2C_1A_V2SIGNIN` | B2C sign-in policy |
| `Adb2cSettings:ScopeName` | | `api` | API scope name |

## Feedback and Contributions

Feel free to register issues or create Pull Requests on GitHub if you want to contribute or have suggestions for improvements.

## Support

This is an UNSUPPORTED package, and it is provided "as-is" without any warranties. 
If you need official support for the platform/api, please contact Infosoft support.