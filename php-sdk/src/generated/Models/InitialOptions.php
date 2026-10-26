<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An initial options.
*/
class InitialOptions implements Parsable 
{
    /**
     * @var string|null $referenceId Gets or sets the identifier of the reference that created this subscription, if not given a default one will be generated based on the assigned Subscription Id.
    */
    private ?string $referenceId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InitialOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InitialOptions {
        return new InitialOptions();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'referenceId' => fn(ParseNode $n) => $o->setReferenceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the referenceId property value. Gets or sets the identifier of the reference that created this subscription, if not given a default one will be generated based on the assigned Subscription Id.
     * @return string|null
    */
    public function getReferenceId(): ?string {
        return $this->referenceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('referenceId', $this->getReferenceId());
    }

    /**
     * Sets the referenceId property value. Gets or sets the identifier of the reference that created this subscription, if not given a default one will be generated based on the assigned Subscription Id.
     * @param string|null $value Value to set for the referenceId property.
    */
    public function setReferenceId(?string $value): void {
        $this->referenceId = $value;
    }

}
