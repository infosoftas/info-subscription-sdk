from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .additional_product_order import AdditionalProductOrder
    from .infosoft.s4.api.data_contracts.v1.order.order_tag import OrderTag
    from .payment_agreement_parameters import PaymentAgreementParameters
    from .plan_selection import PlanSelection
    from .subscriber_contact import SubscriberContact

@dataclass
class OrderCreate(Parsable):
    """
    Parameters that controls the flow of the ordering process such as what is ordered and HOW.
    """
    # Additional products to include/buy with this order, in addition to the ones included in the defined template plan.
    additional_products: Optional[list[AdditionalProductOrder]] = None
    # An external identifier of the subscriber, typically from external CRM systems or similar.
    external_subscriber_id: Optional[str] = None
    # A subscriber contact.
    invoice_contact: Optional[SubscriberContact] = None
    # The identifier of the subscriber contact used as the Invoice recipient/Invoice payer.
    invoice_contact_id: Optional[UUID] = None
    # An optional order reference.
    order_reference: Optional[str] = None
    # The identifier of the organization that the subscription should be created for.If not set the first available organization will be choosen.
    organization_id: Optional[UUID] = None
    # The identifier of a payment agreement to use for the new subscription.
    payment_agreement_id: Optional[UUID] = None
    # A payment agreement order parameters.
    payment_agreement_parameters: Optional[PaymentAgreementParameters] = None
    # Defines how a subscription plan is sourced. Exactly one of the three properties must be provided.
    plan_selection: Optional[PlanSelection] = None
    # Should this order settle existing account balance when when billed.
    settle_account_balance: Optional[bool] = None
    # The subscriber account the order (and subsequent subscription) should be associated with.             If not given it will be automatically determined based on the current system state.
    subscriber_account: Optional[UUID] = None
    # The identifier of the subscriber.
    subscriber_id: Optional[UUID] = None
    # The subscriber number (only define this if you are using your own number sequences).
    subscriber_number: Optional[int] = None
    # The order tag.The entity that is used to store various types (TagType) of values ​​in a reporting service.
    tag: Optional[OrderTag] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> OrderCreate:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: OrderCreate
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return OrderCreate()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .additional_product_order import AdditionalProductOrder
        from .infosoft.s4.api.data_contracts.v1.order.order_tag import OrderTag
        from .payment_agreement_parameters import PaymentAgreementParameters
        from .plan_selection import PlanSelection
        from .subscriber_contact import SubscriberContact

        from .additional_product_order import AdditionalProductOrder
        from .infosoft.s4.api.data_contracts.v1.order.order_tag import OrderTag
        from .payment_agreement_parameters import PaymentAgreementParameters
        from .plan_selection import PlanSelection
        from .subscriber_contact import SubscriberContact

        fields: dict[str, Callable[[Any], None]] = {
            "additionalProducts": lambda n : setattr(self, 'additional_products', n.get_collection_of_object_values(AdditionalProductOrder)),
            "externalSubscriberId": lambda n : setattr(self, 'external_subscriber_id', n.get_str_value()),
            "invoiceContact": lambda n : setattr(self, 'invoice_contact', n.get_object_value(SubscriberContact)),
            "invoiceContactId": lambda n : setattr(self, 'invoice_contact_id', n.get_uuid_value()),
            "orderReference": lambda n : setattr(self, 'order_reference', n.get_str_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "paymentAgreementId": lambda n : setattr(self, 'payment_agreement_id', n.get_uuid_value()),
            "paymentAgreementParameters": lambda n : setattr(self, 'payment_agreement_parameters', n.get_object_value(PaymentAgreementParameters)),
            "planSelection": lambda n : setattr(self, 'plan_selection', n.get_object_value(PlanSelection)),
            "settleAccountBalance": lambda n : setattr(self, 'settle_account_balance', n.get_bool_value()),
            "subscriberAccount": lambda n : setattr(self, 'subscriber_account', n.get_uuid_value()),
            "subscriberId": lambda n : setattr(self, 'subscriber_id', n.get_uuid_value()),
            "subscriberNumber": lambda n : setattr(self, 'subscriber_number', n.get_int_value()),
            "tag": lambda n : setattr(self, 'tag', n.get_object_value(OrderTag)),
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
        writer.write_collection_of_object_values("additionalProducts", self.additional_products)
        writer.write_str_value("externalSubscriberId", self.external_subscriber_id)
        writer.write_object_value("invoiceContact", self.invoice_contact)
        writer.write_uuid_value("invoiceContactId", self.invoice_contact_id)
        writer.write_str_value("orderReference", self.order_reference)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_uuid_value("paymentAgreementId", self.payment_agreement_id)
        writer.write_object_value("paymentAgreementParameters", self.payment_agreement_parameters)
        writer.write_object_value("planSelection", self.plan_selection)
        writer.write_bool_value("settleAccountBalance", self.settle_account_balance)
        writer.write_uuid_value("subscriberAccount", self.subscriber_account)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
        writer.write_int_value("subscriberNumber", self.subscriber_number)
        writer.write_object_value("tag", self.tag)
    

