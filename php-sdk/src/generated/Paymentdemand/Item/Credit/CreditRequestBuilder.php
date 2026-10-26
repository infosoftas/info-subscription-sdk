<?php

namespace Infosoft\InfoSubscription\Generated\Paymentdemand\Item\Credit;

use Exception;
use Http\Promise\Promise;
use Infosoft\InfoSubscription\Generated\Models\CreditPaymentDemand;
use Infosoft\InfoSubscription\Generated\Models\ValidationResultModel;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /paymentdemand/{id}/credit
*/
class CreditRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CreditRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/paymentdemand/{id}/credit');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Depending on the type of demand being credited the rules for what is possible and what is not, are slightly different. .For instance it is not possible to re-issue/replace an Enterprise Plan Payment Demand using endpoint.
     * @param CreditPaymentDemand $body Provides information need to credit a payment demand and possibly generate a new demand to replace it.
     * @param CreditRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(CreditPaymentDemand $body, ?CreditRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ValidationResultModel::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Depending on the type of demand being credited the rules for what is possible and what is not, are slightly different. .For instance it is not possible to re-issue/replace an Enterprise Plan Payment Demand using endpoint.
     * @param CreditPaymentDemand $body Provides information need to credit a payment demand and possibly generate a new demand to replace it.
     * @param CreditRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreditPaymentDemand $body, ?CreditRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CreditRequestBuilder
    */
    public function withUrl(string $rawUrl): CreditRequestBuilder {
        return new CreditRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
