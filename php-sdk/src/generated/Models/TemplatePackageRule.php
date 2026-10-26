<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A template package rule.
*/
class TemplatePackageRule implements Parsable 
{
    /**
     * @var PackageRules|null $packageRuleId Values that represent package rules.
    */
    private ?PackageRules $packageRuleId = null;
    
    /**
     * @var string|null $value Gets or sets the value.
    */
    private ?string $value = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TemplatePackageRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TemplatePackageRule {
        return new TemplatePackageRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'packageRuleId' => fn(ParseNode $n) => $o->setPackageRuleId($n->getEnumValue(PackageRules::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the packageRuleId property value. Values that represent package rules.
     * @return PackageRules|null
    */
    public function getPackageRuleId(): ?PackageRules {
        return $this->packageRuleId;
    }

    /**
     * Gets the value property value. Gets or sets the value.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('packageRuleId', $this->getPackageRuleId());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the packageRuleId property value. Values that represent package rules.
     * @param PackageRules|null $value Value to set for the packageRuleId property.
    */
    public function setPackageRuleId(?PackageRules $value): void {
        $this->packageRuleId = $value;
    }

    /**
     * Sets the value property value. Gets or sets the value.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
