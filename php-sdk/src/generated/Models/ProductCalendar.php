<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A product calendar view.
*/
class ProductCalendar implements Parsable 
{
    /**
     * @var string|null $calendarId Gets or sets the identifier of the calendar.
    */
    private ?string $calendarId = null;
    
    /**
     * @var DateTime|null $startsOnDate Gets or sets the starts on date.
    */
    private ?DateTime $startsOnDate = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductCalendar
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductCalendar {
        return new ProductCalendar();
    }

    /**
     * Gets the calendarId property value. Gets or sets the identifier of the calendar.
     * @return string|null
    */
    public function getCalendarId(): ?string {
        return $this->calendarId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calendarId' => fn(ParseNode $n) => $o->setCalendarId($n->getStringValue()),
            'startsOnDate' => fn(ParseNode $n) => $o->setStartsOnDate($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the startsOnDate property value. Gets or sets the starts on date.
     * @return DateTime|null
    */
    public function getStartsOnDate(): ?DateTime {
        return $this->startsOnDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('calendarId', $this->getCalendarId());
        $writer->writeDateTimeValue('startsOnDate', $this->getStartsOnDate());
    }

    /**
     * Sets the calendarId property value. Gets or sets the identifier of the calendar.
     * @param string|null $value Value to set for the calendarId property.
    */
    public function setCalendarId(?string $value): void {
        $this->calendarId = $value;
    }

    /**
     * Sets the startsOnDate property value. Gets or sets the starts on date.
     * @param DateTime|null $value Value to set for the startsOnDate property.
    */
    public function setStartsOnDate(?DateTime $value): void {
        $this->startsOnDate = $value;
    }

}
