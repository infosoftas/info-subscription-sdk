<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\ProductService\Contracts\Contract;
use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\ProductService\Contracts\TemplatePackageRule;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A template package view.
*/
class TemplatePackageView implements Parsable 
{
    /**
     * @var array<TemplatePackageBillingFrequencyView>|null $billingFrequencies Gets or sets the billing frequencies.
    */
    private ?array $billingFrequencies = null;
    
    /**
     * @var array<TemplatePackageBillingPlanView>|null $billingPlans Gets or sets the billing plans.
    */
    private ?array $billingPlans = null;
    
    /**
     * @var Contract|null $contract Values that represent contract.
    */
    private ?Contract $contract = null;
    
    /**
     * @var string|null $currency Gets or sets the currency.
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $description Gets or sets the description.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $disabled Gets or sets a value indicating whether this instance is disabled.
    */
    private ?bool $disabled = null;
    
    /**
     * @var float|null $fullPrice Gets or sets the full price.
    */
    private ?float $fullPrice = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var array<AdditionalProduct>|null $includedAdditionalProducts Gets or sets a included additional products.
    */
    private ?array $includedAdditionalProducts = null;
    
    /**
     * @var InitialTerm|null $initialTerm A package chain step.
    */
    private ?InitialTerm $initialTerm = null;
    
    /**
     * @var string|null $name Gets or sets the name.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $organizationId Gets or sets the identifier of the organization.
    */
    private ?string $organizationId = null;
    
    /**
     * @var PackageChainView|null $packageChain A package chain view.
    */
    private ?PackageChainView $packageChain = null;
    
    /**
     * @var float|null $price Gets or sets the price.
    */
    private ?float $price = null;
    
    /**
     * @var array<TemplatePackageProductView>|null $products Gets or sets the products.
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
     * @var float|null $tax Gets or sets the tax percent.
    */
    private ?float $tax = null;
    
    /**
     * @var array<TemplatePackageRule>|null $templatePackageRules Gets or sets the template package rules.
    */
    private ?array $templatePackageRules = null;
    
    /**
     * @var DateTime|null $validFrom Gets or sets the Date/Time of the valid from.
    */
    private ?DateTime $validFrom = null;
    
    /**
     * @var DateTime|null $validUntil Gets or sets the Date/Time of the valid to.
    */
    private ?DateTime $validUntil = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TemplatePackageView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TemplatePackageView {
        return new TemplatePackageView();
    }

    /**
     * Gets the billingFrequencies property value. Gets or sets the billing frequencies.
     * @return array<TemplatePackageBillingFrequencyView>|null
    */
    public function getBillingFrequencies(): ?array {
        return $this->billingFrequencies;
    }

    /**
     * Gets the billingPlans property value. Gets or sets the billing plans.
     * @return array<TemplatePackageBillingPlanView>|null
    */
    public function getBillingPlans(): ?array {
        return $this->billingPlans;
    }

    /**
     * Gets the contract property value. Values that represent contract.
     * @return Contract|null
    */
    public function getContract(): ?Contract {
        return $this->contract;
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
     * Gets the disabled property value. Gets or sets a value indicating whether this instance is disabled.
     * @return bool|null
    */
    public function getDisabled(): ?bool {
        return $this->disabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingFrequencies' => fn(ParseNode $n) => $o->setBillingFrequencies($n->getCollectionOfObjectValues([TemplatePackageBillingFrequencyView::class, 'createFromDiscriminatorValue'])),
            'billingPlans' => fn(ParseNode $n) => $o->setBillingPlans($n->getCollectionOfObjectValues([TemplatePackageBillingPlanView::class, 'createFromDiscriminatorValue'])),
            'contract' => fn(ParseNode $n) => $o->setContract($n->getObjectValue([Contract::class, 'createFromDiscriminatorValue'])),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'disabled' => fn(ParseNode $n) => $o->setDisabled($n->getBooleanValue()),
            'fullPrice' => fn(ParseNode $n) => $o->setFullPrice($n->getFloatValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'includedAdditionalProducts' => fn(ParseNode $n) => $o->setIncludedAdditionalProducts($n->getCollectionOfObjectValues([AdditionalProduct::class, 'createFromDiscriminatorValue'])),
            'initialTerm' => fn(ParseNode $n) => $o->setInitialTerm($n->getObjectValue([InitialTerm::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'packageChain' => fn(ParseNode $n) => $o->setPackageChain($n->getObjectValue([PackageChainView::class, 'createFromDiscriminatorValue'])),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getFloatValue()),
            'products' => fn(ParseNode $n) => $o->setProducts($n->getCollectionOfObjectValues([TemplatePackageProductView::class, 'createFromDiscriminatorValue'])),
            'renewalDescription' => fn(ParseNode $n) => $o->setRenewalDescription($n->getStringValue()),
            'renewalName' => fn(ParseNode $n) => $o->setRenewalName($n->getStringValue()),
            'tax' => fn(ParseNode $n) => $o->setTax($n->getFloatValue()),
            'templatePackageRules' => fn(ParseNode $n) => $o->setTemplatePackageRules($n->getCollectionOfObjectValues([TemplatePackageRule::class, 'createFromDiscriminatorValue'])),
            'validFrom' => fn(ParseNode $n) => $o->setValidFrom($n->getDateTimeValue()),
            'validUntil' => fn(ParseNode $n) => $o->setValidUntil($n->getDateTimeValue()),
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
     * Gets the includedAdditionalProducts property value. Gets or sets a included additional products.
     * @return array<AdditionalProduct>|null
    */
    public function getIncludedAdditionalProducts(): ?array {
        return $this->includedAdditionalProducts;
    }

    /**
     * Gets the initialTerm property value. A package chain step.
     * @return InitialTerm|null
    */
    public function getInitialTerm(): ?InitialTerm {
        return $this->initialTerm;
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
     * Gets the packageChain property value. A package chain view.
     * @return PackageChainView|null
    */
    public function getPackageChain(): ?PackageChainView {
        return $this->packageChain;
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
     * @return array<TemplatePackageProductView>|null
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
     * Gets the tax property value. Gets or sets the tax percent.
     * @return float|null
    */
    public function getTax(): ?float {
        return $this->tax;
    }

    /**
     * Gets the templatePackageRules property value. Gets or sets the template package rules.
     * @return array<TemplatePackageRule>|null
    */
    public function getTemplatePackageRules(): ?array {
        return $this->templatePackageRules;
    }

    /**
     * Gets the validFrom property value. Gets or sets the Date/Time of the valid from.
     * @return DateTime|null
    */
    public function getValidFrom(): ?DateTime {
        return $this->validFrom;
    }

    /**
     * Gets the validUntil property value. Gets or sets the Date/Time of the valid to.
     * @return DateTime|null
    */
    public function getValidUntil(): ?DateTime {
        return $this->validUntil;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('billingFrequencies', $this->getBillingFrequencies());
        $writer->writeCollectionOfObjectValues('billingPlans', $this->getBillingPlans());
        $writer->writeObjectValue('contract', $this->getContract());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('disabled', $this->getDisabled());
        $writer->writeFloatValue('fullPrice', $this->getFullPrice());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('includedAdditionalProducts', $this->getIncludedAdditionalProducts());
        $writer->writeObjectValue('initialTerm', $this->getInitialTerm());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeObjectValue('packageChain', $this->getPackageChain());
        $writer->writeFloatValue('price', $this->getPrice());
        $writer->writeCollectionOfObjectValues('products', $this->getProducts());
        $writer->writeStringValue('renewalDescription', $this->getRenewalDescription());
        $writer->writeStringValue('renewalName', $this->getRenewalName());
        $writer->writeFloatValue('tax', $this->getTax());
        $writer->writeCollectionOfObjectValues('templatePackageRules', $this->getTemplatePackageRules());
        $writer->writeDateTimeValue('validFrom', $this->getValidFrom());
        $writer->writeDateTimeValue('validUntil', $this->getValidUntil());
    }

    /**
     * Sets the billingFrequencies property value. Gets or sets the billing frequencies.
     * @param array<TemplatePackageBillingFrequencyView>|null $value Value to set for the billingFrequencies property.
    */
    public function setBillingFrequencies(?array $value): void {
        $this->billingFrequencies = $value;
    }

    /**
     * Sets the billingPlans property value. Gets or sets the billing plans.
     * @param array<TemplatePackageBillingPlanView>|null $value Value to set for the billingPlans property.
    */
    public function setBillingPlans(?array $value): void {
        $this->billingPlans = $value;
    }

    /**
     * Sets the contract property value. Values that represent contract.
     * @param Contract|null $value Value to set for the contract property.
    */
    public function setContract(?Contract $value): void {
        $this->contract = $value;
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
     * Sets the disabled property value. Gets or sets a value indicating whether this instance is disabled.
     * @param bool|null $value Value to set for the disabled property.
    */
    public function setDisabled(?bool $value): void {
        $this->disabled = $value;
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
     * Sets the includedAdditionalProducts property value. Gets or sets a included additional products.
     * @param array<AdditionalProduct>|null $value Value to set for the includedAdditionalProducts property.
    */
    public function setIncludedAdditionalProducts(?array $value): void {
        $this->includedAdditionalProducts = $value;
    }

    /**
     * Sets the initialTerm property value. A package chain step.
     * @param InitialTerm|null $value Value to set for the initialTerm property.
    */
    public function setInitialTerm(?InitialTerm $value): void {
        $this->initialTerm = $value;
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
     * Sets the packageChain property value. A package chain view.
     * @param PackageChainView|null $value Value to set for the packageChain property.
    */
    public function setPackageChain(?PackageChainView $value): void {
        $this->packageChain = $value;
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
     * @param array<TemplatePackageProductView>|null $value Value to set for the products property.
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
     * Sets the tax property value. Gets or sets the tax percent.
     * @param float|null $value Value to set for the tax property.
    */
    public function setTax(?float $value): void {
        $this->tax = $value;
    }

    /**
     * Sets the templatePackageRules property value. Gets or sets the template package rules.
     * @param array<TemplatePackageRule>|null $value Value to set for the templatePackageRules property.
    */
    public function setTemplatePackageRules(?array $value): void {
        $this->templatePackageRules = $value;
    }

    /**
     * Sets the validFrom property value. Gets or sets the Date/Time of the valid from.
     * @param DateTime|null $value Value to set for the validFrom property.
    */
    public function setValidFrom(?DateTime $value): void {
        $this->validFrom = $value;
    }

    /**
     * Sets the validUntil property value. Gets or sets the Date/Time of the valid to.
     * @param DateTime|null $value Value to set for the validUntil property.
    */
    public function setValidUntil(?DateTime $value): void {
        $this->validUntil = $value;
    }

}
