<?php

namespace Infosoft\InfoSubscription\Generated\Payment;

use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Payments\Contracts\PaymentState;

/**
 * Get payments with optional filtering.
*/
class PaymentRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("Id")
     * @var string|null $id If set will be used to filter by the Id - this is equivalent to getting a specific payment. Note settings this will still return a collection of payments but just with one instance.
    */
    public ?string $id = null;
    
    /**
     * @QueryParameter("OrganizationId")
     * @var string|null $organizationId If set will be used to filter the Organization of the payment.
    */
    public ?string $organizationId = null;
    
    /**
     * @QueryParameter("State")
     * @var PaymentState|null $state If set will be used to filter on the state of the payment.
    */
    public ?PaymentState $state = null;
    
    /**
     * @QueryParameter("SubscriberId")
     * @var string|null $subscriberId If set will be used to filter the Subscriber of the payment. Note some payments may not have a subscriber on them and will not be included.
    */
    public ?string $subscriberId = null;
    
    /**
     * Instantiates a new PaymentRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $id If set will be used to filter by the Id - this is equivalent to getting a specific payment. Note settings this will still return a collection of payments but just with one instance.
     * @param string|null $organizationId If set will be used to filter the Organization of the payment.
     * @param PaymentState|null $state If set will be used to filter on the state of the payment.
     * @param string|null $subscriberId If set will be used to filter the Subscriber of the payment. Note some payments may not have a subscriber on them and will not be included.
    */
    public function __construct(?string $id = null, ?string $organizationId = null, ?PaymentState $state = null, ?string $subscriberId = null) {
        $this->id = $id;
        $this->organizationId = $organizationId;
        $this->state = $state;
        $this->subscriberId = $subscriberId;
    }

}
