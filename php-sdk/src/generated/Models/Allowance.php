<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents an allowance (a discount/amount reduction) on an invoice.
*/
class Allowance extends LineDetail implements Parsable 
{
    /**
     * @var Amount|null $taxAmount An amount with a currency of the amount
    */
    private ?Amount $taxAmount = null;
    
    /**
     * @var TaxGroup|null $taxGroup Represents a tax type/group by a name, code and percentage.
    */
    private ?TaxGroup $taxGroup = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Allowance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Allowance {
        return new Allowance();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'taxAmount' => fn(ParseNode $n) => $o->setTaxAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'taxGroup' => fn(ParseNode $n) => $o->setTaxGroup($n->getObjectValue([TaxGroup::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the taxAmount property value. An amount with a currency of the amount
     * @return Amount|null
    */
    public function getTaxAmount(): ?Amount {
        return $this->taxAmount;
    }

    /**
     * Gets the taxGroup property value. Represents a tax type/group by a name, code and percentage.
     * @return TaxGroup|null
    */
    public function getTaxGroup(): ?TaxGroup {
        return $this->taxGroup;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('taxAmount', $this->getTaxAmount());
        $writer->writeObjectValue('taxGroup', $this->getTaxGroup());
    }

    /**
     * Sets the taxAmount property value. An amount with a currency of the amount
     * @param Amount|null $value Value to set for the taxAmount property.
    */
    public function setTaxAmount(?Amount $value): void {
        $this->taxAmount = $value;
    }

    /**
     * Sets the taxGroup property value. Represents a tax type/group by a name, code and percentage.
     * @param TaxGroup|null $value Value to set for the taxGroup property.
    */
    public function setTaxGroup(?TaxGroup $value): void {
        $this->taxGroup = $value;
    }

}
