from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

@dataclass
class ReminderPolicy(Parsable):
    """
    A reminder policy options valid across all reminder steps for a dunning process.
    """
    # A value indicating whether the account allowance consumption should happen when generating reminders.
    disable_account_payment_consumption: Optional[bool] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> ReminderPolicy:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: ReminderPolicy
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return ReminderPolicy()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "disableAccountPaymentConsumption": lambda n : setattr(self, 'disable_account_payment_consumption', n.get_bool_value()),
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
        writer.write_bool_value("disableAccountPaymentConsumption", self.disable_account_payment_consumption)
    

