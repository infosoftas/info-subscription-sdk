<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An identification.
*/
class Identification implements Parsable 
{
    /**
     * @var string|null $type Gets or sets the type of the identification such as a GLN, ORGNR, CVR, CPR, Internal or whatever
    */
    private ?string $type = null;
    
    /**
     * @var string|null $value Gets or sets the value of the identification. Depending on the type this can have various formats
    */
    private ?string $value = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Identification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Identification {
        return new Identification();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the type property value. Gets or sets the type of the identification such as a GLN, ORGNR, CVR, CPR, Internal or whatever
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the value property value. Gets or sets the value of the identification. Depending on the type this can have various formats
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the type property value. Gets or sets the type of the identification such as a GLN, ORGNR, CVR, CPR, Internal or whatever
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

    /**
     * Sets the value property value. Gets or sets the value of the identification. Depending on the type this can have various formats
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
