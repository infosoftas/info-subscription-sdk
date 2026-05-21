from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .amount import Amount
    from .line_detail import LineDetail
    from .tax_group import TaxGroup

from .line_detail import LineDetail

@dataclass
class Allowance(LineDetail, Parsable):
    """
    Represents an allowance (a discount/amount reduction) on an invoice.
    """
    # An amount with a currency of the amount
    tax_amount: Optional[Amount] = None
    # Represents a tax type/group by a name, code and percentage.
    tax_group: Optional[TaxGroup] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> Allowance:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Allowance
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return Allowance()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .amount import Amount
        from .line_detail import LineDetail
        from .tax_group import TaxGroup

        from .amount import Amount
        from .line_detail import LineDetail
        from .tax_group import TaxGroup

        fields: dict[str, Callable[[Any], None]] = {
            "taxAmount": lambda n : setattr(self, 'tax_amount', n.get_object_value(Amount)),
            "taxGroup": lambda n : setattr(self, 'tax_group', n.get_object_value(TaxGroup)),
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
        writer.write_object_value("taxAmount", self.tax_amount)
        writer.write_object_value("taxGroup", self.tax_group)
    

