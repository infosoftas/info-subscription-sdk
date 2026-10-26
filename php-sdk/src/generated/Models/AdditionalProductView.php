<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents an additional product.
*/
class AdditionalProductView implements Parsable 
{
    /**
     * @var bool|null $includedInPlan A value indicating if this product is included in the subscription plan or not. Separately purchased products are always false, even if the price is zero.
    */
    private ?bool $includedInPlan = null;
    
    /**
     * @var string|null $productId The product identifier.
    */
    private ?string $productId = null;
    
    /**
     * @var bool|null $renewalAtListPrice A value indicating whether the price should be re-calculated at renewal based on the list price or not. This has no effect if IncludedInPlan is true.
    */
    private ?bool $renewalAtListPrice = null;
    
    /**
     * @var string|null $subscriptionPackageId The the subscription package this product is associated with.
    */
    private ?string $subscriptionPackageId = null;
    
    /**
     * @var Price|null $unitPrice Represents a flattened DTO version of the Price class.
    */
    private ?Price $unitPrice = null;
    
    /**
     * @var int|null $units The number of units of this product.
    */
    private ?int $units = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdditionalProductView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdditionalProductView {
        return new AdditionalProductView();
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
            'subscriptionPackageId' => fn(ParseNode $n) => $o->setSubscriptionPackageId($n->getStringValue()),
            'unitPrice' => fn(ParseNode $n) => $o->setUnitPrice($n->getObjectValue([Price::class, 'createFromDiscriminatorValue'])),
            'units' => fn(ParseNode $n) => $o->setUnits($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the includedInPlan property value. A value indicating if this product is included in the subscription plan or not. Separately purchased products are always false, even if the price is zero.
     * @return bool|null
    */
    public function getIncludedInPlan(): ?bool {
        return $this->includedInPlan;
    }

    /**
     * Gets the productId property value. The product identifier.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the renewalAtListPrice property value. A value indicating whether the price should be re-calculated at renewal based on the list price or not. This has no effect if IncludedInPlan is true.
     * @return bool|null
    */
    public function getRenewalAtListPrice(): ?bool {
        return $this->renewalAtListPrice;
    }

    /**
     * Gets the subscriptionPackageId property value. The the subscription package this product is associated with.
     * @return string|null
    */
    public function getSubscriptionPackageId(): ?string {
        return $this->subscriptionPackageId;
    }

    /**
     * Gets the unitPrice property value. Represents a flattened DTO version of the Price class.
     * @return Price|null
    */
    public function getUnitPrice(): ?Price {
        return $this->unitPrice;
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
        $writer->writeBooleanValue('includedInPlan', $this->getIncludedInPlan());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeBooleanValue('renewalAtListPrice', $this->getRenewalAtListPrice());
        $writer->writeStringValue('subscriptionPackageId', $this->getSubscriptionPackageId());
        $writer->writeObjectValue('unitPrice', $this->getUnitPrice());
        $writer->writeIntegerValue('units', $this->getUnits());
    }

    /**
     * Sets the includedInPlan property value. A value indicating if this product is included in the subscription plan or not. Separately purchased products are always false, even if the price is zero.
     * @param bool|null $value Value to set for the includedInPlan property.
    */
    public function setIncludedInPlan(?bool $value): void {
        $this->includedInPlan = $value;
    }

    /**
     * Sets the productId property value. The product identifier.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the renewalAtListPrice property value. A value indicating whether the price should be re-calculated at renewal based on the list price or not. This has no effect if IncludedInPlan is true.
     * @param bool|null $value Value to set for the renewalAtListPrice property.
    */
    public function setRenewalAtListPrice(?bool $value): void {
        $this->renewalAtListPrice = $value;
    }

    /**
     * Sets the subscriptionPackageId property value. The the subscription package this product is associated with.
     * @param string|null $value Value to set for the subscriptionPackageId property.
    */
    public function setSubscriptionPackageId(?string $value): void {
        $this->subscriptionPackageId = $value;
    }

    /**
     * Sets the unitPrice property value. Represents a flattened DTO version of the Price class.
     * @param Price|null $value Value to set for the unitPrice property.
    */
    public function setUnitPrice(?Price $value): void {
        $this->unitPrice = $value;
    }

    /**
     * Sets the units property value. The number of units of this product.
     * @param int|null $value Value to set for the units property.
    */
    public function setUnits(?int $value): void {
        $this->units = $value;
    }

}
