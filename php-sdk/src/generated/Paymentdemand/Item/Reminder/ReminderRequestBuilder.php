<?php

namespace Infosoft\InfoSubscription\Generated\Paymentdemand\Item\Reminder;

use Exception;
use Http\Promise\Promise;
use Infosoft\InfoSubscription\Generated\Models\CreatePaymentDemandReminder;
use Infosoft\InfoSubscription\Generated\Models\ValidationResultModel;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /paymentdemand/{id}/reminder
*/
class ReminderRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ReminderRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/paymentdemand/{id}/reminder');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Use this when an external party (e.g. a debt collector) drives the reminder process and the resultinginvoice document and ledger side-effects need to be reflected in INFO-Subscription without the externalparty interfering with payment processing.
     * @param CreatePaymentDemandReminder $body Parameters for creating a reminder on a payment demand directly, without going through a dunning schedule.This enables external parties (e.g. debt collectors) to register reminders and trigger the associatedinvoice and ledger side-effects in INFO-Subscription without interfering with payment processing.
     * @param ReminderRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(CreatePaymentDemandReminder $body, ?ReminderRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ValidationResultModel::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Use this when an external party (e.g. a debt collector) drives the reminder process and the resultinginvoice document and ledger side-effects need to be reflected in INFO-Subscription without the externalparty interfering with payment processing.
     * @param CreatePaymentDemandReminder $body Parameters for creating a reminder on a payment demand directly, without going through a dunning schedule.This enables external parties (e.g. debt collectors) to register reminders and trigger the associatedinvoice and ledger side-effects in INFO-Subscription without interfering with payment processing.
     * @param ReminderRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreatePaymentDemandReminder $body, ?ReminderRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ReminderRequestBuilder
    */
    public function withUrl(string $rawUrl): ReminderRequestBuilder {
        return new ReminderRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
