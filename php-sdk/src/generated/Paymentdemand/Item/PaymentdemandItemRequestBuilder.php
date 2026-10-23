<?php

namespace Infosoft\InfoSubscription\Generated\Paymentdemand\Item;

use Exception;
use Http\Promise\Promise;
use Infosoft\InfoSubscription\Generated\Models\ValidationResultModel;
use Infosoft\InfoSubscription\Generated\Paymentdemand\Item\Credit\CreditRequestBuilder;
use Infosoft\InfoSubscription\Generated\Paymentdemand\Item\Reminder\ReminderRequestBuilder;
use Infosoft\InfoSubscription\Generated\Paymentdemand\Item\Reminders\RemindersRequestBuilder;
use Infosoft\InfoSubscription\Generated\Paymentdemand\Item\Writeoff\WriteoffRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /paymentdemand/{id}
*/
class PaymentdemandItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The credit property
    */
    public function credit(): CreditRequestBuilder {
        return new CreditRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reminder property
    */
    public function reminder(): ReminderRequestBuilder {
        return new ReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reminders property
    */
    public function reminders(): RemindersRequestBuilder {
        return new RemindersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The writeoff property
    */
    public function writeoff(): WriteoffRequestBuilder {
        return new WriteoffRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PaymentdemandItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/paymentdemand/{id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Gets a specific payment demand.
     * @param PaymentdemandItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PaymentdemandGetResponse|null>
     * @throws Exception
    */
    public function get(?PaymentdemandItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ValidationResultModel::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PaymentdemandGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Gets a specific payment demand.
     * @param PaymentdemandItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PaymentdemandItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PaymentdemandItemRequestBuilder
    */
    public function withUrl(string $rawUrl): PaymentdemandItemRequestBuilder {
        return new PaymentdemandItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
