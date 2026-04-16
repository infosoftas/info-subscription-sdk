from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .additional_product_view import AdditionalProductView
    from .infosoft.s4.subscriptions.contracts.permanent_discount import PermanentDiscount
    from .infosoft.s4.subscriptions.contracts.subscription_package_product_view import SubscriptionPackageProductView
    from .subscription_package_chain_view import SubscriptionPackageChainView

@dataclass
class SubscriptionPackageView(Parsable):
    """
    A SubscriptionPackage view class.
    """
    # Gets or sets a included additional products.
    additional_products: Optional[list[AdditionalProductView]] = None
    # Gets or sets a value indicating whether the automatic stop.
    automatic_stop: Optional[bool] = None
    # Gets or sets the identifier of the billing frequency.
    billing_frequency_id: Optional[int] = None
    # Gets or sets the identifier of the billing plan.
    billing_plan_id: Optional[UUID] = None
    # Gets or sets the currency.
    currency: Optional[str] = None
    # Gets or sets the description.
    description: Optional[str] = None
    # Gets or sets the full price.
    full_price: Optional[float] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets or sets the type of the initial term.
    initial_term_type: Optional[int] = None
    # Gets or sets the initial term value.
    initial_term_value: Optional[str] = None
    # Gets or sets the name.
    name: Optional[str] = None
    # Gets or sets the number of editions on this subscription.
    number_of_editions: Optional[int] = None
    # A permanent discount.
    permanent_discount: Optional[PermanentDiscount] = None
    # Gets or sets the price.
    price: Optional[float] = None
    # Gets or sets the products.
    products: Optional[list[SubscriptionPackageProductView]] = None
    # Gets or sets the description of the package to be used after renewal.
    renewal_description: Optional[str] = None
    # Gets or sets the name of the package to be used after renewal.
    renewal_name: Optional[str] = None
    # A subscription package chain.
    subscription_package_chain: Optional[SubscriptionPackageChainView] = None
    # Gets or sets the full price.
    tax: Optional[float] = None
    # Gets the total number of additional products.
    total_additional_products: Optional[list[AdditionalProductView]] = None
    # Gets or sets the units.
    units: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SubscriptionPackageView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SubscriptionPackageView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return SubscriptionPackageView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .additional_product_view import AdditionalProductView
        from .infosoft.s4.subscriptions.contracts.permanent_discount import PermanentDiscount
        from .infosoft.s4.subscriptions.contracts.subscription_package_product_view import SubscriptionPackageProductView
        from .subscription_package_chain_view import SubscriptionPackageChainView

        from .additional_product_view import AdditionalProductView
        from .infosoft.s4.subscriptions.contracts.permanent_discount import PermanentDiscount
        from .infosoft.s4.subscriptions.contracts.subscription_package_product_view import SubscriptionPackageProductView
        from .subscription_package_chain_view import SubscriptionPackageChainView

        fields: dict[str, Callable[[Any], None]] = {
            "additionalProducts": lambda n : setattr(self, 'additional_products', n.get_collection_of_object_values(AdditionalProductView)),
            "automaticStop": lambda n : setattr(self, 'automatic_stop', n.get_bool_value()),
            "billingFrequencyId": lambda n : setattr(self, 'billing_frequency_id', n.get_int_value()),
            "billingPlanId": lambda n : setattr(self, 'billing_plan_id', n.get_uuid_value()),
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "fullPrice": lambda n : setattr(self, 'full_price', n.get_float_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "initialTermType": lambda n : setattr(self, 'initial_term_type', n.get_int_value()),
            "initialTermValue": lambda n : setattr(self, 'initial_term_value', n.get_str_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "numberOfEditions": lambda n : setattr(self, 'number_of_editions', n.get_int_value()),
            "permanentDiscount": lambda n : setattr(self, 'permanent_discount', n.get_object_value(PermanentDiscount)),
            "price": lambda n : setattr(self, 'price', n.get_float_value()),
            "products": lambda n : setattr(self, 'products', n.get_collection_of_object_values(SubscriptionPackageProductView)),
            "renewalDescription": lambda n : setattr(self, 'renewal_description', n.get_str_value()),
            "renewalName": lambda n : setattr(self, 'renewal_name', n.get_str_value()),
            "subscriptionPackageChain": lambda n : setattr(self, 'subscription_package_chain', n.get_object_value(SubscriptionPackageChainView)),
            "tax": lambda n : setattr(self, 'tax', n.get_float_value()),
            "totalAdditionalProducts": lambda n : setattr(self, 'total_additional_products', n.get_collection_of_object_values(AdditionalProductView)),
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
        writer.write_collection_of_object_values("additionalProducts", self.additional_products)
        writer.write_bool_value("automaticStop", self.automatic_stop)
        writer.write_int_value("billingFrequencyId", self.billing_frequency_id)
        writer.write_uuid_value("billingPlanId", self.billing_plan_id)
        writer.write_str_value("currency", self.currency)
        writer.write_str_value("description", self.description)
        writer.write_float_value("fullPrice", self.full_price)
        writer.write_uuid_value("id", self.id)
        writer.write_int_value("initialTermType", self.initial_term_type)
        writer.write_str_value("initialTermValue", self.initial_term_value)
        writer.write_str_value("name", self.name)
        writer.write_int_value("numberOfEditions", self.number_of_editions)
        writer.write_object_value("permanentDiscount", self.permanent_discount)
        writer.write_float_value("price", self.price)
        writer.write_collection_of_object_values("products", self.products)
        writer.write_str_value("renewalDescription", self.renewal_description)
        writer.write_str_value("renewalName", self.renewal_name)
        writer.write_object_value("subscriptionPackageChain", self.subscription_package_chain)
        writer.write_float_value("tax", self.tax)
        writer.write_collection_of_object_values("totalAdditionalProducts", self.total_additional_products)
        writer.write_int_value("units", self.units)
    

