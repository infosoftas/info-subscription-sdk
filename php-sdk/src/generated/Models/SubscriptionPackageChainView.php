<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A subscription package chain.
*/
class SubscriptionPackageChainView implements Parsable 
{
    /**
     * @var string|null $description Gets or sets the description.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name Gets or sets the name.
    */
    private ?string $name = null;
    
    /**
     * @var int|null $stepPosition Gets the step position.
    */
    private ?int $stepPosition = null;
    
    /**
     * @var array<SubscriptionPackageChainStep>|null $steps Gets or sets the steps.
    */
    private ?array $steps = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionPackageChainView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionPackageChainView {
        return new SubscriptionPackageChainView();
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'stepPosition' => fn(ParseNode $n) => $o->setStepPosition($n->getIntegerValue()),
            'steps' => fn(ParseNode $n) => $o->setSteps($n->getCollectionOfObjectValues([SubscriptionPackageChainStep::class, 'createFromDiscriminatorValue'])),
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
     * Gets the name property value. Gets or sets the name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the stepPosition property value. Gets the step position.
     * @return int|null
    */
    public function getStepPosition(): ?int {
        return $this->stepPosition;
    }

    /**
     * Gets the steps property value. Gets or sets the steps.
     * @return array<SubscriptionPackageChainStep>|null
    */
    public function getSteps(): ?array {
        return $this->steps;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('stepPosition', $this->getStepPosition());
        $writer->writeCollectionOfObjectValues('steps', $this->getSteps());
    }

    /**
     * Sets the description property value. Gets or sets the description.
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
     * Sets the name property value. Gets or sets the name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the stepPosition property value. Gets the step position.
     * @param int|null $value Value to set for the stepPosition property.
    */
    public function setStepPosition(?int $value): void {
        $this->stepPosition = $value;
    }

    /**
     * Sets the steps property value. Gets or sets the steps.
     * @param array<SubscriptionPackageChainStep>|null $value Value to set for the steps property.
    */
    public function setSteps(?array $value): void {
        $this->steps = $value;
    }

}
