from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import ComposedTypeWrapper, Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from ..models.create_payment import CreatePayment
    from ..models.update_payment import UpdatePayment

@dataclass
class PaymentPostRequestBody(ComposedTypeWrapper, Parsable):
    """
    Composed type wrapper for classes CreatePayment, UpdatePayment
    """
    # Composed type representation for type CreatePayment
    create_payment: Optional[CreatePayment] = None
    # Composed type representation for type UpdatePayment
    update_payment: Optional[UpdatePayment] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PaymentPostRequestBody:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PaymentPostRequestBody
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        try:
            child_node = parse_node.get_child_node("")
            mapping_value = child_node.get_str_value() if child_node else None
        except AttributeError:
            mapping_value = None
        result = PaymentPostRequestBody()
        if mapping_value and mapping_value.casefold() == "CreatePayment".casefold():
            from ..models.create_payment import CreatePayment

            result.create_payment = CreatePayment()
        elif mapping_value and mapping_value.casefold() == "UpdatePayment".casefold():
            from ..models.update_payment import UpdatePayment

            result.update_payment = UpdatePayment()
        return result
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from ..models.create_payment import CreatePayment
        from ..models.update_payment import UpdatePayment

        if self.create_payment:
            return self.create_payment.get_field_deserializers()
        if self.update_payment:
            return self.update_payment.get_field_deserializers()
        return {}
    
    def serialize(self,writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if writer is None:
            raise TypeError("writer cannot be null.")
        if self.create_payment:
            writer.write_object_value(None, self.create_payment)
        elif self.update_payment:
            writer.write_object_value(None, self.update_payment)
    

