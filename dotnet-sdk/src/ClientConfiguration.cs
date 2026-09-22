namespace Info.Subscription.Dotnet;

using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Identity.Client;
using Microsoft.Kiota.Abstractions.Authentication;
using Microsoft.Kiota.Http.HttpClientLibrary;
using Polly;

/// <summary>
/// Extensions for configuring the API client and default m2m authentication.
/// </summary>
public static class ClientConfiguration
{
    /// <summary>How many failed request attempts until propagating the failure.</summary>
    private const int PollyRetryCount = 5;

    public static IServiceCollection AddInfoSubscription(this IServiceCollection services, IConfiguration configuration)
    {
        AddApiAuthentication(services, configuration);
        AddClientFactory(services, configuration);

        return services;
    }

    public static IServiceCollection AddClientFactory(this IServiceCollection services, IConfiguration configuration)
    {
        var settings = configuration.GetSection(InfoSubscriptionSettingsOptions.SectionName)?.Get<InfoSubscriptionSettingsOptions>() ?? new InfoSubscriptionSettingsOptions();
        services.AddKiotaHandlers();
        services.AddHttpClient<InfoSubscriptionClientFactory>((provider, client) =>
        {
            client.BaseAddress = settings.ApiEndpoint;
            client.DefaultRequestHeaders.Add("S4-TenantId", settings.TenantId.ToString());
        })
        .AddDefaultLogger()
        .AddTransientHttpErrorPolicy(p => p.RetryAsync(PollyRetryCount))
        .AttachKiotaHandlers();


        services.AddTransient(sp => sp.GetRequiredService<InfoSubscriptionClientFactory>().GetClient());


        return services;
    }

    public static IServiceCollection AddApiAuthentication(this IServiceCollection services, IConfiguration configuration)
    {
        var client = configuration.GetSection("Adb2cSettings:ClientId").Get<string?>();
        var tenantName = configuration.GetSection("Adb2cSettings:B2CTenantName").Get<string?>() ?? "prodlogins4";
        var secret = configuration.GetSection("Adb2cSettings:ClientSecret").Get<string?>();
        var flowName = configuration.GetSection("Adb2cSettings:SignInPolicy").Get<string?>() ?? "B2C_1A_V2SIGNIN";
        var apiName = configuration.GetSection("Adb2cSettings:ScopeName").Get<string?>() ?? "api";

        string[] scopes = [$"https://{tenantName}.onmicrosoft.com/{apiName}/.default"];

        var authority = $"https://{tenantName}.b2clogin.com/tfp/{tenantName}.onmicrosoft.com/{flowName}";
        var app = ConfidentialClientApplicationBuilder.Create(client).WithClientSecret(secret).WithB2CAuthority(authority).Build();

        services.AddSingleton<IAccessTokenProvider, ConfidentialClientAuthenticationProvider>((sp) => new ConfidentialClientAuthenticationProvider(app, scopes));
        services.AddSingleton<IAuthenticationProvider, BaseBearerTokenAuthenticationProvider>();

        return services;
    }

    /// <summary>
    /// Adds the Kiota handlers to the service collection.
    /// </summary>
    /// <param name="services"><see cref="IServiceCollection"/> to add the services to</param>
    /// <returns><see cref="IServiceCollection"/> as per convention</returns>
    /// <remarks>The handlers are added to the http client by the <see cref="AttachKiotaHandlers(IHttpClientBuilder)"/> call, which requires them to be pre-registered in DI</remarks>
    public static IServiceCollection AddKiotaHandlers(this IServiceCollection services)
    {
        // Dynamically load the Kiota handlers from the Client Factory
        var kiotaHandlers = KiotaClientFactory.GetDefaultHandlerActivatableTypes();
        // And register them in the DI container
        foreach (var handler in kiotaHandlers)
        {
            services.AddTransient(handler);
        }

        return services;
    }

    /// <summary>
    /// Adds the Kiota handlers to the http client builder.
    /// </summary>
    /// <param name="builder"></param>
    /// <returns></returns>
    /// <remarks>
    /// Requires the handlers to be registered in DI by <see cref="AddKiotaHandlers(IServiceCollection)"/>.
    /// The order in which the handlers are added is important, as it defines the order in which they will be executed.
    /// </remarks>
    public static IHttpClientBuilder AttachKiotaHandlers(this IHttpClientBuilder builder)
    {
        // Dynamically load the Kiota handlers from the Client Factory
        var kiotaHandlers = KiotaClientFactory.GetDefaultHandlerActivatableTypes();
        // And attach them to the http client builder
        foreach (var handler in kiotaHandlers)
        {
            builder.AddHttpMessageHandler((sp) => (DelegatingHandler)sp.GetRequiredService(handler));
        }

        return builder;
    }
}