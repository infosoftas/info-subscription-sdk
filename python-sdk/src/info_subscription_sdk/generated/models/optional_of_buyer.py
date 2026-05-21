from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .buyer import Buyer

from .buyer import Buyer

@dataclass
class OptionalOfBuyer(Buyer, Parsable):
    """
    A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    """
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> OptionalOfBuyer:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: OptionalOfBuyer
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return OptionalOfBuyer()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .buyer import Buyer

        from .buyer import Buyer

        fields: dict[str, Callable[[Any], None]] = {
        }
        super_fields = super().get_field_deserializers()
        fields.update(super_fields)
        return fields
    
    def serialize(self,writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if writer is None:
            raise TypeError("writer cannot be null.")
        super().serialize(writer)
    

