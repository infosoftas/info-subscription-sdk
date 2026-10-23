<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A settlement charge.
*/
class SettlementCharge implements Parsable 
{
    /**
     * @var string|null $accountTransactionId Gets or sets the identifier of the account transaction.
    */
    private ?string $accountTransactionId = null;
    
    /**
     * @var float|null $amount Gets or sets the amount.
    */
    private ?float $amount = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SettlementCharge
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SettlementCharge {
        return new SettlementCharge();
    }

    /**
     * Gets the accountTransactionId property value. Gets or sets the identifier of the account transaction.
     * @return string|null
    */
    public function getAccountTransactionId(): ?string {
        return $this->accountTransactionId;
    }

    /**
     * Gets the amount property value. Gets or sets the amount.
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountTransactionId' => fn(ParseNode $n) => $o->setAccountTransactionId($n->getStringValue()),
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accountTransactionId', $this->getAccountTransactionId());
        $writer->writeFloatValue('amount', $this->getAmount());
    }

    /**
     * Sets the accountTransactionId property value. Gets or sets the identifier of the account transaction.
     * @param string|null $value Value to set for the accountTransactionId property.
    */
    public function setAccountTransactionId(?string $value): void {
        $this->accountTransactionId = $value;
    }

    /**
     * Sets the amount property value. Gets or sets the amount.
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

}
