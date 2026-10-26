<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents a request to update the header of an issued credit note.
*/
class CreditNoteUpdate implements Parsable 
{
    /**
     * @var OptionalOfBuyer|null $buyer A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    */
    private ?OptionalOfBuyer $buyer = null;
    
    /**
     * @var string|null $buyerReference A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    */
    private ?string $buyerReference = null;
    
    /**
     * @var string|null $orderReference A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    */
    private ?string $orderReference = null;
    
    /**
     * @var OptionalOfRecipient|null $recipient A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    */
    private ?OptionalOfRecipient $recipient = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreditNoteUpdate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreditNoteUpdate {
        return new CreditNoteUpdate();
    }

    /**
     * Gets the buyer property value. A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
     * @return OptionalOfBuyer|null
    */
    public function getBuyer(): ?OptionalOfBuyer {
        return $this->buyer;
    }

    /**
     * Gets the buyerReference property value. A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
     * @return string|null
    */
    public function getBuyerReference(): ?string {
        return $this->buyerReference;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buyer' => fn(ParseNode $n) => $o->setBuyer($n->getObjectValue([OptionalOfBuyer::class, 'createFromDiscriminatorValue'])),
            'buyerReference' => fn(ParseNode $n) => $o->setBuyerReference($n->getStringValue()),
            'orderReference' => fn(ParseNode $n) => $o->setOrderReference($n->getStringValue()),
            'recipient' => fn(ParseNode $n) => $o->setRecipient($n->getObjectValue([OptionalOfRecipient::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the orderReference property value. A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
     * @return string|null
    */
    public function getOrderReference(): ?string {
        return $this->orderReference;
    }

    /**
     * Gets the recipient property value. A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
     * @return OptionalOfRecipient|null
    */
    public function getRecipient(): ?OptionalOfRecipient {
        return $this->recipient;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('buyer', $this->getBuyer());
        $writer->writeStringValue('buyerReference', $this->getBuyerReference());
        $writer->writeStringValue('orderReference', $this->getOrderReference());
        $writer->writeObjectValue('recipient', $this->getRecipient());
    }

    /**
     * Sets the buyer property value. A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
     * @param OptionalOfBuyer|null $value Value to set for the buyer property.
    */
    public function setBuyer(?OptionalOfBuyer $value): void {
        $this->buyer = $value;
    }

    /**
     * Sets the buyerReference property value. A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
     * @param string|null $value Value to set for the buyerReference property.
    */
    public function setBuyerReference(?string $value): void {
        $this->buyerReference = $value;
    }

    /**
     * Sets the orderReference property value. A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
     * @param string|null $value Value to set for the orderReference property.
    */
    public function setOrderReference(?string $value): void {
        $this->orderReference = $value;
    }

    /**
     * Sets the recipient property value. A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
     * @param OptionalOfRecipient|null $value Value to set for the recipient property.
    */
    public function setRecipient(?OptionalOfRecipient $value): void {
        $this->recipient = $value;
    }

}
