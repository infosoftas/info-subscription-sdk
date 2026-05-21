from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .infosoft.s4.billing.contracts.period import Period
    from .product_tax_detail_view import ProductTaxDetailView

@dataclass
class PaymentDemandDetailView(Parsable):
    """
    A payment demand detail view.
    """
    # The total amount on the detail/line (NOT the Unit amount).
    amount: Optional[float] = None
    # Gets or sets the currency.
    currency: Optional[str] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets or sets the identifier of the next subscription.
    next_subscription_id: Optional[UUID] = None
    # The identifier of the order the detail is associated with (if any).
    order_id: Optional[UUID] = None
    # Defines a time period, where both Start and End are inclusive. If only start is given, the period represents and instant in time (useful for instance defining single transactions with no time component).
    period: Optional[Period] = None
    # The quantity sold. If not defined defaults to 1.
    quantity: Optional[int] = None
    # Gets or sets the identifier of the subscriber.
    subscriber_id: Optional[UUID] = None
    # Gets or sets the identifier of the subscription.
    subscription_id: Optional[UUID] = None
    # Gets or sets the tax details.
    tax_details: Optional[list[ProductTaxDetailView]] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PaymentDemandDetailView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PaymentDemandDetailView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PaymentDemandDetailView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .infosoft.s4.billing.contracts.period import Period
        from .product_tax_detail_view import ProductTaxDetailView

        from .infosoft.s4.billing.contracts.period import Period
        from .product_tax_detail_view import ProductTaxDetailView

        fields: dict[str, Callable[[Any], None]] = {
            "amount": lambda n : setattr(self, 'amount', n.get_float_value()),
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "nextSubscriptionId": lambda n : setattr(self, 'next_subscription_id', n.get_uuid_value()),
            "orderId": lambda n : setattr(self, 'order_id', n.get_uuid_value()),
            "period": lambda n : setattr(self, 'period', n.get_object_value(Period)),
            "quantity": lambda n : setattr(self, 'quantity', n.get_int_value()),
            "subscriberId": lambda n : setattr(self, 'subscriber_id', n.get_uuid_value()),
            "subscriptionId": lambda n : setattr(self, 'subscription_id', n.get_uuid_value()),
            "taxDetails": lambda n : setattr(self, 'tax_details', n.get_collection_of_object_values(ProductTaxDetailView)),
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
        writer.write_str_value("currency", self.currency)
        writer.write_uuid_value("id", self.id)
        writer.write_uuid_value("nextSubscriptionId", self.next_subscription_id)
        writer.write_uuid_value("orderId", self.order_id)
        writer.write_object_value("period", self.period)
        writer.write_int_value("quantity", self.quantity)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
        writer.write_uuid_value("subscriptionId", self.subscription_id)
        writer.write_collection_of_object_values("taxDetails", self.tax_details)
    

