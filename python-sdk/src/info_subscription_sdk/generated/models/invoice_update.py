from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .optional_of_buyer import OptionalOfBuyer
    from .optional_of_recipient import OptionalOfRecipient

@dataclass
class InvoiceUpdate(Parsable):
    """
    Represent a request to update an invoice.
    """
    # A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    buyer: Optional[OptionalOfBuyer] = None
    # A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    buyer_reference: Optional[str] = None
    # A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    order_reference: Optional[str] = None
    # The identifier of the organization.
    organization_id: Optional[UUID] = None
    # A container for optional values, specifically designed to be used in the contextserialization in an HTTP API using JSON.
    recipient: Optional[OptionalOfRecipient] = None
    # The identifier of the subscriber.
    subscriber_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> InvoiceUpdate:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: InvoiceUpdate
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return InvoiceUpdate()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .optional_of_buyer import OptionalOfBuyer
        from .optional_of_recipient import OptionalOfRecipient

        from .optional_of_buyer import OptionalOfBuyer
        from .optional_of_recipient import OptionalOfRecipient

        fields: dict[str, Callable[[Any], None]] = {
            "buyer": lambda n : setattr(self, 'buyer', n.get_object_value(OptionalOfBuyer)),
            "buyerReference": lambda n : setattr(self, 'buyer_reference', n.get_str_value()),
            "orderReference": lambda n : setattr(self, 'order_reference', n.get_str_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "recipient": lambda n : setattr(self, 'recipient', n.get_object_value(OptionalOfRecipient)),
            "subscriberId": lambda n : setattr(self, 'subscriber_id', n.get_uuid_value()),
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
        writer.write_str_value("orderReference", self.order_reference)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_object_value("recipient", self.recipient)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
    

