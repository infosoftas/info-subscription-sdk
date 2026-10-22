<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request properties to do a lookup for Invoice Document support in PEPPOL.
*/
class DocumentNetworkLookupRequest implements Parsable 
{
    /**
     * @var string|null $network Define the network to do a lookup in, must be an ICD Value from the ISO6523 codelist (https://docs.peppol.eu/poacc/billing/3.0/codelist/ICD/).
    */
    private ?string $network = null;
    
    /**
     * @var string|null $value The value to lookup, like the Organization Number, the GLN, the CVR or similar.
    */
    private ?string $value = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DocumentNetworkLookupRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DocumentNetworkLookupRequest {
        return new DocumentNetworkLookupRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'network' => fn(ParseNode $n) => $o->setNetwork($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the network property value. Define the network to do a lookup in, must be an ICD Value from the ISO6523 codelist (https://docs.peppol.eu/poacc/billing/3.0/codelist/ICD/).
     * @return string|null
    */
    public function getNetwork(): ?string {
        return $this->network;
    }

    /**
     * Gets the value property value. The value to lookup, like the Organization Number, the GLN, the CVR or similar.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('network', $this->getNetwork());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the network property value. Define the network to do a lookup in, must be an ICD Value from the ISO6523 codelist (https://docs.peppol.eu/poacc/billing/3.0/codelist/ICD/).
     * @param string|null $value Value to set for the network property.
    */
    public function setNetwork(?string $value): void {
        $this->network = $value;
    }

    /**
     * Sets the value property value. The value to lookup, like the Organization Number, the GLN, the CVR or similar.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
