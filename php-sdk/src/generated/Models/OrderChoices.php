<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents properties/choices that overrides/set options from the Template Subscription Plan.
*/
class OrderChoices implements Parsable 
{
    /**
     * @var bool|null $automaticStop Indicateswhether automatic cancellation should be applied following the initial subscription period.
    */
    private ?bool $automaticStop = null;
    
    /**
     * @var string|null $billingPlanId Gets or sets the identifier of the billing plan.
    */
    private ?string $billingPlanId = null;
    
    /**
     * @var Contract|null $contract A contract.
    */
    private ?Contract $contract = null;
    
    /**
     * @var string|null $enterprisePlanId Gets or sets the identifier of the enterprise plan.
    */
    private ?string $enterprisePlanId = null;
    
    /**
     * @var int|null $numberOfEditions Gets or sets the number of editions.
    */
    private ?int $numberOfEditions = null;
    
    /**
     * @var string|null $permanentDiscountId Gets or sets the identifier of the permanent discount.
    */
    private ?string $permanentDiscountId = null;
    
    /**
     * @var float|null $priceOverride Override the automatic plan price calculation with a specific price.
    */
    private ?float $priceOverride = null;
    
    /**
     * @var array<string>|null $products The products chosen from the specified template subscription plan.
    */
    private ?array $products = null;
    
    /**
     * @var DateTime|null $startTime The start time of the subscription, if not defined the current time will be used.
    */
    private ?DateTime $startTime = null;
    
    /**
     * @var int|null $units The number of units/copies of this plan - will be applied as a multipler for pricing and included products.
    */
    private ?int $units = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderChoices
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderChoices {
        return new OrderChoices();
    }

    /**
     * Gets the automaticStop property value. Indicateswhether automatic cancellation should be applied following the initial subscription period.
     * @return bool|null
    */
    public function getAutomaticStop(): ?bool {
        return $this->automaticStop;
    }

    /**
     * Gets the billingPlanId property value. Gets or sets the identifier of the billing plan.
     * @return string|null
    */
    public function getBillingPlanId(): ?string {
        return $this->billingPlanId;
    }

    /**
     * Gets the contract property value. A contract.
     * @return Contract|null
    */
    public function getContract(): ?Contract {
        return $this->contract;
    }

    /**
     * Gets the enterprisePlanId property value. Gets or sets the identifier of the enterprise plan.
     * @return string|null
    */
    public function getEnterprisePlanId(): ?string {
        return $this->enterprisePlanId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'automaticStop' => fn(ParseNode $n) => $o->setAutomaticStop($n->getBooleanValue()),
            'billingPlanId' => fn(ParseNode $n) => $o->setBillingPlanId($n->getStringValue()),
            'contract' => fn(ParseNode $n) => $o->setContract($n->getObjectValue([Contract::class, 'createFromDiscriminatorValue'])),
            'enterprisePlanId' => fn(ParseNode $n) => $o->setEnterprisePlanId($n->getStringValue()),
            'numberOfEditions' => fn(ParseNode $n) => $o->setNumberOfEditions($n->getIntegerValue()),
            'permanentDiscountId' => fn(ParseNode $n) => $o->setPermanentDiscountId($n->getStringValue()),
            'priceOverride' => fn(ParseNode $n) => $o->setPriceOverride($n->getFloatValue()),
            'products' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProducts($val);
            },
            'startTime' => fn(ParseNode $n) => $o->setStartTime($n->getDateTimeValue()),
            'units' => fn(ParseNode $n) => $o->setUnits($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the numberOfEditions property value. Gets or sets the number of editions.
     * @return int|null
    */
    public function getNumberOfEditions(): ?int {
        return $this->numberOfEditions;
    }

    /**
     * Gets the permanentDiscountId property value. Gets or sets the identifier of the permanent discount.
     * @return string|null
    */
    public function getPermanentDiscountId(): ?string {
        return $this->permanentDiscountId;
    }

    /**
     * Gets the priceOverride property value. Override the automatic plan price calculation with a specific price.
     * @return float|null
    */
    public function getPriceOverride(): ?float {
        return $this->priceOverride;
    }

    /**
     * Gets the products property value. The products chosen from the specified template subscription plan.
     * @return array<string>|null
    */
    public function getProducts(): ?array {
        return $this->products;
    }

    /**
     * Gets the startTime property value. The start time of the subscription, if not defined the current time will be used.
     * @return DateTime|null
    */
    public function getStartTime(): ?DateTime {
        return $this->startTime;
    }

    /**
     * Gets the units property value. The number of units/copies of this plan - will be applied as a multipler for pricing and included products.
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
        $writer->writeBooleanValue('automaticStop', $this->getAutomaticStop());
        $writer->writeStringValue('billingPlanId', $this->getBillingPlanId());
        $writer->writeObjectValue('contract', $this->getContract());
        $writer->writeStringValue('enterprisePlanId', $this->getEnterprisePlanId());
        $writer->writeIntegerValue('numberOfEditions', $this->getNumberOfEditions());
        $writer->writeStringValue('permanentDiscountId', $this->getPermanentDiscountId());
        $writer->writeFloatValue('priceOverride', $this->getPriceOverride());
        $writer->writeCollectionOfPrimitiveValues('products', $this->getProducts());
        $writer->writeDateTimeValue('startTime', $this->getStartTime());
        $writer->writeIntegerValue('units', $this->getUnits());
    }

    /**
     * Sets the automaticStop property value. Indicateswhether automatic cancellation should be applied following the initial subscription period.
     * @param bool|null $value Value to set for the automaticStop property.
    */
    public function setAutomaticStop(?bool $value): void {
        $this->automaticStop = $value;
    }

    /**
     * Sets the billingPlanId property value. Gets or sets the identifier of the billing plan.
     * @param string|null $value Value to set for the billingPlanId property.
    */
    public function setBillingPlanId(?string $value): void {
        $this->billingPlanId = $value;
    }

    /**
     * Sets the contract property value. A contract.
     * @param Contract|null $value Value to set for the contract property.
    */
    public function setContract(?Contract $value): void {
        $this->contract = $value;
    }

    /**
     * Sets the enterprisePlanId property value. Gets or sets the identifier of the enterprise plan.
     * @param string|null $value Value to set for the enterprisePlanId property.
    */
    public function setEnterprisePlanId(?string $value): void {
        $this->enterprisePlanId = $value;
    }

    /**
     * Sets the numberOfEditions property value. Gets or sets the number of editions.
     * @param int|null $value Value to set for the numberOfEditions property.
    */
    public function setNumberOfEditions(?int $value): void {
        $this->numberOfEditions = $value;
    }

    /**
     * Sets the permanentDiscountId property value. Gets or sets the identifier of the permanent discount.
     * @param string|null $value Value to set for the permanentDiscountId property.
    */
    public function setPermanentDiscountId(?string $value): void {
        $this->permanentDiscountId = $value;
    }

    /**
     * Sets the priceOverride property value. Override the automatic plan price calculation with a specific price.
     * @param float|null $value Value to set for the priceOverride property.
    */
    public function setPriceOverride(?float $value): void {
        $this->priceOverride = $value;
    }

    /**
     * Sets the products property value. The products chosen from the specified template subscription plan.
     * @param array<string>|null $value Value to set for the products property.
    */
    public function setProducts(?array $value): void {
        $this->products = $value;
    }

    /**
     * Sets the startTime property value. The start time of the subscription, if not defined the current time will be used.
     * @param DateTime|null $value Value to set for the startTime property.
    */
    public function setStartTime(?DateTime $value): void {
        $this->startTime = $value;
    }

    /**
     * Sets the units property value. The number of units/copies of this plan - will be applied as a multipler for pricing and included products.
     * @param int|null $value Value to set for the units property.
    */
    public function setUnits(?int $value): void {
        $this->units = $value;
    }

}
