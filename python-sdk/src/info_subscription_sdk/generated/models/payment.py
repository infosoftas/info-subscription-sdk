from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .infosoft.s4.payments.contracts.payment_state import PaymentState

@dataclass
class Payment(Parsable):
    """
    Common properties for payment contracts
    """
    # The time of approval
    approved: Optional[datetime.datetime] = None
    # An optional comment.
    comment: Optional[str] = None
    # The currency.
    currency: Optional[str] = None
    # Tthe external invoice identifier this payment should match.
    external_invoice_identifier: Optional[str] = None
    # The identifier for the Payment
    id: Optional[UUID] = None
    # The identifier of the invoice this payment should match.
    invoice_id: Optional[UUID] = None
    # The number of the invoice this payment should match.
    invoice_number: Optional[str] = None
    # Gets or sets the matching errors.
    matching_errors: Optional[list[str]] = None
    # The identifier of the organization.
    organization_id: Optional[UUID] = None
    # The amount of the payment.
    paid_amount: Optional[float] = None
    # Gets or sets the identifier of the payment agreement.
    payment_agreement_id: Optional[UUID] = None
    # The date the payment was made.
    payment_date: Optional[datetime.datetime] = None
    # Gets or sets the original registration time.
    registration: Optional[datetime.datetime] = None
    # The source of the payment.
    source: Optional[str] = None
    # State for a payment
    state: Optional[PaymentState] = None
    # The sub category
    sub_category: Optional[str] = None
    # Gets or sets the the subscriber account.
    subscriber_account: Optional[UUID] = None
    # The identifier of the subscriber.
    subscriber_id: Optional[UUID] = None
    # The latest update time for the payment.
    updated: Optional[datetime.datetime] = None
    # The value date for the payment, i.e when was it added to the receiving account.
    value_date: Optional[datetime.datetime] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> Payment:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Payment
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return Payment()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .infosoft.s4.payments.contracts.payment_state import PaymentState

        from .infosoft.s4.payments.contracts.payment_state import PaymentState

        fields: dict[str, Callable[[Any], None]] = {
            "approved": lambda n : setattr(self, 'approved', n.get_datetime_value()),
            "comment": lambda n : setattr(self, 'comment', n.get_str_value()),
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "externalInvoiceIdentifier": lambda n : setattr(self, 'external_invoice_identifier', n.get_str_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "invoiceId": lambda n : setattr(self, 'invoice_id', n.get_uuid_value()),
            "invoiceNumber": lambda n : setattr(self, 'invoice_number', n.get_str_value()),
            "matchingErrors": lambda n : setattr(self, 'matching_errors', n.get_collection_of_primitive_values(str)),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "paidAmount": lambda n : setattr(self, 'paid_amount', n.get_float_value()),
            "paymentAgreementId": lambda n : setattr(self, 'payment_agreement_id', n.get_uuid_value()),
            "paymentDate": lambda n : setattr(self, 'payment_date', n.get_datetime_value()),
            "registration": lambda n : setattr(self, 'registration', n.get_datetime_value()),
            "source": lambda n : setattr(self, 'source', n.get_str_value()),
            "state": lambda n : setattr(self, 'state', n.get_enum_value(PaymentState)),
            "subCategory": lambda n : setattr(self, 'sub_category', n.get_str_value()),
            "subscriberAccount": lambda n : setattr(self, 'subscriber_account', n.get_uuid_value()),
            "subscriberId": lambda n : setattr(self, 'subscriber_id', n.get_uuid_value()),
            "updated": lambda n : setattr(self, 'updated', n.get_datetime_value()),
            "valueDate": lambda n : setattr(self, 'value_date', n.get_datetime_value()),
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
        writer.write_datetime_value("approved", self.approved)
        writer.write_str_value("comment", self.comment)
        writer.write_str_value("currency", self.currency)
        writer.write_str_value("externalInvoiceIdentifier", self.external_invoice_identifier)
        writer.write_uuid_value("id", self.id)
        writer.write_uuid_value("invoiceId", self.invoice_id)
        writer.write_str_value("invoiceNumber", self.invoice_number)
        writer.write_collection_of_primitive_values("matchingErrors", self.matching_errors)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_float_value("paidAmount", self.paid_amount)
        writer.write_uuid_value("paymentAgreementId", self.payment_agreement_id)
        writer.write_datetime_value("paymentDate", self.payment_date)
        writer.write_datetime_value("registration", self.registration)
        writer.write_str_value("source", self.source)
        writer.write_enum_value("state", self.state)
        writer.write_str_value("subCategory", self.sub_category)
        writer.write_uuid_value("subscriberAccount", self.subscriber_account)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
        writer.write_datetime_value("updated", self.updated)
        writer.write_datetime_value("valueDate", self.value_date)
    

