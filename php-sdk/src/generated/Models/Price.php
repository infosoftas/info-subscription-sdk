<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents a flattened DTO version of the Price class.
*/
class Price implements Parsable 
{
    /**
     * @var string|null $currency The currency for all parts of the price.
    */
    private ?string $currency = null;
    
    /**
     * @var float|null $taxAmount The amount of the price that is TAX/VAT.
    */
    private ?float $taxAmount = null;
    
    /**
     * @var float|null $taxExclusive Tax price amount excluding taxes (Net).
    */
    private ?float $taxExclusive = null;
    
    /**
     * @var float|null $taxInclusive The price amount including taxes (Gross).
    */
    private ?float $taxInclusive = null;
    
    /**
     * @var float|null $taxRate The tax rate in percentages.
    */
    private ?float $taxRate = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Price
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Price {
        return new Price();
    }

    /**
     * Gets the currency property value. The currency for all parts of the price.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'taxAmount' => fn(ParseNode $n) => $o->setTaxAmount($n->getFloatValue()),
            'taxExclusive' => fn(ParseNode $n) => $o->setTaxExclusive($n->getFloatValue()),
            'taxInclusive' => fn(ParseNode $n) => $o->setTaxInclusive($n->getFloatValue()),
            'taxRate' => fn(ParseNode $n) => $o->setTaxRate($n->getFloatValue()),
        ];
    }

    /**
     * Gets the taxAmount property value. The amount of the price that is TAX/VAT.
     * @return float|null
    */
    public function getTaxAmount(): ?float {
        return $this->taxAmount;
    }

    /**
     * Gets the taxExclusive property value. Tax price amount excluding taxes (Net).
     * @return float|null
    */
    public function getTaxExclusive(): ?float {
        return $this->taxExclusive;
    }

    /**
     * Gets the taxInclusive property value. The price amount including taxes (Gross).
     * @return float|null
    */
    public function getTaxInclusive(): ?float {
        return $this->taxInclusive;
    }

    /**
     * Gets the taxRate property value. The tax rate in percentages.
     * @return float|null
    */
    public function getTaxRate(): ?float {
        return $this->taxRate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeFloatValue('taxAmount', $this->getTaxAmount());
        $writer->writeFloatValue('taxExclusive', $this->getTaxExclusive());
        $writer->writeFloatValue('taxInclusive', $this->getTaxInclusive());
        $writer->writeFloatValue('taxRate', $this->getTaxRate());
    }

    /**
     * Sets the currency property value. The currency for all parts of the price.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the taxAmount property value. The amount of the price that is TAX/VAT.
     * @param float|null $value Value to set for the taxAmount property.
    */
    public function setTaxAmount(?float $value): void {
        $this->taxAmount = $value;
    }

    /**
     * Sets the taxExclusive property value. Tax price amount excluding taxes (Net).
     * @param float|null $value Value to set for the taxExclusive property.
    */
    public function setTaxExclusive(?float $value): void {
        $this->taxExclusive = $value;
    }

    /**
     * Sets the taxInclusive property value. The price amount including taxes (Gross).
     * @param float|null $value Value to set for the taxInclusive property.
    */
    public function setTaxInclusive(?float $value): void {
        $this->taxInclusive = $value;
    }

    /**
     * Sets the taxRate property value. The tax rate in percentages.
     * @param float|null $value Value to set for the taxRate property.
    */
    public function setTaxRate(?float $value): void {
        $this->taxRate = $value;
    }

}
