<?php

namespace Infosoft\InfoSubscription\Generated\Subscriber;

/**
 * Gets a list of subscribers.
*/
class SubscriberRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("ExternalId")
     * @var string|null $externalId Gets or sets the identifier of the external.
    */
    public ?string $externalId = null;
    
    /**
     * @QueryParameter("SubscriberNumber")
     * @var int|null $subscriberNumber Gets or sets the subscriber number.
    */
    public ?int $subscriberNumber = null;
    
    /**
     * Instantiates a new SubscriberRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $externalId Gets or sets the identifier of the external.
     * @param int|null $subscriberNumber Gets or sets the subscriber number.
    */
    public function __construct(?string $externalId = null, ?int $subscriberNumber = null) {
        $this->externalId = $externalId;
        $this->subscriberNumber = $subscriberNumber;
    }

}
