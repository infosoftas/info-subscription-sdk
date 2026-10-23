<?php

namespace Infosoft\InfoSubscription\Generated\Payment;

use Infosoft\InfoSubscription\Generated\Models\Infosoft\S4\Payments\Contracts\PaymentState;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PaymentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PaymentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PaymentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PaymentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PaymentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PaymentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PaymentRequestBuilderGetQueryParameters.
     * @param string|null $id If set will be used to filter by the Id - this is equivalent to getting a specific payment. Note settings this will still return a collection of payments but just with one instance.
     * @param string|null $organizationId If set will be used to filter the Organization of the payment.
     * @param PaymentState|null $state If set will be used to filter on the state of the payment.
     * @param string|null $subscriberId If set will be used to filter the Subscriber of the payment. Note some payments may not have a subscriber on them and will not be included.
     * @return PaymentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $id = null, ?string $organizationId = null, ?PaymentState $state = null, ?string $subscriberId = null): PaymentRequestBuilderGetQueryParameters {
        return new PaymentRequestBuilderGetQueryParameters($id, $organizationId, $state, $subscriberId);
    }

}
