from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class AccountSource(Parsable):
    """
    Account source model
    """
    # Gets or sets the identifier of the source.
    id: Optional[UUID] = None
    # Gets or sets the identifier of the subscriber account.
    subscriber_account_id: Optional[UUID] = None
    # Gets or sets the identifier of the user.
    user_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> AccountSource:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: AccountSource
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return AccountSource()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "subscriberAccountId": lambda n : setattr(self, 'subscriber_account_id', n.get_uuid_value()),
            "userId": lambda n : setattr(self, 'user_id', n.get_uuid_value()),
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
        writer.write_uuid_value("id", self.id)
        writer.write_uuid_value("subscriberAccountId", self.subscriber_account_id)
        writer.write_uuid_value("userId", self.user_id)
    

