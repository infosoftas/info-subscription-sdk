from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .contact import Contact
    from .identification import Identification
    from .postal_address import PostalAddress

@dataclass
class Participant(Parsable):
    """
    A participant.
    """
    # Represents contact information for an entity.
    contact: Optional[Contact] = None
    # An identification.
    external_id: Optional[Identification] = None
    # An identification.
    id: Optional[Identification] = None
    # Gets the various identifications.
    identifications: Optional[list[Identification]] = None
    # Gets or sets the name.
    name: Optional[str] = None
    # A postal address.
    postal_address: Optional[PostalAddress] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> Participant:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Participant
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return Participant()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .contact import Contact
        from .identification import Identification
        from .postal_address import PostalAddress

        from .contact import Contact
        from .identification import Identification
        from .postal_address import PostalAddress

        fields: dict[str, Callable[[Any], None]] = {
            "contact": lambda n : setattr(self, 'contact', n.get_object_value(Contact)),
            "externalId": lambda n : setattr(self, 'external_id', n.get_object_value(Identification)),
            "id": lambda n : setattr(self, 'id', n.get_object_value(Identification)),
            "identifications": lambda n : setattr(self, 'identifications', n.get_collection_of_object_values(Identification)),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "postalAddress": lambda n : setattr(self, 'postal_address', n.get_object_value(PostalAddress)),
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
        writer.write_object_value("externalId", self.external_id)
        writer.write_object_value("id", self.id)
        writer.write_collection_of_object_values("identifications", self.identifications)
        writer.write_str_value("name", self.name)
        writer.write_object_value("postalAddress", self.postal_address)
    

