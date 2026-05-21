from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class InvoiceReference(Parsable):
    """
    Class to reference an invoice from the related Credit Note.
    """
    # Gets the identifier of the external.
    external_identifier: Optional[str] = None
    # Gets the identifier of the invoice.
    invoice_id: Optional[UUID] = None
    # Gets the invoice number.
    invoice_number: Optional[int] = None
    # Gets the issued date.
    issued_date: Optional[datetime.datetime] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> InvoiceReference:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: InvoiceReference
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return InvoiceReference()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "externalIdentifier": lambda n : setattr(self, 'external_identifier', n.get_str_value()),
            "invoiceId": lambda n : setattr(self, 'invoice_id', n.get_uuid_value()),
            "invoiceNumber": lambda n : setattr(self, 'invoice_number', n.get_int_value()),
            "issuedDate": lambda n : setattr(self, 'issued_date', n.get_datetime_value()),
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
        writer.write_str_value("externalIdentifier", self.external_identifier)
        writer.write_uuid_value("invoiceId", self.invoice_id)
        writer.write_int_value("invoiceNumber", self.invoice_number)
        writer.write_datetime_value("issuedDate", self.issued_date)
    

