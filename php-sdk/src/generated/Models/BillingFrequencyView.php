<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A billing frequency.
*/
class BillingFrequencyView implements Parsable 
{
    /**
     * @var int|null $id Gets or sets the identifier.
    */
    private ?int $id = null;
    
    /**
     * @var string|null $name Gets or sets the name.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $number Gets or sets the number of units.
    */
    private ?string $number = null;
    
    /**
     * @var BillingFrequencyUnits|null $unit Values that represent billing frequency units.
    */
    private ?BillingFrequencyUnits $unit = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BillingFrequencyView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BillingFrequencyView {
        return new BillingFrequencyView();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getEnumValue(BillingFrequencyUnits::class)),
        ];
    }

    /**
     * Gets the id property value. Gets or sets the identifier.
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the name property value. Gets or sets the name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the number property value. Gets or sets the number of units.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the unit property value. Values that represent billing frequency units.
     * @return BillingFrequencyUnits|null
    */
    public function getUnit(): ?BillingFrequencyUnits {
        return $this->unit;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeEnumValue('unit', $this->getUnit());
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param int|null $value Value to set for the id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. Gets or sets the name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the number property value. Gets or sets the number of units.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the unit property value. Values that represent billing frequency units.
     * @param BillingFrequencyUnits|null $value Value to set for the unit property.
    */
    public function setUnit(?BillingFrequencyUnits $value): void {
        $this->unit = $value;
    }

}
