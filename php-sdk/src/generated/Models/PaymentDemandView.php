<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Properties detailing a demand for a payment for services ordered or already rendered.            Provides the source billing data used to generate invoices.
*/
class PaymentDemandView implements Parsable 
{
    /**
     * @var array<DemandAllowance>|null $allowances Allowances reducing the total amount.
    */
    private ?array $allowances = null;
    
    /**
     * @var float|null $amount The total amount billed.
    */
    private ?float $amount = null;
    
    /**
     * @var string|null $billingPlanId The billing plan.
    */
    private ?string $billingPlanId = null;
    
    /**
     * @var array<DemandCharge>|null $charges Charges increasing the total amount.
    */
    private ?array $charges = null;
    
    /**
     * @var string|null $creditLedgerId The ledger id for the credit transaction.
    */
    private ?string $creditLedgerId = null;
    
    /**
     * @var string|null $creditNoteId The credit note that crediting the demand has generated.
    */
    private ?string $creditNoteId = null;
    
    /**
     * @var DateTime|null $creditTime Indicates if the demand was credited and when.
    */
    private ?DateTime $creditTime = null;
    
    /**
     * @var string|null $currency The currency.
    */
    private ?string $currency = null;
    
    /**
     * @var array<PaymentDemandDetailView>|null $details Details for the payment demand that needs to be billed. Typically Orders and Subscriptions related, but may be standalone transactions as well.
    */
    private ?array $details = null;
    
    /**
     * @var DateTime|null $dueDate The payment due time.
    */
    private ?DateTime $dueDate = null;
    
    /**
     * @var string|null $enterprisePlanId An optional enterprise plan identifier indicating that the demand is assign to an Enterprise.
    */
    private ?string $enterprisePlanId = null;
    
    /**
     * @var array<PaymentDemandFeeView>|null $fees Fees such as extra cost for a specific Invoicing type.
    */
    private ?array $fees = null;
    
    /**
     * @var string|null $id Unique Id of the demand.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $invoiceContactId Identifier of the invoice recipient (Subscriber Contact).
    */
    private ?string $invoiceContactId = null;
    
    /**
     * @var string|null $invoiceId The identifier of the invoice this demand generated.
    */
    private ?string $invoiceId = null;
    
    /**
     * @var DateTime|null $issueDate When was the demand issued/created.
    */
    private ?DateTime $issueDate = null;
    
    /**
     * @var string|null $ledgerId The LedgerId that represents this demand at its time of creation.
    */
    private ?string $ledgerId = null;
    
    /**
     * @var string|null $orderReference Optional order reference.
    */
    private ?string $orderReference = null;
    
    /**
     * @var string|null $organizationId The organization.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $paymentAgreementId Id for the payment agreement that followup payment requests and dunning will be based upon.
    */
    private ?string $paymentAgreementId = null;
    
    /**
     * @var string|null $paymentId An optional payment if the demand was settled by a single payment.
    */
    private ?string $paymentId = null;
    
    /**
     * @var string|null $paymentProviderType The type of the payment method.
    */
    private ?string $paymentProviderType = null;
    
    /**
     * @var array<PaymentDemandReminderView>|null $reminders Reminders for the current demand.
    */
    private ?array $reminders = null;
    
    /**
     * @var DateTime|null $settleDate The time of settlement.
    */
    private ?DateTime $settleDate = null;
    
    /**
     * @var SettlementTransactions|null $settlementTransactions A settlement transactions.
    */
    private ?SettlementTransactions $settlementTransactions = null;
    
    /**
     * @var string|null $subscriberAccount The subscriber account the amount is charged to.
    */
    private ?string $subscriberAccount = null;
    
    /**
     * @var string|null $subscriberId The subscriber that this demand is charged for.
    */
    private ?string $subscriberId = null;
    
    /**
     * @var string|null $transactionId An optional payment method transaction id.
    */
    private ?string $transactionId = null;
    
    /**
     * @var string|null $writeOffReason The reason for the write off.
    */
    private ?string $writeOffReason = null;
    
    /**
     * @var DateTime|null $writeOffTime Indicates if the demand was written off and when.
    */
    private ?DateTime $writeOffTime = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentDemandView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentDemandView {
        return new PaymentDemandView();
    }

    /**
     * Gets the allowances property value. Allowances reducing the total amount.
     * @return array<DemandAllowance>|null
    */
    public function getAllowances(): ?array {
        return $this->allowances;
    }

    /**
     * Gets the amount property value. The total amount billed.
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the billingPlanId property value. The billing plan.
     * @return string|null
    */
    public function getBillingPlanId(): ?string {
        return $this->billingPlanId;
    }

    /**
     * Gets the charges property value. Charges increasing the total amount.
     * @return array<DemandCharge>|null
    */
    public function getCharges(): ?array {
        return $this->charges;
    }

    /**
     * Gets the creditLedgerId property value. The ledger id for the credit transaction.
     * @return string|null
    */
    public function getCreditLedgerId(): ?string {
        return $this->creditLedgerId;
    }

    /**
     * Gets the creditNoteId property value. The credit note that crediting the demand has generated.
     * @return string|null
    */
    public function getCreditNoteId(): ?string {
        return $this->creditNoteId;
    }

    /**
     * Gets the creditTime property value. Indicates if the demand was credited and when.
     * @return DateTime|null
    */
    public function getCreditTime(): ?DateTime {
        return $this->creditTime;
    }

    /**
     * Gets the currency property value. The currency.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the details property value. Details for the payment demand that needs to be billed. Typically Orders and Subscriptions related, but may be standalone transactions as well.
     * @return array<PaymentDemandDetailView>|null
    */
    public function getDetails(): ?array {
        return $this->details;
    }

    /**
     * Gets the dueDate property value. The payment due time.
     * @return DateTime|null
    */
    public function getDueDate(): ?DateTime {
        return $this->dueDate;
    }

    /**
     * Gets the enterprisePlanId property value. An optional enterprise plan identifier indicating that the demand is assign to an Enterprise.
     * @return string|null
    */
    public function getEnterprisePlanId(): ?string {
        return $this->enterprisePlanId;
    }

    /**
     * Gets the fees property value. Fees such as extra cost for a specific Invoicing type.
     * @return array<PaymentDemandFeeView>|null
    */
    public function getFees(): ?array {
        return $this->fees;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowances' => fn(ParseNode $n) => $o->setAllowances($n->getCollectionOfObjectValues([DemandAllowance::class, 'createFromDiscriminatorValue'])),
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'billingPlanId' => fn(ParseNode $n) => $o->setBillingPlanId($n->getStringValue()),
            'charges' => fn(ParseNode $n) => $o->setCharges($n->getCollectionOfObjectValues([DemandCharge::class, 'createFromDiscriminatorValue'])),
            'creditLedgerId' => fn(ParseNode $n) => $o->setCreditLedgerId($n->getStringValue()),
            'creditNoteId' => fn(ParseNode $n) => $o->setCreditNoteId($n->getStringValue()),
            'creditTime' => fn(ParseNode $n) => $o->setCreditTime($n->getDateTimeValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getCollectionOfObjectValues([PaymentDemandDetailView::class, 'createFromDiscriminatorValue'])),
            'dueDate' => fn(ParseNode $n) => $o->setDueDate($n->getDateTimeValue()),
            'enterprisePlanId' => fn(ParseNode $n) => $o->setEnterprisePlanId($n->getStringValue()),
            'fees' => fn(ParseNode $n) => $o->setFees($n->getCollectionOfObjectValues([PaymentDemandFeeView::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'invoiceContactId' => fn(ParseNode $n) => $o->setInvoiceContactId($n->getStringValue()),
            'invoiceId' => fn(ParseNode $n) => $o->setInvoiceId($n->getStringValue()),
            'issueDate' => fn(ParseNode $n) => $o->setIssueDate($n->getDateTimeValue()),
            'ledgerId' => fn(ParseNode $n) => $o->setLedgerId($n->getStringValue()),
            'orderReference' => fn(ParseNode $n) => $o->setOrderReference($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'paymentAgreementId' => fn(ParseNode $n) => $o->setPaymentAgreementId($n->getStringValue()),
            'paymentId' => fn(ParseNode $n) => $o->setPaymentId($n->getStringValue()),
            'paymentProviderType' => fn(ParseNode $n) => $o->setPaymentProviderType($n->getStringValue()),
            'reminders' => fn(ParseNode $n) => $o->setReminders($n->getCollectionOfObjectValues([PaymentDemandReminderView::class, 'createFromDiscriminatorValue'])),
            'settleDate' => fn(ParseNode $n) => $o->setSettleDate($n->getDateTimeValue()),
            'settlementTransactions' => fn(ParseNode $n) => $o->setSettlementTransactions($n->getObjectValue([SettlementTransactions::class, 'createFromDiscriminatorValue'])),
            'subscriberAccount' => fn(ParseNode $n) => $o->setSubscriberAccount($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
            'writeOffReason' => fn(ParseNode $n) => $o->setWriteOffReason($n->getStringValue()),
            'writeOffTime' => fn(ParseNode $n) => $o->setWriteOffTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Id of the demand.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the invoiceContactId property value. Identifier of the invoice recipient (Subscriber Contact).
     * @return string|null
    */
    public function getInvoiceContactId(): ?string {
        return $this->invoiceContactId;
    }

    /**
     * Gets the invoiceId property value. The identifier of the invoice this demand generated.
     * @return string|null
    */
    public function getInvoiceId(): ?string {
        return $this->invoiceId;
    }

    /**
     * Gets the issueDate property value. When was the demand issued/created.
     * @return DateTime|null
    */
    public function getIssueDate(): ?DateTime {
        return $this->issueDate;
    }

    /**
     * Gets the ledgerId property value. The LedgerId that represents this demand at its time of creation.
     * @return string|null
    */
    public function getLedgerId(): ?string {
        return $this->ledgerId;
    }

    /**
     * Gets the orderReference property value. Optional order reference.
     * @return string|null
    */
    public function getOrderReference(): ?string {
        return $this->orderReference;
    }

    /**
     * Gets the organizationId property value. The organization.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the paymentAgreementId property value. Id for the payment agreement that followup payment requests and dunning will be based upon.
     * @return string|null
    */
    public function getPaymentAgreementId(): ?string {
        return $this->paymentAgreementId;
    }

    /**
     * Gets the paymentId property value. An optional payment if the demand was settled by a single payment.
     * @return string|null
    */
    public function getPaymentId(): ?string {
        return $this->paymentId;
    }

    /**
     * Gets the paymentProviderType property value. The type of the payment method.
     * @return string|null
    */
    public function getPaymentProviderType(): ?string {
        return $this->paymentProviderType;
    }

    /**
     * Gets the reminders property value. Reminders for the current demand.
     * @return array<PaymentDemandReminderView>|null
    */
    public function getReminders(): ?array {
        return $this->reminders;
    }

    /**
     * Gets the settleDate property value. The time of settlement.
     * @return DateTime|null
    */
    public function getSettleDate(): ?DateTime {
        return $this->settleDate;
    }

    /**
     * Gets the settlementTransactions property value. A settlement transactions.
     * @return SettlementTransactions|null
    */
    public function getSettlementTransactions(): ?SettlementTransactions {
        return $this->settlementTransactions;
    }

    /**
     * Gets the subscriberAccount property value. The subscriber account the amount is charged to.
     * @return string|null
    */
    public function getSubscriberAccount(): ?string {
        return $this->subscriberAccount;
    }

    /**
     * Gets the subscriberId property value. The subscriber that this demand is charged for.
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the transactionId property value. An optional payment method transaction id.
     * @return string|null
    */
    public function getTransactionId(): ?string {
        return $this->transactionId;
    }

    /**
     * Gets the writeOffReason property value. The reason for the write off.
     * @return string|null
    */
    public function getWriteOffReason(): ?string {
        return $this->writeOffReason;
    }

    /**
     * Gets the writeOffTime property value. Indicates if the demand was written off and when.
     * @return DateTime|null
    */
    public function getWriteOffTime(): ?DateTime {
        return $this->writeOffTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('allowances', $this->getAllowances());
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeStringValue('billingPlanId', $this->getBillingPlanId());
        $writer->writeCollectionOfObjectValues('charges', $this->getCharges());
        $writer->writeStringValue('creditLedgerId', $this->getCreditLedgerId());
        $writer->writeStringValue('creditNoteId', $this->getCreditNoteId());
        $writer->writeDateTimeValue('creditTime', $this->getCreditTime());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeCollectionOfObjectValues('details', $this->getDetails());
        $writer->writeDateTimeValue('dueDate', $this->getDueDate());
        $writer->writeStringValue('enterprisePlanId', $this->getEnterprisePlanId());
        $writer->writeCollectionOfObjectValues('fees', $this->getFees());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('invoiceContactId', $this->getInvoiceContactId());
        $writer->writeStringValue('invoiceId', $this->getInvoiceId());
        $writer->writeDateTimeValue('issueDate', $this->getIssueDate());
        $writer->writeStringValue('ledgerId', $this->getLedgerId());
        $writer->writeStringValue('orderReference', $this->getOrderReference());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('paymentAgreementId', $this->getPaymentAgreementId());
        $writer->writeStringValue('paymentId', $this->getPaymentId());
        $writer->writeStringValue('paymentProviderType', $this->getPaymentProviderType());
        $writer->writeCollectionOfObjectValues('reminders', $this->getReminders());
        $writer->writeDateTimeValue('settleDate', $this->getSettleDate());
        $writer->writeObjectValue('settlementTransactions', $this->getSettlementTransactions());
        $writer->writeStringValue('subscriberAccount', $this->getSubscriberAccount());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
        $writer->writeStringValue('writeOffReason', $this->getWriteOffReason());
        $writer->writeDateTimeValue('writeOffTime', $this->getWriteOffTime());
    }

    /**
     * Sets the allowances property value. Allowances reducing the total amount.
     * @param array<DemandAllowance>|null $value Value to set for the allowances property.
    */
    public function setAllowances(?array $value): void {
        $this->allowances = $value;
    }

    /**
     * Sets the amount property value. The total amount billed.
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the billingPlanId property value. The billing plan.
     * @param string|null $value Value to set for the billingPlanId property.
    */
    public function setBillingPlanId(?string $value): void {
        $this->billingPlanId = $value;
    }

    /**
     * Sets the charges property value. Charges increasing the total amount.
     * @param array<DemandCharge>|null $value Value to set for the charges property.
    */
    public function setCharges(?array $value): void {
        $this->charges = $value;
    }

    /**
     * Sets the creditLedgerId property value. The ledger id for the credit transaction.
     * @param string|null $value Value to set for the creditLedgerId property.
    */
    public function setCreditLedgerId(?string $value): void {
        $this->creditLedgerId = $value;
    }

    /**
     * Sets the creditNoteId property value. The credit note that crediting the demand has generated.
     * @param string|null $value Value to set for the creditNoteId property.
    */
    public function setCreditNoteId(?string $value): void {
        $this->creditNoteId = $value;
    }

    /**
     * Sets the creditTime property value. Indicates if the demand was credited and when.
     * @param DateTime|null $value Value to set for the creditTime property.
    */
    public function setCreditTime(?DateTime $value): void {
        $this->creditTime = $value;
    }

    /**
     * Sets the currency property value. The currency.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the details property value. Details for the payment demand that needs to be billed. Typically Orders and Subscriptions related, but may be standalone transactions as well.
     * @param array<PaymentDemandDetailView>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value): void {
        $this->details = $value;
    }

    /**
     * Sets the dueDate property value. The payment due time.
     * @param DateTime|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?DateTime $value): void {
        $this->dueDate = $value;
    }

    /**
     * Sets the enterprisePlanId property value. An optional enterprise plan identifier indicating that the demand is assign to an Enterprise.
     * @param string|null $value Value to set for the enterprisePlanId property.
    */
    public function setEnterprisePlanId(?string $value): void {
        $this->enterprisePlanId = $value;
    }

    /**
     * Sets the fees property value. Fees such as extra cost for a specific Invoicing type.
     * @param array<PaymentDemandFeeView>|null $value Value to set for the fees property.
    */
    public function setFees(?array $value): void {
        $this->fees = $value;
    }

    /**
     * Sets the id property value. Unique Id of the demand.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the invoiceContactId property value. Identifier of the invoice recipient (Subscriber Contact).
     * @param string|null $value Value to set for the invoiceContactId property.
    */
    public function setInvoiceContactId(?string $value): void {
        $this->invoiceContactId = $value;
    }

    /**
     * Sets the invoiceId property value. The identifier of the invoice this demand generated.
     * @param string|null $value Value to set for the invoiceId property.
    */
    public function setInvoiceId(?string $value): void {
        $this->invoiceId = $value;
    }

    /**
     * Sets the issueDate property value. When was the demand issued/created.
     * @param DateTime|null $value Value to set for the issueDate property.
    */
    public function setIssueDate(?DateTime $value): void {
        $this->issueDate = $value;
    }

    /**
     * Sets the ledgerId property value. The LedgerId that represents this demand at its time of creation.
     * @param string|null $value Value to set for the ledgerId property.
    */
    public function setLedgerId(?string $value): void {
        $this->ledgerId = $value;
    }

    /**
     * Sets the orderReference property value. Optional order reference.
     * @param string|null $value Value to set for the orderReference property.
    */
    public function setOrderReference(?string $value): void {
        $this->orderReference = $value;
    }

    /**
     * Sets the organizationId property value. The organization.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the paymentAgreementId property value. Id for the payment agreement that followup payment requests and dunning will be based upon.
     * @param string|null $value Value to set for the paymentAgreementId property.
    */
    public function setPaymentAgreementId(?string $value): void {
        $this->paymentAgreementId = $value;
    }

    /**
     * Sets the paymentId property value. An optional payment if the demand was settled by a single payment.
     * @param string|null $value Value to set for the paymentId property.
    */
    public function setPaymentId(?string $value): void {
        $this->paymentId = $value;
    }

    /**
     * Sets the paymentProviderType property value. The type of the payment method.
     * @param string|null $value Value to set for the paymentProviderType property.
    */
    public function setPaymentProviderType(?string $value): void {
        $this->paymentProviderType = $value;
    }

    /**
     * Sets the reminders property value. Reminders for the current demand.
     * @param array<PaymentDemandReminderView>|null $value Value to set for the reminders property.
    */
    public function setReminders(?array $value): void {
        $this->reminders = $value;
    }

    /**
     * Sets the settleDate property value. The time of settlement.
     * @param DateTime|null $value Value to set for the settleDate property.
    */
    public function setSettleDate(?DateTime $value): void {
        $this->settleDate = $value;
    }

    /**
     * Sets the settlementTransactions property value. A settlement transactions.
     * @param SettlementTransactions|null $value Value to set for the settlementTransactions property.
    */
    public function setSettlementTransactions(?SettlementTransactions $value): void {
        $this->settlementTransactions = $value;
    }

    /**
     * Sets the subscriberAccount property value. The subscriber account the amount is charged to.
     * @param string|null $value Value to set for the subscriberAccount property.
    */
    public function setSubscriberAccount(?string $value): void {
        $this->subscriberAccount = $value;
    }

    /**
     * Sets the subscriberId property value. The subscriber that this demand is charged for.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the transactionId property value. An optional payment method transaction id.
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->transactionId = $value;
    }

    /**
     * Sets the writeOffReason property value. The reason for the write off.
     * @param string|null $value Value to set for the writeOffReason property.
    */
    public function setWriteOffReason(?string $value): void {
        $this->writeOffReason = $value;
    }

    /**
     * Sets the writeOffTime property value. Indicates if the demand was written off and when.
     * @param DateTime|null $value Value to set for the writeOffTime property.
    */
    public function setWriteOffTime(?DateTime $value): void {
        $this->writeOffTime = $value;
    }

}
