from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .integration_type import IntegrationType

@dataclass
class IdentityProvider(Parsable):
    """
    The identity provider
    """
    # Gets or sets the identifier of the identity provider.
    id: Optional[UUID] = None
    # The integration type.
    integration_type: Optional[IntegrationType] = None
    # Gets or sets the name.
    name: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> IdentityProvider:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: IdentityProvider
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return IdentityProvider()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .integration_type import IntegrationType

        from .integration_type import IntegrationType

        fields: dict[str, Callable[[Any], None]] = {
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "integrationType": lambda n : setattr(self, 'integration_type', n.get_enum_value(IntegrationType)),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
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
        writer.write_enum_value("integrationType", self.integration_type)
        writer.write_str_value("name", self.name)
    

