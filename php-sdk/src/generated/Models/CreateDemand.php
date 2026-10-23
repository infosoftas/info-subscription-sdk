<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Parameters for demand creation, input varies by type.
*/
class CreateDemand implements Parsable 
{
    /**
     * @var CreateAccountPaymentDemand|null $accountDemand Parameters for creating "standalone" account demands.
    */
    private ?CreateAccountPaymentDemand $accountDemand = null;
    
    /**
     * @var CreateOrderPaymentDemand|null $orderDemand Class represents order demand parameters for manual creation via API
    */
    private ?CreateOrderPaymentDemand $orderDemand = null;
    
    /**
     * @var CreateSubscriptionPaymentDemand|null $subscriptionDemand Class represents subscription demand parameters for manual creation via API
    */
    private ?CreateSubscriptionPaymentDemand $subscriptionDemand = null;
    
    /**
     * @var DemandType|null $type Values that represent demand types.
    */
    private ?DemandType $type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateDemand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateDemand {
        return new CreateDemand();
    }

    /**
     * Gets the accountDemand property value. Parameters for creating "standalone" account demands.
     * @return CreateAccountPaymentDemand|null
    */
    public function getAccountDemand(): ?CreateAccountPaymentDemand {
        return $this->accountDemand;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountDemand' => fn(ParseNode $n) => $o->setAccountDemand($n->getObjectValue([CreateAccountPaymentDemand::class, 'createFromDiscriminatorValue'])),
            'orderDemand' => fn(ParseNode $n) => $o->setOrderDemand($n->getObjectValue([CreateOrderPaymentDemand::class, 'createFromDiscriminatorValue'])),
            'subscriptionDemand' => fn(ParseNode $n) => $o->setSubscriptionDemand($n->getObjectValue([CreateSubscriptionPaymentDemand::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(DemandType::class)),
        ];
    }

    /**
     * Gets the orderDemand property value. Class represents order demand parameters for manual creation via API
     * @return CreateOrderPaymentDemand|null
    */
    public function getOrderDemand(): ?CreateOrderPaymentDemand {
        return $this->orderDemand;
    }

    /**
     * Gets the subscriptionDemand property value. Class represents subscription demand parameters for manual creation via API
     * @return CreateSubscriptionPaymentDemand|null
    */
    public function getSubscriptionDemand(): ?CreateSubscriptionPaymentDemand {
        return $this->subscriptionDemand;
    }

    /**
     * Gets the type property value. Values that represent demand types.
     * @return DemandType|null
    */
    public function getType(): ?DemandType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accountDemand', $this->getAccountDemand());
        $writer->writeObjectValue('orderDemand', $this->getOrderDemand());
        $writer->writeObjectValue('subscriptionDemand', $this->getSubscriptionDemand());
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the accountDemand property value. Parameters for creating "standalone" account demands.
     * @param CreateAccountPaymentDemand|null $value Value to set for the accountDemand property.
    */
    public function setAccountDemand(?CreateAccountPaymentDemand $value): void {
        $this->accountDemand = $value;
    }

    /**
     * Sets the orderDemand property value. Class represents order demand parameters for manual creation via API
     * @param CreateOrderPaymentDemand|null $value Value to set for the orderDemand property.
    */
    public function setOrderDemand(?CreateOrderPaymentDemand $value): void {
        $this->orderDemand = $value;
    }

    /**
     * Sets the subscriptionDemand property value. Class represents subscription demand parameters for manual creation via API
     * @param CreateSubscriptionPaymentDemand|null $value Value to set for the subscriptionDemand property.
    */
    public function setSubscriptionDemand(?CreateSubscriptionPaymentDemand $value): void {
        $this->subscriptionDemand = $value;
    }

    /**
     * Sets the type property value. Values that represent demand types.
     * @param DemandType|null $value Value to set for the type property.
    */
    public function setType(?DemandType $value): void {
        $this->type = $value;
    }

}
