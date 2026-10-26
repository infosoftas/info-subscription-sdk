<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Options for adjusting/controlling the order completion process.
*/
class OrderCompletionProcessOptions implements Parsable 
{
    /**
     * @var int|null $maxPollingTimeout The maximum wait/polling timeout, in milliseconds before the API will no longer wait and produce a synchronous result. Set to 0 or negative to disable polling entirely.                         The system max timeout takes precedence over this setting.             The completion process may timeout before this setting is reached.             The max timeout is currently aproximately 60 seconds, but is subject to change.             Waiting for this long is NOT recommended.
    */
    private ?int $maxPollingTimeout = null;
    
    /**
     * Instantiates a new OrderCompletionProcessOptions and sets the default values.
    */
    public function __construct() {
        $this->setMaxPollingTimeout(30000);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderCompletionProcessOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderCompletionProcessOptions {
        return new OrderCompletionProcessOptions();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'maxPollingTimeout' => fn(ParseNode $n) => $o->setMaxPollingTimeout($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the maxPollingTimeout property value. The maximum wait/polling timeout, in milliseconds before the API will no longer wait and produce a synchronous result. Set to 0 or negative to disable polling entirely.                         The system max timeout takes precedence over this setting.             The completion process may timeout before this setting is reached.             The max timeout is currently aproximately 60 seconds, but is subject to change.             Waiting for this long is NOT recommended.
     * @return int|null
    */
    public function getMaxPollingTimeout(): ?int {
        return $this->maxPollingTimeout;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('maxPollingTimeout', $this->getMaxPollingTimeout());
    }

    /**
     * Sets the maxPollingTimeout property value. The maximum wait/polling timeout, in milliseconds before the API will no longer wait and produce a synchronous result. Set to 0 or negative to disable polling entirely.                         The system max timeout takes precedence over this setting.             The completion process may timeout before this setting is reached.             The max timeout is currently aproximately 60 seconds, but is subject to change.             Waiting for this long is NOT recommended.
     * @param int|null $value Value to set for the maxPollingTimeout property.
    */
    public function setMaxPollingTimeout(?int $value): void {
        $this->maxPollingTimeout = $value;
    }

}
