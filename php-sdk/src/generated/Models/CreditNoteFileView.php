<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreditNoteFileView implements Parsable 
{
    /**
     * @var string|null $fileId Gets or sets the file identifier.
    */
    private ?string $fileId = null;
    
    /**
     * @var string|null $id Gets or sets the credit note file identifier
    */
    private ?string $id = null;
    
    /**
     * @var string|null $mimeType Gets or sets the type of the credit note file
    */
    private ?string $mimeType = null;
    
    /**
     * @var string|null $name Gets or sets the name of the credit note file
    */
    private ?string $name = null;
    
    /**
     * @var string|null $relativeLink Gets or sets the relative link of the credit note file
    */
    private ?string $relativeLink = null;
    
    /**
     * @var string|null $type Gets or sets the type of the credit note file
    */
    private ?string $type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreditNoteFileView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreditNoteFileView {
        return new CreditNoteFileView();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fileId' => fn(ParseNode $n) => $o->setFileId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'mimeType' => fn(ParseNode $n) => $o->setMimeType($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'relativeLink' => fn(ParseNode $n) => $o->setRelativeLink($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileId property value. Gets or sets the file identifier.
     * @return string|null
    */
    public function getFileId(): ?string {
        return $this->fileId;
    }

    /**
     * Gets the id property value. Gets or sets the credit note file identifier
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the mimeType property value. Gets or sets the type of the credit note file
     * @return string|null
    */
    public function getMimeType(): ?string {
        return $this->mimeType;
    }

    /**
     * Gets the name property value. Gets or sets the name of the credit note file
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the relativeLink property value. Gets or sets the relative link of the credit note file
     * @return string|null
    */
    public function getRelativeLink(): ?string {
        return $this->relativeLink;
    }

    /**
     * Gets the type property value. Gets or sets the type of the credit note file
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fileId', $this->getFileId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('mimeType', $this->getMimeType());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('relativeLink', $this->getRelativeLink());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the fileId property value. Gets or sets the file identifier.
     * @param string|null $value Value to set for the fileId property.
    */
    public function setFileId(?string $value): void {
        $this->fileId = $value;
    }

    /**
     * Sets the id property value. Gets or sets the credit note file identifier
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the mimeType property value. Gets or sets the type of the credit note file
     * @param string|null $value Value to set for the mimeType property.
    */
    public function setMimeType(?string $value): void {
        $this->mimeType = $value;
    }

    /**
     * Sets the name property value. Gets or sets the name of the credit note file
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the relativeLink property value. Gets or sets the relative link of the credit note file
     * @param string|null $value Value to set for the relativeLink property.
    */
    public function setRelativeLink(?string $value): void {
        $this->relativeLink = $value;
    }

    /**
     * Sets the type property value. Gets or sets the type of the credit note file
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
