<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A period that associated the line with a time frame for a provided service/product.
*/
class Period implements Parsable 
{
    /**
     * @var DateTime|null $end The end time of the period.
    */
    private ?DateTime $end = null;
    
    /**
     * @var DateTime|null $start The start time of the period.
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
     * Gets the end property value. The end time of the period.
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
            'start' => fn(ParseNode $n) => $o->setStart($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the start property value. The start time of the period.
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
     * Sets the end property value. The end time of the period.
     * @param DateTime|null $value Value to set for the end property.
    */
    public function setEnd(?DateTime $value): void {
        $this->end = $value;
    }

    /**
     * Sets the start property value. The start time of the period.
     * @param DateTime|null $value Value to set for the start property.
    */
    public function setStart(?DateTime $value): void {
        $this->start = $value;
    }

}
