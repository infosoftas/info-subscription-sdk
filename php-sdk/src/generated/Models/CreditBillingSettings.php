<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A collection of settings for controlling billing behaviour during crediting operations.
*/
class CreditBillingSettings implements Parsable 
{
    /**
     * @var bool|null $disableConvertSettledDemandToAllowance Indicates whether to convert settled demand to allowance or not. If enabled (default), settled demands will be converted to allowances.
    */
    private ?bool $disableConvertSettledDemandToAllowance = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreditBillingSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreditBillingSettings {
        return new CreditBillingSettings();
    }

    /**
     * Gets the disableConvertSettledDemandToAllowance property value. Indicates whether to convert settled demand to allowance or not. If enabled (default), settled demands will be converted to allowances.
     * @return bool|null
    */
    public function getDisableConvertSettledDemandToAllowance(): ?bool {
        return $this->disableConvertSettledDemandToAllowance;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'disableConvertSettledDemandToAllowance' => fn(ParseNode $n) => $o->setDisableConvertSettledDemandToAllowance($n->getBooleanValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('disableConvertSettledDemandToAllowance', $this->getDisableConvertSettledDemandToAllowance());
    }

    /**
     * Sets the disableConvertSettledDemandToAllowance property value. Indicates whether to convert settled demand to allowance or not. If enabled (default), settled demands will be converted to allowances.
     * @param bool|null $value Value to set for the disableConvertSettledDemandToAllowance property.
    */
    public function setDisableConvertSettledDemandToAllowance(?bool $value): void {
        $this->disableConvertSettledDemandToAllowance = $value;
    }

}
