<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A recipient is a person, company or other entity which a given invoice is distributed to.
*/
class Recipient implements Parsable 
{
    /**
     * @var string|null $city City of the recipient.
    */
    private ?string $city = null;
    
    /**
     * @var Contact|null $contact Represents contact information for an entity.
    */
    private ?Contact $contact = null;
    
    /**
     * @var string|null $country Country of the recipient.
    */
    private ?string $country = null;
    
    /**
     * @var string|null $email The email of the recipient
    */
    private ?string $email = null;
    
    /**
     * @var Identification|null $externalId An identification.
    */
    private ?Identification $externalId = null;
    
    /**
     * @var Identification|null $id An identification.
    */
    private ?Identification $id = null;
    
    /**
     * @var array<Identification>|null $identifications The list of unique identifications for the recipient.
    */
    private ?array $identifications = null;
    
    /**
     * @var string|null $name The name of the recipient.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $street The street including house number etc.
    */
    private ?string $street = null;
    
    /**
     * @var string|null $telephone The telephone number of the recipient
    */
    private ?string $telephone = null;
    
    /**
     * @var string|null $zipCode Zip code of the recipient
    */
    private ?string $zipCode = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Recipient
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Recipient {
        return new Recipient();
    }

    /**
     * Gets the city property value. City of the recipient.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the contact property value. Represents contact information for an entity.
     * @return Contact|null
    */
    public function getContact(): ?Contact {
        return $this->contact;
    }

    /**
     * Gets the country property value. Country of the recipient.
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the email property value. The email of the recipient
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
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
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'contact' => fn(ParseNode $n) => $o->setContact($n->getObjectValue([Contact::class, 'createFromDiscriminatorValue'])),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getObjectValue([Identification::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getObjectValue([Identification::class, 'createFromDiscriminatorValue'])),
            'identifications' => fn(ParseNode $n) => $o->setIdentifications($n->getCollectionOfObjectValues([Identification::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'street' => fn(ParseNode $n) => $o->setStreet($n->getStringValue()),
            'telephone' => fn(ParseNode $n) => $o->setTelephone($n->getStringValue()),
            'zipCode' => fn(ParseNode $n) => $o->setZipCode($n->getStringValue()),
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
     * Gets the identifications property value. The list of unique identifications for the recipient.
     * @return array<Identification>|null
    */
    public function getIdentifications(): ?array {
        return $this->identifications;
    }

    /**
     * Gets the name property value. The name of the recipient.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the street property value. The street including house number etc.
     * @return string|null
    */
    public function getStreet(): ?string {
        return $this->street;
    }

    /**
     * Gets the telephone property value. The telephone number of the recipient
     * @return string|null
    */
    public function getTelephone(): ?string {
        return $this->telephone;
    }

    /**
     * Gets the zipCode property value. Zip code of the recipient
     * @return string|null
    */
    public function getZipCode(): ?string {
        return $this->zipCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeObjectValue('contact', $this->getContact());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeObjectValue('externalId', $this->getExternalId());
        $writer->writeObjectValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('identifications', $this->getIdentifications());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('street', $this->getStreet());
        $writer->writeStringValue('telephone', $this->getTelephone());
        $writer->writeStringValue('zipCode', $this->getZipCode());
    }

    /**
     * Sets the city property value. City of the recipient.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the contact property value. Represents contact information for an entity.
     * @param Contact|null $value Value to set for the contact property.
    */
    public function setContact(?Contact $value): void {
        $this->contact = $value;
    }

    /**
     * Sets the country property value. Country of the recipient.
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the email property value. The email of the recipient
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
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
     * Sets the identifications property value. The list of unique identifications for the recipient.
     * @param array<Identification>|null $value Value to set for the identifications property.
    */
    public function setIdentifications(?array $value): void {
        $this->identifications = $value;
    }

    /**
     * Sets the name property value. The name of the recipient.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the street property value. The street including house number etc.
     * @param string|null $value Value to set for the street property.
    */
    public function setStreet(?string $value): void {
        $this->street = $value;
    }

    /**
     * Sets the telephone property value. The telephone number of the recipient
     * @param string|null $value Value to set for the telephone property.
    */
    public function setTelephone(?string $value): void {
        $this->telephone = $value;
    }

    /**
     * Sets the zipCode property value. Zip code of the recipient
     * @param string|null $value Value to set for the zipCode property.
    */
    public function setZipCode(?string $value): void {
        $this->zipCode = $value;
    }

}
