<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A reminder policy options valid across all reminder steps for a dunning process.
*/
class ReminderPolicy implements Parsable 
{
    /**
     * @var bool|null $disableAccountPaymentConsumption A value indicating whether the account allowance consumption should happen when generating reminders.
    */
    private ?bool $disableAccountPaymentConsumption = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReminderPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReminderPolicy {
        return new ReminderPolicy();
    }

    /**
     * Gets the disableAccountPaymentConsumption property value. A value indicating whether the account allowance consumption should happen when generating reminders.
     * @return bool|null
    */
    public function getDisableAccountPaymentConsumption(): ?bool {
        return $this->disableAccountPaymentConsumption;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'disableAccountPaymentConsumption' => fn(ParseNode $n) => $o->setDisableAccountPaymentConsumption($n->getBooleanValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('disableAccountPaymentConsumption', $this->getDisableAccountPaymentConsumption());
    }

    /**
     * Sets the disableAccountPaymentConsumption property value. A value indicating whether the account allowance consumption should happen when generating reminders.
     * @param bool|null $value Value to set for the disableAccountPaymentConsumption property.
    */
    public function setDisableAccountPaymentConsumption(?bool $value): void {
        $this->disableAccountPaymentConsumption = $value;
    }

}
