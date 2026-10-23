<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Subscriptions\Contracts\PermanentDiscount;
use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Subscriptions\Contracts\SubscriptionPackageProductView;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A SubscriptionPackage view class.
*/
class SubscriptionPackageView implements Parsable 
{
    /**
     * @var array<AdditionalProductView>|null $additionalProducts Gets or sets a included additional products.
    */
    private ?array $additionalProducts = null;
    
    /**
     * @var bool|null $automaticStop Gets or sets a value indicating whether the automatic stop.
    */
    private ?bool $automaticStop = null;
    
    /**
     * @var int|null $billingFrequencyId Gets or sets the identifier of the billing frequency.
    */
    private ?int $billingFrequencyId = null;
    
    /**
     * @var string|null $billingPlanId Gets or sets the identifier of the billing plan.
    */
    private ?string $billingPlanId = null;
    
    /**
     * @var string|null $currency Gets or sets the currency.
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $description Gets or sets the description.
    */
    private ?string $description = null;
    
    /**
     * @var float|null $fullPrice Gets or sets the full price.
    */
    private ?float $fullPrice = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var int|null $initialTermType Gets or sets the type of the initial term.
    */
    private ?int $initialTermType = null;
    
    /**
     * @var string|null $initialTermValue Gets or sets the initial term value.
    */
    private ?string $initialTermValue = null;
    
    /**
     * @var string|null $name Gets or sets the name.
    */
    private ?string $name = null;
    
    /**
     * @var int|null $numberOfEditions Gets or sets the number of editions on this subscription.
    */
    private ?int $numberOfEditions = null;
    
    /**
     * @var PermanentDiscount|null $permanentDiscount A permanent discount.
    */
    private ?PermanentDiscount $permanentDiscount = null;
    
    /**
     * @var float|null $price Gets or sets the price.
    */
    private ?float $price = null;
    
    /**
     * @var array<SubscriptionPackageProductView>|null $products Gets or sets the products.
    */
    private ?array $products = null;
    
    /**
     * @var string|null $renewalDescription Gets or sets the description of the package to be used after renewal.
    */
    private ?string $renewalDescription = null;
    
    /**
     * @var string|null $renewalName Gets or sets the name of the package to be used after renewal.
    */
    private ?string $renewalName = null;
    
    /**
     * @var SubscriptionPackageChainView|null $subscriptionPackageChain A subscription package chain.
    */
    private ?SubscriptionPackageChainView $subscriptionPackageChain = null;
    
    /**
     * @var float|null $tax Gets or sets the full price.
    */
    private ?float $tax = null;
    
    /**
     * @var array<AdditionalProductView>|null $totalAdditionalProducts Gets the total number of additional products.
    */
    private ?array $totalAdditionalProducts = null;
    
    /**
     * @var int|null $units Gets or sets the units.
    */
    private ?int $units = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionPackageView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionPackageView {
        return new SubscriptionPackageView();
    }

    /**
     * Gets the additionalProducts property value. Gets or sets a included additional products.
     * @return array<AdditionalProductView>|null
    */
    public function getAdditionalProducts(): ?array {
        return $this->additionalProducts;
    }

    /**
     * Gets the automaticStop property value. Gets or sets a value indicating whether the automatic stop.
     * @return bool|null
    */
    public function getAutomaticStop(): ?bool {
        return $this->automaticStop;
    }

    /**
     * Gets the billingFrequencyId property value. Gets or sets the identifier of the billing frequency.
     * @return int|null
    */
    public function getBillingFrequencyId(): ?int {
        return $this->billingFrequencyId;
    }

    /**
     * Gets the billingPlanId property value. Gets or sets the identifier of the billing plan.
     * @return string|null
    */
    public function getBillingPlanId(): ?string {
        return $this->billingPlanId;
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalProducts' => fn(ParseNode $n) => $o->setAdditionalProducts($n->getCollectionOfObjectValues([AdditionalProductView::class, 'createFromDiscriminatorValue'])),
            'automaticStop' => fn(ParseNode $n) => $o->setAutomaticStop($n->getBooleanValue()),
            'billingFrequencyId' => fn(ParseNode $n) => $o->setBillingFrequencyId($n->getIntegerValue()),
            'billingPlanId' => fn(ParseNode $n) => $o->setBillingPlanId($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'fullPrice' => fn(ParseNode $n) => $o->setFullPrice($n->getFloatValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'initialTermType' => fn(ParseNode $n) => $o->setInitialTermType($n->getIntegerValue()),
            'initialTermValue' => fn(ParseNode $n) => $o->setInitialTermValue($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'numberOfEditions' => fn(ParseNode $n) => $o->setNumberOfEditions($n->getIntegerValue()),
            'permanentDiscount' => fn(ParseNode $n) => $o->setPermanentDiscount($n->getObjectValue([PermanentDiscount::class, 'createFromDiscriminatorValue'])),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getFloatValue()),
            'products' => fn(ParseNode $n) => $o->setProducts($n->getCollectionOfObjectValues([SubscriptionPackageProductView::class, 'createFromDiscriminatorValue'])),
            'renewalDescription' => fn(ParseNode $n) => $o->setRenewalDescription($n->getStringValue()),
            'renewalName' => fn(ParseNode $n) => $o->setRenewalName($n->getStringValue()),
            'subscriptionPackageChain' => fn(ParseNode $n) => $o->setSubscriptionPackageChain($n->getObjectValue([SubscriptionPackageChainView::class, 'createFromDiscriminatorValue'])),
            'tax' => fn(ParseNode $n) => $o->setTax($n->getFloatValue()),
            'totalAdditionalProducts' => fn(ParseNode $n) => $o->setTotalAdditionalProducts($n->getCollectionOfObjectValues([AdditionalProductView::class, 'createFromDiscriminatorValue'])),
            'units' => fn(ParseNode $n) => $o->setUnits($n->getIntegerValue()),
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
     * Gets the id property value. Gets or sets the identifier.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the initialTermType property value. Gets or sets the type of the initial term.
     * @return int|null
    */
    public function getInitialTermType(): ?int {
        return $this->initialTermType;
    }

    /**
     * Gets the initialTermValue property value. Gets or sets the initial term value.
     * @return string|null
    */
    public function getInitialTermValue(): ?string {
        return $this->initialTermValue;
    }

    /**
     * Gets the name property value. Gets or sets the name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the numberOfEditions property value. Gets or sets the number of editions on this subscription.
     * @return int|null
    */
    public function getNumberOfEditions(): ?int {
        return $this->numberOfEditions;
    }

    /**
     * Gets the permanentDiscount property value. A permanent discount.
     * @return PermanentDiscount|null
    */
    public function getPermanentDiscount(): ?PermanentDiscount {
        return $this->permanentDiscount;
    }

    /**
     * Gets the price property value. Gets or sets the price.
     * @return float|null
    */
    public function getPrice(): ?float {
        return $this->price;
    }

    /**
     * Gets the products property value. Gets or sets the products.
     * @return array<SubscriptionPackageProductView>|null
    */
    public function getProducts(): ?array {
        return $this->products;
    }

    /**
     * Gets the renewalDescription property value. Gets or sets the description of the package to be used after renewal.
     * @return string|null
    */
    public function getRenewalDescription(): ?string {
        return $this->renewalDescription;
    }

    /**
     * Gets the renewalName property value. Gets or sets the name of the package to be used after renewal.
     * @return string|null
    */
    public function getRenewalName(): ?string {
        return $this->renewalName;
    }

    /**
     * Gets the subscriptionPackageChain property value. A subscription package chain.
     * @return SubscriptionPackageChainView|null
    */
    public function getSubscriptionPackageChain(): ?SubscriptionPackageChainView {
        return $this->subscriptionPackageChain;
    }

    /**
     * Gets the tax property value. Gets or sets the full price.
     * @return float|null
    */
    public function getTax(): ?float {
        return $this->tax;
    }

    /**
     * Gets the totalAdditionalProducts property value. Gets the total number of additional products.
     * @return array<AdditionalProductView>|null
    */
    public function getTotalAdditionalProducts(): ?array {
        return $this->totalAdditionalProducts;
    }

    /**
     * Gets the units property value. Gets or sets the units.
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
        $writer->writeCollectionOfObjectValues('additionalProducts', $this->getAdditionalProducts());
        $writer->writeBooleanValue('automaticStop', $this->getAutomaticStop());
        $writer->writeIntegerValue('billingFrequencyId', $this->getBillingFrequencyId());
        $writer->writeStringValue('billingPlanId', $this->getBillingPlanId());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeFloatValue('fullPrice', $this->getFullPrice());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeIntegerValue('initialTermType', $this->getInitialTermType());
        $writer->writeStringValue('initialTermValue', $this->getInitialTermValue());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('numberOfEditions', $this->getNumberOfEditions());
        $writer->writeObjectValue('permanentDiscount', $this->getPermanentDiscount());
        $writer->writeFloatValue('price', $this->getPrice());
        $writer->writeCollectionOfObjectValues('products', $this->getProducts());
        $writer->writeStringValue('renewalDescription', $this->getRenewalDescription());
        $writer->writeStringValue('renewalName', $this->getRenewalName());
        $writer->writeObjectValue('subscriptionPackageChain', $this->getSubscriptionPackageChain());
        $writer->writeFloatValue('tax', $this->getTax());
        $writer->writeCollectionOfObjectValues('totalAdditionalProducts', $this->getTotalAdditionalProducts());
        $writer->writeIntegerValue('units', $this->getUnits());
    }

    /**
     * Sets the additionalProducts property value. Gets or sets a included additional products.
     * @param array<AdditionalProductView>|null $value Value to set for the additionalProducts property.
    */
    public function setAdditionalProducts(?array $value): void {
        $this->additionalProducts = $value;
    }

    /**
     * Sets the automaticStop property value. Gets or sets a value indicating whether the automatic stop.
     * @param bool|null $value Value to set for the automaticStop property.
    */
    public function setAutomaticStop(?bool $value): void {
        $this->automaticStop = $value;
    }

    /**
     * Sets the billingFrequencyId property value. Gets or sets the identifier of the billing frequency.
     * @param int|null $value Value to set for the billingFrequencyId property.
    */
    public function setBillingFrequencyId(?int $value): void {
        $this->billingFrequencyId = $value;
    }

    /**
     * Sets the billingPlanId property value. Gets or sets the identifier of the billing plan.
     * @param string|null $value Value to set for the billingPlanId property.
    */
    public function setBillingPlanId(?string $value): void {
        $this->billingPlanId = $value;
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
     * Sets the fullPrice property value. Gets or sets the full price.
     * @param float|null $value Value to set for the fullPrice property.
    */
    public function setFullPrice(?float $value): void {
        $this->fullPrice = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the initialTermType property value. Gets or sets the type of the initial term.
     * @param int|null $value Value to set for the initialTermType property.
    */
    public function setInitialTermType(?int $value): void {
        $this->initialTermType = $value;
    }

    /**
     * Sets the initialTermValue property value. Gets or sets the initial term value.
     * @param string|null $value Value to set for the initialTermValue property.
    */
    public function setInitialTermValue(?string $value): void {
        $this->initialTermValue = $value;
    }

    /**
     * Sets the name property value. Gets or sets the name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the numberOfEditions property value. Gets or sets the number of editions on this subscription.
     * @param int|null $value Value to set for the numberOfEditions property.
    */
    public function setNumberOfEditions(?int $value): void {
        $this->numberOfEditions = $value;
    }

    /**
     * Sets the permanentDiscount property value. A permanent discount.
     * @param PermanentDiscount|null $value Value to set for the permanentDiscount property.
    */
    public function setPermanentDiscount(?PermanentDiscount $value): void {
        $this->permanentDiscount = $value;
    }

    /**
     * Sets the price property value. Gets or sets the price.
     * @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value): void {
        $this->price = $value;
    }

    /**
     * Sets the products property value. Gets or sets the products.
     * @param array<SubscriptionPackageProductView>|null $value Value to set for the products property.
    */
    public function setProducts(?array $value): void {
        $this->products = $value;
    }

    /**
     * Sets the renewalDescription property value. Gets or sets the description of the package to be used after renewal.
     * @param string|null $value Value to set for the renewalDescription property.
    */
    public function setRenewalDescription(?string $value): void {
        $this->renewalDescription = $value;
    }

    /**
     * Sets the renewalName property value. Gets or sets the name of the package to be used after renewal.
     * @param string|null $value Value to set for the renewalName property.
    */
    public function setRenewalName(?string $value): void {
        $this->renewalName = $value;
    }

    /**
     * Sets the subscriptionPackageChain property value. A subscription package chain.
     * @param SubscriptionPackageChainView|null $value Value to set for the subscriptionPackageChain property.
    */
    public function setSubscriptionPackageChain(?SubscriptionPackageChainView $value): void {
        $this->subscriptionPackageChain = $value;
    }

    /**
     * Sets the tax property value. Gets or sets the full price.
     * @param float|null $value Value to set for the tax property.
    */
    public function setTax(?float $value): void {
        $this->tax = $value;
    }

    /**
     * Sets the totalAdditionalProducts property value. Gets the total number of additional products.
     * @param array<AdditionalProductView>|null $value Value to set for the totalAdditionalProducts property.
    */
    public function setTotalAdditionalProducts(?array $value): void {
        $this->totalAdditionalProducts = $value;
    }

    /**
     * Sets the units property value. Gets or sets the units.
     * @param int|null $value Value to set for the units property.
    */
    public function setUnits(?int $value): void {
        $this->units = $value;
    }

}
