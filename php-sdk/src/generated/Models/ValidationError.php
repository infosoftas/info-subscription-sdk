<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents a validation error.
*/
class ValidationError implements Parsable 
{
    /**
     * @var string|null $field The field that has the error
    */
    private ?string $field = null;
    
    /**
     * @var string|null $message The message for the validation error.
    */
    private ?string $message = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidationError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidationError {
        return new ValidationError();
    }

    /**
     * Gets the field property value. The field that has the error
     * @return string|null
    */
    public function getField(): ?string {
        return $this->field;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'field' => fn(ParseNode $n) => $o->setField($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. The message for the validation error.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('field', $this->getField());
        $writer->writeStringValue('message', $this->getMessage());
    }

    /**
     * Sets the field property value. The field that has the error
     * @param string|null $value Value to set for the field property.
    */
    public function setField(?string $value): void {
        $this->field = $value;
    }

    /**
     * Sets the message property value. The message for the validation error.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

}
