<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A DTO used during creation of Demand Transactions with Product Tax Detail information.
*/
class CreateProductTaxDetail implements Parsable 
{
    /**
     * @var float|null $amount The total amount including taxes (NOT UNIT Amount).
    */
    private ?float $amount = null;
    
    /**
     * @var string|null $description Gets the description.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $productId Gets the identifier of the product.
    */
    private ?string $productId = null;
    
    /**
     * @var int|null $quantity The quantity sold. If not defined defaults to 1.
    */
    private ?int $quantity = null;
    
    /**
     * @var float|null $taxableAmount The total amount without taxes (NOT UNIT Amount).
    */
    private ?float $taxableAmount = null;
    
    /**
     * @var float|null $taxPercent The tax percent/rate.
    */
    private ?float $taxPercent = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateProductTaxDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateProductTaxDetail {
        return new CreateProductTaxDetail();
    }

    /**
     * Gets the amount property value. The total amount including taxes (NOT UNIT Amount).
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'taxableAmount' => fn(ParseNode $n) => $o->setTaxableAmount($n->getFloatValue()),
            'taxPercent' => fn(ParseNode $n) => $o->setTaxPercent($n->getFloatValue()),
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
     * Gets the productId property value. Gets the identifier of the product.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the quantity property value. The quantity sold. If not defined defaults to 1.
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the taxableAmount property value. The total amount without taxes (NOT UNIT Amount).
     * @return float|null
    */
    public function getTaxableAmount(): ?float {
        return $this->taxableAmount;
    }

    /**
     * Gets the taxPercent property value. The tax percent/rate.
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
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeFloatValue('taxableAmount', $this->getTaxableAmount());
        $writer->writeFloatValue('taxPercent', $this->getTaxPercent());
    }

    /**
     * Sets the amount property value. The total amount including taxes (NOT UNIT Amount).
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
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the productId property value. Gets the identifier of the product.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the quantity property value. The quantity sold. If not defined defaults to 1.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the taxableAmount property value. The total amount without taxes (NOT UNIT Amount).
     * @param float|null $value Value to set for the taxableAmount property.
    */
    public function setTaxableAmount(?float $value): void {
        $this->taxableAmount = $value;
    }

    /**
     * Sets the taxPercent property value. The tax percent/rate.
     * @param float|null $value Value to set for the taxPercent property.
    */
    public function setTaxPercent(?float $value): void {
        $this->taxPercent = $value;
    }

}
