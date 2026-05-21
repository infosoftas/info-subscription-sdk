from __future__ import annotations
from collections.abc import Callable
from kiota_abstractions.api_client_builder import enable_backing_store_for_serialization_writer_factory, register_default_deserializer, register_default_serializer
from kiota_abstractions.base_request_builder import BaseRequestBuilder
from kiota_abstractions.get_path_parameters import get_path_parameters
from kiota_abstractions.request_adapter import RequestAdapter
from kiota_abstractions.serialization import ParseNodeFactoryRegistry, SerializationWriterFactoryRegistry
from kiota_serialization_form.form_parse_node_factory import FormParseNodeFactory
from kiota_serialization_form.form_serialization_writer_factory import FormSerializationWriterFactory
from kiota_serialization_json.json_parse_node_factory import JsonParseNodeFactory
from kiota_serialization_json.json_serialization_writer_factory import JsonSerializationWriterFactory
from kiota_serialization_multipart.multipart_serialization_writer_factory import MultipartSerializationWriterFactory
from kiota_serialization_text.text_parse_node_factory import TextParseNodeFactory
from kiota_serialization_text.text_serialization_writer_factory import TextSerializationWriterFactory
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .billingfrequency.billingfrequency_request_builder import BillingfrequencyRequestBuilder
    from .creditnote.creditnote_request_builder import CreditnoteRequestBuilder
    from .invoice.invoice_request_builder import InvoiceRequestBuilder
    from .order.order_request_builder import OrderRequestBuilder
    from .organization.organization_request_builder import OrganizationRequestBuilder
    from .package.package_request_builder import PackageRequestBuilder
    from .payment.payment_request_builder import PaymentRequestBuilder
    from .paymentdemand.paymentdemand_request_builder import PaymentdemandRequestBuilder
    from .product.product_request_builder import ProductRequestBuilder
    from .reminder.reminder_request_builder import ReminderRequestBuilder
    from .subscriber.subscriber_request_builder import SubscriberRequestBuilder
    from .subscription.subscription_request_builder import SubscriptionRequestBuilder
    from .vippsmobilepay.vippsmobilepay_request_builder import VippsmobilepayRequestBuilder

class InfoSubscription(BaseRequestBuilder):
    """
    The main entry point of the SDK, exposes the configuration and the fluent API.
    """
    def __init__(self,request_adapter: RequestAdapter) -> None:
        """
        Instantiates a new InfoSubscription and sets the default values.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        if request_adapter is None:
            raise TypeError("request_adapter cannot be null.")
        super().__init__(request_adapter, "{+baseurl}", None)
        register_default_serializer(JsonSerializationWriterFactory)
        register_default_serializer(TextSerializationWriterFactory)
        register_default_serializer(FormSerializationWriterFactory)
        register_default_serializer(MultipartSerializationWriterFactory)
        register_default_deserializer(JsonParseNodeFactory)
        register_default_deserializer(TextParseNodeFactory)
        register_default_deserializer(FormParseNodeFactory)
        if not self.request_adapter.base_url:
            self.request_adapter.base_url = "https://api.info-subscription.com"
        self.path_parameters["base_url"] = self.request_adapter.base_url
    
    @property
    def billingfrequency(self) -> BillingfrequencyRequestBuilder:
        """
        The billingfrequency property
        """
        from .billingfrequency.billingfrequency_request_builder import BillingfrequencyRequestBuilder

        return BillingfrequencyRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def creditnote(self) -> CreditnoteRequestBuilder:
        """
        The creditnote property
        """
        from .creditnote.creditnote_request_builder import CreditnoteRequestBuilder

        return CreditnoteRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def invoice(self) -> InvoiceRequestBuilder:
        """
        The invoice property
        """
        from .invoice.invoice_request_builder import InvoiceRequestBuilder

        return InvoiceRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def order(self) -> OrderRequestBuilder:
        """
        The order property
        """
        from .order.order_request_builder import OrderRequestBuilder

        return OrderRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def organization(self) -> OrganizationRequestBuilder:
        """
        The organization property
        """
        from .organization.organization_request_builder import OrganizationRequestBuilder

        return OrganizationRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def package(self) -> PackageRequestBuilder:
        """
        The package property
        """
        from .package.package_request_builder import PackageRequestBuilder

        return PackageRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def payment(self) -> PaymentRequestBuilder:
        """
        The payment property
        """
        from .payment.payment_request_builder import PaymentRequestBuilder

        return PaymentRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def paymentdemand(self) -> PaymentdemandRequestBuilder:
        """
        The paymentdemand property
        """
        from .paymentdemand.paymentdemand_request_builder import PaymentdemandRequestBuilder

        return PaymentdemandRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def product(self) -> ProductRequestBuilder:
        """
        The product property
        """
        from .product.product_request_builder import ProductRequestBuilder

        return ProductRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def reminder(self) -> ReminderRequestBuilder:
        """
        The reminder property
        """
        from .reminder.reminder_request_builder import ReminderRequestBuilder

        return ReminderRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def subscriber(self) -> SubscriberRequestBuilder:
        """
        The subscriber property
        """
        from .subscriber.subscriber_request_builder import SubscriberRequestBuilder

        return SubscriberRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def subscription(self) -> SubscriptionRequestBuilder:
        """
        The subscription property
        """
        from .subscription.subscription_request_builder import SubscriptionRequestBuilder

        return SubscriptionRequestBuilder(self.request_adapter, self.path_parameters)
    
    @property
    def vippsmobilepay(self) -> VippsmobilepayRequestBuilder:
        """
        The vippsmobilepay property
        """
        from .vippsmobilepay.vippsmobilepay_request_builder import VippsmobilepayRequestBuilder

        return VippsmobilepayRequestBuilder(self.request_adapter, self.path_parameters)
    

