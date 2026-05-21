from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class CreditPaymentDemandDetail(Parsable):
    """
    A class that contains information about how to credit a specific payment demand detail.
    """
    # The amount to credit. In case it is null the entire charge will be credited. In case it is not null the remaining amount will be transfered to a new demand.
    amount: Optional[float] = None
    # The identifier of the payment demand detail to credit.
    detail_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> CreditPaymentDemandDetail:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: CreditPaymentDemandDetail
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return CreditPaymentDemandDetail()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "amount": lambda n : setattr(self, 'amount', n.get_float_value()),
            "detailId": lambda n : setattr(self, 'detail_id', n.get_uuid_value()),
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
        writer.write_float_value("amount", self.amount)
        writer.write_uuid_value("detailId", self.detail_id)
    

