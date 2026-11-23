<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\User;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserRequestBuilderGetQueryParameters.
     * @param string|null $externalId The External Id to filter by. This is usually the User Id assigned by the Identity Provider.
     * @param string|null $identityProviderId The identity provider that owns the user identity.
     * @param string|null $subscriberId The subscriber which the user entity is associated with.
     * @return UserRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $externalId = null, ?string $identityProviderId = null, ?string $subscriberId = null): UserRequestBuilderGetQueryParameters {
        return new UserRequestBuilderGetQueryParameters($externalId, $identityProviderId, $subscriberId);
    }

}
