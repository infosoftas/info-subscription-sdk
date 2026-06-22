from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .plan_product import PlanProduct
    from .subscription_plan_draft_additional_product import SubscriptionPlanDraftAdditionalProduct

@dataclass
class SubscriptionPlanDraftChainStep(Parsable):
    """
    A step in an inline subscription plan package chain draft.
    """
    # Additional products included in this step.
    additional_products: Optional[list[SubscriptionPlanDraftAdditionalProduct]] = None
    # When true the subscription is automatically stopped after the initial term.
    automatic_stop: Optional[bool] = None
    # Identifier of the billing frequency.
    billing_frequency_id: Optional[int] = None
    # Identifier of the billing plan.
    billing_plan_id: Optional[UUID] = None
    # ISO 4217 currency code.
    currency: Optional[str] = None
    # Description of this step's package.
    description: Optional[str] = None
    # Display name of this step's package.
    name: Optional[str] = None
    # Identifier of the subscription package to transition to at this step.
    next_subscription_package_id: Optional[UUID] = None
    # Number of editions.
    number_of_editions: Optional[int] = None
    # Price of this step's package including tax.
    price: Optional[float] = None
    # Product items with quantities and optional unit prices for this step.
    product_items: Optional[list[PlanProduct]] = None
    # Description of the package used after renewal if not retained.
    renewal_description: Optional[str] = None
    # Display name of the package used after renewal if not retained.
    renewal_name: Optional[str] = None
    # When true the subscription is retained (not cancelled) at this step, and if this is the last step the subscription is retained indefinitely.
    retain: Optional[bool] = None
    # The position increment to the next step.
    step: Optional[int] = None
    # Number of units.
    units: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SubscriptionPlanDraftChainStep:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SubscriptionPlanDraftChainStep
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SubscriptionPlanDraftChainStep()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .plan_product import PlanProduct
        from .subscription_plan_draft_additional_product import SubscriptionPlanDraftAdditionalProduct

        from .plan_product import PlanProduct
        from .subscription_plan_draft_additional_product import SubscriptionPlanDraftAdditionalProduct

        fields: dict[str, Callable[[Any], None]] = {
            "additionalProducts": lambda n : setattr(self, 'additional_products', n.get_collection_of_object_values(SubscriptionPlanDraftAdditionalProduct)),
            "automaticStop": lambda n : setattr(self, 'automatic_stop', n.get_bool_value()),
            "billingFrequencyId": lambda n : setattr(self, 'billing_frequency_id', n.get_int_value()),
            "billingPlanId": lambda n : setattr(self, 'billing_plan_id', n.get_uuid_value()),
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "nextSubscriptionPackageId": lambda n : setattr(self, 'next_subscription_package_id', n.get_uuid_value()),
            "numberOfEditions": lambda n : setattr(self, 'number_of_editions', n.get_int_value()),
            "price": lambda n : setattr(self, 'price', n.get_float_value()),
            "productItems": lambda n : setattr(self, 'product_items', n.get_collection_of_object_values(PlanProduct)),
            "renewalDescription": lambda n : setattr(self, 'renewal_description', n.get_str_value()),
            "renewalName": lambda n : setattr(self, 'renewal_name', n.get_str_value()),
            "retain": lambda n : setattr(self, 'retain', n.get_bool_value()),
            "step": lambda n : setattr(self, 'step', n.get_int_value()),
            "units": lambda n : setattr(self, 'units', n.get_int_value()),
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
        writer.write_collection_of_object_values("additionalProducts", self.additional_products)
        writer.write_bool_value("automaticStop", self.automatic_stop)
        writer.write_int_value("billingFrequencyId", self.billing_frequency_id)
        writer.write_uuid_value("billingPlanId", self.billing_plan_id)
        writer.write_str_value("currency", self.currency)
        writer.write_str_value("description", self.description)
        writer.write_str_value("name", self.name)
        writer.write_uuid_value("nextSubscriptionPackageId", self.next_subscription_package_id)
        writer.write_int_value("numberOfEditions", self.number_of_editions)
        writer.write_float_value("price", self.price)
        writer.write_collection_of_object_values("productItems", self.product_items)
        writer.write_str_value("renewalDescription", self.renewal_description)
        writer.write_str_value("renewalName", self.renewal_name)
        writer.write_bool_value("retain", self.retain)
        writer.write_int_value("step", self.step)
        writer.write_int_value("units", self.units)
    

