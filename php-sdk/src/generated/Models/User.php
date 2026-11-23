<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user
*/
class User implements Parsable 
{
    /**
     * @var string|null $externalId Gets or sets the external identifier.
    */
    private ?string $externalId = null;
    
    /**
     * @var string|null $id Get or set the user identifier
    */
    private ?string $id = null;
    
    /**
     * @var string|null $identityProviderId Gets or sets the identity provider identifier.
    */
    private ?string $identityProviderId = null;
    
    /**
     * @var string|null $subscriberId Gets or sets the identifier of the subscriber.
    */
    private ?string $subscriberId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return User
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): User {
        return new User();
    }

    /**
     * Gets the externalId property value. Gets or sets the external identifier.
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
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'identityProviderId' => fn(ParseNode $n) => $o->setIdentityProviderId($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Get or set the user identifier
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the identityProviderId property value. Gets or sets the identity provider identifier.
     * @return string|null
    */
    public function getIdentityProviderId(): ?string {
        return $this->identityProviderId;
    }

    /**
     * Gets the subscriberId property value. Gets or sets the identifier of the subscriber.
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
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('identityProviderId', $this->getIdentityProviderId());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
    }

    /**
     * Sets the externalId property value. Gets or sets the external identifier.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->externalId = $value;
    }

    /**
     * Sets the id property value. Get or set the user identifier
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the identityProviderId property value. Gets or sets the identity provider identifier.
     * @param string|null $value Value to set for the identityProviderId property.
    */
    public function setIdentityProviderId(?string $value): void {
        $this->identityProviderId = $value;
    }

    /**
     * Sets the subscriberId property value. Gets or sets the identifier of the subscriber.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

}
