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
    from ....models.create_payment_demand_reminder import CreatePaymentDemandReminder
    from ....models.validation_result_model import ValidationResultModel

class ReminderRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /paymentdemand/{id}/reminder
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new ReminderRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/paymentdemand/{id}/reminder", path_parameters)
    
    async def post(self,body: CreatePaymentDemandReminder, request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> None:
        """
        Use this when an external party (e.g. a debt collector) drives the reminder process and the resultinginvoice document and ledger side-effects need to be reflected in INFO-Subscription without the externalparty interfering with payment processing.
        param body: Parameters for creating a reminder on a payment demand directly, without going through a dunning schedule.This enables external parties (e.g. debt collectors) to register reminders and trigger the associatedinvoice and ledger side-effects in INFO-Subscription without interfering with payment processing.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: None
        """
        if body is None:
            raise TypeError("body cannot be null.")
        request_info = self.to_post_request_information(
            body, request_configuration
        )
        from ....models.validation_result_model import ValidationResultModel

        error_mapping: dict[str, type[ParsableFactory]] = {
            "400": ValidationResultModel,
        }
        if not self.request_adapter:
            raise Exception("Http core is null") 
        return await self.request_adapter.send_no_response_content_async(request_info, error_mapping)
    
    def to_post_request_information(self,body: CreatePaymentDemandReminder, request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> RequestInformation:
        """
        Use this when an external party (e.g. a debt collector) drives the reminder process and the resultinginvoice document and ledger side-effects need to be reflected in INFO-Subscription without the externalparty interfering with payment processing.
        param body: Parameters for creating a reminder on a payment demand directly, without going through a dunning schedule.This enables external parties (e.g. debt collectors) to register reminders and trigger the associatedinvoice and ledger side-effects in INFO-Subscription without interfering with payment processing.
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
    class ReminderRequestBuilderPostRequestConfiguration(RequestConfiguration[QueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    

