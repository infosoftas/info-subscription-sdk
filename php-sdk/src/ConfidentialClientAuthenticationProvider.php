<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription;

use GuzzleHttp\ClientInterface;
use League\OAuth2\Client\Provider\GenericProvider;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Authentication\Oauth\ClientCredentialContext;
use Microsoft\Kiota\Authentication\PhpLeagueAccessTokenProvider;

final class ConfidentialClientAuthenticationProvider extends BaseBearerTokenAuthenticationProvider
{
    /**
     * @param array<string> $allowedHosts
     */
    public function __construct(
        B2CAuthSettings $settings,
        array $allowedHosts,
        ?ClientInterface $tokenHttpClient = null,
    ) {
        $tenantName = $settings->b2cTenantName;
        $tenantDomain = sprintf('%s.onmicrosoft.com', $tenantName);
        $tokenBaseUrl = sprintf(
            'https://%s.b2clogin.com/%s/%s/oauth2/v2.0',
            $tenantName,
            $tenantDomain,
            $settings->signInPolicy,
        );

        $oauthProvider = new GenericProvider(
            [
                'clientId' => $settings->clientId,
                'clientSecret' => $settings->clientSecret,
                'urlAuthorize' => sprintf('%s/authorize', $tokenBaseUrl),
                'urlAccessToken' => sprintf('%s/token', $tokenBaseUrl),
                'urlResourceOwnerDetails' => sprintf('%s/userinfo', $tokenBaseUrl),
            ],
            $tokenHttpClient === null ? [] : ['httpClient' => $tokenHttpClient],
        );

        $tokenRequestContext = new ClientCredentialContext(
            $tenantName,
            $settings->clientId,
            $settings->clientSecret,
        );
        $scope = sprintf('https://%s/%s/.default', $tenantDomain, $settings->scopeName);

        parent::__construct(new PhpLeagueAccessTokenProvider(
            $tokenRequestContext,
            [$scope],
            $allowedHosts,
            $oauthProvider,
        ));
    }
}
