from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .subscription_package_chain_step import SubscriptionPackageChainStep

@dataclass
class SubscriptionPackageChainView(Parsable):
    """
    A subscription package chain.
    """
    # Gets or sets the description.
    description: Optional[str] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets or sets the name.
    name: Optional[str] = None
    # Gets the step position.
    step_position: Optional[int] = None
    # Gets or sets the steps.
    steps: Optional[list[SubscriptionPackageChainStep]] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SubscriptionPackageChainView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SubscriptionPackageChainView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SubscriptionPackageChainView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .subscription_package_chain_step import SubscriptionPackageChainStep

        from .subscription_package_chain_step import SubscriptionPackageChainStep

        fields: dict[str, Callable[[Any], None]] = {
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "stepPosition": lambda n : setattr(self, 'step_position', n.get_int_value()),
            "steps": lambda n : setattr(self, 'steps', n.get_collection_of_object_values(SubscriptionPackageChainStep)),
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
        writer.write_int_value("stepPosition", self.step_position)
        writer.write_collection_of_object_values("steps", self.steps)
    

