<?php

namespace Infosoft\InfoSubscription\Generated\Invoice\Documentnetwork\Submit;

use Exception;
use Http\Promise\Promise;
use Infosoft\InfoSubscription\Generated\Models\SubmitPeppolDocumentRequest;
use Infosoft\InfoSubscription\Generated\Models\ValidationResultModel;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /invoice/documentnetwork/submit
*/
class SubmitRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SubmitRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/invoice/documentnetwork/submit');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This does not verify the invoice for validity, it just generates the XML and submits it tothe PEPPOL network.  If it is not valid, upstream error handling applies just as itwould otherwise.
     * @param SubmitPeppolDocumentRequest $body Properties for submitting a document to the PEPPOL network.
     * @param SubmitRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(SubmitPeppolDocumentRequest $body, ?SubmitRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ValidationResultModel::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This does not verify the invoice for validity, it just generates the XML and submits it tothe PEPPOL network.  If it is not valid, upstream error handling applies just as itwould otherwise.
     * @param SubmitPeppolDocumentRequest $body Properties for submitting a document to the PEPPOL network.
     * @param SubmitRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SubmitPeppolDocumentRequest $body, ?SubmitRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SubmitRequestBuilder
    */
    public function withUrl(string $rawUrl): SubmitRequestBuilder {
        return new SubmitRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
