from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .identification_create import IdentificationCreate

@dataclass
class OrganizationCreate(Parsable):
    """
    An organization create.
    """
    # Gets or sets the city.
    city: Optional[str] = None
    # Gets or sets the country.
    country: Optional[str] = None
    # Gets or sets the description.
    description: Optional[str] = None
    # Gets or sets the email.
    email: Optional[str] = None
    # Gets or sets the identifications. The identifications.
    identifications: Optional[list[IdentificationCreate]] = None
    # Gets or sets the name.
    name: Optional[str] = None
    # Gets or sets the street.
    street: Optional[str] = None
    # Gets or sets the telephone.
    telephone: Optional[str] = None
    # Gets or sets the identifier of the time zone.
    time_zone_id: Optional[str] = None
    # Gets or sets the zip code.
    zip_code: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> OrganizationCreate:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: OrganizationCreate
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return OrganizationCreate()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .identification_create import IdentificationCreate

        from .identification_create import IdentificationCreate

        fields: dict[str, Callable[[Any], None]] = {
            "city": lambda n : setattr(self, 'city', n.get_str_value()),
            "country": lambda n : setattr(self, 'country', n.get_str_value()),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "email": lambda n : setattr(self, 'email', n.get_str_value()),
            "identifications": lambda n : setattr(self, 'identifications', n.get_collection_of_object_values(IdentificationCreate)),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "street": lambda n : setattr(self, 'street', n.get_str_value()),
            "telephone": lambda n : setattr(self, 'telephone', n.get_str_value()),
            "timeZoneId": lambda n : setattr(self, 'time_zone_id', n.get_str_value()),
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
        writer.write_str_value("country", self.country)
        writer.write_str_value("description", self.description)
        writer.write_str_value("email", self.email)
        writer.write_collection_of_object_values("identifications", self.identifications)
        writer.write_str_value("name", self.name)
        writer.write_str_value("street", self.street)
        writer.write_str_value("telephone", self.telephone)
        writer.write_str_value("timeZoneId", self.time_zone_id)
        writer.write_str_value("zipCode", self.zip_code)
    

