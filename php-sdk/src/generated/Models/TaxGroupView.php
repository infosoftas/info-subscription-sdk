<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Properties of a tax group.
*/
class TaxGroupView implements Parsable 
{
    /**
     * @var string|null $country The name of the country where the tax group is valid.
    */
    private ?string $country = null;
    
    /**
     * @var string|null $description The description.
    */
    private ?string $description = null;
    
    /**
     * @var Date|null $expiryDate The expiry date.
    */
    private ?Date $expiryDate = null;
    
    /**
     * @var string|null $id The identifier.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name The human identifiable name of the group.
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $productIds List of products associated with this group.
    */
    private ?array $productIds = null;
    
    /**
     * @var Date|null $startDate The start date.
    */
    private ?Date $startDate = null;
    
    /**
     * @var float|null $taxPercent The percent.
    */
    private ?float $taxPercent = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaxGroupView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaxGroupView {
        return new TaxGroupView();
    }

    /**
     * Gets the country property value. The name of the country where the tax group is valid.
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the description property value. The description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the expiryDate property value. The expiry date.
     * @return Date|null
    */
    public function getExpiryDate(): ?Date {
        return $this->expiryDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'expiryDate' => fn(ParseNode $n) => $o->setExpiryDate($n->getDateValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'productIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProductIds($val);
            },
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateValue()),
            'taxPercent' => fn(ParseNode $n) => $o->setTaxPercent($n->getFloatValue()),
        ];
    }

    /**
     * Gets the id property value. The identifier.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the name property value. The human identifiable name of the group.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the productIds property value. List of products associated with this group.
     * @return array<string>|null
    */
    public function getProductIds(): ?array {
        return $this->productIds;
    }

    /**
     * Gets the startDate property value. The start date.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        return $this->startDate;
    }

    /**
     * Gets the taxPercent property value. The percent.
     * @return float|null
    */
    public function getTaxPercent(): ?float {
        return $this->taxPercent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateValue('expiryDate', $this->getExpiryDate());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('productIds', $this->getProductIds());
        $writer->writeDateValue('startDate', $this->getStartDate());
        $writer->writeFloatValue('taxPercent', $this->getTaxPercent());
    }

    /**
     * Sets the country property value. The name of the country where the tax group is valid.
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the description property value. The description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the expiryDate property value. The expiry date.
     * @param Date|null $value Value to set for the expiryDate property.
    */
    public function setExpiryDate(?Date $value): void {
        $this->expiryDate = $value;
    }

    /**
     * Sets the id property value. The identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. The human identifiable name of the group.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the productIds property value. List of products associated with this group.
     * @param array<string>|null $value Value to set for the productIds property.
    */
    public function setProductIds(?array $value): void {
        $this->productIds = $value;
    }

    /**
     * Sets the startDate property value. The start date.
     * @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value): void {
        $this->startDate = $value;
    }

    /**
     * Sets the taxPercent property value. The percent.
     * @param float|null $value Value to set for the taxPercent property.
    */
    public function setTaxPercent(?float $value): void {
        $this->taxPercent = $value;
    }

}
