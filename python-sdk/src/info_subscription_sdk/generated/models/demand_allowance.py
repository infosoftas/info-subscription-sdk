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
class DemandAllowance(Parsable):
    """
    Represents an extra/additional allowance added to a demand.
    """
    # Values that represent allowance types.
    allowance_type: Optional[AllowanceType] = None
    # The amount disconted/subtracted from the demand.
    amount: Optional[float] = None
    # An optional end time this covers.
    end_time: Optional[datetime.datetime] = None
    # The identifier of the allowance.
    id: Optional[UUID] = None
    # A value indicating whether the allowance was previously included in ledger somehow.
    included_in_ledger: Optional[bool] = None
    # The original accounting time of the charge, if available.
    original_accounting_time: Optional[datetime.datetime] = None
    # The identifier of the source payment demand where this transaction stems from.
    source_payment_demand_id: Optional[UUID] = None
    # An optional start time.
    start_time: Optional[datetime.datetime] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> DemandAllowance:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: DemandAllowance
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return DemandAllowance()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .allowance_type import AllowanceType

        from .allowance_type import AllowanceType

        fields: dict[str, Callable[[Any], None]] = {
            "allowanceType": lambda n : setattr(self, 'allowance_type', n.get_enum_value(AllowanceType)),
            "amount": lambda n : setattr(self, 'amount', n.get_float_value()),
            "endTime": lambda n : setattr(self, 'end_time', n.get_datetime_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "includedInLedger": lambda n : setattr(self, 'included_in_ledger', n.get_bool_value()),
            "originalAccountingTime": lambda n : setattr(self, 'original_accounting_time', n.get_datetime_value()),
            "sourcePaymentDemandId": lambda n : setattr(self, 'source_payment_demand_id', n.get_uuid_value()),
            "startTime": lambda n : setattr(self, 'start_time', n.get_datetime_value()),
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
        writer.write_enum_value("allowanceType", self.allowance_type)
        writer.write_float_value("amount", self.amount)
        writer.write_datetime_value("endTime", self.end_time)
        writer.write_uuid_value("id", self.id)
        writer.write_bool_value("includedInLedger", self.included_in_ledger)
        writer.write_datetime_value("originalAccountingTime", self.original_accounting_time)
        writer.write_uuid_value("sourcePaymentDemandId", self.source_payment_demand_id)
        writer.write_datetime_value("startTime", self.start_time)
    

