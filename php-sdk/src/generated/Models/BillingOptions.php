<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Options for controlling the billing flow.
*/
class BillingOptions implements Parsable 
{
    /**
     * @var BillingFlow|null $flow Values that represent billing which billing flow to use
    */
    private ?BillingFlow $flow = null;
    
    /**
     * @var InitialOptions|null $initial An initial options.
    */
    private ?InitialOptions $initial = null;
    
    /**
     * @var RecurringOptions|null $recurring A recurring options.
    */
    private ?RecurringOptions $recurring = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BillingOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BillingOptions {
        return new BillingOptions();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'flow' => fn(ParseNode $n) => $o->setFlow($n->getEnumValue(BillingFlow::class)),
            'initial' => fn(ParseNode $n) => $o->setInitial($n->getObjectValue([InitialOptions::class, 'createFromDiscriminatorValue'])),
            'recurring' => fn(ParseNode $n) => $o->setRecurring($n->getObjectValue([RecurringOptions::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the flow property value. Values that represent billing which billing flow to use
     * @return BillingFlow|null
    */
    public function getFlow(): ?BillingFlow {
        return $this->flow;
    }

    /**
     * Gets the initial property value. An initial options.
     * @return InitialOptions|null
    */
    public function getInitial(): ?InitialOptions {
        return $this->initial;
    }

    /**
     * Gets the recurring property value. A recurring options.
     * @return RecurringOptions|null
    */
    public function getRecurring(): ?RecurringOptions {
        return $this->recurring;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('flow', $this->getFlow());
        $writer->writeObjectValue('initial', $this->getInitial());
        $writer->writeObjectValue('recurring', $this->getRecurring());
    }

    /**
     * Sets the flow property value. Values that represent billing which billing flow to use
     * @param BillingFlow|null $value Value to set for the flow property.
    */
    public function setFlow(?BillingFlow $value): void {
        $this->flow = $value;
    }

    /**
     * Sets the initial property value. An initial options.
     * @param InitialOptions|null $value Value to set for the initial property.
    */
    public function setInitial(?InitialOptions $value): void {
        $this->initial = $value;
    }

    /**
     * Sets the recurring property value. A recurring options.
     * @param RecurringOptions|null $value Value to set for the recurring property.
    */
    public function setRecurring(?RecurringOptions $value): void {
        $this->recurring = $value;
    }

}
