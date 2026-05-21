from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .tax_scheme import TaxScheme

@dataclass
class TaxGroup(Parsable):
    """
    Represents a tax type/group by a name, code and percentage.
    """
    # Gets the name of the group
    name: Optional[str] = None
    # Gets the tax rate expressed as a percentage
    percent: Optional[float] = None
    # Code specifying a type of duty, tax or fee.
    tax_scheme: Optional[TaxScheme] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> TaxGroup:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: TaxGroup
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return TaxGroup()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .tax_scheme import TaxScheme

        from .tax_scheme import TaxScheme

        fields: dict[str, Callable[[Any], None]] = {
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "percent": lambda n : setattr(self, 'percent', n.get_float_value()),
            "taxScheme": lambda n : setattr(self, 'tax_scheme', n.get_object_value(TaxScheme)),
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
        writer.write_str_value("name", self.name)
        writer.write_float_value("percent", self.percent)
        writer.write_object_value("taxScheme", self.tax_scheme)
    

