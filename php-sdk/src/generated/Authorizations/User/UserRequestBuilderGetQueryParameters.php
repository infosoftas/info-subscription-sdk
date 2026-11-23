<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\User;

/**
 * Gets the users asynchronous.
*/
class UserRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("ExternalId")
     * @var string|null $externalId The External Id to filter by. This is usually the User Id assigned by the Identity Provider.
    */
    public ?string $externalId = null;
    
    /**
     * @QueryParameter("IdentityProviderId")
     * @var string|null $identityProviderId The identity provider that owns the user identity.
    */
    public ?string $identityProviderId = null;
    
    /**
     * @QueryParameter("SubscriberId")
     * @var string|null $subscriberId The subscriber which the user entity is associated with.
    */
    public ?string $subscriberId = null;
    
    /**
     * Instantiates a new UserRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $externalId The External Id to filter by. This is usually the User Id assigned by the Identity Provider.
     * @param string|null $identityProviderId The identity provider that owns the user identity.
     * @param string|null $subscriberId The subscriber which the user entity is associated with.
    */
    public function __construct(?string $externalId = null, ?string $identityProviderId = null, ?string $subscriberId = null) {
        $this->externalId = $externalId;
        $this->identityProviderId = $identityProviderId;
        $this->subscriberId = $subscriberId;
    }

}
