from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .optional_of_buyer import OptionalOfBuyer
    from .optional_of_recipient import OptionalOfRecipient

@dataclass
class CreditNoteUpdate(Parsable):
    """
    Represents a request to update the header of an issued credit note.
    """
    # A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    buyer: Optional[OptionalOfBuyer] = None
    # A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    buyer_reference: Optional[str] = None
    # A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    order_reference: Optional[str] = None
    # A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    recipient: Optional[OptionalOfRecipient] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> CreditNoteUpdate:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: CreditNoteUpdate
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return CreditNoteUpdate()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .optional_of_buyer import OptionalOfBuyer
        from .optional_of_recipient import OptionalOfRecipient

        from .optional_of_buyer import OptionalOfBuyer
        from .optional_of_recipient import OptionalOfRecipient

        fields: dict[str, Callable[[Any], None]] = {
            "buyer": lambda n : setattr(self, 'buyer', n.get_object_value(OptionalOfBuyer)),
            "buyerReference": lambda n : setattr(self, 'buyer_reference', n.get_str_value()),
            "orderReference": lambda n : setattr(self, 'order_reference', n.get_str_value()),
            "recipient": lambda n : setattr(self, 'recipient', n.get_object_value(OptionalOfRecipient)),
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
        writer.write_object_value("buyer", self.buyer)
        writer.write_str_value("buyerReference", self.buyer_reference)
        writer.write_str_value("orderReference", self.order_reference)
        writer.write_object_value("recipient", self.recipient)
    

