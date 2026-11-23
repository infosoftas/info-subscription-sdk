<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Account source model
*/
class ExternalStaticProductSource implements Parsable 
{
    /**
     * @var string|null $id Gets or sets the identifier of the source.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name Gets or sets the name of the source (like the name of the external system)
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $products Gets or sets the products identifiers
    */
    private ?array $products = null;
    
    /**
     * @var string|null $userId Gets or sets the identifier of the user.
    */
    private ?string $userId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalStaticProductSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalStaticProductSource {
        return new ExternalStaticProductSource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'products' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProducts($val);
            },
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
     * Gets the name property value. Gets or sets the name of the source (like the name of the external system)
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the products property value. Gets or sets the products identifiers
     * @return array<string>|null
    */
    public function getProducts(): ?array {
        return $this->products;
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
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('products', $this->getProducts());
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
     * Sets the name property value. Gets or sets the name of the source (like the name of the external system)
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the products property value. Gets or sets the products identifiers
     * @param array<string>|null $value Value to set for the products property.
    */
    public function setProducts(?array $value): void {
        $this->products = $value;
    }

    /**
     * Sets the userId property value. Gets or sets the identifier of the user.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
