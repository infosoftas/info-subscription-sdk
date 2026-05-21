from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .create_account_payment_demand import CreateAccountPaymentDemand
    from .create_order_payment_demand import CreateOrderPaymentDemand
    from .create_subscription_payment_demand import CreateSubscriptionPaymentDemand
    from .demand_type import DemandType

@dataclass
class CreateDemand(Parsable):
    """
    Parameters for demand creation, input varies by type.
    """
    # Parameters for creating "standalone" account demands.
    account_demand: Optional[CreateAccountPaymentDemand] = None
    # Class represents order demand parameters for manual creation via API
    order_demand: Optional[CreateOrderPaymentDemand] = None
    # Class represents subscription demand parameters for manual creation via API
    subscription_demand: Optional[CreateSubscriptionPaymentDemand] = None
    # Values that represent demand types.
    type: Optional[DemandType] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> CreateDemand:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: CreateDemand
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return CreateDemand()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .create_account_payment_demand import CreateAccountPaymentDemand
        from .create_order_payment_demand import CreateOrderPaymentDemand
        from .create_subscription_payment_demand import CreateSubscriptionPaymentDemand
        from .demand_type import DemandType

        from .create_account_payment_demand import CreateAccountPaymentDemand
        from .create_order_payment_demand import CreateOrderPaymentDemand
        from .create_subscription_payment_demand import CreateSubscriptionPaymentDemand
        from .demand_type import DemandType

        fields: dict[str, Callable[[Any], None]] = {
            "accountDemand": lambda n : setattr(self, 'account_demand', n.get_object_value(CreateAccountPaymentDemand)),
            "orderDemand": lambda n : setattr(self, 'order_demand', n.get_object_value(CreateOrderPaymentDemand)),
            "subscriptionDemand": lambda n : setattr(self, 'subscription_demand', n.get_object_value(CreateSubscriptionPaymentDemand)),
            "type": lambda n : setattr(self, 'type', n.get_enum_value(DemandType)),
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
        writer.write_object_value("accountDemand", self.account_demand)
        writer.write_object_value("orderDemand", self.order_demand)
        writer.write_object_value("subscriptionDemand", self.subscription_demand)
        writer.write_enum_value("type", self.type)
    

