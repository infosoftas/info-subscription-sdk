from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.base_request_builder import BaseRequestBuilder
from kiota_abstractions.base_request_configuration import RequestConfiguration
from kiota_abstractions.default_query_parameters import QueryParameters
from kiota_abstractions.get_path_parameters import get_path_parameters
from kiota_abstractions.method import Method
from kiota_abstractions.request_adapter import RequestAdapter
from kiota_abstractions.request_information import RequestInformation
from kiota_abstractions.request_option import RequestOption
from kiota_abstractions.serialization import Parsable, ParsableFactory
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID
from warnings import warn

if TYPE_CHECKING:
    from ...models.identity_provider import IdentityProvider
    from ...models.integration_type import IntegrationType
    from .item.with_identity_provider_item_request_builder import WithIdentityProviderItemRequestBuilder

class IdentityproviderRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /authorizations/identityprovider
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new IdentityproviderRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/authorizations/identityprovider{?IntegrationType*,Name*}", path_parameters)
    
    def by_identity_provider_id(self,identity_provider_id: UUID) -> WithIdentityProviderItemRequestBuilder:
        """
        Gets an item from the info_subscription.authorizations.identityprovider.item collection
        param identity_provider_id: The identity provider (IdP).
        Returns: WithIdentityProviderItemRequestBuilder
        """
        if identity_provider_id is None:
            raise TypeError("identity_provider_id cannot be null.")
        from .item.with_identity_provider_item_request_builder import WithIdentityProviderItemRequestBuilder

        url_tpl_params = get_path_parameters(self.path_parameters)
        url_tpl_params["identityProviderId"] = identity_provider_id
        return WithIdentityProviderItemRequestBuilder(self.request_adapter, url_tpl_params)
    
    async def get(self,request_configuration: Optional[RequestConfiguration[IdentityproviderRequestBuilderGetQueryParameters]] = None) -> Optional[list[IdentityProvider]]:
        """
        Gets the identity providers asynchronous.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[list[IdentityProvider]]
        """
        request_info = self.to_get_request_information(
            request_configuration
        )
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from ...models.identity_provider import IdentityProvider

        return await self.request_adapter.send_collection_async(request_info, IdentityProvider, None)
    
    def to_get_request_information(self,request_configuration: Optional[RequestConfiguration[IdentityproviderRequestBuilderGetQueryParameters]] = None) -> RequestInformation:
        """
        Gets the identity providers asynchronous.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        request_info = RequestInformation(Method.GET, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        return request_info
    
    def with_url(self,raw_url: str) -> IdentityproviderRequestBuilder:
        """
        Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
        param raw_url: The raw URL to use for the request builder.
        Returns: IdentityproviderRequestBuilder
        """
        if raw_url is None:
            raise TypeError("raw_url cannot be null.")
        return IdentityproviderRequestBuilder(self.request_adapter, raw_url)
    
    @dataclass
    class IdentityproviderRequestBuilderGetQueryParameters():
        """
        Gets the identity providers asynchronous.
        """
        def get_query_parameter(self,original_name: str) -> str:
            """
            Maps the query parameters names to their encoded names for the URI template parsing.
            param original_name: The original query parameter name in the class.
            Returns: str
            """
            if original_name is None:
                raise TypeError("original_name cannot be null.")
            if original_name == "integration_type":
                return "IntegrationType"
            if original_name == "name":
                return "Name"
            return original_name
        
        # Gets or sets the integration type.
        integration_type: Optional[IntegrationType] = None

        # Gets or sets the name.
        name: Optional[str] = None

    
    @dataclass
    class IdentityproviderRequestBuilderGetRequestConfiguration(RequestConfiguration[IdentityproviderRequestBuilderGetQueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    

