<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A settlement allowance.
*/
class SettlementAllowance implements Parsable 
{
    /**
     * @var DateTime|null $accountingTime The accounting time.
    */
    private ?DateTime $accountingTime = null;
    
    /**
     * @var string|null $accountTransactionId The account transaction id.
    */
    private ?string $accountTransactionId = null;
    
    /**
     * @var float|null $amount The amount of the allowance.
    */
    private ?float $amount = null;
    
    /**
     * @var string|null $description An optional text description for the transaction.
    */
    private ?string $description = null;
    
    /**
     * @var DateTime|null $endTime The end time this allowance covered.
    */
    private ?DateTime $endTime = null;
    
    /**
     * @var string|null $invoiceId The identifier of the invoice.
    */
    private ?string $invoiceId = null;
    
    /**
     * @var int|null $invoiceNumber The invoice number.
    */
    private ?int $invoiceNumber = null;
    
    /**
     * @var string|null $paymentId The identifier of the payment (if a payment was involved).
    */
    private ?string $paymentId = null;
    
    /**
     * @var string|null $sourcePaymentDemandId The identifier of the payment demand (if a demand was involved).
    */
    private ?string $sourcePaymentDemandId = null;
    
    /**
     * @var DateTime|null $startTime The start time this allowance covered.
    */
    private ?DateTime $startTime = null;
    
    /**
     * @var AllowanceType|null $transactionType Values that represent allowance types.
    */
    private ?AllowanceType $transactionType = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SettlementAllowance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SettlementAllowance {
        return new SettlementAllowance();
    }

    /**
     * Gets the accountingTime property value. The accounting time.
     * @return DateTime|null
    */
    public function getAccountingTime(): ?DateTime {
        return $this->accountingTime;
    }

    /**
     * Gets the accountTransactionId property value. The account transaction id.
     * @return string|null
    */
    public function getAccountTransactionId(): ?string {
        return $this->accountTransactionId;
    }

    /**
     * Gets the amount property value. The amount of the allowance.
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the description property value. An optional text description for the transaction.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the endTime property value. The end time this allowance covered.
     * @return DateTime|null
    */
    public function getEndTime(): ?DateTime {
        return $this->endTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountingTime' => fn(ParseNode $n) => $o->setAccountingTime($n->getDateTimeValue()),
            'accountTransactionId' => fn(ParseNode $n) => $o->setAccountTransactionId($n->getStringValue()),
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'endTime' => fn(ParseNode $n) => $o->setEndTime($n->getDateTimeValue()),
            'invoiceId' => fn(ParseNode $n) => $o->setInvoiceId($n->getStringValue()),
            'invoiceNumber' => fn(ParseNode $n) => $o->setInvoiceNumber($n->getIntegerValue()),
            'paymentId' => fn(ParseNode $n) => $o->setPaymentId($n->getStringValue()),
            'sourcePaymentDemandId' => fn(ParseNode $n) => $o->setSourcePaymentDemandId($n->getStringValue()),
            'startTime' => fn(ParseNode $n) => $o->setStartTime($n->getDateTimeValue()),
            'transactionType' => fn(ParseNode $n) => $o->setTransactionType($n->getEnumValue(AllowanceType::class)),
        ];
    }

    /**
     * Gets the invoiceId property value. The identifier of the invoice.
     * @return string|null
    */
    public function getInvoiceId(): ?string {
        return $this->invoiceId;
    }

    /**
     * Gets the invoiceNumber property value. The invoice number.
     * @return int|null
    */
    public function getInvoiceNumber(): ?int {
        return $this->invoiceNumber;
    }

    /**
     * Gets the paymentId property value. The identifier of the payment (if a payment was involved).
     * @return string|null
    */
    public function getPaymentId(): ?string {
        return $this->paymentId;
    }

    /**
     * Gets the sourcePaymentDemandId property value. The identifier of the payment demand (if a demand was involved).
     * @return string|null
    */
    public function getSourcePaymentDemandId(): ?string {
        return $this->sourcePaymentDemandId;
    }

    /**
     * Gets the startTime property value. The start time this allowance covered.
     * @return DateTime|null
    */
    public function getStartTime(): ?DateTime {
        return $this->startTime;
    }

    /**
     * Gets the transactionType property value. Values that represent allowance types.
     * @return AllowanceType|null
    */
    public function getTransactionType(): ?AllowanceType {
        return $this->transactionType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('accountingTime', $this->getAccountingTime());
        $writer->writeStringValue('accountTransactionId', $this->getAccountTransactionId());
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateTimeValue('endTime', $this->getEndTime());
        $writer->writeStringValue('invoiceId', $this->getInvoiceId());
        $writer->writeIntegerValue('invoiceNumber', $this->getInvoiceNumber());
        $writer->writeStringValue('paymentId', $this->getPaymentId());
        $writer->writeStringValue('sourcePaymentDemandId', $this->getSourcePaymentDemandId());
        $writer->writeDateTimeValue('startTime', $this->getStartTime());
        $writer->writeEnumValue('transactionType', $this->getTransactionType());
    }

    /**
     * Sets the accountingTime property value. The accounting time.
     * @param DateTime|null $value Value to set for the accountingTime property.
    */
    public function setAccountingTime(?DateTime $value): void {
        $this->accountingTime = $value;
    }

    /**
     * Sets the accountTransactionId property value. The account transaction id.
     * @param string|null $value Value to set for the accountTransactionId property.
    */
    public function setAccountTransactionId(?string $value): void {
        $this->accountTransactionId = $value;
    }

    /**
     * Sets the amount property value. The amount of the allowance.
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the description property value. An optional text description for the transaction.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the endTime property value. The end time this allowance covered.
     * @param DateTime|null $value Value to set for the endTime property.
    */
    public function setEndTime(?DateTime $value): void {
        $this->endTime = $value;
    }

    /**
     * Sets the invoiceId property value. The identifier of the invoice.
     * @param string|null $value Value to set for the invoiceId property.
    */
    public function setInvoiceId(?string $value): void {
        $this->invoiceId = $value;
    }

    /**
     * Sets the invoiceNumber property value. The invoice number.
     * @param int|null $value Value to set for the invoiceNumber property.
    */
    public function setInvoiceNumber(?int $value): void {
        $this->invoiceNumber = $value;
    }

    /**
     * Sets the paymentId property value. The identifier of the payment (if a payment was involved).
     * @param string|null $value Value to set for the paymentId property.
    */
    public function setPaymentId(?string $value): void {
        $this->paymentId = $value;
    }

    /**
     * Sets the sourcePaymentDemandId property value. The identifier of the payment demand (if a demand was involved).
     * @param string|null $value Value to set for the sourcePaymentDemandId property.
    */
    public function setSourcePaymentDemandId(?string $value): void {
        $this->sourcePaymentDemandId = $value;
    }

    /**
     * Sets the startTime property value. The start time this allowance covered.
     * @param DateTime|null $value Value to set for the startTime property.
    */
    public function setStartTime(?DateTime $value): void {
        $this->startTime = $value;
    }

    /**
     * Sets the transactionType property value. Values that represent allowance types.
     * @param AllowanceType|null $value Value to set for the transactionType property.
    */
    public function setTransactionType(?AllowanceType $value): void {
        $this->transactionType = $value;
    }

}
