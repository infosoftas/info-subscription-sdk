<?php

namespace Infosoft\InfoSubscription\Generated\Invoice\Item;

use Exception;
use Http\Promise\Promise;
use Infosoft\InfoSubscription\Generated\Invoice\Item\Credit\CreditRequestBuilder;
use Infosoft\InfoSubscription\Generated\Invoice\Item\File\FileRequestBuilder;
use Infosoft\InfoSubscription\Generated\Models\Invoice;
use Infosoft\InfoSubscription\Generated\Models\InvoiceUpdate;
use Infosoft\InfoSubscription\Generated\Models\ValidationResultModel;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /invoice/{id}
*/
class InvoiceItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The credit property
    */
    public function credit(): CreditRequestBuilder {
        return new CreditRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The file property
    */
    public function file(): FileRequestBuilder {
        return new FileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new InvoiceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/invoice/{id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Gets a specific invoice based on its Id.
     * @param InvoiceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Invoice|null>
     * @throws Exception
    */
    public function get(?InvoiceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ValidationResultModel::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Invoice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This is only available on Invoices with state Infosoft.S4.Invoice.Contracts.ReadModel.InvoiceState.Open            or Infosoft.S4.Invoice.Contracts.ReadModel.InvoiceState.Issued .
     * @param InvoiceUpdate $body Represent a request to update an invoice.
     * @param InvoiceItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function put(InvoiceUpdate $body, ?InvoiceItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ValidationResultModel::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Gets a specific invoice based on its Id.
     * @param InvoiceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InvoiceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This is only available on Invoices with state Infosoft.S4.Invoice.Contracts.ReadModel.InvoiceState.Open            or Infosoft.S4.Invoice.Contracts.ReadModel.InvoiceState.Issued .
     * @param InvoiceUpdate $body Represent a request to update an invoice.
     * @param InvoiceItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(InvoiceUpdate $body, ?InvoiceItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return InvoiceItemRequestBuilder
    */
    public function withUrl(string $rawUrl): InvoiceItemRequestBuilder {
        return new InvoiceItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
