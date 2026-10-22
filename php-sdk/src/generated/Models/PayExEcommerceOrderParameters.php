<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Order parameters for PayEx ecommerce agreement registration.
*/
class PayExEcommerceOrderParameters implements Parsable 
{
    /**
     * @var string|null $callbackUrl Gets or sets URL where the user is sent when returned from payex.
    */
    private ?string $callbackUrl = null;
    
    /**
     * @var string|null $cancelUrl Gets or sets URL where the user is sent if he or she presses the cancel button.
    */
    private ?string $cancelUrl = null;
    
    /**
     * @var string|null $completeUrl Gets or sets URL where the user is sent when payex ecomerce completed.
    */
    private ?string $completeUrl = null;
    
    /**
     * @var string|null $culture Gets or sets the culture code in a PayEx compatible format (affect the payment window language).
    */
    private ?string $culture = null;
    
    /**
     * @var string|null $payExAccountId Gets or sets the identifier that determines which PayEx account to use for this payment. If not specified the first available account will be used.
    */
    private ?string $payExAccountId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PayExEcommerceOrderParameters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PayExEcommerceOrderParameters {
        return new PayExEcommerceOrderParameters();
    }

    /**
     * Gets the callbackUrl property value. Gets or sets URL where the user is sent when returned from payex.
     * @return string|null
    */
    public function getCallbackUrl(): ?string {
        return $this->callbackUrl;
    }

    /**
     * Gets the cancelUrl property value. Gets or sets URL where the user is sent if he or she presses the cancel button.
     * @return string|null
    */
    public function getCancelUrl(): ?string {
        return $this->cancelUrl;
    }

    /**
     * Gets the completeUrl property value. Gets or sets URL where the user is sent when payex ecomerce completed.
     * @return string|null
    */
    public function getCompleteUrl(): ?string {
        return $this->completeUrl;
    }

    /**
     * Gets the culture property value. Gets or sets the culture code in a PayEx compatible format (affect the payment window language).
     * @return string|null
    */
    public function getCulture(): ?string {
        return $this->culture;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callbackUrl' => fn(ParseNode $n) => $o->setCallbackUrl($n->getStringValue()),
            'cancelUrl' => fn(ParseNode $n) => $o->setCancelUrl($n->getStringValue()),
            'completeUrl' => fn(ParseNode $n) => $o->setCompleteUrl($n->getStringValue()),
            'culture' => fn(ParseNode $n) => $o->setCulture($n->getStringValue()),
            'payExAccountId' => fn(ParseNode $n) => $o->setPayExAccountId($n->getStringValue()),
        ];
    }

    /**
     * Gets the payExAccountId property value. Gets or sets the identifier that determines which PayEx account to use for this payment. If not specified the first available account will be used.
     * @return string|null
    */
    public function getPayExAccountId(): ?string {
        return $this->payExAccountId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('callbackUrl', $this->getCallbackUrl());
        $writer->writeStringValue('cancelUrl', $this->getCancelUrl());
        $writer->writeStringValue('completeUrl', $this->getCompleteUrl());
        $writer->writeStringValue('culture', $this->getCulture());
        $writer->writeStringValue('payExAccountId', $this->getPayExAccountId());
    }

    /**
     * Sets the callbackUrl property value. Gets or sets URL where the user is sent when returned from payex.
     * @param string|null $value Value to set for the callbackUrl property.
    */
    public function setCallbackUrl(?string $value): void {
        $this->callbackUrl = $value;
    }

    /**
     * Sets the cancelUrl property value. Gets or sets URL where the user is sent if he or she presses the cancel button.
     * @param string|null $value Value to set for the cancelUrl property.
    */
    public function setCancelUrl(?string $value): void {
        $this->cancelUrl = $value;
    }

    /**
     * Sets the completeUrl property value. Gets or sets URL where the user is sent when payex ecomerce completed.
     * @param string|null $value Value to set for the completeUrl property.
    */
    public function setCompleteUrl(?string $value): void {
        $this->completeUrl = $value;
    }

    /**
     * Sets the culture property value. Gets or sets the culture code in a PayEx compatible format (affect the payment window language).
     * @param string|null $value Value to set for the culture property.
    */
    public function setCulture(?string $value): void {
        $this->culture = $value;
    }

    /**
     * Sets the payExAccountId property value. Gets or sets the identifier that determines which PayEx account to use for this payment. If not specified the first available account will be used.
     * @param string|null $value Value to set for the payExAccountId property.
    */
    public function setPayExAccountId(?string $value): void {
        $this->payExAccountId = $value;
    }

}
