<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A subscription package chain step.
*/
class SubscriptionPackageChainStep implements Parsable 
{
    /**
     * @var SubscriptionPackageView|null $nextSubscriptionPackage A SubscriptionPackage view class.
    */
    private ?SubscriptionPackageView $nextSubscriptionPackage = null;
    
    /**
     * @var string|null $nextSubscriptionPackageId Gets or sets the identifier of the next package.
    */
    private ?string $nextSubscriptionPackageId = null;
    
    /**
     * @var bool|null $retain Gets or sets a value indicating whether the retain.
    */
    private ?bool $retain = null;
    
    /**
     * @var int|null $step Gets or sets the amount to increment by.
    */
    private ?int $step = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionPackageChainStep
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionPackageChainStep {
        return new SubscriptionPackageChainStep();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'nextSubscriptionPackage' => fn(ParseNode $n) => $o->setNextSubscriptionPackage($n->getObjectValue([SubscriptionPackageView::class, 'createFromDiscriminatorValue'])),
            'nextSubscriptionPackageId' => fn(ParseNode $n) => $o->setNextSubscriptionPackageId($n->getStringValue()),
            'retain' => fn(ParseNode $n) => $o->setRetain($n->getBooleanValue()),
            'step' => fn(ParseNode $n) => $o->setStep($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the nextSubscriptionPackage property value. A SubscriptionPackage view class.
     * @return SubscriptionPackageView|null
    */
    public function getNextSubscriptionPackage(): ?SubscriptionPackageView {
        return $this->nextSubscriptionPackage;
    }

    /**
     * Gets the nextSubscriptionPackageId property value. Gets or sets the identifier of the next package.
     * @return string|null
    */
    public function getNextSubscriptionPackageId(): ?string {
        return $this->nextSubscriptionPackageId;
    }

    /**
     * Gets the retain property value. Gets or sets a value indicating whether the retain.
     * @return bool|null
    */
    public function getRetain(): ?bool {
        return $this->retain;
    }

    /**
     * Gets the step property value. Gets or sets the amount to increment by.
     * @return int|null
    */
    public function getStep(): ?int {
        return $this->step;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('nextSubscriptionPackage', $this->getNextSubscriptionPackage());
        $writer->writeStringValue('nextSubscriptionPackageId', $this->getNextSubscriptionPackageId());
        $writer->writeBooleanValue('retain', $this->getRetain());
        $writer->writeIntegerValue('step', $this->getStep());
    }

    /**
     * Sets the nextSubscriptionPackage property value. A SubscriptionPackage view class.
     * @param SubscriptionPackageView|null $value Value to set for the nextSubscriptionPackage property.
    */
    public function setNextSubscriptionPackage(?SubscriptionPackageView $value): void {
        $this->nextSubscriptionPackage = $value;
    }

    /**
     * Sets the nextSubscriptionPackageId property value. Gets or sets the identifier of the next package.
     * @param string|null $value Value to set for the nextSubscriptionPackageId property.
    */
    public function setNextSubscriptionPackageId(?string $value): void {
        $this->nextSubscriptionPackageId = $value;
    }

    /**
     * Sets the retain property value. Gets or sets a value indicating whether the retain.
     * @param bool|null $value Value to set for the retain property.
    */
    public function setRetain(?bool $value): void {
        $this->retain = $value;
    }

    /**
     * Sets the step property value. Gets or sets the amount to increment by.
     * @param int|null $value Value to set for the step property.
    */
    public function setStep(?int $value): void {
        $this->step = $value;
    }

}
