from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .allowance_type import AllowanceType

@dataclass
class SettlementAllowance(Parsable):
    """
    A settlement allowance.
    """
    # The account transaction id.
    account_transaction_id: Optional[UUID] = None
    # The accounting time.
    accounting_time: Optional[datetime.datetime] = None
    # The amount of the allowance.
    amount: Optional[float] = None
    # An optional text description for the transaction.
    description: Optional[str] = None
    # The end time this allowance covered.
    end_time: Optional[datetime.datetime] = None
    # The identifier of the invoice.
    invoice_id: Optional[UUID] = None
    # The invoice number.
    invoice_number: Optional[int] = None
    # The identifier of the payment (if a payment was involved).
    payment_id: Optional[UUID] = None
    # The identifier of the payment demand (if a demand was involved).
    source_payment_demand_id: Optional[UUID] = None
    # The start time this allowance covered.
    start_time: Optional[datetime.datetime] = None
    # Values that represent allowance types.
    transaction_type: Optional[AllowanceType] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SettlementAllowance:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SettlementAllowance
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SettlementAllowance()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .allowance_type import AllowanceType

        from .allowance_type import AllowanceType

        fields: dict[str, Callable[[Any], None]] = {
            "accountTransactionId": lambda n : setattr(self, 'account_transaction_id', n.get_uuid_value()),
            "accountingTime": lambda n : setattr(self, 'accounting_time', n.get_datetime_value()),
            "amount": lambda n : setattr(self, 'amount', n.get_float_value()),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "endTime": lambda n : setattr(self, 'end_time', n.get_datetime_value()),
            "invoiceId": lambda n : setattr(self, 'invoice_id', n.get_uuid_value()),
            "invoiceNumber": lambda n : setattr(self, 'invoice_number', n.get_int_value()),
            "paymentId": lambda n : setattr(self, 'payment_id', n.get_uuid_value()),
            "sourcePaymentDemandId": lambda n : setattr(self, 'source_payment_demand_id', n.get_uuid_value()),
            "startTime": lambda n : setattr(self, 'start_time', n.get_datetime_value()),
            "transactionType": lambda n : setattr(self, 'transaction_type', n.get_enum_value(AllowanceType)),
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
        writer.write_uuid_value("accountTransactionId", self.account_transaction_id)
        writer.write_datetime_value("accountingTime", self.accounting_time)
        writer.write_float_value("amount", self.amount)
        writer.write_str_value("description", self.description)
        writer.write_datetime_value("endTime", self.end_time)
        writer.write_uuid_value("invoiceId", self.invoice_id)
        writer.write_int_value("invoiceNumber", self.invoice_number)
        writer.write_uuid_value("paymentId", self.payment_id)
        writer.write_uuid_value("sourcePaymentDemandId", self.source_payment_demand_id)
        writer.write_datetime_value("startTime", self.start_time)
        writer.write_enum_value("transactionType", self.transaction_type)
    

