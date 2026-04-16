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
    from ..models.product_extended_create import ProductExtendedCreate
    from ..models.product_extended_view import ProductExtendedView
    from ..models.validation_result_model import ValidationResultModel

class ProductRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /product
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new ProductRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/product{?CategoryId*,ExternalPartNo*,Id*,OrganizationId*,PartNo*}", path_parameters)
    
    async def get(self,request_configuration: Optional[RequestConfiguration[ProductRequestBuilderGetQueryParameters]] = None) -> Optional[list[ProductExtendedView]]:
        """
        Get all products.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[list[ProductExtendedView]]
        """
        request_info = self.to_get_request_information(
            request_configuration
        )
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from ..models.product_extended_view import ProductExtendedView

        return await self.request_adapter.send_collection_async(request_info, ProductExtendedView, None)
    
    async def post(self,body: ProductExtendedCreate, request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> Optional[ProductExtendedView]:
        """
        Creates a new product with default price and tax group.
        param body: A product extended create.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[ProductExtendedView]
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
        from ..models.product_extended_view import ProductExtendedView

        return await self.request_adapter.send_async(request_info, ProductExtendedView, error_mapping)
    
    def to_get_request_information(self,request_configuration: Optional[RequestConfiguration[ProductRequestBuilderGetQueryParameters]] = None) -> RequestInformation:
        """
        Get all products.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        request_info = RequestInformation(Method.GET, self.url_template, self.path_parameters)
        request_info.configure(request_configuration)
        request_info.headers.try_add("Accept", "application/json")
        return request_info
    
    def to_post_request_information(self,body: ProductExtendedCreate, request_configuration: Optional[RequestConfiguration[QueryParameters]] = None) -> RequestInformation:
        """
        Creates a new product with default price and tax group.
        param body: A product extended create.
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
    
    def with_url(self,raw_url: str) -> ProductRequestBuilder:
        """
        Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
        param raw_url: The raw URL to use for the request builder.
        Returns: ProductRequestBuilder
        """
        if raw_url is None:
            raise TypeError("raw_url cannot be null.")
        return ProductRequestBuilder(self.request_adapter, raw_url)
    
    @dataclass
    class ProductRequestBuilderGetQueryParameters():
        """
        Get all products.
        """
        def get_query_parameter(self,original_name: str) -> str:
            """
            Maps the query parameters names to their encoded names for the URI template parsing.
            param original_name: The original query parameter name in the class.
            Returns: str
            """
            if original_name is None:
                raise TypeError("original_name cannot be null.")
            if original_name == "category_id":
                return "CategoryId"
            if original_name == "external_part_no":
                return "ExternalPartNo"
            if original_name == "id":
                return "Id"
            if original_name == "organization_id":
                return "OrganizationId"
            if original_name == "part_no":
                return "PartNo"
            return original_name
        
        # Gets or sets the identifier of the category.
        category_id: Optional[UUID] = None

        # Gets or sets the external part no.
        external_part_no: Optional[str] = None

        # Gets or sets the identifier.
        id: Optional[UUID] = None

        # Gets or sets the identifier of the organization.
        organization_id: Optional[UUID] = None

        # Gets or sets the part no.
        part_no: Optional[str] = None

    
    @dataclass
    class ProductRequestBuilderGetRequestConfiguration(RequestConfiguration[ProductRequestBuilderGetQueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    
    @dataclass
    class ProductRequestBuilderPostRequestConfiguration(RequestConfiguration[QueryParameters]):
        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        warn("This class is deprecated. Please use the generic RequestConfiguration class generated by the generator.", DeprecationWarning)
    

