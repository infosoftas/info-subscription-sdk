from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .base_vipps_order_parameters import BaseVippsOrderParameters

from .base_vipps_order_parameters import BaseVippsOrderParameters

@dataclass
class VippsMobilePayOrderParameters(BaseVippsOrderParameters, Parsable):
    """
    Order parameters for Vipps|MobilePay agreement registration.
    """
    # (Recommended) The identifier of the VippsMobilePay account to use.             If not given an attempt will be made to resolve one based on the OrganizationId on the ordered subscription.
    account_id: Optional[UUID] = None
    # Indicates whether to attempt to generate a subscriber contact based on the profileinformation from Vipps MobilePay.
    generate_subscriber_contact: Optional[bool] = None
    # The profile/userdata scope to require permission for. Given as a space separated list of values.
    profile_scope: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> VippsMobilePayOrderParameters:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: VippsMobilePayOrderParameters
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return VippsMobilePayOrderParameters()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .base_vipps_order_parameters import BaseVippsOrderParameters

        from .base_vipps_order_parameters import BaseVippsOrderParameters

        fields: dict[str, Callable[[Any], None]] = {
            "accountId": lambda n : setattr(self, 'account_id', n.get_uuid_value()),
            "generateSubscriberContact": lambda n : setattr(self, 'generate_subscriber_contact', n.get_bool_value()),
            "profileScope": lambda n : setattr(self, 'profile_scope', n.get_str_value()),
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
        writer.write_uuid_value("accountId", self.account_id)
        writer.write_bool_value("generateSubscriberContact", self.generate_subscriber_contact)
        writer.write_str_value("profileScope", self.profile_scope)
    

