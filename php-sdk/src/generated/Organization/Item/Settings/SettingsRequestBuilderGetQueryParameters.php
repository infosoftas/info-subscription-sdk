<?php

namespace Infosoft\InfoSubscription\Generated\Organization\Item\Settings;

/**
 * Gets settings for organization.
*/
class SettingsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("Type")
     * @var string|null $type Gets or sets the type.
    */
    public ?string $type = null;
    
    /**
     * Instantiates a new SettingsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $type Gets or sets the type.
    */
    public function __construct(?string $type = null) {
        $this->type = $type;
    }

}
