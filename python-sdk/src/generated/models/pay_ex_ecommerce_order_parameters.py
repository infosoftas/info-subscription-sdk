from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class PayExEcommerceOrderParameters(Parsable):
    """
    Order parameters for PayEx ecommerce agreement registration.
    """
    # Gets or sets URL where the user is sent when returned from payex.
    callback_url: Optional[str] = None
    # Gets or sets URL where the user is sent if he or she presses the cancel button.
    cancel_url: Optional[str] = None
    # Gets or sets URL where the user is sent when payex ecomerce completed.
    complete_url: Optional[str] = None
    # Gets or sets the culture code in a PayEx compatible format (affect the payment window language).
    culture: Optional[str] = None
    # Gets or sets the identifier that determines which PayEx account to use for this payment. If not specified the first available account will be used.
    pay_ex_account_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PayExEcommerceOrderParameters:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PayExEcommerceOrderParameters
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PayExEcommerceOrderParameters()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "callbackUrl": lambda n : setattr(self, 'callback_url', n.get_str_value()),
            "cancelUrl": lambda n : setattr(self, 'cancel_url', n.get_str_value()),
            "completeUrl": lambda n : setattr(self, 'complete_url', n.get_str_value()),
            "culture": lambda n : setattr(self, 'culture', n.get_str_value()),
            "payExAccountId": lambda n : setattr(self, 'pay_ex_account_id', n.get_uuid_value()),
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
        writer.write_str_value("callbackUrl", self.callback_url)
        writer.write_str_value("cancelUrl", self.cancel_url)
        writer.write_str_value("completeUrl", self.complete_url)
        writer.write_str_value("culture", self.culture)
        writer.write_uuid_value("payExAccountId", self.pay_ex_account_id)
    

