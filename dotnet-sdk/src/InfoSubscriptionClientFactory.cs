namespace Info.Subscription.Dotnet;

using Microsoft.Kiota.Abstractions.Authentication;
using Microsoft.Kiota.Http.HttpClientLibrary;

/// <summary>An information subscription client factory.</summary>
public class InfoSubscriptionClientFactory
{
    private readonly IAuthenticationProvider authenticationProvider;
    private readonly HttpClient httpClient;

    public InfoSubscriptionClientFactory(HttpClient httpClient, IAuthenticationProvider authenticationProvider)
    {
        this.authenticationProvider = authenticationProvider;
        this.httpClient = httpClient;
    }

    public InfoSubscription GetClient()
    {
        return new InfoSubscription(new HttpClientRequestAdapter(authenticationProvider, httpClient: httpClient));
    }
}