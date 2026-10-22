<?php

namespace Infosoft\InfoSubscription\Generated\Organization\Item\Settings;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SettingsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SettingsRequestBuilderGetQueryParameters.
     * @param string|null $type Gets or sets the type.
     * @return SettingsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $type = null): SettingsRequestBuilderGetQueryParameters {
        return new SettingsRequestBuilderGetQueryParameters($type);
    }

}
