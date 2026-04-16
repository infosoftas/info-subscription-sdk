from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .......template_package_choices import TemplatePackageChoices
    from ..payment_methods import PaymentMethods
    from .order_tag import OrderTag

@dataclass
class OrderView(Parsable):
    """
    An order view.
    """
    # Gets or sets the agreement reference.
    agreement_reference: Optional[str] = None
    # Gets or sets the identifier of the external subscriber.
    external_subscriber_id: Optional[str] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets or sets the identifier of the invoice contact.
    invoice_contact_id: Optional[UUID] = None
    # Gets or sets the Date/Time of the order cancelled.
    order_cancelled: Optional[datetime.datetime] = None
    # Gets or sets the Date/Time of the order completed.
    order_completed: Optional[datetime.datetime] = None
    # Gets or sets the Date/Time of the order created.
    order_created: Optional[datetime.datetime] = None
    # An optional order reference.
    order_reference: Optional[str] = None
    # Gets or sets the identifier of the payment agreement.
    payment_agreement_id: Optional[UUID] = None
    # Gets or sets the identifier of the related payment.
    payment_id: Optional[UUID] = None
    # Gets the payment methods.
    payment_method: Optional[PaymentMethods] = None
    # Should this order settle existing account balance when when billed.
    settle_account_balance: Optional[bool] = None
    # Gets or sets the status.
    status: Optional[str] = None
    # Gets or sets the subscriber account.
    subscriber_account: Optional[UUID] = None
    # Gets or sets the identifier of the subscriber.
    subscriber_id: Optional[UUID] = None
    # Gets or sets the subscriber number.
    subscriber_number: Optional[int] = None
    # Gets or sets the identifier of the resulting subscription.
    subscription_id: Optional[UUID] = None
    # The order tag.The entity that is used to store various types (TagType) of values ​​in a reporting service.
    tag: Optional[OrderTag] = None
    # A template package choices.
    template_package_choices: Optional[TemplatePackageChoices] = None
    # Gets or sets the identifier of the template package.
    template_package_id: Optional[UUID] = None
    # Gets or sets URL of the terminal redirect.
    terminal_redirect_url: Optional[str] = None
    # Gets or sets the payment provider transaction if one is associated with the order.
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
        from .......template_package_choices import TemplatePackageChoices
        from ..payment_methods import PaymentMethods
        from .order_tag import OrderTag

        from .......template_package_choices import TemplatePackageChoices
        from ..payment_methods import PaymentMethods
        from .order_tag import OrderTag

        fields: dict[str, Callable[[Any], None]] = {
            "agreementReference": lambda n : setattr(self, 'agreement_reference', n.get_str_value()),
            "externalSubscriberId": lambda n : setattr(self, 'external_subscriber_id', n.get_str_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "invoiceContactId": lambda n : setattr(self, 'invoice_contact_id', n.get_uuid_value()),
            "orderCancelled": lambda n : setattr(self, 'order_cancelled', n.get_datetime_value()),
            "orderCompleted": lambda n : setattr(self, 'order_completed', n.get_datetime_value()),
            "orderCreated": lambda n : setattr(self, 'order_created', n.get_datetime_value()),
            "orderReference": lambda n : setattr(self, 'order_reference', n.get_str_value()),
            "paymentAgreementId": lambda n : setattr(self, 'payment_agreement_id', n.get_uuid_value()),
            "paymentId": lambda n : setattr(self, 'payment_id', n.get_uuid_value()),
            "paymentMethod": lambda n : setattr(self, 'payment_method', n.get_enum_value(PaymentMethods)),
            "settleAccountBalance": lambda n : setattr(self, 'settle_account_balance', n.get_bool_value()),
            "status": lambda n : setattr(self, 'status', n.get_str_value()),
            "subscriberAccount": lambda n : setattr(self, 'subscriber_account', n.get_uuid_value()),
            "subscriberId": lambda n : setattr(self, 'subscriber_id', n.get_uuid_value()),
            "subscriberNumber": lambda n : setattr(self, 'subscriber_number', n.get_int_value()),
            "subscriptionId": lambda n : setattr(self, 'subscription_id', n.get_uuid_value()),
            "tag": lambda n : setattr(self, 'tag', n.get_object_value(OrderTag)),
            "templatePackageChoices": lambda n : setattr(self, 'template_package_choices', n.get_object_value(TemplatePackageChoices)),
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
        writer.write_datetime_value("orderCompleted", self.order_completed)
        writer.write_datetime_value("orderCreated", self.order_created)
        writer.write_str_value("orderReference", self.order_reference)
        writer.write_uuid_value("paymentAgreementId", self.payment_agreement_id)
        writer.write_uuid_value("paymentId", self.payment_id)
        writer.write_enum_value("paymentMethod", self.payment_method)
        writer.write_bool_value("settleAccountBalance", self.settle_account_balance)
        writer.write_str_value("status", self.status)
        writer.write_uuid_value("subscriberAccount", self.subscriber_account)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
        writer.write_int_value("subscriberNumber", self.subscriber_number)
        writer.write_uuid_value("subscriptionId", self.subscription_id)
        writer.write_object_value("tag", self.tag)
        writer.write_object_value("templatePackageChoices", self.template_package_choices)
        writer.write_uuid_value("templatePackageId", self.template_package_id)
        writer.write_str_value("terminalRedirectUrl", self.terminal_redirect_url)
        writer.write_uuid_value("transactionId", self.transaction_id)
    

