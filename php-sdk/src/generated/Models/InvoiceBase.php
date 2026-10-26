<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Invoice\Contracts\ReadModel\InvoiceState;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A base class for the invoice and the credit note classes.
*/
class InvoiceBase implements Parsable 
{
    /**
     * @var Participant|null $buyer A participant.
    */
    private ?Participant $buyer = null;
    
    /**
     * @var string|null $buyerReference Gets or sets the buyer reference.
    */
    private ?string $buyerReference = null;
    
    /**
     * @var string|null $externalInvoiceIdentifier Gets or sets the identifier of the external invoice.
    */
    private ?string $externalInvoiceIdentifier = null;
    
    /**
     * @var string|null $id Gets the globally unique identifier for this invoice
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $issuedOn Gets or sets the issued on.
    */
    private ?DateTime $issuedOn = null;
    
    /**
     * @var Participant|null $issuer A participant.
    */
    private ?Participant $issuer = null;
    
    /**
     * @var Amount|null $lineExtensionAmount An amount with a currency of the amount
    */
    private ?Amount $lineExtensionAmount = null;
    
    /**
     * @var array<InvoiceLine>|null $lines Gets or sets the specification of the invoice
    */
    private ?array $lines = null;
    
    /**
     * @var int|null $number Gets the unique identifier for the invoice in a numeric format usable by humans and machines alike
    */
    private ?int $number = null;
    
    /**
     * @var string|null $orderReference Gets or sets the order reference.
    */
    private ?string $orderReference = null;
    
    /**
     * @var DateTime|null $paidOn Gets or sets the paid on of the invoice
    */
    private ?DateTime $paidOn = null;
    
    /**
     * @var Amount|null $payableAmount An amount with a currency of the amount
    */
    private ?Amount $payableAmount = null;
    
    /**
     * @var Participant|null $paymentRecipient A participant.
    */
    private ?Participant $paymentRecipient = null;
    
    /**
     * @var Period|null $period A period that associated the line with a time frame for a provided service/product.
    */
    private ?Period $period = null;
    
    /**
     * @var Participant|null $recipient A participant.
    */
    private ?Participant $recipient = null;
    
    /**
     * @var Participant|null $seller A participant.
    */
    private ?Participant $seller = null;
    
    /**
     * @var InvoiceState|null $state Values that represent the invoice state.
    */
    private ?InvoiceState $state = null;
    
    /**
     * @var Participant|null $supplier A participant.
    */
    private ?Participant $supplier = null;
    
    /**
     * @var Amount|null $taxExclusiveAmount An amount with a currency of the amount
    */
    private ?Amount $taxExclusiveAmount = null;
    
    /**
     * @var Amount|null $taxInclusiveAmount An amount with a currency of the amount
    */
    private ?Amount $taxInclusiveAmount = null;
    
    /**
     * @var DateTime|null $taxPointDate Gets the tax point (or 'time of supply') for a transaction is the date the transaction takes place for VAT purposes
    */
    private ?DateTime $taxPointDate = null;
    
    /**
     * @var array<TaxTotal>|null $taxTotals Gets or sets the tax totals.
    */
    private ?array $taxTotals = null;
    
    /**
     * @var string|null $trackingId An optional GUID/UUID used for external tracking purposes.
    */
    private ?string $trackingId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvoiceBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvoiceBase {
        return new InvoiceBase();
    }

    /**
     * Gets the buyer property value. A participant.
     * @return Participant|null
    */
    public function getBuyer(): ?Participant {
        return $this->buyer;
    }

    /**
     * Gets the buyerReference property value. Gets or sets the buyer reference.
     * @return string|null
    */
    public function getBuyerReference(): ?string {
        return $this->buyerReference;
    }

    /**
     * Gets the externalInvoiceIdentifier property value. Gets or sets the identifier of the external invoice.
     * @return string|null
    */
    public function getExternalInvoiceIdentifier(): ?string {
        return $this->externalInvoiceIdentifier;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buyer' => fn(ParseNode $n) => $o->setBuyer($n->getObjectValue([Participant::class, 'createFromDiscriminatorValue'])),
            'buyerReference' => fn(ParseNode $n) => $o->setBuyerReference($n->getStringValue()),
            'externalInvoiceIdentifier' => fn(ParseNode $n) => $o->setExternalInvoiceIdentifier($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'issuedOn' => fn(ParseNode $n) => $o->setIssuedOn($n->getDateTimeValue()),
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getObjectValue([Participant::class, 'createFromDiscriminatorValue'])),
            'lineExtensionAmount' => fn(ParseNode $n) => $o->setLineExtensionAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'lines' => fn(ParseNode $n) => $o->setLines($n->getCollectionOfObjectValues([InvoiceLine::class, 'createFromDiscriminatorValue'])),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getIntegerValue()),
            'orderReference' => fn(ParseNode $n) => $o->setOrderReference($n->getStringValue()),
            'paidOn' => fn(ParseNode $n) => $o->setPaidOn($n->getDateTimeValue()),
            'payableAmount' => fn(ParseNode $n) => $o->setPayableAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'paymentRecipient' => fn(ParseNode $n) => $o->setPaymentRecipient($n->getObjectValue([Participant::class, 'createFromDiscriminatorValue'])),
            'period' => fn(ParseNode $n) => $o->setPeriod($n->getObjectValue([Period::class, 'createFromDiscriminatorValue'])),
            'recipient' => fn(ParseNode $n) => $o->setRecipient($n->getObjectValue([Participant::class, 'createFromDiscriminatorValue'])),
            'seller' => fn(ParseNode $n) => $o->setSeller($n->getObjectValue([Participant::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(InvoiceState::class)),
            'supplier' => fn(ParseNode $n) => $o->setSupplier($n->getObjectValue([Participant::class, 'createFromDiscriminatorValue'])),
            'taxExclusiveAmount' => fn(ParseNode $n) => $o->setTaxExclusiveAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'taxInclusiveAmount' => fn(ParseNode $n) => $o->setTaxInclusiveAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'taxPointDate' => fn(ParseNode $n) => $o->setTaxPointDate($n->getDateTimeValue()),
            'taxTotals' => fn(ParseNode $n) => $o->setTaxTotals($n->getCollectionOfObjectValues([TaxTotal::class, 'createFromDiscriminatorValue'])),
            'trackingId' => fn(ParseNode $n) => $o->setTrackingId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Gets the globally unique identifier for this invoice
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the issuedOn property value. Gets or sets the issued on.
     * @return DateTime|null
    */
    public function getIssuedOn(): ?DateTime {
        return $this->issuedOn;
    }

    /**
     * Gets the issuer property value. A participant.
     * @return Participant|null
    */
    public function getIssuer(): ?Participant {
        return $this->issuer;
    }

    /**
     * Gets the lineExtensionAmount property value. An amount with a currency of the amount
     * @return Amount|null
    */
    public function getLineExtensionAmount(): ?Amount {
        return $this->lineExtensionAmount;
    }

    /**
     * Gets the lines property value. Gets or sets the specification of the invoice
     * @return array<InvoiceLine>|null
    */
    public function getLines(): ?array {
        return $this->lines;
    }

    /**
     * Gets the number property value. Gets the unique identifier for the invoice in a numeric format usable by humans and machines alike
     * @return int|null
    */
    public function getNumber(): ?int {
        return $this->number;
    }

    /**
     * Gets the orderReference property value. Gets or sets the order reference.
     * @return string|null
    */
    public function getOrderReference(): ?string {
        return $this->orderReference;
    }

    /**
     * Gets the paidOn property value. Gets or sets the paid on of the invoice
     * @return DateTime|null
    */
    public function getPaidOn(): ?DateTime {
        return $this->paidOn;
    }

    /**
     * Gets the payableAmount property value. An amount with a currency of the amount
     * @return Amount|null
    */
    public function getPayableAmount(): ?Amount {
        return $this->payableAmount;
    }

    /**
     * Gets the paymentRecipient property value. A participant.
     * @return Participant|null
    */
    public function getPaymentRecipient(): ?Participant {
        return $this->paymentRecipient;
    }

    /**
     * Gets the period property value. A period that associated the line with a time frame for a provided service/product.
     * @return Period|null
    */
    public function getPeriod(): ?Period {
        return $this->period;
    }

    /**
     * Gets the recipient property value. A participant.
     * @return Participant|null
    */
    public function getRecipient(): ?Participant {
        return $this->recipient;
    }

    /**
     * Gets the seller property value. A participant.
     * @return Participant|null
    */
    public function getSeller(): ?Participant {
        return $this->seller;
    }

    /**
     * Gets the state property value. Values that represent the invoice state.
     * @return InvoiceState|null
    */
    public function getState(): ?InvoiceState {
        return $this->state;
    }

    /**
     * Gets the supplier property value. A participant.
     * @return Participant|null
    */
    public function getSupplier(): ?Participant {
        return $this->supplier;
    }

    /**
     * Gets the taxExclusiveAmount property value. An amount with a currency of the amount
     * @return Amount|null
    */
    public function getTaxExclusiveAmount(): ?Amount {
        return $this->taxExclusiveAmount;
    }

    /**
     * Gets the taxInclusiveAmount property value. An amount with a currency of the amount
     * @return Amount|null
    */
    public function getTaxInclusiveAmount(): ?Amount {
        return $this->taxInclusiveAmount;
    }

    /**
     * Gets the taxPointDate property value. Gets the tax point (or 'time of supply') for a transaction is the date the transaction takes place for VAT purposes
     * @return DateTime|null
    */
    public function getTaxPointDate(): ?DateTime {
        return $this->taxPointDate;
    }

    /**
     * Gets the taxTotals property value. Gets or sets the tax totals.
     * @return array<TaxTotal>|null
    */
    public function getTaxTotals(): ?array {
        return $this->taxTotals;
    }

    /**
     * Gets the trackingId property value. An optional GUID/UUID used for external tracking purposes.
     * @return string|null
    */
    public function getTrackingId(): ?string {
        return $this->trackingId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('buyer', $this->getBuyer());
        $writer->writeStringValue('buyerReference', $this->getBuyerReference());
        $writer->writeStringValue('externalInvoiceIdentifier', $this->getExternalInvoiceIdentifier());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('issuedOn', $this->getIssuedOn());
        $writer->writeObjectValue('issuer', $this->getIssuer());
        $writer->writeObjectValue('lineExtensionAmount', $this->getLineExtensionAmount());
        $writer->writeCollectionOfObjectValues('lines', $this->getLines());
        $writer->writeIntegerValue('number', $this->getNumber());
        $writer->writeStringValue('orderReference', $this->getOrderReference());
        $writer->writeDateTimeValue('paidOn', $this->getPaidOn());
        $writer->writeObjectValue('payableAmount', $this->getPayableAmount());
        $writer->writeObjectValue('paymentRecipient', $this->getPaymentRecipient());
        $writer->writeObjectValue('period', $this->getPeriod());
        $writer->writeObjectValue('recipient', $this->getRecipient());
        $writer->writeObjectValue('seller', $this->getSeller());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeObjectValue('supplier', $this->getSupplier());
        $writer->writeObjectValue('taxExclusiveAmount', $this->getTaxExclusiveAmount());
        $writer->writeObjectValue('taxInclusiveAmount', $this->getTaxInclusiveAmount());
        $writer->writeDateTimeValue('taxPointDate', $this->getTaxPointDate());
        $writer->writeCollectionOfObjectValues('taxTotals', $this->getTaxTotals());
        $writer->writeStringValue('trackingId', $this->getTrackingId());
    }

    /**
     * Sets the buyer property value. A participant.
     * @param Participant|null $value Value to set for the buyer property.
    */
    public function setBuyer(?Participant $value): void {
        $this->buyer = $value;
    }

    /**
     * Sets the buyerReference property value. Gets or sets the buyer reference.
     * @param string|null $value Value to set for the buyerReference property.
    */
    public function setBuyerReference(?string $value): void {
        $this->buyerReference = $value;
    }

    /**
     * Sets the externalInvoiceIdentifier property value. Gets or sets the identifier of the external invoice.
     * @param string|null $value Value to set for the externalInvoiceIdentifier property.
    */
    public function setExternalInvoiceIdentifier(?string $value): void {
        $this->externalInvoiceIdentifier = $value;
    }

    /**
     * Sets the id property value. Gets the globally unique identifier for this invoice
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the issuedOn property value. Gets or sets the issued on.
     * @param DateTime|null $value Value to set for the issuedOn property.
    */
    public function setIssuedOn(?DateTime $value): void {
        $this->issuedOn = $value;
    }

    /**
     * Sets the issuer property value. A participant.
     * @param Participant|null $value Value to set for the issuer property.
    */
    public function setIssuer(?Participant $value): void {
        $this->issuer = $value;
    }

    /**
     * Sets the lineExtensionAmount property value. An amount with a currency of the amount
     * @param Amount|null $value Value to set for the lineExtensionAmount property.
    */
    public function setLineExtensionAmount(?Amount $value): void {
        $this->lineExtensionAmount = $value;
    }

    /**
     * Sets the lines property value. Gets or sets the specification of the invoice
     * @param array<InvoiceLine>|null $value Value to set for the lines property.
    */
    public function setLines(?array $value): void {
        $this->lines = $value;
    }

    /**
     * Sets the number property value. Gets the unique identifier for the invoice in a numeric format usable by humans and machines alike
     * @param int|null $value Value to set for the number property.
    */
    public function setNumber(?int $value): void {
        $this->number = $value;
    }

    /**
     * Sets the orderReference property value. Gets or sets the order reference.
     * @param string|null $value Value to set for the orderReference property.
    */
    public function setOrderReference(?string $value): void {
        $this->orderReference = $value;
    }

    /**
     * Sets the paidOn property value. Gets or sets the paid on of the invoice
     * @param DateTime|null $value Value to set for the paidOn property.
    */
    public function setPaidOn(?DateTime $value): void {
        $this->paidOn = $value;
    }

    /**
     * Sets the payableAmount property value. An amount with a currency of the amount
     * @param Amount|null $value Value to set for the payableAmount property.
    */
    public function setPayableAmount(?Amount $value): void {
        $this->payableAmount = $value;
    }

    /**
     * Sets the paymentRecipient property value. A participant.
     * @param Participant|null $value Value to set for the paymentRecipient property.
    */
    public function setPaymentRecipient(?Participant $value): void {
        $this->paymentRecipient = $value;
    }

    /**
     * Sets the period property value. A period that associated the line with a time frame for a provided service/product.
     * @param Period|null $value Value to set for the period property.
    */
    public function setPeriod(?Period $value): void {
        $this->period = $value;
    }

    /**
     * Sets the recipient property value. A participant.
     * @param Participant|null $value Value to set for the recipient property.
    */
    public function setRecipient(?Participant $value): void {
        $this->recipient = $value;
    }

    /**
     * Sets the seller property value. A participant.
     * @param Participant|null $value Value to set for the seller property.
    */
    public function setSeller(?Participant $value): void {
        $this->seller = $value;
    }

    /**
     * Sets the state property value. Values that represent the invoice state.
     * @param InvoiceState|null $value Value to set for the state property.
    */
    public function setState(?InvoiceState $value): void {
        $this->state = $value;
    }

    /**
     * Sets the supplier property value. A participant.
     * @param Participant|null $value Value to set for the supplier property.
    */
    public function setSupplier(?Participant $value): void {
        $this->supplier = $value;
    }

    /**
     * Sets the taxExclusiveAmount property value. An amount with a currency of the amount
     * @param Amount|null $value Value to set for the taxExclusiveAmount property.
    */
    public function setTaxExclusiveAmount(?Amount $value): void {
        $this->taxExclusiveAmount = $value;
    }

    /**
     * Sets the taxInclusiveAmount property value. An amount with a currency of the amount
     * @param Amount|null $value Value to set for the taxInclusiveAmount property.
    */
    public function setTaxInclusiveAmount(?Amount $value): void {
        $this->taxInclusiveAmount = $value;
    }

    /**
     * Sets the taxPointDate property value. Gets the tax point (or 'time of supply') for a transaction is the date the transaction takes place for VAT purposes
     * @param DateTime|null $value Value to set for the taxPointDate property.
    */
    public function setTaxPointDate(?DateTime $value): void {
        $this->taxPointDate = $value;
    }

    /**
     * Sets the taxTotals property value. Gets or sets the tax totals.
     * @param array<TaxTotal>|null $value Value to set for the taxTotals property.
    */
    public function setTaxTotals(?array $value): void {
        $this->taxTotals = $value;
    }

    /**
     * Sets the trackingId property value. An optional GUID/UUID used for external tracking purposes.
     * @param string|null $value Value to set for the trackingId property.
    */
    public function setTrackingId(?string $value): void {
        $this->trackingId = $value;
    }

}
