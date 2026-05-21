from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .amount import Amount
    from .infosoft.s4.invoice.contracts.read_model.invoice_state import InvoiceState
    from .invoice_line import InvoiceLine
    from .participant import Participant
    from .period import Period
    from .tax_total import TaxTotal

@dataclass
class InvoiceBase(Parsable):
    """
    A base class for the invoice and the credit note classes.
    """
    # A participant.
    buyer: Optional[Participant] = None
    # Gets or sets the buyer reference.
    buyer_reference: Optional[str] = None
    # Gets or sets the identifier of the external invoice.
    external_invoice_identifier: Optional[str] = None
    # Gets the globally unique identifier for this invoice
    id: Optional[UUID] = None
    # Gets or sets the issued on.
    issued_on: Optional[datetime.datetime] = None
    # A participant.
    issuer: Optional[Participant] = None
    # An amount with a currency of the amount
    line_extension_amount: Optional[Amount] = None
    # Gets or sets the specification of the invoice
    lines: Optional[list[InvoiceLine]] = None
    # Gets the unique identifier for the invoice in a numeric format usable by humans and machines alike
    number: Optional[int] = None
    # Gets or sets the order reference.
    order_reference: Optional[str] = None
    # Gets or sets the paid on of the invoice
    paid_on: Optional[datetime.datetime] = None
    # An amount with a currency of the amount
    payable_amount: Optional[Amount] = None
    # A participant.
    payment_recipient: Optional[Participant] = None
    # A period that associated the line with a time frame for a provided service/product.
    period: Optional[Period] = None
    # A participant.
    recipient: Optional[Participant] = None
    # A participant.
    seller: Optional[Participant] = None
    # Values that represent the invoice state.
    state: Optional[InvoiceState] = None
    # A participant.
    supplier: Optional[Participant] = None
    # An amount with a currency of the amount
    tax_exclusive_amount: Optional[Amount] = None
    # An amount with a currency of the amount
    tax_inclusive_amount: Optional[Amount] = None
    # Gets the tax point (or 'time of supply') for a transaction is the date the transaction takes place for VAT purposes
    tax_point_date: Optional[datetime.datetime] = None
    # Gets or sets the tax totals.
    tax_totals: Optional[list[TaxTotal]] = None
    # An optional GUID/UUID used for external tracking purposes.
    tracking_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> InvoiceBase:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: InvoiceBase
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return InvoiceBase()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .amount import Amount
        from .infosoft.s4.invoice.contracts.read_model.invoice_state import InvoiceState
        from .invoice_line import InvoiceLine
        from .participant import Participant
        from .period import Period
        from .tax_total import TaxTotal

        from .amount import Amount
        from .infosoft.s4.invoice.contracts.read_model.invoice_state import InvoiceState
        from .invoice_line import InvoiceLine
        from .participant import Participant
        from .period import Period
        from .tax_total import TaxTotal

        fields: dict[str, Callable[[Any], None]] = {
            "buyer": lambda n : setattr(self, 'buyer', n.get_object_value(Participant)),
            "buyerReference": lambda n : setattr(self, 'buyer_reference', n.get_str_value()),
            "externalInvoiceIdentifier": lambda n : setattr(self, 'external_invoice_identifier', n.get_str_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "issuedOn": lambda n : setattr(self, 'issued_on', n.get_datetime_value()),
            "issuer": lambda n : setattr(self, 'issuer', n.get_object_value(Participant)),
            "lineExtensionAmount": lambda n : setattr(self, 'line_extension_amount', n.get_object_value(Amount)),
            "lines": lambda n : setattr(self, 'lines', n.get_collection_of_object_values(InvoiceLine)),
            "number": lambda n : setattr(self, 'number', n.get_int_value()),
            "orderReference": lambda n : setattr(self, 'order_reference', n.get_str_value()),
            "paidOn": lambda n : setattr(self, 'paid_on', n.get_datetime_value()),
            "payableAmount": lambda n : setattr(self, 'payable_amount', n.get_object_value(Amount)),
            "paymentRecipient": lambda n : setattr(self, 'payment_recipient', n.get_object_value(Participant)),
            "period": lambda n : setattr(self, 'period', n.get_object_value(Period)),
            "recipient": lambda n : setattr(self, 'recipient', n.get_object_value(Participant)),
            "seller": lambda n : setattr(self, 'seller', n.get_object_value(Participant)),
            "state": lambda n : setattr(self, 'state', n.get_enum_value(InvoiceState)),
            "supplier": lambda n : setattr(self, 'supplier', n.get_object_value(Participant)),
            "taxExclusiveAmount": lambda n : setattr(self, 'tax_exclusive_amount', n.get_object_value(Amount)),
            "taxInclusiveAmount": lambda n : setattr(self, 'tax_inclusive_amount', n.get_object_value(Amount)),
            "taxPointDate": lambda n : setattr(self, 'tax_point_date', n.get_datetime_value()),
            "taxTotals": lambda n : setattr(self, 'tax_totals', n.get_collection_of_object_values(TaxTotal)),
            "trackingId": lambda n : setattr(self, 'tracking_id', n.get_uuid_value()),
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
        writer.write_object_value("buyer", self.buyer)
        writer.write_str_value("buyerReference", self.buyer_reference)
        writer.write_str_value("externalInvoiceIdentifier", self.external_invoice_identifier)
        writer.write_uuid_value("id", self.id)
        writer.write_datetime_value("issuedOn", self.issued_on)
        writer.write_object_value("issuer", self.issuer)
        writer.write_object_value("lineExtensionAmount", self.line_extension_amount)
        writer.write_collection_of_object_values("lines", self.lines)
        writer.write_int_value("number", self.number)
        writer.write_str_value("orderReference", self.order_reference)
        writer.write_datetime_value("paidOn", self.paid_on)
        writer.write_object_value("payableAmount", self.payable_amount)
        writer.write_object_value("paymentRecipient", self.payment_recipient)
        writer.write_object_value("period", self.period)
        writer.write_object_value("recipient", self.recipient)
        writer.write_object_value("seller", self.seller)
        writer.write_enum_value("state", self.state)
        writer.write_object_value("supplier", self.supplier)
        writer.write_object_value("taxExclusiveAmount", self.tax_exclusive_amount)
        writer.write_object_value("taxInclusiveAmount", self.tax_inclusive_amount)
        writer.write_datetime_value("taxPointDate", self.tax_point_date)
        writer.write_collection_of_object_values("taxTotals", self.tax_totals)
        writer.write_uuid_value("trackingId", self.tracking_id)
    

