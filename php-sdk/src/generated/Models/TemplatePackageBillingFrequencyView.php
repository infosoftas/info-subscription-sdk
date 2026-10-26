<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A template package billing frequency view.
*/
class TemplatePackageBillingFrequencyView implements Parsable 
{
    /**
     * @var int|null $billingFrequencyId The billing frequency identifier.
    */
    private ?int $billingFrequencyId = null;
    
    /**
     * @var float|null $fullPrice The fullprice for this combination of products, billingfrequency and number of edition.
    */
    private ?float $fullPrice = null;
    
    /**
     * @var string|null $id The identifier.
    */
    private ?string $id = null;
    
    /**
     * @var int|null $numberOfEditions Optional number of editions.
    */
    private ?int $numberOfEditions = null;
    
    /**
     * @var string|null $templatePackageId The template package identifier.
    */
    private ?string $templatePackageId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TemplatePackageBillingFrequencyView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TemplatePackageBillingFrequencyView {
        return new TemplatePackageBillingFrequencyView();
    }

    /**
     * Gets the billingFrequencyId property value. The billing frequency identifier.
     * @return int|null
    */
    public function getBillingFrequencyId(): ?int {
        return $this->billingFrequencyId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingFrequencyId' => fn(ParseNode $n) => $o->setBillingFrequencyId($n->getIntegerValue()),
            'fullPrice' => fn(ParseNode $n) => $o->setFullPrice($n->getFloatValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'numberOfEditions' => fn(ParseNode $n) => $o->setNumberOfEditions($n->getIntegerValue()),
            'templatePackageId' => fn(ParseNode $n) => $o->setTemplatePackageId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fullPrice property value. The fullprice for this combination of products, billingfrequency and number of edition.
     * @return float|null
    */
    public function getFullPrice(): ?float {
        return $this->fullPrice;
    }

    /**
     * Gets the id property value. The identifier.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the numberOfEditions property value. Optional number of editions.
     * @return int|null
    */
    public function getNumberOfEditions(): ?int {
        return $this->numberOfEditions;
    }

    /**
     * Gets the templatePackageId property value. The template package identifier.
     * @return string|null
    */
    public function getTemplatePackageId(): ?string {
        return $this->templatePackageId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('billingFrequencyId', $this->getBillingFrequencyId());
        $writer->writeFloatValue('fullPrice', $this->getFullPrice());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeIntegerValue('numberOfEditions', $this->getNumberOfEditions());
        $writer->writeStringValue('templatePackageId', $this->getTemplatePackageId());
    }

    /**
     * Sets the billingFrequencyId property value. The billing frequency identifier.
     * @param int|null $value Value to set for the billingFrequencyId property.
    */
    public function setBillingFrequencyId(?int $value): void {
        $this->billingFrequencyId = $value;
    }

    /**
     * Sets the fullPrice property value. The fullprice for this combination of products, billingfrequency and number of edition.
     * @param float|null $value Value to set for the fullPrice property.
    */
    public function setFullPrice(?float $value): void {
        $this->fullPrice = $value;
    }

    /**
     * Sets the id property value. The identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the numberOfEditions property value. Optional number of editions.
     * @param int|null $value Value to set for the numberOfEditions property.
    */
    public function setNumberOfEditions(?int $value): void {
        $this->numberOfEditions = $value;
    }

    /**
     * Sets the templatePackageId property value. The template package identifier.
     * @param string|null $value Value to set for the templatePackageId property.
    */
    public function setTemplatePackageId(?string $value): void {
        $this->templatePackageId = $value;
    }

}
