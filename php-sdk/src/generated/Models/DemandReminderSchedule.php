<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Schedule information for when to generate a new reminder.
*/
class DemandReminderSchedule implements Parsable 
{
    /**
     * @var string|null $billingPlanId The billing plan that was used to define this schedule.
    */
    private ?string $billingPlanId = null;
    
    /**
     * @var DateTime|null $dueDate The caclculated due date of the reminder when it is generated.
    */
    private ?DateTime $dueDate = null;
    
    /**
     * @var string|null $enterprisePlanId The enterprise plan identifier the schedule is relevant for (if any).
    */
    private ?string $enterprisePlanId = null;
    
    /**
     * @var string|null $id The unique identifier for the demand reminder schedule.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $orderId The order this schedule is relevant for (if any).
    */
    private ?string $orderId = null;
    
    /**
     * @var string|null $organizationId The organizationId the reminder relates to.
    */
    private ?string $organizationId = null;
    
    /**
     * @var DateTime|null $originalScheduleTime Gets or sets the original schedule time.
    */
    private ?DateTime $originalScheduleTime = null;
    
    /**
     * @var string|null $paymentDemandId The Payment Demand to create a reminder for.
    */
    private ?string $paymentDemandId = null;
    
    /**
     * @var string|null $paymentProviderType The provider type.
    */
    private ?string $paymentProviderType = null;
    
    /**
     * @var int|null $reminderCounter Reminder counter.
    */
    private ?int $reminderCounter = null;
    
    /**
     * @var string|null $rescheduleReason Gets or sets the reason of reschedule.
    */
    private ?string $rescheduleReason = null;
    
    /**
     * @var string|null $subscriberId The subscriber the demand and reminder relates to.
    */
    private ?string $subscriberId = null;
    
    /**
     * @var string|null $subscriptionId The subscription the demand and reminder is associated with (if any).
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var DateTime|null $time The scheduled reminder execution/generation time.
    */
    private ?DateTime $time = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DemandReminderSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DemandReminderSchedule {
        return new DemandReminderSchedule();
    }

    /**
     * Gets the billingPlanId property value. The billing plan that was used to define this schedule.
     * @return string|null
    */
    public function getBillingPlanId(): ?string {
        return $this->billingPlanId;
    }

    /**
     * Gets the dueDate property value. The caclculated due date of the reminder when it is generated.
     * @return DateTime|null
    */
    public function getDueDate(): ?DateTime {
        return $this->dueDate;
    }

    /**
     * Gets the enterprisePlanId property value. The enterprise plan identifier the schedule is relevant for (if any).
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
            'dueDate' => fn(ParseNode $n) => $o->setDueDate($n->getDateTimeValue()),
            'enterprisePlanId' => fn(ParseNode $n) => $o->setEnterprisePlanId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'originalScheduleTime' => fn(ParseNode $n) => $o->setOriginalScheduleTime($n->getDateTimeValue()),
            'paymentDemandId' => fn(ParseNode $n) => $o->setPaymentDemandId($n->getStringValue()),
            'paymentProviderType' => fn(ParseNode $n) => $o->setPaymentProviderType($n->getStringValue()),
            'reminderCounter' => fn(ParseNode $n) => $o->setReminderCounter($n->getIntegerValue()),
            'rescheduleReason' => fn(ParseNode $n) => $o->setRescheduleReason($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'time' => fn(ParseNode $n) => $o->setTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the id property value. The unique identifier for the demand reminder schedule.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the orderId property value. The order this schedule is relevant for (if any).
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Gets the organizationId property value. The organizationId the reminder relates to.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the originalScheduleTime property value. Gets or sets the original schedule time.
     * @return DateTime|null
    */
    public function getOriginalScheduleTime(): ?DateTime {
        return $this->originalScheduleTime;
    }

    /**
     * Gets the paymentDemandId property value. The Payment Demand to create a reminder for.
     * @return string|null
    */
    public function getPaymentDemandId(): ?string {
        return $this->paymentDemandId;
    }

    /**
     * Gets the paymentProviderType property value. The provider type.
     * @return string|null
    */
    public function getPaymentProviderType(): ?string {
        return $this->paymentProviderType;
    }

    /**
     * Gets the reminderCounter property value. Reminder counter.
     * @return int|null
    */
    public function getReminderCounter(): ?int {
        return $this->reminderCounter;
    }

    /**
     * Gets the rescheduleReason property value. Gets or sets the reason of reschedule.
     * @return string|null
    */
    public function getRescheduleReason(): ?string {
        return $this->rescheduleReason;
    }

    /**
     * Gets the subscriberId property value. The subscriber the demand and reminder relates to.
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the subscriptionId property value. The subscription the demand and reminder is associated with (if any).
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Gets the time property value. The scheduled reminder execution/generation time.
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
        $writer->writeDateTimeValue('dueDate', $this->getDueDate());
        $writer->writeStringValue('enterprisePlanId', $this->getEnterprisePlanId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeDateTimeValue('originalScheduleTime', $this->getOriginalScheduleTime());
        $writer->writeStringValue('paymentDemandId', $this->getPaymentDemandId());
        $writer->writeStringValue('paymentProviderType', $this->getPaymentProviderType());
        $writer->writeIntegerValue('reminderCounter', $this->getReminderCounter());
        $writer->writeStringValue('rescheduleReason', $this->getRescheduleReason());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeDateTimeValue('time', $this->getTime());
    }

    /**
     * Sets the billingPlanId property value. The billing plan that was used to define this schedule.
     * @param string|null $value Value to set for the billingPlanId property.
    */
    public function setBillingPlanId(?string $value): void {
        $this->billingPlanId = $value;
    }

    /**
     * Sets the dueDate property value. The caclculated due date of the reminder when it is generated.
     * @param DateTime|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?DateTime $value): void {
        $this->dueDate = $value;
    }

    /**
     * Sets the enterprisePlanId property value. The enterprise plan identifier the schedule is relevant for (if any).
     * @param string|null $value Value to set for the enterprisePlanId property.
    */
    public function setEnterprisePlanId(?string $value): void {
        $this->enterprisePlanId = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the demand reminder schedule.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the orderId property value. The order this schedule is relevant for (if any).
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

    /**
     * Sets the organizationId property value. The organizationId the reminder relates to.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the originalScheduleTime property value. Gets or sets the original schedule time.
     * @param DateTime|null $value Value to set for the originalScheduleTime property.
    */
    public function setOriginalScheduleTime(?DateTime $value): void {
        $this->originalScheduleTime = $value;
    }

    /**
     * Sets the paymentDemandId property value. The Payment Demand to create a reminder for.
     * @param string|null $value Value to set for the paymentDemandId property.
    */
    public function setPaymentDemandId(?string $value): void {
        $this->paymentDemandId = $value;
    }

    /**
     * Sets the paymentProviderType property value. The provider type.
     * @param string|null $value Value to set for the paymentProviderType property.
    */
    public function setPaymentProviderType(?string $value): void {
        $this->paymentProviderType = $value;
    }

    /**
     * Sets the reminderCounter property value. Reminder counter.
     * @param int|null $value Value to set for the reminderCounter property.
    */
    public function setReminderCounter(?int $value): void {
        $this->reminderCounter = $value;
    }

    /**
     * Sets the rescheduleReason property value. Gets or sets the reason of reschedule.
     * @param string|null $value Value to set for the rescheduleReason property.
    */
    public function setRescheduleReason(?string $value): void {
        $this->rescheduleReason = $value;
    }

    /**
     * Sets the subscriberId property value. The subscriber the demand and reminder relates to.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the subscriptionId property value. The subscription the demand and reminder is associated with (if any).
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->subscriptionId = $value;
    }

    /**
     * Sets the time property value. The scheduled reminder execution/generation time.
     * @param DateTime|null $value Value to set for the time property.
    */
    public function setTime(?DateTime $value): void {
        $this->time = $value;
    }

}
