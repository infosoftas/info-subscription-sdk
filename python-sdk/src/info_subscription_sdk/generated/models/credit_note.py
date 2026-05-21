from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .amount import Amount
    from .invoice_base import InvoiceBase
    from .invoice_reference import InvoiceReference

from .invoice_base import InvoiceBase

@dataclass
class CreditNote(InvoiceBase, Parsable):
    """
    Class represents a Credit Note (a document that reverses or corrects an invoice and inherites most of invoice's properties)
    """
    # An amount with a currency of the amount
    credited_amount: Optional[Amount] = None
    # Description of the Credit Note
    description: Optional[str] = None
    # Class to reference an invoice from the related Credit Note.
    invoice_reference: Optional[InvoiceReference] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> CreditNote:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: CreditNote
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return CreditNote()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .amount import Amount
        from .invoice_base import InvoiceBase
        from .invoice_reference import InvoiceReference

        from .amount import Amount
        from .invoice_base import InvoiceBase
        from .invoice_reference import InvoiceReference

        fields: dict[str, Callable[[Any], None]] = {
            "creditedAmount": lambda n : setattr(self, 'credited_amount', n.get_object_value(Amount)),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "invoiceReference": lambda n : setattr(self, 'invoice_reference', n.get_object_value(InvoiceReference)),
        }
        super_fields = super().get_field_deserializers()
        fields.update(super_fields)
        return fields
    
    def serialize(self,writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if writer is None:
            raise TypeError("writer cannot be null.")
        super().serialize(writer)
        writer.write_object_value("creditedAmount", self.credited_amount)
        writer.write_str_value("description", self.description)
        writer.write_object_value("invoiceReference", self.invoice_reference)
    

