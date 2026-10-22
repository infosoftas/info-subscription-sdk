<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A subscription view.
*/
class SubscriptionView implements Parsable 
{
    /**
     * @var BillingOptions|null $billingOptions Options for controlling the billing flow.
    */
    private ?BillingOptions $billingOptions = null;
    
    /**
     * @var string|null $cancellationCause Gets or sets the cancellation cause.
    */
    private ?string $cancellationCause = null;
    
    /**
     * @var DateTime|null $cancellationTime Gets or sets the cancellation time.
    */
    private ?DateTime $cancellationTime = null;
    
    /**
     * @var SubscriptionCancellationType|null $cancellationType Values that represent subscription cancellation types.
    */
    private ?SubscriptionCancellationType $cancellationType = null;
    
    /**
     * @var bool|null $cancelled Gets or sets a value indicating whether the cancelled.
    */
    private ?bool $cancelled = null;
    
    /**
     * @var ContractView|null $contract A contract view.
    */
    private ?ContractView $contract = null;
    
    /**
     * @var DateTime|null $endTime Gets or sets the end time.
    */
    private ?DateTime $endTime = null;
    
    /**
     * @var string|null $enterprisePlanId Gets or sets the identifier of the enterprise plan.
    */
    private ?string $enterprisePlanId = null;
    
    /**
     * @var float|null $fullPrice Gets or sets the full price.
    */
    private ?float $fullPrice = null;
    
    /**
     * @var string|null $id Gets or sets the identifier.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $invoiceContactId The identifier of the current invoice contact if one is present.
    */
    private ?string $invoiceContactId = null;
    
    /**
     * @var bool|null $isRenewed Gets or sets a value indicating whether this instance is renewed.
    */
    private ?bool $isRenewed = null;
    
    /**
     * @var string|null $nextInvoiceContactId Identifier of the next invoice contact if one has been scheduled.
    */
    private ?string $nextInvoiceContactId = null;
    
    /**
     * @var string|null $nextSubscription Gets or sets the next subscription.
    */
    private ?string $nextSubscription = null;
    
    /**
     * @var string|null $orderReference An optional order reference.
    */
    private ?string $orderReference = null;
    
    /**
     * @var string|null $organizationId The organization this subscription belongs to.
    */
    private ?string $organizationId = null;
    
    /**
     * @var SubscriptionPackageView|null $package A SubscriptionPackage view class.
    */
    private ?SubscriptionPackageView $package = null;
    
    /**
     * @var string|null $paymentAgreementId Gets or sets the identifier of the payment agreement.
    */
    private ?string $paymentAgreementId = null;
    
    /**
     * @var string|null $previousSubscription Gets or sets the previous subsription.
    */
    private ?string $previousSubscription = null;
    
    /**
     * @var float|null $price Gets or sets the price.
    */
    private ?float $price = null;
    
    /**
     * @var array<AdditionalProductView>|null $purchasedAdditionalProducts The purchasedAdditionalProducts property
    */
    private ?array $purchasedAdditionalProducts = null;
    
    /**
     * @var DateTime|null $renewedOn The time the subscription was renewed.
    */
    private ?DateTime $renewedOn = null;
    
    /**
     * @var string|null $sourceType Gets or sets the type of the source.
    */
    private ?string $sourceType = null;
    
    /**
     * @var DateTime|null $startTime Gets or sets the start time.
    */
    private ?DateTime $startTime = null;
    
    /**
     * @var string|null $subscriberAccount Gets or sets the subscriber account.
    */
    private ?string $subscriberAccount = null;
    
    /**
     * @var string|null $subscriberId Gets or sets the identifier of the subscriber.
    */
    private ?string $subscriberId = null;
    
    /**
     * @var float|null $tax Gets or sets the tax.
    */
    private ?float $tax = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionView {
        return new SubscriptionView();
    }

    /**
     * Gets the billingOptions property value. Options for controlling the billing flow.
     * @return BillingOptions|null
    */
    public function getBillingOptions(): ?BillingOptions {
        return $this->billingOptions;
    }

    /**
     * Gets the cancellationCause property value. Gets or sets the cancellation cause.
     * @return string|null
    */
    public function getCancellationCause(): ?string {
        return $this->cancellationCause;
    }

    /**
     * Gets the cancellationTime property value. Gets or sets the cancellation time.
     * @return DateTime|null
    */
    public function getCancellationTime(): ?DateTime {
        return $this->cancellationTime;
    }

    /**
     * Gets the cancellationType property value. Values that represent subscription cancellation types.
     * @return SubscriptionCancellationType|null
    */
    public function getCancellationType(): ?SubscriptionCancellationType {
        return $this->cancellationType;
    }

    /**
     * Gets the cancelled property value. Gets or sets a value indicating whether the cancelled.
     * @return bool|null
    */
    public function getCancelled(): ?bool {
        return $this->cancelled;
    }

    /**
     * Gets the contract property value. A contract view.
     * @return ContractView|null
    */
    public function getContract(): ?ContractView {
        return $this->contract;
    }

    /**
     * Gets the endTime property value. Gets or sets the end time.
     * @return DateTime|null
    */
    public function getEndTime(): ?DateTime {
        return $this->endTime;
    }

    /**
     * Gets the enterprisePlanId property value. Gets or sets the identifier of the enterprise plan.
     * @return string|null
    */
    public function getEnterprisePlanId(): ?string {
        return $this->enterprisePlanId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingOptions' => fn(ParseNode $n) => $o->setBillingOptions($n->getObjectValue([BillingOptions::class, 'createFromDiscriminatorValue'])),
            'cancellationCause' => fn(ParseNode $n) => $o->setCancellationCause($n->getStringValue()),
            'cancellationTime' => fn(ParseNode $n) => $o->setCancellationTime($n->getDateTimeValue()),
            'cancellationType' => fn(ParseNode $n) => $o->setCancellationType($n->getEnumValue(SubscriptionCancellationType::class)),
            'cancelled' => fn(ParseNode $n) => $o->setCancelled($n->getBooleanValue()),
            'contract' => fn(ParseNode $n) => $o->setContract($n->getObjectValue([ContractView::class, 'createFromDiscriminatorValue'])),
            'endTime' => fn(ParseNode $n) => $o->setEndTime($n->getDateTimeValue()),
            'enterprisePlanId' => fn(ParseNode $n) => $o->setEnterprisePlanId($n->getStringValue()),
            'fullPrice' => fn(ParseNode $n) => $o->setFullPrice($n->getFloatValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'invoiceContactId' => fn(ParseNode $n) => $o->setInvoiceContactId($n->getStringValue()),
            'isRenewed' => fn(ParseNode $n) => $o->setIsRenewed($n->getBooleanValue()),
            'nextInvoiceContactId' => fn(ParseNode $n) => $o->setNextInvoiceContactId($n->getStringValue()),
            'nextSubscription' => fn(ParseNode $n) => $o->setNextSubscription($n->getStringValue()),
            'orderReference' => fn(ParseNode $n) => $o->setOrderReference($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'package' => fn(ParseNode $n) => $o->setPackage($n->getObjectValue([SubscriptionPackageView::class, 'createFromDiscriminatorValue'])),
            'paymentAgreementId' => fn(ParseNode $n) => $o->setPaymentAgreementId($n->getStringValue()),
            'previousSubscription' => fn(ParseNode $n) => $o->setPreviousSubscription($n->getStringValue()),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getFloatValue()),
            'purchasedAdditionalProducts' => fn(ParseNode $n) => $o->setPurchasedAdditionalProducts($n->getCollectionOfObjectValues([AdditionalProductView::class, 'createFromDiscriminatorValue'])),
            'renewedOn' => fn(ParseNode $n) => $o->setRenewedOn($n->getDateTimeValue()),
            'sourceType' => fn(ParseNode $n) => $o->setSourceType($n->getStringValue()),
            'startTime' => fn(ParseNode $n) => $o->setStartTime($n->getDateTimeValue()),
            'subscriberAccount' => fn(ParseNode $n) => $o->setSubscriberAccount($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'tax' => fn(ParseNode $n) => $o->setTax($n->getFloatValue()),
        ];
    }

    /**
     * Gets the fullPrice property value. Gets or sets the full price.
     * @return float|null
    */
    public function getFullPrice(): ?float {
        return $this->fullPrice;
    }

    /**
     * Gets the id property value. Gets or sets the identifier.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the invoiceContactId property value. The identifier of the current invoice contact if one is present.
     * @return string|null
    */
    public function getInvoiceContactId(): ?string {
        return $this->invoiceContactId;
    }

    /**
     * Gets the isRenewed property value. Gets or sets a value indicating whether this instance is renewed.
     * @return bool|null
    */
    public function getIsRenewed(): ?bool {
        return $this->isRenewed;
    }

    /**
     * Gets the nextInvoiceContactId property value. Identifier of the next invoice contact if one has been scheduled.
     * @return string|null
    */
    public function getNextInvoiceContactId(): ?string {
        return $this->nextInvoiceContactId;
    }

    /**
     * Gets the nextSubscription property value. Gets or sets the next subscription.
     * @return string|null
    */
    public function getNextSubscription(): ?string {
        return $this->nextSubscription;
    }

    /**
     * Gets the orderReference property value. An optional order reference.
     * @return string|null
    */
    public function getOrderReference(): ?string {
        return $this->orderReference;
    }

    /**
     * Gets the organizationId property value. The organization this subscription belongs to.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the package property value. A SubscriptionPackage view class.
     * @return SubscriptionPackageView|null
    */
    public function getPackage(): ?SubscriptionPackageView {
        return $this->package;
    }

    /**
     * Gets the paymentAgreementId property value. Gets or sets the identifier of the payment agreement.
     * @return string|null
    */
    public function getPaymentAgreementId(): ?string {
        return $this->paymentAgreementId;
    }

    /**
     * Gets the previousSubscription property value. Gets or sets the previous subsription.
     * @return string|null
    */
    public function getPreviousSubscription(): ?string {
        return $this->previousSubscription;
    }

    /**
     * Gets the price property value. Gets or sets the price.
     * @return float|null
    */
    public function getPrice(): ?float {
        return $this->price;
    }

    /**
     * Gets the purchasedAdditionalProducts property value. The purchasedAdditionalProducts property
     * @return array<AdditionalProductView>|null
    */
    public function getPurchasedAdditionalProducts(): ?array {
        return $this->purchasedAdditionalProducts;
    }

    /**
     * Gets the renewedOn property value. The time the subscription was renewed.
     * @return DateTime|null
    */
    public function getRenewedOn(): ?DateTime {
        return $this->renewedOn;
    }

    /**
     * Gets the sourceType property value. Gets or sets the type of the source.
     * @return string|null
    */
    public function getSourceType(): ?string {
        return $this->sourceType;
    }

    /**
     * Gets the startTime property value. Gets or sets the start time.
     * @return DateTime|null
    */
    public function getStartTime(): ?DateTime {
        return $this->startTime;
    }

    /**
     * Gets the subscriberAccount property value. Gets or sets the subscriber account.
     * @return string|null
    */
    public function getSubscriberAccount(): ?string {
        return $this->subscriberAccount;
    }

    /**
     * Gets the subscriberId property value. Gets or sets the identifier of the subscriber.
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the tax property value. Gets or sets the tax.
     * @return float|null
    */
    public function getTax(): ?float {
        return $this->tax;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('billingOptions', $this->getBillingOptions());
        $writer->writeStringValue('cancellationCause', $this->getCancellationCause());
        $writer->writeDateTimeValue('cancellationTime', $this->getCancellationTime());
        $writer->writeEnumValue('cancellationType', $this->getCancellationType());
        $writer->writeBooleanValue('cancelled', $this->getCancelled());
        $writer->writeObjectValue('contract', $this->getContract());
        $writer->writeDateTimeValue('endTime', $this->getEndTime());
        $writer->writeStringValue('enterprisePlanId', $this->getEnterprisePlanId());
        $writer->writeFloatValue('fullPrice', $this->getFullPrice());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('invoiceContactId', $this->getInvoiceContactId());
        $writer->writeBooleanValue('isRenewed', $this->getIsRenewed());
        $writer->writeStringValue('nextInvoiceContactId', $this->getNextInvoiceContactId());
        $writer->writeStringValue('nextSubscription', $this->getNextSubscription());
        $writer->writeStringValue('orderReference', $this->getOrderReference());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeObjectValue('package', $this->getPackage());
        $writer->writeStringValue('paymentAgreementId', $this->getPaymentAgreementId());
        $writer->writeStringValue('previousSubscription', $this->getPreviousSubscription());
        $writer->writeFloatValue('price', $this->getPrice());
        $writer->writeCollectionOfObjectValues('purchasedAdditionalProducts', $this->getPurchasedAdditionalProducts());
        $writer->writeDateTimeValue('renewedOn', $this->getRenewedOn());
        $writer->writeStringValue('sourceType', $this->getSourceType());
        $writer->writeDateTimeValue('startTime', $this->getStartTime());
        $writer->writeStringValue('subscriberAccount', $this->getSubscriberAccount());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeFloatValue('tax', $this->getTax());
    }

    /**
     * Sets the billingOptions property value. Options for controlling the billing flow.
     * @param BillingOptions|null $value Value to set for the billingOptions property.
    */
    public function setBillingOptions(?BillingOptions $value): void {
        $this->billingOptions = $value;
    }

    /**
     * Sets the cancellationCause property value. Gets or sets the cancellation cause.
     * @param string|null $value Value to set for the cancellationCause property.
    */
    public function setCancellationCause(?string $value): void {
        $this->cancellationCause = $value;
    }

    /**
     * Sets the cancellationTime property value. Gets or sets the cancellation time.
     * @param DateTime|null $value Value to set for the cancellationTime property.
    */
    public function setCancellationTime(?DateTime $value): void {
        $this->cancellationTime = $value;
    }

    /**
     * Sets the cancellationType property value. Values that represent subscription cancellation types.
     * @param SubscriptionCancellationType|null $value Value to set for the cancellationType property.
    */
    public function setCancellationType(?SubscriptionCancellationType $value): void {
        $this->cancellationType = $value;
    }

    /**
     * Sets the cancelled property value. Gets or sets a value indicating whether the cancelled.
     * @param bool|null $value Value to set for the cancelled property.
    */
    public function setCancelled(?bool $value): void {
        $this->cancelled = $value;
    }

    /**
     * Sets the contract property value. A contract view.
     * @param ContractView|null $value Value to set for the contract property.
    */
    public function setContract(?ContractView $value): void {
        $this->contract = $value;
    }

    /**
     * Sets the endTime property value. Gets or sets the end time.
     * @param DateTime|null $value Value to set for the endTime property.
    */
    public function setEndTime(?DateTime $value): void {
        $this->endTime = $value;
    }

    /**
     * Sets the enterprisePlanId property value. Gets or sets the identifier of the enterprise plan.
     * @param string|null $value Value to set for the enterprisePlanId property.
    */
    public function setEnterprisePlanId(?string $value): void {
        $this->enterprisePlanId = $value;
    }

    /**
     * Sets the fullPrice property value. Gets or sets the full price.
     * @param float|null $value Value to set for the fullPrice property.
    */
    public function setFullPrice(?float $value): void {
        $this->fullPrice = $value;
    }

    /**
     * Sets the id property value. Gets or sets the identifier.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the invoiceContactId property value. The identifier of the current invoice contact if one is present.
     * @param string|null $value Value to set for the invoiceContactId property.
    */
    public function setInvoiceContactId(?string $value): void {
        $this->invoiceContactId = $value;
    }

    /**
     * Sets the isRenewed property value. Gets or sets a value indicating whether this instance is renewed.
     * @param bool|null $value Value to set for the isRenewed property.
    */
    public function setIsRenewed(?bool $value): void {
        $this->isRenewed = $value;
    }

    /**
     * Sets the nextInvoiceContactId property value. Identifier of the next invoice contact if one has been scheduled.
     * @param string|null $value Value to set for the nextInvoiceContactId property.
    */
    public function setNextInvoiceContactId(?string $value): void {
        $this->nextInvoiceContactId = $value;
    }

    /**
     * Sets the nextSubscription property value. Gets or sets the next subscription.
     * @param string|null $value Value to set for the nextSubscription property.
    */
    public function setNextSubscription(?string $value): void {
        $this->nextSubscription = $value;
    }

    /**
     * Sets the orderReference property value. An optional order reference.
     * @param string|null $value Value to set for the orderReference property.
    */
    public function setOrderReference(?string $value): void {
        $this->orderReference = $value;
    }

    /**
     * Sets the organizationId property value. The organization this subscription belongs to.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the package property value. A SubscriptionPackage view class.
     * @param SubscriptionPackageView|null $value Value to set for the package property.
    */
    public function setPackage(?SubscriptionPackageView $value): void {
        $this->package = $value;
    }

    /**
     * Sets the paymentAgreementId property value. Gets or sets the identifier of the payment agreement.
     * @param string|null $value Value to set for the paymentAgreementId property.
    */
    public function setPaymentAgreementId(?string $value): void {
        $this->paymentAgreementId = $value;
    }

    /**
     * Sets the previousSubscription property value. Gets or sets the previous subsription.
     * @param string|null $value Value to set for the previousSubscription property.
    */
    public function setPreviousSubscription(?string $value): void {
        $this->previousSubscription = $value;
    }

    /**
     * Sets the price property value. Gets or sets the price.
     * @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value): void {
        $this->price = $value;
    }

    /**
     * Sets the purchasedAdditionalProducts property value. The purchasedAdditionalProducts property
     * @param array<AdditionalProductView>|null $value Value to set for the purchasedAdditionalProducts property.
    */
    public function setPurchasedAdditionalProducts(?array $value): void {
        $this->purchasedAdditionalProducts = $value;
    }

    /**
     * Sets the renewedOn property value. The time the subscription was renewed.
     * @param DateTime|null $value Value to set for the renewedOn property.
    */
    public function setRenewedOn(?DateTime $value): void {
        $this->renewedOn = $value;
    }

    /**
     * Sets the sourceType property value. Gets or sets the type of the source.
     * @param string|null $value Value to set for the sourceType property.
    */
    public function setSourceType(?string $value): void {
        $this->sourceType = $value;
    }

    /**
     * Sets the startTime property value. Gets or sets the start time.
     * @param DateTime|null $value Value to set for the startTime property.
    */
    public function setStartTime(?DateTime $value): void {
        $this->startTime = $value;
    }

    /**
     * Sets the subscriberAccount property value. Gets or sets the subscriber account.
     * @param string|null $value Value to set for the subscriberAccount property.
    */
    public function setSubscriberAccount(?string $value): void {
        $this->subscriberAccount = $value;
    }

    /**
     * Sets the subscriberId property value. Gets or sets the identifier of the subscriber.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the tax property value. Gets or sets the tax.
     * @param float|null $value Value to set for the tax property.
    */
    public function setTax(?float $value): void {
        $this->tax = $value;
    }

}
