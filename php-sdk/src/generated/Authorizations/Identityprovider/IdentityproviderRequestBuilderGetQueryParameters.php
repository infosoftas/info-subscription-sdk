<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Identityprovider;

use Infosoft\InfoSubscription\Generated\Models\IntegrationType;

/**
 * Gets the identity providers asynchronous.
*/
class IdentityproviderRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("IntegrationType")
     * @var IntegrationType|null $integrationType Gets or sets the integration type.
    */
    public ?IntegrationType $integrationType = null;
    
    /**
     * @QueryParameter("Name")
     * @var string|null $name Gets or sets the name.
    */
    public ?string $name = null;
    
    /**
     * Instantiates a new IdentityproviderRequestBuilderGetQueryParameters and sets the default values.
     * @param IntegrationType|null $integrationType Gets or sets the integration type.
     * @param string|null $name Gets or sets the name.
    */
    public function __construct(?IntegrationType $integrationType = null, ?string $name = null) {
        $this->integrationType = $integrationType;
        $this->name = $name;
    }

}
