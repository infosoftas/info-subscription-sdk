<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Class to reference an invoice from the related Credit Note.
*/
class InvoiceReference implements Parsable 
{
    /**
     * @var string|null $externalIdentifier Gets the identifier of the external.
    */
    private ?string $externalIdentifier = null;
    
    /**
     * @var string|null $invoiceId Gets the identifier of the invoice.
    */
    private ?string $invoiceId = null;
    
    /**
     * @var int|null $invoiceNumber Gets the invoice number.
    */
    private ?int $invoiceNumber = null;
    
    /**
     * @var DateTime|null $issuedDate Gets the issued date.
    */
    private ?DateTime $issuedDate = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvoiceReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvoiceReference {
        return new InvoiceReference();
    }

    /**
     * Gets the externalIdentifier property value. Gets the identifier of the external.
     * @return string|null
    */
    public function getExternalIdentifier(): ?string {
        return $this->externalIdentifier;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'externalIdentifier' => fn(ParseNode $n) => $o->setExternalIdentifier($n->getStringValue()),
            'invoiceId' => fn(ParseNode $n) => $o->setInvoiceId($n->getStringValue()),
            'invoiceNumber' => fn(ParseNode $n) => $o->setInvoiceNumber($n->getIntegerValue()),
            'issuedDate' => fn(ParseNode $n) => $o->setIssuedDate($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the invoiceId property value. Gets the identifier of the invoice.
     * @return string|null
    */
    public function getInvoiceId(): ?string {
        return $this->invoiceId;
    }

    /**
     * Gets the invoiceNumber property value. Gets the invoice number.
     * @return int|null
    */
    public function getInvoiceNumber(): ?int {
        return $this->invoiceNumber;
    }

    /**
     * Gets the issuedDate property value. Gets the issued date.
     * @return DateTime|null
    */
    public function getIssuedDate(): ?DateTime {
        return $this->issuedDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('externalIdentifier', $this->getExternalIdentifier());
        $writer->writeStringValue('invoiceId', $this->getInvoiceId());
        $writer->writeIntegerValue('invoiceNumber', $this->getInvoiceNumber());
        $writer->writeDateTimeValue('issuedDate', $this->getIssuedDate());
    }

    /**
     * Sets the externalIdentifier property value. Gets the identifier of the external.
     * @param string|null $value Value to set for the externalIdentifier property.
    */
    public function setExternalIdentifier(?string $value): void {
        $this->externalIdentifier = $value;
    }

    /**
     * Sets the invoiceId property value. Gets the identifier of the invoice.
     * @param string|null $value Value to set for the invoiceId property.
    */
    public function setInvoiceId(?string $value): void {
        $this->invoiceId = $value;
    }

    /**
     * Sets the invoiceNumber property value. Gets the invoice number.
     * @param int|null $value Value to set for the invoiceNumber property.
    */
    public function setInvoiceNumber(?int $value): void {
        $this->invoiceNumber = $value;
    }

    /**
     * Sets the issuedDate property value. Gets the issued date.
     * @param DateTime|null $value Value to set for the issuedDate property.
    */
    public function setIssuedDate(?DateTime $value): void {
        $this->issuedDate = $value;
    }

}
