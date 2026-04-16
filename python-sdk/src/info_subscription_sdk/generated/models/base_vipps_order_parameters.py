from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .observer_options import ObserverOptions

@dataclass
class BaseVippsOrderParameters(Parsable):
    """
    Order parameters for Vipps agreement registration.
    """
    # The phone number that should be pre-filled on the Vipps|MobilePay registration dialog, if not given an empty dialog will be shown.
    customer_phone_number: Optional[str] = None
    # Set this to true, if the agreement registration flow happens inside a mobile app. Generates an App deeplink that only works on mobile/app enabled devices. Refer to the upstream documentation for details.
    is_app: Optional[bool] = None
    # A URL that describes the merchants/organization subscription agreement and how to manage it (typically a self-service URL).
    merchant_agreement_url: Optional[str] = None
    # The redirect url where the user should be sent to once the Vipps|MobilePay agreement registration flow has completed.
    merchant_redirect_url: Optional[str] = None
    # Order observer configuration options. At the current time only valid for VippsMobilePay processing.
    observer_options: Optional[ObserverOptions] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> BaseVippsOrderParameters:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: BaseVippsOrderParameters
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return BaseVippsOrderParameters()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .observer_options import ObserverOptions

        from .observer_options import ObserverOptions

        fields: dict[str, Callable[[Any], None]] = {
            "customerPhoneNumber": lambda n : setattr(self, 'customer_phone_number', n.get_str_value()),
            "isApp": lambda n : setattr(self, 'is_app', n.get_bool_value()),
            "merchantAgreementUrl": lambda n : setattr(self, 'merchant_agreement_url', n.get_str_value()),
            "merchantRedirectUrl": lambda n : setattr(self, 'merchant_redirect_url', n.get_str_value()),
            "observerOptions": lambda n : setattr(self, 'observer_options', n.get_object_value(ObserverOptions)),
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
        writer.write_str_value("customerPhoneNumber", self.customer_phone_number)
        writer.write_bool_value("isApp", self.is_app)
        writer.write_str_value("merchantAgreementUrl", self.merchant_agreement_url)
        writer.write_str_value("merchantRedirectUrl", self.merchant_redirect_url)
        writer.write_object_value("observerOptions", self.observer_options)
    

