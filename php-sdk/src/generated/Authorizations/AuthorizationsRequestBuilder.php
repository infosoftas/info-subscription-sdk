<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations;

use Infosoft\InfoSubscription\Generated\Authorizations\Domain\DomainRequestBuilder;
use Infosoft\InfoSubscription\Generated\Authorizations\Identityprovider\IdentityproviderRequestBuilder;
use Infosoft\InfoSubscription\Generated\Authorizations\Source\SourceRequestBuilder;
use Infosoft\InfoSubscription\Generated\Authorizations\User\UserRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /authorizations
*/
class AuthorizationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The domain property
    */
    public function domain(): DomainRequestBuilder {
        return new DomainRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The identityprovider property
    */
    public function identityprovider(): IdentityproviderRequestBuilder {
        return new IdentityproviderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The source property
    */
    public function source(): SourceRequestBuilder {
        return new SourceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The user property
    */
    public function user(): UserRequestBuilder {
        return new UserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AuthorizationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/authorizations');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
