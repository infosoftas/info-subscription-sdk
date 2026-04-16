from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .infosoft.s4.api.data_contracts.v1.identification import Identification

@dataclass
class SubscriberContact(Parsable):
    """
    A subscriber contact.
    """
    # Gets or sets the address lines.
    address_lines: Optional[list[str]] = None
    # Gets or sets the CareOf property.
    care_of: Optional[str] = None
    # Gets or sets the city.
    city: Optional[str] = None
    # Gets or sets the country.
    country: Optional[str] = None
    # Gets or sets the email.
    email: Optional[str] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets or sets the various identifications of the organization.
    identifications: Optional[list[Identification]] = None
    # Gets or sets a value indicating whether this object is primary.
    is_primary: Optional[bool] = None
    # Gets or sets the name.
    name: Optional[str] = None
    # Gets or sets the phone.
    phone: Optional[str] = None
    # Source-field for use with external-validation.
    source: Optional[str] = None
    # Gets or sets the zip code.
    zip: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SubscriberContact:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SubscriberContact
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SubscriberContact()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .infosoft.s4.api.data_contracts.v1.identification import Identification

        from .infosoft.s4.api.data_contracts.v1.identification import Identification

        fields: dict[str, Callable[[Any], None]] = {
            "addressLines": lambda n : setattr(self, 'address_lines', n.get_collection_of_primitive_values(str)),
            "careOf": lambda n : setattr(self, 'care_of', n.get_str_value()),
            "city": lambda n : setattr(self, 'city', n.get_str_value()),
            "country": lambda n : setattr(self, 'country', n.get_str_value()),
            "email": lambda n : setattr(self, 'email', n.get_str_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "identifications": lambda n : setattr(self, 'identifications', n.get_collection_of_object_values(Identification)),
            "isPrimary": lambda n : setattr(self, 'is_primary', n.get_bool_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "phone": lambda n : setattr(self, 'phone', n.get_str_value()),
            "source": lambda n : setattr(self, 'source', n.get_str_value()),
            "zip": lambda n : setattr(self, 'zip', n.get_str_value()),
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
        writer.write_collection_of_primitive_values("addressLines", self.address_lines)
        writer.write_str_value("careOf", self.care_of)
        writer.write_str_value("city", self.city)
        writer.write_str_value("country", self.country)
        writer.write_str_value("email", self.email)
        writer.write_uuid_value("id", self.id)
        writer.write_collection_of_object_values("identifications", self.identifications)
        writer.write_bool_value("isPrimary", self.is_primary)
        writer.write_str_value("name", self.name)
        writer.write_str_value("phone", self.phone)
        writer.write_str_value("source", self.source)
        writer.write_str_value("zip", self.zip)
    

