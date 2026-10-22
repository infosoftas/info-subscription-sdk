<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An issue credit note.
*/
class IssueCreditNote implements Parsable 
{
    /**
     * @var float|null $amount Gets or sets the amount of the credit note.
    */
    private ?float $amount = null;
    
    /**
     * @var string|null $description Gets or sets the description of the credit note.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $organizationId Gets or sets the identifier of the organization.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $referenceIdentification Gets or sets the reference to a subscriber.
    */
    private ?string $referenceIdentification = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IssueCreditNote
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IssueCreditNote {
        return new IssueCreditNote();
    }

    /**
     * Gets the amount property value. Gets or sets the amount of the credit note.
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the description property value. Gets or sets the description of the credit note.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'referenceIdentification' => fn(ParseNode $n) => $o->setReferenceIdentification($n->getStringValue()),
        ];
    }

    /**
     * Gets the organizationId property value. Gets or sets the identifier of the organization.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the referenceIdentification property value. Gets or sets the reference to a subscriber.
     * @return string|null
    */
    public function getReferenceIdentification(): ?string {
        return $this->referenceIdentification;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('referenceIdentification', $this->getReferenceIdentification());
    }

    /**
     * Sets the amount property value. Gets or sets the amount of the credit note.
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the description property value. Gets or sets the description of the credit note.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the organizationId property value. Gets or sets the identifier of the organization.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the referenceIdentification property value. Gets or sets the reference to a subscriber.
     * @param string|null $value Value to set for the referenceIdentification property.
    */
    public function setReferenceIdentification(?string $value): void {
        $this->referenceIdentification = $value;
    }

}
