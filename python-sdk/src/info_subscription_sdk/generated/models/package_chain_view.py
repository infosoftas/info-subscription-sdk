from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .package_chain_step_view import PackageChainStepView

@dataclass
class PackageChainView(Parsable):
    """
    A package chain view.
    """
    # Gets or sets the description.
    description: Optional[str] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets or sets the name.
    name: Optional[str] = None
    # Gets or sets the identifier of the organization.
    organization_id: Optional[UUID] = None
    # Gets or sets the steps.
    steps: Optional[list[PackageChainStepView]] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PackageChainView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PackageChainView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PackageChainView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .package_chain_step_view import PackageChainStepView

        from .package_chain_step_view import PackageChainStepView

        fields: dict[str, Callable[[Any], None]] = {
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "steps": lambda n : setattr(self, 'steps', n.get_collection_of_object_values(PackageChainStepView)),
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
        writer.write_str_value("description", self.description)
        writer.write_uuid_value("id", self.id)
        writer.write_str_value("name", self.name)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_collection_of_object_values("steps", self.steps)
    

