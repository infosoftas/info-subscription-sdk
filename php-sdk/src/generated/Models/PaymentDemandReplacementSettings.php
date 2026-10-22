<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Options that controls how an existing payment demand should be replaced when crediting the source demand.
*/
class PaymentDemandReplacementSettings implements Parsable 
{
    /**
     * @var bool|null $calculateDemandDueDate Determine if the system should calculate the Due Date based on existing rules for the demand type and payment agreement. If set the Infosoft.S4.Billing.Contracts.PaymentDemandReplacementSettings.NewDueDate parameter must not be set.
    */
    private ?bool $calculateDemandDueDate = null;
    
    /**
     * @var float|null $fee A fixed Fee for the newly generated demand. If NOT set, fee will be calculated from the demand (payment agreement and billing plan), if set to Zero no fee is added. Otherwise the fee will have the given value.
    */
    private ?float $fee = null;
    
    /**
     * @var DateTime|null $newDueDate The new due date, must be set if the Infosoft.S4.Billing.Contracts.PaymentDemandReplacementSettings.CalculateDemandDueDate parameter is false (or not set)
    */
    private ?DateTime $newDueDate = null;
    
    /**
     * @var string|null $paymentAgreementId The payment agreement to use for issuing a new Payment Demand, this will override whatever was on the original demand and on source subscription (if it is a recurring demand).
    */
    private ?string $paymentAgreementId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentDemandReplacementSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentDemandReplacementSettings {
        return new PaymentDemandReplacementSettings();
    }

    /**
     * Gets the calculateDemandDueDate property value. Determine if the system should calculate the Due Date based on existing rules for the demand type and payment agreement. If set the Infosoft.S4.Billing.Contracts.PaymentDemandReplacementSettings.NewDueDate parameter must not be set.
     * @return bool|null
    */
    public function getCalculateDemandDueDate(): ?bool {
        return $this->calculateDemandDueDate;
    }

    /**
     * Gets the fee property value. A fixed Fee for the newly generated demand. If NOT set, fee will be calculated from the demand (payment agreement and billing plan), if set to Zero no fee is added. Otherwise the fee will have the given value.
     * @return float|null
    */
    public function getFee(): ?float {
        return $this->fee;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calculateDemandDueDate' => fn(ParseNode $n) => $o->setCalculateDemandDueDate($n->getBooleanValue()),
            'fee' => fn(ParseNode $n) => $o->setFee($n->getFloatValue()),
            'newDueDate' => fn(ParseNode $n) => $o->setNewDueDate($n->getDateTimeValue()),
            'paymentAgreementId' => fn(ParseNode $n) => $o->setPaymentAgreementId($n->getStringValue()),
        ];
    }

    /**
     * Gets the newDueDate property value. The new due date, must be set if the Infosoft.S4.Billing.Contracts.PaymentDemandReplacementSettings.CalculateDemandDueDate parameter is false (or not set)
     * @return DateTime|null
    */
    public function getNewDueDate(): ?DateTime {
        return $this->newDueDate;
    }

    /**
     * Gets the paymentAgreementId property value. The payment agreement to use for issuing a new Payment Demand, this will override whatever was on the original demand and on source subscription (if it is a recurring demand).
     * @return string|null
    */
    public function getPaymentAgreementId(): ?string {
        return $this->paymentAgreementId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('calculateDemandDueDate', $this->getCalculateDemandDueDate());
        $writer->writeFloatValue('fee', $this->getFee());
        $writer->writeDateTimeValue('newDueDate', $this->getNewDueDate());
        $writer->writeStringValue('paymentAgreementId', $this->getPaymentAgreementId());
    }

    /**
     * Sets the calculateDemandDueDate property value. Determine if the system should calculate the Due Date based on existing rules for the demand type and payment agreement. If set the Infosoft.S4.Billing.Contracts.PaymentDemandReplacementSettings.NewDueDate parameter must not be set.
     * @param bool|null $value Value to set for the calculateDemandDueDate property.
    */
    public function setCalculateDemandDueDate(?bool $value): void {
        $this->calculateDemandDueDate = $value;
    }

    /**
     * Sets the fee property value. A fixed Fee for the newly generated demand. If NOT set, fee will be calculated from the demand (payment agreement and billing plan), if set to Zero no fee is added. Otherwise the fee will have the given value.
     * @param float|null $value Value to set for the fee property.
    */
    public function setFee(?float $value): void {
        $this->fee = $value;
    }

    /**
     * Sets the newDueDate property value. The new due date, must be set if the Infosoft.S4.Billing.Contracts.PaymentDemandReplacementSettings.CalculateDemandDueDate parameter is false (or not set)
     * @param DateTime|null $value Value to set for the newDueDate property.
    */
    public function setNewDueDate(?DateTime $value): void {
        $this->newDueDate = $value;
    }

    /**
     * Sets the paymentAgreementId property value. The payment agreement to use for issuing a new Payment Demand, this will override whatever was on the original demand and on source subscription (if it is a recurring demand).
     * @param string|null $value Value to set for the paymentAgreementId property.
    */
    public function setPaymentAgreementId(?string $value): void {
        $this->paymentAgreementId = $value;
    }

}
