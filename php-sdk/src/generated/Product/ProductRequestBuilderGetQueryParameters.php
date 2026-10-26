<?php

namespace Infosoft\InfoSubscription\Generated\Product;

/**
 * Get all products.
*/
class ProductRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("CategoryId")
     * @var string|null $categoryId Gets or sets the identifier of the category.
    */
    public ?string $categoryId = null;
    
    /**
     * @QueryParameter("ExternalPartNo")
     * @var string|null $externalPartNo Gets or sets the external part no.
    */
    public ?string $externalPartNo = null;
    
    /**
     * @QueryParameter("Id")
     * @var string|null $id Gets or sets the identifier.
    */
    public ?string $id = null;
    
    /**
     * @QueryParameter("OrganizationId")
     * @var string|null $organizationId Gets or sets the identifier of the organization.
    */
    public ?string $organizationId = null;
    
    /**
     * @QueryParameter("PartNo")
     * @var string|null $partNo Gets or sets the part no.
    */
    public ?string $partNo = null;
    
    /**
     * Instantiates a new ProductRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $categoryId Gets or sets the identifier of the category.
     * @param string|null $externalPartNo Gets or sets the external part no.
     * @param string|null $id Gets or sets the identifier.
     * @param string|null $organizationId Gets or sets the identifier of the organization.
     * @param string|null $partNo Gets or sets the part no.
    */
    public function __construct(?string $categoryId = null, ?string $externalPartNo = null, ?string $id = null, ?string $organizationId = null, ?string $partNo = null) {
        $this->categoryId = $categoryId;
        $this->externalPartNo = $externalPartNo;
        $this->id = $id;
        $this->organizationId = $organizationId;
        $this->partNo = $partNo;
    }

}
