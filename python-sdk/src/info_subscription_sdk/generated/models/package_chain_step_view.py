from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .template_package_view import TemplatePackageView

@dataclass
class PackageChainStepView(Parsable):
    """
    A package chain step view.
    """
    # Gets or sets the identifier.
    id: Optional[UUID] = None
    # A template package view.
    next_package: Optional[TemplatePackageView] = None
    # Gets or sets the identifier of the next package.
    next_package_id: Optional[UUID] = None
    # Gets or sets a value indicating whether the retain.
    retain: Optional[bool] = None
    # Gets or sets the amount to increment by.
    step: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PackageChainStepView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PackageChainStepView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PackageChainStepView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .template_package_view import TemplatePackageView

        from .template_package_view import TemplatePackageView

        fields: dict[str, Callable[[Any], None]] = {
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "nextPackage": lambda n : setattr(self, 'next_package', n.get_object_value(TemplatePackageView)),
            "nextPackageId": lambda n : setattr(self, 'next_package_id', n.get_uuid_value()),
            "retain": lambda n : setattr(self, 'retain', n.get_bool_value()),
            "step": lambda n : setattr(self, 'step', n.get_int_value()),
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
        writer.write_uuid_value("id", self.id)
        writer.write_object_value("nextPackage", self.next_package)
        writer.write_uuid_value("nextPackageId", self.next_package_id)
        writer.write_bool_value("retain", self.retain)
        writer.write_int_value("step", self.step)
    

