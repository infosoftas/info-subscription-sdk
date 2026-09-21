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
from warnings import warn

if TYPE_CHECKING:
    from ...models.validation_result_model import ValidationResultModel
    from .credit.credit_request_builder import CreditRequestBuilder
    from .paymentdemand_get_response import PaymentdemandGetResponse
    from .reminder.reminder_request_builder import ReminderRequestBuilder
    from .reminders.reminders_request_builder import RemindersRequestBuilder
    from .writeoff.writeoff_request_builder import WriteoffRequestBuilder

class PaymentdemandItemRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /paymentdemand/{id}
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new PaymentdemandItemRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/paymentdemand/{id}", path_parameters)
    
    async def get(self,request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> Optional[PaymentdemandGetResponse]:
        """
        Gets a specific payment demand.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[PaymentdemandGetResponse]
        """
        request_info = self.to_get_request_information(
            request_configuration
        )
        from ...models.validation_result_model import ValidationResultModel

        error_mapping: dict[str, type[ParsableFactory]] = {
            "400": ValidationResultModel,
        }
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from .paymentdemand_get_response import PaymentdemandGetResponse

        return await self.request_adapter.send_async(request_info, PaymentdemandGetResponse, error_mapping)
    
    def to_get_request_information(self,request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> RequestInformation:
        """
        Gets a specific payment demand.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        request_info = RequestInformation(Method.GET, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        return request_info
    
    def with_url(self,raw_url: str) -> PaymentdemandItemRequestBuilder:
        """
        Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
        param raw_url: The raw URL to use for the request builder.
        Returns: PaymentdemandItemRequestBuilder
        """
        if raw_url is None:
            raise TypeError("raw_url cannot be null.")
        return PaymentdemandItemRequestBuilder(self.request_adapter, raw_url)
    
    @property
    def credit(self) -> CreditRequestBuilder:
        """
        The credit property
        """
        from .credit.credit_request_builder import CreditRequestBuilder

        return CreditRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def reminder(self) -> ReminderRequestBuilder:
        """
        The reminder property
        """
        from .reminder.reminder_request_builder import ReminderRequestBuilder

        return ReminderRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def reminders(self) -> RemindersRequestBuilder:
        """
        The reminders property
        """
        from .reminders.reminders_request_builder import RemindersRequestBuilder

        return RemindersRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def writeoff(self) -> WriteoffRequestBuilder:
        """
        The writeoff property
        """
        from .writeoff.writeoff_request_builder import WriteoffRequestBuilder

        return WriteoffRequestBuilder(self.request_adapter, self.path_parameters)
    
    @dataclass
    class PaymentdemandItemRequestBuilderGetRequestConfiguration(RequestConfiguration[QueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    

