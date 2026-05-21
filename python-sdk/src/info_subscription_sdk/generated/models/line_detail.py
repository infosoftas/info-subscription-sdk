from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .amount import Amount

@dataclass
class LineDetail(Parsable):
    """
    A line detail.
    """
    # Gets the additional text descriptions.
    additional_text_descriptions: Optional[list[str]] = None
    # An amount with a currency of the amount
    amount: Optional[Amount] = None
    # Gets the a free text description for the details
    text: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> LineDetail:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: LineDetail
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return LineDetail()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .amount import Amount

        from .amount import Amount

        fields: dict[str, Callable[[Any], None]] = {
            "additionalTextDescriptions": lambda n : setattr(self, 'additional_text_descriptions', n.get_collection_of_primitive_values(str)),
            "amount": lambda n : setattr(self, 'amount', n.get_object_value(Amount)),
            "text": lambda n : setattr(self, 'text', n.get_str_value()),
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
        writer.write_collection_of_primitive_values("additionalTextDescriptions", self.additional_text_descriptions)
        writer.write_object_value("amount", self.amount)
        writer.write_str_value("text", self.text)
    

