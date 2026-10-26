<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents contact information for an entity.
*/
class Contact implements Parsable 
{
    /**
     * @var string|null $email Gets the email.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $name Gets the name.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $telephone Gets the telephone.
    */
    private ?string $telephone = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Contact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Contact {
        return new Contact();
    }

    /**
     * Gets the email property value. Gets the email.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'telephone' => fn(ParseNode $n) => $o->setTelephone($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. Gets the name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the telephone property value. Gets the telephone.
     * @return string|null
    */
    public function getTelephone(): ?string {
        return $this->telephone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('telephone', $this->getTelephone());
    }

    /**
     * Sets the email property value. Gets the email.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the name property value. Gets the name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the telephone property value. Gets the telephone.
     * @param string|null $value Value to set for the telephone property.
    */
    public function setTelephone(?string $value): void {
        $this->telephone = $value;
    }

}
