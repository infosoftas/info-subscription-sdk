<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An additional product to include in an inline subscription plan draft.
*/
class SubscriptionPlanDraftAdditionalProduct implements Parsable 
{
    /**
     * @var bool|null $includedInPlan When true the product is included in the plan price and cannot be removed from a running subscription.
    */
    private ?bool $includedInPlan = null;
    
    /**
     * @var string|null $productId Identifier of the product.
    */
    private ?string $productId = null;
    
    /**
     * @var bool|null $renewalAtListPrice When true the unit price is recalculated from the list price at renewal.
    */
    private ?bool $renewalAtListPrice = null;
    
    /**
     * @var Price|null $unitPrice Represents a flattened DTO version of the Price class.
    */
    private ?Price $unitPrice = null;
    
    /**
     * @var int|null $units Number of units of this product.
    */
    private ?int $units = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionPlanDraftAdditionalProduct
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionPlanDraftAdditionalProduct {
        return new SubscriptionPlanDraftAdditionalProduct();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'includedInPlan' => fn(ParseNode $n) => $o->setIncludedInPlan($n->getBooleanValue()),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'renewalAtListPrice' => fn(ParseNode $n) => $o->setRenewalAtListPrice($n->getBooleanValue()),
            'unitPrice' => fn(ParseNode $n) => $o->setUnitPrice($n->getObjectValue([Price::class, 'createFromDiscriminatorValue'])),
            'units' => fn(ParseNode $n) => $o->setUnits($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the includedInPlan property value. When true the product is included in the plan price and cannot be removed from a running subscription.
     * @return bool|null
    */
    public function getIncludedInPlan(): ?bool {
        return $this->includedInPlan;
    }

    /**
     * Gets the productId property value. Identifier of the product.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the renewalAtListPrice property value. When true the unit price is recalculated from the list price at renewal.
     * @return bool|null
    */
    public function getRenewalAtListPrice(): ?bool {
        return $this->renewalAtListPrice;
    }

    /**
     * Gets the unitPrice property value. Represents a flattened DTO version of the Price class.
     * @return Price|null
    */
    public function getUnitPrice(): ?Price {
        return $this->unitPrice;
    }

    /**
     * Gets the units property value. Number of units of this product.
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
        $writer->writeBooleanValue('includedInPlan', $this->getIncludedInPlan());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeBooleanValue('renewalAtListPrice', $this->getRenewalAtListPrice());
        $writer->writeObjectValue('unitPrice', $this->getUnitPrice());
        $writer->writeIntegerValue('units', $this->getUnits());
    }

    /**
     * Sets the includedInPlan property value. When true the product is included in the plan price and cannot be removed from a running subscription.
     * @param bool|null $value Value to set for the includedInPlan property.
    */
    public function setIncludedInPlan(?bool $value): void {
        $this->includedInPlan = $value;
    }

    /**
     * Sets the productId property value. Identifier of the product.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the renewalAtListPrice property value. When true the unit price is recalculated from the list price at renewal.
     * @param bool|null $value Value to set for the renewalAtListPrice property.
    */
    public function setRenewalAtListPrice(?bool $value): void {
        $this->renewalAtListPrice = $value;
    }

    /**
     * Sets the unitPrice property value. Represents a flattened DTO version of the Price class.
     * @param Price|null $value Value to set for the unitPrice property.
    */
    public function setUnitPrice(?Price $value): void {
        $this->unitPrice = $value;
    }

    /**
     * Sets the units property value. Number of units of this product.
     * @param int|null $value Value to set for the units property.
    */
    public function setUnits(?int $value): void {
        $this->units = $value;
    }

}
