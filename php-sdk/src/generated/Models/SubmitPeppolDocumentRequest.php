<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\EhfInvoice\Contracts\DocumentType;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Properties for submitting a document to the PEPPOL network.
*/
class SubmitPeppolDocumentRequest implements Parsable 
{
    /**
     * @var string|null $accountId The identifier of the configured account (currently only VaxTransfer Accounts are supported).
    */
    private ?string $accountId = null;
    
    /**
     * @var string|null $documentId The identifier of the document (used to retrieve it from the appropriate underlying service). Typically the InvoiceId or the CreditNoteId.
    */
    private ?string $documentId = null;
    
    /**
     * @var DocumentType|null $documentType Values that represent EHF file generation type.
    */
    private ?DocumentType $documentType = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubmitPeppolDocumentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubmitPeppolDocumentRequest {
        return new SubmitPeppolDocumentRequest();
    }

    /**
     * Gets the accountId property value. The identifier of the configured account (currently only VaxTransfer Accounts are supported).
     * @return string|null
    */
    public function getAccountId(): ?string {
        return $this->accountId;
    }

    /**
     * Gets the documentId property value. The identifier of the document (used to retrieve it from the appropriate underlying service). Typically the InvoiceId or the CreditNoteId.
     * @return string|null
    */
    public function getDocumentId(): ?string {
        return $this->documentId;
    }

    /**
     * Gets the documentType property value. Values that represent EHF file generation type.
     * @return DocumentType|null
    */
    public function getDocumentType(): ?DocumentType {
        return $this->documentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'documentId' => fn(ParseNode $n) => $o->setDocumentId($n->getStringValue()),
            'documentType' => fn(ParseNode $n) => $o->setDocumentType($n->getEnumValue(DocumentType::class)),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accountId', $this->getAccountId());
        $writer->writeStringValue('documentId', $this->getDocumentId());
        $writer->writeEnumValue('documentType', $this->getDocumentType());
    }

    /**
     * Sets the accountId property value. The identifier of the configured account (currently only VaxTransfer Accounts are supported).
     * @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value): void {
        $this->accountId = $value;
    }

    /**
     * Sets the documentId property value. The identifier of the document (used to retrieve it from the appropriate underlying service). Typically the InvoiceId or the CreditNoteId.
     * @param string|null $value Value to set for the documentId property.
    */
    public function setDocumentId(?string $value): void {
        $this->documentId = $value;
    }

    /**
     * Sets the documentType property value. Values that represent EHF file generation type.
     * @param DocumentType|null $value Value to set for the documentType property.
    */
    public function setDocumentType(?DocumentType $value): void {
        $this->documentType = $value;
    }

}
