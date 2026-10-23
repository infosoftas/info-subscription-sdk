<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Provides information needed to write off a payment demand (in full), without creating a credit note.
*/
class WriteOffPaymentDemand implements Parsable 
{
    /**
     * @var string|null $writeOffReason The descriptive reasoning for the write off action.
    */
    private ?string $writeOffReason = null;
    
    /**
     * @var DateTime|null $writeOffTime The time of the write off, if not specified will default to the time of command processing.
    */
    private ?DateTime $writeOffTime = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WriteOffPaymentDemand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WriteOffPaymentDemand {
        return new WriteOffPaymentDemand();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'writeOffReason' => fn(ParseNode $n) => $o->setWriteOffReason($n->getStringValue()),
            'writeOffTime' => fn(ParseNode $n) => $o->setWriteOffTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the writeOffReason property value. The descriptive reasoning for the write off action.
     * @return string|null
    */
    public function getWriteOffReason(): ?string {
        return $this->writeOffReason;
    }

    /**
     * Gets the writeOffTime property value. The time of the write off, if not specified will default to the time of command processing.
     * @return DateTime|null
    */
    public function getWriteOffTime(): ?DateTime {
        return $this->writeOffTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('writeOffReason', $this->getWriteOffReason());
        $writer->writeDateTimeValue('writeOffTime', $this->getWriteOffTime());
    }

    /**
     * Sets the writeOffReason property value. The descriptive reasoning for the write off action.
     * @param string|null $value Value to set for the writeOffReason property.
    */
    public function setWriteOffReason(?string $value): void {
        $this->writeOffReason = $value;
    }

    /**
     * Sets the writeOffTime property value. The time of the write off, if not specified will default to the time of command processing.
     * @param DateTime|null $value Value to set for the writeOffTime property.
    */
    public function setWriteOffTime(?DateTime $value): void {
        $this->writeOffTime = $value;
    }

}
