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
    from ..models.infosoft.s4.payments.contracts.payment_state import PaymentState
    from ..models.payment import Payment
    from ..models.validation_result_model import ValidationResultModel
    from .item.item_request_builder import ItemRequestBuilder
    from .payment_post_request_body import PaymentPostRequestBody

class PaymentRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /payment
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new PaymentRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/payment{?Id*,OrganizationId*,State*,SubscriberId*}", path_parameters)
    
    def by_id(self,id: UUID) -> ItemRequestBuilder:
        """
        Gets an item from the info_subscription.payment.item collection
        param id: The payment identifier.
        Returns: ItemRequestBuilder
        """
        if id is None:
            raise TypeError("id cannot be null.")
        from .item.item_request_builder import ItemRequestBuilder

        url_tpl_params = get_path_parameters(self.path_parameters)
        url_tpl_params["%2Did"] = id
        return ItemRequestBuilder(self.request_adapter, url_tpl_params)
    
    async def get(self,request_configuration: Optional[RequestConfiguration[PaymentRequestBuilderGetQueryParameters]] = None) -> Optional[list[Payment]]:
        """
        Get payments with optional filtering.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[list[Payment]]
        """
        request_info = self.to_get_request_information(
            request_configuration
        )
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from ..models.payment import Payment

        return await self.request_adapter.send_collection_async(request_info, Payment, None)
    
    async def post(self,body: PaymentPostRequestBody, request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> None:
        """
        Creates a new payment for a subscriber.
        param body: Data for creating a new payment
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: None
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
        return await self.request_adapter.send_no_response_content_async(request_info, error_mapping)
    
    def to_get_request_information(self,request_configuration: Optional[RequestConfiguration[PaymentRequestBuilderGetQueryParameters]] = None) -> RequestInformation:
        """
        Get payments with optional filtering.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        request_info = RequestInformation(Method.GET, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        return request_info
    
    def to_post_request_information(self,body: PaymentPostRequestBody, request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> RequestInformation:
        """
        Creates a new payment for a subscriber.
        param body: Data for creating a new payment
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
    
    def with_url(self,raw_url: str) -> PaymentRequestBuilder:
        """
        Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
        param raw_url: The raw URL to use for the request builder.
        Returns: PaymentRequestBuilder
        """
        if raw_url is None:
            raise TypeError("raw_url cannot be null.")
        return PaymentRequestBuilder(self.request_adapter, raw_url)
    
    @dataclass
    class PaymentRequestBuilderGetQueryParameters():
        """
        Get payments with optional filtering.
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
            if original_name == "organization_id":
                return "OrganizationId"
            if original_name == "state":
                return "State"
            if original_name == "subscriber_id":
                return "SubscriberId"
            return original_name
        
        # If set will be used to filter by the Id - this is equivalent to getting a specific payment. Note settings this will still return a collection of payments but just with one instance.
        id: Optional[UUID] = None

        # If set will be used to filter the Organization of the payment.
        organization_id: Optional[UUID] = None

        # If set will be used to filter on the state of the payment.
        state: Optional[PaymentState] = None

        # If set will be used to filter the Subscriber of the payment. Note some payments may not have a subscriber on them and will not be included.
        subscriber_id: Optional[UUID] = None

    
    @dataclass
    class PaymentRequestBuilderGetRequestConfiguration(RequestConfiguration[PaymentRequestBuilderGetQueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    
    @dataclass
    class PaymentRequestBuilderPostRequestConfiguration(RequestConfiguration[QueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    

