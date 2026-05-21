from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class SettlementCharge(Parsable):
    """
    A settlement charge.
    """
    # Gets or sets the identifier of the account transaction.
    account_transaction_id: Optional[UUID] = None
    # Gets or sets the amount.
    amount: Optional[float] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SettlementCharge:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SettlementCharge
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SettlementCharge()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "accountTransactionId": lambda n : setattr(self, 'account_transaction_id', n.get_uuid_value()),
            "amount": lambda n : setattr(self, 'amount', n.get_float_value()),
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
        writer.write_float_value("amount", self.amount)
    

