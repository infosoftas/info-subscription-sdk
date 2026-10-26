<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A commercial document confirming a sale between a seller and a buyer. The invoice is issued by the seller and the buyer has to pay the claim.
*/
class Invoice extends InvoiceBase implements Parsable 
{
    /**
     * @var DateTime|null $creditedOn Gets or sets the Date/Time of the credited on.
    */
    private ?DateTime $creditedOn = null;
    
    /**
     * @var string|null $creditNoteId Gets or sets the globally unique identifier for the credit note.
    */
    private ?string $creditNoteId = null;
    
    /**
     * @var DateTime|null $dueDate Gets the date on which the invoice is expected to be paid.
    */
    private ?DateTime $dueDate = null;
    
    /**
     * @var array<ReminderReference>|null $reminders Gets a list of reminders issued for this invoice.
    */
    private ?array $reminders = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Invoice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Invoice {
        return new Invoice();
    }

    /**
     * Gets the creditedOn property value. Gets or sets the Date/Time of the credited on.
     * @return DateTime|null
    */
    public function getCreditedOn(): ?DateTime {
        return $this->creditedOn;
    }

    /**
     * Gets the creditNoteId property value. Gets or sets the globally unique identifier for the credit note.
     * @return string|null
    */
    public function getCreditNoteId(): ?string {
        return $this->creditNoteId;
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
            'creditedOn' => fn(ParseNode $n) => $o->setCreditedOn($n->getDateTimeValue()),
            'creditNoteId' => fn(ParseNode $n) => $o->setCreditNoteId($n->getStringValue()),
            'dueDate' => fn(ParseNode $n) => $o->setDueDate($n->getDateTimeValue()),
            'reminders' => fn(ParseNode $n) => $o->setReminders($n->getCollectionOfObjectValues([ReminderReference::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the reminders property value. Gets a list of reminders issued for this invoice.
     * @return array<ReminderReference>|null
    */
    public function getReminders(): ?array {
        return $this->reminders;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('creditedOn', $this->getCreditedOn());
        $writer->writeStringValue('creditNoteId', $this->getCreditNoteId());
        $writer->writeDateTimeValue('dueDate', $this->getDueDate());
        $writer->writeCollectionOfObjectValues('reminders', $this->getReminders());
    }

    /**
     * Sets the creditedOn property value. Gets or sets the Date/Time of the credited on.
     * @param DateTime|null $value Value to set for the creditedOn property.
    */
    public function setCreditedOn(?DateTime $value): void {
        $this->creditedOn = $value;
    }

    /**
     * Sets the creditNoteId property value. Gets or sets the globally unique identifier for the credit note.
     * @param string|null $value Value to set for the creditNoteId property.
    */
    public function setCreditNoteId(?string $value): void {
        $this->creditNoteId = $value;
    }

    /**
     * Sets the dueDate property value. Gets the date on which the invoice is expected to be paid.
     * @param DateTime|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?DateTime $value): void {
        $this->dueDate = $value;
    }

    /**
     * Sets the reminders property value. Gets a list of reminders issued for this invoice.
     * @param array<ReminderReference>|null $value Value to set for the reminders property.
    */
    public function setReminders(?array $value): void {
        $this->reminders = $value;
    }

}
