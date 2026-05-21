from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class CreditNoteFileView(Parsable):
    # Gets or sets the file identifier.
    file_id: Optional[UUID] = None
    # Gets or sets the credit note file identifier
    id: Optional[UUID] = None
    # Gets or sets the type of the credit note file
    mime_type: Optional[str] = None
    # Gets or sets the name of the credit note file
    name: Optional[str] = None
    # Gets or sets the relative link of the credit note file
    relative_link: Optional[str] = None
    # Gets or sets the type of the credit note file
    type: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> CreditNoteFileView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: CreditNoteFileView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return CreditNoteFileView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "fileId": lambda n : setattr(self, 'file_id', n.get_uuid_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "mimeType": lambda n : setattr(self, 'mime_type', n.get_str_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "relativeLink": lambda n : setattr(self, 'relative_link', n.get_str_value()),
            "type": lambda n : setattr(self, 'type', n.get_str_value()),
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
        writer.write_uuid_value("fileId", self.file_id)
        writer.write_uuid_value("id", self.id)
        writer.write_str_value("mimeType", self.mime_type)
        writer.write_str_value("name", self.name)
        writer.write_str_value("relativeLink", self.relative_link)
        writer.write_str_value("type", self.type)
    

