<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Specifies a product with quantity and optional unit price for a subscription plan.
*/
class PlanProduct implements Parsable 
{
    /**
     * @var string|null $productId Gets or sets the identifier of the product.
    */
    private ?string $productId = null;
    
    /**
     * @var int|null $quantity Gets or sets the quantity.
    */
    private ?int $quantity = null;
    
    /**
     * @var Price|null $unitPrice Represents a flattened DTO version of the Price class.
    */
    private ?Price $unitPrice = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlanProduct
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlanProduct {
        return new PlanProduct();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'unitPrice' => fn(ParseNode $n) => $o->setUnitPrice($n->getObjectValue([Price::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the productId property value. Gets or sets the identifier of the product.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the quantity property value. Gets or sets the quantity.
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the unitPrice property value. Represents a flattened DTO version of the Price class.
     * @return Price|null
    */
    public function getUnitPrice(): ?Price {
        return $this->unitPrice;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeObjectValue('unitPrice', $this->getUnitPrice());
    }

    /**
     * Sets the productId property value. Gets or sets the identifier of the product.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the quantity property value. Gets or sets the quantity.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the unitPrice property value. Represents a flattened DTO version of the Price class.
     * @param Price|null $value Value to set for the unitPrice property.
    */
    public function setUnitPrice(?Price $value): void {
        $this->unitPrice = $value;
    }

}
