from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .subscriber_contact import SubscriberContact

@dataclass
class SubscriberCreate(Parsable):
    """
    A subscriber create.
    """
    # A subscriber contact.
    contact: Optional[SubscriberContact] = None
    # Gets or sets the identifier of the external.
    external_id: Optional[str] = None
    # Gets or sets the subscriber number.
    subscriber_number: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SubscriberCreate:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SubscriberCreate
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SubscriberCreate()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .subscriber_contact import SubscriberContact

        from .subscriber_contact import SubscriberContact

        fields: dict[str, Callable[[Any], None]] = {
            "contact": lambda n : setattr(self, 'contact', n.get_object_value(SubscriberContact)),
            "externalId": lambda n : setattr(self, 'external_id', n.get_str_value()),
            "subscriberNumber": lambda n : setattr(self, 'subscriber_number', n.get_int_value()),
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
        writer.write_object_value("contact", self.contact)
        writer.write_str_value("externalId", self.external_id)
        writer.write_int_value("subscriberNumber", self.subscriber_number)
    

