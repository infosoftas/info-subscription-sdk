from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .matching_type import MatchingType

@dataclass
class CreatePayment(Parsable):
    """
    Data for creating a new payment
    """
    # Gets or sets a value indicating whether to do automatic approval. The default is false
    automatic_approval: Optional[bool] = None
    # An optional identifier of the billing account, should only be set when using Billing Account matching.
    billing_account_id: Optional[UUID] = None
    # An optional comment.
    comment: Optional[str] = None
    # The currency.
    currency: Optional[str] = None
    # The external invoice identifier this payment should match.
    external_invoice_identifier: Optional[str] = None
    # The identifier of the invoice this payment should match.
    invoice_id: Optional[UUID] = None
    # Values that represent matching variants
    invoice_match_type: Optional[MatchingType] = None
    # The identifier of the organization.
    organization_id: Optional[UUID] = None
    # The amount of the payment.
    paid_amount: Optional[float] = None
    # The date the payment was made.
    payment_date: Optional[datetime.datetime] = None
    # The source of the payment.
    source: Optional[str] = None
    # The sub category
    sub_category: Optional[str] = None
    # The identifier of the subscriber the payment should be matched to
    subscriber_id: Optional[UUID] = None
    # The value date for the payment, i.e when was it added to the receiving account.
    value_date: Optional[datetime.datetime] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> CreatePayment:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: CreatePayment
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return CreatePayment()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .matching_type import MatchingType

        from .matching_type import MatchingType

        fields: dict[str, Callable[[Any], None]] = {
            "automaticApproval": lambda n : setattr(self, 'automatic_approval', n.get_bool_value()),
            "billingAccountId": lambda n : setattr(self, 'billing_account_id', n.get_uuid_value()),
            "comment": lambda n : setattr(self, 'comment', n.get_str_value()),
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "externalInvoiceIdentifier": lambda n : setattr(self, 'external_invoice_identifier', n.get_str_value()),
            "invoiceId": lambda n : setattr(self, 'invoice_id', n.get_uuid_value()),
            "invoiceMatchType": lambda n : setattr(self, 'invoice_match_type', n.get_enum_value(MatchingType)),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "paidAmount": lambda n : setattr(self, 'paid_amount', n.get_float_value()),
            "paymentDate": lambda n : setattr(self, 'payment_date', n.get_datetime_value()),
            "source": lambda n : setattr(self, 'source', n.get_str_value()),
            "subCategory": lambda n : setattr(self, 'sub_category', n.get_str_value()),
            "subscriberId": lambda n : setattr(self, 'subscriber_id', n.get_uuid_value()),
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
        writer.write_bool_value("automaticApproval", self.automatic_approval)
        writer.write_uuid_value("billingAccountId", self.billing_account_id)
        writer.write_str_value("comment", self.comment)
        writer.write_str_value("currency", self.currency)
        writer.write_str_value("externalInvoiceIdentifier", self.external_invoice_identifier)
        writer.write_uuid_value("invoiceId", self.invoice_id)
        writer.write_enum_value("invoiceMatchType", self.invoice_match_type)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_float_value("paidAmount", self.paid_amount)
        writer.write_datetime_value("paymentDate", self.payment_date)
        writer.write_str_value("source", self.source)
        writer.write_str_value("subCategory", self.sub_category)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
        writer.write_datetime_value("valueDate", self.value_date)
    

