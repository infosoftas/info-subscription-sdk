<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A step in an inline subscription plan package chain draft.
*/
class SubscriptionPlanDraftChainStep implements Parsable 
{
    /**
     * @var array<SubscriptionPlanDraftAdditionalProduct>|null $additionalProducts Additional products included in this step.
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
     * @var string|null $description Description of this step's package.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $name Display name of this step's package.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $nextSubscriptionPackageId Identifier of the subscription package to transition to at this step.
    */
    private ?string $nextSubscriptionPackageId = null;
    
    /**
     * @var int|null $numberOfEditions Number of editions.
    */
    private ?int $numberOfEditions = null;
    
    /**
     * @var float|null $price Price of this step's package including tax.
    */
    private ?float $price = null;
    
    /**
     * @var array<PlanProduct>|null $productItems Product items with quantities and optional unit prices for this step.
    */
    private ?array $productItems = null;
    
    /**
     * @var string|null $renewalDescription Description of the package used after renewal if not retained.
    */
    private ?string $renewalDescription = null;
    
    /**
     * @var string|null $renewalName Display name of the package used after renewal if not retained.
    */
    private ?string $renewalName = null;
    
    /**
     * @var bool|null $retain When true the subscription is retained (not cancelled) at this step, and if this is the last step the subscription is retained indefinitely.
    */
    private ?bool $retain = null;
    
    /**
     * @var int|null $step The position increment to the next step.
    */
    private ?int $step = null;
    
    /**
     * @var int|null $units Number of units.
    */
    private ?int $units = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionPlanDraftChainStep
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionPlanDraftChainStep {
        return new SubscriptionPlanDraftChainStep();
    }

    /**
     * Gets the additionalProducts property value. Additional products included in this step.
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
     * Gets the description property value. Description of this step's package.
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
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'nextSubscriptionPackageId' => fn(ParseNode $n) => $o->setNextSubscriptionPackageId($n->getStringValue()),
            'numberOfEditions' => fn(ParseNode $n) => $o->setNumberOfEditions($n->getIntegerValue()),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getFloatValue()),
            'productItems' => fn(ParseNode $n) => $o->setProductItems($n->getCollectionOfObjectValues([PlanProduct::class, 'createFromDiscriminatorValue'])),
            'renewalDescription' => fn(ParseNode $n) => $o->setRenewalDescription($n->getStringValue()),
            'renewalName' => fn(ParseNode $n) => $o->setRenewalName($n->getStringValue()),
            'retain' => fn(ParseNode $n) => $o->setRetain($n->getBooleanValue()),
            'step' => fn(ParseNode $n) => $o->setStep($n->getIntegerValue()),
            'units' => fn(ParseNode $n) => $o->setUnits($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the name property value. Display name of this step's package.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the nextSubscriptionPackageId property value. Identifier of the subscription package to transition to at this step.
     * @return string|null
    */
    public function getNextSubscriptionPackageId(): ?string {
        return $this->nextSubscriptionPackageId;
    }

    /**
     * Gets the numberOfEditions property value. Number of editions.
     * @return int|null
    */
    public function getNumberOfEditions(): ?int {
        return $this->numberOfEditions;
    }

    /**
     * Gets the price property value. Price of this step's package including tax.
     * @return float|null
    */
    public function getPrice(): ?float {
        return $this->price;
    }

    /**
     * Gets the productItems property value. Product items with quantities and optional unit prices for this step.
     * @return array<PlanProduct>|null
    */
    public function getProductItems(): ?array {
        return $this->productItems;
    }

    /**
     * Gets the renewalDescription property value. Description of the package used after renewal if not retained.
     * @return string|null
    */
    public function getRenewalDescription(): ?string {
        return $this->renewalDescription;
    }

    /**
     * Gets the renewalName property value. Display name of the package used after renewal if not retained.
     * @return string|null
    */
    public function getRenewalName(): ?string {
        return $this->renewalName;
    }

    /**
     * Gets the retain property value. When true the subscription is retained (not cancelled) at this step, and if this is the last step the subscription is retained indefinitely.
     * @return bool|null
    */
    public function getRetain(): ?bool {
        return $this->retain;
    }

    /**
     * Gets the step property value. The position increment to the next step.
     * @return int|null
    */
    public function getStep(): ?int {
        return $this->step;
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
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('nextSubscriptionPackageId', $this->getNextSubscriptionPackageId());
        $writer->writeIntegerValue('numberOfEditions', $this->getNumberOfEditions());
        $writer->writeFloatValue('price', $this->getPrice());
        $writer->writeCollectionOfObjectValues('productItems', $this->getProductItems());
        $writer->writeStringValue('renewalDescription', $this->getRenewalDescription());
        $writer->writeStringValue('renewalName', $this->getRenewalName());
        $writer->writeBooleanValue('retain', $this->getRetain());
        $writer->writeIntegerValue('step', $this->getStep());
        $writer->writeIntegerValue('units', $this->getUnits());
    }

    /**
     * Sets the additionalProducts property value. Additional products included in this step.
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
     * Sets the description property value. Description of this step's package.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the name property value. Display name of this step's package.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the nextSubscriptionPackageId property value. Identifier of the subscription package to transition to at this step.
     * @param string|null $value Value to set for the nextSubscriptionPackageId property.
    */
    public function setNextSubscriptionPackageId(?string $value): void {
        $this->nextSubscriptionPackageId = $value;
    }

    /**
     * Sets the numberOfEditions property value. Number of editions.
     * @param int|null $value Value to set for the numberOfEditions property.
    */
    public function setNumberOfEditions(?int $value): void {
        $this->numberOfEditions = $value;
    }

    /**
     * Sets the price property value. Price of this step's package including tax.
     * @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value): void {
        $this->price = $value;
    }

    /**
     * Sets the productItems property value. Product items with quantities and optional unit prices for this step.
     * @param array<PlanProduct>|null $value Value to set for the productItems property.
    */
    public function setProductItems(?array $value): void {
        $this->productItems = $value;
    }

    /**
     * Sets the renewalDescription property value. Description of the package used after renewal if not retained.
     * @param string|null $value Value to set for the renewalDescription property.
    */
    public function setRenewalDescription(?string $value): void {
        $this->renewalDescription = $value;
    }

    /**
     * Sets the renewalName property value. Display name of the package used after renewal if not retained.
     * @param string|null $value Value to set for the renewalName property.
    */
    public function setRenewalName(?string $value): void {
        $this->renewalName = $value;
    }

    /**
     * Sets the retain property value. When true the subscription is retained (not cancelled) at this step, and if this is the last step the subscription is retained indefinitely.
     * @param bool|null $value Value to set for the retain property.
    */
    public function setRetain(?bool $value): void {
        $this->retain = $value;
    }

    /**
     * Sets the step property value. The position increment to the next step.
     * @param int|null $value Value to set for the step property.
    */
    public function setStep(?int $value): void {
        $this->step = $value;
    }

    /**
     * Sets the units property value. Number of units.
     * @param int|null $value Value to set for the units property.
    */
    public function setUnits(?int $value): void {
        $this->units = $value;
    }

}
