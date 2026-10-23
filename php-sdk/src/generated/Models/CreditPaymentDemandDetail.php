<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A class that contains information about how to credit a specific payment demand detail.
*/
class CreditPaymentDemandDetail implements Parsable 
{
    /**
     * @var float|null $amount The amount to credit. In case it is null the entire charge will be credited. In case it is not null the remaining amount will be transfered to a new demand.
    */
    private ?float $amount = null;
    
    /**
     * @var string|null $detailId The identifier of the payment demand detail to credit.
    */
    private ?string $detailId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreditPaymentDemandDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreditPaymentDemandDetail {
        return new CreditPaymentDemandDetail();
    }

    /**
     * Gets the amount property value. The amount to credit. In case it is null the entire charge will be credited. In case it is not null the remaining amount will be transfered to a new demand.
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the detailId property value. The identifier of the payment demand detail to credit.
     * @return string|null
    */
    public function getDetailId(): ?string {
        return $this->detailId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'detailId' => fn(ParseNode $n) => $o->setDetailId($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeStringValue('detailId', $this->getDetailId());
    }

    /**
     * Sets the amount property value. The amount to credit. In case it is null the entire charge will be credited. In case it is not null the remaining amount will be transfered to a new demand.
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the detailId property value. The identifier of the payment demand detail to credit.
     * @param string|null $value Value to set for the detailId property.
    */
    public function setDetailId(?string $value): void {
        $this->detailId = $value;
    }

}
