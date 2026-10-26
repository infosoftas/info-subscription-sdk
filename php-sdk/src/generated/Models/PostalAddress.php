<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A postal address.
*/
class PostalAddress implements Parsable 
{
    /**
     * @var string|null $city Gets the city.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $country Gets the country.
    */
    private ?string $country = null;
    
    /**
     * @var string|null $street Gets the street.
    */
    private ?string $street = null;
    
    /**
     * @var string|null $zipCode Gets the zip code.
    */
    private ?string $zipCode = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostalAddress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PostalAddress {
        return new PostalAddress();
    }

    /**
     * Gets the city property value. Gets the city.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the country property value. Gets the country.
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'street' => fn(ParseNode $n) => $o->setStreet($n->getStringValue()),
            'zipCode' => fn(ParseNode $n) => $o->setZipCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the street property value. Gets the street.
     * @return string|null
    */
    public function getStreet(): ?string {
        return $this->street;
    }

    /**
     * Gets the zipCode property value. Gets the zip code.
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
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('street', $this->getStreet());
        $writer->writeStringValue('zipCode', $this->getZipCode());
    }

    /**
     * Sets the city property value. Gets the city.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the country property value. Gets the country.
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the street property value. Gets the street.
     * @param string|null $value Value to set for the street property.
    */
    public function setStreet(?string $value): void {
        $this->street = $value;
    }

    /**
     * Sets the zipCode property value. Gets the zip code.
     * @param string|null $value Value to set for the zipCode property.
    */
    public function setZipCode(?string $value): void {
        $this->zipCode = $value;
    }

}
