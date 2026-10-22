<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An invoice sequence number configuration.
*/
class InvoiceSequenceNumberConfiguration implements Parsable 
{
    /**
     * @var int|null $initialInvoiceNumber Gets or sets the initial invoice number.
    */
    private ?int $initialInvoiceNumber = null;
    
    /**
     * @var string|null $organizationId Gets or sets the identifier of the organization.
    */
    private ?string $organizationId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvoiceSequenceNumberConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvoiceSequenceNumberConfiguration {
        return new InvoiceSequenceNumberConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'initialInvoiceNumber' => fn(ParseNode $n) => $o->setInitialInvoiceNumber($n->getIntegerValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
        ];
    }

    /**
     * Gets the initialInvoiceNumber property value. Gets or sets the initial invoice number.
     * @return int|null
    */
    public function getInitialInvoiceNumber(): ?int {
        return $this->initialInvoiceNumber;
    }

    /**
     * Gets the organizationId property value. Gets or sets the identifier of the organization.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('initialInvoiceNumber', $this->getInitialInvoiceNumber());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
    }

    /**
     * Sets the initialInvoiceNumber property value. Gets or sets the initial invoice number.
     * @param int|null $value Value to set for the initialInvoiceNumber property.
    */
    public function setInitialInvoiceNumber(?int $value): void {
        $this->initialInvoiceNumber = $value;
    }

    /**
     * Sets the organizationId property value. Gets or sets the identifier of the organization.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

}
