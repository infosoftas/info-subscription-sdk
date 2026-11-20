from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class ExternalStaticProductSource(Parsable):
    """
    Account source model
    """
    # Gets or sets the identifier of the source.
    id: Optional[UUID] = None
    # Gets or sets the name of the source (like the name of the external system)
    name: Optional[str] = None
    # Gets or sets the products identifiers
    products: Optional[list[UUID]] = None
    # Gets or sets the identifier of the user.
    user_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> ExternalStaticProductSource:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: ExternalStaticProductSource
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return ExternalStaticProductSource()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "products": lambda n : setattr(self, 'products', n.get_collection_of_primitive_values(UUID)),
            "userId": lambda n : setattr(self, 'user_id', n.get_uuid_value()),
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
        writer.write_uuid_value("id", self.id)
        writer.write_str_value("name", self.name)
        writer.write_collection_of_primitive_values("products", self.products)
        writer.write_uuid_value("userId", self.user_id)
    

