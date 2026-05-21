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
    from ..models.create_demand import CreateDemand
    from ..models.validation_result_model import ValidationResultModel
    from .demandschedules.demandschedules_request_builder import DemandschedulesRequestBuilder
    from .item.paymentdemand_item_request_builder import PaymentdemandItemRequestBuilder
    from .paymentdemand import Paymentdemand
    from .reminderschedules.reminderschedules_request_builder import ReminderschedulesRequestBuilder

class PaymentdemandRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /paymentdemand
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new PaymentdemandRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/paymentdemand{?BillingPlanId*,CreditLedgerId*,CreditNoteId*,EnterprisePlanId*,InvoiceId*,NextSubscriptionId*,OrderId*,SubscriberAccount*,SubscriberId*,SubscriptionId*}", path_parameters)
    
    def by_id(self,id: UUID) -> PaymentdemandItemRequestBuilder:
        """
        Gets an item from the info_subscription.paymentdemand.item collection
        param id: The demand identifier.
        Returns: PaymentdemandItemRequestBuilder
        """
        if id is None:
            raise TypeError("id cannot be null.")
        from .item.paymentdemand_item_request_builder import PaymentdemandItemRequestBuilder

        url_tpl_params = get_path_parameters(self.path_parameters)
        url_tpl_params["id"] = id
        return PaymentdemandItemRequestBuilder(self.request_adapter, url_tpl_params)
    
    async def get(self,request_configuration: Optional[RequestConfiguration[PaymentdemandRequestBuilderGetQueryParameters]] = None) -> Optional[list[Paymentdemand]]:
        """
        Return a collection of payment demands that matches the given query filter.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[list[Paymentdemand]]
        """
        request_info = self.to_get_request_information(
            request_configuration
        )
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from .paymentdemand import Paymentdemand

        return await self.request_adapter.send_collection_async(request_info, Paymentdemand, None)
    
    async def post(self,body: CreateDemand, request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> None:
        """
        Creates a new demand.
        param body: Parameters for demand creation, input varies by type.
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
    
    def to_get_request_information(self,request_configuration: Optional[RequestConfiguration[PaymentdemandRequestBuilderGetQueryParameters]] = None) -> RequestInformation:
        """
        Return a collection of payment demands that matches the given query filter.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        request_info = RequestInformation(Method.GET, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        return request_info
    
    def to_post_request_information(self,body: CreateDemand, request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> RequestInformation:
        """
        Creates a new demand.
        param body: Parameters for demand creation, input varies by type.
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
    
    def with_url(self,raw_url: str) -> PaymentdemandRequestBuilder:
        """
        Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
        param raw_url: The raw URL to use for the request builder.
        Returns: PaymentdemandRequestBuilder
        """
        if raw_url is None:
            raise TypeError("raw_url cannot be null.")
        return PaymentdemandRequestBuilder(self.request_adapter, raw_url)
    
    @property
    def demandschedules(self) -> DemandschedulesRequestBuilder:
        """
        The demandschedules property
        """
        from .demandschedules.demandschedules_request_builder import DemandschedulesRequestBuilder

        return DemandschedulesRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def reminderschedules(self) -> ReminderschedulesRequestBuilder:
        """
        The reminderschedules property
        """
        from .reminderschedules.reminderschedules_request_builder import ReminderschedulesRequestBuilder

        return ReminderschedulesRequestBuilder(self.request_adapter, self.path_parameters)
    
    @dataclass
    class PaymentdemandRequestBuilderGetQueryParameters():
        """
        Return a collection of payment demands that matches the given query filter.
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
            if original_name == "credit_ledger_id":
                return "CreditLedgerId"
            if original_name == "credit_note_id":
                return "CreditNoteId"
            if original_name == "enterprise_plan_id":
                return "EnterprisePlanId"
            if original_name == "invoice_id":
                return "InvoiceId"
            if original_name == "next_subscription_id":
                return "NextSubscriptionId"
            if original_name == "order_id":
                return "OrderId"
            if original_name == "subscriber_account":
                return "SubscriberAccount"
            if original_name == "subscriber_id":
                return "SubscriberId"
            if original_name == "subscription_id":
                return "SubscriptionId"
            return original_name
        
        # Gets or sets the identifier of the billing plan.
        billing_plan_id: Optional[UUID] = None

        # Gets or sets the identifier of the credit ledger.
        credit_ledger_id: Optional[UUID] = None

        # Gets or sets the identifier of the credit note.
        credit_note_id: Optional[UUID] = None

        # Gets or sets the enterprise plan identifier.
        enterprise_plan_id: Optional[UUID] = None

        # Gets or sets the identifier of the invoice.
        invoice_id: Optional[UUID] = None

        # Gets or sets the identifier of the next subscription.
        next_subscription_id: Optional[UUID] = None

        # Gets or sets the identifier of the order.
        order_id: Optional[UUID] = None

        # Gets or sets the subscriber account.
        subscriber_account: Optional[UUID] = None

        # Get or set the subscriber identifier.
        subscriber_id: Optional[UUID] = None

        # Gets or sets the identifier of the subscription.
        subscription_id: Optional[UUID] = None

    
    @dataclass
    class PaymentdemandRequestBuilderGetRequestConfiguration(RequestConfiguration[PaymentdemandRequestBuilderGetQueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    
    @dataclass
    class PaymentdemandRequestBuilderPostRequestConfiguration(RequestConfiguration[QueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    

