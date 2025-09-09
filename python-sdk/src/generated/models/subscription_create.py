from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .billing_options import BillingOptions
    from .infosoft.s4.api.data_contracts.v1.contract import Contract

@dataclass
class SubscriptionCreate(Parsable):
    """
    A subscription create.
    """
    # Options for controlling the billing flow.
    billing_options: Optional[BillingOptions] = None
    # A contract.
    contract: Optional[Contract] = None
    # The identifier of the enterprise plan if the subscription should be associated with one.
    enterprise_plan_id: Optional[UUID] = None
    # The identifier of the invoice contact, if not set will default to the buyer/subscriber.
    invoice_contact_id: Optional[UUID] = None
    # Gets or sets the identifier of the organization that the subscription should be created for.If not set the first available organization will be choosen.
    organization_id: Optional[UUID] = None
    # The identifier of the payment agreement to use when billing the subscription.
    payment_agreement_id: Optional[UUID] = None
    # Gets or sets the identifier of the permanent discount.
    permanent_discount_id: Optional[UUID] = None
    # The start time of the subscription, defaults to Now if not set.
    start_time: Optional[datetime.datetime] = None
    # Gets or sets the subscriber account.
    subscriber_account: Optional[UUID] = None
    # Identifier of the subscriber that owns/consumes this subscription.
    subscriber_id: Optional[UUID] = None
    # The identifier of the template package/subscription plan.
    template_package_id: Optional[UUID] = None
    # Gets or sets the units.
    units: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SubscriptionCreate:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SubscriptionCreate
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SubscriptionCreate()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .billing_options import BillingOptions
        from .infosoft.s4.api.data_contracts.v1.contract import Contract

        from .billing_options import BillingOptions
        from .infosoft.s4.api.data_contracts.v1.contract import Contract

        fields: dict[str, Callable[[Any], None]] = {
            "billingOptions": lambda n : setattr(self, 'billing_options', n.get_object_value(BillingOptions)),
            "contract": lambda n : setattr(self, 'contract', n.get_object_value(Contract)),
            "enterprisePlanId": lambda n : setattr(self, 'enterprise_plan_id', n.get_uuid_value()),
            "invoiceContactId": lambda n : setattr(self, 'invoice_contact_id', n.get_uuid_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "paymentAgreementId": lambda n : setattr(self, 'payment_agreement_id', n.get_uuid_value()),
            "permanentDiscountId": lambda n : setattr(self, 'permanent_discount_id', n.get_uuid_value()),
            "startTime": lambda n : setattr(self, 'start_time', n.get_datetime_value()),
            "subscriberAccount": lambda n : setattr(self, 'subscriber_account', n.get_uuid_value()),
            "subscriberId": lambda n : setattr(self, 'subscriber_id', n.get_uuid_value()),
            "templatePackageId": lambda n : setattr(self, 'template_package_id', n.get_uuid_value()),
            "units": lambda n : setattr(self, 'units', n.get_int_value()),
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
        writer.write_object_value("contract", self.contract)
        writer.write_uuid_value("enterprisePlanId", self.enterprise_plan_id)
        writer.write_uuid_value("invoiceContactId", self.invoice_contact_id)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_uuid_value("paymentAgreementId", self.payment_agreement_id)
        writer.write_uuid_value("permanentDiscountId", self.permanent_discount_id)
        writer.write_datetime_value("startTime", self.start_time)
        writer.write_uuid_value("subscriberAccount", self.subscriber_account)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
        writer.write_uuid_value("templatePackageId", self.template_package_id)
        writer.write_int_value("units", self.units)
    

