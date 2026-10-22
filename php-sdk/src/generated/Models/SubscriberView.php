<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A subscriber view.
*/
class SubscriberView implements Parsable 
{
    /**
     * @var SubscriberContactView|null $contact A subscriber contact view.
    */
    private ?SubscriberContactView $contact = null;
    
    /**
     * @var string|null $externalId Gets or sets the identifier of the external.
    */
    private ?string $externalId = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var int|null $subscriberNumber Gets or sets the subscriber number.
    */
    private ?int $subscriberNumber = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriberView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriberView {
        return new SubscriberView();
    }

    /**
     * Gets the contact property value. A subscriber contact view.
     * @return SubscriberContactView|null
    */
    public function getContact(): ?SubscriberContactView {
        return $this->contact;
    }

    /**
     * Gets the externalId property value. Gets or sets the identifier of the external.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contact' => fn(ParseNode $n) => $o->setContact($n->getObjectValue([SubscriberContactView::class, 'createFromDiscriminatorValue'])),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'subscriberNumber' => fn(ParseNode $n) => $o->setSubscriberNumber($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the id property value. Gets or sets the identifier.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the subscriberNumber property value. Gets or sets the subscriber number.
     * @return int|null
    */
    public function getSubscriberNumber(): ?int {
        return $this->subscriberNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('contact', $this->getContact());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeIntegerValue('subscriberNumber', $this->getSubscriberNumber());
    }

    /**
     * Sets the contact property value. A subscriber contact view.
     * @param SubscriberContactView|null $value Value to set for the contact property.
    */
    public function setContact(?SubscriberContactView $value): void {
        $this->contact = $value;
    }

    /**
     * Sets the externalId property value. Gets or sets the identifier of the external.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->externalId = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the subscriberNumber property value. Gets or sets the subscriber number.
     * @param int|null $value Value to set for the subscriberNumber property.
    */
    public function setSubscriberNumber(?int $value): void {
        $this->subscriberNumber = $value;
    }

}
