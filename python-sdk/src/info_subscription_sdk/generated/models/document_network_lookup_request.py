from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

@dataclass
class DocumentNetworkLookupRequest(Parsable):
    """
    Request properties to do a lookup for Invoice Document support in PEPPOL.
    """
    # Define the network to do a lookup in, must be an ICD Value from the ISO6523 codelist (https://docs.peppol.eu/poacc/billing/3.0/codelist/ICD/).
    network: Optional[str] = None
    # The value to lookup, like the Organization Number, the GLN, the CVR or similar.
    value: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> DocumentNetworkLookupRequest:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: DocumentNetworkLookupRequest
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return DocumentNetworkLookupRequest()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "network": lambda n : setattr(self, 'network', n.get_str_value()),
            "value": lambda n : setattr(self, 'value', n.get_str_value()),
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
        writer.write_str_value("network", self.network)
        writer.write_str_value("value", self.value)
    

