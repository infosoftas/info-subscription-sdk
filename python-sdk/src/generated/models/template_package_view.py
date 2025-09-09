from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .additional_product import AdditionalProduct
    from .infosoft.s4.product_service.contracts.contract import Contract
    from .infosoft.s4.product_service.contracts.template_package_rule import TemplatePackageRule
    from .initial_term import InitialTerm
    from .package_chain_view import PackageChainView
    from .template_package_billing_frequency_view import TemplatePackageBillingFrequencyView
    from .template_package_billing_plan_view import TemplatePackageBillingPlanView
    from .template_package_product_view import TemplatePackageProductView

@dataclass
class TemplatePackageView(Parsable):
    """
    A template package view.
    """
    # Gets or sets the billing frequencies.
    billing_frequencies: Optional[list[TemplatePackageBillingFrequencyView]] = None
    # Gets or sets the billing plans.
    billing_plans: Optional[list[TemplatePackageBillingPlanView]] = None
    # Values that represent contract.
    contract: Optional[Contract] = None
    # Gets or sets the currency.
    currency: Optional[str] = None
    # Gets or sets the description.
    description: Optional[str] = None
    # Gets or sets a value indicating whether this instance is disabled.
    disabled: Optional[bool] = None
    # Gets or sets the full price.
    full_price: Optional[float] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets or sets a included additional products.
    included_additional_products: Optional[list[AdditionalProduct]] = None
    # A package chain step.
    initial_term: Optional[InitialTerm] = None
    # Gets or sets the name.
    name: Optional[str] = None
    # Gets or sets the identifier of the organization.
    organization_id: Optional[UUID] = None
    # A package chain view.
    package_chain: Optional[PackageChainView] = None
    # Gets or sets the price.
    price: Optional[float] = None
    # Gets or sets the products.
    products: Optional[list[TemplatePackageProductView]] = None
    # Gets or sets the description of the package to be used after renewal.
    renewal_description: Optional[str] = None
    # Gets or sets the name of the package to be used after renewal.
    renewal_name: Optional[str] = None
    # Gets or sets the tax percent.
    tax: Optional[float] = None
    # Gets or sets the template package rules.
    template_package_rules: Optional[list[TemplatePackageRule]] = None
    # Gets or sets the Date/Time of the valid from.
    valid_from: Optional[datetime.datetime] = None
    # Gets or sets the Date/Time of the valid to.
    valid_until: Optional[datetime.datetime] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> TemplatePackageView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: TemplatePackageView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return TemplatePackageView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .additional_product import AdditionalProduct
        from .infosoft.s4.product_service.contracts.contract import Contract
        from .infosoft.s4.product_service.contracts.template_package_rule import TemplatePackageRule
        from .initial_term import InitialTerm
        from .package_chain_view import PackageChainView
        from .template_package_billing_frequency_view import TemplatePackageBillingFrequencyView
        from .template_package_billing_plan_view import TemplatePackageBillingPlanView
        from .template_package_product_view import TemplatePackageProductView

        from .additional_product import AdditionalProduct
        from .infosoft.s4.product_service.contracts.contract import Contract
        from .infosoft.s4.product_service.contracts.template_package_rule import TemplatePackageRule
        from .initial_term import InitialTerm
        from .package_chain_view import PackageChainView
        from .template_package_billing_frequency_view import TemplatePackageBillingFrequencyView
        from .template_package_billing_plan_view import TemplatePackageBillingPlanView
        from .template_package_product_view import TemplatePackageProductView

        fields: dict[str, Callable[[Any], None]] = {
            "billingFrequencies": lambda n : setattr(self, 'billing_frequencies', n.get_collection_of_object_values(TemplatePackageBillingFrequencyView)),
            "billingPlans": lambda n : setattr(self, 'billing_plans', n.get_collection_of_object_values(TemplatePackageBillingPlanView)),
            "contract": lambda n : setattr(self, 'contract', n.get_object_value(Contract)),
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "disabled": lambda n : setattr(self, 'disabled', n.get_bool_value()),
            "fullPrice": lambda n : setattr(self, 'full_price', n.get_float_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "includedAdditionalProducts": lambda n : setattr(self, 'included_additional_products', n.get_collection_of_object_values(AdditionalProduct)),
            "initialTerm": lambda n : setattr(self, 'initial_term', n.get_object_value(InitialTerm)),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "packageChain": lambda n : setattr(self, 'package_chain', n.get_object_value(PackageChainView)),
            "price": lambda n : setattr(self, 'price', n.get_float_value()),
            "products": lambda n : setattr(self, 'products', n.get_collection_of_object_values(TemplatePackageProductView)),
            "renewalDescription": lambda n : setattr(self, 'renewal_description', n.get_str_value()),
            "renewalName": lambda n : setattr(self, 'renewal_name', n.get_str_value()),
            "tax": lambda n : setattr(self, 'tax', n.get_float_value()),
            "templatePackageRules": lambda n : setattr(self, 'template_package_rules', n.get_collection_of_object_values(TemplatePackageRule)),
            "validFrom": lambda n : setattr(self, 'valid_from', n.get_datetime_value()),
            "validUntil": lambda n : setattr(self, 'valid_until', n.get_datetime_value()),
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
        writer.write_collection_of_object_values("billingFrequencies", self.billing_frequencies)
        writer.write_collection_of_object_values("billingPlans", self.billing_plans)
        writer.write_object_value("contract", self.contract)
        writer.write_str_value("currency", self.currency)
        writer.write_str_value("description", self.description)
        writer.write_bool_value("disabled", self.disabled)
        writer.write_float_value("fullPrice", self.full_price)
        writer.write_uuid_value("id", self.id)
        writer.write_collection_of_object_values("includedAdditionalProducts", self.included_additional_products)
        writer.write_object_value("initialTerm", self.initial_term)
        writer.write_str_value("name", self.name)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_object_value("packageChain", self.package_chain)
        writer.write_float_value("price", self.price)
        writer.write_collection_of_object_values("products", self.products)
        writer.write_str_value("renewalDescription", self.renewal_description)
        writer.write_str_value("renewalName", self.renewal_name)
        writer.write_float_value("tax", self.tax)
        writer.write_collection_of_object_values("templatePackageRules", self.template_package_rules)
        writer.write_datetime_value("validFrom", self.valid_from)
        writer.write_datetime_value("validUntil", self.valid_until)
    

