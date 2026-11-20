<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Source\Subscriber;

/**
 * Gets the subscriber sources asynchronous.
*/
class SubscriberRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("SubscriberId")
     * @var string|null $subscriberId Gets or sets the identifier of the subscriber.
    */
    public ?string $subscriberId = null;
    
    /**
     * @QueryParameter("UserId")
     * @var string|null $userId Gets or sets the identifier of the user.
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new SubscriberRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $subscriberId Gets or sets the identifier of the subscriber.
     * @param string|null $userId Gets or sets the identifier of the user.
    */
    public function __construct(?string $subscriberId = null, ?string $userId = null) {
        $this->subscriberId = $subscriberId;
        $this->userId = $userId;
    }

}
