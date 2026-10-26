<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A settlement payment.
*/
class SettlementPayment implements Parsable 
{
    /**
     * @var float|null $paidAmount The original paid amount (not the amount used to settle the demand, it may be higher than the demand amount).
    */
    private ?float $paidAmount = null;
    
    /**
     * @var string|null $paymentId The identifier of the payment as it exists in the payment service.
    */
    private ?string $paymentId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SettlementPayment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SettlementPayment {
        return new SettlementPayment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'paidAmount' => fn(ParseNode $n) => $o->setPaidAmount($n->getFloatValue()),
            'paymentId' => fn(ParseNode $n) => $o->setPaymentId($n->getStringValue()),
        ];
    }

    /**
     * Gets the paidAmount property value. The original paid amount (not the amount used to settle the demand, it may be higher than the demand amount).
     * @return float|null
    */
    public function getPaidAmount(): ?float {
        return $this->paidAmount;
    }

    /**
     * Gets the paymentId property value. The identifier of the payment as it exists in the payment service.
     * @return string|null
    */
    public function getPaymentId(): ?string {
        return $this->paymentId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('paidAmount', $this->getPaidAmount());
        $writer->writeStringValue('paymentId', $this->getPaymentId());
    }

    /**
     * Sets the paidAmount property value. The original paid amount (not the amount used to settle the demand, it may be higher than the demand amount).
     * @param float|null $value Value to set for the paidAmount property.
    */
    public function setPaidAmount(?float $value): void {
        $this->paidAmount = $value;
    }

    /**
     * Sets the paymentId property value. The identifier of the payment as it exists in the payment service.
     * @param string|null $value Value to set for the paymentId property.
    */
    public function setPaymentId(?string $value): void {
        $this->paymentId = $value;
    }

}
