<?php

namespace Infosoft\InfoSubscription\Generated;

use Infosoft\InfoSubscription\Generated\Billingfrequency\BillingfrequencyRequestBuilder;
use Infosoft\InfoSubscription\Generated\Creditnote\CreditnoteRequestBuilder;
use Infosoft\InfoSubscription\Generated\Invoice\InvoiceRequestBuilder;
use Infosoft\InfoSubscription\Generated\Order\OrderRequestBuilder;
use Infosoft\InfoSubscription\Generated\Organization\OrganizationRequestBuilder;
use Infosoft\InfoSubscription\Generated\Package\PackageRequestBuilder;
use Infosoft\InfoSubscription\Generated\Payment\PaymentRequestBuilder;
use Infosoft\InfoSubscription\Generated\Paymentdemand\PaymentdemandRequestBuilder;
use Infosoft\InfoSubscription\Generated\Product\ProductRequestBuilder;
use Infosoft\InfoSubscription\Generated\Reminder\ReminderRequestBuilder;
use Infosoft\InfoSubscription\Generated\Subscriber\SubscriberRequestBuilder;
use Infosoft\InfoSubscription\Generated\Subscription\SubscriptionRequestBuilder;
use Infosoft\InfoSubscription\Generated\Vippsmobilepay\VippsmobilepayRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Serialization\Form\FormParseNodeFactory;
use Microsoft\Kiota\Serialization\Form\FormSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Multipart\MultipartSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class InfoSubscription extends BaseRequestBuilder 
{
    /**
     * The billingfrequency property
    */
    public function billingfrequency(): BillingfrequencyRequestBuilder {
        return new BillingfrequencyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The creditnote property
    */
    public function creditnote(): CreditnoteRequestBuilder {
        return new CreditnoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The invoice property
    */
    public function invoice(): InvoiceRequestBuilder {
        return new InvoiceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The order property
    */
    public function order(): OrderRequestBuilder {
        return new OrderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The organization property
    */
    public function organization(): OrganizationRequestBuilder {
        return new OrganizationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The package property
    */
    public function package(): PackageRequestBuilder {
        return new PackageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The payment property
    */
    public function payment(): PaymentRequestBuilder {
        return new PaymentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The paymentdemand property
    */
    public function paymentdemand(): PaymentdemandRequestBuilder {
        return new PaymentdemandRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The product property
    */
    public function product(): ProductRequestBuilder {
        return new ProductRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reminder property
    */
    public function reminder(): ReminderRequestBuilder {
        return new ReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscriber property
    */
    public function subscriber(): SubscriberRequestBuilder {
        return new SubscriberRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscription property
    */
    public function subscription(): SubscriptionRequestBuilder {
        return new SubscriptionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The vippsmobilepay property
    */
    public function vippsmobilepay(): VippsmobilepayRequestBuilder {
        return new VippsmobilepayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new InfoSubscription and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(FormSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(MultipartSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(FormParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://api.info-subscription.com');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
