<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Holds a reference to a centralized template plan together with anychoice overrides that should be applied when creating the subscription.This bundles the template identifier and the override choices into asingle object for clarity when selecting template-based plans.
*/
class TemplatePlanReference implements Parsable 
{
    /**
     * @var OrderChoices|null $choices Represents properties/choices that overrides/set options from the Template Subscription Plan.
    */
    private ?OrderChoices $choices = null;
    
    /**
     * @var string|null $templatePlanId Identifier of the template plan.
    */
    private ?string $templatePlanId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TemplatePlanReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TemplatePlanReference {
        return new TemplatePlanReference();
    }

    /**
     * Gets the choices property value. Represents properties/choices that overrides/set options from the Template Subscription Plan.
     * @return OrderChoices|null
    */
    public function getChoices(): ?OrderChoices {
        return $this->choices;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'choices' => fn(ParseNode $n) => $o->setChoices($n->getObjectValue([OrderChoices::class, 'createFromDiscriminatorValue'])),
            'templatePlanId' => fn(ParseNode $n) => $o->setTemplatePlanId($n->getStringValue()),
        ];
    }

    /**
     * Gets the templatePlanId property value. Identifier of the template plan.
     * @return string|null
    */
    public function getTemplatePlanId(): ?string {
        return $this->templatePlanId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('choices', $this->getChoices());
        $writer->writeStringValue('templatePlanId', $this->getTemplatePlanId());
    }

    /**
     * Sets the choices property value. Represents properties/choices that overrides/set options from the Template Subscription Plan.
     * @param OrderChoices|null $value Value to set for the choices property.
    */
    public function setChoices(?OrderChoices $value): void {
        $this->choices = $value;
    }

    /**
     * Sets the templatePlanId property value. Identifier of the template plan.
     * @param string|null $value Value to set for the templatePlanId property.
    */
    public function setTemplatePlanId(?string $value): void {
        $this->templatePlanId = $value;
    }

}
