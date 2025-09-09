from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class TaxGroupView(Parsable):
    """
    A tax group view.
    """
    # Gets or sets the country.
    country: Optional[str] = None
    # Gets or sets the description.
    description: Optional[str] = None
    # Gets or sets the expiry date.
    expiry_date: Optional[datetime.datetime] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets or sets the name.
    name: Optional[str] = None
    # Gets or sets a list of identifiers of the products.
    product_ids: Optional[list[UUID]] = None
    # Gets or sets the start date.
    start_date: Optional[datetime.datetime] = None
    # Gets or sets the tax percent.
    tax_percent: Optional[float] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> TaxGroupView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: TaxGroupView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return TaxGroupView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "country": lambda n : setattr(self, 'country', n.get_str_value()),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "expiryDate": lambda n : setattr(self, 'expiry_date', n.get_datetime_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "productIds": lambda n : setattr(self, 'product_ids', n.get_collection_of_primitive_values(UUID)),
            "startDate": lambda n : setattr(self, 'start_date', n.get_datetime_value()),
            "taxPercent": lambda n : setattr(self, 'tax_percent', n.get_float_value()),
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
        writer.write_str_value("country", self.country)
        writer.write_str_value("description", self.description)
        writer.write_datetime_value("expiryDate", self.expiry_date)
        writer.write_uuid_value("id", self.id)
        writer.write_str_value("name", self.name)
        writer.write_collection_of_primitive_values("productIds", self.product_ids)
        writer.write_datetime_value("startDate", self.start_date)
        writer.write_float_value("taxPercent", self.tax_percent)
    

