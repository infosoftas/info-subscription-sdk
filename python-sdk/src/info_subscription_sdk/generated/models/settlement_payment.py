from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class SettlementPayment(Parsable):
    """
    A settlement payment.
    """
    # The original paid amount (not the amount used to settle the demand, it may be higher than the demand amount).
    paid_amount: Optional[float] = None
    # The identifier of the payment as it exists in the payment service.
    payment_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SettlementPayment:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SettlementPayment
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SettlementPayment()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "paidAmount": lambda n : setattr(self, 'paid_amount', n.get_float_value()),
            "paymentId": lambda n : setattr(self, 'payment_id', n.get_uuid_value()),
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
        writer.write_float_value("paidAmount", self.paid_amount)
        writer.write_uuid_value("paymentId", self.payment_id)
    

