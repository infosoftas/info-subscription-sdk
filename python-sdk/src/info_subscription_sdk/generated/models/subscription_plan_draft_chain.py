from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .subscription_plan_draft_chain_step import SubscriptionPlanDraftChainStep

@dataclass
class SubscriptionPlanDraftChain(Parsable):
    """
    A package chain definition for an inline subscription plan draft.
    """
    # Description of the chain.
    description: Optional[str] = None
    # Display name of the chain.
    name: Optional[str] = None
    # Position of the first step within the chain.
    step_position: Optional[int] = None
    # Steps that make up this chain.
    steps: Optional[list[SubscriptionPlanDraftChainStep]] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SubscriptionPlanDraftChain:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SubscriptionPlanDraftChain
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SubscriptionPlanDraftChain()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .subscription_plan_draft_chain_step import SubscriptionPlanDraftChainStep

        from .subscription_plan_draft_chain_step import SubscriptionPlanDraftChainStep

        fields: dict[str, Callable[[Any], None]] = {
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "stepPosition": lambda n : setattr(self, 'step_position', n.get_int_value()),
            "steps": lambda n : setattr(self, 'steps', n.get_collection_of_object_values(SubscriptionPlanDraftChainStep)),
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
        writer.write_str_value("name", self.name)
        writer.write_int_value("stepPosition", self.step_position)
        writer.write_collection_of_object_values("steps", self.steps)
    

