<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The identity provider
*/
class IdentityProvider implements Parsable 
{
    /**
     * @var string|null $id Gets or sets the identifier of the identity provider.
    */
    private ?string $id = null;
    
    /**
     * @var IntegrationType|null $integrationType The integration type.
    */
    private ?IntegrationType $integrationType = null;
    
    /**
     * @var string|null $name Gets or sets the name.
    */
    private ?string $name = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityProvider {
        return new IdentityProvider();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'integrationType' => fn(ParseNode $n) => $o->setIntegrationType($n->getEnumValue(IntegrationType::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Gets or sets the identifier of the identity provider.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the integrationType property value. The integration type.
     * @return IntegrationType|null
    */
    public function getIntegrationType(): ?IntegrationType {
        return $this->integrationType;
    }

    /**
     * Gets the name property value. Gets or sets the name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeEnumValue('integrationType', $this->getIntegrationType());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the id property value. Gets or sets the identifier of the identity provider.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the integrationType property value. The integration type.
     * @param IntegrationType|null $value Value to set for the integrationType property.
    */
    public function setIntegrationType(?IntegrationType $value): void {
        $this->integrationType = $value;
    }

    /**
     * Sets the name property value. Gets or sets the name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
