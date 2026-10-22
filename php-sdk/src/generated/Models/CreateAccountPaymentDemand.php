<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Parameters for creating "standalone" account demands.
*/
class CreateAccountPaymentDemand implements Parsable 
{
    /**
     * @var string|null $billingPlanId The billing plan used to schedule billing and subsequent dunning.
    */
    private ?string $billingPlanId = null;
    
    /**
     * @var string|null $description An overall description for the demand, used for some automated payment providers to give a short summary of what the payment is about.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $organizationId The organization the demand is issued for.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $paymentAgreementId The payment agreement used to process automatic payments and invocing.
    */
    private ?string $paymentAgreementId = null;
    
    /**
     * @var bool|null $settleAccountBalance Determine if any current account balance should be settled. If true existing charges and allowances will be included in addition to the given transactions.
    */
    private ?bool $settleAccountBalance = null;
    
    /**
     * @var string|null $subscriberAccountId The account the demand is to be charge on.
    */
    private ?string $subscriberAccountId = null;
    
    /**
     * @var string|null $subscriberId The subscriber. Must be the owner of the account.
    */
    private ?string $subscriberId = null;
    
    /**
     * @var array<PaymentDemandTransaction>|null $transactions A list of details/transactions/charges to apply to the paymentdemand, typically what the Subscriber is going to pay extra for.
    */
    private ?array $transactions = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateAccountPaymentDemand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateAccountPaymentDemand {
        return new CreateAccountPaymentDemand();
    }

    /**
     * Gets the billingPlanId property value. The billing plan used to schedule billing and subsequent dunning.
     * @return string|null
    */
    public function getBillingPlanId(): ?string {
        return $this->billingPlanId;
    }

    /**
     * Gets the description property value. An overall description for the demand, used for some automated payment providers to give a short summary of what the payment is about.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingPlanId' => fn(ParseNode $n) => $o->setBillingPlanId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'paymentAgreementId' => fn(ParseNode $n) => $o->setPaymentAgreementId($n->getStringValue()),
            'settleAccountBalance' => fn(ParseNode $n) => $o->setSettleAccountBalance($n->getBooleanValue()),
            'subscriberAccountId' => fn(ParseNode $n) => $o->setSubscriberAccountId($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'transactions' => fn(ParseNode $n) => $o->setTransactions($n->getCollectionOfObjectValues([PaymentDemandTransaction::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the organizationId property value. The organization the demand is issued for.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the paymentAgreementId property value. The payment agreement used to process automatic payments and invocing.
     * @return string|null
    */
    public function getPaymentAgreementId(): ?string {
        return $this->paymentAgreementId;
    }

    /**
     * Gets the settleAccountBalance property value. Determine if any current account balance should be settled. If true existing charges and allowances will be included in addition to the given transactions.
     * @return bool|null
    */
    public function getSettleAccountBalance(): ?bool {
        return $this->settleAccountBalance;
    }

    /**
     * Gets the subscriberAccountId property value. The account the demand is to be charge on.
     * @return string|null
    */
    public function getSubscriberAccountId(): ?string {
        return $this->subscriberAccountId;
    }

    /**
     * Gets the subscriberId property value. The subscriber. Must be the owner of the account.
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the transactions property value. A list of details/transactions/charges to apply to the paymentdemand, typically what the Subscriber is going to pay extra for.
     * @return array<PaymentDemandTransaction>|null
    */
    public function getTransactions(): ?array {
        return $this->transactions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('billingPlanId', $this->getBillingPlanId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('paymentAgreementId', $this->getPaymentAgreementId());
        $writer->writeBooleanValue('settleAccountBalance', $this->getSettleAccountBalance());
        $writer->writeStringValue('subscriberAccountId', $this->getSubscriberAccountId());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeCollectionOfObjectValues('transactions', $this->getTransactions());
    }

    /**
     * Sets the billingPlanId property value. The billing plan used to schedule billing and subsequent dunning.
     * @param string|null $value Value to set for the billingPlanId property.
    */
    public function setBillingPlanId(?string $value): void {
        $this->billingPlanId = $value;
    }

    /**
     * Sets the description property value. An overall description for the demand, used for some automated payment providers to give a short summary of what the payment is about.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the organizationId property value. The organization the demand is issued for.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the paymentAgreementId property value. The payment agreement used to process automatic payments and invocing.
     * @param string|null $value Value to set for the paymentAgreementId property.
    */
    public function setPaymentAgreementId(?string $value): void {
        $this->paymentAgreementId = $value;
    }

    /**
     * Sets the settleAccountBalance property value. Determine if any current account balance should be settled. If true existing charges and allowances will be included in addition to the given transactions.
     * @param bool|null $value Value to set for the settleAccountBalance property.
    */
    public function setSettleAccountBalance(?bool $value): void {
        $this->settleAccountBalance = $value;
    }

    /**
     * Sets the subscriberAccountId property value. The account the demand is to be charge on.
     * @param string|null $value Value to set for the subscriberAccountId property.
    */
    public function setSubscriberAccountId(?string $value): void {
        $this->subscriberAccountId = $value;
    }

    /**
     * Sets the subscriberId property value. The subscriber. Must be the owner of the account.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the transactions property value. A list of details/transactions/charges to apply to the paymentdemand, typically what the Subscriber is going to pay extra for.
     * @param array<PaymentDemandTransaction>|null $value Value to set for the transactions property.
    */
    public function setTransactions(?array $value): void {
        $this->transactions = $value;
    }

}
