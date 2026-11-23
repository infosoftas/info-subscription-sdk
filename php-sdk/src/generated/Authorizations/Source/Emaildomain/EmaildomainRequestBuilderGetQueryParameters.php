<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Source\Emaildomain;

/**
 * Gets the email domain authorization sources asynchronous.
*/
class EmaildomainRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("DomainAuthorizationId")
     * @var string|null $domainAuthorizationId Gets or sets the identifier of the domain authorization.
    */
    public ?string $domainAuthorizationId = null;
    
    /**
     * @QueryParameter("UserId")
     * @var string|null $userId Get or set the user identifier
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new EmaildomainRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $domainAuthorizationId Gets or sets the identifier of the domain authorization.
     * @param string|null $userId Get or set the user identifier
    */
    public function __construct(?string $domainAuthorizationId = null, ?string $userId = null) {
        $this->domainAuthorizationId = $domainAuthorizationId;
        $this->userId = $userId;
    }

}
