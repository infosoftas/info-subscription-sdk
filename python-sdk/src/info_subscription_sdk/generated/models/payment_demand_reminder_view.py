from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class PaymentDemandReminderView(Parsable):
    """
    Datacontract to hold properties for a reminder.
    """
    # The reminder counter, i.e. is this the first reminder, the second or the 25th.
    counter: Optional[int] = None
    # The currency for the reminder - follows the original demand and the fee.
    currency: Optional[str] = None
    # The due date.
    due_date: Optional[datetime.datetime] = None
    # The fee/surcharge (if any).
    fee: Optional[float] = None
    # The reminder identifier.
    id: Optional[UUID] = None
    # The identifier of the invoice.
    invoice_id: Optional[UUID] = None
    # The reminder issue time.
    issued_on: Optional[datetime.datetime] = None
    # The identifier on the ledger (if applicable).
    ledger_id: Optional[UUID] = None
    # The original payment demand that this is a reminder for.
    original_payment_demand_id: Optional[UUID] = None
    # The payable amount required to settle the demand and the reminder.
    payable_amount: Optional[float] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PaymentDemandReminderView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PaymentDemandReminderView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PaymentDemandReminderView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "counter": lambda n : setattr(self, 'counter', n.get_int_value()),
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "dueDate": lambda n : setattr(self, 'due_date', n.get_datetime_value()),
            "fee": lambda n : setattr(self, 'fee', n.get_float_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "invoiceId": lambda n : setattr(self, 'invoice_id', n.get_uuid_value()),
            "issuedOn": lambda n : setattr(self, 'issued_on', n.get_datetime_value()),
            "ledgerId": lambda n : setattr(self, 'ledger_id', n.get_uuid_value()),
            "originalPaymentDemandId": lambda n : setattr(self, 'original_payment_demand_id', n.get_uuid_value()),
            "payableAmount": lambda n : setattr(self, 'payable_amount', n.get_float_value()),
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
        writer.write_str_value("currency", self.currency)
        writer.write_datetime_value("dueDate", self.due_date)
        writer.write_float_value("fee", self.fee)
        writer.write_uuid_value("id", self.id)
        writer.write_uuid_value("invoiceId", self.invoice_id)
        writer.write_datetime_value("issuedOn", self.issued_on)
        writer.write_uuid_value("ledgerId", self.ledger_id)
        writer.write_uuid_value("originalPaymentDemandId", self.original_payment_demand_id)
        writer.write_float_value("payableAmount", self.payable_amount)
    

