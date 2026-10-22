<?php

namespace Infosoft\InfoSubscription\Generated\Package;

/**
 * Get all packages.
*/
class PackageRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("BillingPlanId")
     * @var string|null $billingPlanId Gets or sets the identifier of the billing plan.
    */
    public ?string $billingPlanId = null;
    
    /**
     * @QueryParameter("Currency")
     * @var string|null $currency Gets or sets the currency.
    */
    public ?string $currency = null;
    
    /**
     * @QueryParameter("Disabled")
     * @var bool|null $disabled Gets or sets the disabled.
    */
    public ?bool $disabled = null;
    
    /**
     * @QueryParameter("Id")
     * @var string|null $id Gets or sets the identifier.
    */
    public ?string $id = null;
    
    /**
     * @QueryParameter("InitialTermType")
     * @var int|null $initialTermType Gets or sets the type of the initial term.
    */
    public ?int $initialTermType = null;
    
    /**
     * @QueryParameter("OrganizationId")
     * @var string|null $organizationId Gets or sets the identifier of the organization.
    */
    public ?string $organizationId = null;
    
    /**
     * @QueryParameter("OrganizationIdNull")
     * @var bool|null $organizationIdNull Gets or sets a value indicating whether the organization identifier null.
    */
    public ?bool $organizationIdNull = null;
    
    /**
     * @QueryParameter("OrganizationIdOrNull")
     * @var string|null $organizationIdOrNull Gets or sets the organization identifier or null.
    */
    public ?string $organizationIdOrNull = null;
    
    /**
     * @QueryParameter("Price")
     * @var float|null $price Gets or sets the price.
    */
    public ?float $price = null;
    
    /**
     * @QueryParameter("ProductId")
     * @var string|null $productId Gets or sets the identifier of the product.
    */
    public ?string $productId = null;
    
    /**
     * Instantiates a new PackageRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $billingPlanId Gets or sets the identifier of the billing plan.
     * @param string|null $currency Gets or sets the currency.
     * @param bool|null $disabled Gets or sets the disabled.
     * @param string|null $id Gets or sets the identifier.
     * @param int|null $initialTermType Gets or sets the type of the initial term.
     * @param string|null $organizationId Gets or sets the identifier of the organization.
     * @param bool|null $organizationIdNull Gets or sets a value indicating whether the organization identifier null.
     * @param string|null $organizationIdOrNull Gets or sets the organization identifier or null.
     * @param float|null $price Gets or sets the price.
     * @param string|null $productId Gets or sets the identifier of the product.
    */
    public function __construct(?string $billingPlanId = null, ?string $currency = null, ?bool $disabled = null, ?string $id = null, ?int $initialTermType = null, ?string $organizationId = null, ?bool $organizationIdNull = null, ?string $organizationIdOrNull = null, ?float $price = null, ?string $productId = null) {
        $this->billingPlanId = $billingPlanId;
        $this->currency = $currency;
        $this->disabled = $disabled;
        $this->id = $id;
        $this->initialTermType = $initialTermType;
        $this->organizationId = $organizationId;
        $this->organizationIdNull = $organizationIdNull;
        $this->organizationIdOrNull = $organizationIdOrNull;
        $this->price = $price;
        $this->productId = $productId;
    }

}
