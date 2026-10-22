<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A settlement transactions.
*/
class SettlementTransactions implements Parsable 
{
    /**
     * @var array<SettlementAllowance>|null $consumedAllowances The account allowances consumed to settle the demand.
    */
    private ?array $consumedAllowances = null;
    
    /**
     * @var array<SettlementCharge>|null $generatedCharges The charges generated due to missing coverage on the demand.
    */
    private ?array $generatedCharges = null;
    
    /**
     * @var array<SettlementPayment>|null $sourcePayments The payments used to settle the parent demand.
    */
    private ?array $sourcePayments = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SettlementTransactions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SettlementTransactions {
        return new SettlementTransactions();
    }

    /**
     * Gets the consumedAllowances property value. The account allowances consumed to settle the demand.
     * @return array<SettlementAllowance>|null
    */
    public function getConsumedAllowances(): ?array {
        return $this->consumedAllowances;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'consumedAllowances' => fn(ParseNode $n) => $o->setConsumedAllowances($n->getCollectionOfObjectValues([SettlementAllowance::class, 'createFromDiscriminatorValue'])),
            'generatedCharges' => fn(ParseNode $n) => $o->setGeneratedCharges($n->getCollectionOfObjectValues([SettlementCharge::class, 'createFromDiscriminatorValue'])),
            'sourcePayments' => fn(ParseNode $n) => $o->setSourcePayments($n->getCollectionOfObjectValues([SettlementPayment::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the generatedCharges property value. The charges generated due to missing coverage on the demand.
     * @return array<SettlementCharge>|null
    */
    public function getGeneratedCharges(): ?array {
        return $this->generatedCharges;
    }

    /**
     * Gets the sourcePayments property value. The payments used to settle the parent demand.
     * @return array<SettlementPayment>|null
    */
    public function getSourcePayments(): ?array {
        return $this->sourcePayments;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('consumedAllowances', $this->getConsumedAllowances());
        $writer->writeCollectionOfObjectValues('generatedCharges', $this->getGeneratedCharges());
        $writer->writeCollectionOfObjectValues('sourcePayments', $this->getSourcePayments());
    }

    /**
     * Sets the consumedAllowances property value. The account allowances consumed to settle the demand.
     * @param array<SettlementAllowance>|null $value Value to set for the consumedAllowances property.
    */
    public function setConsumedAllowances(?array $value): void {
        $this->consumedAllowances = $value;
    }

    /**
     * Sets the generatedCharges property value. The charges generated due to missing coverage on the demand.
     * @param array<SettlementCharge>|null $value Value to set for the generatedCharges property.
    */
    public function setGeneratedCharges(?array $value): void {
        $this->generatedCharges = $value;
    }

    /**
     * Sets the sourcePayments property value. The payments used to settle the parent demand.
     * @param array<SettlementPayment>|null $value Value to set for the sourcePayments property.
    */
    public function setSourcePayments(?array $value): void {
        $this->sourcePayments = $value;
    }

}
