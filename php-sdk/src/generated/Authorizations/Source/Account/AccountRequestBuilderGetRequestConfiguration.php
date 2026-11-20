<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Source\Account;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AccountRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AccountRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AccountRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AccountRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccountRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccountRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccountRequestBuilderGetQueryParameters.
     * @param string|null $subscriberAccountId Gets or sets the identifier of the subscriber account.
     * @param string|null $userId Get or set the user identifier
     * @return AccountRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $subscriberAccountId = null, ?string $userId = null): AccountRequestBuilderGetQueryParameters {
        return new AccountRequestBuilderGetQueryParameters($subscriberAccountId, $userId);
    }

}
