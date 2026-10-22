<?php

namespace Infosoft\InfoSubscription\Generated\Reminder;

use Exception;
use Http\Promise\Promise;
use Infosoft\InfoSubscription\Generated\Models\Reminder;
use Infosoft\InfoSubscription\Generated\Reminder\Item\ReminderItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /reminder
*/
class ReminderRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Infosoft/InfoSubscription/Generated.reminder.item collection
     * @param string $id The reminder identifier.
     * @return ReminderItemRequestBuilder
    */
    public function byId(string $id): ReminderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new ReminderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReminderRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reminder{?BuyerReference*,EndDate*,ExternalInvoiceIdentifier*,InvoiceId*,InvoiceNumber*,MaximumIssuedOn*,MinimumIssuedOn*,OrderReference*,OrganizationId*,ReminderNumber*,StartDate*,SubscriberId*,TrackingId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get reminders matching a given query filter.
     * @param ReminderRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<Reminder>|null>
     * @throws Exception
    */
    public function get(?ReminderRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [Reminder::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Get reminders matching a given query filter.
     * @param ReminderRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReminderRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ReminderRequestBuilder
    */
    public function withUrl(string $rawUrl): ReminderRequestBuilder {
        return new ReminderRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
