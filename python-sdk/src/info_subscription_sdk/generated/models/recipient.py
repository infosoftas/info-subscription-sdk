from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .contact import Contact
    from .identification import Identification

@dataclass
class Recipient(Parsable):
    """
    A recipient is a person, company or other entity which a given invoice is distributed to.
    """
    # City of the recipient.
    city: Optional[str] = None
    # Represents contact information for an entity.
    contact: Optional[Contact] = None
    # Country of the recipient.
    country: Optional[str] = None
    # The email of the recipient
    email: Optional[str] = None
    # An identification.
    external_id: Optional[Identification] = None
    # An identification.
    id: Optional[Identification] = None
    # The list of unique identifications for the recipient.
    identifications: Optional[list[Identification]] = None
    # The name of the recipient.
    name: Optional[str] = None
    # The street including house number etc.
    street: Optional[str] = None
    # The telephone number of the recipient
    telephone: Optional[str] = None
    # Zip code of the recipient
    zip_code: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> Recipient:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Recipient
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return Recipient()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .contact import Contact
        from .identification import Identification

        from .contact import Contact
        from .identification import Identification

        fields: dict[str, Callable[[Any], None]] = {
            "city": lambda n : setattr(self, 'city', n.get_str_value()),
            "contact": lambda n : setattr(self, 'contact', n.get_object_value(Contact)),
            "country": lambda n : setattr(self, 'country', n.get_str_value()),
            "email": lambda n : setattr(self, 'email', n.get_str_value()),
            "externalId": lambda n : setattr(self, 'external_id', n.get_object_value(Identification)),
            "id": lambda n : setattr(self, 'id', n.get_object_value(Identification)),
            "identifications": lambda n : setattr(self, 'identifications', n.get_collection_of_object_values(Identification)),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "street": lambda n : setattr(self, 'street', n.get_str_value()),
            "telephone": lambda n : setattr(self, 'telephone', n.get_str_value()),
            "zipCode": lambda n : setattr(self, 'zip_code', n.get_str_value()),
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
        writer.write_str_value("city", self.city)
        writer.write_object_value("contact", self.contact)
        writer.write_str_value("country", self.country)
        writer.write_str_value("email", self.email)
        writer.write_object_value("externalId", self.external_id)
        writer.write_object_value("id", self.id)
        writer.write_collection_of_object_values("identifications", self.identifications)
        writer.write_str_value("name", self.name)
        writer.write_str_value("street", self.street)
        writer.write_str_value("telephone", self.telephone)
        writer.write_str_value("zipCode", self.zip_code)
    

