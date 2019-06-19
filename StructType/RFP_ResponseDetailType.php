<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RFP_ResponseDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides an area to send comments regarding the response. | This is used to send information regarding when and how the detailed response will be delivered.
 * @subpackage Structs
 */
class RFP_ResponseDetailType extends AbstractStructBase
{
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Comments
     */
    public $Comments;
    /**
     * The DetailIncludedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: This is an indicator that denotes whether the message contains detailed information; if false this indicates the message is an acknowledgement only, if true this indicates that detailed information is included in this message.
     * - use: optional
     * @var bool
     */
    public $DetailIncludedIndicator;
    /**
     * The DeclineIndicator
     * Meta informations extracted from the WSDL
     * - documentation: If true, the supplier cannot accomodate the request and will not send detailed response information. If false, the supplier plans to respond.
     * - use: optional
     * @var bool
     */
    public $DeclineIndicator;
    /**
     * The DeclineReasonCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the reason the request is being declined. Refer to OpenTravel Code List Decline Reason (DEC).
     * - use: optional
     * @var string
     */
    public $DeclineReasonCode;
    /**
     * The CodeDetail
     * Meta informations extracted from the WSDL
     * - documentation: This is intended for use as a customized DeclineReasonCode. This may be used when "other" is stated as the DeclineReasonCode or to give additional information with other DeclineReasonCodes.
     * - use: optional
     * @var string
     */
    public $CodeDetail;
    /**
     * Constructor method for RFP_ResponseDetailType
     * @uses RFP_ResponseDetailType::setComments()
     * @uses RFP_ResponseDetailType::setDetailIncludedIndicator()
     * @uses RFP_ResponseDetailType::setDeclineIndicator()
     * @uses RFP_ResponseDetailType::setDeclineReasonCode()
     * @uses RFP_ResponseDetailType::setCodeDetail()
     * @param \OtaInterface\Otaconnect\StructType\Comments $comments
     * @param bool $detailIncludedIndicator
     * @param bool $declineIndicator
     * @param string $declineReasonCode
     * @param string $codeDetail
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\Comments $comments = null, $detailIncludedIndicator = null, $declineIndicator = null, $declineReasonCode = null, $codeDetail = null)
    {
        $this
            ->setComments($comments)
            ->setDetailIncludedIndicator($detailIncludedIndicator)
            ->setDeclineIndicator($declineIndicator)
            ->setDeclineReasonCode($declineReasonCode)
            ->setCodeDetail($codeDetail);
    }
    /**
     * Get Comments value
     * @return \OtaInterface\Otaconnect\StructType\Comments|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param \OtaInterface\Otaconnect\StructType\Comments $comments
     * @return \OtaInterface\Otaconnect\StructType\RFP_ResponseDetailType
     */
    public function setComments(\OtaInterface\Otaconnect\StructType\Comments $comments = null)
    {
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Get DetailIncludedIndicator value
     * @return bool|null
     */
    public function getDetailIncludedIndicator()
    {
        return $this->DetailIncludedIndicator;
    }
    /**
     * Set DetailIncludedIndicator value
     * @param bool $detailIncludedIndicator
     * @return \OtaInterface\Otaconnect\StructType\RFP_ResponseDetailType
     */
    public function setDetailIncludedIndicator($detailIncludedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($detailIncludedIndicator) && !is_bool($detailIncludedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($detailIncludedIndicator)), __LINE__);
        }
        $this->DetailIncludedIndicator = $detailIncludedIndicator;
        return $this;
    }
    /**
     * Get DeclineIndicator value
     * @return bool|null
     */
    public function getDeclineIndicator()
    {
        return $this->DeclineIndicator;
    }
    /**
     * Set DeclineIndicator value
     * @param bool $declineIndicator
     * @return \OtaInterface\Otaconnect\StructType\RFP_ResponseDetailType
     */
    public function setDeclineIndicator($declineIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($declineIndicator) && !is_bool($declineIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($declineIndicator)), __LINE__);
        }
        $this->DeclineIndicator = $declineIndicator;
        return $this;
    }
    /**
     * Get DeclineReasonCode value
     * @return string|null
     */
    public function getDeclineReasonCode()
    {
        return $this->DeclineReasonCode;
    }
    /**
     * Set DeclineReasonCode value
     * @param string $declineReasonCode
     * @return \OtaInterface\Otaconnect\StructType\RFP_ResponseDetailType
     */
    public function setDeclineReasonCode($declineReasonCode = null)
    {
        // validation for constraint: string
        if (!is_null($declineReasonCode) && !is_string($declineReasonCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($declineReasonCode)), __LINE__);
        }
        $this->DeclineReasonCode = $declineReasonCode;
        return $this;
    }
    /**
     * Get CodeDetail value
     * @return string|null
     */
    public function getCodeDetail()
    {
        return $this->CodeDetail;
    }
    /**
     * Set CodeDetail value
     * @param string $codeDetail
     * @return \OtaInterface\Otaconnect\StructType\RFP_ResponseDetailType
     */
    public function setCodeDetail($codeDetail = null)
    {
        // validation for constraint: string
        if (!is_null($codeDetail) && !is_string($codeDetail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeDetail)), __LINE__);
        }
        $this->CodeDetail = $codeDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RFP_ResponseDetailType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
