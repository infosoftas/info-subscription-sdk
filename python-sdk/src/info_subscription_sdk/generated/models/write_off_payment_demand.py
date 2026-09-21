from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

@dataclass
class WriteOffPaymentDemand(Parsable):
    """
    Provides information needed to write off a payment demand (in full), without creating a credit note.
    """
    # The descriptive reasoning for the write off action.
    write_off_reason: Optional[str] = None
    # The time of the write off, if not specified will default to the time of command processing.
    write_off_time: Optional[datetime.datetime] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> WriteOffPaymentDemand:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: WriteOffPaymentDemand
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return WriteOffPaymentDemand()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "writeOffReason": lambda n : setattr(self, 'write_off_reason', n.get_str_value()),
            "writeOffTime": lambda n : setattr(self, 'write_off_time', n.get_datetime_value()),
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
        writer.write_str_value("writeOffReason", self.write_off_reason)
        writer.write_datetime_value("writeOffTime", self.write_off_time)
    

