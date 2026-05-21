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
    from ...models.demand_schedule import DemandSchedule

class DemandschedulesRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /paymentdemand/demandschedules
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new DemandschedulesRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/paymentdemand/demandschedules{?BillingPlanId*,EnterprisePlanId*,Id*,OrderId*,OrganizationId*,PaymentMethod*,PaymentMethodType*,SubscriberId*,SubscriptionId*}", path_parameters)
    
    async def get(self,request_configuration: Optional[RequestConfiguration[DemandschedulesRequestBuilderGetQueryParameters]] = None) -> Optional[list[DemandSchedule]]:
        """
        Get payment demand schedules based on the query parameters.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[list[DemandSchedule]]
        """
        request_info = self.to_get_request_information(
            request_configuration
        )
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from ...models.demand_schedule import DemandSchedule

        return await self.request_adapter.send_collection_async(request_info, DemandSchedule, None)
    
    def to_get_request_information(self,request_configuration: Optional[RequestConfiguration[DemandschedulesRequestBuilderGetQueryParameters]] = None) -> RequestInformation:
        """
        Get payment demand schedules based on the query parameters.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        request_info = RequestInformation(Method.GET, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        return request_info
    
    def with_url(self,raw_url: str) -> DemandschedulesRequestBuilder:
        """
        Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
        param raw_url: The raw URL to use for the request builder.
        Returns: DemandschedulesRequestBuilder
        """
        if raw_url is None:
            raise TypeError("raw_url cannot be null.")
        return DemandschedulesRequestBuilder(self.request_adapter, raw_url)
    
    @dataclass
    class DemandschedulesRequestBuilderGetQueryParameters():
        """
        Get payment demand schedules based on the query parameters.
        """
        def get_query_parameter(self,original_name: str) -> str:
            """
            Maps the query parameters names to their encoded names for the URI template parsing.
            param original_name: The original query parameter name in the class.
            Returns: str
            """
            if original_name is None:
                raise TypeError("original_name cannot be null.")
            if original_name == "billing_plan_id":
                return "BillingPlanId"
            if original_name == "enterprise_plan_id":
                return "EnterprisePlanId"
            if original_name == "id":
                return "Id"
            if original_name == "order_id":
                return "OrderId"
            if original_name == "organization_id":
                return "OrganizationId"
            if original_name == "payment_method":
                return "PaymentMethod"
            if original_name == "payment_method_type":
                return "PaymentMethodType"
            if original_name == "subscriber_id":
                return "SubscriberId"
            if original_name == "subscription_id":
                return "SubscriptionId"
            return original_name
        
        # Gets or sets the billing plan identifier
        billing_plan_id: Optional[UUID] = None

        # Gets or sets the enterprise plan identifier
        enterprise_plan_id: Optional[UUID] = None

        # Gets or sets the identifier.
        id: Optional[UUID] = None

        # Gets or sets the order identifier
        order_id: Optional[UUID] = None

        # Gets or sets OrganizationId identifier.
        organization_id: Optional[UUID] = None

        # Gets or sets the payment method
        payment_method: Optional[str] = None

        # Gets or sets the payment method type
        payment_method_type: Optional[str] = None

        # Gets or sets the subscriber identifier
        subscriber_id: Optional[UUID] = None

        # Gets or sets the subscription identifier
        subscription_id: Optional[UUID] = None

    
    @dataclass
    class DemandschedulesRequestBuilderGetRequestConfiguration(RequestConfiguration[DemandschedulesRequestBuilderGetQueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    

