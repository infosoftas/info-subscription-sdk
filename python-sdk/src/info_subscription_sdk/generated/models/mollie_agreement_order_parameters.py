from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class MollieAgreementOrderParameters(Parsable):
    """
    Order parameters for Mollie agreement registration.
    """
    # The identifier that determines which Mollie account to use for this payment.
    account_id: Optional[UUID] = None
    # URL where the user is sent if he or she cancels the checkout.
    cancel_url: Optional[str] = None
    # The culture code in a Mollie compatible format (affect the checkout window language).
    culture: Optional[str] = None
    # URL where the user is sent when returned from Mollie after completing the checkout.
    return_url: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> MollieAgreementOrderParameters:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: MollieAgreementOrderParameters
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return MollieAgreementOrderParameters()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "accountId": lambda n : setattr(self, 'account_id', n.get_uuid_value()),
            "cancelUrl": lambda n : setattr(self, 'cancel_url', n.get_str_value()),
            "culture": lambda n : setattr(self, 'culture', n.get_str_value()),
            "returnUrl": lambda n : setattr(self, 'return_url', n.get_str_value()),
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
        writer.write_str_value("cancelUrl", self.cancel_url)
        writer.write_str_value("culture", self.culture)
        writer.write_str_value("returnUrl", self.return_url)
    

