<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A product price view.
*/
class ProductPriceView implements Parsable 
{
    /**
     * @var int|null $billingFrequencyId Gets or sets the billing frequency.
    */
    private ?int $billingFrequencyId = null;
    
    /**
     * @var string|null $currency Gets or sets the currency.
    */
    private ?string $currency = null;
    
    /**
     * @var DateTime|null $expiryDate Gets or sets the expiry date.
    */
    private ?DateTime $expiryDate = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var int|null $numberOfEditions Gets or sets the number of editions.
    */
    private ?int $numberOfEditions = null;
    
    /**
     * @var float|null $price Gets or sets the price.
    */
    private ?float $price = null;
    
    /**
     * @var string|null $priceTypeId Gets or sets the identifier of the pricetype.
    */
    private ?string $priceTypeId = null;
    
    /**
     * @var string|null $productId Gets or sets the identifier of the product.
    */
    private ?string $productId = null;
    
    /**
     * @var DateTime|null $startDate Gets or sets the start date.
    */
    private ?DateTime $startDate = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductPriceView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductPriceView {
        return new ProductPriceView();
    }

    /**
     * Gets the billingFrequencyId property value. Gets or sets the billing frequency.
     * @return int|null
    */
    public function getBillingFrequencyId(): ?int {
        return $this->billingFrequencyId;
    }

    /**
     * Gets the currency property value. Gets or sets the currency.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the expiryDate property value. Gets or sets the expiry date.
     * @return DateTime|null
    */
    public function getExpiryDate(): ?DateTime {
        return $this->expiryDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingFrequencyId' => fn(ParseNode $n) => $o->setBillingFrequencyId($n->getIntegerValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'expiryDate' => fn(ParseNode $n) => $o->setExpiryDate($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'numberOfEditions' => fn(ParseNode $n) => $o->setNumberOfEditions($n->getIntegerValue()),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getFloatValue()),
            'priceTypeId' => fn(ParseNode $n) => $o->setPriceTypeId($n->getStringValue()),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateTimeValue()),
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
     * Gets the numberOfEditions property value. Gets or sets the number of editions.
     * @return int|null
    */
    public function getNumberOfEditions(): ?int {
        return $this->numberOfEditions;
    }

    /**
     * Gets the price property value. Gets or sets the price.
     * @return float|null
    */
    public function getPrice(): ?float {
        return $this->price;
    }

    /**
     * Gets the priceTypeId property value. Gets or sets the identifier of the pricetype.
     * @return string|null
    */
    public function getPriceTypeId(): ?string {
        return $this->priceTypeId;
    }

    /**
     * Gets the productId property value. Gets or sets the identifier of the product.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the startDate property value. Gets or sets the start date.
     * @return DateTime|null
    */
    public function getStartDate(): ?DateTime {
        return $this->startDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('billingFrequencyId', $this->getBillingFrequencyId());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeDateTimeValue('expiryDate', $this->getExpiryDate());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeIntegerValue('numberOfEditions', $this->getNumberOfEditions());
        $writer->writeFloatValue('price', $this->getPrice());
        $writer->writeStringValue('priceTypeId', $this->getPriceTypeId());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeDateTimeValue('startDate', $this->getStartDate());
    }

    /**
     * Sets the billingFrequencyId property value. Gets or sets the billing frequency.
     * @param int|null $value Value to set for the billingFrequencyId property.
    */
    public function setBillingFrequencyId(?int $value): void {
        $this->billingFrequencyId = $value;
    }

    /**
     * Sets the currency property value. Gets or sets the currency.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the expiryDate property value. Gets or sets the expiry date.
     * @param DateTime|null $value Value to set for the expiryDate property.
    */
    public function setExpiryDate(?DateTime $value): void {
        $this->expiryDate = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the numberOfEditions property value. Gets or sets the number of editions.
     * @param int|null $value Value to set for the numberOfEditions property.
    */
    public function setNumberOfEditions(?int $value): void {
        $this->numberOfEditions = $value;
    }

    /**
     * Sets the price property value. Gets or sets the price.
     * @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value): void {
        $this->price = $value;
    }

    /**
     * Sets the priceTypeId property value. Gets or sets the identifier of the pricetype.
     * @param string|null $value Value to set for the priceTypeId property.
    */
    public function setPriceTypeId(?string $value): void {
        $this->priceTypeId = $value;
    }

    /**
     * Sets the productId property value. Gets or sets the identifier of the product.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the startDate property value. Gets or sets the start date.
     * @param DateTime|null $value Value to set for the startDate property.
    */
    public function setStartDate(?DateTime $value): void {
        $this->startDate = $value;
    }

}
