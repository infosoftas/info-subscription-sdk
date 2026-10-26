<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A package chain definition for an inline subscription plan draft.
*/
class SubscriptionPlanDraftChain implements Parsable 
{
    /**
     * @var string|null $description Description of the chain.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $name Display name of the chain.
    */
    private ?string $name = null;
    
    /**
     * @var int|null $stepPosition Position of the first step within the chain.
    */
    private ?int $stepPosition = null;
    
    /**
     * @var array<SubscriptionPlanDraftChainStep>|null $steps Steps that make up this chain.
    */
    private ?array $steps = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionPlanDraftChain
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionPlanDraftChain {
        return new SubscriptionPlanDraftChain();
    }

    /**
     * Gets the description property value. Description of the chain.
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
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'stepPosition' => fn(ParseNode $n) => $o->setStepPosition($n->getIntegerValue()),
            'steps' => fn(ParseNode $n) => $o->setSteps($n->getCollectionOfObjectValues([SubscriptionPlanDraftChainStep::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the name property value. Display name of the chain.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the stepPosition property value. Position of the first step within the chain.
     * @return int|null
    */
    public function getStepPosition(): ?int {
        return $this->stepPosition;
    }

    /**
     * Gets the steps property value. Steps that make up this chain.
     * @return array<SubscriptionPlanDraftChainStep>|null
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
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('stepPosition', $this->getStepPosition());
        $writer->writeCollectionOfObjectValues('steps', $this->getSteps());
    }

    /**
     * Sets the description property value. Description of the chain.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the name property value. Display name of the chain.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the stepPosition property value. Position of the first step within the chain.
     * @param int|null $value Value to set for the stepPosition property.
    */
    public function setStepPosition(?int $value): void {
        $this->stepPosition = $value;
    }

    /**
     * Sets the steps property value. Steps that make up this chain.
     * @param array<SubscriptionPlanDraftChainStep>|null $value Value to set for the steps property.
    */
    public function setSteps(?array $value): void {
        $this->steps = $value;
    }

}
