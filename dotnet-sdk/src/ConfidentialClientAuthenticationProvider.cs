namespace Info.Subscription.Dotnet;

using System;
using System.Collections.Generic;
using Microsoft.Identity.Client;
using Microsoft.Kiota.Abstractions.Authentication;

/// <summary>
/// An access token provider that uses an IConfigdentialClientApplication instanse to generate tokens.
/// </summary>
/// <remarks>
/// Initialises a new instance of the <see cref="ConfidentialClientAuthenticationProvider"/>
/// class.
/// </remarks>
/// <param name="tokenClient">The token client.</param>
/// <param name="scopes">The scopes.</param>
public class ConfidentialClientAuthenticationProvider(IConfidentialClientApplication tokenClient, string[] scopes) : IAccessTokenProvider
{
    public AllowedHostsValidator AllowedHostsValidator => new();

    public async Task<string> GetAuthorizationTokenAsync(Uri uri, Dictionary<string, object>? additionalAuthenticationContext = null, CancellationToken cancellationToken = default)
    {
        var token = await tokenClient.AcquireTokenForClient(scopes).ExecuteAsync(cancellationToken);
        return token.AccessToken;
    }
}