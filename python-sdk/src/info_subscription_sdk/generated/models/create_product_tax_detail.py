from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class CreateProductTaxDetail(Parsable):
    """
    A DTO used during creation of Demand Transactions with Product Tax Detail information.
    """
    # The total amount including taxes (NOT UNIT Amount).
    amount: Optional[float] = None
    # Gets the description.
    description: Optional[str] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets the identifier of the product.
    product_id: Optional[UUID] = None
    # The quantity sold. If not defined defaults to 1.
    quantity: Optional[int] = None
    # The tax percent/rate.
    tax_percent: Optional[float] = None
    # The total amount without taxes (NOT UNIT Amount).
    taxable_amount: Optional[float] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> CreateProductTaxDetail:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: CreateProductTaxDetail
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return CreateProductTaxDetail()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "amount": lambda n : setattr(self, 'amount', n.get_float_value()),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "productId": lambda n : setattr(self, 'product_id', n.get_uuid_value()),
            "quantity": lambda n : setattr(self, 'quantity', n.get_int_value()),
            "taxPercent": lambda n : setattr(self, 'tax_percent', n.get_float_value()),
            "taxableAmount": lambda n : setattr(self, 'taxable_amount', n.get_float_value()),
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
        writer.write_float_value("amount", self.amount)
        writer.write_str_value("description", self.description)
        writer.write_uuid_value("id", self.id)
        writer.write_uuid_value("productId", self.product_id)
        writer.write_int_value("quantity", self.quantity)
        writer.write_float_value("taxPercent", self.tax_percent)
        writer.write_float_value("taxableAmount", self.taxable_amount)
    

