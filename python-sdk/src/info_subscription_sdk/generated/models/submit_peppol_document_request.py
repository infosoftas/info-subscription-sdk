from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .infosoft.s4.ehf_invoice.contracts.document_type import DocumentType

@dataclass
class SubmitPeppolDocumentRequest(Parsable):
    """
    Properties for submitting a document to the PEPPOL network.
    """
    # The identifier of the configured account (currently only VaxTransfer Accounts are supported).
    account_id: Optional[UUID] = None
    # The identifier of the document (used to retrieve it from the appropriate underlying service). Typically the InvoiceId or the CreditNoteId.
    document_id: Optional[UUID] = None
    # Values that represent EHF file generation type.
    document_type: Optional[DocumentType] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SubmitPeppolDocumentRequest:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SubmitPeppolDocumentRequest
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SubmitPeppolDocumentRequest()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .infosoft.s4.ehf_invoice.contracts.document_type import DocumentType

        from .infosoft.s4.ehf_invoice.contracts.document_type import DocumentType

        fields: dict[str, Callable[[Any], None]] = {
            "accountId": lambda n : setattr(self, 'account_id', n.get_uuid_value()),
            "documentId": lambda n : setattr(self, 'document_id', n.get_uuid_value()),
            "documentType": lambda n : setattr(self, 'document_type', n.get_enum_value(DocumentType)),
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
        writer.write_uuid_value("accountId", self.account_id)
        writer.write_uuid_value("documentId", self.document_id)
        writer.write_enum_value("documentType", self.document_type)
    

