from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class IssueCreditNote(Parsable):
    """
    An issue credit note.
    """
    # Gets or sets the amount of the credit note.
    amount: Optional[float] = None
    # Gets or sets the description of the credit note.
    description: Optional[str] = None
    # Gets or sets the identifier of the organization.
    organization_id: Optional[UUID] = None
    # Gets or sets the reference to a subscriber.
    reference_identification: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> IssueCreditNote:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: IssueCreditNote
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return IssueCreditNote()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "amount": lambda n : setattr(self, 'amount', n.get_float_value()),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "referenceIdentification": lambda n : setattr(self, 'reference_identification', n.get_str_value()),
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
        writer.write_float_value("amount", self.amount)
        writer.write_str_value("description", self.description)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_str_value("referenceIdentification", self.reference_identification)
    

