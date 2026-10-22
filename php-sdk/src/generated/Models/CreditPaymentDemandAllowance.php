<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A class that contains information about how to credit a specific payment demand allowance.
*/
class CreditPaymentDemandAllowance implements Parsable 
{
    /**
     * @var string|null $allowanceId The identifier of the allowance that should be credited.
    */
    private ?string $allowanceId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreditPaymentDemandAllowance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreditPaymentDemandAllowance {
        return new CreditPaymentDemandAllowance();
    }

    /**
     * Gets the allowanceId property value. The identifier of the allowance that should be credited.
     * @return string|null
    */
    public function getAllowanceId(): ?string {
        return $this->allowanceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowanceId' => fn(ParseNode $n) => $o->setAllowanceId($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('allowanceId', $this->getAllowanceId());
    }

    /**
     * Sets the allowanceId property value. The identifier of the allowance that should be credited.
     * @param string|null $value Value to set for the allowanceId property.
    */
    public function setAllowanceId(?string $value): void {
        $this->allowanceId = $value;
    }

}
