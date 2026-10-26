<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A logo for an organization.
*/
class Logo implements Parsable 
{
    /**
     * @var string|null $locationUri Gets or sets URI for the location of the logo.
    */
    private ?string $locationUri = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Logo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Logo {
        return new Logo();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'locationUri' => fn(ParseNode $n) => $o->setLocationUri($n->getStringValue()),
        ];
    }

    /**
     * Gets the locationUri property value. Gets or sets URI for the location of the logo.
     * @return string|null
    */
    public function getLocationUri(): ?string {
        return $this->locationUri;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('locationUri', $this->getLocationUri());
    }

    /**
     * Sets the locationUri property value. Gets or sets URI for the location of the logo.
     * @param string|null $value Value to set for the locationUri property.
    */
    public function setLocationUri(?string $value): void {
        $this->locationUri = $value;
    }

}
