<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Api\DataContracts\V1\Order\OrderTag;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Parameters that controls the flow of the ordering process such as what is ordered and HOW.
*/
class OrderCreate implements Parsable 
{
    /**
     * @var array<AdditionalProductOrder>|null $additionalProducts Additional products to include/buy with this order, in addition to the ones included in the defined template plan.
    */
    private ?array $additionalProducts = null;
    
    /**
     * @var string|null $externalSubscriberId An external identifier of the subscriber, typically from external CRM systems or similar.
    */
    private ?string $externalSubscriberId = null;
    
    /**
     * @var SubscriberContact|null $invoiceContact A subscriber contact.
    */
    private ?SubscriberContact $invoiceContact = null;
    
    /**
     * @var string|null $invoiceContactId The identifier of the subscriber contact used as the Invoice recipient/Invoice payer.
    */
    private ?string $invoiceContactId = null;
    
    /**
     * @var string|null $orderReference An optional order reference.
    */
    private ?string $orderReference = null;
    
    /**
     * @var string|null $organizationId The identifier of the organization that the subscription should be created for.If not set the first available organization will be choosen.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $paymentAgreementId The identifier of a payment agreement to use for the new subscription.
    */
    private ?string $paymentAgreementId = null;
    
    /**
     * @var PaymentAgreementParameters|null $paymentAgreementParameters A payment agreement order parameters.
    */
    private ?PaymentAgreementParameters $paymentAgreementParameters = null;
    
    /**
     * @var PlanSelection|null $planSelection Defines how a subscription plan is sourced. Exactly one of the three properties must be provided.
    */
    private ?PlanSelection $planSelection = null;
    
    /**
     * @var bool|null $settleAccountBalance Should this order settle existing account balance when when billed.
    */
    private ?bool $settleAccountBalance = null;
    
    /**
     * @var string|null $subscriberAccount The subscriber account the order (and subsequent subscription) should be associated with.             If not given it will be automatically determined based on the current system state.
    */
    private ?string $subscriberAccount = null;
    
    /**
     * @var string|null $subscriberId The identifier of the subscriber.
    */
    private ?string $subscriberId = null;
    
    /**
     * @var int|null $subscriberNumber The subscriber number (only define this if you are using your own number sequences).
    */
    private ?int $subscriberNumber = null;
    
    /**
     * @var OrderTag|null $tag The order tag.The entity that is used to store various types (TagType) of values ​​in a reporting service.
    */
    private ?OrderTag $tag = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderCreate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderCreate {
        return new OrderCreate();
    }

    /**
     * Gets the additionalProducts property value. Additional products to include/buy with this order, in addition to the ones included in the defined template plan.
     * @return array<AdditionalProductOrder>|null
    */
    public function getAdditionalProducts(): ?array {
        return $this->additionalProducts;
    }

    /**
     * Gets the externalSubscriberId property value. An external identifier of the subscriber, typically from external CRM systems or similar.
     * @return string|null
    */
    public function getExternalSubscriberId(): ?string {
        return $this->externalSubscriberId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalProducts' => fn(ParseNode $n) => $o->setAdditionalProducts($n->getCollectionOfObjectValues([AdditionalProductOrder::class, 'createFromDiscriminatorValue'])),
            'externalSubscriberId' => fn(ParseNode $n) => $o->setExternalSubscriberId($n->getStringValue()),
            'invoiceContact' => fn(ParseNode $n) => $o->setInvoiceContact($n->getObjectValue([SubscriberContact::class, 'createFromDiscriminatorValue'])),
            'invoiceContactId' => fn(ParseNode $n) => $o->setInvoiceContactId($n->getStringValue()),
            'orderReference' => fn(ParseNode $n) => $o->setOrderReference($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'paymentAgreementId' => fn(ParseNode $n) => $o->setPaymentAgreementId($n->getStringValue()),
            'paymentAgreementParameters' => fn(ParseNode $n) => $o->setPaymentAgreementParameters($n->getObjectValue([PaymentAgreementParameters::class, 'createFromDiscriminatorValue'])),
            'planSelection' => fn(ParseNode $n) => $o->setPlanSelection($n->getObjectValue([PlanSelection::class, 'createFromDiscriminatorValue'])),
            'settleAccountBalance' => fn(ParseNode $n) => $o->setSettleAccountBalance($n->getBooleanValue()),
            'subscriberAccount' => fn(ParseNode $n) => $o->setSubscriberAccount($n->getStringValue()),
            'subscriberId' => fn(ParseNode $n) => $o->setSubscriberId($n->getStringValue()),
            'subscriberNumber' => fn(ParseNode $n) => $o->setSubscriberNumber($n->getIntegerValue()),
            'tag' => fn(ParseNode $n) => $o->setTag($n->getObjectValue([OrderTag::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the invoiceContact property value. A subscriber contact.
     * @return SubscriberContact|null
    */
    public function getInvoiceContact(): ?SubscriberContact {
        return $this->invoiceContact;
    }

    /**
     * Gets the invoiceContactId property value. The identifier of the subscriber contact used as the Invoice recipient/Invoice payer.
     * @return string|null
    */
    public function getInvoiceContactId(): ?string {
        return $this->invoiceContactId;
    }

    /**
     * Gets the orderReference property value. An optional order reference.
     * @return string|null
    */
    public function getOrderReference(): ?string {
        return $this->orderReference;
    }

    /**
     * Gets the organizationId property value. The identifier of the organization that the subscription should be created for.If not set the first available organization will be choosen.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the paymentAgreementId property value. The identifier of a payment agreement to use for the new subscription.
     * @return string|null
    */
    public function getPaymentAgreementId(): ?string {
        return $this->paymentAgreementId;
    }

    /**
     * Gets the paymentAgreementParameters property value. A payment agreement order parameters.
     * @return PaymentAgreementParameters|null
    */
    public function getPaymentAgreementParameters(): ?PaymentAgreementParameters {
        return $this->paymentAgreementParameters;
    }

    /**
     * Gets the planSelection property value. Defines how a subscription plan is sourced. Exactly one of the three properties must be provided.
     * @return PlanSelection|null
    */
    public function getPlanSelection(): ?PlanSelection {
        return $this->planSelection;
    }

    /**
     * Gets the settleAccountBalance property value. Should this order settle existing account balance when when billed.
     * @return bool|null
    */
    public function getSettleAccountBalance(): ?bool {
        return $this->settleAccountBalance;
    }

    /**
     * Gets the subscriberAccount property value. The subscriber account the order (and subsequent subscription) should be associated with.             If not given it will be automatically determined based on the current system state.
     * @return string|null
    */
    public function getSubscriberAccount(): ?string {
        return $this->subscriberAccount;
    }

    /**
     * Gets the subscriberId property value. The identifier of the subscriber.
     * @return string|null
    */
    public function getSubscriberId(): ?string {
        return $this->subscriberId;
    }

    /**
     * Gets the subscriberNumber property value. The subscriber number (only define this if you are using your own number sequences).
     * @return int|null
    */
    public function getSubscriberNumber(): ?int {
        return $this->subscriberNumber;
    }

    /**
     * Gets the tag property value. The order tag.The entity that is used to store various types (TagType) of values ​​in a reporting service.
     * @return OrderTag|null
    */
    public function getTag(): ?OrderTag {
        return $this->tag;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('additionalProducts', $this->getAdditionalProducts());
        $writer->writeStringValue('externalSubscriberId', $this->getExternalSubscriberId());
        $writer->writeObjectValue('invoiceContact', $this->getInvoiceContact());
        $writer->writeStringValue('invoiceContactId', $this->getInvoiceContactId());
        $writer->writeStringValue('orderReference', $this->getOrderReference());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('paymentAgreementId', $this->getPaymentAgreementId());
        $writer->writeObjectValue('paymentAgreementParameters', $this->getPaymentAgreementParameters());
        $writer->writeObjectValue('planSelection', $this->getPlanSelection());
        $writer->writeBooleanValue('settleAccountBalance', $this->getSettleAccountBalance());
        $writer->writeStringValue('subscriberAccount', $this->getSubscriberAccount());
        $writer->writeStringValue('subscriberId', $this->getSubscriberId());
        $writer->writeIntegerValue('subscriberNumber', $this->getSubscriberNumber());
        $writer->writeObjectValue('tag', $this->getTag());
    }

    /**
     * Sets the additionalProducts property value. Additional products to include/buy with this order, in addition to the ones included in the defined template plan.
     * @param array<AdditionalProductOrder>|null $value Value to set for the additionalProducts property.
    */
    public function setAdditionalProducts(?array $value): void {
        $this->additionalProducts = $value;
    }

    /**
     * Sets the externalSubscriberId property value. An external identifier of the subscriber, typically from external CRM systems or similar.
     * @param string|null $value Value to set for the externalSubscriberId property.
    */
    public function setExternalSubscriberId(?string $value): void {
        $this->externalSubscriberId = $value;
    }

    /**
     * Sets the invoiceContact property value. A subscriber contact.
     * @param SubscriberContact|null $value Value to set for the invoiceContact property.
    */
    public function setInvoiceContact(?SubscriberContact $value): void {
        $this->invoiceContact = $value;
    }

    /**
     * Sets the invoiceContactId property value. The identifier of the subscriber contact used as the Invoice recipient/Invoice payer.
     * @param string|null $value Value to set for the invoiceContactId property.
    */
    public function setInvoiceContactId(?string $value): void {
        $this->invoiceContactId = $value;
    }

    /**
     * Sets the orderReference property value. An optional order reference.
     * @param string|null $value Value to set for the orderReference property.
    */
    public function setOrderReference(?string $value): void {
        $this->orderReference = $value;
    }

    /**
     * Sets the organizationId property value. The identifier of the organization that the subscription should be created for.If not set the first available organization will be choosen.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the paymentAgreementId property value. The identifier of a payment agreement to use for the new subscription.
     * @param string|null $value Value to set for the paymentAgreementId property.
    */
    public function setPaymentAgreementId(?string $value): void {
        $this->paymentAgreementId = $value;
    }

    /**
     * Sets the paymentAgreementParameters property value. A payment agreement order parameters.
     * @param PaymentAgreementParameters|null $value Value to set for the paymentAgreementParameters property.
    */
    public function setPaymentAgreementParameters(?PaymentAgreementParameters $value): void {
        $this->paymentAgreementParameters = $value;
    }

    /**
     * Sets the planSelection property value. Defines how a subscription plan is sourced. Exactly one of the three properties must be provided.
     * @param PlanSelection|null $value Value to set for the planSelection property.
    */
    public function setPlanSelection(?PlanSelection $value): void {
        $this->planSelection = $value;
    }

    /**
     * Sets the settleAccountBalance property value. Should this order settle existing account balance when when billed.
     * @param bool|null $value Value to set for the settleAccountBalance property.
    */
    public function setSettleAccountBalance(?bool $value): void {
        $this->settleAccountBalance = $value;
    }

    /**
     * Sets the subscriberAccount property value. The subscriber account the order (and subsequent subscription) should be associated with.             If not given it will be automatically determined based on the current system state.
     * @param string|null $value Value to set for the subscriberAccount property.
    */
    public function setSubscriberAccount(?string $value): void {
        $this->subscriberAccount = $value;
    }

    /**
     * Sets the subscriberId property value. The identifier of the subscriber.
     * @param string|null $value Value to set for the subscriberId property.
    */
    public function setSubscriberId(?string $value): void {
        $this->subscriberId = $value;
    }

    /**
     * Sets the subscriberNumber property value. The subscriber number (only define this if you are using your own number sequences).
     * @param int|null $value Value to set for the subscriberNumber property.
    */
    public function setSubscriberNumber(?int $value): void {
        $this->subscriberNumber = $value;
    }

    /**
     * Sets the tag property value. The order tag.The entity that is used to store various types (TagType) of values ​​in a reporting service.
     * @param OrderTag|null $value Value to set for the tag property.
    */
    public function setTag(?OrderTag $value): void {
        $this->tag = $value;
    }

}
