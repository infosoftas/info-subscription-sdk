from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class AdditionalProduct(Parsable):
    """
    A additional product.
    """
    # Gets or sets the product identifier.
    product_id: Optional[UUID] = None
    # Gets or sets the identifier of the template package.
    template_package_id: Optional[UUID] = None
    # Gets or sets the number of units.
    units: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> AdditionalProduct:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: AdditionalProduct
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return AdditionalProduct()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "productId": lambda n : setattr(self, 'product_id', n.get_uuid_value()),
            "templatePackageId": lambda n : setattr(self, 'template_package_id', n.get_uuid_value()),
            "units": lambda n : setattr(self, 'units', n.get_int_value()),
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
        writer.write_uuid_value("productId", self.product_id)
        writer.write_uuid_value("templatePackageId", self.template_package_id)
        writer.write_int_value("units", self.units)
    

