<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Defines how a subscription plan is sourced. Exactly one of the three properties must be provided.
*/
class PlanSelection implements Parsable 
{
    /**
     * @var SubscriptionPlanDraft|null $plan An inline subscription plan definition to be created during order processing.
    */
    private ?SubscriptionPlanDraft $plan = null;
    
    /**
     * @var string|null $subscriptionPlanId Identifier of an existing subscription plan in the SubscriptionService.
    */
    private ?string $subscriptionPlanId = null;
    
    /**
     * @var TemplatePlanReference|null $template Holds a reference to a centralized template plan together with anychoice overrides that should be applied when creating the subscription.This bundles the template identifier and the override choices into asingle object for clarity when selecting template-based plans.
    */
    private ?TemplatePlanReference $template = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlanSelection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlanSelection {
        return new PlanSelection();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'plan' => fn(ParseNode $n) => $o->setPlan($n->getObjectValue([SubscriptionPlanDraft::class, 'createFromDiscriminatorValue'])),
            'subscriptionPlanId' => fn(ParseNode $n) => $o->setSubscriptionPlanId($n->getStringValue()),
            'template' => fn(ParseNode $n) => $o->setTemplate($n->getObjectValue([TemplatePlanReference::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the plan property value. An inline subscription plan definition to be created during order processing.
     * @return SubscriptionPlanDraft|null
    */
    public function getPlan(): ?SubscriptionPlanDraft {
        return $this->plan;
    }

    /**
     * Gets the subscriptionPlanId property value. Identifier of an existing subscription plan in the SubscriptionService.
     * @return string|null
    */
    public function getSubscriptionPlanId(): ?string {
        return $this->subscriptionPlanId;
    }

    /**
     * Gets the template property value. Holds a reference to a centralized template plan together with anychoice overrides that should be applied when creating the subscription.This bundles the template identifier and the override choices into asingle object for clarity when selecting template-based plans.
     * @return TemplatePlanReference|null
    */
    public function getTemplate(): ?TemplatePlanReference {
        return $this->template;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('plan', $this->getPlan());
        $writer->writeStringValue('subscriptionPlanId', $this->getSubscriptionPlanId());
        $writer->writeObjectValue('template', $this->getTemplate());
    }

    /**
     * Sets the plan property value. An inline subscription plan definition to be created during order processing.
     * @param SubscriptionPlanDraft|null $value Value to set for the plan property.
    */
    public function setPlan(?SubscriptionPlanDraft $value): void {
        $this->plan = $value;
    }

    /**
     * Sets the subscriptionPlanId property value. Identifier of an existing subscription plan in the SubscriptionService.
     * @param string|null $value Value to set for the subscriptionPlanId property.
    */
    public function setSubscriptionPlanId(?string $value): void {
        $this->subscriptionPlanId = $value;
    }

    /**
     * Sets the template property value. Holds a reference to a centralized template plan together with anychoice overrides that should be applied when creating the subscription.This bundles the template identifier and the override choices into asingle object for clarity when selecting template-based plans.
     * @param TemplatePlanReference|null $value Value to set for the template property.
    */
    public function setTemplate(?TemplatePlanReference $value): void {
        $this->template = $value;
    }

}
