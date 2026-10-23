<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Class represents a Credit Note (a document that reverses or corrects an invoice and inherites most of invoice's properties)
*/
class CreditNote extends InvoiceBase implements Parsable 
{
    /**
     * @var Amount|null $creditedAmount An amount with a currency of the amount
    */
    private ?Amount $creditedAmount = null;
    
    /**
     * @var string|null $description Description of the Credit Note
    */
    private ?string $description = null;
    
    /**
     * @var InvoiceReference|null $invoiceReference Class to reference an invoice from the related Credit Note.
    */
    private ?InvoiceReference $invoiceReference = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreditNote
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreditNote {
        return new CreditNote();
    }

    /**
     * Gets the creditedAmount property value. An amount with a currency of the amount
     * @return Amount|null
    */
    public function getCreditedAmount(): ?Amount {
        return $this->creditedAmount;
    }

    /**
     * Gets the description property value. Description of the Credit Note
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
        return array_merge(parent::getFieldDeserializers(), [
            'creditedAmount' => fn(ParseNode $n) => $o->setCreditedAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'invoiceReference' => fn(ParseNode $n) => $o->setInvoiceReference($n->getObjectValue([InvoiceReference::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the invoiceReference property value. Class to reference an invoice from the related Credit Note.
     * @return InvoiceReference|null
    */
    public function getInvoiceReference(): ?InvoiceReference {
        return $this->invoiceReference;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('creditedAmount', $this->getCreditedAmount());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('invoiceReference', $this->getInvoiceReference());
    }

    /**
     * Sets the creditedAmount property value. An amount with a currency of the amount
     * @param Amount|null $value Value to set for the creditedAmount property.
    */
    public function setCreditedAmount(?Amount $value): void {
        $this->creditedAmount = $value;
    }

    /**
     * Sets the description property value. Description of the Credit Note
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the invoiceReference property value. Class to reference an invoice from the related Credit Note.
     * @param InvoiceReference|null $value Value to set for the invoiceReference property.
    */
    public function setInvoiceReference(?InvoiceReference $value): void {
        $this->invoiceReference = $value;
    }

}
