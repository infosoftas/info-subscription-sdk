from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .price import Price

@dataclass
class AdditionalProductOrder(Parsable):
    """
    An additional product to add to an order.
    """
    # The identifier of the product, should match an existing product.
    product_id: Optional[UUID] = None
    # A value indicating whether to price during renewals at the list price instead of the override. This has no effect if price override is not given.
    renewal_at_list_price: Optional[bool] = None
    # Represents a flattened DTO version of the Price class.
    unit_price_override: Optional[Price] = None
    # The number of units of this product.
    units: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> AdditionalProductOrder:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: AdditionalProductOrder
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return AdditionalProductOrder()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .price import Price

        from .price import Price

        fields: dict[str, Callable[[Any], None]] = {
            "productId": lambda n : setattr(self, 'product_id', n.get_uuid_value()),
            "renewalAtListPrice": lambda n : setattr(self, 'renewal_at_list_price', n.get_bool_value()),
            "unitPriceOverride": lambda n : setattr(self, 'unit_price_override', n.get_object_value(Price)),
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
        writer.write_bool_value("renewalAtListPrice", self.renewal_at_list_price)
        writer.write_object_value("unitPriceOverride", self.unit_price_override)
        writer.write_int_value("units", self.units)
    

