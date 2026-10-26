<?php

namespace Infosoft\InfoSubscription\Generated\Order;

use Exception;
use Http\Promise\Promise;
use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Api\DataContracts\V1\Order\OrderView;
use Infosoft\InfoSubscription\Generated\Models\OrderCreate;
use Infosoft\InfoSubscription\Generated\Models\ValidationResultModel;
use Infosoft\InfoSubscription\Generated\Order\Item\OrderItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /order
*/
class OrderRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Infosoft/InfoSubscription/Generated.order.item collection
     * @param string $id The Id of the order to cancel.
     * @return OrderItemRequestBuilder
    */
    public function byId(string $id): OrderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new OrderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OrderRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/order{?Id*,SubscriberId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get all orders regardless of their state.
     * @param OrderRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<OrderView>|null>
     * @throws Exception
    */
    public function get(?OrderRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [OrderView::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Creates a new order.Orders creates new subscriptions, payment agreements and any other initial actions such as            invoices and card payments.  Adding a new order will not immediately process it, rather            it will validate the given input, and make it availble for further adaptation such as adding            card processing or other features.
     * @param OrderCreate $body Parameters that controls the flow of the ordering process such as what is ordered and HOW.
     * @param OrderRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrderView|null>
     * @throws Exception
    */
    public function post(OrderCreate $body, ?OrderRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ValidationResultModel::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrderView::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get all orders regardless of their state.
     * @param OrderRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OrderRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Creates a new order.Orders creates new subscriptions, payment agreements and any other initial actions such as            invoices and card payments.  Adding a new order will not immediately process it, rather            it will validate the given input, and make it availble for further adaptation such as adding            card processing or other features.
     * @param OrderCreate $body Parameters that controls the flow of the ordering process such as what is ordered and HOW.
     * @param OrderRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OrderCreate $body, ?OrderRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OrderRequestBuilder
    */
    public function withUrl(string $rawUrl): OrderRequestBuilder {
        return new OrderRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
