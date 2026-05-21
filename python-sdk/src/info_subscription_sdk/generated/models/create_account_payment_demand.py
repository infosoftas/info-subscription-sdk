from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .payment_demand_transaction import PaymentDemandTransaction

@dataclass
class CreateAccountPaymentDemand(Parsable):
    """
    Parameters for creating "standalone" account demands.
    """
    # The billing plan used to schedule billing and subsequent dunning.
    billing_plan_id: Optional[UUID] = None
    # An overall description for the demand, used for some automated payment providers to give a short summary of what the payment is about.
    description: Optional[str] = None
    # The organization the demand is issued for.
    organization_id: Optional[UUID] = None
    # The payment agreement used to process automatic payments and invocing.
    payment_agreement_id: Optional[UUID] = None
    # Determine if any current account balance should be settled. If true existing charges and allowances will be included in addition to the given transactions.
    settle_account_balance: Optional[bool] = None
    # The account the demand is to be charge on.
    subscriber_account_id: Optional[UUID] = None
    # The subscriber. Must be the owner of the account.
    subscriber_id: Optional[UUID] = None
    # A list of details/transactions/charges to apply to the paymentdemand, typically what the Subscriber is going to pay extra for.
    transactions: Optional[list[PaymentDemandTransaction]] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> CreateAccountPaymentDemand:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: CreateAccountPaymentDemand
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return CreateAccountPaymentDemand()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .payment_demand_transaction import PaymentDemandTransaction

        from .payment_demand_transaction import PaymentDemandTransaction

        fields: dict[str, Callable[[Any], None]] = {
            "billingPlanId": lambda n : setattr(self, 'billing_plan_id', n.get_uuid_value()),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "paymentAgreementId": lambda n : setattr(self, 'payment_agreement_id', n.get_uuid_value()),
            "settleAccountBalance": lambda n : setattr(self, 'settle_account_balance', n.get_bool_value()),
            "subscriberAccountId": lambda n : setattr(self, 'subscriber_account_id', n.get_uuid_value()),
            "subscriberId": lambda n : setattr(self, 'subscriber_id', n.get_uuid_value()),
            "transactions": lambda n : setattr(self, 'transactions', n.get_collection_of_object_values(PaymentDemandTransaction)),
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
        writer.write_uuid_value("billingPlanId", self.billing_plan_id)
        writer.write_str_value("description", self.description)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_uuid_value("paymentAgreementId", self.payment_agreement_id)
        writer.write_bool_value("settleAccountBalance", self.settle_account_balance)
        writer.write_uuid_value("subscriberAccountId", self.subscriber_account_id)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
        writer.write_collection_of_object_values("transactions", self.transactions)
    

