from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .order_choices import OrderChoices

@dataclass
class TemplatePlanReference(Parsable):
    """
    Holds a reference to a centralized template plan together with anychoice overrides that should be applied when creating the subscription.This bundles the template identifier and the override choices into asingle object for clarity when selecting template-based plans.
    """
    # Represents properties/choices that overrides/set options from the Template Subscription Plan.
    choices: Optional[OrderChoices] = None
    # Identifier of the template plan.
    template_plan_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> TemplatePlanReference:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: TemplatePlanReference
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return TemplatePlanReference()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .order_choices import OrderChoices

        from .order_choices import OrderChoices

        fields: dict[str, Callable[[Any], None]] = {
            "choices": lambda n : setattr(self, 'choices', n.get_object_value(OrderChoices)),
            "templatePlanId": lambda n : setattr(self, 'template_plan_id', n.get_uuid_value()),
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
        writer.write_object_value("choices", self.choices)
        writer.write_uuid_value("templatePlanId", self.template_plan_id)
    

