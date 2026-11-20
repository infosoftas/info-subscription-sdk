<?php

namespace Infosoft\InfoSubscription\Generated\Authorizations\Identityprovider\Item\User;

use Infosoft\InfoSubscription\Generated\Authorizations\Identityprovider\Item\User\Item\WithExternalItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /authorizations/identityprovider/{identityProviderId}/user
*/
class UserRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Infosoft/InfoSubscription/Generated.authorizations.identityprovider.item.user.item collection
     * @param string $externalId The identifier for the user, typically the <tt>oid</tt> or the <tt>sub</tt> taken from the IdP token. But it may vary.
     * @return WithExternalItemRequestBuilder
    */
    public function byExternalId(string $externalId): WithExternalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['externalId'] = $externalId;
        return new WithExternalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/authorizations/identityprovider/{identityProviderId}/user');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
