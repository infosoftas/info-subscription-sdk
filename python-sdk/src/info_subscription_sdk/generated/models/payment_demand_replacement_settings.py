from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class PaymentDemandReplacementSettings(Parsable):
    """
    Options that controls how an existing payment demand should be replaced when crediting the source demand.
    """
    # Determine if the system should calculate the Due Date based on existing rules for the demand type and payment agreement. If set the Infosoft.S4.Billing.Contracts.PaymentDemandReplacementSettings.NewDueDate parameter must not be set.
    calculate_demand_due_date: Optional[bool] = None
    # A fixed Fee for the newly generated demand. If NOT set, fee will be calculated from the demand (payment agreement and billing plan), if set to Zero no fee is added. Otherwise the fee will have the given value.
    fee: Optional[float] = None
    # The new due date, must be set if the Infosoft.S4.Billing.Contracts.PaymentDemandReplacementSettings.CalculateDemandDueDate parameter is false (or not set)
    new_due_date: Optional[datetime.datetime] = None
    # The payment agreement to use for issuing a new Payment Demand, this will override whatever was on the original demand and on source subscription (if it is a recurring demand).
    payment_agreement_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PaymentDemandReplacementSettings:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PaymentDemandReplacementSettings
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PaymentDemandReplacementSettings()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "calculateDemandDueDate": lambda n : setattr(self, 'calculate_demand_due_date', n.get_bool_value()),
            "fee": lambda n : setattr(self, 'fee', n.get_float_value()),
            "newDueDate": lambda n : setattr(self, 'new_due_date', n.get_datetime_value()),
            "paymentAgreementId": lambda n : setattr(self, 'payment_agreement_id', n.get_uuid_value()),
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
        writer.write_bool_value("calculateDemandDueDate", self.calculate_demand_due_date)
        writer.write_float_value("fee", self.fee)
        writer.write_datetime_value("newDueDate", self.new_due_date)
        writer.write_uuid_value("paymentAgreementId", self.payment_agreement_id)
    

