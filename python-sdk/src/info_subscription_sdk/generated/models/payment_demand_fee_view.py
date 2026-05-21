from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .product_tax_detail_view import ProductTaxDetailView

@dataclass
class PaymentDemandFeeView(Parsable):
    """
    A payment demand fee view.
    """
    # Gets or sets the amount.
    amount: Optional[float] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets or sets the tax details.
    tax_details: Optional[list[ProductTaxDetailView]] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PaymentDemandFeeView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PaymentDemandFeeView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PaymentDemandFeeView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .product_tax_detail_view import ProductTaxDetailView

        from .product_tax_detail_view import ProductTaxDetailView

        fields: dict[str, Callable[[Any], None]] = {
            "amount": lambda n : setattr(self, 'amount', n.get_float_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "taxDetails": lambda n : setattr(self, 'tax_details', n.get_collection_of_object_values(ProductTaxDetailView)),
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
        writer.write_uuid_value("id", self.id)
        writer.write_collection_of_object_values("taxDetails", self.tax_details)
    

