<?php

namespace Infosoft\InfoSubscription\Generated\Vippsmobilepay;

use Infosoft\InfoSubscription\Generated\Vippsmobilepay\Agreement\AgreementRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /vippsmobilepay
*/
class VippsmobilepayRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The agreement property
    */
    public function agreement(): AgreementRequestBuilder {
        return new AgreementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new VippsmobilepayRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/vippsmobilepay');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
