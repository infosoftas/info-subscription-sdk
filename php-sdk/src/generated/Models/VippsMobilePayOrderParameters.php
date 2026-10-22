<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Order parameters for Vipps|MobilePay agreement registration.
*/
class VippsMobilePayOrderParameters extends BaseVippsOrderParameters implements Parsable 
{
    /**
     * @var string|null $accountId (Recommended) The identifier of the VippsMobilePay account to use.             If not given an attempt will be made to resolve one based on the OrganizationId on the ordered subscription.
    */
    private ?string $accountId = null;
    
    /**
     * @var bool|null $generateSubscriberContact Indicates whether to attempt to generate a subscriber contact based on the profileinformation from Vipps MobilePay.
    */
    private ?bool $generateSubscriberContact = null;
    
    /**
     * @var string|null $profileScope The profile/userdata scope to require permission for. Given as a space separated list of values.
    */
    private ?string $profileScope = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VippsMobilePayOrderParameters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VippsMobilePayOrderParameters {
        return new VippsMobilePayOrderParameters();
    }

    /**
     * Gets the accountId property value. (Recommended) The identifier of the VippsMobilePay account to use.             If not given an attempt will be made to resolve one based on the OrganizationId on the ordered subscription.
     * @return string|null
    */
    public function getAccountId(): ?string {
        return $this->accountId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'generateSubscriberContact' => fn(ParseNode $n) => $o->setGenerateSubscriberContact($n->getBooleanValue()),
            'profileScope' => fn(ParseNode $n) => $o->setProfileScope($n->getStringValue()),
        ]);
    }

    /**
     * Gets the generateSubscriberContact property value. Indicates whether to attempt to generate a subscriber contact based on the profileinformation from Vipps MobilePay.
     * @return bool|null
    */
    public function getGenerateSubscriberContact(): ?bool {
        return $this->generateSubscriberContact;
    }

    /**
     * Gets the profileScope property value. The profile/userdata scope to require permission for. Given as a space separated list of values.
     * @return string|null
    */
    public function getProfileScope(): ?string {
        return $this->profileScope;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountId', $this->getAccountId());
        $writer->writeBooleanValue('generateSubscriberContact', $this->getGenerateSubscriberContact());
        $writer->writeStringValue('profileScope', $this->getProfileScope());
    }

    /**
     * Sets the accountId property value. (Recommended) The identifier of the VippsMobilePay account to use.             If not given an attempt will be made to resolve one based on the OrganizationId on the ordered subscription.
     * @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value): void {
        $this->accountId = $value;
    }

    /**
     * Sets the generateSubscriberContact property value. Indicates whether to attempt to generate a subscriber contact based on the profileinformation from Vipps MobilePay.
     * @param bool|null $value Value to set for the generateSubscriberContact property.
    */
    public function setGenerateSubscriberContact(?bool $value): void {
        $this->generateSubscriberContact = $value;
    }

    /**
     * Sets the profileScope property value. The profile/userdata scope to require permission for. Given as a space separated list of values.
     * @param string|null $value Value to set for the profileScope property.
    */
    public function setProfileScope(?string $value): void {
        $this->profileScope = $value;
    }

}
