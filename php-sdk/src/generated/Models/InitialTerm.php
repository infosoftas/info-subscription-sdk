<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A package chain step.
*/
class InitialTerm implements Parsable 
{
    /**
     * @var int|null $initialTermType Gets or sets the type of the initial term.
    */
    private ?int $initialTermType = null;
    
    /**
     * @var string|null $value Gets or sets the value.
    */
    private ?string $value = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InitialTerm
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InitialTerm {
        return new InitialTerm();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'initialTermType' => fn(ParseNode $n) => $o->setInitialTermType($n->getIntegerValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the initialTermType property value. Gets or sets the type of the initial term.
     * @return int|null
    */
    public function getInitialTermType(): ?int {
        return $this->initialTermType;
    }

    /**
     * Gets the value property value. Gets or sets the value.
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
        $writer->writeIntegerValue('initialTermType', $this->getInitialTermType());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the initialTermType property value. Gets or sets the type of the initial term.
     * @param int|null $value Value to set for the initialTermType property.
    */
    public function setInitialTermType(?int $value): void {
        $this->initialTermType = $value;
    }

    /**
     * Sets the value property value. Gets or sets the value.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
