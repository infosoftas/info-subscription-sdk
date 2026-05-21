from __future__ import annotations
from collections.abc import Callable
from kiota_abstractions.base_request_builder import BaseRequestBuilder
from kiota_abstractions.get_path_parameters import get_path_parameters
from kiota_abstractions.request_adapter import RequestAdapter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .item.with_subscriber_account_item_request_builder import WithSubscriberAccountItemRequestBuilder

class AssignaccountRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /payment/{-id}/assignaccount
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new AssignaccountRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/payment/{%2Did}/assignaccount", path_parameters)
    
    def by_subscriber_account_id(self,subscriber_account_id: UUID) -> WithSubscriberAccountItemRequestBuilder:
        """
        Gets an item from the info_subscription.payment.item.assignaccount.item collection
        param subscriber_account_id: The subscriber account identifier.
        Returns: WithSubscriberAccountItemRequestBuilder
        """
        if subscriber_account_id is None:
            raise TypeError("subscriber_account_id cannot be null.")
        from .item.with_subscriber_account_item_request_builder import WithSubscriberAccountItemRequestBuilder

        url_tpl_params = get_path_parameters(self.path_parameters)
        url_tpl_params["subscriberAccountId"] = subscriber_account_id
        return WithSubscriberAccountItemRequestBuilder(self.request_adapter, url_tpl_params)
    

