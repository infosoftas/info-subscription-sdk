<?php

namespace Infosoft\InfoSubscription\Generated\Paymentdemand;

use Exception;
use Http\Promise\Promise;
use Infosoft\InfoSubscription\Generated\Models\CreateDemand;
use Infosoft\InfoSubscription\Generated\Models\ValidationResultModel;
use Infosoft\InfoSubscription\Generated\Paymentdemand\Demandschedules\DemandschedulesRequestBuilder;
use Infosoft\InfoSubscription\Generated\Paymentdemand\Item\PaymentdemandItemRequestBuilder;
use Infosoft\InfoSubscription\Generated\Paymentdemand\Reminderschedules\ReminderschedulesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /paymentdemand
*/
class PaymentdemandRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The demandschedules property
    */
    public function demandschedules(): DemandschedulesRequestBuilder {
        return new DemandschedulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reminderschedules property
    */
    public function reminderschedules(): ReminderschedulesRequestBuilder {
        return new ReminderschedulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Infosoft/InfoSubscription/Generated.paymentdemand.item collection
     * @param string $id The demand identifier.
     * @return PaymentdemandItemRequestBuilder
    */
    public function byId(string $id): PaymentdemandItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new PaymentdemandItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PaymentdemandRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/paymentdemand{?BillingPlanId*,CreditLedgerId*,CreditNoteId*,EnterprisePlanId*,InvoiceId*,NextSubscriptionId*,OrderId*,SubscriberAccount*,SubscriberId*,SubscriptionId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Return a collection of payment demands that matches the given query filter.
     * @param PaymentdemandRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<Paymentdemand>|null>
     * @throws Exception
    */
    public function get(?PaymentdemandRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [Paymentdemand::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Creates a new demand.
     * @param CreateDemand $body Parameters for demand creation, input varies by type.
     * @param PaymentdemandRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(CreateDemand $body, ?PaymentdemandRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ValidationResultModel::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Return a collection of payment demands that matches the given query filter.
     * @param PaymentdemandRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PaymentdemandRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Creates a new demand.
     * @param CreateDemand $body Parameters for demand creation, input varies by type.
     * @param PaymentdemandRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateDemand $body, ?PaymentdemandRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PaymentdemandRequestBuilder
    */
    public function withUrl(string $rawUrl): PaymentdemandRequestBuilder {
        return new PaymentdemandRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
