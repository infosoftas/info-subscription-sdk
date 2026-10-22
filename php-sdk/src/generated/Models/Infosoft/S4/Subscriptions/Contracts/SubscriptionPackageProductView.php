<?php

namespace Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Subscriptions\Contracts;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A subscription package product view.
*/
class SubscriptionPackageProductView implements Parsable 
{
    /**
     * @var string|null $description Gets or sets the description.
    */
    private ?string $description = null;
    
    /**
     * @var float|null $fullPrice Gets or sets the full price.
    */
    private ?float $fullPrice = null;
    
    /**
     * @var string|null $name Gets or sets the name.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $productId Gets or sets the identifier of the product.
    */
    private ?string $productId = null;
    
    /**
     * @var int|null $quantity Gets or sets the quantity.
    */
    private ?int $quantity = null;
    
    /**
     * @var string|null $subscriptionPackageId Gets or sets the identifier of the subscription package.
    */
    private ?string $subscriptionPackageId = null;
    
    /**
     * @var float|null $taxPercent Gets or sets the tax percent.
    */
    private ?float $taxPercent = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionPackageProductView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionPackageProductView {
        return new SubscriptionPackageProductView();
    }

    /**
     * Gets the description property value. Gets or sets the description.
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'fullPrice' => fn(ParseNode $n) => $o->setFullPrice($n->getFloatValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'subscriptionPackageId' => fn(ParseNode $n) => $o->setSubscriptionPackageId($n->getStringValue()),
            'taxPercent' => fn(ParseNode $n) => $o->setTaxPercent($n->getFloatValue()),
        ];
    }

    /**
     * Gets the fullPrice property value. Gets or sets the full price.
     * @return float|null
    */
    public function getFullPrice(): ?float {
        return $this->fullPrice;
    }

    /**
     * Gets the name property value. Gets or sets the name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
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
     * Gets the subscriptionPackageId property value. Gets or sets the identifier of the subscription package.
     * @return string|null
    */
    public function getSubscriptionPackageId(): ?string {
        return $this->subscriptionPackageId;
    }

    /**
     * Gets the taxPercent property value. Gets or sets the tax percent.
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
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeFloatValue('fullPrice', $this->getFullPrice());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeStringValue('subscriptionPackageId', $this->getSubscriptionPackageId());
        $writer->writeFloatValue('taxPercent', $this->getTaxPercent());
    }

    /**
     * Sets the description property value. Gets or sets the description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the fullPrice property value. Gets or sets the full price.
     * @param float|null $value Value to set for the fullPrice property.
    */
    public function setFullPrice(?float $value): void {
        $this->fullPrice = $value;
    }

    /**
     * Sets the name property value. Gets or sets the name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
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
     * Sets the subscriptionPackageId property value. Gets or sets the identifier of the subscription package.
     * @param string|null $value Value to set for the subscriptionPackageId property.
    */
    public function setSubscriptionPackageId(?string $value): void {
        $this->subscriptionPackageId = $value;
    }

    /**
     * Sets the taxPercent property value. Gets or sets the tax percent.
     * @param float|null $value Value to set for the taxPercent property.
    */
    public function setTaxPercent(?float $value): void {
        $this->taxPercent = $value;
    }

}
