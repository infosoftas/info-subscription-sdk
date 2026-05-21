from __future__ import annotations
import datetime
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
    from ..models.reminder import Reminder
    from .item.reminder_item_request_builder import ReminderItemRequestBuilder

class ReminderRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /reminder
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new ReminderRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/reminder{?BuyerReference*,EndDate*,ExternalInvoiceIdentifier*,InvoiceId*,InvoiceNumber*,MaximumIssuedOn*,MinimumIssuedOn*,OrderReference*,OrganizationId*,ReminderNumber*,StartDate*,SubscriberId*,TrackingId*}", path_parameters)
    
    def by_id(self,id: UUID) -> ReminderItemRequestBuilder:
        """
        Gets an item from the info_subscription.reminder.item collection
        param id: The reminder identifier.
        Returns: ReminderItemRequestBuilder
        """
        if id is None:
            raise TypeError("id cannot be null.")
        from .item.reminder_item_request_builder import ReminderItemRequestBuilder

        url_tpl_params = get_path_parameters(self.path_parameters)
        url_tpl_params["id"] = id
        return ReminderItemRequestBuilder(self.request_adapter, url_tpl_params)
    
    async def get(self,request_configuration: Optional[RequestConfiguration[ReminderRequestBuilderGetQueryParameters]] = None) -> Optional[list[Reminder]]:
        """
        Get reminders matching a given query filter.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[list[Reminder]]
        """
        request_info = self.to_get_request_information(
            request_configuration
        )
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from ..models.reminder import Reminder

        return await self.request_adapter.send_collection_async(request_info, Reminder, None)
    
    def to_get_request_information(self,request_configuration: Optional[RequestConfiguration[ReminderRequestBuilderGetQueryParameters]] = None) -> RequestInformation:
        """
        Get reminders matching a given query filter.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        request_info = RequestInformation(Method.GET, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        return request_info
    
    def with_url(self,raw_url: str) -> ReminderRequestBuilder:
        """
        Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
        param raw_url: The raw URL to use for the request builder.
        Returns: ReminderRequestBuilder
        """
        if raw_url is None:
            raise TypeError("raw_url cannot be null.")
        return ReminderRequestBuilder(self.request_adapter, raw_url)
    
    @dataclass
    class ReminderRequestBuilderGetQueryParameters():
        """
        Get reminders matching a given query filter.
        """
        def get_query_parameter(self,original_name: str) -> str:
            """
            Maps the query parameters names to their encoded names for the URI template parsing.
            param original_name: The original query parameter name in the class.
            Returns: str
            """
            if original_name is None:
                raise TypeError("original_name cannot be null.")
            if original_name == "buyer_reference":
                return "BuyerReference"
            if original_name == "end_date":
                return "EndDate"
            if original_name == "external_invoice_identifier":
                return "ExternalInvoiceIdentifier"
            if original_name == "invoice_id":
                return "InvoiceId"
            if original_name == "invoice_number":
                return "InvoiceNumber"
            if original_name == "maximum_issued_on":
                return "MaximumIssuedOn"
            if original_name == "minimum_issued_on":
                return "MinimumIssuedOn"
            if original_name == "order_reference":
                return "OrderReference"
            if original_name == "organization_id":
                return "OrganizationId"
            if original_name == "reminder_number":
                return "ReminderNumber"
            if original_name == "start_date":
                return "StartDate"
            if original_name == "subscriber_id":
                return "SubscriberId"
            if original_name == "tracking_id":
                return "TrackingId"
            return original_name
        
        # Gets or sets the buyer reference.
        buyer_reference: Optional[str] = None

        # Gets or sets the end date.
        end_date: Optional[datetime.datetime] = None

        # Filters on the external identifier, uses exact matching. For Reminders this refers to the original Invoice.
        external_invoice_identifier: Optional[str] = None

        # Gets or sets the identifier of the invoice.
        invoice_id: Optional[UUID] = None

        # Filters on the invoice number. For credit notes and reminders this refers to the Original Invoice Number
        invoice_number: Optional[str] = None

        # The max date that the Issued time should be within range of.
        maximum_issued_on: Optional[datetime.datetime] = None

        # The minimum date that the Issued time should be within range of. For Reminder this is the ReminderDate.
        minimum_issued_on: Optional[datetime.datetime] = None

        # Gets or sets the order reference.
        order_reference: Optional[str] = None

        # Filters by OrganizationId if set. If not set all organizations are considered.
        organization_id: Optional[UUID] = None

        # Gets or sets the reminder number.
        reminder_number: Optional[int] = None

        # Gets or sets the start date.
        start_date: Optional[datetime.datetime] = None

        # Filters on the subscriber Id.
        subscriber_id: Optional[UUID] = None

        # Filters on the external tracking Id.
        tracking_id: Optional[UUID] = None

    
    @dataclass
    class ReminderRequestBuilderGetRequestConfiguration(RequestConfiguration[ReminderRequestBuilderGetQueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    

