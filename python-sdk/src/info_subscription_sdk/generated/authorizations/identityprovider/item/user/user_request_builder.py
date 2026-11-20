from __future__ import annotations
from collections.abc import Callable
from kiota_abstractions.base_request_builder import BaseRequestBuilder
from kiota_abstractions.get_path_parameters import get_path_parameters
from kiota_abstractions.request_adapter import RequestAdapter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .item.with_external_item_request_builder import WithExternalItemRequestBuilder

class UserRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /authorizations/identityprovider/{identityProviderId}/user
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new UserRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/authorizations/identityprovider/{identityProviderId}/user", path_parameters)
    
    def by_external_id(self,external_id: str) -> WithExternalItemRequestBuilder:
        """
        Gets an item from the info_subscription.authorizations.identityprovider.item.user.item collection
        param external_id: The identifier for the user, typically the <tt>oid</tt> or the <tt>sub</tt> taken from the IdP token. But it may vary.
        Returns: WithExternalItemRequestBuilder
        """
        if external_id is None:
            raise TypeError("external_id cannot be null.")
        from .item.with_external_item_request_builder import WithExternalItemRequestBuilder

        url_tpl_params = get_path_parameters(self.path_parameters)
        url_tpl_params["externalId"] = external_id
        return WithExternalItemRequestBuilder(self.request_adapter, url_tpl_params)
    

