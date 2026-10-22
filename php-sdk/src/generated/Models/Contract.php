<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A contract.
*/
class Contract implements Parsable 
{
    /**
     * @var DateTime|null $contractDate Gets or sets the contract date.
    */
    private ?DateTime $contractDate = null;
    
    /**
     * @var string|null $id Gets or sets the identifier of the contract.
    */
    private ?string $id = null;
    
    /**
     * @var float|null $surchargeAmount Gets or sets the surcharge amount.
    */
    private ?float $surchargeAmount = null;
    
    /**
     * @var float|null $surchargeTaxPercent Gets or sets the contract surcharge tax percent.
    */
    private ?float $surchargeTaxPercent = null;
    
    /**
     * @var ContractSurchargeType|null $surchargeType Values that represent surcharge types.
    */
    private ?ContractSurchargeType $surchargeType = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Contract
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Contract {
        return new Contract();
    }

    /**
     * Gets the contractDate property value. Gets or sets the contract date.
     * @return DateTime|null
    */
    public function getContractDate(): ?DateTime {
        return $this->contractDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contractDate' => fn(ParseNode $n) => $o->setContractDate($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'surchargeAmount' => fn(ParseNode $n) => $o->setSurchargeAmount($n->getFloatValue()),
            'surchargeTaxPercent' => fn(ParseNode $n) => $o->setSurchargeTaxPercent($n->getFloatValue()),
            'surchargeType' => fn(ParseNode $n) => $o->setSurchargeType($n->getEnumValue(ContractSurchargeType::class)),
        ];
    }

    /**
     * Gets the id property value. Gets or sets the identifier of the contract.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the surchargeAmount property value. Gets or sets the surcharge amount.
     * @return float|null
    */
    public function getSurchargeAmount(): ?float {
        return $this->surchargeAmount;
    }

    /**
     * Gets the surchargeTaxPercent property value. Gets or sets the contract surcharge tax percent.
     * @return float|null
    */
    public function getSurchargeTaxPercent(): ?float {
        return $this->surchargeTaxPercent;
    }

    /**
     * Gets the surchargeType property value. Values that represent surcharge types.
     * @return ContractSurchargeType|null
    */
    public function getSurchargeType(): ?ContractSurchargeType {
        return $this->surchargeType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('contractDate', $this->getContractDate());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeFloatValue('surchargeAmount', $this->getSurchargeAmount());
        $writer->writeFloatValue('surchargeTaxPercent', $this->getSurchargeTaxPercent());
        $writer->writeEnumValue('surchargeType', $this->getSurchargeType());
    }

    /**
     * Sets the contractDate property value. Gets or sets the contract date.
     * @param DateTime|null $value Value to set for the contractDate property.
    */
    public function setContractDate(?DateTime $value): void {
        $this->contractDate = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier of the contract.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the surchargeAmount property value. Gets or sets the surcharge amount.
     * @param float|null $value Value to set for the surchargeAmount property.
    */
    public function setSurchargeAmount(?float $value): void {
        $this->surchargeAmount = $value;
    }

    /**
     * Sets the surchargeTaxPercent property value. Gets or sets the contract surcharge tax percent.
     * @param float|null $value Value to set for the surchargeTaxPercent property.
    */
    public function setSurchargeTaxPercent(?float $value): void {
        $this->surchargeTaxPercent = $value;
    }

    /**
     * Sets the surchargeType property value. Values that represent surcharge types.
     * @param ContractSurchargeType|null $value Value to set for the surchargeType property.
    */
    public function setSurchargeType(?ContractSurchargeType $value): void {
        $this->surchargeType = $value;
    }

}
