from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .subscription_plan_draft import SubscriptionPlanDraft
    from .template_plan_reference import TemplatePlanReference

@dataclass
class PlanSelection(Parsable):
    """
    Defines how a subscription plan is sourced. Exactly one of the three properties must be provided.
    """
    # An inline subscription plan definition to be created during order processing.
    plan: Optional[SubscriptionPlanDraft] = None
    # Identifier of an existing subscription plan in the SubscriptionService.
    subscription_plan_id: Optional[UUID] = None
    # Holds a reference to a centralized template plan together with anychoice overrides that should be applied when creating the subscription.This bundles the template identifier and the override choices into asingle object for clarity when selecting template-based plans.
    template: Optional[TemplatePlanReference] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PlanSelection:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PlanSelection
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PlanSelection()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .subscription_plan_draft import SubscriptionPlanDraft
        from .template_plan_reference import TemplatePlanReference

        from .subscription_plan_draft import SubscriptionPlanDraft
        from .template_plan_reference import TemplatePlanReference

        fields: dict[str, Callable[[Any], None]] = {
            "plan": lambda n : setattr(self, 'plan', n.get_object_value(SubscriptionPlanDraft)),
            "subscriptionPlanId": lambda n : setattr(self, 'subscription_plan_id', n.get_uuid_value()),
            "template": lambda n : setattr(self, 'template', n.get_object_value(TemplatePlanReference)),
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
        writer.write_object_value("plan", self.plan)
        writer.write_uuid_value("subscriptionPlanId", self.subscription_plan_id)
        writer.write_object_value("template", self.template)
    

