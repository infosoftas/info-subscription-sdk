This project serves as a class library containing a .NET SDK/API Client for the INFO-Subscription API.

To simplify things the main client is generated using Kiota based on the OpenAPI specification (swagger.json) provided by the INFO-Subscription API.

Only a subset of the API is currently generated to keep things manageable. 
If you need additional endpoints please open an issue or a pull request.

## Getting started

1. Install the package via NuGet:
```shell
dotnet add package infosoft.info.subscription.dotnet
```

2. Wire up the client to the DI container (based on configured values in appSettings.json or similar)

```csharp
builder.Services.AddInfoSubscription(builder.Configuration)
```

3. Call the client from your code:

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

The sample in the Github repository shows a more complete example for a console application.


## Feedback and Contributions

Feel free to register issues or create Pull Requests on GitHub if you want to contribute or have suggestions for improvements.

## Support

This is an UNSUPPORTED package, and it is provided "as-is" without any warranties. 
If you need official support for the platform/api, please contact Infosoft support.