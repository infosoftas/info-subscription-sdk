<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A product tax detail view.
*/
class ProductTaxDetailView implements Parsable 
{
    /**
     * @var float|null $amount Gets or sets the amount including taxes.
    */
    private ?float $amount = null;
    
    /**
     * @var string|null $description Gets the description.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $productId Gets the identifier of the product.
    */
    private ?string $productId = null;
    
    /**
     * @var float|null $taxableAmount Gets the amount without taxes.
    */
    private ?float $taxableAmount = null;
    
    /**
     * @var float|null $taxPercent Gets the tax percent.
    */
    private ?float $taxPercent = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductTaxDetailView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductTaxDetailView {
        return new ProductTaxDetailView();
    }

    /**
     * Gets the amount property value. Gets or sets the amount including taxes.
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the description property value. Gets the description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'taxableAmount' => fn(ParseNode $n) => $o->setTaxableAmount($n->getFloatValue()),
            'taxPercent' => fn(ParseNode $n) => $o->setTaxPercent($n->getFloatValue()),
        ];
    }

    /**
     * Gets the productId property value. Gets the identifier of the product.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the taxableAmount property value. Gets the amount without taxes.
     * @return float|null
    */
    public function getTaxableAmount(): ?float {
        return $this->taxableAmount;
    }

    /**
     * Gets the taxPercent property value. Gets the tax percent.
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
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeFloatValue('taxableAmount', $this->getTaxableAmount());
        $writer->writeFloatValue('taxPercent', $this->getTaxPercent());
    }

    /**
     * Sets the amount property value. Gets or sets the amount including taxes.
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the description property value. Gets the description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the productId property value. Gets the identifier of the product.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the taxableAmount property value. Gets the amount without taxes.
     * @param float|null $value Value to set for the taxableAmount property.
    */
    public function setTaxableAmount(?float $value): void {
        $this->taxableAmount = $value;
    }

    /**
     * Sets the taxPercent property value. Gets the tax percent.
     * @param float|null $value Value to set for the taxPercent property.
    */
    public function setTaxPercent(?float $value): void {
        $this->taxPercent = $value;
    }

}
