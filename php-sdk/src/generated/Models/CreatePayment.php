<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Data for creating a new payment
*/
class CreatePayment implements Parsable 
{
    /**
     * @var bool|null $automaticApproval Gets or sets a value indicating whether to do automatic approval. The default is false
    */
    private ?bool $automaticApproval = null;
    
    /**
     * @var string|null $billingAccountId An optional identifier of the billing account, should only be set when using Billing Account matching.
    */
    private ?string $billingAccountId = null;
    
    /**
     * @var string|null $comment An optional comment.
    */
    private ?string $comment = null;
    
    /**
     * @var string|null $currency The currency.
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $externalInvoiceIdentifier The external invoice identifier this payment should match.
    */
    private ?string $externalInvoiceIdentifier = null;
    
    /**
     * @var string|null $invoiceId The identifier of the invoice this payment should match.
    */
    private ?string $invoiceId = null;
    
    /**
     * @var MatchingType|null $invoiceMatchType Values that represent matching variants
    */
    private ?MatchingType $invoiceMatchType = null;
    
    /**
     * @var string|null $organizationId The identifier of the organization.
    */
    private ?string $organizationId = null;
    
    /**
     * @var float|null $paidAmount The amount of the payment.
    */
    private ?float $paidAmount = null;
    
    /**
     * @var DateTime|null $paymentDate The date the payment was made.
    */
    private ?DateTime $paymentDate = null;
    
    /**
     * @var string|null $source The source of the payment.
    */
    private ?string $source = null;
    
    /**
     * @var string|null $subCategory The sub category
    */
    private ?string $subCategory = null;
    
    /**
     * @var string|null $subscriberId The identifier of the subscriber the payment should be matched to
    */
    private ?string $subscriberId = null;
    
    /**
     * @var DateTime|null $valueDate The value date for the payment, i.e when was it added to the receiving account.
    */
    private ?DateTime $valueDate = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreatePayment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreatePayment {
        return new CreatePayment();
    }

    /**
     * Gets the automaticApproval property value. Gets or sets a value indicating whether to do automatic approval. The default is false
     * @return bool|null
    */
    public function getAutomaticApproval(): ?bool {
        return $this->automaticApproval;
    }

    /**
     * Gets the billingAccountId property value. An optional identifier of the billing account, should only be set when using Billing Account matching.
     * @return string|null
    */
    public function getBillingAccountId(): ?string {
        return $this->billingAccountId;
    }

    /**
     * Gets the comment property value. An optional comment.
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * Gets the currency property value. The currency.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the externalInvoiceIdentifier property value. The external invoice identifier this payment should match.
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
            'automaticApproval' => fn(ParseNode $n) => $o->setAutomaticApproval($n->getBooleanValue()),
            'billingAccountId' => fn(ParseNode $n) => $o->setBillingAccountId($n->getStringValue()),
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'externalInvoiceIdentifier' => fn(ParseNode $n) => $o->setExternalInvoiceIdentifier($n->getStringValue()),
            'invoiceId' => fn(ParseNode $n) => $o->setInvoiceId($n->getStringValue()),
            'invoiceMatchType' => fn(ParseNode $n) => $o->setInvoiceMatchType($n->getEnumValue(MatchingType::class)),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'paidAmount' => fn(ParseNode $n) => $o->setPaidAmount($n->getFloatValue()),
            'paymentDate' => fn(ParseNode $n) => $o->setPaymentDate($n->getDateTimeValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'subCategory' => fn(ParseNode $n) => $o->setSubCategory($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'valueDate' => fn(ParseNode $n) => $o->setValueDate($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the invoiceId property value. The identifier of the invoice this payment should match.
     * @return string|null
    */
    public function getInvoiceId(): ?string {
        return $this->invoiceId;
    }

    /**
     * Gets the invoiceMatchType property value. Values that represent matching variants
     * @return MatchingType|null
    */
    public function getInvoiceMatchType(): ?MatchingType {
        return $this->invoiceMatchType;
    }

    /**
     * Gets the organizationId property value. The identifier of the organization.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the paidAmount property value. The amount of the payment.
     * @return float|null
    */
    public function getPaidAmount(): ?float {
        return $this->paidAmount;
    }

    /**
     * Gets the paymentDate property value. The date the payment was made.
     * @return DateTime|null
    */
    public function getPaymentDate(): ?DateTime {
        return $this->paymentDate;
    }

    /**
     * Gets the source property value. The source of the payment.
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the subCategory property value. The sub category
     * @return string|null
    */
    public function getSubCategory(): ?string {
        return $this->subCategory;
    }

    /**
     * Gets the subscriberId property value. The identifier of the subscriber the payment should be matched to
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the valueDate property value. The value date for the payment, i.e when was it added to the receiving account.
     * @return DateTime|null
    */
    public function getValueDate(): ?DateTime {
        return $this->valueDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('automaticApproval', $this->getAutomaticApproval());
        $writer->writeStringValue('billingAccountId', $this->getBillingAccountId());
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('externalInvoiceIdentifier', $this->getExternalInvoiceIdentifier());
        $writer->writeStringValue('invoiceId', $this->getInvoiceId());
        $writer->writeEnumValue('invoiceMatchType', $this->getInvoiceMatchType());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeFloatValue('paidAmount', $this->getPaidAmount());
        $writer->writeDateTimeValue('paymentDate', $this->getPaymentDate());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeStringValue('subCategory', $this->getSubCategory());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeDateTimeValue('valueDate', $this->getValueDate());
    }

    /**
     * Sets the automaticApproval property value. Gets or sets a value indicating whether to do automatic approval. The default is false
     * @param bool|null $value Value to set for the automaticApproval property.
    */
    public function setAutomaticApproval(?bool $value): void {
        $this->automaticApproval = $value;
    }

    /**
     * Sets the billingAccountId property value. An optional identifier of the billing account, should only be set when using Billing Account matching.
     * @param string|null $value Value to set for the billingAccountId property.
    */
    public function setBillingAccountId(?string $value): void {
        $this->billingAccountId = $value;
    }

    /**
     * Sets the comment property value. An optional comment.
     * @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->comment = $value;
    }

    /**
     * Sets the currency property value. The currency.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the externalInvoiceIdentifier property value. The external invoice identifier this payment should match.
     * @param string|null $value Value to set for the externalInvoiceIdentifier property.
    */
    public function setExternalInvoiceIdentifier(?string $value): void {
        $this->externalInvoiceIdentifier = $value;
    }

    /**
     * Sets the invoiceId property value. The identifier of the invoice this payment should match.
     * @param string|null $value Value to set for the invoiceId property.
    */
    public function setInvoiceId(?string $value): void {
        $this->invoiceId = $value;
    }

    /**
     * Sets the invoiceMatchType property value. Values that represent matching variants
     * @param MatchingType|null $value Value to set for the invoiceMatchType property.
    */
    public function setInvoiceMatchType(?MatchingType $value): void {
        $this->invoiceMatchType = $value;
    }

    /**
     * Sets the organizationId property value. The identifier of the organization.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the paidAmount property value. The amount of the payment.
     * @param float|null $value Value to set for the paidAmount property.
    */
    public function setPaidAmount(?float $value): void {
        $this->paidAmount = $value;
    }

    /**
     * Sets the paymentDate property value. The date the payment was made.
     * @param DateTime|null $value Value to set for the paymentDate property.
    */
    public function setPaymentDate(?DateTime $value): void {
        $this->paymentDate = $value;
    }

    /**
     * Sets the source property value. The source of the payment.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the subCategory property value. The sub category
     * @param string|null $value Value to set for the subCategory property.
    */
    public function setSubCategory(?string $value): void {
        $this->subCategory = $value;
    }

    /**
     * Sets the subscriberId property value. The identifier of the subscriber the payment should be matched to
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the valueDate property value. The value date for the payment, i.e when was it added to the receiving account.
     * @param DateTime|null $value Value to set for the valueDate property.
    */
    public function setValueDate(?DateTime $value): void {
        $this->valueDate = $value;
    }

}
