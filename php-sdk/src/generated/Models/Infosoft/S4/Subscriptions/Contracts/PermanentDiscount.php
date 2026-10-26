<?php

namespace Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Subscriptions\Contracts;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A permanent discount.
*/
class PermanentDiscount implements Parsable 
{
    /**
     * @var string|null $name Gets or sets the name.
    */
    private ?string $name = null;
    
    /**
     * @var float|null $percent Gets or sets the percent.
    */
    private ?float $percent = null;
    
    /**
     * @var string|null $permanentDiscountId Gets or sets the identifier of the permanent discount.
    */
    private ?string $permanentDiscountId = null;
    
    /**
     * @var string|null $subscriptionPackageId Gets or sets the identifier of the subscription package.
    */
    private ?string $subscriptionPackageId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermanentDiscount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermanentDiscount {
        return new PermanentDiscount();
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
            'permanentDiscountId' => fn(ParseNode $n) => $o->setPermanentDiscountId($n->getStringValue()),
            'subscriptionPackageId' => fn(ParseNode $n) => $o->setSubscriptionPackageId($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. Gets or sets the name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the percent property value. Gets or sets the percent.
     * @return float|null
    */
    public function getPercent(): ?float {
        return $this->percent;
    }

    /**
     * Gets the permanentDiscountId property value. Gets or sets the identifier of the permanent discount.
     * @return string|null
    */
    public function getPermanentDiscountId(): ?string {
        return $this->permanentDiscountId;
    }

    /**
     * Gets the subscriptionPackageId property value. Gets or sets the identifier of the subscription package.
     * @return string|null
    */
    public function getSubscriptionPackageId(): ?string {
        return $this->subscriptionPackageId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
        $writer->writeFloatValue('percent', $this->getPercent());
        $writer->writeStringValue('permanentDiscountId', $this->getPermanentDiscountId());
        $writer->writeStringValue('subscriptionPackageId', $this->getSubscriptionPackageId());
    }

    /**
     * Sets the name property value. Gets or sets the name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the percent property value. Gets or sets the percent.
     * @param float|null $value Value to set for the percent property.
    */
    public function setPercent(?float $value): void {
        $this->percent = $value;
    }

    /**
     * Sets the permanentDiscountId property value. Gets or sets the identifier of the permanent discount.
     * @param string|null $value Value to set for the permanentDiscountId property.
    */
    public function setPermanentDiscountId(?string $value): void {
        $this->permanentDiscountId = $value;
    }

    /**
     * Sets the subscriptionPackageId property value. Gets or sets the identifier of the subscription package.
     * @param string|null $value Value to set for the subscriptionPackageId property.
    */
    public function setSubscriptionPackageId(?string $value): void {
        $this->subscriptionPackageId = $value;
    }

}
