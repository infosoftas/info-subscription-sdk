<?php

namespace Infosoft\InfoSubscription\Generated\Paymentdemand\Item;

use Infosoft\InfoSubscription\Generated\Models\AccountPaymentDemandView;
use Infosoft\InfoSubscription\Generated\Models\EnterprisePlanDemandView;
use Infosoft\InfoSubscription\Generated\Models\OrderPaymentDemandView;
use Infosoft\InfoSubscription\Generated\Models\PaymentDemandView;
use Infosoft\InfoSubscription\Generated\Models\SubscriptionPaymentDemandView;
use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes AccountPaymentDemandView, EnterprisePlanDemandView, OrderPaymentDemandView, PaymentDemandView, SubscriptionPaymentDemandView
*/
class PaymentdemandGetResponse implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var AccountPaymentDemandView|null $accountPaymentDemandView Composed type representation for type AccountPaymentDemandView
    */
    private ?AccountPaymentDemandView $accountPaymentDemandView = null;
    
    /**
     * @var EnterprisePlanDemandView|null $enterprisePlanDemandView Composed type representation for type EnterprisePlanDemandView
    */
    private ?EnterprisePlanDemandView $enterprisePlanDemandView = null;
    
    /**
     * @var OrderPaymentDemandView|null $orderPaymentDemandView Composed type representation for type OrderPaymentDemandView
    */
    private ?OrderPaymentDemandView $orderPaymentDemandView = null;
    
    /**
     * @var PaymentDemandView|null $paymentDemandView Composed type representation for type PaymentDemandView
    */
    private ?PaymentDemandView $paymentDemandView = null;
    
    /**
     * @var SubscriptionPaymentDemandView|null $subscriptionPaymentDemandView Composed type representation for type SubscriptionPaymentDemandView
    */
    private ?SubscriptionPaymentDemandView $subscriptionPaymentDemandView = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentdemandGetResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentdemandGetResponse {
        $result = new PaymentdemandGetResponse();
        return $result;
    }

    /**
     * Gets the AccountPaymentDemandView property value. Composed type representation for type AccountPaymentDemandView
     * @return AccountPaymentDemandView|null
    */
    public function getAccountPaymentDemandView(): ?AccountPaymentDemandView {
        return $this->accountPaymentDemandView;
    }

    /**
     * Gets the EnterprisePlanDemandView property value. Composed type representation for type EnterprisePlanDemandView
     * @return EnterprisePlanDemandView|null
    */
    public function getEnterprisePlanDemandView(): ?EnterprisePlanDemandView {
        return $this->enterprisePlanDemandView;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getAccountPaymentDemandView() !== null) {
            return $this->getAccountPaymentDemandView()->getFieldDeserializers();
        } else if ($this->getEnterprisePlanDemandView() !== null) {
            return $this->getEnterprisePlanDemandView()->getFieldDeserializers();
        } else if ($this->getOrderPaymentDemandView() !== null) {
            return $this->getOrderPaymentDemandView()->getFieldDeserializers();
        } else if ($this->getPaymentDemandView() !== null) {
            return $this->getPaymentDemandView()->getFieldDeserializers();
        } else if ($this->getSubscriptionPaymentDemandView() !== null) {
            return $this->getSubscriptionPaymentDemandView()->getFieldDeserializers();
        }
        return [];
    }

    /**
     * Gets the OrderPaymentDemandView property value. Composed type representation for type OrderPaymentDemandView
     * @return OrderPaymentDemandView|null
    */
    public function getOrderPaymentDemandView(): ?OrderPaymentDemandView {
        return $this->orderPaymentDemandView;
    }

    /**
     * Gets the PaymentDemandView property value. Composed type representation for type PaymentDemandView
     * @return PaymentDemandView|null
    */
    public function getPaymentDemandView(): ?PaymentDemandView {
        return $this->paymentDemandView;
    }

    /**
     * Gets the SubscriptionPaymentDemandView property value. Composed type representation for type SubscriptionPaymentDemandView
     * @return SubscriptionPaymentDemandView|null
    */
    public function getSubscriptionPaymentDemandView(): ?SubscriptionPaymentDemandView {
        return $this->subscriptionPaymentDemandView;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getAccountPaymentDemandView() !== null) {
            $writer->writeObjectValue(null, $this->getAccountPaymentDemandView());
        } else if ($this->getEnterprisePlanDemandView() !== null) {
            $writer->writeObjectValue(null, $this->getEnterprisePlanDemandView());
        } else if ($this->getOrderPaymentDemandView() !== null) {
            $writer->writeObjectValue(null, $this->getOrderPaymentDemandView());
        } else if ($this->getPaymentDemandView() !== null) {
            $writer->writeObjectValue(null, $this->getPaymentDemandView());
        } else if ($this->getSubscriptionPaymentDemandView() !== null) {
            $writer->writeObjectValue(null, $this->getSubscriptionPaymentDemandView());
        }
    }

    /**
     * Sets the AccountPaymentDemandView property value. Composed type representation for type AccountPaymentDemandView
     * @param AccountPaymentDemandView|null $value Value to set for the AccountPaymentDemandView property.
    */
    public function setAccountPaymentDemandView(?AccountPaymentDemandView $value): void {
        $this->accountPaymentDemandView = $value;
    }

    /**
     * Sets the EnterprisePlanDemandView property value. Composed type representation for type EnterprisePlanDemandView
     * @param EnterprisePlanDemandView|null $value Value to set for the EnterprisePlanDemandView property.
    */
    public function setEnterprisePlanDemandView(?EnterprisePlanDemandView $value): void {
        $this->enterprisePlanDemandView = $value;
    }

    /**
     * Sets the OrderPaymentDemandView property value. Composed type representation for type OrderPaymentDemandView
     * @param OrderPaymentDemandView|null $value Value to set for the OrderPaymentDemandView property.
    */
    public function setOrderPaymentDemandView(?OrderPaymentDemandView $value): void {
        $this->orderPaymentDemandView = $value;
    }

    /**
     * Sets the PaymentDemandView property value. Composed type representation for type PaymentDemandView
     * @param PaymentDemandView|null $value Value to set for the PaymentDemandView property.
    */
    public function setPaymentDemandView(?PaymentDemandView $value): void {
        $this->paymentDemandView = $value;
    }

    /**
     * Sets the SubscriptionPaymentDemandView property value. Composed type representation for type SubscriptionPaymentDemandView
     * @param SubscriptionPaymentDemandView|null $value Value to set for the SubscriptionPaymentDemandView property.
    */
    public function setSubscriptionPaymentDemandView(?SubscriptionPaymentDemandView $value): void {
        $this->subscriptionPaymentDemandView = $value;
    }

}
