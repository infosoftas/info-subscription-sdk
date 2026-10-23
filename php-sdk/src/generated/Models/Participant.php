<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A participant.
*/
class Participant implements Parsable 
{
    /**
     * @var Contact|null $contact Represents contact information for an entity.
    */
    private ?Contact $contact = null;
    
    /**
     * @var Identification|null $externalId An identification.
    */
    private ?Identification $externalId = null;
    
    /**
     * @var Identification|null $id An identification.
    */
    private ?Identification $id = null;
    
    /**
     * @var array<Identification>|null $identifications Gets the various identifications.
    */
    private ?array $identifications = null;
    
    /**
     * @var string|null $name Gets or sets the name.
    */
    private ?string $name = null;
    
    /**
     * @var PostalAddress|null $postalAddress A postal address.
    */
    private ?PostalAddress $postalAddress = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Participant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Participant {
        return new Participant();
    }

    /**
     * Gets the contact property value. Represents contact information for an entity.
     * @return Contact|null
    */
    public function getContact(): ?Contact {
        return $this->contact;
    }

    /**
     * Gets the externalId property value. An identification.
     * @return Identification|null
    */
    public function getExternalId(): ?Identification {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contact' => fn(ParseNode $n) => $o->setContact($n->getObjectValue([Contact::class, 'createFromDiscriminatorValue'])),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getObjectValue([Identification::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getObjectValue([Identification::class, 'createFromDiscriminatorValue'])),
            'identifications' => fn(ParseNode $n) => $o->setIdentifications($n->getCollectionOfObjectValues([Identification::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'postalAddress' => fn(ParseNode $n) => $o->setPostalAddress($n->getObjectValue([PostalAddress::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. An identification.
     * @return Identification|null
    */
    public function getId(): ?Identification {
        return $this->id;
    }

    /**
     * Gets the identifications property value. Gets the various identifications.
     * @return array<Identification>|null
    */
    public function getIdentifications(): ?array {
        return $this->identifications;
    }

    /**
     * Gets the name property value. Gets or sets the name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the postalAddress property value. A postal address.
     * @return PostalAddress|null
    */
    public function getPostalAddress(): ?PostalAddress {
        return $this->postalAddress;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('contact', $this->getContact());
        $writer->writeObjectValue('externalId', $this->getExternalId());
        $writer->writeObjectValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('identifications', $this->getIdentifications());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('postalAddress', $this->getPostalAddress());
    }

    /**
     * Sets the contact property value. Represents contact information for an entity.
     * @param Contact|null $value Value to set for the contact property.
    */
    public function setContact(?Contact $value): void {
        $this->contact = $value;
    }

    /**
     * Sets the externalId property value. An identification.
     * @param Identification|null $value Value to set for the externalId property.
    */
    public function setExternalId(?Identification $value): void {
        $this->externalId = $value;
    }

    /**
     * Sets the id property value. An identification.
     * @param Identification|null $value Value to set for the id property.
    */
    public function setId(?Identification $value): void {
        $this->id = $value;
    }

    /**
     * Sets the identifications property value. Gets the various identifications.
     * @param array<Identification>|null $value Value to set for the identifications property.
    */
    public function setIdentifications(?array $value): void {
        $this->identifications = $value;
    }

    /**
     * Sets the name property value. Gets or sets the name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the postalAddress property value. A postal address.
     * @param PostalAddress|null $value Value to set for the postalAddress property.
    */
    public function setPostalAddress(?PostalAddress $value): void {
        $this->postalAddress = $value;
    }

}
