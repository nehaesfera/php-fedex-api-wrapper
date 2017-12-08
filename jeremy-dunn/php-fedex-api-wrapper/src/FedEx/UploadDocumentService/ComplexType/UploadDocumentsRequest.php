<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $OriginCountryCode
 * @property string $DestinationCountryCode
 * @property UploadDocumentDetail[] $Documents

 */
class UploadDocumentsRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadDocumentsRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return $this
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->values['WebAuthenticationDetail'] = $webAuthenticationDetail;
        return $this;
    }

    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * @return $this
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->values['ClientDetail'] = $clientDetail;
        return $this;
    }

    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * Set OriginCountryCode
     *
     * @param string $originCountryCode
     * @return $this
     */
    public function setOriginCountryCode($originCountryCode)
    {
        $this->values['OriginCountryCode'] = $originCountryCode;
        return $this;
    }

    /**
     * Set DestinationCountryCode
     *
     * @param string $destinationCountryCode
     * @return $this
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->values['DestinationCountryCode'] = $destinationCountryCode;
        return $this;
    }

    /**
     * Set Documents
     *
     * @param UploadDocumentDetail[] $documents
     * @return $this
     */
    public function setDocuments(array $documents)
    {
        $this->values['Documents'] = $documents;
        return $this;
    }
}
