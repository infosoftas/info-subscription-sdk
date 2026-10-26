<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A product category.
*/
class ProductCategory implements Parsable 
{
    /**
     * @var string|null $categoryId Gets or sets the identifier of the category.
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $productId Gets or sets the identifier.
    */
    private ?string $productId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductCategory {
        return new ProductCategory();
    }

    /**
     * Gets the categoryId property value. Gets or sets the identifier of the category.
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
        ];
    }

    /**
     * Gets the productId property value. Gets or sets the identifier.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('productId', $this->getProductId());
    }

    /**
     * Sets the categoryId property value. Gets or sets the identifier of the category.
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the productId property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

}
