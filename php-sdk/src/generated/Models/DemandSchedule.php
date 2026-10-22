<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A demand schedule.
*/
class DemandSchedule implements Parsable 
{
    /**
     * @var string|null $billingPlanId Gets or sets the billing plan identifier
    */
    private ?string $billingPlanId = null;
    
    /**
     * @var string|null $enterprisePlanId Gets or sets the enterprise plan identifier
    */
    private ?string $enterprisePlanId = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $orderId Gets or sets the order identifier
    */
    private ?string $orderId = null;
    
    /**
     * @var string|null $organizationId Gets or sets OrganizationId identifier.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $paymentMethod Gets or sets the payment method
    */
    private ?string $paymentMethod = null;
    
    /**
     * @var string|null $paymentMethodType Gets or sets the payment method type
    */
    private ?string $paymentMethodType = null;
    
    /**
     * @var string|null $preliminaryDemandId Gets or sets the identifier of the preliminary demand.
    */
    private ?string $preliminaryDemandId = null;
    
    /**
     * @var string|null $subscriberId Gets or sets the subscriber identifier
    */
    private ?string $subscriberId = null;
    
    /**
     * @var string|null $subscriptionId Gets or sets the subscription identifier
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var DateTime|null $time Gets or sets the demand generation time
    */
    private ?DateTime $time = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DemandSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DemandSchedule {
        return new DemandSchedule();
    }

    /**
     * Gets the billingPlanId property value. Gets or sets the billing plan identifier
     * @return string|null
    */
    public function getBillingPlanId(): ?string {
        return $this->billingPlanId;
    }

    /**
     * Gets the enterprisePlanId property value. Gets or sets the enterprise plan identifier
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
            'billingPlanId' => fn(ParseNode $n) => $o->setBillingPlanId($n->getStringValue()),
            'enterprisePlanId' => fn(ParseNode $n) => $o->setEnterprisePlanId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'paymentMethod' => fn(ParseNode $n) => $o->setPaymentMethod($n->getStringValue()),
            'paymentMethodType' => fn(ParseNode $n) => $o->setPaymentMethodType($n->getStringValue()),
            'preliminaryDemandId' => fn(ParseNode $n) => $o->setPreliminaryDemandId($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'time' => fn(ParseNode $n) => $o->setTime($n->getDateTimeValue()),
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
     * Gets the orderId property value. Gets or sets the order identifier
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Gets the organizationId property value. Gets or sets OrganizationId identifier.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the paymentMethod property value. Gets or sets the payment method
     * @return string|null
    */
    public function getPaymentMethod(): ?string {
        return $this->paymentMethod;
    }

    /**
     * Gets the paymentMethodType property value. Gets or sets the payment method type
     * @return string|null
    */
    public function getPaymentMethodType(): ?string {
        return $this->paymentMethodType;
    }

    /**
     * Gets the preliminaryDemandId property value. Gets or sets the identifier of the preliminary demand.
     * @return string|null
    */
    public function getPreliminaryDemandId(): ?string {
        return $this->preliminaryDemandId;
    }

    /**
     * Gets the subscriberId property value. Gets or sets the subscriber identifier
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the subscriptionId property value. Gets or sets the subscription identifier
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Gets the time property value. Gets or sets the demand generation time
     * @return DateTime|null
    */
    public function getTime(): ?DateTime {
        return $this->time;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('billingPlanId', $this->getBillingPlanId());
        $writer->writeStringValue('enterprisePlanId', $this->getEnterprisePlanId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('paymentMethod', $this->getPaymentMethod());
        $writer->writeStringValue('paymentMethodType', $this->getPaymentMethodType());
        $writer->writeStringValue('preliminaryDemandId', $this->getPreliminaryDemandId());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeDateTimeValue('time', $this->getTime());
    }

    /**
     * Sets the billingPlanId property value. Gets or sets the billing plan identifier
     * @param string|null $value Value to set for the billingPlanId property.
    */
    public function setBillingPlanId(?string $value): void {
        $this->billingPlanId = $value;
    }

    /**
     * Sets the enterprisePlanId property value. Gets or sets the enterprise plan identifier
     * @param string|null $value Value to set for the enterprisePlanId property.
    */
    public function setEnterprisePlanId(?string $value): void {
        $this->enterprisePlanId = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the orderId property value. Gets or sets the order identifier
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

    /**
     * Sets the organizationId property value. Gets or sets OrganizationId identifier.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the paymentMethod property value. Gets or sets the payment method
     * @param string|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?string $value): void {
        $this->paymentMethod = $value;
    }

    /**
     * Sets the paymentMethodType property value. Gets or sets the payment method type
     * @param string|null $value Value to set for the paymentMethodType property.
    */
    public function setPaymentMethodType(?string $value): void {
        $this->paymentMethodType = $value;
    }

    /**
     * Sets the preliminaryDemandId property value. Gets or sets the identifier of the preliminary demand.
     * @param string|null $value Value to set for the preliminaryDemandId property.
    */
    public function setPreliminaryDemandId(?string $value): void {
        $this->preliminaryDemandId = $value;
    }

    /**
     * Sets the subscriberId property value. Gets or sets the subscriber identifier
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the subscriptionId property value. Gets or sets the subscription identifier
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->subscriptionId = $value;
    }

    /**
     * Sets the time property value. Gets or sets the demand generation time
     * @param DateTime|null $value Value to set for the time property.
    */
    public function setTime(?DateTime $value): void {
        $this->time = $value;
    }

}
