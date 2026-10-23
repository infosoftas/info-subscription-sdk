<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Datacontract to hold properties for a reminder.
*/
class PaymentDemandReminderView implements Parsable 
{
    /**
     * @var int|null $counter The reminder counter, i.e. is this the first reminder, the second or the 25th.
    */
    private ?int $counter = null;
    
    /**
     * @var string|null $currency The currency for the reminder - follows the original demand and the fee.
    */
    private ?string $currency = null;
    
    /**
     * @var DateTime|null $dueDate The due date.
    */
    private ?DateTime $dueDate = null;
    
    /**
     * @var float|null $fee The fee/surcharge (if any).
    */
    private ?float $fee = null;
    
    /**
     * @var string|null $id The reminder identifier.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $invoiceId The identifier of the invoice.
    */
    private ?string $invoiceId = null;
    
    /**
     * @var DateTime|null $issuedOn The reminder issue time.
    */
    private ?DateTime $issuedOn = null;
    
    /**
     * @var string|null $ledgerId The identifier on the ledger (if applicable).
    */
    private ?string $ledgerId = null;
    
    /**
     * @var string|null $originalPaymentDemandId The original payment demand that this is a reminder for.
    */
    private ?string $originalPaymentDemandId = null;
    
    /**
     * @var float|null $payableAmount The payable amount required to settle the demand and the reminder.
    */
    private ?float $payableAmount = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentDemandReminderView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentDemandReminderView {
        return new PaymentDemandReminderView();
    }

    /**
     * Gets the counter property value. The reminder counter, i.e. is this the first reminder, the second or the 25th.
     * @return int|null
    */
    public function getCounter(): ?int {
        return $this->counter;
    }

    /**
     * Gets the currency property value. The currency for the reminder - follows the original demand and the fee.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the dueDate property value. The due date.
     * @return DateTime|null
    */
    public function getDueDate(): ?DateTime {
        return $this->dueDate;
    }

    /**
     * Gets the fee property value. The fee/surcharge (if any).
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
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'dueDate' => fn(ParseNode $n) => $o->setDueDate($n->getDateTimeValue()),
            'fee' => fn(ParseNode $n) => $o->setFee($n->getFloatValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'invoiceId' => fn(ParseNode $n) => $o->setInvoiceId($n->getStringValue()),
            'issuedOn' => fn(ParseNode $n) => $o->setIssuedOn($n->getDateTimeValue()),
            'ledgerId' => fn(ParseNode $n) => $o->setLedgerId($n->getStringValue()),
            'originalPaymentDemandId' => fn(ParseNode $n) => $o->setOriginalPaymentDemandId($n->getStringValue()),
            'payableAmount' => fn(ParseNode $n) => $o->setPayableAmount($n->getFloatValue()),
        ];
    }

    /**
     * Gets the id property value. The reminder identifier.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the invoiceId property value. The identifier of the invoice.
     * @return string|null
    */
    public function getInvoiceId(): ?string {
        return $this->invoiceId;
    }

    /**
     * Gets the issuedOn property value. The reminder issue time.
     * @return DateTime|null
    */
    public function getIssuedOn(): ?DateTime {
        return $this->issuedOn;
    }

    /**
     * Gets the ledgerId property value. The identifier on the ledger (if applicable).
     * @return string|null
    */
    public function getLedgerId(): ?string {
        return $this->ledgerId;
    }

    /**
     * Gets the originalPaymentDemandId property value. The original payment demand that this is a reminder for.
     * @return string|null
    */
    public function getOriginalPaymentDemandId(): ?string {
        return $this->originalPaymentDemandId;
    }

    /**
     * Gets the payableAmount property value. The payable amount required to settle the demand and the reminder.
     * @return float|null
    */
    public function getPayableAmount(): ?float {
        return $this->payableAmount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('counter', $this->getCounter());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeDateTimeValue('dueDate', $this->getDueDate());
        $writer->writeFloatValue('fee', $this->getFee());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('invoiceId', $this->getInvoiceId());
        $writer->writeDateTimeValue('issuedOn', $this->getIssuedOn());
        $writer->writeStringValue('ledgerId', $this->getLedgerId());
        $writer->writeStringValue('originalPaymentDemandId', $this->getOriginalPaymentDemandId());
        $writer->writeFloatValue('payableAmount', $this->getPayableAmount());
    }

    /**
     * Sets the counter property value. The reminder counter, i.e. is this the first reminder, the second or the 25th.
     * @param int|null $value Value to set for the counter property.
    */
    public function setCounter(?int $value): void {
        $this->counter = $value;
    }

    /**
     * Sets the currency property value. The currency for the reminder - follows the original demand and the fee.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the dueDate property value. The due date.
     * @param DateTime|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?DateTime $value): void {
        $this->dueDate = $value;
    }

    /**
     * Sets the fee property value. The fee/surcharge (if any).
     * @param float|null $value Value to set for the fee property.
    */
    public function setFee(?float $value): void {
        $this->fee = $value;
    }

    /**
     * Sets the id property value. The reminder identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the invoiceId property value. The identifier of the invoice.
     * @param string|null $value Value to set for the invoiceId property.
    */
    public function setInvoiceId(?string $value): void {
        $this->invoiceId = $value;
    }

    /**
     * Sets the issuedOn property value. The reminder issue time.
     * @param DateTime|null $value Value to set for the issuedOn property.
    */
    public function setIssuedOn(?DateTime $value): void {
        $this->issuedOn = $value;
    }

    /**
     * Sets the ledgerId property value. The identifier on the ledger (if applicable).
     * @param string|null $value Value to set for the ledgerId property.
    */
    public function setLedgerId(?string $value): void {
        $this->ledgerId = $value;
    }

    /**
     * Sets the originalPaymentDemandId property value. The original payment demand that this is a reminder for.
     * @param string|null $value Value to set for the originalPaymentDemandId property.
    */
    public function setOriginalPaymentDemandId(?string $value): void {
        $this->originalPaymentDemandId = $value;
    }

    /**
     * Sets the payableAmount property value. The payable amount required to settle the demand and the reminder.
     * @param float|null $value Value to set for the payableAmount property.
    */
    public function setPayableAmount(?float $value): void {
        $this->payableAmount = $value;
    }

}
