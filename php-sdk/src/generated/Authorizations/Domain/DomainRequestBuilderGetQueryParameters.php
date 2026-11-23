<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Domain;

/**
 * Gets the domain authorizations asynchronous.
*/
class DomainRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("DomainName")
     * @var string|null $domainName Gets or sets the domain name.
    */
    public ?string $domainName = null;
    
    /**
     * @QueryParameter("SubscriberAccountId")
     * @var string|null $subscriberAccountId Gets or sets the identifier of the subscriber account.
    */
    public ?string $subscriberAccountId = null;
    
    /**
     * Instantiates a new DomainRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $domainName Gets or sets the domain name.
     * @param string|null $subscriberAccountId Gets or sets the identifier of the subscriber account.
    */
    public function __construct(?string $domainName = null, ?string $subscriberAccountId = null) {
        $this->domainName = $domainName;
        $this->subscriberAccountId = $subscriberAccountId;
    }

}
