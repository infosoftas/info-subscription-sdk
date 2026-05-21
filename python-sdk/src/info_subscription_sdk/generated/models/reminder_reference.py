from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class ReminderReference(Parsable):
    """
    A reminder reference.
    """
    # Gets the due date.
    due_date: Optional[datetime.datetime] = None
    # Gets the Date/Time of the issued on.
    issued_on: Optional[datetime.datetime] = None
    # Gets the identifier of the reminder.
    reminder_id: Optional[UUID] = None
    # Gets the reminder number.
    reminder_number: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> ReminderReference:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: ReminderReference
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return ReminderReference()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "dueDate": lambda n : setattr(self, 'due_date', n.get_datetime_value()),
            "issuedOn": lambda n : setattr(self, 'issued_on', n.get_datetime_value()),
            "reminderId": lambda n : setattr(self, 'reminder_id', n.get_uuid_value()),
            "reminderNumber": lambda n : setattr(self, 'reminder_number', n.get_int_value()),
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
        writer.write_datetime_value("dueDate", self.due_date)
        writer.write_datetime_value("issuedOn", self.issued_on)
        writer.write_uuid_value("reminderId", self.reminder_id)
        writer.write_int_value("reminderNumber", self.reminder_number)
    

