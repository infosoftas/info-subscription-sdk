<?php

namespace Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Api\DataContracts\V1\Order;

use DateTime;
use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Api\DataContracts\V1\PaymentMethods;
use Infosoft\InfoSubscription\Generated\Models\TemplatePackageChoices;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An order view.
*/
class OrderView implements Parsable 
{
    /**
     * @var string|null $agreementReference Gets or sets the agreement reference.
    */
    private ?string $agreementReference = null;
    
    /**
     * @var string|null $externalSubscriberId Gets or sets the identifier of the external subscriber.
    */
    private ?string $externalSubscriberId = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $invoiceContactId Gets or sets the identifier of the invoice contact.
    */
    private ?string $invoiceContactId = null;
    
    /**
     * @var DateTime|null $orderCancelled Gets or sets the Date/Time of the order cancelled.
    */
    private ?DateTime $orderCancelled = null;
    
    /**
     * @var DateTime|null $orderCompleted Gets or sets the Date/Time of the order completed.
    */
    private ?DateTime $orderCompleted = null;
    
    /**
     * @var DateTime|null $orderCreated Gets or sets the Date/Time of the order created.
    */
    private ?DateTime $orderCreated = null;
    
    /**
     * @var string|null $orderReference An optional order reference.
    */
    private ?string $orderReference = null;
    
    /**
     * @var string|null $organizationId Gets or sets the identifier of the organization.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $paymentAgreementId Gets or sets the identifier of the payment agreement.
    */
    private ?string $paymentAgreementId = null;
    
    /**
     * @var string|null $paymentId Gets or sets the identifier of the related payment.
    */
    private ?string $paymentId = null;
    
    /**
     * @var PaymentMethods|null $paymentMethod Gets the payment methods.
    */
    private ?PaymentMethods $paymentMethod = null;
    
    /**
     * @var string|null $planSourceType Gets or sets the plan source type indicating how the final plan was resolved.
    */
    private ?string $planSourceType = null;
    
    /**
     * @var bool|null $settleAccountBalance Should this order settle existing account balance when when billed.
    */
    private ?bool $settleAccountBalance = null;
    
    /**
     * @var string|null $status Gets or sets the status.
    */
    private ?string $status = null;
    
    /**
     * @var string|null $subscriberAccount Gets or sets the subscriber account.
    */
    private ?string $subscriberAccount = null;
    
    /**
     * @var string|null $subscriberId Gets or sets the identifier of the subscriber.
    */
    private ?string $subscriberId = null;
    
    /**
     * @var int|null $subscriberNumber Gets or sets the subscriber number.
    */
    private ?int $subscriberNumber = null;
    
    /**
     * @var string|null $subscriptionId Gets or sets the identifier of the resulting subscription.
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var string|null $subscriptionPlanId Gets or sets the identifier of the subscription plan when resolved to an existing or inline plan.
    */
    private ?string $subscriptionPlanId = null;
    
    /**
     * @var OrderTag|null $tag The order tag.The entity that is used to store various types (TagType) of values ​​in a reporting service.
    */
    private ?OrderTag $tag = null;
    
    /**
     * @var TemplatePackageChoices|null $templatePackageChoices A template package choices.
    */
    private ?TemplatePackageChoices $templatePackageChoices = null;
    
    /**
     * @var string|null $templatePackageId Gets or sets the identifier of the template package.
    */
    private ?string $templatePackageId = null;
    
    /**
     * @var string|null $terminalRedirectUrl Gets or sets URL of the terminal redirect.
    */
    private ?string $terminalRedirectUrl = null;
    
    /**
     * @var string|null $transactionId Gets or sets the payment provider transaction if one is associated with the order.
    */
    private ?string $transactionId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderView {
        return new OrderView();
    }

    /**
     * Gets the agreementReference property value. Gets or sets the agreement reference.
     * @return string|null
    */
    public function getAgreementReference(): ?string {
        return $this->agreementReference;
    }

    /**
     * Gets the externalSubscriberId property value. Gets or sets the identifier of the external subscriber.
     * @return string|null
    */
    public function getExternalSubscriberId(): ?string {
        return $this->externalSubscriberId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'agreementReference' => fn(ParseNode $n) => $o->setAgreementReference($n->getStringValue()),
            'externalSubscriberId' => fn(ParseNode $n) => $o->setExternalSubscriberId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'invoiceContactId' => fn(ParseNode $n) => $o->setInvoiceContactId($n->getStringValue()),
            'orderCancelled' => fn(ParseNode $n) => $o->setOrderCancelled($n->getDateTimeValue()),
            'orderCompleted' => fn(ParseNode $n) => $o->setOrderCompleted($n->getDateTimeValue()),
            'orderCreated' => fn(ParseNode $n) => $o->setOrderCreated($n->getDateTimeValue()),
            'orderReference' => fn(ParseNode $n) => $o->setOrderReference($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'paymentAgreementId' => fn(ParseNode $n) => $o->setPaymentAgreementId($n->getStringValue()),
            'paymentId' => fn(ParseNode $n) => $o->setPaymentId($n->getStringValue()),
            'paymentMethod' => fn(ParseNode $n) => $o->setPaymentMethod($n->getEnumValue(PaymentMethods::class)),
            'planSourceType' => fn(ParseNode $n) => $o->setPlanSourceType($n->getStringValue()),
            'settleAccountBalance' => fn(ParseNode $n) => $o->setSettleAccountBalance($n->getBooleanValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'subscriberAccount' => fn(ParseNode $n) => $o->setSubscriberAccount($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'subscriberNumber' => fn(ParseNode $n) => $o->setSubscriberNumber($n->getIntegerValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'subscriptionPlanId' => fn(ParseNode $n) => $o->setSubscriptionPlanId($n->getStringValue()),
            'tag' => fn(ParseNode $n) => $o->setTag($n->getObjectValue([OrderTag::class, 'createFromDiscriminatorValue'])),
            'templatePackageChoices' => fn(ParseNode $n) => $o->setTemplatePackageChoices($n->getObjectValue([TemplatePackageChoices::class, 'createFromDiscriminatorValue'])),
            'templatePackageId' => fn(ParseNode $n) => $o->setTemplatePackageId($n->getStringValue()),
            'terminalRedirectUrl' => fn(ParseNode $n) => $o->setTerminalRedirectUrl($n->getStringValue()),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Gets or sets the identifier.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the invoiceContactId property value. Gets or sets the identifier of the invoice contact.
     * @return string|null
    */
    public function getInvoiceContactId(): ?string {
        return $this->invoiceContactId;
    }

    /**
     * Gets the orderCancelled property value. Gets or sets the Date/Time of the order cancelled.
     * @return DateTime|null
    */
    public function getOrderCancelled(): ?DateTime {
        return $this->orderCancelled;
    }

    /**
     * Gets the orderCompleted property value. Gets or sets the Date/Time of the order completed.
     * @return DateTime|null
    */
    public function getOrderCompleted(): ?DateTime {
        return $this->orderCompleted;
    }

    /**
     * Gets the orderCreated property value. Gets or sets the Date/Time of the order created.
     * @return DateTime|null
    */
    public function getOrderCreated(): ?DateTime {
        return $this->orderCreated;
    }

    /**
     * Gets the orderReference property value. An optional order reference.
     * @return string|null
    */
    public function getOrderReference(): ?string {
        return $this->orderReference;
    }

    /**
     * Gets the organizationId property value. Gets or sets the identifier of the organization.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the paymentAgreementId property value. Gets or sets the identifier of the payment agreement.
     * @return string|null
    */
    public function getPaymentAgreementId(): ?string {
        return $this->paymentAgreementId;
    }

    /**
     * Gets the paymentId property value. Gets or sets the identifier of the related payment.
     * @return string|null
    */
    public function getPaymentId(): ?string {
        return $this->paymentId;
    }

    /**
     * Gets the paymentMethod property value. Gets the payment methods.
     * @return PaymentMethods|null
    */
    public function getPaymentMethod(): ?PaymentMethods {
        return $this->paymentMethod;
    }

    /**
     * Gets the planSourceType property value. Gets or sets the plan source type indicating how the final plan was resolved.
     * @return string|null
    */
    public function getPlanSourceType(): ?string {
        return $this->planSourceType;
    }

    /**
     * Gets the settleAccountBalance property value. Should this order settle existing account balance when when billed.
     * @return bool|null
    */
    public function getSettleAccountBalance(): ?bool {
        return $this->settleAccountBalance;
    }

    /**
     * Gets the status property value. Gets or sets the status.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the subscriberAccount property value. Gets or sets the subscriber account.
     * @return string|null
    */
    public function getSubscriberAccount(): ?string {
        return $this->subscriberAccount;
    }

    /**
     * Gets the subscriberId property value. Gets or sets the identifier of the subscriber.
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the subscriberNumber property value. Gets or sets the subscriber number.
     * @return int|null
    */
    public function getSubscriberNumber(): ?int {
        return $this->subscriberNumber;
    }

    /**
     * Gets the subscriptionId property value. Gets or sets the identifier of the resulting subscription.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Gets the subscriptionPlanId property value. Gets or sets the identifier of the subscription plan when resolved to an existing or inline plan.
     * @return string|null
    */
    public function getSubscriptionPlanId(): ?string {
        return $this->subscriptionPlanId;
    }

    /**
     * Gets the tag property value. The order tag.The entity that is used to store various types (TagType) of values ​​in a reporting service.
     * @return OrderTag|null
    */
    public function getTag(): ?OrderTag {
        return $this->tag;
    }

    /**
     * Gets the templatePackageChoices property value. A template package choices.
     * @return TemplatePackageChoices|null
    */
    public function getTemplatePackageChoices(): ?TemplatePackageChoices {
        return $this->templatePackageChoices;
    }

    /**
     * Gets the templatePackageId property value. Gets or sets the identifier of the template package.
     * @return string|null
    */
    public function getTemplatePackageId(): ?string {
        return $this->templatePackageId;
    }

    /**
     * Gets the terminalRedirectUrl property value. Gets or sets URL of the terminal redirect.
     * @return string|null
    */
    public function getTerminalRedirectUrl(): ?string {
        return $this->terminalRedirectUrl;
    }

    /**
     * Gets the transactionId property value. Gets or sets the payment provider transaction if one is associated with the order.
     * @return string|null
    */
    public function getTransactionId(): ?string {
        return $this->transactionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('agreementReference', $this->getAgreementReference());
        $writer->writeStringValue('externalSubscriberId', $this->getExternalSubscriberId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('invoiceContactId', $this->getInvoiceContactId());
        $writer->writeDateTimeValue('orderCancelled', $this->getOrderCancelled());
        $writer->writeDateTimeValue('orderCompleted', $this->getOrderCompleted());
        $writer->writeDateTimeValue('orderCreated', $this->getOrderCreated());
        $writer->writeStringValue('orderReference', $this->getOrderReference());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('paymentAgreementId', $this->getPaymentAgreementId());
        $writer->writeStringValue('paymentId', $this->getPaymentId());
        $writer->writeEnumValue('paymentMethod', $this->getPaymentMethod());
        $writer->writeStringValue('planSourceType', $this->getPlanSourceType());
        $writer->writeBooleanValue('settleAccountBalance', $this->getSettleAccountBalance());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('subscriberAccount', $this->getSubscriberAccount());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeIntegerValue('subscriberNumber', $this->getSubscriberNumber());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('subscriptionPlanId', $this->getSubscriptionPlanId());
        $writer->writeObjectValue('tag', $this->getTag());
        $writer->writeObjectValue('templatePackageChoices', $this->getTemplatePackageChoices());
        $writer->writeStringValue('templatePackageId', $this->getTemplatePackageId());
        $writer->writeStringValue('terminalRedirectUrl', $this->getTerminalRedirectUrl());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
    }

    /**
     * Sets the agreementReference property value. Gets or sets the agreement reference.
     * @param string|null $value Value to set for the agreementReference property.
    */
    public function setAgreementReference(?string $value): void {
        $this->agreementReference = $value;
    }

    /**
     * Sets the externalSubscriberId property value. Gets or sets the identifier of the external subscriber.
     * @param string|null $value Value to set for the externalSubscriberId property.
    */
    public function setExternalSubscriberId(?string $value): void {
        $this->externalSubscriberId = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the invoiceContactId property value. Gets or sets the identifier of the invoice contact.
     * @param string|null $value Value to set for the invoiceContactId property.
    */
    public function setInvoiceContactId(?string $value): void {
        $this->invoiceContactId = $value;
    }

    /**
     * Sets the orderCancelled property value. Gets or sets the Date/Time of the order cancelled.
     * @param DateTime|null $value Value to set for the orderCancelled property.
    */
    public function setOrderCancelled(?DateTime $value): void {
        $this->orderCancelled = $value;
    }

    /**
     * Sets the orderCompleted property value. Gets or sets the Date/Time of the order completed.
     * @param DateTime|null $value Value to set for the orderCompleted property.
    */
    public function setOrderCompleted(?DateTime $value): void {
        $this->orderCompleted = $value;
    }

    /**
     * Sets the orderCreated property value. Gets or sets the Date/Time of the order created.
     * @param DateTime|null $value Value to set for the orderCreated property.
    */
    public function setOrderCreated(?DateTime $value): void {
        $this->orderCreated = $value;
    }

    /**
     * Sets the orderReference property value. An optional order reference.
     * @param string|null $value Value to set for the orderReference property.
    */
    public function setOrderReference(?string $value): void {
        $this->orderReference = $value;
    }

    /**
     * Sets the organizationId property value. Gets or sets the identifier of the organization.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the paymentAgreementId property value. Gets or sets the identifier of the payment agreement.
     * @param string|null $value Value to set for the paymentAgreementId property.
    */
    public function setPaymentAgreementId(?string $value): void {
        $this->paymentAgreementId = $value;
    }

    /**
     * Sets the paymentId property value. Gets or sets the identifier of the related payment.
     * @param string|null $value Value to set for the paymentId property.
    */
    public function setPaymentId(?string $value): void {
        $this->paymentId = $value;
    }

    /**
     * Sets the paymentMethod property value. Gets the payment methods.
     * @param PaymentMethods|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?PaymentMethods $value): void {
        $this->paymentMethod = $value;
    }

    /**
     * Sets the planSourceType property value. Gets or sets the plan source type indicating how the final plan was resolved.
     * @param string|null $value Value to set for the planSourceType property.
    */
    public function setPlanSourceType(?string $value): void {
        $this->planSourceType = $value;
    }

    /**
     * Sets the settleAccountBalance property value. Should this order settle existing account balance when when billed.
     * @param bool|null $value Value to set for the settleAccountBalance property.
    */
    public function setSettleAccountBalance(?bool $value): void {
        $this->settleAccountBalance = $value;
    }

    /**
     * Sets the status property value. Gets or sets the status.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the subscriberAccount property value. Gets or sets the subscriber account.
     * @param string|null $value Value to set for the subscriberAccount property.
    */
    public function setSubscriberAccount(?string $value): void {
        $this->subscriberAccount = $value;
    }

    /**
     * Sets the subscriberId property value. Gets or sets the identifier of the subscriber.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the subscriberNumber property value. Gets or sets the subscriber number.
     * @param int|null $value Value to set for the subscriberNumber property.
    */
    public function setSubscriberNumber(?int $value): void {
        $this->subscriberNumber = $value;
    }

    /**
     * Sets the subscriptionId property value. Gets or sets the identifier of the resulting subscription.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->subscriptionId = $value;
    }

    /**
     * Sets the subscriptionPlanId property value. Gets or sets the identifier of the subscription plan when resolved to an existing or inline plan.
     * @param string|null $value Value to set for the subscriptionPlanId property.
    */
    public function setSubscriptionPlanId(?string $value): void {
        $this->subscriptionPlanId = $value;
    }

    /**
     * Sets the tag property value. The order tag.The entity that is used to store various types (TagType) of values ​​in a reporting service.
     * @param OrderTag|null $value Value to set for the tag property.
    */
    public function setTag(?OrderTag $value): void {
        $this->tag = $value;
    }

    /**
     * Sets the templatePackageChoices property value. A template package choices.
     * @param TemplatePackageChoices|null $value Value to set for the templatePackageChoices property.
    */
    public function setTemplatePackageChoices(?TemplatePackageChoices $value): void {
        $this->templatePackageChoices = $value;
    }

    /**
     * Sets the templatePackageId property value. Gets or sets the identifier of the template package.
     * @param string|null $value Value to set for the templatePackageId property.
    */
    public function setTemplatePackageId(?string $value): void {
        $this->templatePackageId = $value;
    }

    /**
     * Sets the terminalRedirectUrl property value. Gets or sets URL of the terminal redirect.
     * @param string|null $value Value to set for the terminalRedirectUrl property.
    */
    public function setTerminalRedirectUrl(?string $value): void {
        $this->terminalRedirectUrl = $value;
    }

    /**
     * Sets the transactionId property value. Gets or sets the payment provider transaction if one is associated with the order.
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->transactionId = $value;
    }

}
