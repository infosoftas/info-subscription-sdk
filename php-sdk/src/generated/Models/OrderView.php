<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents a read model of an order returned by the API. This classcontains the identifiers and metadata produced by order processing suchas status, related subscription/payment ids, timestamps and resolved planinformation.
*/
class OrderView implements Parsable 
{
    /**
     * @var string|null $agreementReference Reference returned by the payment provider or agreement creation step.Useful for reconcilliation with external systems.
    */
    private ?string $agreementReference = null;
    
    /**
     * @var string|null $externalSubscriberId External identifier for the subscriber (for example CRM or billingsystem id) used for correlation.
    */
    private ?string $externalSubscriberId = null;
    
    /**
     * @var string|null $id Unique identifier of the order record.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $invoiceContactId Identifier of the invoice contact used for billing documents.
    */
    private ?string $invoiceContactId = null;
    
    /**
     * @var DateTime|null $orderCancelled Timestamp when the order was cancelled, if applicable.
    */
    private ?DateTime $orderCancelled = null;
    
    /**
     * @var OrderChoices|null $orderChoices Represents properties/choices that overrides/set options from the Template Subscription Plan.
    */
    private ?OrderChoices $orderChoices = null;
    
    /**
     * @var DateTime|null $orderCompleted Timestamp when the order completed processing, if available.
    */
    private ?DateTime $orderCompleted = null;
    
    /**
     * @var DateTime|null $orderCreated Timestamp when the order was created.
    */
    private ?DateTime $orderCreated = null;
    
    /**
     * @var string|null $orderReference Optional external reference supplied with the order for correlation withexternal systems.
    */
    private ?string $orderReference = null;
    
    /**
     * @var string|null $organizationId Organization that owns the subscription created by this order.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $paymentAgreementId Identifier of the payment agreement used for the order, if any.
    */
    private ?string $paymentAgreementId = null;
    
    /**
     * @var string|null $paymentId Identifier of the payment produced by the order processing flow.
    */
    private ?string $paymentId = null;
    
    /**
     * @var PaymentMethods|null $paymentMethod The available payment methods.
    */
    private ?PaymentMethods $paymentMethod = null;
    
    /**
     * @var OrderPlanSourceType|null $planSourceType Identifies the source/type of the subscription plan associated with an order.Stored in the order event and read model to drive code-path branching at completion and cancellation.
    */
    private ?OrderPlanSourceType $planSourceType = null;
    
    /**
     * @var bool|null $settleAccountBalance When true indicates the order processing attempted to settle existingaccount balance as part of billing.
    */
    private ?bool $settleAccountBalance = null;
    
    /**
     * @var OrderStatus|null $status An enum representing different order statuses.
    */
    private ?OrderStatus $status = null;
    
    /**
     * @var string|null $subscriberAccount Subscriber account identifier associated with the order.
    */
    private ?string $subscriberAccount = null;
    
    /**
     * @var string|null $subscriberId Identifier of the subscriber the order is associated with, if any.
    */
    private ?string $subscriberId = null;
    
    /**
     * @var int|null $subscriberNumber Optional numeric subscriber number from the source system.
    */
    private ?int $subscriberNumber = null;
    
    /**
     * @var string|null $subscriptionId Identifier of the subscription created as a result of this order, if any.
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var string|null $subscriptionPlanId Subscription plan identifier when the plan was resolved to an existingor persisted inline plan.
    */
    private ?string $subscriptionPlanId = null;
    
    /**
     * @var OrderTag|null $tag The order tag.The entity that is used to store various types (TagType) of values in a reporting service.
    */
    private ?OrderTag $tag = null;
    
    /**
     * @var string|null $templatePackageId Template package id from ProductService used when the order was created(if a template was the source of the plan).
    */
    private ?string $templatePackageId = null;
    
    /**
     * @var string|null $terminalRedirectUrl If the payment flow requires a terminal redirect (for example to athird-party payment provider), this property contains the URL to redirectthe client to.
    */
    private ?string $terminalRedirectUrl = null;
    
    /**
     * @var string|null $transactionId Identifier of the payment transaction created during order processing.
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
     * Gets the agreementReference property value. Reference returned by the payment provider or agreement creation step.Useful for reconcilliation with external systems.
     * @return string|null
    */
    public function getAgreementReference(): ?string {
        return $this->agreementReference;
    }

    /**
     * Gets the externalSubscriberId property value. External identifier for the subscriber (for example CRM or billingsystem id) used for correlation.
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
            'orderChoices' => fn(ParseNode $n) => $o->setOrderChoices($n->getObjectValue([OrderChoices::class, 'createFromDiscriminatorValue'])),
            'orderCompleted' => fn(ParseNode $n) => $o->setOrderCompleted($n->getDateTimeValue()),
            'orderCreated' => fn(ParseNode $n) => $o->setOrderCreated($n->getDateTimeValue()),
            'orderReference' => fn(ParseNode $n) => $o->setOrderReference($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'paymentAgreementId' => fn(ParseNode $n) => $o->setPaymentAgreementId($n->getStringValue()),
            'paymentId' => fn(ParseNode $n) => $o->setPaymentId($n->getStringValue()),
            'paymentMethod' => fn(ParseNode $n) => $o->setPaymentMethod($n->getEnumValue(PaymentMethods::class)),
            'planSourceType' => fn(ParseNode $n) => $o->setPlanSourceType($n->getEnumValue(OrderPlanSourceType::class)),
            'settleAccountBalance' => fn(ParseNode $n) => $o->setSettleAccountBalance($n->getBooleanValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(OrderStatus::class)),
            'subscriberAccount' => fn(ParseNode $n) => $o->setSubscriberAccount($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'subscriberNumber' => fn(ParseNode $n) => $o->setSubscriberNumber($n->getIntegerValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'subscriptionPlanId' => fn(ParseNode $n) => $o->setSubscriptionPlanId($n->getStringValue()),
            'tag' => fn(ParseNode $n) => $o->setTag($n->getObjectValue([OrderTag::class, 'createFromDiscriminatorValue'])),
            'templatePackageId' => fn(ParseNode $n) => $o->setTemplatePackageId($n->getStringValue()),
            'terminalRedirectUrl' => fn(ParseNode $n) => $o->setTerminalRedirectUrl($n->getStringValue()),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique identifier of the order record.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the invoiceContactId property value. Identifier of the invoice contact used for billing documents.
     * @return string|null
    */
    public function getInvoiceContactId(): ?string {
        return $this->invoiceContactId;
    }

    /**
     * Gets the orderCancelled property value. Timestamp when the order was cancelled, if applicable.
     * @return DateTime|null
    */
    public function getOrderCancelled(): ?DateTime {
        return $this->orderCancelled;
    }

    /**
     * Gets the orderChoices property value. Represents properties/choices that overrides/set options from the Template Subscription Plan.
     * @return OrderChoices|null
    */
    public function getOrderChoices(): ?OrderChoices {
        return $this->orderChoices;
    }

    /**
     * Gets the orderCompleted property value. Timestamp when the order completed processing, if available.
     * @return DateTime|null
    */
    public function getOrderCompleted(): ?DateTime {
        return $this->orderCompleted;
    }

    /**
     * Gets the orderCreated property value. Timestamp when the order was created.
     * @return DateTime|null
    */
    public function getOrderCreated(): ?DateTime {
        return $this->orderCreated;
    }

    /**
     * Gets the orderReference property value. Optional external reference supplied with the order for correlation withexternal systems.
     * @return string|null
    */
    public function getOrderReference(): ?string {
        return $this->orderReference;
    }

    /**
     * Gets the organizationId property value. Organization that owns the subscription created by this order.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the paymentAgreementId property value. Identifier of the payment agreement used for the order, if any.
     * @return string|null
    */
    public function getPaymentAgreementId(): ?string {
        return $this->paymentAgreementId;
    }

    /**
     * Gets the paymentId property value. Identifier of the payment produced by the order processing flow.
     * @return string|null
    */
    public function getPaymentId(): ?string {
        return $this->paymentId;
    }

    /**
     * Gets the paymentMethod property value. The available payment methods.
     * @return PaymentMethods|null
    */
    public function getPaymentMethod(): ?PaymentMethods {
        return $this->paymentMethod;
    }

    /**
     * Gets the planSourceType property value. Identifies the source/type of the subscription plan associated with an order.Stored in the order event and read model to drive code-path branching at completion and cancellation.
     * @return OrderPlanSourceType|null
    */
    public function getPlanSourceType(): ?OrderPlanSourceType {
        return $this->planSourceType;
    }

    /**
     * Gets the settleAccountBalance property value. When true indicates the order processing attempted to settle existingaccount balance as part of billing.
     * @return bool|null
    */
    public function getSettleAccountBalance(): ?bool {
        return $this->settleAccountBalance;
    }

    /**
     * Gets the status property value. An enum representing different order statuses.
     * @return OrderStatus|null
    */
    public function getStatus(): ?OrderStatus {
        return $this->status;
    }

    /**
     * Gets the subscriberAccount property value. Subscriber account identifier associated with the order.
     * @return string|null
    */
    public function getSubscriberAccount(): ?string {
        return $this->subscriberAccount;
    }

    /**
     * Gets the subscriberId property value. Identifier of the subscriber the order is associated with, if any.
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the subscriberNumber property value. Optional numeric subscriber number from the source system.
     * @return int|null
    */
    public function getSubscriberNumber(): ?int {
        return $this->subscriberNumber;
    }

    /**
     * Gets the subscriptionId property value. Identifier of the subscription created as a result of this order, if any.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Gets the subscriptionPlanId property value. Subscription plan identifier when the plan was resolved to an existingor persisted inline plan.
     * @return string|null
    */
    public function getSubscriptionPlanId(): ?string {
        return $this->subscriptionPlanId;
    }

    /**
     * Gets the tag property value. The order tag.The entity that is used to store various types (TagType) of values in a reporting service.
     * @return OrderTag|null
    */
    public function getTag(): ?OrderTag {
        return $this->tag;
    }

    /**
     * Gets the templatePackageId property value. Template package id from ProductService used when the order was created(if a template was the source of the plan).
     * @return string|null
    */
    public function getTemplatePackageId(): ?string {
        return $this->templatePackageId;
    }

    /**
     * Gets the terminalRedirectUrl property value. If the payment flow requires a terminal redirect (for example to athird-party payment provider), this property contains the URL to redirectthe client to.
     * @return string|null
    */
    public function getTerminalRedirectUrl(): ?string {
        return $this->terminalRedirectUrl;
    }

    /**
     * Gets the transactionId property value. Identifier of the payment transaction created during order processing.
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
        $writer->writeObjectValue('orderChoices', $this->getOrderChoices());
        $writer->writeDateTimeValue('orderCompleted', $this->getOrderCompleted());
        $writer->writeDateTimeValue('orderCreated', $this->getOrderCreated());
        $writer->writeStringValue('orderReference', $this->getOrderReference());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('paymentAgreementId', $this->getPaymentAgreementId());
        $writer->writeStringValue('paymentId', $this->getPaymentId());
        $writer->writeEnumValue('paymentMethod', $this->getPaymentMethod());
        $writer->writeEnumValue('planSourceType', $this->getPlanSourceType());
        $writer->writeBooleanValue('settleAccountBalance', $this->getSettleAccountBalance());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('subscriberAccount', $this->getSubscriberAccount());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeIntegerValue('subscriberNumber', $this->getSubscriberNumber());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('subscriptionPlanId', $this->getSubscriptionPlanId());
        $writer->writeObjectValue('tag', $this->getTag());
        $writer->writeStringValue('templatePackageId', $this->getTemplatePackageId());
        $writer->writeStringValue('terminalRedirectUrl', $this->getTerminalRedirectUrl());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
    }

    /**
     * Sets the agreementReference property value. Reference returned by the payment provider or agreement creation step.Useful for reconcilliation with external systems.
     * @param string|null $value Value to set for the agreementReference property.
    */
    public function setAgreementReference(?string $value): void {
        $this->agreementReference = $value;
    }

    /**
     * Sets the externalSubscriberId property value. External identifier for the subscriber (for example CRM or billingsystem id) used for correlation.
     * @param string|null $value Value to set for the externalSubscriberId property.
    */
    public function setExternalSubscriberId(?string $value): void {
        $this->externalSubscriberId = $value;
    }

    /**
     * Sets the id property value. Unique identifier of the order record.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the invoiceContactId property value. Identifier of the invoice contact used for billing documents.
     * @param string|null $value Value to set for the invoiceContactId property.
    */
    public function setInvoiceContactId(?string $value): void {
        $this->invoiceContactId = $value;
    }

    /**
     * Sets the orderCancelled property value. Timestamp when the order was cancelled, if applicable.
     * @param DateTime|null $value Value to set for the orderCancelled property.
    */
    public function setOrderCancelled(?DateTime $value): void {
        $this->orderCancelled = $value;
    }

    /**
     * Sets the orderChoices property value. Represents properties/choices that overrides/set options from the Template Subscription Plan.
     * @param OrderChoices|null $value Value to set for the orderChoices property.
    */
    public function setOrderChoices(?OrderChoices $value): void {
        $this->orderChoices = $value;
    }

    /**
     * Sets the orderCompleted property value. Timestamp when the order completed processing, if available.
     * @param DateTime|null $value Value to set for the orderCompleted property.
    */
    public function setOrderCompleted(?DateTime $value): void {
        $this->orderCompleted = $value;
    }

    /**
     * Sets the orderCreated property value. Timestamp when the order was created.
     * @param DateTime|null $value Value to set for the orderCreated property.
    */
    public function setOrderCreated(?DateTime $value): void {
        $this->orderCreated = $value;
    }

    /**
     * Sets the orderReference property value. Optional external reference supplied with the order for correlation withexternal systems.
     * @param string|null $value Value to set for the orderReference property.
    */
    public function setOrderReference(?string $value): void {
        $this->orderReference = $value;
    }

    /**
     * Sets the organizationId property value. Organization that owns the subscription created by this order.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the paymentAgreementId property value. Identifier of the payment agreement used for the order, if any.
     * @param string|null $value Value to set for the paymentAgreementId property.
    */
    public function setPaymentAgreementId(?string $value): void {
        $this->paymentAgreementId = $value;
    }

    /**
     * Sets the paymentId property value. Identifier of the payment produced by the order processing flow.
     * @param string|null $value Value to set for the paymentId property.
    */
    public function setPaymentId(?string $value): void {
        $this->paymentId = $value;
    }

    /**
     * Sets the paymentMethod property value. The available payment methods.
     * @param PaymentMethods|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?PaymentMethods $value): void {
        $this->paymentMethod = $value;
    }

    /**
     * Sets the planSourceType property value. Identifies the source/type of the subscription plan associated with an order.Stored in the order event and read model to drive code-path branching at completion and cancellation.
     * @param OrderPlanSourceType|null $value Value to set for the planSourceType property.
    */
    public function setPlanSourceType(?OrderPlanSourceType $value): void {
        $this->planSourceType = $value;
    }

    /**
     * Sets the settleAccountBalance property value. When true indicates the order processing attempted to settle existingaccount balance as part of billing.
     * @param bool|null $value Value to set for the settleAccountBalance property.
    */
    public function setSettleAccountBalance(?bool $value): void {
        $this->settleAccountBalance = $value;
    }

    /**
     * Sets the status property value. An enum representing different order statuses.
     * @param OrderStatus|null $value Value to set for the status property.
    */
    public function setStatus(?OrderStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the subscriberAccount property value. Subscriber account identifier associated with the order.
     * @param string|null $value Value to set for the subscriberAccount property.
    */
    public function setSubscriberAccount(?string $value): void {
        $this->subscriberAccount = $value;
    }

    /**
     * Sets the subscriberId property value. Identifier of the subscriber the order is associated with, if any.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the subscriberNumber property value. Optional numeric subscriber number from the source system.
     * @param int|null $value Value to set for the subscriberNumber property.
    */
    public function setSubscriberNumber(?int $value): void {
        $this->subscriberNumber = $value;
    }

    /**
     * Sets the subscriptionId property value. Identifier of the subscription created as a result of this order, if any.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->subscriptionId = $value;
    }

    /**
     * Sets the subscriptionPlanId property value. Subscription plan identifier when the plan was resolved to an existingor persisted inline plan.
     * @param string|null $value Value to set for the subscriptionPlanId property.
    */
    public function setSubscriptionPlanId(?string $value): void {
        $this->subscriptionPlanId = $value;
    }

    /**
     * Sets the tag property value. The order tag.The entity that is used to store various types (TagType) of values in a reporting service.
     * @param OrderTag|null $value Value to set for the tag property.
    */
    public function setTag(?OrderTag $value): void {
        $this->tag = $value;
    }

    /**
     * Sets the templatePackageId property value. Template package id from ProductService used when the order was created(if a template was the source of the plan).
     * @param string|null $value Value to set for the templatePackageId property.
    */
    public function setTemplatePackageId(?string $value): void {
        $this->templatePackageId = $value;
    }

    /**
     * Sets the terminalRedirectUrl property value. If the payment flow requires a terminal redirect (for example to athird-party payment provider), this property contains the URL to redirectthe client to.
     * @param string|null $value Value to set for the terminalRedirectUrl property.
    */
    public function setTerminalRedirectUrl(?string $value): void {
        $this->terminalRedirectUrl = $value;
    }

    /**
     * Sets the transactionId property value. Identifier of the payment transaction created during order processing.
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->transactionId = $value;
    }

}
