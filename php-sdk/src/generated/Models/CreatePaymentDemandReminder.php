<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Parameters for creating a reminder on a payment demand directly, without going through a dunning schedule.This enables external parties (e.g. debt collectors) to register reminders and trigger the associatedinvoice and ledger side-effects in INFO-Subscription without interfering with payment processing.
*/
class CreatePaymentDemandReminder implements Parsable 
{
    /**
     * @var int|null $counter Optional 1-based sequence number for the reminder in this demand's reminder series.When omitted, the counter is auto-discovered from existing reminders in the read model.Prefer to supply the counter when possible to avoid extra internal lookup calls and ensure correct sequencing in case of concurrent reminder creation.
    */
    private ?int $counter = null;
    
    /**
     * @var DateTime|null $dueDate The due date for the reminder.
    */
    private ?DateTime $dueDate = null;
    
    /**
     * @var float|null $fee An optional fixed fee to apply to this reminder.
    */
    private ?float $fee = null;
    
    /**
     * @var ReminderPolicy|null $reminderPolicy A reminder policy options valid across all reminder steps for a dunning process.
    */
    private ?ReminderPolicy $reminderPolicy = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreatePaymentDemandReminder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreatePaymentDemandReminder {
        return new CreatePaymentDemandReminder();
    }

    /**
     * Gets the counter property value. Optional 1-based sequence number for the reminder in this demand's reminder series.When omitted, the counter is auto-discovered from existing reminders in the read model.Prefer to supply the counter when possible to avoid extra internal lookup calls and ensure correct sequencing in case of concurrent reminder creation.
     * @return int|null
    */
    public function getCounter(): ?int {
        return $this->counter;
    }

    /**
     * Gets the dueDate property value. The due date for the reminder.
     * @return DateTime|null
    */
    public function getDueDate(): ?DateTime {
        return $this->dueDate;
    }

    /**
     * Gets the fee property value. An optional fixed fee to apply to this reminder.
     * @return float|null
    */
    public function getFee(): ?float {
        return $this->fee;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'counter' => fn(ParseNode $n) => $o->setCounter($n->getIntegerValue()),
            'dueDate' => fn(ParseNode $n) => $o->setDueDate($n->getDateTimeValue()),
            'fee' => fn(ParseNode $n) => $o->setFee($n->getFloatValue()),
            'reminderPolicy' => fn(ParseNode $n) => $o->setReminderPolicy($n->getObjectValue([ReminderPolicy::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the reminderPolicy property value. A reminder policy options valid across all reminder steps for a dunning process.
     * @return ReminderPolicy|null
    */
    public function getReminderPolicy(): ?ReminderPolicy {
        return $this->reminderPolicy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('counter', $this->getCounter());
        $writer->writeDateTimeValue('dueDate', $this->getDueDate());
        $writer->writeFloatValue('fee', $this->getFee());
        $writer->writeObjectValue('reminderPolicy', $this->getReminderPolicy());
    }

    /**
     * Sets the counter property value. Optional 1-based sequence number for the reminder in this demand's reminder series.When omitted, the counter is auto-discovered from existing reminders in the read model.Prefer to supply the counter when possible to avoid extra internal lookup calls and ensure correct sequencing in case of concurrent reminder creation.
     * @param int|null $value Value to set for the counter property.
    */
    public function setCounter(?int $value): void {
        $this->counter = $value;
    }

    /**
     * Sets the dueDate property value. The due date for the reminder.
     * @param DateTime|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?DateTime $value): void {
        $this->dueDate = $value;
    }

    /**
     * Sets the fee property value. An optional fixed fee to apply to this reminder.
     * @param float|null $value Value to set for the fee property.
    */
    public function setFee(?float $value): void {
        $this->fee = $value;
    }

    /**
     * Sets the reminderPolicy property value. A reminder policy options valid across all reminder steps for a dunning process.
     * @param ReminderPolicy|null $value Value to set for the reminderPolicy property.
    */
    public function setReminderPolicy(?ReminderPolicy $value): void {
        $this->reminderPolicy = $value;
    }

}
