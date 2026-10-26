<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A simplified time zone information view.
*/
class SimplifiedTimeZoneInfoView implements Parsable 
{
    /**
     * @var string|null $baseUtcOffset Gets or sets the base UTC offset.
    */
    private ?string $baseUtcOffset = null;
    
    /**
     * @var string|null $timeZoneId Gets or sets the name.
    */
    private ?string $timeZoneId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SimplifiedTimeZoneInfoView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SimplifiedTimeZoneInfoView {
        return new SimplifiedTimeZoneInfoView();
    }

    /**
     * Gets the baseUtcOffset property value. Gets or sets the base UTC offset.
     * @return string|null
    */
    public function getBaseUtcOffset(): ?string {
        return $this->baseUtcOffset;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'baseUtcOffset' => fn(ParseNode $n) => $o->setBaseUtcOffset($n->getStringValue()),
            'timeZoneId' => fn(ParseNode $n) => $o->setTimeZoneId($n->getStringValue()),
        ];
    }

    /**
     * Gets the timeZoneId property value. Gets or sets the name.
     * @return string|null
    */
    public function getTimeZoneId(): ?string {
        return $this->timeZoneId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('baseUtcOffset', $this->getBaseUtcOffset());
        $writer->writeStringValue('timeZoneId', $this->getTimeZoneId());
    }

    /**
     * Sets the baseUtcOffset property value. Gets or sets the base UTC offset.
     * @param string|null $value Value to set for the baseUtcOffset property.
    */
    public function setBaseUtcOffset(?string $value): void {
        $this->baseUtcOffset = $value;
    }

    /**
     * Sets the timeZoneId property value. Gets or sets the name.
     * @param string|null $value Value to set for the timeZoneId property.
    */
    public function setTimeZoneId(?string $value): void {
        $this->timeZoneId = $value;
    }

}
