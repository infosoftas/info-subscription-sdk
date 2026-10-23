<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription;

final readonly class InfoSubscriptionSettings
{
    public string $tenantId;
    public B2CAuthSettings $auth;
    public string $apiEndpoint;

    public function __construct(
        string $tenantId,
        B2CAuthSettings $auth,
        string $apiEndpoint = 'https://api.info-subscription.com',
    ) {
        if (trim($tenantId) === '') {
            throw new \InvalidArgumentException('tenantId cannot be blank.');
        }

        $normalizedApiEndpoint = rtrim($apiEndpoint, '/');
        $parts = parse_url($normalizedApiEndpoint);
        if (
            $parts === false
            || !isset($parts['scheme'], $parts['host'])
            || strtolower((string) $parts['scheme']) !== 'https'
        ) {
            throw new \InvalidArgumentException('apiEndpoint must be an absolute HTTPS URL.');
        }

        $this->tenantId = $tenantId;
        $this->auth = $auth;
        $this->apiEndpoint = $normalizedApiEndpoint;
    }
}
