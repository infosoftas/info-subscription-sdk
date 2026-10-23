<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Api\DataContracts\V1\PaymentMethods;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A payment agreement order parameters.
*/
class PaymentAgreementParameters implements Parsable 
{
    /**
     * @var MollieAgreementOrderParameters|null $mollieParameters Order parameters for Mollie agreement registration.
    */
    private ?MollieAgreementOrderParameters $mollieParameters = null;
    
    /**
     * @var PayExEcommerceOrderParameters|null $payExEcommerceParameters Order parameters for PayEx ecommerce agreement registration.
    */
    private ?PayExEcommerceOrderParameters $payExEcommerceParameters = null;
    
    /**
     * @var PaymentMethods|null $paymentMethod Gets the payment methods.
    */
    private ?PaymentMethods $paymentMethod = null;
    
    /**
     * @var VippsMobilePayOrderParameters|null $vippsMobilePayParameters Order parameters for Vipps|MobilePay agreement registration.
    */
    private ?VippsMobilePayOrderParameters $vippsMobilePayParameters = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentAgreementParameters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentAgreementParameters {
        return new PaymentAgreementParameters();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'mollieParameters' => fn(ParseNode $n) => $o->setMollieParameters($n->getObjectValue([MollieAgreementOrderParameters::class, 'createFromDiscriminatorValue'])),
            'payExEcommerceParameters' => fn(ParseNode $n) => $o->setPayExEcommerceParameters($n->getObjectValue([PayExEcommerceOrderParameters::class, 'createFromDiscriminatorValue'])),
            'paymentMethod' => fn(ParseNode $n) => $o->setPaymentMethod($n->getEnumValue(PaymentMethods::class)),
            'vippsMobilePayParameters' => fn(ParseNode $n) => $o->setVippsMobilePayParameters($n->getObjectValue([VippsMobilePayOrderParameters::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the mollieParameters property value. Order parameters for Mollie agreement registration.
     * @return MollieAgreementOrderParameters|null
    */
    public function getMollieParameters(): ?MollieAgreementOrderParameters {
        return $this->mollieParameters;
    }

    /**
     * Gets the payExEcommerceParameters property value. Order parameters for PayEx ecommerce agreement registration.
     * @return PayExEcommerceOrderParameters|null
    */
    public function getPayExEcommerceParameters(): ?PayExEcommerceOrderParameters {
        return $this->payExEcommerceParameters;
    }

    /**
     * Gets the paymentMethod property value. Gets the payment methods.
     * @return PaymentMethods|null
    */
    public function getPaymentMethod(): ?PaymentMethods {
        return $this->paymentMethod;
    }

    /**
     * Gets the vippsMobilePayParameters property value. Order parameters for Vipps|MobilePay agreement registration.
     * @return VippsMobilePayOrderParameters|null
    */
    public function getVippsMobilePayParameters(): ?VippsMobilePayOrderParameters {
        return $this->vippsMobilePayParameters;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('mollieParameters', $this->getMollieParameters());
        $writer->writeObjectValue('payExEcommerceParameters', $this->getPayExEcommerceParameters());
        $writer->writeEnumValue('paymentMethod', $this->getPaymentMethod());
        $writer->writeObjectValue('vippsMobilePayParameters', $this->getVippsMobilePayParameters());
    }

    /**
     * Sets the mollieParameters property value. Order parameters for Mollie agreement registration.
     * @param MollieAgreementOrderParameters|null $value Value to set for the mollieParameters property.
    */
    public function setMollieParameters(?MollieAgreementOrderParameters $value): void {
        $this->mollieParameters = $value;
    }

    /**
     * Sets the payExEcommerceParameters property value. Order parameters for PayEx ecommerce agreement registration.
     * @param PayExEcommerceOrderParameters|null $value Value to set for the payExEcommerceParameters property.
    */
    public function setPayExEcommerceParameters(?PayExEcommerceOrderParameters $value): void {
        $this->payExEcommerceParameters = $value;
    }

    /**
     * Sets the paymentMethod property value. Gets the payment methods.
     * @param PaymentMethods|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?PaymentMethods $value): void {
        $this->paymentMethod = $value;
    }

    /**
     * Sets the vippsMobilePayParameters property value. Order parameters for Vipps|MobilePay agreement registration.
     * @param VippsMobilePayOrderParameters|null $value Value to set for the vippsMobilePayParameters property.
    */
    public function setVippsMobilePayParameters(?VippsMobilePayOrderParameters $value): void {
        $this->vippsMobilePayParameters = $value;
    }

}
