<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Api\DataContracts\V1\Contract;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A subscription create.
*/
class SubscriptionCreate implements Parsable 
{
    /**
     * @var BillingOptions|null $billingOptions Options for controlling the billing flow.
    */
    private ?BillingOptions $billingOptions = null;
    
    /**
     * @var Contract|null $contract A contract.
    */
    private ?Contract $contract = null;
    
    /**
     * @var string|null $enterprisePlanId The identifier of the enterprise plan if the subscription should be associated with one.
    */
    private ?string $enterprisePlanId = null;
    
    /**
     * @var string|null $invoiceContactId The identifier of the invoice contact, if not set will default to the buyer/subscriber.
    */
    private ?string $invoiceContactId = null;
    
    /**
     * @var string|null $orderReference An optional order reference.
    */
    private ?string $orderReference = null;
    
    /**
     * @var string|null $organizationId Gets or sets the identifier of the organization that the subscription should be created for.If not set the first available organization will be choosen.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $paymentAgreementId The identifier of the payment agreement to use when billing the subscription.
    */
    private ?string $paymentAgreementId = null;
    
    /**
     * @var string|null $permanentDiscountId Gets or sets the identifier of the permanent discount.
    */
    private ?string $permanentDiscountId = null;
    
    /**
     * @var PlanSelection|null $planSelection Defines how a subscription plan is sourced. Exactly one of the three properties must be provided.
    */
    private ?PlanSelection $planSelection = null;
    
    /**
     * @var DateTime|null $startTime The start time of the subscription, defaults to Now if not set.
    */
    private ?DateTime $startTime = null;
    
    /**
     * @var string|null $subscriberAccount Gets or sets the subscriber account.
    */
    private ?string $subscriberAccount = null;
    
    /**
     * @var string|null $subscriberId Identifier of the subscriber that owns/consumes this subscription.
    */
    private ?string $subscriberId = null;
    
    /**
     * @var int|null $units Gets or sets the units.
    */
    private ?int $units = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionCreate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionCreate {
        return new SubscriptionCreate();
    }

    /**
     * Gets the billingOptions property value. Options for controlling the billing flow.
     * @return BillingOptions|null
    */
    public function getBillingOptions(): ?BillingOptions {
        return $this->billingOptions;
    }

    /**
     * Gets the contract property value. A contract.
     * @return Contract|null
    */
    public function getContract(): ?Contract {
        return $this->contract;
    }

    /**
     * Gets the enterprisePlanId property value. The identifier of the enterprise plan if the subscription should be associated with one.
     * @return string|null
    */
    public function getEnterprisePlanId(): ?string {
        return $this->enterprisePlanId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingOptions' => fn(ParseNode $n) => $o->setBillingOptions($n->getObjectValue([BillingOptions::class, 'createFromDiscriminatorValue'])),
            'contract' => fn(ParseNode $n) => $o->setContract($n->getObjectValue([Contract::class, 'createFromDiscriminatorValue'])),
            'enterprisePlanId' => fn(ParseNode $n) => $o->setEnterprisePlanId($n->getStringValue()),
            'invoiceContactId' => fn(ParseNode $n) => $o->setInvoiceContactId($n->getStringValue()),
            'orderReference' => fn(ParseNode $n) => $o->setOrderReference($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'paymentAgreementId' => fn(ParseNode $n) => $o->setPaymentAgreementId($n->getStringValue()),
            'permanentDiscountId' => fn(ParseNode $n) => $o->setPermanentDiscountId($n->getStringValue()),
            'planSelection' => fn(ParseNode $n) => $o->setPlanSelection($n->getObjectValue([PlanSelection::class, 'createFromDiscriminatorValue'])),
            'startTime' => fn(ParseNode $n) => $o->setStartTime($n->getDateTimeValue()),
            'subscriberAccount' => fn(ParseNode $n) => $o->setSubscriberAccount($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'units' => fn(ParseNode $n) => $o->setUnits($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the invoiceContactId property value. The identifier of the invoice contact, if not set will default to the buyer/subscriber.
     * @return string|null
    */
    public function getInvoiceContactId(): ?string {
        return $this->invoiceContactId;
    }

    /**
     * Gets the orderReference property value. An optional order reference.
     * @return string|null
    */
    public function getOrderReference(): ?string {
        return $this->orderReference;
    }

    /**
     * Gets the organizationId property value. Gets or sets the identifier of the organization that the subscription should be created for.If not set the first available organization will be choosen.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the paymentAgreementId property value. The identifier of the payment agreement to use when billing the subscription.
     * @return string|null
    */
    public function getPaymentAgreementId(): ?string {
        return $this->paymentAgreementId;
    }

    /**
     * Gets the permanentDiscountId property value. Gets or sets the identifier of the permanent discount.
     * @return string|null
    */
    public function getPermanentDiscountId(): ?string {
        return $this->permanentDiscountId;
    }

    /**
     * Gets the planSelection property value. Defines how a subscription plan is sourced. Exactly one of the three properties must be provided.
     * @return PlanSelection|null
    */
    public function getPlanSelection(): ?PlanSelection {
        return $this->planSelection;
    }

    /**
     * Gets the startTime property value. The start time of the subscription, defaults to Now if not set.
     * @return DateTime|null
    */
    public function getStartTime(): ?DateTime {
        return $this->startTime;
    }

    /**
     * Gets the subscriberAccount property value. Gets or sets the subscriber account.
     * @return string|null
    */
    public function getSubscriberAccount(): ?string {
        return $this->subscriberAccount;
    }

    /**
     * Gets the subscriberId property value. Identifier of the subscriber that owns/consumes this subscription.
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the units property value. Gets or sets the units.
     * @return int|null
    */
    public function getUnits(): ?int {
        return $this->units;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('billingOptions', $this->getBillingOptions());
        $writer->writeObjectValue('contract', $this->getContract());
        $writer->writeStringValue('enterprisePlanId', $this->getEnterprisePlanId());
        $writer->writeStringValue('invoiceContactId', $this->getInvoiceContactId());
        $writer->writeStringValue('orderReference', $this->getOrderReference());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('paymentAgreementId', $this->getPaymentAgreementId());
        $writer->writeStringValue('permanentDiscountId', $this->getPermanentDiscountId());
        $writer->writeObjectValue('planSelection', $this->getPlanSelection());
        $writer->writeDateTimeValue('startTime', $this->getStartTime());
        $writer->writeStringValue('subscriberAccount', $this->getSubscriberAccount());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeIntegerValue('units', $this->getUnits());
    }

    /**
     * Sets the billingOptions property value. Options for controlling the billing flow.
     * @param BillingOptions|null $value Value to set for the billingOptions property.
    */
    public function setBillingOptions(?BillingOptions $value): void {
        $this->billingOptions = $value;
    }

    /**
     * Sets the contract property value. A contract.
     * @param Contract|null $value Value to set for the contract property.
    */
    public function setContract(?Contract $value): void {
        $this->contract = $value;
    }

    /**
     * Sets the enterprisePlanId property value. The identifier of the enterprise plan if the subscription should be associated with one.
     * @param string|null $value Value to set for the enterprisePlanId property.
    */
    public function setEnterprisePlanId(?string $value): void {
        $this->enterprisePlanId = $value;
    }

    /**
     * Sets the invoiceContactId property value. The identifier of the invoice contact, if not set will default to the buyer/subscriber.
     * @param string|null $value Value to set for the invoiceContactId property.
    */
    public function setInvoiceContactId(?string $value): void {
        $this->invoiceContactId = $value;
    }

    /**
     * Sets the orderReference property value. An optional order reference.
     * @param string|null $value Value to set for the orderReference property.
    */
    public function setOrderReference(?string $value): void {
        $this->orderReference = $value;
    }

    /**
     * Sets the organizationId property value. Gets or sets the identifier of the organization that the subscription should be created for.If not set the first available organization will be choosen.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the paymentAgreementId property value. The identifier of the payment agreement to use when billing the subscription.
     * @param string|null $value Value to set for the paymentAgreementId property.
    */
    public function setPaymentAgreementId(?string $value): void {
        $this->paymentAgreementId = $value;
    }

    /**
     * Sets the permanentDiscountId property value. Gets or sets the identifier of the permanent discount.
     * @param string|null $value Value to set for the permanentDiscountId property.
    */
    public function setPermanentDiscountId(?string $value): void {
        $this->permanentDiscountId = $value;
    }

    /**
     * Sets the planSelection property value. Defines how a subscription plan is sourced. Exactly one of the three properties must be provided.
     * @param PlanSelection|null $value Value to set for the planSelection property.
    */
    public function setPlanSelection(?PlanSelection $value): void {
        $this->planSelection = $value;
    }

    /**
     * Sets the startTime property value. The start time of the subscription, defaults to Now if not set.
     * @param DateTime|null $value Value to set for the startTime property.
    */
    public function setStartTime(?DateTime $value): void {
        $this->startTime = $value;
    }

    /**
     * Sets the subscriberAccount property value. Gets or sets the subscriber account.
     * @param string|null $value Value to set for the subscriberAccount property.
    */
    public function setSubscriberAccount(?string $value): void {
        $this->subscriberAccount = $value;
    }

    /**
     * Sets the subscriberId property value. Identifier of the subscriber that owns/consumes this subscription.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the units property value. Gets or sets the units.
     * @param int|null $value Value to set for the units property.
    */
    public function setUnits(?int $value): void {
        $this->units = $value;
    }

}
