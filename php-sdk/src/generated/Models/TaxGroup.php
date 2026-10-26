<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents a tax type/group by a name, code and percentage.
*/
class TaxGroup implements Parsable 
{
    /**
     * @var string|null $name Gets the name of the group
    */
    private ?string $name = null;
    
    /**
     * @var float|null $percent Gets the tax rate expressed as a percentage
    */
    private ?float $percent = null;
    
    /**
     * @var TaxScheme|null $taxScheme Code specifying a type of duty, tax or fee.
    */
    private ?TaxScheme $taxScheme = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaxGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaxGroup {
        return new TaxGroup();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'percent' => fn(ParseNode $n) => $o->setPercent($n->getFloatValue()),
            'taxScheme' => fn(ParseNode $n) => $o->setTaxScheme($n->getObjectValue([TaxScheme::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the name property value. Gets the name of the group
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the percent property value. Gets the tax rate expressed as a percentage
     * @return float|null
    */
    public function getPercent(): ?float {
        return $this->percent;
    }

    /**
     * Gets the taxScheme property value. Code specifying a type of duty, tax or fee.
     * @return TaxScheme|null
    */
    public function getTaxScheme(): ?TaxScheme {
        return $this->taxScheme;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
        $writer->writeFloatValue('percent', $this->getPercent());
        $writer->writeObjectValue('taxScheme', $this->getTaxScheme());
    }

    /**
     * Sets the name property value. Gets the name of the group
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the percent property value. Gets the tax rate expressed as a percentage
     * @param float|null $value Value to set for the percent property.
    */
    public function setPercent(?float $value): void {
        $this->percent = $value;
    }

    /**
     * Sets the taxScheme property value. Code specifying a type of duty, tax or fee.
     * @param TaxScheme|null $value Value to set for the taxScheme property.
    */
    public function setTaxScheme(?TaxScheme $value): void {
        $this->taxScheme = $value;
    }

}
