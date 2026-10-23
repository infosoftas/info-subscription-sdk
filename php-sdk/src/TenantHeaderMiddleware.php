<?php

declare(strict_types=1);

namespace Infosoft\InfoSubscription;

use Psr\Http\Message\RequestInterface;

final readonly class TenantHeaderMiddleware
{
    private string $normalizedApiHost;

    public function __construct(
        private string $tenantId,
        string $apiHost,
    ) {
        $this->normalizedApiHost = strtolower($apiHost);
    }

    public function __invoke(callable $handler): callable
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            $requestHost = strtolower($request->getUri()->getHost());
            if ($requestHost !== $this->normalizedApiHost) {
                return $handler($request, $options);
            }

            return $handler($request->withHeader('S4-TenantId', $this->tenantId), $options);
        };
    }
}
