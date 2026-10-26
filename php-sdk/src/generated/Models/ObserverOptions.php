<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Order observer configuration options. At the current time only valid for VippsMobilePay processing.
*/
class ObserverOptions implements Parsable 
{
    /**
     * @var bool|null $disableVippsCompletion Toggles automatic Vipps|MobilePay order completion.
    */
    private ?bool $disableVippsCompletion = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ObserverOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ObserverOptions {
        return new ObserverOptions();
    }

    /**
     * Gets the disableVippsCompletion property value. Toggles automatic Vipps|MobilePay order completion.
     * @return bool|null
    */
    public function getDisableVippsCompletion(): ?bool {
        return $this->disableVippsCompletion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'disableVippsCompletion' => fn(ParseNode $n) => $o->setDisableVippsCompletion($n->getBooleanValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('disableVippsCompletion', $this->getDisableVippsCompletion());
    }

    /**
     * Sets the disableVippsCompletion property value. Toggles automatic Vipps|MobilePay order completion.
     * @param bool|null $value Value to set for the disableVippsCompletion property.
    */
    public function setDisableVippsCompletion(?bool $value): void {
        $this->disableVippsCompletion = $value;
    }

}
