<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Order parameters for Vipps agreement registration.
*/
class BaseVippsOrderParameters implements Parsable 
{
    /**
     * @var string|null $customerPhoneNumber The phone number that should be pre-filled on the Vipps|MobilePay registration dialog, if not given an empty dialog will be shown.
    */
    private ?string $customerPhoneNumber = null;
    
    /**
     * @var bool|null $isApp Set this to true, if the agreement registration flow happens inside a mobile app. Generates an App deeplink that only works on mobile/app enabled devices. Refer to the upstream documentation for details.
    */
    private ?bool $isApp = null;
    
    /**
     * @var string|null $merchantAgreementUrl A URL that describes the merchants/organization subscription agreement and how to manage it (typically a self-service URL).
    */
    private ?string $merchantAgreementUrl = null;
    
    /**
     * @var string|null $merchantRedirectUrl The redirect url where the user should be sent to once the Vipps|MobilePay agreement registration flow has completed.
    */
    private ?string $merchantRedirectUrl = null;
    
    /**
     * @var ObserverOptions|null $observerOptions Order observer configuration options. At the current time only valid for VippsMobilePay processing.
    */
    private ?ObserverOptions $observerOptions = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BaseVippsOrderParameters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BaseVippsOrderParameters {
        return new BaseVippsOrderParameters();
    }

    /**
     * Gets the customerPhoneNumber property value. The phone number that should be pre-filled on the Vipps|MobilePay registration dialog, if not given an empty dialog will be shown.
     * @return string|null
    */
    public function getCustomerPhoneNumber(): ?string {
        return $this->customerPhoneNumber;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customerPhoneNumber' => fn(ParseNode $n) => $o->setCustomerPhoneNumber($n->getStringValue()),
            'isApp' => fn(ParseNode $n) => $o->setIsApp($n->getBooleanValue()),
            'merchantAgreementUrl' => fn(ParseNode $n) => $o->setMerchantAgreementUrl($n->getStringValue()),
            'merchantRedirectUrl' => fn(ParseNode $n) => $o->setMerchantRedirectUrl($n->getStringValue()),
            'observerOptions' => fn(ParseNode $n) => $o->setObserverOptions($n->getObjectValue([ObserverOptions::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isApp property value. Set this to true, if the agreement registration flow happens inside a mobile app. Generates an App deeplink that only works on mobile/app enabled devices. Refer to the upstream documentation for details.
     * @return bool|null
    */
    public function getIsApp(): ?bool {
        return $this->isApp;
    }

    /**
     * Gets the merchantAgreementUrl property value. A URL that describes the merchants/organization subscription agreement and how to manage it (typically a self-service URL).
     * @return string|null
    */
    public function getMerchantAgreementUrl(): ?string {
        return $this->merchantAgreementUrl;
    }

    /**
     * Gets the merchantRedirectUrl property value. The redirect url where the user should be sent to once the Vipps|MobilePay agreement registration flow has completed.
     * @return string|null
    */
    public function getMerchantRedirectUrl(): ?string {
        return $this->merchantRedirectUrl;
    }

    /**
     * Gets the observerOptions property value. Order observer configuration options. At the current time only valid for VippsMobilePay processing.
     * @return ObserverOptions|null
    */
    public function getObserverOptions(): ?ObserverOptions {
        return $this->observerOptions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('customerPhoneNumber', $this->getCustomerPhoneNumber());
        $writer->writeBooleanValue('isApp', $this->getIsApp());
        $writer->writeStringValue('merchantAgreementUrl', $this->getMerchantAgreementUrl());
        $writer->writeStringValue('merchantRedirectUrl', $this->getMerchantRedirectUrl());
        $writer->writeObjectValue('observerOptions', $this->getObserverOptions());
    }

    /**
     * Sets the customerPhoneNumber property value. The phone number that should be pre-filled on the Vipps|MobilePay registration dialog, if not given an empty dialog will be shown.
     * @param string|null $value Value to set for the customerPhoneNumber property.
    */
    public function setCustomerPhoneNumber(?string $value): void {
        $this->customerPhoneNumber = $value;
    }

    /**
     * Sets the isApp property value. Set this to true, if the agreement registration flow happens inside a mobile app. Generates an App deeplink that only works on mobile/app enabled devices. Refer to the upstream documentation for details.
     * @param bool|null $value Value to set for the isApp property.
    */
    public function setIsApp(?bool $value): void {
        $this->isApp = $value;
    }

    /**
     * Sets the merchantAgreementUrl property value. A URL that describes the merchants/organization subscription agreement and how to manage it (typically a self-service URL).
     * @param string|null $value Value to set for the merchantAgreementUrl property.
    */
    public function setMerchantAgreementUrl(?string $value): void {
        $this->merchantAgreementUrl = $value;
    }

    /**
     * Sets the merchantRedirectUrl property value. The redirect url where the user should be sent to once the Vipps|MobilePay agreement registration flow has completed.
     * @param string|null $value Value to set for the merchantRedirectUrl property.
    */
    public function setMerchantRedirectUrl(?string $value): void {
        $this->merchantRedirectUrl = $value;
    }

    /**
     * Sets the observerOptions property value. Order observer configuration options. At the current time only valid for VippsMobilePay processing.
     * @param ObserverOptions|null $value Value to set for the observerOptions property.
    */
    public function setObserverOptions(?ObserverOptions $value): void {
        $this->observerOptions = $value;
    }

}
