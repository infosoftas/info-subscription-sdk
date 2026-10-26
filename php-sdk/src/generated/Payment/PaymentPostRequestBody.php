<?php

namespace Infosoft\InfoSubscription\Generated\Payment;

use Infosoft\InfoSubscription\Generated\Models\CreatePayment;
use Infosoft\InfoSubscription\Generated\Models\UpdatePayment;
use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes CreatePayment, UpdatePayment
*/
class PaymentPostRequestBody implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var CreatePayment|null $createPayment Composed type representation for type CreatePayment
    */
    private ?CreatePayment $createPayment = null;
    
    /**
     * @var UpdatePayment|null $updatePayment Composed type representation for type UpdatePayment
    */
    private ?UpdatePayment $updatePayment = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentPostRequestBody {
        $result = new PaymentPostRequestBody();
        return $result;
    }

    /**
     * Gets the CreatePayment property value. Composed type representation for type CreatePayment
     * @return CreatePayment|null
    */
    public function getCreatePayment(): ?CreatePayment {
        return $this->createPayment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getCreatePayment() !== null) {
            return $this->getCreatePayment()->getFieldDeserializers();
        } else if ($this->getUpdatePayment() !== null) {
            return $this->getUpdatePayment()->getFieldDeserializers();
        }
        return [];
    }

    /**
     * Gets the UpdatePayment property value. Composed type representation for type UpdatePayment
     * @return UpdatePayment|null
    */
    public function getUpdatePayment(): ?UpdatePayment {
        return $this->updatePayment;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getCreatePayment() !== null) {
            $writer->writeObjectValue(null, $this->getCreatePayment());
        } else if ($this->getUpdatePayment() !== null) {
            $writer->writeObjectValue(null, $this->getUpdatePayment());
        }
    }

    /**
     * Sets the CreatePayment property value. Composed type representation for type CreatePayment
     * @param CreatePayment|null $value Value to set for the CreatePayment property.
    */
    public function setCreatePayment(?CreatePayment $value): void {
        $this->createPayment = $value;
    }

    /**
     * Sets the UpdatePayment property value. Composed type representation for type UpdatePayment
     * @param UpdatePayment|null $value Value to set for the UpdatePayment property.
    */
    public function setUpdatePayment(?UpdatePayment $value): void {
        $this->updatePayment = $value;
    }

}
