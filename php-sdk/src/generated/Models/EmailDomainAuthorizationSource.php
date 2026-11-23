<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The email domain authorization source model
*/
class EmailDomainAuthorizationSource implements Parsable 
{
    /**
     * @var DomainAuthorization|null $domainAuthorization The domain authorization
    */
    private ?DomainAuthorization $domainAuthorization = null;
    
    /**
     * @var string|null $id Gets or sets the identifier of the source.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $userId Gets or sets the identifier of the user.
    */
    private ?string $userId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailDomainAuthorizationSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmailDomainAuthorizationSource {
        return new EmailDomainAuthorizationSource();
    }

    /**
     * Gets the domainAuthorization property value. The domain authorization
     * @return DomainAuthorization|null
    */
    public function getDomainAuthorization(): ?DomainAuthorization {
        return $this->domainAuthorization;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'domainAuthorization' => fn(ParseNode $n) => $o->setDomainAuthorization($n->getObjectValue([DomainAuthorization::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
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
        $writer->writeObjectValue('domainAuthorization', $this->getDomainAuthorization());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the domainAuthorization property value. The domain authorization
     * @param DomainAuthorization|null $value Value to set for the domainAuthorization property.
    */
    public function setDomainAuthorization(?DomainAuthorization $value): void {
        $this->domainAuthorization = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier of the source.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the userId property value. Gets or sets the identifier of the user.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
