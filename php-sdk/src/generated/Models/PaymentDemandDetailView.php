<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Billing\Contracts\Period;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A payment demand detail view.
*/
class PaymentDemandDetailView implements Parsable 
{
    /**
     * @var float|null $amount The total amount on the detail/line (NOT the Unit amount).
    */
    private ?float $amount = null;
    
    /**
     * @var string|null $currency Gets or sets the currency.
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $nextSubscriptionId Gets or sets the identifier of the next subscription.
    */
    private ?string $nextSubscriptionId = null;
    
    /**
     * @var string|null $orderId The identifier of the order the detail is associated with (if any).
    */
    private ?string $orderId = null;
    
    /**
     * @var Period|null $period Defines a time period, where both Start and End are inclusive. If only start is given, the period represents and instant in time (useful for instance defining single transactions with no time component).
    */
    private ?Period $period = null;
    
    /**
     * @var int|null $quantity The quantity sold. If not defined defaults to 1.
    */
    private ?int $quantity = null;
    
    /**
     * @var string|null $subscriberId Gets or sets the identifier of the subscriber.
    */
    private ?string $subscriberId = null;
    
    /**
     * @var string|null $subscriptionId Gets or sets the identifier of the subscription.
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var array<ProductTaxDetailView>|null $taxDetails Gets or sets the tax details.
    */
    private ?array $taxDetails = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentDemandDetailView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentDemandDetailView {
        return new PaymentDemandDetailView();
    }

    /**
     * Gets the amount property value. The total amount on the detail/line (NOT the Unit amount).
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the currency property value. Gets or sets the currency.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'nextSubscriptionId' => fn(ParseNode $n) => $o->setNextSubscriptionId($n->getStringValue()),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'period' => fn(ParseNode $n) => $o->setPeriod($n->getObjectValue([Period::class, 'createFromDiscriminatorValue'])),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'taxDetails' => fn(ParseNode $n) => $o->setTaxDetails($n->getCollectionOfObjectValues([ProductTaxDetailView::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. Gets or sets the identifier.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the nextSubscriptionId property value. Gets or sets the identifier of the next subscription.
     * @return string|null
    */
    public function getNextSubscriptionId(): ?string {
        return $this->nextSubscriptionId;
    }

    /**
     * Gets the orderId property value. The identifier of the order the detail is associated with (if any).
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Gets the period property value. Defines a time period, where both Start and End are inclusive. If only start is given, the period represents and instant in time (useful for instance defining single transactions with no time component).
     * @return Period|null
    */
    public function getPeriod(): ?Period {
        return $this->period;
    }

    /**
     * Gets the quantity property value. The quantity sold. If not defined defaults to 1.
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the subscriberId property value. Gets or sets the identifier of the subscriber.
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the subscriptionId property value. Gets or sets the identifier of the subscription.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Gets the taxDetails property value. Gets or sets the tax details.
     * @return array<ProductTaxDetailView>|null
    */
    public function getTaxDetails(): ?array {
        return $this->taxDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('nextSubscriptionId', $this->getNextSubscriptionId());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeObjectValue('period', $this->getPeriod());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeCollectionOfObjectValues('taxDetails', $this->getTaxDetails());
    }

    /**
     * Sets the amount property value. The total amount on the detail/line (NOT the Unit amount).
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the currency property value. Gets or sets the currency.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the nextSubscriptionId property value. Gets or sets the identifier of the next subscription.
     * @param string|null $value Value to set for the nextSubscriptionId property.
    */
    public function setNextSubscriptionId(?string $value): void {
        $this->nextSubscriptionId = $value;
    }

    /**
     * Sets the orderId property value. The identifier of the order the detail is associated with (if any).
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

    /**
     * Sets the period property value. Defines a time period, where both Start and End are inclusive. If only start is given, the period represents and instant in time (useful for instance defining single transactions with no time component).
     * @param Period|null $value Value to set for the period property.
    */
    public function setPeriod(?Period $value): void {
        $this->period = $value;
    }

    /**
     * Sets the quantity property value. The quantity sold. If not defined defaults to 1.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the subscriberId property value. Gets or sets the identifier of the subscriber.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the subscriptionId property value. Gets or sets the identifier of the subscription.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->subscriptionId = $value;
    }

    /**
     * Sets the taxDetails property value. Gets or sets the tax details.
     * @param array<ProductTaxDetailView>|null $value Value to set for the taxDetails property.
    */
    public function setTaxDetails(?array $value): void {
        $this->taxDetails = $value;
    }

}
