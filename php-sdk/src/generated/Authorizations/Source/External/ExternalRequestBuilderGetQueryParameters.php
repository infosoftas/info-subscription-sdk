<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Source\External;

/**
 * Gets the external sources asynchronous.
*/
class ExternalRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("Name")
     * @var string|null $name Gets or sets the name of the source (like the name of the external system)
    */
    public ?string $name = null;
    
    /**
     * @QueryParameter("UserId")
     * @var string|null $userId Get or set the user identifier
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new ExternalRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $name Gets or sets the name of the source (like the name of the external system)
     * @param string|null $userId Get or set the user identifier
    */
    public function __construct(?string $name = null, ?string $userId = null) {
        $this->name = $name;
        $this->userId = $userId;
    }

}
