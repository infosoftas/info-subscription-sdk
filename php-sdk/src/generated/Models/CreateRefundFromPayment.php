<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Data for creating a new refund
*/
class CreateRefundFromPayment implements Parsable 
{
    /**
     * @var string|null $comment Gets or sets comment.
    */
    private ?string $comment = null;
    
    /**
     * @var string|null $externalReference Gets or sets external reference identifier.
    */
    private ?string $externalReference = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateRefundFromPayment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateRefundFromPayment {
        return new CreateRefundFromPayment();
    }

    /**
     * Gets the comment property value. Gets or sets comment.
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * Gets the externalReference property value. Gets or sets external reference identifier.
     * @return string|null
    */
    public function getExternalReference(): ?string {
        return $this->externalReference;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'externalReference' => fn(ParseNode $n) => $o->setExternalReference($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeStringValue('externalReference', $this->getExternalReference());
    }

    /**
     * Sets the comment property value. Gets or sets comment.
     * @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->comment = $value;
    }

    /**
     * Sets the externalReference property value. Gets or sets external reference identifier.
     * @param string|null $value Value to set for the externalReference property.
    */
    public function setExternalReference(?string $value): void {
        $this->externalReference = $value;
    }

}
