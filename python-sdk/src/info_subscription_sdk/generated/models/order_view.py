from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .order_choices import OrderChoices
    from .order_plan_source_type import OrderPlanSourceType
    from .order_status import OrderStatus
    from .order_tag import OrderTag
    from .payment_methods import PaymentMethods

@dataclass
class OrderView(Parsable):
    """
    Represents a read model of an order returned by the API. This classcontains the identifiers and metadata produced by order processing suchas status, related subscription/payment ids, timestamps and resolved planinformation.
    """
    # Reference returned by the payment provider or agreement creation step.Useful for reconcilliation with external systems.
    agreement_reference: Optional[str] = None
    # External identifier for the subscriber (for example CRM or billingsystem id) used for correlation.
    external_subscriber_id: Optional[str] = None
    # Unique identifier of the order record.
    id: Optional[UUID] = None
    # Identifier of the invoice contact used for billing documents.
    invoice_contact_id: Optional[UUID] = None
    # Timestamp when the order was cancelled, if applicable.
    order_cancelled: Optional[datetime.datetime] = None
    # Represents properties/choices that overrides/set options from the Template Subscription Plan.
    order_choices: Optional[OrderChoices] = None
    # Timestamp when the order completed processing, if available.
    order_completed: Optional[datetime.datetime] = None
    # Timestamp when the order was created.
    order_created: Optional[datetime.datetime] = None
    # Optional external reference supplied with the order for correlation withexternal systems.
    order_reference: Optional[str] = None
    # Organization that owns the subscription created by this order.
    organization_id: Optional[UUID] = None
    # Identifier of the payment agreement used for the order, if any.
    payment_agreement_id: Optional[UUID] = None
    # Identifier of the payment produced by the order processing flow.
    payment_id: Optional[UUID] = None
    # Gets the payment methods.
    payment_method: Optional[PaymentMethods] = None
    # Identifies the source/type of the subscription plan associated with an order.Stored in the order event and read model to drive code-path branching at completion and cancellation.
    plan_source_type: Optional[OrderPlanSourceType] = None
    # When true indicates the order processing attempted to settle existingaccount balance as part of billing.
    settle_account_balance: Optional[bool] = None
    # An enum representing different order statuses.
    status: Optional[OrderStatus] = None
    # Subscriber account identifier associated with the order.
    subscriber_account: Optional[UUID] = None
    # Identifier of the subscriber the order is associated with, if any.
    subscriber_id: Optional[UUID] = None
    # Optional numeric subscriber number from the source system.
    subscriber_number: Optional[int] = None
    # Identifier of the subscription created as a result of this order, if any.
    subscription_id: Optional[UUID] = None
    # Subscription plan identifier when the plan was resolved to an existingor persisted inline plan.
    subscription_plan_id: Optional[UUID] = None
    # The order tag.The entity that is used to store various types (TagType) of values in a reporting service.
    tag: Optional[OrderTag] = None
    # Template package id from ProductService used when the order was created(if a template was the source of the plan).
    template_package_id: Optional[UUID] = None
    # If the payment flow requires a terminal redirect (for example to athird-party payment provider), this property contains the URL to redirectthe client to.
    terminal_redirect_url: Optional[str] = None
    # Identifier of the payment transaction created during order processing.
    transaction_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> OrderView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: OrderView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return OrderView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .order_choices import OrderChoices
        from .order_plan_source_type import OrderPlanSourceType
        from .order_status import OrderStatus
        from .order_tag import OrderTag
        from .payment_methods import PaymentMethods

        from .order_choices import OrderChoices
        from .order_plan_source_type import OrderPlanSourceType
        from .order_status import OrderStatus
        from .order_tag import OrderTag
        from .payment_methods import PaymentMethods

        fields: dict[str, Callable[[Any], None]] = {
            "agreementReference": lambda n : setattr(self, 'agreement_reference', n.get_str_value()),
            "externalSubscriberId": lambda n : setattr(self, 'external_subscriber_id', n.get_str_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "invoiceContactId": lambda n : setattr(self, 'invoice_contact_id', n.get_uuid_value()),
            "orderCancelled": lambda n : setattr(self, 'order_cancelled', n.get_datetime_value()),
            "orderChoices": lambda n : setattr(self, 'order_choices', n.get_object_value(OrderChoices)),
            "orderCompleted": lambda n : setattr(self, 'order_completed', n.get_datetime_value()),
            "orderCreated": lambda n : setattr(self, 'order_created', n.get_datetime_value()),
            "orderReference": lambda n : setattr(self, 'order_reference', n.get_str_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "paymentAgreementId": lambda n : setattr(self, 'payment_agreement_id', n.get_uuid_value()),
            "paymentId": lambda n : setattr(self, 'payment_id', n.get_uuid_value()),
            "paymentMethod": lambda n : setattr(self, 'payment_method', n.get_enum_value(PaymentMethods)),
            "planSourceType": lambda n : setattr(self, 'plan_source_type', n.get_enum_value(OrderPlanSourceType)),
            "settleAccountBalance": lambda n : setattr(self, 'settle_account_balance', n.get_bool_value()),
            "status": lambda n : setattr(self, 'status', n.get_enum_value(OrderStatus)),
            "subscriberAccount": lambda n : setattr(self, 'subscriber_account', n.get_uuid_value()),
            "subscriberId": lambda n : setattr(self, 'subscriber_id', n.get_uuid_value()),
            "subscriberNumber": lambda n : setattr(self, 'subscriber_number', n.get_int_value()),
            "subscriptionId": lambda n : setattr(self, 'subscription_id', n.get_uuid_value()),
            "subscriptionPlanId": lambda n : setattr(self, 'subscription_plan_id', n.get_uuid_value()),
            "tag": lambda n : setattr(self, 'tag', n.get_object_value(OrderTag)),
            "templatePackageId": lambda n : setattr(self, 'template_package_id', n.get_uuid_value()),
            "terminalRedirectUrl": lambda n : setattr(self, 'terminal_redirect_url', n.get_str_value()),
            "transactionId": lambda n : setattr(self, 'transaction_id', n.get_uuid_value()),
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
        writer.write_str_value("agreementReference", self.agreement_reference)
        writer.write_str_value("externalSubscriberId", self.external_subscriber_id)
        writer.write_uuid_value("id", self.id)
        writer.write_uuid_value("invoiceContactId", self.invoice_contact_id)
        writer.write_datetime_value("orderCancelled", self.order_cancelled)
        writer.write_object_value("orderChoices", self.order_choices)
        writer.write_datetime_value("orderCompleted", self.order_completed)
        writer.write_datetime_value("orderCreated", self.order_created)
        writer.write_str_value("orderReference", self.order_reference)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_uuid_value("paymentAgreementId", self.payment_agreement_id)
        writer.write_uuid_value("paymentId", self.payment_id)
        writer.write_enum_value("paymentMethod", self.payment_method)
        writer.write_enum_value("planSourceType", self.plan_source_type)
        writer.write_bool_value("settleAccountBalance", self.settle_account_balance)
        writer.write_enum_value("status", self.status)
        writer.write_uuid_value("subscriberAccount", self.subscriber_account)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
        writer.write_int_value("subscriberNumber", self.subscriber_number)
        writer.write_uuid_value("subscriptionId", self.subscription_id)
        writer.write_uuid_value("subscriptionPlanId", self.subscription_plan_id)
        writer.write_object_value("tag", self.tag)
        writer.write_uuid_value("templatePackageId", self.template_package_id)
        writer.write_str_value("terminalRedirectUrl", self.terminal_redirect_url)
        writer.write_uuid_value("transactionId", self.transaction_id)
    

