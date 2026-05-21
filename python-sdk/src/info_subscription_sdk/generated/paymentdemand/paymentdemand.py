from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import ComposedTypeWrapper, Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from ..models.account_payment_demand_view import AccountPaymentDemandView
    from ..models.enterprise_plan_demand_view import EnterprisePlanDemandView
    from ..models.order_payment_demand_view import OrderPaymentDemandView
    from ..models.payment_demand_view import PaymentDemandView
    from ..models.subscription_payment_demand_view import SubscriptionPaymentDemandView

@dataclass
class Paymentdemand(ComposedTypeWrapper, Parsable):
    """
    Composed type wrapper for classes AccountPaymentDemandView, EnterprisePlanDemandView, OrderPaymentDemandView, PaymentDemandView, SubscriptionPaymentDemandView
    """
    # Composed type representation for type AccountPaymentDemandView
    account_payment_demand_view: Optional[AccountPaymentDemandView] = None
    # Composed type representation for type EnterprisePlanDemandView
    enterprise_plan_demand_view: Optional[EnterprisePlanDemandView] = None
    # Composed type representation for type OrderPaymentDemandView
    order_payment_demand_view: Optional[OrderPaymentDemandView] = None
    # Composed type representation for type PaymentDemandView
    payment_demand_view: Optional[PaymentDemandView] = None
    # Composed type representation for type SubscriptionPaymentDemandView
    subscription_payment_demand_view: Optional[SubscriptionPaymentDemandView] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> Paymentdemand:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Paymentdemand
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        try:
            child_node = parse_node.get_child_node("")
            mapping_value = child_node.get_str_value() if child_node else None
        except AttributeError:
            mapping_value = None
        result = Paymentdemand()
        if mapping_value and mapping_value.casefold() == "AccountPaymentDemandView".casefold():
            from ..models.account_payment_demand_view import AccountPaymentDemandView

            result.account_payment_demand_view = AccountPaymentDemandView()
        elif mapping_value and mapping_value.casefold() == "EnterprisePlanDemandView".casefold():
            from ..models.enterprise_plan_demand_view import EnterprisePlanDemandView

            result.enterprise_plan_demand_view = EnterprisePlanDemandView()
        elif mapping_value and mapping_value.casefold() == "OrderPaymentDemandView".casefold():
            from ..models.order_payment_demand_view import OrderPaymentDemandView

            result.order_payment_demand_view = OrderPaymentDemandView()
        elif mapping_value and mapping_value.casefold() == "PaymentDemandView".casefold():
            from ..models.payment_demand_view import PaymentDemandView

            result.payment_demand_view = PaymentDemandView()
        elif mapping_value and mapping_value.casefold() == "SubscriptionPaymentDemandView".casefold():
            from ..models.subscription_payment_demand_view import SubscriptionPaymentDemandView

            result.subscription_payment_demand_view = SubscriptionPaymentDemandView()
        return result
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from ..models.account_payment_demand_view import AccountPaymentDemandView
        from ..models.enterprise_plan_demand_view import EnterprisePlanDemandView
        from ..models.order_payment_demand_view import OrderPaymentDemandView
        from ..models.payment_demand_view import PaymentDemandView
        from ..models.subscription_payment_demand_view import SubscriptionPaymentDemandView

        if self.account_payment_demand_view:
            return self.account_payment_demand_view.get_field_deserializers()
        if self.enterprise_plan_demand_view:
            return self.enterprise_plan_demand_view.get_field_deserializers()
        if self.order_payment_demand_view:
            return self.order_payment_demand_view.get_field_deserializers()
        if self.payment_demand_view:
            return self.payment_demand_view.get_field_deserializers()
        if self.subscription_payment_demand_view:
            return self.subscription_payment_demand_view.get_field_deserializers()
        return {}
    
    def serialize(self,writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if writer is None:
            raise TypeError("writer cannot be null.")
        if self.account_payment_demand_view:
            writer.write_object_value(None, self.account_payment_demand_view)
        elif self.enterprise_plan_demand_view:
            writer.write_object_value(None, self.enterprise_plan_demand_view)
        elif self.order_payment_demand_view:
            writer.write_object_value(None, self.order_payment_demand_view)
        elif self.payment_demand_view:
            writer.write_object_value(None, self.payment_demand_view)
        elif self.subscription_payment_demand_view:
            writer.write_object_value(None, self.subscription_payment_demand_view)
    

