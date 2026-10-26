<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Subscriptions\Contracts\PermanentDiscount;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An inline subscription plan definition to be created during order processing.
*/
class SubscriptionPlanDraft implements Parsable 
{
    /**
     * @var array<SubscriptionPlanDraftAdditionalProduct>|null $additionalProducts Additional products included in this plan.
    */
    private ?array $additionalProducts = null;
    
    /**
     * @var bool|null $automaticStop When true the subscription is automatically stopped after the initial term.
    */
    private ?bool $automaticStop = null;
    
    /**
     * @var int|null $billingFrequencyId Identifier of the billing frequency.
    */
    private ?int $billingFrequencyId = null;
    
    /**
     * @var string|null $billingPlanId Identifier of the billing plan.
    */
    private ?string $billingPlanId = null;
    
    /**
     * @var string|null $currency ISO 4217 currency code.
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $description Description of the plan.
    */
    private ?string $description = null;
    
    /**
     * @var float|null $initialTermPrice Price for the initial term.
    */
    private ?float $initialTermPrice = null;
    
    /**
     * @var int|null $initialTermType Initial term type identifier.
    */
    private ?int $initialTermType = null;
    
    /**
     * @var string|null $initialTermValue Initial term value.
    */
    private ?string $initialTermValue = null;
    
    /**
     * @var string|null $name Display name of the plan.
    */
    private ?string $name = null;
    
    /**
     * @var int|null $numberOfEditions Number of editions.
    */
    private ?int $numberOfEditions = null;
    
    /**
     * @var SubscriptionPlanDraftChain|null $packageChain A package chain definition for an inline subscription plan draft.
    */
    private ?SubscriptionPlanDraftChain $packageChain = null;
    
    /**
     * @var PermanentDiscount|null $permanentDiscount A permanent discount.
    */
    private ?PermanentDiscount $permanentDiscount = null;
    
    /**
     * @var float|null $price Price of the plan including tax.
    */
    private ?float $price = null;
    
    /**
     * @var array<PlanProduct>|null $productItems Product items with quantities and optional unit prices.
    */
    private ?array $productItems = null;
    
    /**
     * @var string|null $renewalDescription Description of the package used after renewal.
    */
    private ?string $renewalDescription = null;
    
    /**
     * @var string|null $renewalName Display name of the package used after renewal.
    */
    private ?string $renewalName = null;
    
    /**
     * @var int|null $units Number of units.
    */
    private ?int $units = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionPlanDraft
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionPlanDraft {
        return new SubscriptionPlanDraft();
    }

    /**
     * Gets the additionalProducts property value. Additional products included in this plan.
     * @return array<SubscriptionPlanDraftAdditionalProduct>|null
    */
    public function getAdditionalProducts(): ?array {
        return $this->additionalProducts;
    }

    /**
     * Gets the automaticStop property value. When true the subscription is automatically stopped after the initial term.
     * @return bool|null
    */
    public function getAutomaticStop(): ?bool {
        return $this->automaticStop;
    }

    /**
     * Gets the billingFrequencyId property value. Identifier of the billing frequency.
     * @return int|null
    */
    public function getBillingFrequencyId(): ?int {
        return $this->billingFrequencyId;
    }

    /**
     * Gets the billingPlanId property value. Identifier of the billing plan.
     * @return string|null
    */
    public function getBillingPlanId(): ?string {
        return $this->billingPlanId;
    }

    /**
     * Gets the currency property value. ISO 4217 currency code.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the description property value. Description of the plan.
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
            'additionalProducts' => fn(ParseNode $n) => $o->setAdditionalProducts($n->getCollectionOfObjectValues([SubscriptionPlanDraftAdditionalProduct::class, 'createFromDiscriminatorValue'])),
            'automaticStop' => fn(ParseNode $n) => $o->setAutomaticStop($n->getBooleanValue()),
            'billingFrequencyId' => fn(ParseNode $n) => $o->setBillingFrequencyId($n->getIntegerValue()),
            'billingPlanId' => fn(ParseNode $n) => $o->setBillingPlanId($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'initialTermPrice' => fn(ParseNode $n) => $o->setInitialTermPrice($n->getFloatValue()),
            'initialTermType' => fn(ParseNode $n) => $o->setInitialTermType($n->getIntegerValue()),
            'initialTermValue' => fn(ParseNode $n) => $o->setInitialTermValue($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'numberOfEditions' => fn(ParseNode $n) => $o->setNumberOfEditions($n->getIntegerValue()),
            'packageChain' => fn(ParseNode $n) => $o->setPackageChain($n->getObjectValue([SubscriptionPlanDraftChain::class, 'createFromDiscriminatorValue'])),
            'permanentDiscount' => fn(ParseNode $n) => $o->setPermanentDiscount($n->getObjectValue([PermanentDiscount::class, 'createFromDiscriminatorValue'])),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getFloatValue()),
            'productItems' => fn(ParseNode $n) => $o->setProductItems($n->getCollectionOfObjectValues([PlanProduct::class, 'createFromDiscriminatorValue'])),
            'renewalDescription' => fn(ParseNode $n) => $o->setRenewalDescription($n->getStringValue()),
            'renewalName' => fn(ParseNode $n) => $o->setRenewalName($n->getStringValue()),
            'units' => fn(ParseNode $n) => $o->setUnits($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the initialTermPrice property value. Price for the initial term.
     * @return float|null
    */
    public function getInitialTermPrice(): ?float {
        return $this->initialTermPrice;
    }

    /**
     * Gets the initialTermType property value. Initial term type identifier.
     * @return int|null
    */
    public function getInitialTermType(): ?int {
        return $this->initialTermType;
    }

    /**
     * Gets the initialTermValue property value. Initial term value.
     * @return string|null
    */
    public function getInitialTermValue(): ?string {
        return $this->initialTermValue;
    }

    /**
     * Gets the name property value. Display name of the plan.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the numberOfEditions property value. Number of editions.
     * @return int|null
    */
    public function getNumberOfEditions(): ?int {
        return $this->numberOfEditions;
    }

    /**
     * Gets the packageChain property value. A package chain definition for an inline subscription plan draft.
     * @return SubscriptionPlanDraftChain|null
    */
    public function getPackageChain(): ?SubscriptionPlanDraftChain {
        return $this->packageChain;
    }

    /**
     * Gets the permanentDiscount property value. A permanent discount.
     * @return PermanentDiscount|null
    */
    public function getPermanentDiscount(): ?PermanentDiscount {
        return $this->permanentDiscount;
    }

    /**
     * Gets the price property value. Price of the plan including tax.
     * @return float|null
    */
    public function getPrice(): ?float {
        return $this->price;
    }

    /**
     * Gets the productItems property value. Product items with quantities and optional unit prices.
     * @return array<PlanProduct>|null
    */
    public function getProductItems(): ?array {
        return $this->productItems;
    }

    /**
     * Gets the renewalDescription property value. Description of the package used after renewal.
     * @return string|null
    */
    public function getRenewalDescription(): ?string {
        return $this->renewalDescription;
    }

    /**
     * Gets the renewalName property value. Display name of the package used after renewal.
     * @return string|null
    */
    public function getRenewalName(): ?string {
        return $this->renewalName;
    }

    /**
     * Gets the units property value. Number of units.
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
        $writer->writeFloatValue('initialTermPrice', $this->getInitialTermPrice());
        $writer->writeIntegerValue('initialTermType', $this->getInitialTermType());
        $writer->writeStringValue('initialTermValue', $this->getInitialTermValue());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('numberOfEditions', $this->getNumberOfEditions());
        $writer->writeObjectValue('packageChain', $this->getPackageChain());
        $writer->writeObjectValue('permanentDiscount', $this->getPermanentDiscount());
        $writer->writeFloatValue('price', $this->getPrice());
        $writer->writeCollectionOfObjectValues('productItems', $this->getProductItems());
        $writer->writeStringValue('renewalDescription', $this->getRenewalDescription());
        $writer->writeStringValue('renewalName', $this->getRenewalName());
        $writer->writeIntegerValue('units', $this->getUnits());
    }

    /**
     * Sets the additionalProducts property value. Additional products included in this plan.
     * @param array<SubscriptionPlanDraftAdditionalProduct>|null $value Value to set for the additionalProducts property.
    */
    public function setAdditionalProducts(?array $value): void {
        $this->additionalProducts = $value;
    }

    /**
     * Sets the automaticStop property value. When true the subscription is automatically stopped after the initial term.
     * @param bool|null $value Value to set for the automaticStop property.
    */
    public function setAutomaticStop(?bool $value): void {
        $this->automaticStop = $value;
    }

    /**
     * Sets the billingFrequencyId property value. Identifier of the billing frequency.
     * @param int|null $value Value to set for the billingFrequencyId property.
    */
    public function setBillingFrequencyId(?int $value): void {
        $this->billingFrequencyId = $value;
    }

    /**
     * Sets the billingPlanId property value. Identifier of the billing plan.
     * @param string|null $value Value to set for the billingPlanId property.
    */
    public function setBillingPlanId(?string $value): void {
        $this->billingPlanId = $value;
    }

    /**
     * Sets the currency property value. ISO 4217 currency code.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the description property value. Description of the plan.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the initialTermPrice property value. Price for the initial term.
     * @param float|null $value Value to set for the initialTermPrice property.
    */
    public function setInitialTermPrice(?float $value): void {
        $this->initialTermPrice = $value;
    }

    /**
     * Sets the initialTermType property value. Initial term type identifier.
     * @param int|null $value Value to set for the initialTermType property.
    */
    public function setInitialTermType(?int $value): void {
        $this->initialTermType = $value;
    }

    /**
     * Sets the initialTermValue property value. Initial term value.
     * @param string|null $value Value to set for the initialTermValue property.
    */
    public function setInitialTermValue(?string $value): void {
        $this->initialTermValue = $value;
    }

    /**
     * Sets the name property value. Display name of the plan.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the numberOfEditions property value. Number of editions.
     * @param int|null $value Value to set for the numberOfEditions property.
    */
    public function setNumberOfEditions(?int $value): void {
        $this->numberOfEditions = $value;
    }

    /**
     * Sets the packageChain property value. A package chain definition for an inline subscription plan draft.
     * @param SubscriptionPlanDraftChain|null $value Value to set for the packageChain property.
    */
    public function setPackageChain(?SubscriptionPlanDraftChain $value): void {
        $this->packageChain = $value;
    }

    /**
     * Sets the permanentDiscount property value. A permanent discount.
     * @param PermanentDiscount|null $value Value to set for the permanentDiscount property.
    */
    public function setPermanentDiscount(?PermanentDiscount $value): void {
        $this->permanentDiscount = $value;
    }

    /**
     * Sets the price property value. Price of the plan including tax.
     * @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value): void {
        $this->price = $value;
    }

    /**
     * Sets the productItems property value. Product items with quantities and optional unit prices.
     * @param array<PlanProduct>|null $value Value to set for the productItems property.
    */
    public function setProductItems(?array $value): void {
        $this->productItems = $value;
    }

    /**
     * Sets the renewalDescription property value. Description of the package used after renewal.
     * @param string|null $value Value to set for the renewalDescription property.
    */
    public function setRenewalDescription(?string $value): void {
        $this->renewalDescription = $value;
    }

    /**
     * Sets the renewalName property value. Display name of the package used after renewal.
     * @param string|null $value Value to set for the renewalName property.
    */
    public function setRenewalName(?string $value): void {
        $this->renewalName = $value;
    }

    /**
     * Sets the units property value. Number of units.
     * @param int|null $value Value to set for the units property.
    */
    public function setUnits(?int $value): void {
        $this->units = $value;
    }

}
