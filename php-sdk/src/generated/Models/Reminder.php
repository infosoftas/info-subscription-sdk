<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The reminder represents a followup letter on the original invoice.
*/
class Reminder extends InvoiceBase implements Parsable 
{
    /**
     * @var DateTime|null $dueDate Gets the date on which the invoice is expected to be paid.
    */
    private ?DateTime $dueDate = null;
    
    /**
     * @var InvoiceReference|null $invoiceReference Class to reference an invoice from the related Credit Note.
    */
    private ?InvoiceReference $invoiceReference = null;
    
    /**
     * @var array<Charge>|null $penaltySurcharges Gets or sets the penalty surcharges.
    */
    private ?array $penaltySurcharges = null;
    
    /**
     * @var int|null $reminderNumber Gets the reminder sequence number (1. for the first reminder, 2 for the second etc)
    */
    private ?int $reminderNumber = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Reminder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Reminder {
        return new Reminder();
    }

    /**
     * Gets the dueDate property value. Gets the date on which the invoice is expected to be paid.
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
        return array_merge(parent::getFieldDeserializers(), [
            'dueDate' => fn(ParseNode $n) => $o->setDueDate($n->getDateTimeValue()),
            'invoiceReference' => fn(ParseNode $n) => $o->setInvoiceReference($n->getObjectValue([InvoiceReference::class, 'createFromDiscriminatorValue'])),
            'penaltySurcharges' => fn(ParseNode $n) => $o->setPenaltySurcharges($n->getCollectionOfObjectValues([Charge::class, 'createFromDiscriminatorValue'])),
            'reminderNumber' => fn(ParseNode $n) => $o->setReminderNumber($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the invoiceReference property value. Class to reference an invoice from the related Credit Note.
     * @return InvoiceReference|null
    */
    public function getInvoiceReference(): ?InvoiceReference {
        return $this->invoiceReference;
    }

    /**
     * Gets the penaltySurcharges property value. Gets or sets the penalty surcharges.
     * @return array<Charge>|null
    */
    public function getPenaltySurcharges(): ?array {
        return $this->penaltySurcharges;
    }

    /**
     * Gets the reminderNumber property value. Gets the reminder sequence number (1. for the first reminder, 2 for the second etc)
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
        parent::serialize($writer);
        $writer->writeDateTimeValue('dueDate', $this->getDueDate());
        $writer->writeObjectValue('invoiceReference', $this->getInvoiceReference());
        $writer->writeCollectionOfObjectValues('penaltySurcharges', $this->getPenaltySurcharges());
        $writer->writeIntegerValue('reminderNumber', $this->getReminderNumber());
    }

    /**
     * Sets the dueDate property value. Gets the date on which the invoice is expected to be paid.
     * @param DateTime|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?DateTime $value): void {
        $this->dueDate = $value;
    }

    /**
     * Sets the invoiceReference property value. Class to reference an invoice from the related Credit Note.
     * @param InvoiceReference|null $value Value to set for the invoiceReference property.
    */
    public function setInvoiceReference(?InvoiceReference $value): void {
        $this->invoiceReference = $value;
    }

    /**
     * Sets the penaltySurcharges property value. Gets or sets the penalty surcharges.
     * @param array<Charge>|null $value Value to set for the penaltySurcharges property.
    */
    public function setPenaltySurcharges(?array $value): void {
        $this->penaltySurcharges = $value;
    }

    /**
     * Sets the reminderNumber property value. Gets the reminder sequence number (1. for the first reminder, 2 for the second etc)
     * @param int|null $value Value to set for the reminderNumber property.
    */
    public function setReminderNumber(?int $value): void {
        $this->reminderNumber = $value;
    }

}
