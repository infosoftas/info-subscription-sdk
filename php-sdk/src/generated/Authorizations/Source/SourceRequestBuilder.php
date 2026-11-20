<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Source;

use Infosoft\InfoSubscription\Generated\Authorizations\Source\Account\AccountRequestBuilder;
use Infosoft\InfoSubscription\Generated\Authorizations\Source\Emaildomain\EmaildomainRequestBuilder;
use Infosoft\InfoSubscription\Generated\Authorizations\Source\External\ExternalRequestBuilder;
use Infosoft\InfoSubscription\Generated\Authorizations\Source\Subscriber\SubscriberRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /authorizations/source
*/
class SourceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The account property
    */
    public function account(): AccountRequestBuilder {
        return new AccountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The emaildomain property
    */
    public function emaildomain(): EmaildomainRequestBuilder {
        return new EmaildomainRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The external property
    */
    public function external(): ExternalRequestBuilder {
        return new ExternalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscriber property
    */
    public function subscriber(): SubscriberRequestBuilder {
        return new SubscriberRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SourceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/authorizations/source');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
