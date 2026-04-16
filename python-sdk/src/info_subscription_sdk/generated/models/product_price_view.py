from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

@dataclass
class ProductPriceView(Parsable):
    """
    A product price view.
    """
    # Gets or sets the billing frequency.
    billing_frequency_id: Optional[int] = None
    # Gets or sets the currency.
    currency: Optional[str] = None
    # Gets or sets the expiry date.
    expiry_date: Optional[datetime.datetime] = None
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # Gets or sets the number of editions.
    number_of_editions: Optional[int] = None
    # Gets or sets the price.
    price: Optional[float] = None
    # Gets or sets the identifier of the pricetype.
    price_type_id: Optional[UUID] = None
    # Gets or sets the identifier of the product.
    product_id: Optional[UUID] = None
    # Gets or sets the start date.
    start_date: Optional[datetime.datetime] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> ProductPriceView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: ProductPriceView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return ProductPriceView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "billingFrequencyId": lambda n : setattr(self, 'billing_frequency_id', n.get_int_value()),
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "expiryDate": lambda n : setattr(self, 'expiry_date', n.get_datetime_value()),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "numberOfEditions": lambda n : setattr(self, 'number_of_editions', n.get_int_value()),
            "price": lambda n : setattr(self, 'price', n.get_float_value()),
            "priceTypeId": lambda n : setattr(self, 'price_type_id', n.get_uuid_value()),
            "productId": lambda n : setattr(self, 'product_id', n.get_uuid_value()),
            "startDate": lambda n : setattr(self, 'start_date', n.get_datetime_value()),
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
        writer.write_str_value("currency", self.currency)
        writer.write_datetime_value("expiryDate", self.expiry_date)
        writer.write_uuid_value("id", self.id)
        writer.write_int_value("numberOfEditions", self.number_of_editions)
        writer.write_float_value("price", self.price)
        writer.write_uuid_value("priceTypeId", self.price_type_id)
        writer.write_uuid_value("productId", self.product_id)
        writer.write_datetime_value("startDate", self.start_date)
    

