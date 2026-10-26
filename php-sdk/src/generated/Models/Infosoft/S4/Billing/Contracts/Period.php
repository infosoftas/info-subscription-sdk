<?php

namespace Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Billing\Contracts;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Defines a time period, where both Start and End are inclusive. If only start is given, the period represents and instant in time (useful for instance defining single transactions with no time component).
*/
class Period implements Parsable 
{
    /**
     * @var DateTime|null $end The end property
    */
    private ?DateTime $end = null;
    
    /**
     * @var bool|null $isInstant Gets a value indicating whether this is an instant.
    */
    private ?bool $isInstant = null;
    
    /**
     * @var DateTime|null $start The start property
    */
    private ?DateTime $start = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Period
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Period {
        return new Period();
    }

    /**
     * Gets the end property value. The end property
     * @return DateTime|null
    */
    public function getEnd(): ?DateTime {
        return $this->end;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'end' => fn(ParseNode $n) => $o->setEnd($n->getDateTimeValue()),
            'isInstant' => fn(ParseNode $n) => $o->setIsInstant($n->getBooleanValue()),
            'start' => fn(ParseNode $n) => $o->setStart($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the isInstant property value. Gets a value indicating whether this is an instant.
     * @return bool|null
    */
    public function getIsInstant(): ?bool {
        return $this->isInstant;
    }

    /**
     * Gets the start property value. The start property
     * @return DateTime|null
    */
    public function getStart(): ?DateTime {
        return $this->start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('end', $this->getEnd());
        $writer->writeDateTimeValue('start', $this->getStart());
    }

    /**
     * Sets the end property value. The end property
     * @param DateTime|null $value Value to set for the end property.
    */
    public function setEnd(?DateTime $value): void {
        $this->end = $value;
    }

    /**
     * Sets the isInstant property value. Gets a value indicating whether this is an instant.
     * @param bool|null $value Value to set for the isInstant property.
    */
    public function setIsInstant(?bool $value): void {
        $this->isInstant = $value;
    }

    /**
     * Sets the start property value. The start property
     * @param DateTime|null $value Value to set for the start property.
    */
    public function setStart(?DateTime $value): void {
        $this->start = $value;
    }

}
