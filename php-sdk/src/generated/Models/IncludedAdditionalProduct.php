<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A included additional product.
*/
class IncludedAdditionalProduct implements Parsable 
{
    /**
     * @var string|null $productId Gets or sets the product identifier.
    */
    private ?string $productId = null;
    
    /**
     * @var string|null $templatePackageId Gets or sets the identifier of the template package.
    */
    private ?string $templatePackageId = null;
    
    /**
     * @var int|null $units Gets or sets the number of units.
    */
    private ?int $units = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IncludedAdditionalProduct
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IncludedAdditionalProduct {
        return new IncludedAdditionalProduct();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'templatePackageId' => fn(ParseNode $n) => $o->setTemplatePackageId($n->getStringValue()),
            'units' => fn(ParseNode $n) => $o->setUnits($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the productId property value. Gets or sets the product identifier.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the templatePackageId property value. Gets or sets the identifier of the template package.
     * @return string|null
    */
    public function getTemplatePackageId(): ?string {
        return $this->templatePackageId;
    }

    /**
     * Gets the units property value. Gets or sets the number of units.
     * @return int|null
    */
    public function getUnits(): ?int {
        return $this->units;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeStringValue('templatePackageId', $this->getTemplatePackageId());
        $writer->writeIntegerValue('units', $this->getUnits());
    }

    /**
     * Sets the productId property value. Gets or sets the product identifier.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the templatePackageId property value. Gets or sets the identifier of the template package.
     * @param string|null $value Value to set for the templatePackageId property.
    */
    public function setTemplatePackageId(?string $value): void {
        $this->templatePackageId = $value;
    }

    /**
     * Sets the units property value. Gets or sets the number of units.
     * @param int|null $value Value to set for the units property.
    */
    public function setUnits(?int $value): void {
        $this->units = $value;
    }

}
