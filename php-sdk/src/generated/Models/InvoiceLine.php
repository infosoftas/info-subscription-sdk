<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents a line on an invoice. Typically one or more purchased items
*/
class InvoiceLine implements Parsable 
{
    /**
     * @var array<Allowance>|null $allowances Gets the discounts applied to this invoiceline, i.e. 10% off a 100 NOK charge would havea Infosoft.S4.Invoice.Contracts.ReadModel.LineDetail with an amount of 10 NOK.
    */
    private ?array $allowances = null;
    
    /**
     * @var array<Charge>|null $charges Gets the charges applied to this invoiceline, i.e. 100 NOK for this product for one month..
    */
    private ?array $charges = null;
    
    /**
     * @var array<Charge>|null $fees Gets the fees applied to this invoiceline, i.e. 10 NOK because this is an expensive wayto distribute the product.
    */
    private ?array $fees = null;
    
    /**
     * @var string|null $id Gets the globally unique identifier for this line
    */
    private ?string $id = null;
    
    /**
     * @var int|null $lineNumber Gets the identifier of the line within this invoice
    */
    private ?int $lineNumber = null;
    
    /**
     * @var Period|null $period A period that associated the line with a time frame for a provided service/product.
    */
    private ?Period $period = null;
    
    /**
     * @var Amount|null $price An amount with a currency of the amount
    */
    private ?Amount $price = null;
    
    /**
     * @var int|null $quantity Gets the number of items for which this invoice line applies
    */
    private ?int $quantity = null;
    
    /**
     * @var array<TaxTotal>|null $taxTotals Gets the tax totals for this line, contains totals for each tax type/group in this line(based on the Allowances and Charges)
    */
    private ?array $taxTotals = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvoiceLine
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvoiceLine {
        return new InvoiceLine();
    }

    /**
     * Gets the allowances property value. Gets the discounts applied to this invoiceline, i.e. 10% off a 100 NOK charge would havea Infosoft.S4.Invoice.Contracts.ReadModel.LineDetail with an amount of 10 NOK.
     * @return array<Allowance>|null
    */
    public function getAllowances(): ?array {
        return $this->allowances;
    }

    /**
     * Gets the charges property value. Gets the charges applied to this invoiceline, i.e. 100 NOK for this product for one month..
     * @return array<Charge>|null
    */
    public function getCharges(): ?array {
        return $this->charges;
    }

    /**
     * Gets the fees property value. Gets the fees applied to this invoiceline, i.e. 10 NOK because this is an expensive wayto distribute the product.
     * @return array<Charge>|null
    */
    public function getFees(): ?array {
        return $this->fees;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowances' => fn(ParseNode $n) => $o->setAllowances($n->getCollectionOfObjectValues([Allowance::class, 'createFromDiscriminatorValue'])),
            'charges' => fn(ParseNode $n) => $o->setCharges($n->getCollectionOfObjectValues([Charge::class, 'createFromDiscriminatorValue'])),
            'fees' => fn(ParseNode $n) => $o->setFees($n->getCollectionOfObjectValues([Charge::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lineNumber' => fn(ParseNode $n) => $o->setLineNumber($n->getIntegerValue()),
            'period' => fn(ParseNode $n) => $o->setPeriod($n->getObjectValue([Period::class, 'createFromDiscriminatorValue'])),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'taxTotals' => fn(ParseNode $n) => $o->setTaxTotals($n->getCollectionOfObjectValues([TaxTotal::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. Gets the globally unique identifier for this line
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lineNumber property value. Gets the identifier of the line within this invoice
     * @return int|null
    */
    public function getLineNumber(): ?int {
        return $this->lineNumber;
    }

    /**
     * Gets the period property value. A period that associated the line with a time frame for a provided service/product.
     * @return Period|null
    */
    public function getPeriod(): ?Period {
        return $this->period;
    }

    /**
     * Gets the price property value. An amount with a currency of the amount
     * @return Amount|null
    */
    public function getPrice(): ?Amount {
        return $this->price;
    }

    /**
     * Gets the quantity property value. Gets the number of items for which this invoice line applies
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the taxTotals property value. Gets the tax totals for this line, contains totals for each tax type/group in this line(based on the Allowances and Charges)
     * @return array<TaxTotal>|null
    */
    public function getTaxTotals(): ?array {
        return $this->taxTotals;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('allowances', $this->getAllowances());
        $writer->writeCollectionOfObjectValues('charges', $this->getCharges());
        $writer->writeCollectionOfObjectValues('fees', $this->getFees());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeIntegerValue('lineNumber', $this->getLineNumber());
        $writer->writeObjectValue('period', $this->getPeriod());
        $writer->writeObjectValue('price', $this->getPrice());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeCollectionOfObjectValues('taxTotals', $this->getTaxTotals());
    }

    /**
     * Sets the allowances property value. Gets the discounts applied to this invoiceline, i.e. 10% off a 100 NOK charge would havea Infosoft.S4.Invoice.Contracts.ReadModel.LineDetail with an amount of 10 NOK.
     * @param array<Allowance>|null $value Value to set for the allowances property.
    */
    public function setAllowances(?array $value): void {
        $this->allowances = $value;
    }

    /**
     * Sets the charges property value. Gets the charges applied to this invoiceline, i.e. 100 NOK for this product for one month..
     * @param array<Charge>|null $value Value to set for the charges property.
    */
    public function setCharges(?array $value): void {
        $this->charges = $value;
    }

    /**
     * Sets the fees property value. Gets the fees applied to this invoiceline, i.e. 10 NOK because this is an expensive wayto distribute the product.
     * @param array<Charge>|null $value Value to set for the fees property.
    */
    public function setFees(?array $value): void {
        $this->fees = $value;
    }

    /**
     * Sets the id property value. Gets the globally unique identifier for this line
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lineNumber property value. Gets the identifier of the line within this invoice
     * @param int|null $value Value to set for the lineNumber property.
    */
    public function setLineNumber(?int $value): void {
        $this->lineNumber = $value;
    }

    /**
     * Sets the period property value. A period that associated the line with a time frame for a provided service/product.
     * @param Period|null $value Value to set for the period property.
    */
    public function setPeriod(?Period $value): void {
        $this->period = $value;
    }

    /**
     * Sets the price property value. An amount with a currency of the amount
     * @param Amount|null $value Value to set for the price property.
    */
    public function setPrice(?Amount $value): void {
        $this->price = $value;
    }

    /**
     * Sets the quantity property value. Gets the number of items for which this invoice line applies
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the taxTotals property value. Gets the tax totals for this line, contains totals for each tax type/group in this line(based on the Allowances and Charges)
     * @param array<TaxTotal>|null $value Value to set for the taxTotals property.
    */
    public function setTaxTotals(?array $value): void {
        $this->taxTotals = $value;
    }

}
