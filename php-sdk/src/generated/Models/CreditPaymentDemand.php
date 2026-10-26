<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Provides information need to credit a payment demand and possibly generate a new demand to replace it.
*/
class CreditPaymentDemand implements Parsable 
{
    /**
     * @var CreditBillingSettings|null $billingOptions A collection of settings for controlling billing behaviour during crediting operations.
    */
    private ?CreditBillingSettings $billingOptions = null;
    
    /**
     * @var array<CreditPaymentDemandAllowance>|null $creditAllowances A collection of allowances to credit (i.e. remove) from the payment demand.
    */
    private ?array $creditAllowances = null;
    
    /**
     * @var array<CreditPaymentDemandCharge>|null $creditCharges A collection of charges to credit (i.e. remove) from the payment demand.
    */
    private ?array $creditCharges = null;
    
    /**
     * @var array<CreditPaymentDemandDetail>|null $creditDetails A collection of details to credit (i.e. remove) from the payment demand.If left empty the demand will be credited entirely. If specified assumes a replacement is to be generated and requires replacementoptions to be included.
    */
    private ?array $creditDetails = null;
    
    /**
     * @var string|null $creditReason The descriptive reasoning for the credit action.
    */
    private ?string $creditReason = null;
    
    /**
     * @var DateTime|null $creditTime The time of creditting time, if not specified will default to the time of command processing
    */
    private ?DateTime $creditTime = null;
    
    /**
     * @var PaymentDemandReplacementSettings|null $paymentDemandReplacementOption Options that controls how an existing payment demand should be replaced when crediting the source demand.
    */
    private ?PaymentDemandReplacementSettings $paymentDemandReplacementOption = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreditPaymentDemand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreditPaymentDemand {
        return new CreditPaymentDemand();
    }

    /**
     * Gets the billingOptions property value. A collection of settings for controlling billing behaviour during crediting operations.
     * @return CreditBillingSettings|null
    */
    public function getBillingOptions(): ?CreditBillingSettings {
        return $this->billingOptions;
    }

    /**
     * Gets the creditAllowances property value. A collection of allowances to credit (i.e. remove) from the payment demand.
     * @return array<CreditPaymentDemandAllowance>|null
    */
    public function getCreditAllowances(): ?array {
        return $this->creditAllowances;
    }

    /**
     * Gets the creditCharges property value. A collection of charges to credit (i.e. remove) from the payment demand.
     * @return array<CreditPaymentDemandCharge>|null
    */
    public function getCreditCharges(): ?array {
        return $this->creditCharges;
    }

    /**
     * Gets the creditDetails property value. A collection of details to credit (i.e. remove) from the payment demand.If left empty the demand will be credited entirely. If specified assumes a replacement is to be generated and requires replacementoptions to be included.
     * @return array<CreditPaymentDemandDetail>|null
    */
    public function getCreditDetails(): ?array {
        return $this->creditDetails;
    }

    /**
     * Gets the creditReason property value. The descriptive reasoning for the credit action.
     * @return string|null
    */
    public function getCreditReason(): ?string {
        return $this->creditReason;
    }

    /**
     * Gets the creditTime property value. The time of creditting time, if not specified will default to the time of command processing
     * @return DateTime|null
    */
    public function getCreditTime(): ?DateTime {
        return $this->creditTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingOptions' => fn(ParseNode $n) => $o->setBillingOptions($n->getObjectValue([CreditBillingSettings::class, 'createFromDiscriminatorValue'])),
            'creditAllowances' => fn(ParseNode $n) => $o->setCreditAllowances($n->getCollectionOfObjectValues([CreditPaymentDemandAllowance::class, 'createFromDiscriminatorValue'])),
            'creditCharges' => fn(ParseNode $n) => $o->setCreditCharges($n->getCollectionOfObjectValues([CreditPaymentDemandCharge::class, 'createFromDiscriminatorValue'])),
            'creditDetails' => fn(ParseNode $n) => $o->setCreditDetails($n->getCollectionOfObjectValues([CreditPaymentDemandDetail::class, 'createFromDiscriminatorValue'])),
            'creditReason' => fn(ParseNode $n) => $o->setCreditReason($n->getStringValue()),
            'creditTime' => fn(ParseNode $n) => $o->setCreditTime($n->getDateTimeValue()),
            'paymentDemandReplacementOption' => fn(ParseNode $n) => $o->setPaymentDemandReplacementOption($n->getObjectValue([PaymentDemandReplacementSettings::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the paymentDemandReplacementOption property value. Options that controls how an existing payment demand should be replaced when crediting the source demand.
     * @return PaymentDemandReplacementSettings|null
    */
    public function getPaymentDemandReplacementOption(): ?PaymentDemandReplacementSettings {
        return $this->paymentDemandReplacementOption;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('billingOptions', $this->getBillingOptions());
        $writer->writeCollectionOfObjectValues('creditAllowances', $this->getCreditAllowances());
        $writer->writeCollectionOfObjectValues('creditCharges', $this->getCreditCharges());
        $writer->writeCollectionOfObjectValues('creditDetails', $this->getCreditDetails());
        $writer->writeStringValue('creditReason', $this->getCreditReason());
        $writer->writeDateTimeValue('creditTime', $this->getCreditTime());
        $writer->writeObjectValue('paymentDemandReplacementOption', $this->getPaymentDemandReplacementOption());
    }

    /**
     * Sets the billingOptions property value. A collection of settings for controlling billing behaviour during crediting operations.
     * @param CreditBillingSettings|null $value Value to set for the billingOptions property.
    */
    public function setBillingOptions(?CreditBillingSettings $value): void {
        $this->billingOptions = $value;
    }

    /**
     * Sets the creditAllowances property value. A collection of allowances to credit (i.e. remove) from the payment demand.
     * @param array<CreditPaymentDemandAllowance>|null $value Value to set for the creditAllowances property.
    */
    public function setCreditAllowances(?array $value): void {
        $this->creditAllowances = $value;
    }

    /**
     * Sets the creditCharges property value. A collection of charges to credit (i.e. remove) from the payment demand.
     * @param array<CreditPaymentDemandCharge>|null $value Value to set for the creditCharges property.
    */
    public function setCreditCharges(?array $value): void {
        $this->creditCharges = $value;
    }

    /**
     * Sets the creditDetails property value. A collection of details to credit (i.e. remove) from the payment demand.If left empty the demand will be credited entirely. If specified assumes a replacement is to be generated and requires replacementoptions to be included.
     * @param array<CreditPaymentDemandDetail>|null $value Value to set for the creditDetails property.
    */
    public function setCreditDetails(?array $value): void {
        $this->creditDetails = $value;
    }

    /**
     * Sets the creditReason property value. The descriptive reasoning for the credit action.
     * @param string|null $value Value to set for the creditReason property.
    */
    public function setCreditReason(?string $value): void {
        $this->creditReason = $value;
    }

    /**
     * Sets the creditTime property value. The time of creditting time, if not specified will default to the time of command processing
     * @param DateTime|null $value Value to set for the creditTime property.
    */
    public function setCreditTime(?DateTime $value): void {
        $this->creditTime = $value;
    }

    /**
     * Sets the paymentDemandReplacementOption property value. Options that controls how an existing payment demand should be replaced when crediting the source demand.
     * @param PaymentDemandReplacementSettings|null $value Value to set for the paymentDemandReplacementOption property.
    */
    public function setPaymentDemandReplacementOption(?PaymentDemandReplacementSettings $value): void {
        $this->paymentDemandReplacementOption = $value;
    }

}
