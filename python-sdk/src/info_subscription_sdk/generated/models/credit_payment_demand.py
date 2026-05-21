from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .credit_billing_settings import CreditBillingSettings
    from .credit_payment_demand_allowance import CreditPaymentDemandAllowance
    from .credit_payment_demand_charge import CreditPaymentDemandCharge
    from .credit_payment_demand_detail import CreditPaymentDemandDetail
    from .payment_demand_replacement_settings import PaymentDemandReplacementSettings

@dataclass
class CreditPaymentDemand(Parsable):
    """
    Provides information need to credit a payment demand and possibly generate a new demand to replace it.
    """
    # A collection of settings for controlling billing behaviour during crediting operations.
    billing_options: Optional[CreditBillingSettings] = None
    # A collection of allowances to credit (i.e. remove) from the payment demand.
    credit_allowances: Optional[list[CreditPaymentDemandAllowance]] = None
    # A collection of charges to credit (i.e. remove) from the payment demand.
    credit_charges: Optional[list[CreditPaymentDemandCharge]] = None
    # A collection of details to credit (i.e. remove) from the payment demand.If left empty the demand will be credited entirely. If specified assumes a replacement is to be generated and requires replacementoptions to be included.
    credit_details: Optional[list[CreditPaymentDemandDetail]] = None
    # The descriptive reasoning for the credit action.
    credit_reason: Optional[str] = None
    # The time of creditting time, if not specified will default to the time of command processing
    credit_time: Optional[datetime.datetime] = None
    # Options that controls how an existing payment demand should be replaced when crediting the source demand.
    payment_demand_replacement_option: Optional[PaymentDemandReplacementSettings] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> CreditPaymentDemand:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: CreditPaymentDemand
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return CreditPaymentDemand()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .credit_billing_settings import CreditBillingSettings
        from .credit_payment_demand_allowance import CreditPaymentDemandAllowance
        from .credit_payment_demand_charge import CreditPaymentDemandCharge
        from .credit_payment_demand_detail import CreditPaymentDemandDetail
        from .payment_demand_replacement_settings import PaymentDemandReplacementSettings

        from .credit_billing_settings import CreditBillingSettings
        from .credit_payment_demand_allowance import CreditPaymentDemandAllowance
        from .credit_payment_demand_charge import CreditPaymentDemandCharge
        from .credit_payment_demand_detail import CreditPaymentDemandDetail
        from .payment_demand_replacement_settings import PaymentDemandReplacementSettings

        fields: dict[str, Callable[[Any], None]] = {
            "billingOptions": lambda n : setattr(self, 'billing_options', n.get_object_value(CreditBillingSettings)),
            "creditAllowances": lambda n : setattr(self, 'credit_allowances', n.get_collection_of_object_values(CreditPaymentDemandAllowance)),
            "creditCharges": lambda n : setattr(self, 'credit_charges', n.get_collection_of_object_values(CreditPaymentDemandCharge)),
            "creditDetails": lambda n : setattr(self, 'credit_details', n.get_collection_of_object_values(CreditPaymentDemandDetail)),
            "creditReason": lambda n : setattr(self, 'credit_reason', n.get_str_value()),
            "creditTime": lambda n : setattr(self, 'credit_time', n.get_datetime_value()),
            "paymentDemandReplacementOption": lambda n : setattr(self, 'payment_demand_replacement_option', n.get_object_value(PaymentDemandReplacementSettings)),
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
        writer.write_object_value("billingOptions", self.billing_options)
        writer.write_collection_of_object_values("creditAllowances", self.credit_allowances)
        writer.write_collection_of_object_values("creditCharges", self.credit_charges)
        writer.write_collection_of_object_values("creditDetails", self.credit_details)
        writer.write_str_value("creditReason", self.credit_reason)
        writer.write_datetime_value("creditTime", self.credit_time)
        writer.write_object_value("paymentDemandReplacementOption", self.payment_demand_replacement_option)
    

