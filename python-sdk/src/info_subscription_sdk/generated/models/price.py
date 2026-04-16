from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

@dataclass
class Price(Parsable):
    """
    Represents a flattened DTO version of the Price class.
    """
    # The currency for all parts of the price.
    currency: Optional[str] = None
    # The amount of the price that is TAX/VAT.
    tax_amount: Optional[float] = None
    # Tax price amount excluding taxes (Net).
    tax_exclusive: Optional[float] = None
    # The price amount including taxes (Gross).
    tax_inclusive: Optional[float] = None
    # The tax rate in percentages.
    tax_rate: Optional[float] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> Price:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Price
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return Price()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "taxAmount": lambda n : setattr(self, 'tax_amount', n.get_float_value()),
            "taxExclusive": lambda n : setattr(self, 'tax_exclusive', n.get_float_value()),
            "taxInclusive": lambda n : setattr(self, 'tax_inclusive', n.get_float_value()),
            "taxRate": lambda n : setattr(self, 'tax_rate', n.get_float_value()),
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
        writer.write_float_value("taxAmount", self.tax_amount)
        writer.write_float_value("taxExclusive", self.tax_exclusive)
        writer.write_float_value("taxInclusive", self.tax_inclusive)
        writer.write_float_value("taxRate", self.tax_rate)
    

