from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .create_product_tax_detail import CreateProductTaxDetail
    from .infosoft.s4.billing.contracts.period import Period

@dataclass
class PaymentDemandTransaction(Parsable):
    """
    Represents charge details when creating account demands
    """
    # The currency valid for the price. This must match the currency on the account.
    currency: Optional[str] = None
    # The description of the individual transaction.
    description: Optional[str] = None
    # Defines a time period, where both Start and End are inclusive. If only start is given, the period represents and instant in time (useful for instance defining single transactions with no time component).
    period: Optional[Period] = None
    # The total price/amount of the line (NOT the unit price).
    price: Optional[float] = None
    # The quantity of the product. If not defined defaults to 1.
    quantity: Optional[int] = None
    # A breakdown of how tax is divided for the transaction.
    tax_details: Optional[list[CreateProductTaxDetail]] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PaymentDemandTransaction:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PaymentDemandTransaction
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PaymentDemandTransaction()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .create_product_tax_detail import CreateProductTaxDetail
        from .infosoft.s4.billing.contracts.period import Period

        from .create_product_tax_detail import CreateProductTaxDetail
        from .infosoft.s4.billing.contracts.period import Period

        fields: dict[str, Callable[[Any], None]] = {
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "period": lambda n : setattr(self, 'period', n.get_object_value(Period)),
            "price": lambda n : setattr(self, 'price', n.get_float_value()),
            "quantity": lambda n : setattr(self, 'quantity', n.get_int_value()),
            "taxDetails": lambda n : setattr(self, 'tax_details', n.get_collection_of_object_values(CreateProductTaxDetail)),
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
        writer.write_str_value("currency", self.currency)
        writer.write_str_value("description", self.description)
        writer.write_object_value("period", self.period)
        writer.write_float_value("price", self.price)
        writer.write_int_value("quantity", self.quantity)
        writer.write_collection_of_object_values("taxDetails", self.tax_details)
    

