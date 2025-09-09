from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .price import Price

@dataclass
class AdditionalProductView(Parsable):
    """
    Represents an additional product.
    """
    # A value indicating if this product is included in the subscription plan or not.
    included_in_plan: Optional[bool] = None
    # The product identifier.
    product_id: Optional[UUID] = None
    # A value indicating whether the price should be re-calculated at renewal based on the list price or not. This has no effect if IncludedInPlan is true.
    renewal_at_list_price: Optional[bool] = None
    # The the subscription package this product is associated with.
    subscription_package_id: Optional[UUID] = None
    # Represents a flattened DTO version of the Price class.
    unit_price: Optional[Price] = None
    # The number of units of this product.
    units: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> AdditionalProductView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: AdditionalProductView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return AdditionalProductView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .price import Price

        from .price import Price

        fields: dict[str, Callable[[Any], None]] = {
            "includedInPlan": lambda n : setattr(self, 'included_in_plan', n.get_bool_value()),
            "productId": lambda n : setattr(self, 'product_id', n.get_uuid_value()),
            "renewalAtListPrice": lambda n : setattr(self, 'renewal_at_list_price', n.get_bool_value()),
            "subscriptionPackageId": lambda n : setattr(self, 'subscription_package_id', n.get_uuid_value()),
            "unitPrice": lambda n : setattr(self, 'unit_price', n.get_object_value(Price)),
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
        writer.write_bool_value("includedInPlan", self.included_in_plan)
        writer.write_uuid_value("productId", self.product_id)
        writer.write_bool_value("renewalAtListPrice", self.renewal_at_list_price)
        writer.write_uuid_value("subscriptionPackageId", self.subscription_package_id)
        writer.write_object_value("unitPrice", self.unit_price)
        writer.write_int_value("units", self.units)
    

