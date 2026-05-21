from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .invoice_base import InvoiceBase
    from .reminder_reference import ReminderReference

from .invoice_base import InvoiceBase

@dataclass
class Invoice(InvoiceBase, Parsable):
    """
    A commercial document confirming a sale between a seller and a buyer. The invoice is issued by the seller and the buyer has to pay the claim.
    """
    # Gets or sets the globally unique identifier for the credit note.
    credit_note_id: Optional[UUID] = None
    # Gets or sets the Date/Time of the credited on.
    credited_on: Optional[datetime.datetime] = None
    # Gets the date on which the invoice is expected to be paid.
    due_date: Optional[datetime.datetime] = None
    # Gets a list of reminders issued for this invoice.
    reminders: Optional[list[ReminderReference]] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> Invoice:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Invoice
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return Invoice()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .invoice_base import InvoiceBase
        from .reminder_reference import ReminderReference

        from .invoice_base import InvoiceBase
        from .reminder_reference import ReminderReference

        fields: dict[str, Callable[[Any], None]] = {
            "creditNoteId": lambda n : setattr(self, 'credit_note_id', n.get_uuid_value()),
            "creditedOn": lambda n : setattr(self, 'credited_on', n.get_datetime_value()),
            "dueDate": lambda n : setattr(self, 'due_date', n.get_datetime_value()),
            "reminders": lambda n : setattr(self, 'reminders', n.get_collection_of_object_values(ReminderReference)),
        }
        super_fields = super().get_field_deserializers()
        fields.update(super_fields)
        return fields
    
    def serialize(self,writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if writer is None:
            raise TypeError("writer cannot be null.")
        super().serialize(writer)
        writer.write_uuid_value("creditNoteId", self.credit_note_id)
        writer.write_datetime_value("creditedOn", self.credited_on)
        writer.write_datetime_value("dueDate", self.due_date)
        writer.write_collection_of_object_values("reminders", self.reminders)
    

