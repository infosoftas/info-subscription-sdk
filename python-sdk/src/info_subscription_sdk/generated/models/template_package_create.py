from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .included_additional_product import IncludedAdditionalProduct
    from .infosoft.s4.product_service.contracts.contract import Contract
    from .initial_package_term import InitialPackageTerm
    from .template_package_rule import TemplatePackageRule

@dataclass
class TemplatePackageCreate(Parsable):
    """
    A template package create.
    """
    # Availability of the package.
    disabled: Optional[bool] = False
    # A list ov available billing plan identifiers.
    billing_plans: Optional[list[UUID]] = None
    # Values that represent contract.
    contract: Optional[Contract] = None
    # The currency of the package.
    currency: Optional[str] = None
    # An optional description.
    description: Optional[str] = None
    # A list of included additional products.
    included_additional_products: Optional[list[IncludedAdditionalProduct]] = None
    # An initial package term.
    initial_term: Optional[InitialPackageTerm] = None
    # The name of the package.
    name: Optional[str] = None
    # A list of available number of editions.
    number_of_editions: Optional[list[int]] = None
    # An optional organization identifier for the package.
    organization_id: Optional[UUID] = None
    # An optional package chain identifier.
    package_chain_id: Optional[UUID] = None
    # The price for fixedprice-packages.
    price: Optional[float] = None
    # A list of available product identifiers included in the package.
    products: Optional[list[UUID]] = None
    # An optional description if we want to override after renewal.
    renewal_description: Optional[str] = None
    # An optional name if we want to override after renewal.
    renewal_name: Optional[str] = None
    # A list of template package rules.
    template_package_rules: Optional[list[TemplatePackageRule]] = None
    # An optional from date for validity.
    valid_from: Optional[datetime.datetime] = None
    # An optional until date for validity.
    valid_until: Optional[datetime.datetime] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> TemplatePackageCreate:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: TemplatePackageCreate
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return TemplatePackageCreate()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .included_additional_product import IncludedAdditionalProduct
        from .infosoft.s4.product_service.contracts.contract import Contract
        from .initial_package_term import InitialPackageTerm
        from .template_package_rule import TemplatePackageRule

        from .included_additional_product import IncludedAdditionalProduct
        from .infosoft.s4.product_service.contracts.contract import Contract
        from .initial_package_term import InitialPackageTerm
        from .template_package_rule import TemplatePackageRule

        fields: dict[str, Callable[[Any], None]] = {
            "billingPlans": lambda n : setattr(self, 'billing_plans', n.get_collection_of_primitive_values(UUID)),
            "contract": lambda n : setattr(self, 'contract', n.get_object_value(Contract)),
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "disabled": lambda n : setattr(self, 'disabled', n.get_bool_value()),
            "includedAdditionalProducts": lambda n : setattr(self, 'included_additional_products', n.get_collection_of_object_values(IncludedAdditionalProduct)),
            "initialTerm": lambda n : setattr(self, 'initial_term', n.get_object_value(InitialPackageTerm)),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "numberOfEditions": lambda n : setattr(self, 'number_of_editions', n.get_collection_of_primitive_values(int)),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "packageChainId": lambda n : setattr(self, 'package_chain_id', n.get_uuid_value()),
            "price": lambda n : setattr(self, 'price', n.get_float_value()),
            "products": lambda n : setattr(self, 'products', n.get_collection_of_primitive_values(UUID)),
            "renewalDescription": lambda n : setattr(self, 'renewal_description', n.get_str_value()),
            "renewalName": lambda n : setattr(self, 'renewal_name', n.get_str_value()),
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
        writer.write_collection_of_primitive_values("billingPlans", self.billing_plans)
        writer.write_object_value("contract", self.contract)
        writer.write_str_value("currency", self.currency)
        writer.write_str_value("description", self.description)
        writer.write_bool_value("disabled", self.disabled)
        writer.write_collection_of_object_values("includedAdditionalProducts", self.included_additional_products)
        writer.write_object_value("initialTerm", self.initial_term)
        writer.write_str_value("name", self.name)
        writer.write_collection_of_primitive_values("numberOfEditions", self.number_of_editions)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_uuid_value("packageChainId", self.package_chain_id)
        writer.write_float_value("price", self.price)
        writer.write_collection_of_primitive_values("products", self.products)
        writer.write_str_value("renewalDescription", self.renewal_description)
        writer.write_str_value("renewalName", self.renewal_name)
        writer.write_collection_of_object_values("templatePackageRules", self.template_package_rules)
        writer.write_datetime_value("validFrom", self.valid_from)
        writer.write_datetime_value("validUntil", self.valid_until)
    

