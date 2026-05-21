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
    from ..models.infosoft.s4.invoice.contracts.read_model.invoice_state import InvoiceState
    from ..models.invoice import Invoice
    from .configuration.configuration_request_builder import ConfigurationRequestBuilder
    from .documentnetwork.documentnetwork_request_builder import DocumentnetworkRequestBuilder
    from .item.invoice_item_request_builder import InvoiceItemRequestBuilder

class InvoiceRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /invoice
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new InvoiceRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/invoice{?BuyerReference*,CreditNoteId*,EndDate*,ExternalInvoiceIdentifier*,InvoiceNumber*,MaximumIssuedOn*,MinimumIssuedOn*,OrderReference*,OrganizationId*,StartDate*,State*,SubscriberId*,TrackingId*}", path_parameters)
    
    def by_id(self,id: UUID) -> InvoiceItemRequestBuilder:
        """
        Gets an item from the info_subscription.invoice.item collection
        param id: The invoice identifier.
        Returns: InvoiceItemRequestBuilder
        """
        if id is None:
            raise TypeError("id cannot be null.")
        from .item.invoice_item_request_builder import InvoiceItemRequestBuilder

        url_tpl_params = get_path_parameters(self.path_parameters)
        url_tpl_params["id"] = id
        return InvoiceItemRequestBuilder(self.request_adapter, url_tpl_params)
    
    async def get(self,request_configuration: Optional[RequestConfiguration[InvoiceRequestBuilderGetQueryParameters]] = None) -> Optional[list[Invoice]]:
        """
        Get all invoices.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[list[Invoice]]
        """
        request_info = self.to_get_request_information(
            request_configuration
        )
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from ..models.invoice import Invoice

        return await self.request_adapter.send_collection_async(request_info, Invoice, None)
    
    def to_get_request_information(self,request_configuration: Optional[RequestConfiguration[InvoiceRequestBuilderGetQueryParameters]] = None) -> RequestInformation:
        """
        Get all invoices.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        request_info = RequestInformation(Method.GET, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        return request_info
    
    def with_url(self,raw_url: str) -> InvoiceRequestBuilder:
        """
        Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
        param raw_url: The raw URL to use for the request builder.
        Returns: InvoiceRequestBuilder
        """
        if raw_url is None:
            raise TypeError("raw_url cannot be null.")
        return InvoiceRequestBuilder(self.request_adapter, raw_url)
    
    @property
    def configuration(self) -> ConfigurationRequestBuilder:
        """
        The configuration property
        """
        from .configuration.configuration_request_builder import ConfigurationRequestBuilder

        return ConfigurationRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def documentnetwork(self) -> DocumentnetworkRequestBuilder:
        """
        The documentnetwork property
        """
        from .documentnetwork.documentnetwork_request_builder import DocumentnetworkRequestBuilder

        return DocumentnetworkRequestBuilder(self.request_adapter, self.path_parameters)
    
    @dataclass
    class InvoiceRequestBuilderGetQueryParameters():
        """
        Get all invoices.
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
            if original_name == "credit_note_id":
                return "CreditNoteId"
            if original_name == "end_date":
                return "EndDate"
            if original_name == "external_invoice_identifier":
                return "ExternalInvoiceIdentifier"
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
            if original_name == "start_date":
                return "StartDate"
            if original_name == "state":
                return "State"
            if original_name == "subscriber_id":
                return "SubscriberId"
            if original_name == "tracking_id":
                return "TrackingId"
            return original_name
        
        # Gets or sets the buyer reference.
        buyer_reference: Optional[str] = None

        # Filters on the Credit Note. Invoices without credit notes will not be included.
        credit_note_id: Optional[UUID] = None

        # Gets or sets the end date.
        end_date: Optional[datetime.datetime] = None

        # Filters on the external identifier, uses exact matching. For Reminders this refers to the original Invoice.
        external_invoice_identifier: Optional[str] = None

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

        # Gets or sets the start date.
        start_date: Optional[datetime.datetime] = None

        # Filters on the state of the Invoice.
        state: Optional[InvoiceState] = None

        # Filters on the subscriber Id.
        subscriber_id: Optional[UUID] = None

        # Filters on the external tracking Id.
        tracking_id: Optional[UUID] = None

    
    @dataclass
    class InvoiceRequestBuilderGetRequestConfiguration(RequestConfiguration[InvoiceRequestBuilderGetQueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    

