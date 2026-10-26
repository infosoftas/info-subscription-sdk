<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A template package billing plan view.
*/
class TemplatePackageBillingPlanView implements Parsable 
{
    /**
     * @var string|null $billingPlanId Gets or sets the identifier of the billing plan.
    */
    private ?string $billingPlanId = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $templatePackageId Gets or sets the identifier of the template package.
    */
    private ?string $templatePackageId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TemplatePackageBillingPlanView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TemplatePackageBillingPlanView {
        return new TemplatePackageBillingPlanView();
    }

    /**
     * Gets the billingPlanId property value. Gets or sets the identifier of the billing plan.
     * @return string|null
    */
    public function getBillingPlanId(): ?string {
        return $this->billingPlanId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingPlanId' => fn(ParseNode $n) => $o->setBillingPlanId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'templatePackageId' => fn(ParseNode $n) => $o->setTemplatePackageId($n->getStringValue()),
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
     * Gets the templatePackageId property value. Gets or sets the identifier of the template package.
     * @return string|null
    */
    public function getTemplatePackageId(): ?string {
        return $this->templatePackageId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('billingPlanId', $this->getBillingPlanId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('templatePackageId', $this->getTemplatePackageId());
    }

    /**
     * Sets the billingPlanId property value. Gets or sets the identifier of the billing plan.
     * @param string|null $value Value to set for the billingPlanId property.
    */
    public function setBillingPlanId(?string $value): void {
        $this->billingPlanId = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the templatePackageId property value. Gets or sets the identifier of the template package.
     * @param string|null $value Value to set for the templatePackageId property.
    */
    public function setTemplatePackageId(?string $value): void {
        $this->templatePackageId = $value;
    }

}
