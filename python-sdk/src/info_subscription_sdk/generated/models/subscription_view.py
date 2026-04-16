from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .additional_product_view import AdditionalProductView
    from .billing_options import BillingOptions
    from .contract_view import ContractView
    from .subscription_cancellation_type import SubscriptionCancellationType
    from .subscription_package_view import SubscriptionPackageView

@dataclass
class SubscriptionView(Parsable):
    """
    A subscription view.
    """
    # Options for controlling the billing flow.
    billing_options: Optional[BillingOptions] = None
    # Gets or sets the cancellation cause.
    cancellation_cause: Optional[str] = None
    # Gets or sets the cancellation time.
    cancellation_time: Optional[datetime.datetime] = None
    # Values that represent subscription cancellation types.
    cancellation_type: Optional[SubscriptionCancellationType] = None
    # Gets or sets a value indicating whether the cancelled.
    cancelled: Optional[bool] = None
    # A contract view.
    contract: Optional[ContractView] = None
    # Gets or sets the end time.
    end_time: Optional[datetime.datetime] = None
    # Gets or sets the identifier of the enterprise plan.
    enterprise_plan_id: Optional[UUID] = None
    # Gets or sets the full price.
    full_price: Optional[float] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # The identifier of the current invoice contact if one is present.
    invoice_contact_id: Optional[UUID] = None
    # Gets or sets a value indicating whether this instance is renewed.
    is_renewed: Optional[bool] = None
    # Identifier of the next invoice contact if one has been scheduled.
    next_invoice_contact_id: Optional[UUID] = None
    # Gets or sets the next subscription.
    next_subscription: Optional[UUID] = None
    # An optional order reference.
    order_reference: Optional[str] = None
    # The organization this subscription belongs to.
    organization_id: Optional[UUID] = None
    # A SubscriptionPackage view class.
    package: Optional[SubscriptionPackageView] = None
    # Gets or sets the identifier of the payment agreement.
    payment_agreement_id: Optional[UUID] = None
    # Gets or sets the previous subsription.
    previous_subscription: Optional[UUID] = None
    # Gets or sets the price.
    price: Optional[float] = None
    # The purchasedAdditionalProducts property
    purchased_additional_products: Optional[list[AdditionalProductView]] = None
    # The time the subscription was renewed.
    renewed_on: Optional[datetime.datetime] = None
    # Gets or sets the type of the source.
    source_type: Optional[str] = None
    # Gets or sets the start time.
    start_time: Optional[datetime.datetime] = None
    # Gets or sets the subscriber account.
    subscriber_account: Optional[UUID] = None
    # Gets or sets the identifier of the subscriber.
    subscriber_id: Optional[UUID] = None
    # Gets or sets the tax.
    tax: Optional[float] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SubscriptionView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SubscriptionView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SubscriptionView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .additional_product_view import AdditionalProductView
        from .billing_options import BillingOptions
        from .contract_view import ContractView
        from .subscription_cancellation_type import SubscriptionCancellationType
        from .subscription_package_view import SubscriptionPackageView

        from .additional_product_view import AdditionalProductView
        from .billing_options import BillingOptions
        from .contract_view import ContractView
        from .subscription_cancellation_type import SubscriptionCancellationType
        from .subscription_package_view import SubscriptionPackageView

        fields: dict[str, Callable[[Any], None]] = {
            "billingOptions": lambda n : setattr(self, 'billing_options', n.get_object_value(BillingOptions)),
            "cancellationCause": lambda n : setattr(self, 'cancellation_cause', n.get_str_value()),
            "cancellationTime": lambda n : setattr(self, 'cancellation_time', n.get_datetime_value()),
            "cancellationType": lambda n : setattr(self, 'cancellation_type', n.get_enum_value(SubscriptionCancellationType)),
            "cancelled": lambda n : setattr(self, 'cancelled', n.get_bool_value()),
            "contract": lambda n : setattr(self, 'contract', n.get_object_value(ContractView)),
            "endTime": lambda n : setattr(self, 'end_time', n.get_datetime_value()),
            "enterprisePlanId": lambda n : setattr(self, 'enterprise_plan_id', n.get_uuid_value()),
            "fullPrice": lambda n : setattr(self, 'full_price', n.get_float_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "invoiceContactId": lambda n : setattr(self, 'invoice_contact_id', n.get_uuid_value()),
            "isRenewed": lambda n : setattr(self, 'is_renewed', n.get_bool_value()),
            "nextInvoiceContactId": lambda n : setattr(self, 'next_invoice_contact_id', n.get_uuid_value()),
            "nextSubscription": lambda n : setattr(self, 'next_subscription', n.get_uuid_value()),
            "orderReference": lambda n : setattr(self, 'order_reference', n.get_str_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "package": lambda n : setattr(self, 'package', n.get_object_value(SubscriptionPackageView)),
            "paymentAgreementId": lambda n : setattr(self, 'payment_agreement_id', n.get_uuid_value()),
            "previousSubscription": lambda n : setattr(self, 'previous_subscription', n.get_uuid_value()),
            "price": lambda n : setattr(self, 'price', n.get_float_value()),
            "purchasedAdditionalProducts": lambda n : setattr(self, 'purchased_additional_products', n.get_collection_of_object_values(AdditionalProductView)),
            "renewedOn": lambda n : setattr(self, 'renewed_on', n.get_datetime_value()),
            "sourceType": lambda n : setattr(self, 'source_type', n.get_str_value()),
            "startTime": lambda n : setattr(self, 'start_time', n.get_datetime_value()),
            "subscriberAccount": lambda n : setattr(self, 'subscriber_account', n.get_uuid_value()),
            "subscriberId": lambda n : setattr(self, 'subscriber_id', n.get_uuid_value()),
            "tax": lambda n : setattr(self, 'tax', n.get_float_value()),
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
        writer.write_str_value("cancellationCause", self.cancellation_cause)
        writer.write_datetime_value("cancellationTime", self.cancellation_time)
        writer.write_enum_value("cancellationType", self.cancellation_type)
        writer.write_bool_value("cancelled", self.cancelled)
        writer.write_object_value("contract", self.contract)
        writer.write_datetime_value("endTime", self.end_time)
        writer.write_uuid_value("enterprisePlanId", self.enterprise_plan_id)
        writer.write_float_value("fullPrice", self.full_price)
        writer.write_uuid_value("id", self.id)
        writer.write_uuid_value("invoiceContactId", self.invoice_contact_id)
        writer.write_bool_value("isRenewed", self.is_renewed)
        writer.write_uuid_value("nextInvoiceContactId", self.next_invoice_contact_id)
        writer.write_uuid_value("nextSubscription", self.next_subscription)
        writer.write_str_value("orderReference", self.order_reference)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_object_value("package", self.package)
        writer.write_uuid_value("paymentAgreementId", self.payment_agreement_id)
        writer.write_uuid_value("previousSubscription", self.previous_subscription)
        writer.write_float_value("price", self.price)
        writer.write_collection_of_object_values("purchasedAdditionalProducts", self.purchased_additional_products)
        writer.write_datetime_value("renewedOn", self.renewed_on)
        writer.write_str_value("sourceType", self.source_type)
        writer.write_datetime_value("startTime", self.start_time)
        writer.write_uuid_value("subscriberAccount", self.subscriber_account)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
        writer.write_float_value("tax", self.tax)
    

