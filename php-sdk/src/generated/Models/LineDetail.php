<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A line detail.
*/
class LineDetail implements Parsable 
{
    /**
     * @var array<string>|null $additionalTextDescriptions Gets the additional text descriptions.
    */
    private ?array $additionalTextDescriptions = null;
    
    /**
     * @var Amount|null $amount An amount with a currency of the amount
    */
    private ?Amount $amount = null;
    
    /**
     * @var string|null $text Gets the a free text description for the details
    */
    private ?string $text = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LineDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LineDetail {
        return new LineDetail();
    }

    /**
     * Gets the additionalTextDescriptions property value. Gets the additional text descriptions.
     * @return array<string>|null
    */
    public function getAdditionalTextDescriptions(): ?array {
        return $this->additionalTextDescriptions;
    }

    /**
     * Gets the amount property value. An amount with a currency of the amount
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalTextDescriptions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdditionalTextDescriptions($val);
            },
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
        ];
    }

    /**
     * Gets the text property value. Gets the a free text description for the details
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('additionalTextDescriptions', $this->getAdditionalTextDescriptions());
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeStringValue('text', $this->getText());
    }

    /**
     * Sets the additionalTextDescriptions property value. Gets the additional text descriptions.
     * @param array<string>|null $value Value to set for the additionalTextDescriptions property.
    */
    public function setAdditionalTextDescriptions(?array $value): void {
        $this->additionalTextDescriptions = $value;
    }

    /**
     * Sets the amount property value. An amount with a currency of the amount
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the text property value. Gets the a free text description for the details
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->text = $value;
    }

}
