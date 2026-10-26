<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Order parameters for Mollie agreement registration.
*/
class MollieAgreementOrderParameters implements Parsable 
{
    /**
     * @var string|null $accountId The identifier that determines which Mollie account to use for this payment.
    */
    private ?string $accountId = null;
    
    /**
     * @var string|null $cancelUrl URL where the user is sent if he or she cancels the checkout.
    */
    private ?string $cancelUrl = null;
    
    /**
     * @var string|null $culture The culture code in a Mollie compatible format (affect the checkout window language).
    */
    private ?string $culture = null;
    
    /**
     * @var string|null $returnUrl URL where the user is sent when returned from Mollie after completing the checkout.
    */
    private ?string $returnUrl = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MollieAgreementOrderParameters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MollieAgreementOrderParameters {
        return new MollieAgreementOrderParameters();
    }

    /**
     * Gets the accountId property value. The identifier that determines which Mollie account to use for this payment.
     * @return string|null
    */
    public function getAccountId(): ?string {
        return $this->accountId;
    }

    /**
     * Gets the cancelUrl property value. URL where the user is sent if he or she cancels the checkout.
     * @return string|null
    */
    public function getCancelUrl(): ?string {
        return $this->cancelUrl;
    }

    /**
     * Gets the culture property value. The culture code in a Mollie compatible format (affect the checkout window language).
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
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'cancelUrl' => fn(ParseNode $n) => $o->setCancelUrl($n->getStringValue()),
            'culture' => fn(ParseNode $n) => $o->setCulture($n->getStringValue()),
            'returnUrl' => fn(ParseNode $n) => $o->setReturnUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the returnUrl property value. URL where the user is sent when returned from Mollie after completing the checkout.
     * @return string|null
    */
    public function getReturnUrl(): ?string {
        return $this->returnUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accountId', $this->getAccountId());
        $writer->writeStringValue('cancelUrl', $this->getCancelUrl());
        $writer->writeStringValue('culture', $this->getCulture());
        $writer->writeStringValue('returnUrl', $this->getReturnUrl());
    }

    /**
     * Sets the accountId property value. The identifier that determines which Mollie account to use for this payment.
     * @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value): void {
        $this->accountId = $value;
    }

    /**
     * Sets the cancelUrl property value. URL where the user is sent if he or she cancels the checkout.
     * @param string|null $value Value to set for the cancelUrl property.
    */
    public function setCancelUrl(?string $value): void {
        $this->cancelUrl = $value;
    }

    /**
     * Sets the culture property value. The culture code in a Mollie compatible format (affect the checkout window language).
     * @param string|null $value Value to set for the culture property.
    */
    public function setCulture(?string $value): void {
        $this->culture = $value;
    }

    /**
     * Sets the returnUrl property value. URL where the user is sent when returned from Mollie after completing the checkout.
     * @param string|null $value Value to set for the returnUrl property.
    */
    public function setReturnUrl(?string $value): void {
        $this->returnUrl = $value;
    }

}
