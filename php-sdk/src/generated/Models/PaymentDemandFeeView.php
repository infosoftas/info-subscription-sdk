<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A payment demand fee view.
*/
class PaymentDemandFeeView implements Parsable 
{
    /**
     * @var float|null $amount Gets or sets the amount.
    */
    private ?float $amount = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var array<ProductTaxDetailView>|null $taxDetails Gets or sets the tax details.
    */
    private ?array $taxDetails = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentDemandFeeView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentDemandFeeView {
        return new PaymentDemandFeeView();
    }

    /**
     * Gets the amount property value. Gets or sets the amount.
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'taxDetails' => fn(ParseNode $n) => $o->setTaxDetails($n->getCollectionOfObjectValues([ProductTaxDetailView::class, 'createFromDiscriminatorValue'])),
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
     * Gets the taxDetails property value. Gets or sets the tax details.
     * @return array<ProductTaxDetailView>|null
    */
    public function getTaxDetails(): ?array {
        return $this->taxDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('taxDetails', $this->getTaxDetails());
    }

    /**
     * Sets the amount property value. Gets or sets the amount.
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the taxDetails property value. Gets or sets the tax details.
     * @param array<ProductTaxDetailView>|null $value Value to set for the taxDetails property.
    */
    public function setTaxDetails(?array $value): void {
        $this->taxDetails = $value;
    }

}
