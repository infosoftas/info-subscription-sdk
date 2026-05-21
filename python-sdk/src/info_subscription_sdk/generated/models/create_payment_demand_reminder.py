from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .reminder_policy import ReminderPolicy

@dataclass
class CreatePaymentDemandReminder(Parsable):
    """
    Parameters for creating a reminder on a payment demand directly, without going through a dunning schedule.This enables external parties (e.g. debt collectors) to register reminders and trigger the associatedinvoice and ledger side-effects in INFO-Subscription without interfering with payment processing.
    """
    # Optional 1-based sequence number for the reminder in this demand's reminder series.When omitted, the counter is auto-discovered from existing reminders in the read model.Prefer to supply the counter when possible to avoid extra internal lookup calls and ensure correct sequencing in case of concurrent reminder creation.
    counter: Optional[int] = None
    # The due date for the reminder.
    due_date: Optional[datetime.datetime] = None
    # An optional fixed fee to apply to this reminder.
    fee: Optional[float] = None
    # A reminder policy options valid across all reminder steps for a dunning process.
    reminder_policy: Optional[ReminderPolicy] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> CreatePaymentDemandReminder:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: CreatePaymentDemandReminder
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return CreatePaymentDemandReminder()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .reminder_policy import ReminderPolicy

        from .reminder_policy import ReminderPolicy

        fields: dict[str, Callable[[Any], None]] = {
            "counter": lambda n : setattr(self, 'counter', n.get_int_value()),
            "dueDate": lambda n : setattr(self, 'due_date', n.get_datetime_value()),
            "fee": lambda n : setattr(self, 'fee', n.get_float_value()),
            "reminderPolicy": lambda n : setattr(self, 'reminder_policy', n.get_object_value(ReminderPolicy)),
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
        writer.write_int_value("counter", self.counter)
        writer.write_datetime_value("dueDate", self.due_date)
        writer.write_float_value("fee", self.fee)
        writer.write_object_value("reminderPolicy", self.reminder_policy)
    

