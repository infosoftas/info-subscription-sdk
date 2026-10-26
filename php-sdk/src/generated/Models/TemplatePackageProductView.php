<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A template package product view class.
*/
class TemplatePackageProductView implements Parsable 
{
    /**
     * @var float|null $fullPrice Gets or sets the full price.
    */
    private ?float $fullPrice = null;
    
    /**
     * @var string|null $productId Gets or sets the identifier of the product.
    */
    private ?string $productId = null;
    
    /**
     * @var float|null $taxPercent Gets or sets the tax percent.
    */
    private ?float $taxPercent = null;
    
    /**
     * @var string|null $templatePackageId Gets or sets the identifier of the template package.
    */
    private ?string $templatePackageId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TemplatePackageProductView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TemplatePackageProductView {
        return new TemplatePackageProductView();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fullPrice' => fn(ParseNode $n) => $o->setFullPrice($n->getFloatValue()),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'taxPercent' => fn(ParseNode $n) => $o->setTaxPercent($n->getFloatValue()),
            'templatePackageId' => fn(ParseNode $n) => $o->setTemplatePackageId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fullPrice property value. Gets or sets the full price.
     * @return float|null
    */
    public function getFullPrice(): ?float {
        return $this->fullPrice;
    }

    /**
     * Gets the productId property value. Gets or sets the identifier of the product.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the taxPercent property value. Gets or sets the tax percent.
     * @return float|null
    */
    public function getTaxPercent(): ?float {
        return $this->taxPercent;
    }

    /**
     * Gets the templatePackageId property value. Gets or sets the identifier of the template package.
     * @return string|null
    */
    public function getTemplatePackageId(): ?string {
        return $this->templatePackageId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('fullPrice', $this->getFullPrice());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeFloatValue('taxPercent', $this->getTaxPercent());
        $writer->writeStringValue('templatePackageId', $this->getTemplatePackageId());
    }

    /**
     * Sets the fullPrice property value. Gets or sets the full price.
     * @param float|null $value Value to set for the fullPrice property.
    */
    public function setFullPrice(?float $value): void {
        $this->fullPrice = $value;
    }

    /**
     * Sets the productId property value. Gets or sets the identifier of the product.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the taxPercent property value. Gets or sets the tax percent.
     * @param float|null $value Value to set for the taxPercent property.
    */
    public function setTaxPercent(?float $value): void {
        $this->taxPercent = $value;
    }

    /**
     * Sets the templatePackageId property value. Gets or sets the identifier of the template package.
     * @param string|null $value Value to set for the templatePackageId property.
    */
    public function setTemplatePackageId(?string $value): void {
        $this->templatePackageId = $value;
    }

}
