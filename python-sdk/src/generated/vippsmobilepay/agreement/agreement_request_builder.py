from __future__ import annotations
from collections.abc import Callable
from kiota_abstractions.base_request_builder import BaseRequestBuilder
from kiota_abstractions.get_path_parameters import get_path_parameters
from kiota_abstractions.request_adapter import RequestAdapter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .item.agreement_item_request_builder import AgreementItemRequestBuilder

class AgreementRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /vippsmobilepay/agreement
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new AgreementRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/vippsmobilepay/agreement", path_parameters)
    
    def by_id(self,id: UUID) -> AgreementItemRequestBuilder:
        """
        Gets an item from the info.subscription.ts.vippsmobilepay.agreement.item collection
        param id: Identifier of the agreement.
        Returns: AgreementItemRequestBuilder
        """
        if id is None:
            raise TypeError("id cannot be null.")
        from .item.agreement_item_request_builder import AgreementItemRequestBuilder

        url_tpl_params = get_path_parameters(self.path_parameters)
        url_tpl_params["id"] = id
        return AgreementItemRequestBuilder(self.request_adapter, url_tpl_params)
    

