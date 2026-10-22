<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An organization view.
*/
class OrganizationView implements Parsable 
{
    /**
     * @var string|null $city Gets or sets the city.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $country Gets or sets the country.
    */
    private ?string $country = null;
    
    /**
     * @var string|null $description Gets or sets the description.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $email Gets or sets the email.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var array<IdentificationView>|null $identifications Gets or sets the various identifications of the organization
    */
    private ?array $identifications = null;
    
    /**
     * @var string|null $name Gets or sets the name.
    */
    private ?string $name = null;
    
    /**
     * @var array<SettingView>|null $settings Gets or sets options for controlling the operation.
    */
    private ?array $settings = null;
    
    /**
     * @var string|null $street Gets or sets the street.
    */
    private ?string $street = null;
    
    /**
     * @var string|null $telephone Gets or sets the telephone.
    */
    private ?string $telephone = null;
    
    /**
     * @var SimplifiedTimeZoneInfoView|null $timeZoneInfo A simplified time zone information view.
    */
    private ?SimplifiedTimeZoneInfoView $timeZoneInfo = null;
    
    /**
     * @var string|null $zipCode Gets or sets the zip code.
    */
    private ?string $zipCode = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationView {
        return new OrganizationView();
    }

    /**
     * Gets the city property value. Gets or sets the city.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the country property value. Gets or sets the country.
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the description property value. Gets or sets the description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the email property value. Gets or sets the email.
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
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'identifications' => fn(ParseNode $n) => $o->setIdentifications($n->getCollectionOfObjectValues([IdentificationView::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getCollectionOfObjectValues([SettingView::class, 'createFromDiscriminatorValue'])),
            'street' => fn(ParseNode $n) => $o->setStreet($n->getStringValue()),
            'telephone' => fn(ParseNode $n) => $o->setTelephone($n->getStringValue()),
            'timeZoneInfo' => fn(ParseNode $n) => $o->setTimeZoneInfo($n->getObjectValue([SimplifiedTimeZoneInfoView::class, 'createFromDiscriminatorValue'])),
            'zipCode' => fn(ParseNode $n) => $o->setZipCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Gets or sets the identifier.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the identifications property value. Gets or sets the various identifications of the organization
     * @return array<IdentificationView>|null
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
     * Gets the settings property value. Gets or sets options for controlling the operation.
     * @return array<SettingView>|null
    */
    public function getSettings(): ?array {
        return $this->settings;
    }

    /**
     * Gets the street property value. Gets or sets the street.
     * @return string|null
    */
    public function getStreet(): ?string {
        return $this->street;
    }

    /**
     * Gets the telephone property value. Gets or sets the telephone.
     * @return string|null
    */
    public function getTelephone(): ?string {
        return $this->telephone;
    }

    /**
     * Gets the timeZoneInfo property value. A simplified time zone information view.
     * @return SimplifiedTimeZoneInfoView|null
    */
    public function getTimeZoneInfo(): ?SimplifiedTimeZoneInfoView {
        return $this->timeZoneInfo;
    }

    /**
     * Gets the zipCode property value. Gets or sets the zip code.
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
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('identifications', $this->getIdentifications());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('settings', $this->getSettings());
        $writer->writeStringValue('street', $this->getStreet());
        $writer->writeStringValue('telephone', $this->getTelephone());
        $writer->writeObjectValue('timeZoneInfo', $this->getTimeZoneInfo());
        $writer->writeStringValue('zipCode', $this->getZipCode());
    }

    /**
     * Sets the city property value. Gets or sets the city.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the country property value. Gets or sets the country.
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the description property value. Gets or sets the description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the email property value. Gets or sets the email.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the identifications property value. Gets or sets the various identifications of the organization
     * @param array<IdentificationView>|null $value Value to set for the identifications property.
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
     * Sets the settings property value. Gets or sets options for controlling the operation.
     * @param array<SettingView>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value): void {
        $this->settings = $value;
    }

    /**
     * Sets the street property value. Gets or sets the street.
     * @param string|null $value Value to set for the street property.
    */
    public function setStreet(?string $value): void {
        $this->street = $value;
    }

    /**
     * Sets the telephone property value. Gets or sets the telephone.
     * @param string|null $value Value to set for the telephone property.
    */
    public function setTelephone(?string $value): void {
        $this->telephone = $value;
    }

    /**
     * Sets the timeZoneInfo property value. A simplified time zone information view.
     * @param SimplifiedTimeZoneInfoView|null $value Value to set for the timeZoneInfo property.
    */
    public function setTimeZoneInfo(?SimplifiedTimeZoneInfoView $value): void {
        $this->timeZoneInfo = $value;
    }

    /**
     * Sets the zipCode property value. Gets or sets the zip code.
     * @param string|null $value Value to set for the zipCode property.
    */
    public function setZipCode(?string $value): void {
        $this->zipCode = $value;
    }

}
