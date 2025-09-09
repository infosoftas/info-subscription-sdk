from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .billing_frequencies import BillingFrequencies

@dataclass
class ProductExtendedCreate(Parsable):
    """
    A product extended create.
    """
    # Values that represent billing frequencies.
    billing_frequency_id: Optional[BillingFrequencies] = None
    # Gets or sets the identifier of the calendar.
    calendar_id: Optional[UUID] = None
    # Gets or sets the calendar starts on date.
    calendar_starts_on_date: Optional[datetime.datetime] = None
    # Gets or sets the identifier of the category.
    category_id: Optional[UUID] = None
    # Gets or sets the currency.
    currency: Optional[str] = None
    # Gets or sets the description.
    description: Optional[str] = None
    # Gets or sets the expiry date.
    expiry_date: Optional[datetime.datetime] = None
    # Gets or sets the external part no.
    external_part_no: Optional[str] = None
    # Gets or sets the name.
    name: Optional[str] = None
    # Gets or sets the number of editions.
    number_of_editions: Optional[int] = None
    # Gets or sets the identifier of the organization.
    organization_id: Optional[UUID] = None
    # Gets or sets the part no.
    part_no: Optional[str] = None
    # Gets or sets the price.
    price: Optional[float] = None
    # Gets or sets the identifier of the price type.
    price_type_id: Optional[UUID] = None
    # Gets or sets the start date.
    start_date: Optional[datetime.datetime] = None
    # Gets or sets the identifier of the tax group.
    tax_group_id: Optional[UUID] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> ProductExtendedCreate:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: ProductExtendedCreate
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return ProductExtendedCreate()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .billing_frequencies import BillingFrequencies

        from .billing_frequencies import BillingFrequencies

        fields: dict[str, Callable[[Any], None]] = {
            "billingFrequencyId": lambda n : setattr(self, 'billing_frequency_id', n.get_enum_value(BillingFrequencies)),
            "calendarId": lambda n : setattr(self, 'calendar_id', n.get_uuid_value()),
            "calendarStartsOnDate": lambda n : setattr(self, 'calendar_starts_on_date', n.get_datetime_value()),
            "categoryId": lambda n : setattr(self, 'category_id', n.get_uuid_value()),
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "expiryDate": lambda n : setattr(self, 'expiry_date', n.get_datetime_value()),
            "externalPartNo": lambda n : setattr(self, 'external_part_no', n.get_str_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "numberOfEditions": lambda n : setattr(self, 'number_of_editions', n.get_int_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "partNo": lambda n : setattr(self, 'part_no', n.get_str_value()),
            "price": lambda n : setattr(self, 'price', n.get_float_value()),
            "priceTypeId": lambda n : setattr(self, 'price_type_id', n.get_uuid_value()),
            "startDate": lambda n : setattr(self, 'start_date', n.get_datetime_value()),
            "taxGroupId": lambda n : setattr(self, 'tax_group_id', n.get_uuid_value()),
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
        writer.write_enum_value("billingFrequencyId", self.billing_frequency_id)
        writer.write_uuid_value("calendarId", self.calendar_id)
        writer.write_datetime_value("calendarStartsOnDate", self.calendar_starts_on_date)
        writer.write_uuid_value("categoryId", self.category_id)
        writer.write_str_value("currency", self.currency)
        writer.write_str_value("description", self.description)
        writer.write_datetime_value("expiryDate", self.expiry_date)
        writer.write_str_value("externalPartNo", self.external_part_no)
        writer.write_str_value("name", self.name)
        writer.write_int_value("numberOfEditions", self.number_of_editions)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_str_value("partNo", self.part_no)
        writer.write_float_value("price", self.price)
        writer.write_uuid_value("priceTypeId", self.price_type_id)
        writer.write_datetime_value("startDate", self.start_date)
        writer.write_uuid_value("taxGroupId", self.tax_group_id)
    

