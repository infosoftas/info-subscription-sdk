<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Account source model
*/
class AccountSource implements Parsable 
{
    /**
     * @var string|null $id Gets or sets the identifier of the source.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $subscriberAccountId Gets or sets the identifier of the subscriber account.
    */
    private ?string $subscriberAccountId = null;
    
    /**
     * @var string|null $userId Gets or sets the identifier of the user.
    */
    private ?string $userId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccountSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccountSource {
        return new AccountSource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'subscriberAccountId' => fn(ParseNode $n) => $o->setSubscriberAccountId($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Gets or sets the identifier of the source.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the subscriberAccountId property value. Gets or sets the identifier of the subscriber account.
     * @return string|null
    */
    public function getSubscriberAccountId(): ?string {
        return $this->subscriberAccountId;
    }

    /**
     * Gets the userId property value. Gets or sets the identifier of the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('subscriberAccountId', $this->getSubscriberAccountId());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the id property value. Gets or sets the identifier of the source.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the subscriberAccountId property value. Gets or sets the identifier of the subscriber account.
     * @param string|null $value Value to set for the subscriberAccountId property.
    */
    public function setSubscriberAccountId(?string $value): void {
        $this->subscriberAccountId = $value;
    }

    /**
     * Sets the userId property value. Gets or sets the identifier of the user.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
