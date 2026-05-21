from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class DemandSchedule(Parsable):
    """
    A demand schedule.
    """
    # Gets or sets the billing plan identifier
    billing_plan_id: Optional[UUID] = None
    # Gets or sets the enterprise plan identifier
    enterprise_plan_id: Optional[UUID] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets or sets the order identifier
    order_id: Optional[UUID] = None
    # Gets or sets OrganizationId identifier.
    organization_id: Optional[UUID] = None
    # Gets or sets the payment method
    payment_method: Optional[str] = None
    # Gets or sets the payment method type
    payment_method_type: Optional[str] = None
    # Gets or sets the identifier of the preliminary demand.
    preliminary_demand_id: Optional[UUID] = None
    # Gets or sets the subscriber identifier
    subscriber_id: Optional[UUID] = None
    # Gets or sets the subscription identifier
    subscription_id: Optional[UUID] = None
    # Gets or sets the demand generation time
    time: Optional[datetime.datetime] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> DemandSchedule:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: DemandSchedule
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return DemandSchedule()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "billingPlanId": lambda n : setattr(self, 'billing_plan_id', n.get_uuid_value()),
            "enterprisePlanId": lambda n : setattr(self, 'enterprise_plan_id', n.get_uuid_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "orderId": lambda n : setattr(self, 'order_id', n.get_uuid_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "paymentMethod": lambda n : setattr(self, 'payment_method', n.get_str_value()),
            "paymentMethodType": lambda n : setattr(self, 'payment_method_type', n.get_str_value()),
            "preliminaryDemandId": lambda n : setattr(self, 'preliminary_demand_id', n.get_uuid_value()),
            "subscriberId": lambda n : setattr(self, 'subscriber_id', n.get_uuid_value()),
            "subscriptionId": lambda n : setattr(self, 'subscription_id', n.get_uuid_value()),
            "time": lambda n : setattr(self, 'time', n.get_datetime_value()),
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
        writer.write_uuid_value("billingPlanId", self.billing_plan_id)
        writer.write_uuid_value("enterprisePlanId", self.enterprise_plan_id)
        writer.write_uuid_value("id", self.id)
        writer.write_uuid_value("orderId", self.order_id)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_str_value("paymentMethod", self.payment_method)
        writer.write_str_value("paymentMethodType", self.payment_method_type)
        writer.write_uuid_value("preliminaryDemandId", self.preliminary_demand_id)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
        writer.write_uuid_value("subscriptionId", self.subscription_id)
        writer.write_datetime_value("time", self.time)
    

