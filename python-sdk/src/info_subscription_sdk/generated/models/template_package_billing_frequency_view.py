from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class TemplatePackageBillingFrequencyView(Parsable):
    """
    A template package billing frequency view.
    """
    # The billing frequency identifier.
    billing_frequency_id: Optional[int] = None
    # The fullprice for this combination of products, billingfrequency and number of edition.
    full_price: Optional[float] = None
    # The identifier.
    id: Optional[UUID] = None
    # Optional number of editions.
    number_of_editions: Optional[int] = None
    # The template package identifier.
    template_package_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> TemplatePackageBillingFrequencyView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: TemplatePackageBillingFrequencyView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return TemplatePackageBillingFrequencyView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "billingFrequencyId": lambda n : setattr(self, 'billing_frequency_id', n.get_int_value()),
            "fullPrice": lambda n : setattr(self, 'full_price', n.get_float_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "numberOfEditions": lambda n : setattr(self, 'number_of_editions', n.get_int_value()),
            "templatePackageId": lambda n : setattr(self, 'template_package_id', n.get_uuid_value()),
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
        writer.write_int_value("billingFrequencyId", self.billing_frequency_id)
        writer.write_float_value("fullPrice", self.full_price)
        writer.write_uuid_value("id", self.id)
        writer.write_int_value("numberOfEditions", self.number_of_editions)
        writer.write_uuid_value("templatePackageId", self.template_package_id)
    

