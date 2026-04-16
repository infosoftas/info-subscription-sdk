from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class SubscriptionPackageProductView(Parsable):
    """
    A subscription package product view.
    """
    # Gets or sets the description.
    description: Optional[str] = None
    # Gets or sets the full price.
    full_price: Optional[float] = None
    # Gets or sets the name.
    name: Optional[str] = None
    # Gets or sets the identifier of the product.
    product_id: Optional[UUID] = None
    # Gets or sets the identifier of the subscription package.
    subscription_package_id: Optional[UUID] = None
    # Gets or sets the tax percent.
    tax_percent: Optional[float] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SubscriptionPackageProductView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SubscriptionPackageProductView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SubscriptionPackageProductView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "fullPrice": lambda n : setattr(self, 'full_price', n.get_float_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "productId": lambda n : setattr(self, 'product_id', n.get_uuid_value()),
            "subscriptionPackageId": lambda n : setattr(self, 'subscription_package_id', n.get_uuid_value()),
            "taxPercent": lambda n : setattr(self, 'tax_percent', n.get_float_value()),
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
        writer.write_str_value("description", self.description)
        writer.write_float_value("fullPrice", self.full_price)
        writer.write_str_value("name", self.name)
        writer.write_uuid_value("productId", self.product_id)
        writer.write_uuid_value("subscriptionPackageId", self.subscription_package_id)
        writer.write_float_value("taxPercent", self.tax_percent)
    

