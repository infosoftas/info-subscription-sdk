from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .allowance import Allowance
    from .amount import Amount
    from .charge import Charge
    from .period import Period
    from .tax_total import TaxTotal

@dataclass
class InvoiceLine(Parsable):
    """
    Represents a line on an invoice. Typically one or more purchased items
    """
    # Gets the discounts applied to this invoiceline, i.e. 10% off a 100 NOK charge would havea Infosoft.S4.Invoice.Contracts.ReadModel.LineDetail with an amount of 10 NOK.
    allowances: Optional[list[Allowance]] = None
    # Gets the charges applied to this invoiceline, i.e. 100 NOK for this product for one month..
    charges: Optional[list[Charge]] = None
    # Gets the fees applied to this invoiceline, i.e. 10 NOK because this is an expensive wayto distribute the product.
    fees: Optional[list[Charge]] = None
    # Gets the globally unique identifier for this line
    id: Optional[UUID] = None
    # Gets the identifier of the line within this invoice
    line_number: Optional[int] = None
    # A period that associated the line with a time frame for a provided service/product.
    period: Optional[Period] = None
    # An amount with a currency of the amount
    price: Optional[Amount] = None
    # Gets the number of items for which this invoice line applies
    quantity: Optional[int] = None
    # Gets the tax totals for this line, contains totals for each tax type/group in this line(based on the Allowances and Charges)
    tax_totals: Optional[list[TaxTotal]] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> InvoiceLine:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: InvoiceLine
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return InvoiceLine()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .allowance import Allowance
        from .amount import Amount
        from .charge import Charge
        from .period import Period
        from .tax_total import TaxTotal

        from .allowance import Allowance
        from .amount import Amount
        from .charge import Charge
        from .period import Period
        from .tax_total import TaxTotal

        fields: dict[str, Callable[[Any], None]] = {
            "allowances": lambda n : setattr(self, 'allowances', n.get_collection_of_object_values(Allowance)),
            "charges": lambda n : setattr(self, 'charges', n.get_collection_of_object_values(Charge)),
            "fees": lambda n : setattr(self, 'fees', n.get_collection_of_object_values(Charge)),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "lineNumber": lambda n : setattr(self, 'line_number', n.get_int_value()),
            "period": lambda n : setattr(self, 'period', n.get_object_value(Period)),
            "price": lambda n : setattr(self, 'price', n.get_object_value(Amount)),
            "quantity": lambda n : setattr(self, 'quantity', n.get_int_value()),
            "taxTotals": lambda n : setattr(self, 'tax_totals', n.get_collection_of_object_values(TaxTotal)),
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
        writer.write_collection_of_object_values("allowances", self.allowances)
        writer.write_collection_of_object_values("charges", self.charges)
        writer.write_collection_of_object_values("fees", self.fees)
        writer.write_uuid_value("id", self.id)
        writer.write_int_value("lineNumber", self.line_number)
        writer.write_object_value("period", self.period)
        writer.write_object_value("price", self.price)
        writer.write_int_value("quantity", self.quantity)
        writer.write_collection_of_object_values("taxTotals", self.tax_totals)
    

