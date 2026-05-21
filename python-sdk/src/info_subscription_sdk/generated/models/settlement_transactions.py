from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .settlement_allowance import SettlementAllowance
    from .settlement_charge import SettlementCharge
    from .settlement_payment import SettlementPayment

@dataclass
class SettlementTransactions(Parsable):
    """
    A settlement transactions.
    """
    # The account allowances consumed to settle the demand.
    consumed_allowances: Optional[list[SettlementAllowance]] = None
    # The charges generated due to missing coverage on the demand.
    generated_charges: Optional[list[SettlementCharge]] = None
    # The payments used to settle the parent demand.
    source_payments: Optional[list[SettlementPayment]] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SettlementTransactions:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SettlementTransactions
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SettlementTransactions()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .settlement_allowance import SettlementAllowance
        from .settlement_charge import SettlementCharge
        from .settlement_payment import SettlementPayment

        from .settlement_allowance import SettlementAllowance
        from .settlement_charge import SettlementCharge
        from .settlement_payment import SettlementPayment

        fields: dict[str, Callable[[Any], None]] = {
            "consumedAllowances": lambda n : setattr(self, 'consumed_allowances', n.get_collection_of_object_values(SettlementAllowance)),
            "generatedCharges": lambda n : setattr(self, 'generated_charges', n.get_collection_of_object_values(SettlementCharge)),
            "sourcePayments": lambda n : setattr(self, 'source_payments', n.get_collection_of_object_values(SettlementPayment)),
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
        writer.write_collection_of_object_values("consumedAllowances", self.consumed_allowances)
        writer.write_collection_of_object_values("generatedCharges", self.generated_charges)
        writer.write_collection_of_object_values("sourcePayments", self.source_payments)
    

