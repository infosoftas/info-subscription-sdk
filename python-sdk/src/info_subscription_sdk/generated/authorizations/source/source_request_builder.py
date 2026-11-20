from __future__ import annotations
from collections.abc import Callable
from kiota_abstractions.base_request_builder import BaseRequestBuilder
from kiota_abstractions.get_path_parameters import get_path_parameters
from kiota_abstractions.request_adapter import RequestAdapter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .account.account_request_builder import AccountRequestBuilder
    from .emaildomain.emaildomain_request_builder import EmaildomainRequestBuilder
    from .external.external_request_builder import ExternalRequestBuilder
    from .subscriber.subscriber_request_builder import SubscriberRequestBuilder

class SourceRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /authorizations/source
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new SourceRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/authorizations/source", path_parameters)
    
    @property
    def account(self) -> AccountRequestBuilder:
        """
        The account property
        """
        from .account.account_request_builder import AccountRequestBuilder

        return AccountRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def emaildomain(self) -> EmaildomainRequestBuilder:
        """
        The emaildomain property
        """
        from .emaildomain.emaildomain_request_builder import EmaildomainRequestBuilder

        return EmaildomainRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def external(self) -> ExternalRequestBuilder:
        """
        The external property
        """
        from .external.external_request_builder import ExternalRequestBuilder

        return ExternalRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def subscriber(self) -> SubscriberRequestBuilder:
        """
        The subscriber property
        """
        from .subscriber.subscriber_request_builder import SubscriberRequestBuilder

        return SubscriberRequestBuilder(self.request_adapter, self.path_parameters)
    

