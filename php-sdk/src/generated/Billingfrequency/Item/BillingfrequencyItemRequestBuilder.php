<?php

namespace Infosoft\InfoSubscription\Generated\Billingfrequency\Item;

use Exception;
use Http\Promise\Promise;
use Infosoft\InfoSubscription\Generated\Models\BillingFrequencyView;
use Infosoft\InfoSubscription\Generated\Models\ValidationResultModel;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /billingfrequency/{id}
*/
class BillingfrequencyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new BillingfrequencyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billingfrequency/{id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Gets a specific billing frequency based on its Id.
     * @param BillingfrequencyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BillingFrequencyView|null>
     * @throws Exception
    */
    public function get(?BillingfrequencyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ValidationResultModel::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BillingFrequencyView::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Gets a specific billing frequency based on its Id.
     * @param BillingfrequencyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?BillingfrequencyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return BillingfrequencyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): BillingfrequencyItemRequestBuilder {
        return new BillingfrequencyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
