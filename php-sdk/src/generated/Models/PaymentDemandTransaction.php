<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Billing\Contracts\Period;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents charge details when creating account demands
*/
class PaymentDemandTransaction implements Parsable 
{
    /**
     * @var string|null $currency The currency valid for the price. This must match the currency on the account.
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $description The description of the individual transaction.
    */
    private ?string $description = null;
    
    /**
     * @var Period|null $period Defines a time period, where both Start and End are inclusive. If only start is given, the period represents and instant in time (useful for instance defining single transactions with no time component).
    */
    private ?Period $period = null;
    
    /**
     * @var float|null $price The total price/amount of the line (NOT the unit price).
    */
    private ?float $price = null;
    
    /**
     * @var int|null $quantity The quantity of the product. If not defined defaults to 1.
    */
    private ?int $quantity = null;
    
    /**
     * @var array<CreateProductTaxDetail>|null $taxDetails A breakdown of how tax is divided for the transaction.
    */
    private ?array $taxDetails = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentDemandTransaction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentDemandTransaction {
        return new PaymentDemandTransaction();
    }

    /**
     * Gets the currency property value. The currency valid for the price. This must match the currency on the account.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the description property value. The description of the individual transaction.
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
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'period' => fn(ParseNode $n) => $o->setPeriod($n->getObjectValue([Period::class, 'createFromDiscriminatorValue'])),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getFloatValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'taxDetails' => fn(ParseNode $n) => $o->setTaxDetails($n->getCollectionOfObjectValues([CreateProductTaxDetail::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the period property value. Defines a time period, where both Start and End are inclusive. If only start is given, the period represents and instant in time (useful for instance defining single transactions with no time component).
     * @return Period|null
    */
    public function getPeriod(): ?Period {
        return $this->period;
    }

    /**
     * Gets the price property value. The total price/amount of the line (NOT the unit price).
     * @return float|null
    */
    public function getPrice(): ?float {
        return $this->price;
    }

    /**
     * Gets the quantity property value. The quantity of the product. If not defined defaults to 1.
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the taxDetails property value. A breakdown of how tax is divided for the transaction.
     * @return array<CreateProductTaxDetail>|null
    */
    public function getTaxDetails(): ?array {
        return $this->taxDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('period', $this->getPeriod());
        $writer->writeFloatValue('price', $this->getPrice());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeCollectionOfObjectValues('taxDetails', $this->getTaxDetails());
    }

    /**
     * Sets the currency property value. The currency valid for the price. This must match the currency on the account.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the description property value. The description of the individual transaction.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the period property value. Defines a time period, where both Start and End are inclusive. If only start is given, the period represents and instant in time (useful for instance defining single transactions with no time component).
     * @param Period|null $value Value to set for the period property.
    */
    public function setPeriod(?Period $value): void {
        $this->period = $value;
    }

    /**
     * Sets the price property value. The total price/amount of the line (NOT the unit price).
     * @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value): void {
        $this->price = $value;
    }

    /**
     * Sets the quantity property value. The quantity of the product. If not defined defaults to 1.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the taxDetails property value. A breakdown of how tax is divided for the transaction.
     * @param array<CreateProductTaxDetail>|null $value Value to set for the taxDetails property.
    */
    public function setTaxDetails(?array $value): void {
        $this->taxDetails = $value;
    }

}
