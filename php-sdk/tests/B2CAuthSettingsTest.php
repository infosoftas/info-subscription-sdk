<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription\Tests;

use Infosoft\InfoSubscription\B2CAuthSettings;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class B2CAuthSettingsTest extends TestCase
{
    public function testUsesDefaultValues(): void
    {
        $settings = new B2CAuthSettings('client-id', 'client-secret');

        self::assertSame('prodlogins4', $settings->b2cTenantName);
        self::assertSame('B2C_1A_V2SIGNIN', $settings->signInPolicy);
        self::assertSame('api', $settings->scopeName);
    }

    public function testDoesNotAlterNonblankClientSecret(): void
    {
        $settings = new B2CAuthSettings('client-id', '  client-secret  ');

        self::assertSame('  client-secret  ', $settings->clientSecret);
    }

    #[DataProvider('blankFieldProvider')]
    public function testRejectsBlankFields(
        string $clientId,
        string $clientSecret,
        string $tenantName,
        string $policy,
        string $scopeName,
    ): void {
        $this->expectException(\InvalidArgumentException::class);

        new B2CAuthSettings($clientId, $clientSecret, $tenantName, $policy, $scopeName);
    }

    /**
     * @return array<string, array{string,string,string,string,string}>
     */
    public static function blankFieldProvider(): array
    {
        return [
            'blank client id' => ['', 'secret', 'prodlogins4', 'B2C_1A_V2SIGNIN', 'api'],
            'blank client secret' => ['client-id', ' ', 'prodlogins4', 'B2C_1A_V2SIGNIN', 'api'],
            'blank tenant name' => ['client-id', 'secret', ' ', 'B2C_1A_V2SIGNIN', 'api'],
            'blank sign in policy' => ['client-id', 'secret', 'prodlogins4', ' ', 'api'],
            'blank scope name' => ['client-id', 'secret', 'prodlogins4', 'B2C_1A_V2SIGNIN', ' '],
        ];
    }
}
