<?php

namespace Infosoft\InfoSubscription\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Prpoerties returned for a successful network lookup response.
*/
class DocumentNetworkLookupResponse implements Parsable 
{
    /**
     * @var array<string>|null $documentTypes A list of PEPPOL related document types aggregated across networks.
    */
    private ?array $documentTypes = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DocumentNetworkLookupResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DocumentNetworkLookupResponse {
        return new DocumentNetworkLookupResponse();
    }

    /**
     * Gets the documentTypes property value. A list of PEPPOL related document types aggregated across networks.
     * @return array<string>|null
    */
    public function getDocumentTypes(): ?array {
        return $this->documentTypes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'documentTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDocumentTypes($val);
            },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('documentTypes', $this->getDocumentTypes());
    }

    /**
     * Sets the documentTypes property value. A list of PEPPOL related document types aggregated across networks.
     * @param array<string>|null $value Value to set for the documentTypes property.
    */
    public function setDocumentTypes(?array $value): void {
        $this->documentTypes = $value;
    }

}
