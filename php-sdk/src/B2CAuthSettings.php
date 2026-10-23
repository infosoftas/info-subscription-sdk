<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription;

final readonly class B2CAuthSettings
{
    public string $clientId;
    public string $clientSecret;
    public string $b2cTenantName;
    public string $signInPolicy;
    public string $scopeName;

    public function __construct(
        string $clientId,
        #[\SensitiveParameter] string $clientSecret,
        string $b2cTenantName = 'prodlogins4',
        string $signInPolicy = 'B2C_1A_V2SIGNIN',
        string $scopeName = 'api',
    ) {
        self::assertNotBlank($clientId, 'clientId');
        self::assertNotBlank($clientSecret, 'clientSecret');
        self::assertNotBlank($b2cTenantName, 'b2cTenantName');
        self::assertNotBlank($signInPolicy, 'signInPolicy');
        self::assertNotBlank($scopeName, 'scopeName');

        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->b2cTenantName = $b2cTenantName;
        $this->signInPolicy = $signInPolicy;
        $this->scopeName = $scopeName;
    }

    private static function assertNotBlank(string $value, string $field): void
    {
        if (trim($value) === '') {
            throw new \InvalidArgumentException(sprintf('%s cannot be blank.', $field));
        }
    }
}
