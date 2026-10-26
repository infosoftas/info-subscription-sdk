<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A reminder reference.
*/
class ReminderReference implements Parsable 
{
    /**
     * @var DateTime|null $dueDate Gets the due date.
    */
    private ?DateTime $dueDate = null;
    
    /**
     * @var DateTime|null $issuedOn Gets the Date/Time of the issued on.
    */
    private ?DateTime $issuedOn = null;
    
    /**
     * @var string|null $reminderId Gets the identifier of the reminder.
    */
    private ?string $reminderId = null;
    
    /**
     * @var int|null $reminderNumber Gets the reminder number.
    */
    private ?int $reminderNumber = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReminderReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReminderReference {
        return new ReminderReference();
    }

    /**
     * Gets the dueDate property value. Gets the due date.
     * @return DateTime|null
    */
    public function getDueDate(): ?DateTime {
        return $this->dueDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dueDate' => fn(ParseNode $n) => $o->setDueDate($n->getDateTimeValue()),
            'issuedOn' => fn(ParseNode $n) => $o->setIssuedOn($n->getDateTimeValue()),
            'reminderId' => fn(ParseNode $n) => $o->setReminderId($n->getStringValue()),
            'reminderNumber' => fn(ParseNode $n) => $o->setReminderNumber($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the issuedOn property value. Gets the Date/Time of the issued on.
     * @return DateTime|null
    */
    public function getIssuedOn(): ?DateTime {
        return $this->issuedOn;
    }

    /**
     * Gets the reminderId property value. Gets the identifier of the reminder.
     * @return string|null
    */
    public function getReminderId(): ?string {
        return $this->reminderId;
    }

    /**
     * Gets the reminderNumber property value. Gets the reminder number.
     * @return int|null
    */
    public function getReminderNumber(): ?int {
        return $this->reminderNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('dueDate', $this->getDueDate());
        $writer->writeDateTimeValue('issuedOn', $this->getIssuedOn());
        $writer->writeStringValue('reminderId', $this->getReminderId());
        $writer->writeIntegerValue('reminderNumber', $this->getReminderNumber());
    }

    /**
     * Sets the dueDate property value. Gets the due date.
     * @param DateTime|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?DateTime $value): void {
        $this->dueDate = $value;
    }

    /**
     * Sets the issuedOn property value. Gets the Date/Time of the issued on.
     * @param DateTime|null $value Value to set for the issuedOn property.
    */
    public function setIssuedOn(?DateTime $value): void {
        $this->issuedOn = $value;
    }

    /**
     * Sets the reminderId property value. Gets the identifier of the reminder.
     * @param string|null $value Value to set for the reminderId property.
    */
    public function setReminderId(?string $value): void {
        $this->reminderId = $value;
    }

    /**
     * Sets the reminderNumber property value. Gets the reminder number.
     * @param int|null $value Value to set for the reminderNumber property.
    */
    public function setReminderNumber(?int $value): void {
        $this->reminderNumber = $value;
    }

}
