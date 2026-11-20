<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Source\Account;

/**
 * Gets the account sources asynchronous.
*/
class AccountRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("SubscriberAccountId")
     * @var string|null $subscriberAccountId Gets or sets the identifier of the subscriber account.
    */
    public ?string $subscriberAccountId = null;
    
    /**
     * @QueryParameter("UserId")
     * @var string|null $userId Get or set the user identifier
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new AccountRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $subscriberAccountId Gets or sets the identifier of the subscriber account.
     * @param string|null $userId Get or set the user identifier
    */
    public function __construct(?string $subscriberAccountId = null, ?string $userId = null) {
        $this->subscriberAccountId = $subscriberAccountId;
        $this->userId = $userId;
    }

}
