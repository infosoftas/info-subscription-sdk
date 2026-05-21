from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .charge import Charge
    from .invoice_base import InvoiceBase
    from .invoice_reference import InvoiceReference

from .invoice_base import InvoiceBase

@dataclass
class Reminder(InvoiceBase, Parsable):
    """
    The reminder represents a followup letter on the original invoice.
    """
    # Gets the date on which the invoice is expected to be paid.
    due_date: Optional[datetime.datetime] = None
    # Class to reference an invoice from the related Credit Note.
    invoice_reference: Optional[InvoiceReference] = None
    # Gets or sets the penalty surcharges.
    penalty_surcharges: Optional[list[Charge]] = None
    # Gets the reminder sequence number (1. for the first reminder, 2 for the second etc)
    reminder_number: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> Reminder:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Reminder
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return Reminder()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .charge import Charge
        from .invoice_base import InvoiceBase
        from .invoice_reference import InvoiceReference

        from .charge import Charge
        from .invoice_base import InvoiceBase
        from .invoice_reference import InvoiceReference

        fields: dict[str, Callable[[Any], None]] = {
            "dueDate": lambda n : setattr(self, 'due_date', n.get_datetime_value()),
            "invoiceReference": lambda n : setattr(self, 'invoice_reference', n.get_object_value(InvoiceReference)),
            "penaltySurcharges": lambda n : setattr(self, 'penalty_surcharges', n.get_collection_of_object_values(Charge)),
            "reminderNumber": lambda n : setattr(self, 'reminder_number', n.get_int_value()),
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
        writer.write_datetime_value("dueDate", self.due_date)
        writer.write_object_value("invoiceReference", self.invoice_reference)
        writer.write_collection_of_object_values("penaltySurcharges", self.penalty_surcharges)
        writer.write_int_value("reminderNumber", self.reminder_number)
    

