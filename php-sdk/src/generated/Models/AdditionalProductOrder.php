<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An additional product to add to an order.
*/
class AdditionalProductOrder implements Parsable 
{
    /**
     * @var string|null $productId The identifier of the product, should match an existing product.
    */
    private ?string $productId = null;
    
    /**
     * @var bool|null $renewalAtListPrice A value indicating whether to price during renewals at the list price instead of the override. This has no effect if price override is not given.
    */
    private ?bool $renewalAtListPrice = null;
    
    /**
     * @var Price|null $unitPriceOverride Represents a flattened DTO version of the Price class.
    */
    private ?Price $unitPriceOverride = null;
    
    /**
     * @var int|null $units The number of units of this product.
    */
    private ?int $units = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdditionalProductOrder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdditionalProductOrder {
        return new AdditionalProductOrder();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'renewalAtListPrice' => fn(ParseNode $n) => $o->setRenewalAtListPrice($n->getBooleanValue()),
            'unitPriceOverride' => fn(ParseNode $n) => $o->setUnitPriceOverride($n->getObjectValue([Price::class, 'createFromDiscriminatorValue'])),
            'units' => fn(ParseNode $n) => $o->setUnits($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the productId property value. The identifier of the product, should match an existing product.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the renewalAtListPrice property value. A value indicating whether to price during renewals at the list price instead of the override. This has no effect if price override is not given.
     * @return bool|null
    */
    public function getRenewalAtListPrice(): ?bool {
        return $this->renewalAtListPrice;
    }

    /**
     * Gets the unitPriceOverride property value. Represents a flattened DTO version of the Price class.
     * @return Price|null
    */
    public function getUnitPriceOverride(): ?Price {
        return $this->unitPriceOverride;
    }

    /**
     * Gets the units property value. The number of units of this product.
     * @return int|null
    */
    public function getUnits(): ?int {
        return $this->units;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeBooleanValue('renewalAtListPrice', $this->getRenewalAtListPrice());
        $writer->writeObjectValue('unitPriceOverride', $this->getUnitPriceOverride());
        $writer->writeIntegerValue('units', $this->getUnits());
    }

    /**
     * Sets the productId property value. The identifier of the product, should match an existing product.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the renewalAtListPrice property value. A value indicating whether to price during renewals at the list price instead of the override. This has no effect if price override is not given.
     * @param bool|null $value Value to set for the renewalAtListPrice property.
    */
    public function setRenewalAtListPrice(?bool $value): void {
        $this->renewalAtListPrice = $value;
    }

    /**
     * Sets the unitPriceOverride property value. Represents a flattened DTO version of the Price class.
     * @param Price|null $value Value to set for the unitPriceOverride property.
    */
    public function setUnitPriceOverride(?Price $value): void {
        $this->unitPriceOverride = $value;
    }

    /**
     * Sets the units property value. The number of units of this product.
     * @param int|null $value Value to set for the units property.
    */
    public function setUnits(?int $value): void {
        $this->units = $value;
    }

}
