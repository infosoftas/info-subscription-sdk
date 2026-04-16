from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .infosoft.s4.api.data_contracts.v1.payment_methods import PaymentMethods
    from .pay_ex_ecommerce_order_parameters import PayExEcommerceOrderParameters
    from .vipps_mobile_pay_order_parameters import VippsMobilePayOrderParameters

@dataclass
class PaymentAgreementParameters(Parsable):
    """
    A payment agreement order parameters.
    """
    # Order parameters for PayEx ecommerce agreement registration.
    pay_ex_ecommerce_parameters: Optional[PayExEcommerceOrderParameters] = None
    # Gets the payment methods.
    payment_method: Optional[PaymentMethods] = None
    # Order parameters for Vipps|MobilePay agreement registration.
    vipps_mobile_pay_parameters: Optional[VippsMobilePayOrderParameters] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PaymentAgreementParameters:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PaymentAgreementParameters
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PaymentAgreementParameters()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .infosoft.s4.api.data_contracts.v1.payment_methods import PaymentMethods
        from .pay_ex_ecommerce_order_parameters import PayExEcommerceOrderParameters
        from .vipps_mobile_pay_order_parameters import VippsMobilePayOrderParameters

        from .infosoft.s4.api.data_contracts.v1.payment_methods import PaymentMethods
        from .pay_ex_ecommerce_order_parameters import PayExEcommerceOrderParameters
        from .vipps_mobile_pay_order_parameters import VippsMobilePayOrderParameters

        fields: dict[str, Callable[[Any], None]] = {
            "payExEcommerceParameters": lambda n : setattr(self, 'pay_ex_ecommerce_parameters', n.get_object_value(PayExEcommerceOrderParameters)),
            "paymentMethod": lambda n : setattr(self, 'payment_method', n.get_enum_value(PaymentMethods)),
            "vippsMobilePayParameters": lambda n : setattr(self, 'vipps_mobile_pay_parameters', n.get_object_value(VippsMobilePayOrderParameters)),
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
        writer.write_object_value("payExEcommerceParameters", self.pay_ex_ecommerce_parameters)
        writer.write_enum_value("paymentMethod", self.payment_method)
        writer.write_object_value("vippsMobilePayParameters", self.vipps_mobile_pay_parameters)
    

