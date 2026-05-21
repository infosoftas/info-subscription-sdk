from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class DemandReminderSchedule(Parsable):
    """
    Schedule information for when to generate a new reminder.
    """
    # The billing plan that was used to define this schedule.
    billing_plan_id: Optional[UUID] = None
    # The caclculated due date of the reminder when it is generated.
    due_date: Optional[datetime.datetime] = None
    # The enterprise plan identifier the schedule is relevant for (if any).
    enterprise_plan_id: Optional[UUID] = None
    # The unique identifier for the demand reminder schedule.
    id: Optional[UUID] = None
    # The order this schedule is relevant for (if any).
    order_id: Optional[UUID] = None
    # The organizationId the reminder relates to.
    organization_id: Optional[UUID] = None
    # Gets or sets the original schedule time.
    original_schedule_time: Optional[datetime.datetime] = None
    # The Payment Demand to create a reminder for.
    payment_demand_id: Optional[UUID] = None
    # The provider type.
    payment_provider_type: Optional[str] = None
    # Reminder counter.
    reminder_counter: Optional[int] = None
    # Gets or sets the reason of reschedule.
    reschedule_reason: Optional[str] = None
    # The subscriber the demand and reminder relates to.
    subscriber_id: Optional[UUID] = None
    # The subscription the demand and reminder is associated with (if any).
    subscription_id: Optional[UUID] = None
    # The scheduled reminder execution/generation time.
    time: Optional[datetime.datetime] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> DemandReminderSchedule:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: DemandReminderSchedule
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return DemandReminderSchedule()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "billingPlanId": lambda n : setattr(self, 'billing_plan_id', n.get_uuid_value()),
            "dueDate": lambda n : setattr(self, 'due_date', n.get_datetime_value()),
            "enterprisePlanId": lambda n : setattr(self, 'enterprise_plan_id', n.get_uuid_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "orderId": lambda n : setattr(self, 'order_id', n.get_uuid_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "originalScheduleTime": lambda n : setattr(self, 'original_schedule_time', n.get_datetime_value()),
            "paymentDemandId": lambda n : setattr(self, 'payment_demand_id', n.get_uuid_value()),
            "paymentProviderType": lambda n : setattr(self, 'payment_provider_type', n.get_str_value()),
            "reminderCounter": lambda n : setattr(self, 'reminder_counter', n.get_int_value()),
            "rescheduleReason": lambda n : setattr(self, 'reschedule_reason', n.get_str_value()),
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
        writer.write_datetime_value("dueDate", self.due_date)
        writer.write_uuid_value("enterprisePlanId", self.enterprise_plan_id)
        writer.write_uuid_value("id", self.id)
        writer.write_uuid_value("orderId", self.order_id)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_datetime_value("originalScheduleTime", self.original_schedule_time)
        writer.write_uuid_value("paymentDemandId", self.payment_demand_id)
        writer.write_str_value("paymentProviderType", self.payment_provider_type)
        writer.write_int_value("reminderCounter", self.reminder_counter)
        writer.write_str_value("rescheduleReason", self.reschedule_reason)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
        writer.write_uuid_value("subscriptionId", self.subscription_id)
        writer.write_datetime_value("time", self.time)
    

