from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .billing_flow import BillingFlow
    from .initial_options import InitialOptions
    from .recurring_options import RecurringOptions

@dataclass
class BillingOptions(Parsable):
    """
    Options for controlling the billing flow.
    """
    # Values that represent billing which billing flow to use
    flow: Optional[BillingFlow] = None
    # An initial options.
    initial: Optional[InitialOptions] = None
    # A recurring options.
    recurring: Optional[RecurringOptions] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> BillingOptions:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: BillingOptions
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return BillingOptions()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .billing_flow import BillingFlow
        from .initial_options import InitialOptions
        from .recurring_options import RecurringOptions

        from .billing_flow import BillingFlow
        from .initial_options import InitialOptions
        from .recurring_options import RecurringOptions

        fields: dict[str, Callable[[Any], None]] = {
            "flow": lambda n : setattr(self, 'flow', n.get_enum_value(BillingFlow)),
            "initial": lambda n : setattr(self, 'initial', n.get_object_value(InitialOptions)),
            "recurring": lambda n : setattr(self, 'recurring', n.get_object_value(RecurringOptions)),
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
        writer.write_enum_value("flow", self.flow)
        writer.write_object_value("initial", self.initial)
        writer.write_object_value("recurring", self.recurring)
    

