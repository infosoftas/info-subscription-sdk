<?php

namespace Infosoft\InfoSubscription\Generated\Payment\Item\Assignaccount;

use Infosoft\InfoSubscription\Generated\Payment\Item\Assignaccount\Item\WithSubscriberAccountItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /payment/{-id}/assignaccount
*/
class AssignaccountRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Infosoft/InfoSubscription/Generated.payment.item.assignaccount.item collection
     * @param string $subscriberAccountId The subscriber account identifier.
     * @return WithSubscriberAccountItemRequestBuilder
    */
    public function bySubscriberAccountId(string $subscriberAccountId): WithSubscriberAccountItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscriberAccountId'] = $subscriberAccountId;
        return new WithSubscriberAccountItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AssignaccountRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payment/{%2Did}/assignaccount');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
