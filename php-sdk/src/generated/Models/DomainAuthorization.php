<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The domain authorization
*/
class DomainAuthorization implements Parsable 
{
    /**
     * @var string|null $domainName Gets or sets the domain name.
    */
    private ?string $domainName = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $subscriberAccountId Gets or sets the identifier of the subscriber account.
    */
    private ?string $subscriberAccountId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainAuthorization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainAuthorization {
        return new DomainAuthorization();
    }

    /**
     * Gets the domainName property value. Gets or sets the domain name.
     * @return string|null
    */
    public function getDomainName(): ?string {
        return $this->domainName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'domainName' => fn(ParseNode $n) => $o->setDomainName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'subscriberAccountId' => fn(ParseNode $n) => $o->setSubscriberAccountId($n->getStringValue()),
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
     * Gets the subscriberAccountId property value. Gets or sets the identifier of the subscriber account.
     * @return string|null
    */
    public function getSubscriberAccountId(): ?string {
        return $this->subscriberAccountId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('domainName', $this->getDomainName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('subscriberAccountId', $this->getSubscriberAccountId());
    }

    /**
     * Sets the domainName property value. Gets or sets the domain name.
     * @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value): void {
        $this->domainName = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
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

}
