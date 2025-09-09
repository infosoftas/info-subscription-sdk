from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class ProductCalendar(Parsable):
    """
    A product calendar view.
    """
    # Gets or sets the identifier of the calendar.
    calendar_id: Optional[UUID] = None
    # Gets or sets the starts on date.
    starts_on_date: Optional[datetime.datetime] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> ProductCalendar:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: ProductCalendar
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return ProductCalendar()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "calendarId": lambda n : setattr(self, 'calendar_id', n.get_uuid_value()),
            "startsOnDate": lambda n : setattr(self, 'starts_on_date', n.get_datetime_value()),
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
        writer.write_uuid_value("calendarId", self.calendar_id)
        writer.write_datetime_value("startsOnDate", self.starts_on_date)
    

