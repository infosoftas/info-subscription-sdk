namespace Info.Subscription.Dotnet;

/// <summary>Options for configuring the InfoSubscription SDK/Api Client.</summary>
public class InfoSubscriptionSettingsOptions
{
    /// <summary>(Immutable) Default Name of the settings section in AppSettings.json or similar cfg.</summary>
    public const string SectionName = "InfoSubscription";

    /// <summary>The API endpoint to use, typically https://api.info-subscription.com (the default if not given in config).</summary>
    public Uri ApiEndpoint { get; set; } = new Uri("https://api.info-subscription.com");

    /// <summary>The identifier of the tenant.</summary>
    public Guid TenantId { get; set; }
}
