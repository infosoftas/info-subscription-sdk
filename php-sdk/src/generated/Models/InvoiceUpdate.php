<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represent a request to update an invoice.
*/
class InvoiceUpdate implements Parsable 
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
     * @var string|null $organizationId The identifier of the organization.
    */
    private ?string $organizationId = null;
    
    /**
     * @var OptionalOfRecipient|null $recipient A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    */
    private ?OptionalOfRecipient $recipient = null;
    
    /**
     * @var string|null $subscriberId The identifier of the subscriber.
    */
    private ?string $subscriberId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvoiceUpdate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvoiceUpdate {
        return new InvoiceUpdate();
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
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'recipient' => fn(ParseNode $n) => $o->setRecipient($n->getObjectValue([OptionalOfRecipient::class, 'createFromDiscriminatorValue'])),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
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
     * Gets the organizationId property value. The identifier of the organization.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the recipient property value. A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
     * @return OptionalOfRecipient|null
    */
    public function getRecipient(): ?OptionalOfRecipient {
        return $this->recipient;
    }

    /**
     * Gets the subscriberId property value. The identifier of the subscriber.
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('buyer', $this->getBuyer());
        $writer->writeStringValue('buyerReference', $this->getBuyerReference());
        $writer->writeStringValue('orderReference', $this->getOrderReference());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeObjectValue('recipient', $this->getRecipient());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
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
     * Sets the organizationId property value. The identifier of the organization.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the recipient property value. A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
     * @param OptionalOfRecipient|null $value Value to set for the recipient property.
    */
    public function setRecipient(?OptionalOfRecipient $value): void {
        $this->recipient = $value;
    }

    /**
     * Sets the subscriberId property value. The identifier of the subscriber.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

}
