from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .infosoft.s4.api.data_contracts.v1.contract import Contract

@dataclass
class TemplatePackageChoices(Parsable):
    """
    A template package choices.
    """
    # Gets or sets a value indicating whether [automatic stop].
    automatic_stop: Optional[bool] = None
    # Gets or sets the identifier of the billing frequency.
    billing_frequency_id: Optional[int] = None
    # Gets or sets the identifier of the billing plan.
    billing_plan_id: Optional[UUID] = None
    # A contract.
    contract: Optional[Contract] = None
    # Gets or sets the identifier of the enterprise plan.
    enterprise_plan_id: Optional[UUID] = None
    # Gets or sets the number of editions.
    number_of_editions: Optional[int] = None
    # Gets or sets the identifier of the permanent discount.
    permanent_discount_id: Optional[UUID] = None
    # Gets or sets the price override.
    price_override: Optional[float] = None
    # Gets or sets the products.
    products: Optional[list[UUID]] = None
    # Set the start time for when the action should take effect. If not given a default will be used.
    start_time: Optional[datetime.datetime] = None
    # Gets or sets the units.
    units: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> TemplatePackageChoices:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: TemplatePackageChoices
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return TemplatePackageChoices()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .infosoft.s4.api.data_contracts.v1.contract import Contract

        from .infosoft.s4.api.data_contracts.v1.contract import Contract

        fields: dict[str, Callable[[Any], None]] = {
            "automaticStop": lambda n : setattr(self, 'automatic_stop', n.get_bool_value()),
            "billingFrequencyId": lambda n : setattr(self, 'billing_frequency_id', n.get_int_value()),
            "billingPlanId": lambda n : setattr(self, 'billing_plan_id', n.get_uuid_value()),
            "contract": lambda n : setattr(self, 'contract', n.get_object_value(Contract)),
            "enterprisePlanId": lambda n : setattr(self, 'enterprise_plan_id', n.get_uuid_value()),
            "numberOfEditions": lambda n : setattr(self, 'number_of_editions', n.get_int_value()),
            "permanentDiscountId": lambda n : setattr(self, 'permanent_discount_id', n.get_uuid_value()),
            "priceOverride": lambda n : setattr(self, 'price_override', n.get_float_value()),
            "products": lambda n : setattr(self, 'products', n.get_collection_of_primitive_values(UUID)),
            "startTime": lambda n : setattr(self, 'start_time', n.get_datetime_value()),
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
        writer.write_bool_value("automaticStop", self.automatic_stop)
        writer.write_int_value("billingFrequencyId", self.billing_frequency_id)
        writer.write_uuid_value("billingPlanId", self.billing_plan_id)
        writer.write_object_value("contract", self.contract)
        writer.write_uuid_value("enterprisePlanId", self.enterprise_plan_id)
        writer.write_int_value("numberOfEditions", self.number_of_editions)
        writer.write_uuid_value("permanentDiscountId", self.permanent_discount_id)
        writer.write_float_value("priceOverride", self.price_override)
        writer.write_collection_of_primitive_values("products", self.products)
        writer.write_datetime_value("startTime", self.start_time)
        writer.write_int_value("units", self.units)
    

