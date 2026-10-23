<?php

namespace Infosoft\InfoSubscription\Generated\Billingfrequency;

use Exception;
use Http\Promise\Promise;
use Infosoft\InfoSubscription\Generated\Billingfrequency\Item\BillingfrequencyItemRequestBuilder;
use Infosoft\InfoSubscription\Generated\Models\BillingFrequencyView;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /billingfrequency
*/
class BillingfrequencyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Infosoft/InfoSubscription/Generated.billingfrequency.item collection
     * @param int $id The billing frequency identifier.
     * @return BillingfrequencyItemRequestBuilder
    */
    public function byId(int $id): BillingfrequencyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new BillingfrequencyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BillingfrequencyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billingfrequency');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get all billing frequencies.
     * @param BillingfrequencyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<BillingFrequencyView>|null>
     * @throws Exception
    */
    public function get(?BillingfrequencyRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [BillingFrequencyView::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Get all billing frequencies.
     * @param BillingfrequencyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?BillingfrequencyRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return BillingfrequencyRequestBuilder
    */
    public function withUrl(string $rawUrl): BillingfrequencyRequestBuilder {
        return new BillingfrequencyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
