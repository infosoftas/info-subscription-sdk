from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .price import Price

@dataclass
class PlanProduct(Parsable):
    """
    Specifies a product with quantity and optional unit price for a subscription plan.
    """
    # Gets or sets the identifier of the product.
    product_id: Optional[UUID] = None
    # Gets or sets the quantity.
    quantity: Optional[int] = None
    # Represents a flattened DTO version of the Price class.
    unit_price: Optional[Price] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PlanProduct:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PlanProduct
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PlanProduct()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .price import Price

        from .price import Price

        fields: dict[str, Callable[[Any], None]] = {
            "productId": lambda n : setattr(self, 'product_id', n.get_uuid_value()),
            "quantity": lambda n : setattr(self, 'quantity', n.get_int_value()),
            "unitPrice": lambda n : setattr(self, 'unit_price', n.get_object_value(Price)),
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
        writer.write_int_value("quantity", self.quantity)
        writer.write_object_value("unitPrice", self.unit_price)
    

