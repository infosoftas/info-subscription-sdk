<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A class that contains information about how to credit a specific payment demand charge.
*/
class CreditPaymentDemandCharge implements Parsable 
{
    /**
     * @var string|null $chargeId The identifier of the charge that should be credited.
    */
    private ?string $chargeId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreditPaymentDemandCharge
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreditPaymentDemandCharge {
        return new CreditPaymentDemandCharge();
    }

    /**
     * Gets the chargeId property value. The identifier of the charge that should be credited.
     * @return string|null
    */
    public function getChargeId(): ?string {
        return $this->chargeId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'chargeId' => fn(ParseNode $n) => $o->setChargeId($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('chargeId', $this->getChargeId());
    }

    /**
     * Sets the chargeId property value. The identifier of the charge that should be credited.
     * @param string|null $value Value to set for the chargeId property.
    */
    public function setChargeId(?string $value): void {
        $this->chargeId = $value;
    }

}
