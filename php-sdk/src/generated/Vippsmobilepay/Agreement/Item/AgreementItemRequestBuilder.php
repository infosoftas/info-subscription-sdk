<?php

namespace Infosoft\InfoSubscription\Generated\Vippsmobilepay\Agreement\Item;

use Infosoft\InfoSubscription\Generated\Vippsmobilepay\Agreement\Item\Remote\RemoteRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /vippsmobilepay/agreement/{id}
*/
class AgreementItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The remote property
    */
    public function remote(): RemoteRequestBuilder {
        return new RemoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AgreementItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/vippsmobilepay/agreement/{id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
