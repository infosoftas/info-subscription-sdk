<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents an extra/additional charge added to a demand.
*/
class DemandCharge implements Parsable 
{
    /**
     * @var float|null $amount The amount charged on the demand.
    */
    private ?float $amount = null;
    
    /**
     * @var ChargeType|null $chargeType Values that represent charge types.
    */
    private ?ChargeType $chargeType = null;
    
    /**
     * @var DateTime|null $endTime An optional end time this covers.
    */
    private ?DateTime $endTime = null;
    
    /**
     * @var string|null $id The identifier of the charge.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $includedInLedger A value indicating whether the charge was previously included in ledger somehow.
    */
    private ?bool $includedInLedger = null;
    
    /**
     * @var DateTime|null $originalAccountingTime The original accounting time of the charge, if available.
    */
    private ?DateTime $originalAccountingTime = null;
    
    /**
     * @var string|null $sourcePaymentDemandId The identifier of the source payment demand where this transaction stems from.
    */
    private ?string $sourcePaymentDemandId = null;
    
    /**
     * @var DateTime|null $startTime An optional start time.
    */
    private ?DateTime $startTime = null;
    
    /**
     * @var array<ProductTaxDetailView>|null $taxDetails The tax details for the charge.
    */
    private ?array $taxDetails = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DemandCharge
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DemandCharge {
        return new DemandCharge();
    }

    /**
     * Gets the amount property value. The amount charged on the demand.
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the chargeType property value. Values that represent charge types.
     * @return ChargeType|null
    */
    public function getChargeType(): ?ChargeType {
        return $this->chargeType;
    }

    /**
     * Gets the endTime property value. An optional end time this covers.
     * @return DateTime|null
    */
    public function getEndTime(): ?DateTime {
        return $this->endTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'chargeType' => fn(ParseNode $n) => $o->setChargeType($n->getEnumValue(ChargeType::class)),
            'endTime' => fn(ParseNode $n) => $o->setEndTime($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'includedInLedger' => fn(ParseNode $n) => $o->setIncludedInLedger($n->getBooleanValue()),
            'originalAccountingTime' => fn(ParseNode $n) => $o->setOriginalAccountingTime($n->getDateTimeValue()),
            'sourcePaymentDemandId' => fn(ParseNode $n) => $o->setSourcePaymentDemandId($n->getStringValue()),
            'startTime' => fn(ParseNode $n) => $o->setStartTime($n->getDateTimeValue()),
            'taxDetails' => fn(ParseNode $n) => $o->setTaxDetails($n->getCollectionOfObjectValues([ProductTaxDetailView::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. The identifier of the charge.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the includedInLedger property value. A value indicating whether the charge was previously included in ledger somehow.
     * @return bool|null
    */
    public function getIncludedInLedger(): ?bool {
        return $this->includedInLedger;
    }

    /**
     * Gets the originalAccountingTime property value. The original accounting time of the charge, if available.
     * @return DateTime|null
    */
    public function getOriginalAccountingTime(): ?DateTime {
        return $this->originalAccountingTime;
    }

    /**
     * Gets the sourcePaymentDemandId property value. The identifier of the source payment demand where this transaction stems from.
     * @return string|null
    */
    public function getSourcePaymentDemandId(): ?string {
        return $this->sourcePaymentDemandId;
    }

    /**
     * Gets the startTime property value. An optional start time.
     * @return DateTime|null
    */
    public function getStartTime(): ?DateTime {
        return $this->startTime;
    }

    /**
     * Gets the taxDetails property value. The tax details for the charge.
     * @return array<ProductTaxDetailView>|null
    */
    public function getTaxDetails(): ?array {
        return $this->taxDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeEnumValue('chargeType', $this->getChargeType());
        $writer->writeDateTimeValue('endTime', $this->getEndTime());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('includedInLedger', $this->getIncludedInLedger());
        $writer->writeDateTimeValue('originalAccountingTime', $this->getOriginalAccountingTime());
        $writer->writeStringValue('sourcePaymentDemandId', $this->getSourcePaymentDemandId());
        $writer->writeDateTimeValue('startTime', $this->getStartTime());
        $writer->writeCollectionOfObjectValues('taxDetails', $this->getTaxDetails());
    }

    /**
     * Sets the amount property value. The amount charged on the demand.
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the chargeType property value. Values that represent charge types.
     * @param ChargeType|null $value Value to set for the chargeType property.
    */
    public function setChargeType(?ChargeType $value): void {
        $this->chargeType = $value;
    }

    /**
     * Sets the endTime property value. An optional end time this covers.
     * @param DateTime|null $value Value to set for the endTime property.
    */
    public function setEndTime(?DateTime $value): void {
        $this->endTime = $value;
    }

    /**
     * Sets the id property value. The identifier of the charge.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the includedInLedger property value. A value indicating whether the charge was previously included in ledger somehow.
     * @param bool|null $value Value to set for the includedInLedger property.
    */
    public function setIncludedInLedger(?bool $value): void {
        $this->includedInLedger = $value;
    }

    /**
     * Sets the originalAccountingTime property value. The original accounting time of the charge, if available.
     * @param DateTime|null $value Value to set for the originalAccountingTime property.
    */
    public function setOriginalAccountingTime(?DateTime $value): void {
        $this->originalAccountingTime = $value;
    }

    /**
     * Sets the sourcePaymentDemandId property value. The identifier of the source payment demand where this transaction stems from.
     * @param string|null $value Value to set for the sourcePaymentDemandId property.
    */
    public function setSourcePaymentDemandId(?string $value): void {
        $this->sourcePaymentDemandId = $value;
    }

    /**
     * Sets the startTime property value. An optional start time.
     * @param DateTime|null $value Value to set for the startTime property.
    */
    public function setStartTime(?DateTime $value): void {
        $this->startTime = $value;
    }

    /**
     * Sets the taxDetails property value. The tax details for the charge.
     * @param array<ProductTaxDetailView>|null $value Value to set for the taxDetails property.
    */
    public function setTaxDetails(?array $value): void {
        $this->taxDetails = $value;
    }

}
