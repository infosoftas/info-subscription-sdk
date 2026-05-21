from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .billing_frequency_units import BillingFrequencyUnits

@dataclass
class BillingFrequencyView(Parsable):
    """
    A billing frequency.
    """
    # Gets or sets the identifier.
    id: Optional[int] = None
    # Gets or sets the name.
    name: Optional[str] = None
    # Gets or sets the number of units.
    number: Optional[str] = None
    # Values that represent billing frequency units.
    unit: Optional[BillingFrequencyUnits] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> BillingFrequencyView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: BillingFrequencyView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return BillingFrequencyView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .billing_frequency_units import BillingFrequencyUnits

        from .billing_frequency_units import BillingFrequencyUnits

        fields: dict[str, Callable[[Any], None]] = {
            "id": lambda n : setattr(self, 'id', n.get_int_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "number": lambda n : setattr(self, 'number', n.get_str_value()),
            "unit": lambda n : setattr(self, 'unit', n.get_enum_value(BillingFrequencyUnits)),
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
        writer.write_int_value("id", self.id)
        writer.write_str_value("name", self.name)
        writer.write_str_value("number", self.number)
        writer.write_enum_value("unit", self.unit)
    

