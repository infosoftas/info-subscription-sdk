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
    from ..models.subscription_create import SubscriptionCreate
    from ..models.subscription_view import SubscriptionView
    from ..models.validation_result_model import ValidationResultModel

class SubscriptionRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /subscription
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new SubscriptionRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/subscription{?Cancelled*,EnterprisePlanId*,Id*,InvoiceContactId*,NextInvoiceContactId*,NextSubscription*,OrganizationId*,Renewed*,SubscriberAccount*,SubscriberId*}", path_parameters)
    
    async def get(self,request_configuration: Optional[RequestConfiguration[SubscriptionRequestBuilderGetQueryParameters]] = None) -> Optional[list[SubscriptionView]]:
        """
        Get all subscriptions.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[list[SubscriptionView]]
        """
        request_info = self.to_get_request_information(
            request_configuration
        )
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from ..models.subscription_view import SubscriptionView

        return await self.request_adapter.send_collection_async(request_info, SubscriptionView, None)
    
    async def post(self,body: SubscriptionCreate, request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> Optional[SubscriptionView]:
        """
        Creates a new subscription for a subscriber.Note: For most purposes new subscriptions should be created using the Order flow asthat handles more than just the raw subscription period.This will create a new subscription period based on the parameters of the given package andthe given PaymentAgreementId.Other subscriptions will continue to exist parallel to this one. In case a replacement isneeded changing the package instead.
        param body: A subscription create.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[SubscriptionView]
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
        from ..models.subscription_view import SubscriptionView

        return await self.request_adapter.send_async(request_info, SubscriptionView, error_mapping)
    
    def to_get_request_information(self,request_configuration: Optional[RequestConfiguration[SubscriptionRequestBuilderGetQueryParameters]] = None) -> RequestInformation:
        """
        Get all subscriptions.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        request_info = RequestInformation(Method.GET, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        return request_info
    
    def to_post_request_information(self,body: SubscriptionCreate, request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> RequestInformation:
        """
        Creates a new subscription for a subscriber.Note: For most purposes new subscriptions should be created using the Order flow asthat handles more than just the raw subscription period.This will create a new subscription period based on the parameters of the given package andthe given PaymentAgreementId.Other subscriptions will continue to exist parallel to this one. In case a replacement isneeded changing the package instead.
        param body: A subscription create.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        if body is None:
            raise TypeError("body cannot be null.")
        request_info = RequestInformation(Method.POST, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        request_info.set_content_from_parsable(self.request_adapter, "application/json-patch+json", body)
        return request_info
    
    def with_url(self,raw_url: str) -> SubscriptionRequestBuilder:
        """
        Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
        param raw_url: The raw URL to use for the request builder.
        Returns: SubscriptionRequestBuilder
        """
        if raw_url is None:
            raise TypeError("raw_url cannot be null.")
        return SubscriptionRequestBuilder(self.request_adapter, raw_url)
    
    @dataclass
    class SubscriptionRequestBuilderGetQueryParameters():
        """
        Get all subscriptions.
        """
        def get_query_parameter(self,original_name: str) -> str:
            """
            Maps the query parameters names to their encoded names for the URI template parsing.
            param original_name: The original query parameter name in the class.
            Returns: str
            """
            if original_name is None:
                raise TypeError("original_name cannot be null.")
            if original_name == "cancelled":
                return "Cancelled"
            if original_name == "enterprise_plan_id":
                return "EnterprisePlanId"
            if original_name == "id":
                return "Id"
            if original_name == "invoice_contact_id":
                return "InvoiceContactId"
            if original_name == "next_invoice_contact_id":
                return "NextInvoiceContactId"
            if original_name == "next_subscription":
                return "NextSubscription"
            if original_name == "organization_id":
                return "OrganizationId"
            if original_name == "renewed":
                return "Renewed"
            if original_name == "subscriber_account":
                return "SubscriberAccount"
            if original_name == "subscriber_id":
                return "SubscriberId"
            return original_name
        
        # Gets or sets the cancelled.
        cancelled: Optional[bool] = None

        # Gets or sets the identifier of the enterprise plan.
        enterprise_plan_id: Optional[UUID] = None

        # Gets or sets the identifier.
        id: Optional[UUID] = None

        # Gets or sets the identifier of the invoice contact.
        invoice_contact_id: Optional[UUID] = None

        # Gets or sets the identifier of the next invoice contact.
        next_invoice_contact_id: Optional[UUID] = None

        # Gets or sets the next subscription.
        next_subscription: Optional[UUID] = None

        # Gets or sets the identifier of the organization.
        organization_id: Optional[UUID] = None

        # Gets or sets the renewed.
        renewed: Optional[bool] = None

        # Gets or sets the identifier of the subscriber account.
        subscriber_account: Optional[UUID] = None

        # Gets or sets the identifier of the subscriber.
        subscriber_id: Optional[UUID] = None

    
    @dataclass
    class SubscriptionRequestBuilderGetRequestConfiguration(RequestConfiguration[SubscriptionRequestBuilderGetQueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    
    @dataclass
    class SubscriptionRequestBuilderPostRequestConfiguration(RequestConfiguration[QueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    

