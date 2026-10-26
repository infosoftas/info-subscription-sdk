<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A product extended view.
*/
class ProductExtendedView implements Parsable 
{
    /**
     * @var array<ProductCalendar>|null $calendars Gets or sets the calendars.
    */
    private ?array $calendars = null;
    
    /**
     * @var string|null $description Gets or sets the description.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $externalPartNo Gets or sets the external part no.
    */
    private ?string $externalPartNo = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name Gets or sets the name.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $organizationId Gets or sets the identifier of the organization.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $partNo Gets or sets the part no.
    */
    private ?string $partNo = null;
    
    /**
     * @var ProductCategory|null $productCategory A product category.
    */
    private ?ProductCategory $productCategory = null;
    
    /**
     * @var ProductPriceView|null $productPrice A product price view.
    */
    private ?ProductPriceView $productPrice = null;
    
    /**
     * @var TaxGroupView|null $taxGroup Properties of a tax group.
    */
    private ?TaxGroupView $taxGroup = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductExtendedView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductExtendedView {
        return new ProductExtendedView();
    }

    /**
     * Gets the calendars property value. Gets or sets the calendars.
     * @return array<ProductCalendar>|null
    */
    public function getCalendars(): ?array {
        return $this->calendars;
    }

    /**
     * Gets the description property value. Gets or sets the description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the externalPartNo property value. Gets or sets the external part no.
     * @return string|null
    */
    public function getExternalPartNo(): ?string {
        return $this->externalPartNo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calendars' => fn(ParseNode $n) => $o->setCalendars($n->getCollectionOfObjectValues([ProductCalendar::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'externalPartNo' => fn(ParseNode $n) => $o->setExternalPartNo($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'partNo' => fn(ParseNode $n) => $o->setPartNo($n->getStringValue()),
            'productCategory' => fn(ParseNode $n) => $o->setProductCategory($n->getObjectValue([ProductCategory::class, 'createFromDiscriminatorValue'])),
            'productPrice' => fn(ParseNode $n) => $o->setProductPrice($n->getObjectValue([ProductPriceView::class, 'createFromDiscriminatorValue'])),
            'taxGroup' => fn(ParseNode $n) => $o->setTaxGroup($n->getObjectValue([TaxGroupView::class, 'createFromDiscriminatorValue'])),
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
     * Gets the name property value. Gets or sets the name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the organizationId property value. Gets or sets the identifier of the organization.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the partNo property value. Gets or sets the part no.
     * @return string|null
    */
    public function getPartNo(): ?string {
        return $this->partNo;
    }

    /**
     * Gets the productCategory property value. A product category.
     * @return ProductCategory|null
    */
    public function getProductCategory(): ?ProductCategory {
        return $this->productCategory;
    }

    /**
     * Gets the productPrice property value. A product price view.
     * @return ProductPriceView|null
    */
    public function getProductPrice(): ?ProductPriceView {
        return $this->productPrice;
    }

    /**
     * Gets the taxGroup property value. Properties of a tax group.
     * @return TaxGroupView|null
    */
    public function getTaxGroup(): ?TaxGroupView {
        return $this->taxGroup;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('calendars', $this->getCalendars());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('externalPartNo', $this->getExternalPartNo());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('partNo', $this->getPartNo());
        $writer->writeObjectValue('productCategory', $this->getProductCategory());
        $writer->writeObjectValue('productPrice', $this->getProductPrice());
        $writer->writeObjectValue('taxGroup', $this->getTaxGroup());
    }

    /**
     * Sets the calendars property value. Gets or sets the calendars.
     * @param array<ProductCalendar>|null $value Value to set for the calendars property.
    */
    public function setCalendars(?array $value): void {
        $this->calendars = $value;
    }

    /**
     * Sets the description property value. Gets or sets the description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the externalPartNo property value. Gets or sets the external part no.
     * @param string|null $value Value to set for the externalPartNo property.
    */
    public function setExternalPartNo(?string $value): void {
        $this->externalPartNo = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. Gets or sets the name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the organizationId property value. Gets or sets the identifier of the organization.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the partNo property value. Gets or sets the part no.
     * @param string|null $value Value to set for the partNo property.
    */
    public function setPartNo(?string $value): void {
        $this->partNo = $value;
    }

    /**
     * Sets the productCategory property value. A product category.
     * @param ProductCategory|null $value Value to set for the productCategory property.
    */
    public function setProductCategory(?ProductCategory $value): void {
        $this->productCategory = $value;
    }

    /**
     * Sets the productPrice property value. A product price view.
     * @param ProductPriceView|null $value Value to set for the productPrice property.
    */
    public function setProductPrice(?ProductPriceView $value): void {
        $this->productPrice = $value;
    }

    /**
     * Sets the taxGroup property value. Properties of a tax group.
     * @param TaxGroupView|null $value Value to set for the taxGroup property.
    */
    public function setTaxGroup(?TaxGroupView $value): void {
        $this->taxGroup = $value;
    }

}
