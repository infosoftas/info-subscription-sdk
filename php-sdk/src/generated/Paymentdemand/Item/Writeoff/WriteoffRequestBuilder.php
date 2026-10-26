<?php

namespace Infosoft\InfoSubscription\Generated\Paymentdemand\Item\Writeoff;

use Exception;
use Http\Promise\Promise;
use Infosoft\InfoSubscription\Generated\Models\ValidationResultModel;
use Infosoft\InfoSubscription\Generated\Models\WriteOffPaymentDemand;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /paymentdemand/{id}/writeoff
*/
class WriteoffRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WriteoffRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/paymentdemand/{id}/writeoff');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Writes off the given payment demand.
     * @param WriteOffPaymentDemand $body Provides information needed to write off a payment demand (in full), without creating a credit note.
     * @param WriteoffRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(WriteOffPaymentDemand $body, ?WriteoffRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ValidationResultModel::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Writes off the given payment demand.
     * @param WriteOffPaymentDemand $body Provides information needed to write off a payment demand (in full), without creating a credit note.
     * @param WriteoffRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WriteOffPaymentDemand $body, ?WriteoffRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WriteoffRequestBuilder
    */
    public function withUrl(string $rawUrl): WriteoffRequestBuilder {
        return new WriteoffRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
