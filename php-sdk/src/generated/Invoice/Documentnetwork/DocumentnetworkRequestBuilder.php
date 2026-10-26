<?php

namespace Infosoft\InfoSubscription\Generated\Invoice\Documentnetwork;

use Infosoft\InfoSubscription\Generated\Invoice\Documentnetwork\Lookup\LookupRequestBuilder;
use Infosoft\InfoSubscription\Generated\Invoice\Documentnetwork\Submit\SubmitRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /invoice/documentnetwork
*/
class DocumentnetworkRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The lookup property
    */
    public function lookup(): LookupRequestBuilder {
        return new LookupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The submit property
    */
    public function submit(): SubmitRequestBuilder {
        return new SubmitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DocumentnetworkRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/invoice/documentnetwork');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
