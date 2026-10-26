<?php

namespace Infosoft\InfoSubscription\Generated\Order;

/**
 * Get all orders regardless of their state.
*/
class OrderRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("Id")
     * @var string|null $id Gets or sets the identifier.
    */
    public ?string $id = null;
    
    /**
     * @QueryParameter("SubscriberId")
     * @var string|null $subscriberId Gets or sets the identifier of the subscriber.
    */
    public ?string $subscriberId = null;
    
    /**
     * Instantiates a new OrderRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $id Gets or sets the identifier.
     * @param string|null $subscriberId Gets or sets the identifier of the subscriber.
    */
    public function __construct(?string $id = null, ?string $subscriberId = null) {
        $this->id = $id;
        $this->subscriberId = $subscriberId;
    }

}
