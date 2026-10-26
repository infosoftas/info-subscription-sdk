<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\ProductService\Contracts\Contract;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A template package create.
*/
class TemplatePackageCreate implements Parsable 
{
    /**
     * @var array<string>|null $billingPlans A list ov available billing plan identifiers.
    */
    private ?array $billingPlans = null;
    
    /**
     * @var Contract|null $contract Values that represent contract.
    */
    private ?Contract $contract = null;
    
    /**
     * @var string|null $currency The currency of the package.
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $description An optional description.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $disabled Availability of the package.
    */
    private ?bool $disabled = null;
    
    /**
     * @var array<IncludedAdditionalProduct>|null $includedAdditionalProducts A list of included additional products.
    */
    private ?array $includedAdditionalProducts = null;
    
    /**
     * @var InitialPackageTerm|null $initialTerm An initial package term.
    */
    private ?InitialPackageTerm $initialTerm = null;
    
    /**
     * @var string|null $name The name of the package.
    */
    private ?string $name = null;
    
    /**
     * @var array<int>|null $numberOfEditions A list of available number of editions.
    */
    private ?array $numberOfEditions = null;
    
    /**
     * @var string|null $organizationId An optional organization identifier for the package.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $packageChainId An optional package chain identifier.
    */
    private ?string $packageChainId = null;
    
    /**
     * @var float|null $price The price for fixedprice-packages.
    */
    private ?float $price = null;
    
    /**
     * @var array<string>|null $products A list of available product identifiers included in the package.
    */
    private ?array $products = null;
    
    /**
     * @var string|null $renewalDescription An optional description if we want to override after renewal.
    */
    private ?string $renewalDescription = null;
    
    /**
     * @var string|null $renewalName An optional name if we want to override after renewal.
    */
    private ?string $renewalName = null;
    
    /**
     * @var array<TemplatePackageRule>|null $templatePackageRules A list of template package rules.
    */
    private ?array $templatePackageRules = null;
    
    /**
     * @var DateTime|null $validFrom An optional from date for validity.
    */
    private ?DateTime $validFrom = null;
    
    /**
     * @var DateTime|null $validUntil An optional until date for validity.
    */
    private ?DateTime $validUntil = null;
    
    /**
     * Instantiates a new TemplatePackageCreate and sets the default values.
    */
    public function __construct() {
        $this->setDisabled(false);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TemplatePackageCreate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TemplatePackageCreate {
        return new TemplatePackageCreate();
    }

    /**
     * Gets the billingPlans property value. A list ov available billing plan identifiers.
     * @return array<string>|null
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
     * Gets the currency property value. The currency of the package.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the description property value. An optional description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the disabled property value. Availability of the package.
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
            'billingPlans' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBillingPlans($val);
            },
            'contract' => fn(ParseNode $n) => $o->setContract($n->getObjectValue([Contract::class, 'createFromDiscriminatorValue'])),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'disabled' => fn(ParseNode $n) => $o->setDisabled($n->getBooleanValue()),
            'includedAdditionalProducts' => fn(ParseNode $n) => $o->setIncludedAdditionalProducts($n->getCollectionOfObjectValues([IncludedAdditionalProduct::class, 'createFromDiscriminatorValue'])),
            'initialTerm' => fn(ParseNode $n) => $o->setInitialTerm($n->getObjectValue([InitialPackageTerm::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'numberOfEditions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'int');
                }
                /** @var array<int>|null $val */
                $this->setNumberOfEditions($val);
            },
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'packageChainId' => fn(ParseNode $n) => $o->setPackageChainId($n->getStringValue()),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getFloatValue()),
            'products' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProducts($val);
            },
            'renewalDescription' => fn(ParseNode $n) => $o->setRenewalDescription($n->getStringValue()),
            'renewalName' => fn(ParseNode $n) => $o->setRenewalName($n->getStringValue()),
            'templatePackageRules' => fn(ParseNode $n) => $o->setTemplatePackageRules($n->getCollectionOfObjectValues([TemplatePackageRule::class, 'createFromDiscriminatorValue'])),
            'validFrom' => fn(ParseNode $n) => $o->setValidFrom($n->getDateTimeValue()),
            'validUntil' => fn(ParseNode $n) => $o->setValidUntil($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the includedAdditionalProducts property value. A list of included additional products.
     * @return array<IncludedAdditionalProduct>|null
    */
    public function getIncludedAdditionalProducts(): ?array {
        return $this->includedAdditionalProducts;
    }

    /**
     * Gets the initialTerm property value. An initial package term.
     * @return InitialPackageTerm|null
    */
    public function getInitialTerm(): ?InitialPackageTerm {
        return $this->initialTerm;
    }

    /**
     * Gets the name property value. The name of the package.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the numberOfEditions property value. A list of available number of editions.
     * @return array<int>|null
    */
    public function getNumberOfEditions(): ?array {
        return $this->numberOfEditions;
    }

    /**
     * Gets the organizationId property value. An optional organization identifier for the package.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the packageChainId property value. An optional package chain identifier.
     * @return string|null
    */
    public function getPackageChainId(): ?string {
        return $this->packageChainId;
    }

    /**
     * Gets the price property value. The price for fixedprice-packages.
     * @return float|null
    */
    public function getPrice(): ?float {
        return $this->price;
    }

    /**
     * Gets the products property value. A list of available product identifiers included in the package.
     * @return array<string>|null
    */
    public function getProducts(): ?array {
        return $this->products;
    }

    /**
     * Gets the renewalDescription property value. An optional description if we want to override after renewal.
     * @return string|null
    */
    public function getRenewalDescription(): ?string {
        return $this->renewalDescription;
    }

    /**
     * Gets the renewalName property value. An optional name if we want to override after renewal.
     * @return string|null
    */
    public function getRenewalName(): ?string {
        return $this->renewalName;
    }

    /**
     * Gets the templatePackageRules property value. A list of template package rules.
     * @return array<TemplatePackageRule>|null
    */
    public function getTemplatePackageRules(): ?array {
        return $this->templatePackageRules;
    }

    /**
     * Gets the validFrom property value. An optional from date for validity.
     * @return DateTime|null
    */
    public function getValidFrom(): ?DateTime {
        return $this->validFrom;
    }

    /**
     * Gets the validUntil property value. An optional until date for validity.
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
        $writer->writeCollectionOfPrimitiveValues('billingPlans', $this->getBillingPlans());
        $writer->writeObjectValue('contract', $this->getContract());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('disabled', $this->getDisabled());
        $writer->writeCollectionOfObjectValues('includedAdditionalProducts', $this->getIncludedAdditionalProducts());
        $writer->writeObjectValue('initialTerm', $this->getInitialTerm());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('numberOfEditions', $this->getNumberOfEditions());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('packageChainId', $this->getPackageChainId());
        $writer->writeFloatValue('price', $this->getPrice());
        $writer->writeCollectionOfPrimitiveValues('products', $this->getProducts());
        $writer->writeStringValue('renewalDescription', $this->getRenewalDescription());
        $writer->writeStringValue('renewalName', $this->getRenewalName());
        $writer->writeCollectionOfObjectValues('templatePackageRules', $this->getTemplatePackageRules());
        $writer->writeDateTimeValue('validFrom', $this->getValidFrom());
        $writer->writeDateTimeValue('validUntil', $this->getValidUntil());
    }

    /**
     * Sets the billingPlans property value. A list ov available billing plan identifiers.
     * @param array<string>|null $value Value to set for the billingPlans property.
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
     * Sets the currency property value. The currency of the package.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the description property value. An optional description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the disabled property value. Availability of the package.
     * @param bool|null $value Value to set for the disabled property.
    */
    public function setDisabled(?bool $value): void {
        $this->disabled = $value;
    }

    /**
     * Sets the includedAdditionalProducts property value. A list of included additional products.
     * @param array<IncludedAdditionalProduct>|null $value Value to set for the includedAdditionalProducts property.
    */
    public function setIncludedAdditionalProducts(?array $value): void {
        $this->includedAdditionalProducts = $value;
    }

    /**
     * Sets the initialTerm property value. An initial package term.
     * @param InitialPackageTerm|null $value Value to set for the initialTerm property.
    */
    public function setInitialTerm(?InitialPackageTerm $value): void {
        $this->initialTerm = $value;
    }

    /**
     * Sets the name property value. The name of the package.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the numberOfEditions property value. A list of available number of editions.
     * @param array<int>|null $value Value to set for the numberOfEditions property.
    */
    public function setNumberOfEditions(?array $value): void {
        $this->numberOfEditions = $value;
    }

    /**
     * Sets the organizationId property value. An optional organization identifier for the package.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the packageChainId property value. An optional package chain identifier.
     * @param string|null $value Value to set for the packageChainId property.
    */
    public function setPackageChainId(?string $value): void {
        $this->packageChainId = $value;
    }

    /**
     * Sets the price property value. The price for fixedprice-packages.
     * @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value): void {
        $this->price = $value;
    }

    /**
     * Sets the products property value. A list of available product identifiers included in the package.
     * @param array<string>|null $value Value to set for the products property.
    */
    public function setProducts(?array $value): void {
        $this->products = $value;
    }

    /**
     * Sets the renewalDescription property value. An optional description if we want to override after renewal.
     * @param string|null $value Value to set for the renewalDescription property.
    */
    public function setRenewalDescription(?string $value): void {
        $this->renewalDescription = $value;
    }

    /**
     * Sets the renewalName property value. An optional name if we want to override after renewal.
     * @param string|null $value Value to set for the renewalName property.
    */
    public function setRenewalName(?string $value): void {
        $this->renewalName = $value;
    }

    /**
     * Sets the templatePackageRules property value. A list of template package rules.
     * @param array<TemplatePackageRule>|null $value Value to set for the templatePackageRules property.
    */
    public function setTemplatePackageRules(?array $value): void {
        $this->templatePackageRules = $value;
    }

    /**
     * Sets the validFrom property value. An optional from date for validity.
     * @param DateTime|null $value Value to set for the validFrom property.
    */
    public function setValidFrom(?DateTime $value): void {
        $this->validFrom = $value;
    }

    /**
     * Sets the validUntil property value. An optional until date for validity.
     * @param DateTime|null $value Value to set for the validUntil property.
    */
    public function setValidUntil(?DateTime $value): void {
        $this->validUntil = $value;
    }

}
