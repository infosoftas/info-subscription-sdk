<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Payments\Contracts\PaymentState;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Common properties for payment contracts
*/
class Payment implements Parsable 
{
    /**
     * @var DateTime|null $approved The time of approval
    */
    private ?DateTime $approved = null;
    
    /**
     * @var string|null $comment An optional comment.
    */
    private ?string $comment = null;
    
    /**
     * @var string|null $currency The currency.
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $externalInvoiceIdentifier Tthe external invoice identifier this payment should match.
    */
    private ?string $externalInvoiceIdentifier = null;
    
    /**
     * @var string|null $id The identifier for the Payment
    */
    private ?string $id = null;
    
    /**
     * @var string|null $invoiceId The identifier of the invoice this payment should match.
    */
    private ?string $invoiceId = null;
    
    /**
     * @var string|null $invoiceNumber The number of the invoice this payment should match.
    */
    private ?string $invoiceNumber = null;
    
    /**
     * @var array<string>|null $matchingErrors Gets or sets the matching errors.
    */
    private ?array $matchingErrors = null;
    
    /**
     * @var string|null $organizationId The identifier of the organization.
    */
    private ?string $organizationId = null;
    
    /**
     * @var float|null $paidAmount The amount of the payment.
    */
    private ?float $paidAmount = null;
    
    /**
     * @var string|null $paymentAgreementId Gets or sets the identifier of the payment agreement.
    */
    private ?string $paymentAgreementId = null;
    
    /**
     * @var DateTime|null $paymentDate The date the payment was made.
    */
    private ?DateTime $paymentDate = null;
    
    /**
     * @var DateTime|null $registration Gets or sets the original registration time.
    */
    private ?DateTime $registration = null;
    
    /**
     * @var string|null $source The source of the payment.
    */
    private ?string $source = null;
    
    /**
     * @var PaymentState|null $state State for a payment
    */
    private ?PaymentState $state = null;
    
    /**
     * @var string|null $subCategory The sub category
    */
    private ?string $subCategory = null;
    
    /**
     * @var string|null $subscriberAccount Gets or sets the the subscriber account.
    */
    private ?string $subscriberAccount = null;
    
    /**
     * @var string|null $subscriberId The identifier of the subscriber.
    */
    private ?string $subscriberId = null;
    
    /**
     * @var DateTime|null $updated The latest update time for the payment.
    */
    private ?DateTime $updated = null;
    
    /**
     * @var DateTime|null $valueDate The value date for the payment, i.e when was it added to the receiving account.
    */
    private ?DateTime $valueDate = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Payment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Payment {
        return new Payment();
    }

    /**
     * Gets the approved property value. The time of approval
     * @return DateTime|null
    */
    public function getApproved(): ?DateTime {
        return $this->approved;
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
     * Gets the externalInvoiceIdentifier property value. Tthe external invoice identifier this payment should match.
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
            'approved' => fn(ParseNode $n) => $o->setApproved($n->getDateTimeValue()),
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'externalInvoiceIdentifier' => fn(ParseNode $n) => $o->setExternalInvoiceIdentifier($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'invoiceId' => fn(ParseNode $n) => $o->setInvoiceId($n->getStringValue()),
            'invoiceNumber' => fn(ParseNode $n) => $o->setInvoiceNumber($n->getStringValue()),
            'matchingErrors' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMatchingErrors($val);
            },
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'paidAmount' => fn(ParseNode $n) => $o->setPaidAmount($n->getFloatValue()),
            'paymentAgreementId' => fn(ParseNode $n) => $o->setPaymentAgreementId($n->getStringValue()),
            'paymentDate' => fn(ParseNode $n) => $o->setPaymentDate($n->getDateTimeValue()),
            'registration' => fn(ParseNode $n) => $o->setRegistration($n->getDateTimeValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(PaymentState::class)),
            'subCategory' => fn(ParseNode $n) => $o->setSubCategory($n->getStringValue()),
            'subscriberAccount' => fn(ParseNode $n) => $o->setSubscriberAccount($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'updated' => fn(ParseNode $n) => $o->setUpdated($n->getDateTimeValue()),
            'valueDate' => fn(ParseNode $n) => $o->setValueDate($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the id property value. The identifier for the Payment
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the invoiceId property value. The identifier of the invoice this payment should match.
     * @return string|null
    */
    public function getInvoiceId(): ?string {
        return $this->invoiceId;
    }

    /**
     * Gets the invoiceNumber property value. The number of the invoice this payment should match.
     * @return string|null
    */
    public function getInvoiceNumber(): ?string {
        return $this->invoiceNumber;
    }

    /**
     * Gets the matchingErrors property value. Gets or sets the matching errors.
     * @return array<string>|null
    */
    public function getMatchingErrors(): ?array {
        return $this->matchingErrors;
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
     * Gets the paymentAgreementId property value. Gets or sets the identifier of the payment agreement.
     * @return string|null
    */
    public function getPaymentAgreementId(): ?string {
        return $this->paymentAgreementId;
    }

    /**
     * Gets the paymentDate property value. The date the payment was made.
     * @return DateTime|null
    */
    public function getPaymentDate(): ?DateTime {
        return $this->paymentDate;
    }

    /**
     * Gets the registration property value. Gets or sets the original registration time.
     * @return DateTime|null
    */
    public function getRegistration(): ?DateTime {
        return $this->registration;
    }

    /**
     * Gets the source property value. The source of the payment.
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the state property value. State for a payment
     * @return PaymentState|null
    */
    public function getState(): ?PaymentState {
        return $this->state;
    }

    /**
     * Gets the subCategory property value. The sub category
     * @return string|null
    */
    public function getSubCategory(): ?string {
        return $this->subCategory;
    }

    /**
     * Gets the subscriberAccount property value. Gets or sets the the subscriber account.
     * @return string|null
    */
    public function getSubscriberAccount(): ?string {
        return $this->subscriberAccount;
    }

    /**
     * Gets the subscriberId property value. The identifier of the subscriber.
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the updated property value. The latest update time for the payment.
     * @return DateTime|null
    */
    public function getUpdated(): ?DateTime {
        return $this->updated;
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
        $writer->writeDateTimeValue('approved', $this->getApproved());
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('externalInvoiceIdentifier', $this->getExternalInvoiceIdentifier());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('invoiceId', $this->getInvoiceId());
        $writer->writeStringValue('invoiceNumber', $this->getInvoiceNumber());
        $writer->writeCollectionOfPrimitiveValues('matchingErrors', $this->getMatchingErrors());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeFloatValue('paidAmount', $this->getPaidAmount());
        $writer->writeStringValue('paymentAgreementId', $this->getPaymentAgreementId());
        $writer->writeDateTimeValue('paymentDate', $this->getPaymentDate());
        $writer->writeDateTimeValue('registration', $this->getRegistration());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('subCategory', $this->getSubCategory());
        $writer->writeStringValue('subscriberAccount', $this->getSubscriberAccount());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeDateTimeValue('updated', $this->getUpdated());
        $writer->writeDateTimeValue('valueDate', $this->getValueDate());
    }

    /**
     * Sets the approved property value. The time of approval
     * @param DateTime|null $value Value to set for the approved property.
    */
    public function setApproved(?DateTime $value): void {
        $this->approved = $value;
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
     * Sets the externalInvoiceIdentifier property value. Tthe external invoice identifier this payment should match.
     * @param string|null $value Value to set for the externalInvoiceIdentifier property.
    */
    public function setExternalInvoiceIdentifier(?string $value): void {
        $this->externalInvoiceIdentifier = $value;
    }

    /**
     * Sets the id property value. The identifier for the Payment
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the invoiceId property value. The identifier of the invoice this payment should match.
     * @param string|null $value Value to set for the invoiceId property.
    */
    public function setInvoiceId(?string $value): void {
        $this->invoiceId = $value;
    }

    /**
     * Sets the invoiceNumber property value. The number of the invoice this payment should match.
     * @param string|null $value Value to set for the invoiceNumber property.
    */
    public function setInvoiceNumber(?string $value): void {
        $this->invoiceNumber = $value;
    }

    /**
     * Sets the matchingErrors property value. Gets or sets the matching errors.
     * @param array<string>|null $value Value to set for the matchingErrors property.
    */
    public function setMatchingErrors(?array $value): void {
        $this->matchingErrors = $value;
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
     * Sets the paymentAgreementId property value. Gets or sets the identifier of the payment agreement.
     * @param string|null $value Value to set for the paymentAgreementId property.
    */
    public function setPaymentAgreementId(?string $value): void {
        $this->paymentAgreementId = $value;
    }

    /**
     * Sets the paymentDate property value. The date the payment was made.
     * @param DateTime|null $value Value to set for the paymentDate property.
    */
    public function setPaymentDate(?DateTime $value): void {
        $this->paymentDate = $value;
    }

    /**
     * Sets the registration property value. Gets or sets the original registration time.
     * @param DateTime|null $value Value to set for the registration property.
    */
    public function setRegistration(?DateTime $value): void {
        $this->registration = $value;
    }

    /**
     * Sets the source property value. The source of the payment.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the state property value. State for a payment
     * @param PaymentState|null $value Value to set for the state property.
    */
    public function setState(?PaymentState $value): void {
        $this->state = $value;
    }

    /**
     * Sets the subCategory property value. The sub category
     * @param string|null $value Value to set for the subCategory property.
    */
    public function setSubCategory(?string $value): void {
        $this->subCategory = $value;
    }

    /**
     * Sets the subscriberAccount property value. Gets or sets the the subscriber account.
     * @param string|null $value Value to set for the subscriberAccount property.
    */
    public function setSubscriberAccount(?string $value): void {
        $this->subscriberAccount = $value;
    }

    /**
     * Sets the subscriberId property value. The identifier of the subscriber.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the updated property value. The latest update time for the payment.
     * @param DateTime|null $value Value to set for the updated property.
    */
    public function setUpdated(?DateTime $value): void {
        $this->updated = $value;
    }

    /**
     * Sets the valueDate property value. The value date for the payment, i.e when was it added to the receiving account.
     * @param DateTime|null $value Value to set for the valueDate property.
    */
    public function setValueDate(?DateTime $value): void {
        $this->valueDate = $value;
    }

}
