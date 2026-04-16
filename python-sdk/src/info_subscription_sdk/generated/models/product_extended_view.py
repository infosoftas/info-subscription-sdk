from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .product_calendar import ProductCalendar
    from .product_category import ProductCategory
    from .product_price_view import ProductPriceView
    from .tax_group_view import TaxGroupView

@dataclass
class ProductExtendedView(Parsable):
    """
    A product extended view.
    """
    # Gets or sets the calendars.
    calendars: Optional[list[ProductCalendar]] = None
    # Gets or sets the description.
    description: Optional[str] = None
    # Gets or sets the external part no.
    external_part_no: Optional[str] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets or sets the name.
    name: Optional[str] = None
    # Gets or sets the identifier of the organization.
    organization_id: Optional[UUID] = None
    # Gets or sets the part no.
    part_no: Optional[str] = None
    # A product category.
    product_category: Optional[ProductCategory] = None
    # A product price view.
    product_price: Optional[ProductPriceView] = None
    # Properties of a tax group.
    tax_group: Optional[TaxGroupView] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> ProductExtendedView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: ProductExtendedView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return ProductExtendedView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .product_calendar import ProductCalendar
        from .product_category import ProductCategory
        from .product_price_view import ProductPriceView
        from .tax_group_view import TaxGroupView

        from .product_calendar import ProductCalendar
        from .product_category import ProductCategory
        from .product_price_view import ProductPriceView
        from .tax_group_view import TaxGroupView

        fields: dict[str, Callable[[Any], None]] = {
            "calendars": lambda n : setattr(self, 'calendars', n.get_collection_of_object_values(ProductCalendar)),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "externalPartNo": lambda n : setattr(self, 'external_part_no', n.get_str_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "partNo": lambda n : setattr(self, 'part_no', n.get_str_value()),
            "productCategory": lambda n : setattr(self, 'product_category', n.get_object_value(ProductCategory)),
            "productPrice": lambda n : setattr(self, 'product_price', n.get_object_value(ProductPriceView)),
            "taxGroup": lambda n : setattr(self, 'tax_group', n.get_object_value(TaxGroupView)),
        }
        return fields
    
    def serialize(self,writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if writer is None:
            raise TypeError("writer cannot be null.")
        writer.write_collection_of_object_values("calendars", self.calendars)
        writer.write_str_value("description", self.description)
        writer.write_str_value("externalPartNo", self.external_part_no)
        writer.write_uuid_value("id", self.id)
        writer.write_str_value("name", self.name)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_str_value("partNo", self.part_no)
        writer.write_object_value("productCategory", self.product_category)
        writer.write_object_value("productPrice", self.product_price)
        writer.write_object_value("taxGroup", self.tax_group)
    

