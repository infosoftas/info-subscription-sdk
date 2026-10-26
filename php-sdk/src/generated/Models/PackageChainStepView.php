<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A package chain step view.
*/
class PackageChainStepView implements Parsable 
{
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var TemplatePackageView|null $nextPackage A template package view.
    */
    private ?TemplatePackageView $nextPackage = null;
    
    /**
     * @var string|null $nextPackageId Gets or sets the identifier of the next package.
    */
    private ?string $nextPackageId = null;
    
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
     * @return PackageChainStepView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PackageChainStepView {
        return new PackageChainStepView();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'nextPackage' => fn(ParseNode $n) => $o->setNextPackage($n->getObjectValue([TemplatePackageView::class, 'createFromDiscriminatorValue'])),
            'nextPackageId' => fn(ParseNode $n) => $o->setNextPackageId($n->getStringValue()),
            'retain' => fn(ParseNode $n) => $o->setRetain($n->getBooleanValue()),
            'step' => fn(ParseNode $n) => $o->setStep($n->getIntegerValue()),
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
     * Gets the nextPackage property value. A template package view.
     * @return TemplatePackageView|null
    */
    public function getNextPackage(): ?TemplatePackageView {
        return $this->nextPackage;
    }

    /**
     * Gets the nextPackageId property value. Gets or sets the identifier of the next package.
     * @return string|null
    */
    public function getNextPackageId(): ?string {
        return $this->nextPackageId;
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
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('nextPackage', $this->getNextPackage());
        $writer->writeStringValue('nextPackageId', $this->getNextPackageId());
        $writer->writeBooleanValue('retain', $this->getRetain());
        $writer->writeIntegerValue('step', $this->getStep());
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the nextPackage property value. A template package view.
     * @param TemplatePackageView|null $value Value to set for the nextPackage property.
    */
    public function setNextPackage(?TemplatePackageView $value): void {
        $this->nextPackage = $value;
    }

    /**
     * Sets the nextPackageId property value. Gets or sets the identifier of the next package.
     * @param string|null $value Value to set for the nextPackageId property.
    */
    public function setNextPackageId(?string $value): void {
        $this->nextPackageId = $value;
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
