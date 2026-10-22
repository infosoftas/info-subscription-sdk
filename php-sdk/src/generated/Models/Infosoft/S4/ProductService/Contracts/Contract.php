<?php

namespace Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\ProductService\Contracts;

use Infosoft\InfoSubscription\Generated\Models\ContractType;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Values that represent contract.
*/
class Contract implements Parsable 
{
    /**
     * @var string|null $id Gets or sets the contract identifier.
    */
    private ?string $id = null;
    
    /**
     * @var float|null $surchargeAmount Gets or sets the contract surcharge amount.
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
     * @var ContractType|null $type Values that represent contract types.
    */
    private ?ContractType $type = null;
    
    /**
     * @var string|null $typeValue Gets or sets the type value.
    */
    private ?string $typeValue = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Contract
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Contract {
        return new Contract();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'surchargeAmount' => fn(ParseNode $n) => $o->setSurchargeAmount($n->getFloatValue()),
            'surchargeTaxPercent' => fn(ParseNode $n) => $o->setSurchargeTaxPercent($n->getFloatValue()),
            'surchargeType' => fn(ParseNode $n) => $o->setSurchargeType($n->getEnumValue(ContractSurchargeType::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(ContractType::class)),
            'typeValue' => fn(ParseNode $n) => $o->setTypeValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Gets or sets the contract identifier.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the surchargeAmount property value. Gets or sets the contract surcharge amount.
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
     * Gets the type property value. Values that represent contract types.
     * @return ContractType|null
    */
    public function getType(): ?ContractType {
        return $this->type;
    }

    /**
     * Gets the typeValue property value. Gets or sets the type value.
     * @return string|null
    */
    public function getTypeValue(): ?string {
        return $this->typeValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeFloatValue('surchargeAmount', $this->getSurchargeAmount());
        $writer->writeFloatValue('surchargeTaxPercent', $this->getSurchargeTaxPercent());
        $writer->writeEnumValue('surchargeType', $this->getSurchargeType());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeStringValue('typeValue', $this->getTypeValue());
    }

    /**
     * Sets the id property value. Gets or sets the contract identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the surchargeAmount property value. Gets or sets the contract surcharge amount.
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

    /**
     * Sets the type property value. Values that represent contract types.
     * @param ContractType|null $value Value to set for the type property.
    */
    public function setType(?ContractType $value): void {
        $this->type = $value;
    }

    /**
     * Sets the typeValue property value. Gets or sets the type value.
     * @param string|null $value Value to set for the typeValue property.
    */
    public function setTypeValue(?string $value): void {
        $this->typeValue = $value;
    }

}
