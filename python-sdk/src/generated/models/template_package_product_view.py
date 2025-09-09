from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class TemplatePackageProductView(Parsable):
    """
    A template package product view class.
    """
    # Gets or sets the full price.
    full_price: Optional[float] = None
    # Gets or sets the identifier of the product.
    product_id: Optional[UUID] = None
    # Gets or sets the tax percent.
    tax_percent: Optional[float] = None
    # Gets or sets the identifier of the template package.
    template_package_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> TemplatePackageProductView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: TemplatePackageProductView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return TemplatePackageProductView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "fullPrice": lambda n : setattr(self, 'full_price', n.get_float_value()),
            "productId": lambda n : setattr(self, 'product_id', n.get_uuid_value()),
            "taxPercent": lambda n : setattr(self, 'tax_percent', n.get_float_value()),
            "templatePackageId": lambda n : setattr(self, 'template_package_id', n.get_uuid_value()),
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
        writer.write_float_value("fullPrice", self.full_price)
        writer.write_uuid_value("productId", self.product_id)
        writer.write_float_value("taxPercent", self.tax_percent)
        writer.write_uuid_value("templatePackageId", self.template_package_id)
    

