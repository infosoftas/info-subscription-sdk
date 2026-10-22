<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription\Tests;

use PHPUnit\Framework\TestCase;

final class SampleMissingEnvironmentTest extends TestCase
{
    public function testMissingRequiredEnvironmentExitsBeforeMakingRequests(): void
    {
        $samplePath = dirname(__DIR__) . '/Sample/index.php';
        $process = proc_open(
            [PHP_BINARY, $samplePath],
            [
                0 => ['pipe', 'r'],
                1 => ['pipe', 'w'],
                2 => ['pipe', 'w'],
            ],
            $pipes,
            dirname(__DIR__, 2),
            [
                'TENANT_ID' => '',
                'CLIENT_ID' => '',
                'CLIENT_SECRET' => '',
                'API_ENDPOINT' => 'https://127.0.0.1:1',
                'XDEBUG_MODE' => 'off',
            ],
        );

        self::assertIsResource($process);
        fclose($pipes[0]);
        $stdout = stream_get_contents($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        fclose($pipes[1]);
        fclose($pipes[2]);
        $exitCode = proc_close($process);

        self::assertSame('', $stdout);
        self::assertSame(
            "Missing required environment variables: TENANT_ID, CLIENT_ID, CLIENT_SECRET.\n",
            $stderr,
        );
        self::assertSame(1, $exitCode);
        self::assertStringNotContainsString('Connection refused', $stderr);
        self::assertStringNotContainsString('Stack trace', $stderr);
    }
}
