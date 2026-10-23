<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Api\DataContracts\V1\Identification;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A subscriber contact view.
*/
class SubscriberContactView implements Parsable 
{
    /**
     * @var array<string>|null $addressLines Gets or sets the address lines.
    */
    private ?array $addressLines = null;
    
    /**
     * @var string|null $careOf Gets or sets the CareOf property.
    */
    private ?string $careOf = null;
    
    /**
     * @var string|null $city Gets or sets the city.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $country Gets or sets the country.
    */
    private ?string $country = null;
    
    /**
     * @var string|null $email Gets or sets the email.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var array<Identification>|null $identifications Gets or sets the various identifications of the organization.
    */
    private ?array $identifications = null;
    
    /**
     * @var bool|null $isPrimary Gets or sets a value indicating whether this instance is primary.
    */
    private ?bool $isPrimary = null;
    
    /**
     * @var string|null $name Gets or sets the name.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $phone Gets or sets the phone.
    */
    private ?string $phone = null;
    
    /**
     * @var string|null $source Gets or sets the Source-field for use with external-validation.
    */
    private ?string $source = null;
    
    /**
     * @var string|null $subscriberId Gets or sets the identifier of the subscriber.
    */
    private ?string $subscriberId = null;
    
    /**
     * @var string|null $zip Gets or sets the zip.
    */
    private ?string $zip = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriberContactView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriberContactView {
        return new SubscriberContactView();
    }

    /**
     * Gets the addressLines property value. Gets or sets the address lines.
     * @return array<string>|null
    */
    public function getAddressLines(): ?array {
        return $this->addressLines;
    }

    /**
     * Gets the careOf property value. Gets or sets the CareOf property.
     * @return string|null
    */
    public function getCareOf(): ?string {
        return $this->careOf;
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
            'addressLines' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAddressLines($val);
            },
            'careOf' => fn(ParseNode $n) => $o->setCareOf($n->getStringValue()),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'identifications' => fn(ParseNode $n) => $o->setIdentifications($n->getCollectionOfObjectValues([Identification::class, 'createFromDiscriminatorValue'])),
            'isPrimary' => fn(ParseNode $n) => $o->setIsPrimary($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'zip' => fn(ParseNode $n) => $o->setZip($n->getStringValue()),
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
     * Gets the identifications property value. Gets or sets the various identifications of the organization.
     * @return array<Identification>|null
    */
    public function getIdentifications(): ?array {
        return $this->identifications;
    }

    /**
     * Gets the isPrimary property value. Gets or sets a value indicating whether this instance is primary.
     * @return bool|null
    */
    public function getIsPrimary(): ?bool {
        return $this->isPrimary;
    }

    /**
     * Gets the name property value. Gets or sets the name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the phone property value. Gets or sets the phone.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the source property value. Gets or sets the Source-field for use with external-validation.
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the subscriberId property value. Gets or sets the identifier of the subscriber.
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the zip property value. Gets or sets the zip.
     * @return string|null
    */
    public function getZip(): ?string {
        return $this->zip;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('addressLines', $this->getAddressLines());
        $writer->writeStringValue('careOf', $this->getCareOf());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('identifications', $this->getIdentifications());
        $writer->writeBooleanValue('isPrimary', $this->getIsPrimary());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeStringValue('zip', $this->getZip());
    }

    /**
     * Sets the addressLines property value. Gets or sets the address lines.
     * @param array<string>|null $value Value to set for the addressLines property.
    */
    public function setAddressLines(?array $value): void {
        $this->addressLines = $value;
    }

    /**
     * Sets the careOf property value. Gets or sets the CareOf property.
     * @param string|null $value Value to set for the careOf property.
    */
    public function setCareOf(?string $value): void {
        $this->careOf = $value;
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
     * Sets the identifications property value. Gets or sets the various identifications of the organization.
     * @param array<Identification>|null $value Value to set for the identifications property.
    */
    public function setIdentifications(?array $value): void {
        $this->identifications = $value;
    }

    /**
     * Sets the isPrimary property value. Gets or sets a value indicating whether this instance is primary.
     * @param bool|null $value Value to set for the isPrimary property.
    */
    public function setIsPrimary(?bool $value): void {
        $this->isPrimary = $value;
    }

    /**
     * Sets the name property value. Gets or sets the name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the phone property value. Gets or sets the phone.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the source property value. Gets or sets the Source-field for use with external-validation.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the subscriberId property value. Gets or sets the identifier of the subscriber.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the zip property value. Gets or sets the zip.
     * @param string|null $value Value to set for the zip property.
    */
    public function setZip(?string $value): void {
        $this->zip = $value;
    }

}
