<?php

namespace Infosoft\InfoSubscription\Generated\Invoice;

use Exception;
use Http\Promise\Promise;
use Infosoft\InfoSubscription\Generated\Invoice\Configuration\ConfigurationRequestBuilder;
use Infosoft\InfoSubscription\Generated\Invoice\Documentnetwork\DocumentnetworkRequestBuilder;
use Infosoft\InfoSubscription\Generated\Invoice\Item\InvoiceItemRequestBuilder;
use Infosoft\InfoSubscription\Generated\Models\Invoice;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /invoice
*/
class InvoiceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The configuration property
    */
    public function configuration(): ConfigurationRequestBuilder {
        return new ConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The documentnetwork property
    */
    public function documentnetwork(): DocumentnetworkRequestBuilder {
        return new DocumentnetworkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Infosoft/InfoSubscription/Generated.invoice.item collection
     * @param string $id The invoice identifier.
     * @return InvoiceItemRequestBuilder
    */
    public function byId(string $id): InvoiceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new InvoiceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new InvoiceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/invoice{?BuyerReference*,CreditNoteId*,EndDate*,ExternalInvoiceIdentifier*,InvoiceNumber*,MaximumIssuedOn*,MinimumIssuedOn*,OrderReference*,OrganizationId*,StartDate*,State*,SubscriberId*,TrackingId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get all invoices.
     * @param InvoiceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<Invoice>|null>
     * @throws Exception
    */
    public function get(?InvoiceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [Invoice::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Get all invoices.
     * @param InvoiceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InvoiceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return InvoiceRequestBuilder
    */
    public function withUrl(string $rawUrl): InvoiceRequestBuilder {
        return new InvoiceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
