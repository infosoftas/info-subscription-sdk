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
    from ..models.infosoft.s4.api.data_contracts.v1.order.order_view import OrderView
    from ..models.order_create import OrderCreate
    from ..models.validation_result_model import ValidationResultModel
    from .item.order_item_request_builder import OrderItemRequestBuilder

class OrderRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /order
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new OrderRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/order{?Id*,SubscriberId*}", path_parameters)
    
    def by_id(self,id: UUID) -> OrderItemRequestBuilder:
        """
        Gets an item from the info_subscription.order.item collection
        param id: The Id of the order to cancel.
        Returns: OrderItemRequestBuilder
        """
        if id is None:
            raise TypeError("id cannot be null.")
        from .item.order_item_request_builder import OrderItemRequestBuilder

        url_tpl_params = get_path_parameters(self.path_parameters)
        url_tpl_params["id"] = id
        return OrderItemRequestBuilder(self.request_adapter, url_tpl_params)
    
    async def get(self,request_configuration: Optional[RequestConfiguration[OrderRequestBuilderGetQueryParameters]] = None) -> Optional[list[OrderView]]:
        """
        Get all orders regardless of their state.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[list[OrderView]]
        """
        request_info = self.to_get_request_information(
            request_configuration
        )
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from ..models.infosoft.s4.api.data_contracts.v1.order.order_view import OrderView

        return await self.request_adapter.send_collection_async(request_info, OrderView, None)
    
    async def post(self,body: OrderCreate, request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> Optional[OrderView]:
        """
        Creates a new order.Orders creates new subscriptions, payment agreements and any other initial actions such as            invoices and card payments.  Adding a new order will not immediately process it, rather            it will validate the given input, and make it availble for further adaptation such as adding            card processing or other features.
        param body: Parameters that controls the flow of the ordering process such as what is ordered and HOW.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[OrderView]
        """
        if body is None:
            raise TypeError("body cannot be null.")
        request_info = self.to_post_request_information(
            body, request_configuration
        )
        from ..models.validation_result_model import ValidationResultModel

        error_mapping: dict[str, type[ParsableFactory]] = {
            "400": ValidationResultModel,
        }
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from ..models.infosoft.s4.api.data_contracts.v1.order.order_view import OrderView

        return await self.request_adapter.send_async(request_info, OrderView, error_mapping)
    
    def to_get_request_information(self,request_configuration: Optional[RequestConfiguration[OrderRequestBuilderGetQueryParameters]] = None) -> RequestInformation:
        """
        Get all orders regardless of their state.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        request_info = RequestInformation(Method.GET, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        return request_info
    
    def to_post_request_information(self,body: OrderCreate, request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> RequestInformation:
        """
        Creates a new order.Orders creates new subscriptions, payment agreements and any other initial actions such as            invoices and card payments.  Adding a new order will not immediately process it, rather            it will validate the given input, and make it availble for further adaptation such as adding            card processing or other features.
        param body: Parameters that controls the flow of the ordering process such as what is ordered and HOW.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        if body is None:
            raise TypeError("body cannot be null.")
        request_info = RequestInformation(Method.POST, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        request_info.set_content_from_parsable(self.request_adapter, "application/json", body)
        return request_info
    
    def with_url(self,raw_url: str) -> OrderRequestBuilder:
        """
        Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
        param raw_url: The raw URL to use for the request builder.
        Returns: OrderRequestBuilder
        """
        if raw_url is None:
            raise TypeError("raw_url cannot be null.")
        return OrderRequestBuilder(self.request_adapter, raw_url)
    
    @dataclass
    class OrderRequestBuilderGetQueryParameters():
        """
        Get all orders regardless of their state.
        """
        def get_query_parameter(self,original_name: str) -> str:
            """
            Maps the query parameters names to their encoded names for the URI template parsing.
            param original_name: The original query parameter name in the class.
            Returns: str
            """
            if original_name is None:
                raise TypeError("original_name cannot be null.")
            if original_name == "id":
                return "Id"
            if original_name == "subscriber_id":
                return "SubscriberId"
            return original_name
        
        # Gets or sets the identifier.
        id: Optional[UUID] = None

        # Gets or sets the identifier of the subscriber.
        subscriber_id: Optional[UUID] = None

    
    @dataclass
    class OrderRequestBuilderGetRequestConfiguration(RequestConfiguration[OrderRequestBuilderGetQueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    
    @dataclass
    class OrderRequestBuilderPostRequestConfiguration(RequestConfiguration[QueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    

