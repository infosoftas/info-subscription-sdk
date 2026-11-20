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
    from ...models.user import User
    from .item.user_item_request_builder import UserItemRequestBuilder

class UserRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /authorizations/user
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new UserRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/authorizations/user{?ExternalId*,IdentityProviderId*,SubscriberId*}", path_parameters)
    
    def by_id(self,id: UUID) -> UserItemRequestBuilder:
        """
        Gets an item from the info_subscription.authorizations.user.item collection
        param id: The user identifier.
        Returns: UserItemRequestBuilder
        """
        if id is None:
            raise TypeError("id cannot be null.")
        from .item.user_item_request_builder import UserItemRequestBuilder

        url_tpl_params = get_path_parameters(self.path_parameters)
        url_tpl_params["id"] = id
        return UserItemRequestBuilder(self.request_adapter, url_tpl_params)
    
    async def get(self,request_configuration: Optional[RequestConfiguration[UserRequestBuilderGetQueryParameters]] = None) -> Optional[list[User]]:
        """
        Gets the users asynchronous.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[list[User]]
        """
        request_info = self.to_get_request_information(
            request_configuration
        )
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from ...models.user import User

        return await self.request_adapter.send_collection_async(request_info, User, None)
    
    def to_get_request_information(self,request_configuration: Optional[RequestConfiguration[UserRequestBuilderGetQueryParameters]] = None) -> RequestInformation:
        """
        Gets the users asynchronous.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        request_info = RequestInformation(Method.GET, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        return request_info
    
    def with_url(self,raw_url: str) -> UserRequestBuilder:
        """
        Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
        param raw_url: The raw URL to use for the request builder.
        Returns: UserRequestBuilder
        """
        if raw_url is None:
            raise TypeError("raw_url cannot be null.")
        return UserRequestBuilder(self.request_adapter, raw_url)
    
    @dataclass
    class UserRequestBuilderGetQueryParameters():
        """
        Gets the users asynchronous.
        """
        def get_query_parameter(self,original_name: str) -> str:
            """
            Maps the query parameters names to their encoded names for the URI template parsing.
            param original_name: The original query parameter name in the class.
            Returns: str
            """
            if original_name is None:
                raise TypeError("original_name cannot be null.")
            if original_name == "external_id":
                return "ExternalId"
            if original_name == "identity_provider_id":
                return "IdentityProviderId"
            if original_name == "subscriber_id":
                return "SubscriberId"
            return original_name
        
        # The External Id to filter by. This is usually the User Id assigned by the Identity Provider.
        external_id: Optional[str] = None

        # The identity provider that owns the user identity.
        identity_provider_id: Optional[UUID] = None

        # The subscriber which the user entity is associated with.
        subscriber_id: Optional[UUID] = None

    
    @dataclass
    class UserRequestBuilderGetRequestConfiguration(RequestConfiguration[UserRequestBuilderGetQueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    

