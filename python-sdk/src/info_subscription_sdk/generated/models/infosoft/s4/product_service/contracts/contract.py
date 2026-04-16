from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .....contract_type import ContractType
    from .contract_surcharge_type import ContractSurchargeType

@dataclass
class Contract(Parsable):
    """
    Values that represent contract.
    """
    # Gets or sets the contract identifier.
    id: Optional[UUID] = None
    # Gets or sets the contract surcharge amount.
    surcharge_amount: Optional[float] = None
    # Gets or sets the contract surcharge tax percent.
    surcharge_tax_percent: Optional[float] = None
    # Values that represent surcharge types.
    surcharge_type: Optional[ContractSurchargeType] = None
    # Values that represent contract types.
    type: Optional[ContractType] = None
    # Gets or sets the type value.
    type_value: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> Contract:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Contract
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return Contract()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .....contract_type import ContractType
        from .contract_surcharge_type import ContractSurchargeType

        from .....contract_type import ContractType
        from .contract_surcharge_type import ContractSurchargeType

        fields: dict[str, Callable[[Any], None]] = {
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "surchargeAmount": lambda n : setattr(self, 'surcharge_amount', n.get_float_value()),
            "surchargeTaxPercent": lambda n : setattr(self, 'surcharge_tax_percent', n.get_float_value()),
            "surchargeType": lambda n : setattr(self, 'surcharge_type', n.get_enum_value(ContractSurchargeType)),
            "type": lambda n : setattr(self, 'type', n.get_enum_value(ContractType)),
            "typeValue": lambda n : setattr(self, 'type_value', n.get_str_value()),
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
        writer.write_float_value("surchargeAmount", self.surcharge_amount)
        writer.write_float_value("surchargeTaxPercent", self.surcharge_tax_percent)
        writer.write_enum_value("surchargeType", self.surcharge_type)
        writer.write_enum_value("type", self.type)
        writer.write_str_value("typeValue", self.type_value)
    

