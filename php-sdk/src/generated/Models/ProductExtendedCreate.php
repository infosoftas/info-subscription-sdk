<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A product extended create.
*/
class ProductExtendedCreate implements Parsable 
{
    /**
     * @var BillingFrequencies|null $billingFrequencyId Values that represent billing frequencies.
    */
    private ?BillingFrequencies $billingFrequencyId = null;
    
    /**
     * @var string|null $calendarId Gets or sets the identifier of the calendar.
    */
    private ?string $calendarId = null;
    
    /**
     * @var DateTime|null $calendarStartsOnDate Gets or sets the calendar starts on date.
    */
    private ?DateTime $calendarStartsOnDate = null;
    
    /**
     * @var string|null $categoryId Gets or sets the identifier of the category.
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $currency Gets or sets the currency.
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $description Gets or sets the description.
    */
    private ?string $description = null;
    
    /**
     * @var DateTime|null $expiryDate Gets or sets the expiry date.
    */
    private ?DateTime $expiryDate = null;
    
    /**
     * @var string|null $externalPartNo Gets or sets the external part no.
    */
    private ?string $externalPartNo = null;
    
    /**
     * @var string|null $name Gets or sets the name.
    */
    private ?string $name = null;
    
    /**
     * @var int|null $numberOfEditions Gets or sets the number of editions.
    */
    private ?int $numberOfEditions = null;
    
    /**
     * @var string|null $organizationId Gets or sets the identifier of the organization.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $partNo Gets or sets the part no.
    */
    private ?string $partNo = null;
    
    /**
     * @var float|null $price Gets or sets the price.
    */
    private ?float $price = null;
    
    /**
     * @var string|null $priceTypeId Gets or sets the identifier of the price type.
    */
    private ?string $priceTypeId = null;
    
    /**
     * @var DateTime|null $startDate Gets or sets the start date.
    */
    private ?DateTime $startDate = null;
    
    /**
     * @var string|null $taxGroupId Gets or sets the identifier of the tax group.
    */
    private ?string $taxGroupId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductExtendedCreate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductExtendedCreate {
        return new ProductExtendedCreate();
    }

    /**
     * Gets the billingFrequencyId property value. Values that represent billing frequencies.
     * @return BillingFrequencies|null
    */
    public function getBillingFrequencyId(): ?BillingFrequencies {
        return $this->billingFrequencyId;
    }

    /**
     * Gets the calendarId property value. Gets or sets the identifier of the calendar.
     * @return string|null
    */
    public function getCalendarId(): ?string {
        return $this->calendarId;
    }

    /**
     * Gets the calendarStartsOnDate property value. Gets or sets the calendar starts on date.
     * @return DateTime|null
    */
    public function getCalendarStartsOnDate(): ?DateTime {
        return $this->calendarStartsOnDate;
    }

    /**
     * Gets the categoryId property value. Gets or sets the identifier of the category.
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * Gets the currency property value. Gets or sets the currency.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the description property value. Gets or sets the description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the expiryDate property value. Gets or sets the expiry date.
     * @return DateTime|null
    */
    public function getExpiryDate(): ?DateTime {
        return $this->expiryDate;
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
            'billingFrequencyId' => fn(ParseNode $n) => $o->setBillingFrequencyId($n->getEnumValue(BillingFrequencies::class)),
            'calendarId' => fn(ParseNode $n) => $o->setCalendarId($n->getStringValue()),
            'calendarStartsOnDate' => fn(ParseNode $n) => $o->setCalendarStartsOnDate($n->getDateTimeValue()),
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'expiryDate' => fn(ParseNode $n) => $o->setExpiryDate($n->getDateTimeValue()),
            'externalPartNo' => fn(ParseNode $n) => $o->setExternalPartNo($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'numberOfEditions' => fn(ParseNode $n) => $o->setNumberOfEditions($n->getIntegerValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'partNo' => fn(ParseNode $n) => $o->setPartNo($n->getStringValue()),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getFloatValue()),
            'priceTypeId' => fn(ParseNode $n) => $o->setPriceTypeId($n->getStringValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateTimeValue()),
            'taxGroupId' => fn(ParseNode $n) => $o->setTaxGroupId($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. Gets or sets the name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the numberOfEditions property value. Gets or sets the number of editions.
     * @return int|null
    */
    public function getNumberOfEditions(): ?int {
        return $this->numberOfEditions;
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
     * Gets the price property value. Gets or sets the price.
     * @return float|null
    */
    public function getPrice(): ?float {
        return $this->price;
    }

    /**
     * Gets the priceTypeId property value. Gets or sets the identifier of the price type.
     * @return string|null
    */
    public function getPriceTypeId(): ?string {
        return $this->priceTypeId;
    }

    /**
     * Gets the startDate property value. Gets or sets the start date.
     * @return DateTime|null
    */
    public function getStartDate(): ?DateTime {
        return $this->startDate;
    }

    /**
     * Gets the taxGroupId property value. Gets or sets the identifier of the tax group.
     * @return string|null
    */
    public function getTaxGroupId(): ?string {
        return $this->taxGroupId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('billingFrequencyId', $this->getBillingFrequencyId());
        $writer->writeStringValue('calendarId', $this->getCalendarId());
        $writer->writeDateTimeValue('calendarStartsOnDate', $this->getCalendarStartsOnDate());
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateTimeValue('expiryDate', $this->getExpiryDate());
        $writer->writeStringValue('externalPartNo', $this->getExternalPartNo());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('numberOfEditions', $this->getNumberOfEditions());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('partNo', $this->getPartNo());
        $writer->writeFloatValue('price', $this->getPrice());
        $writer->writeStringValue('priceTypeId', $this->getPriceTypeId());
        $writer->writeDateTimeValue('startDate', $this->getStartDate());
        $writer->writeStringValue('taxGroupId', $this->getTaxGroupId());
    }

    /**
     * Sets the billingFrequencyId property value. Values that represent billing frequencies.
     * @param BillingFrequencies|null $value Value to set for the billingFrequencyId property.
    */
    public function setBillingFrequencyId(?BillingFrequencies $value): void {
        $this->billingFrequencyId = $value;
    }

    /**
     * Sets the calendarId property value. Gets or sets the identifier of the calendar.
     * @param string|null $value Value to set for the calendarId property.
    */
    public function setCalendarId(?string $value): void {
        $this->calendarId = $value;
    }

    /**
     * Sets the calendarStartsOnDate property value. Gets or sets the calendar starts on date.
     * @param DateTime|null $value Value to set for the calendarStartsOnDate property.
    */
    public function setCalendarStartsOnDate(?DateTime $value): void {
        $this->calendarStartsOnDate = $value;
    }

    /**
     * Sets the categoryId property value. Gets or sets the identifier of the category.
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the currency property value. Gets or sets the currency.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the description property value. Gets or sets the description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the expiryDate property value. Gets or sets the expiry date.
     * @param DateTime|null $value Value to set for the expiryDate property.
    */
    public function setExpiryDate(?DateTime $value): void {
        $this->expiryDate = $value;
    }

    /**
     * Sets the externalPartNo property value. Gets or sets the external part no.
     * @param string|null $value Value to set for the externalPartNo property.
    */
    public function setExternalPartNo(?string $value): void {
        $this->externalPartNo = $value;
    }

    /**
     * Sets the name property value. Gets or sets the name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the numberOfEditions property value. Gets or sets the number of editions.
     * @param int|null $value Value to set for the numberOfEditions property.
    */
    public function setNumberOfEditions(?int $value): void {
        $this->numberOfEditions = $value;
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
     * Sets the price property value. Gets or sets the price.
     * @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value): void {
        $this->price = $value;
    }

    /**
     * Sets the priceTypeId property value. Gets or sets the identifier of the price type.
     * @param string|null $value Value to set for the priceTypeId property.
    */
    public function setPriceTypeId(?string $value): void {
        $this->priceTypeId = $value;
    }

    /**
     * Sets the startDate property value. Gets or sets the start date.
     * @param DateTime|null $value Value to set for the startDate property.
    */
    public function setStartDate(?DateTime $value): void {
        $this->startDate = $value;
    }

    /**
     * Sets the taxGroupId property value. Gets or sets the identifier of the tax group.
     * @param string|null $value Value to set for the taxGroupId property.
    */
    public function setTaxGroupId(?string $value): void {
        $this->taxGroupId = $value;
    }

}
