<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelResNotifRS StructType
 * Meta informations extracted from the WSDL
 * - documentation: This message returns acknowledgement that the reservation has been successfully received, or includes warnings from business processing rules or errors if the request did not succeed. It may optionally include the updated reservation
 * data.
 * @subpackage Structs
 */
class OTA_HotelResNotifRS extends AbstractStructBase
{
    /**
     * The Success
     * @var \OtaInterface\Otaconnect\StructType\SuccessType
     */
    public $Success;
    /**
     * The Warnings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\WarningsType
     */
    public $Warnings;
    /**
     * The HotelReservations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\HotelReservationsType
     */
    public $HotelReservations;
    /**
     * The Errors
     * @var \OtaInterface\Otaconnect\StructType\ErrorsType
     */
    public $Errors;
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\POS_Type
     */
    public $POS;
    /**
     * The ResResponseType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ResResponseType;
    /**
     * The EchoToken
     * @var string
     */
    public $EchoToken;
    /**
     * The TimeStamp
     * @var string
     */
    public $TimeStamp;
    /**
     * The Target
     * @var string
     */
    public $Target;
    /**
     * The Version
     * @var float
     */
    public $Version;
    /**
     * The TransactionIdentifier
     * @var string
     */
    public $TransactionIdentifier;
    /**
     * The SequenceNmbr
     * @var int
     */
    public $SequenceNmbr;
    /**
     * The TransactionStatusCode
     * @var string
     */
    public $TransactionStatusCode;
    /**
     * The RetransmissionIndicator
     * @var bool
     */
    public $RetransmissionIndicator;
    /**
     * The CorrelationID
     * @var string
     */
    public $CorrelationID;
    /**
     * Constructor method for OTA_HotelResNotifRS
     * @uses OTA_HotelResNotifRS::setSuccess()
     * @uses OTA_HotelResNotifRS::setWarnings()
     * @uses OTA_HotelResNotifRS::setHotelReservations()
     * @uses OTA_HotelResNotifRS::setErrors()
     * @uses OTA_HotelResNotifRS::setPOS()
     * @uses OTA_HotelResNotifRS::setResResponseType()
     * @uses OTA_HotelResNotifRS::setEchoToken()
     * @uses OTA_HotelResNotifRS::setTimeStamp()
     * @uses OTA_HotelResNotifRS::setTarget()
     * @uses OTA_HotelResNotifRS::setVersion()
     * @uses OTA_HotelResNotifRS::setTransactionIdentifier()
     * @uses OTA_HotelResNotifRS::setSequenceNmbr()
     * @uses OTA_HotelResNotifRS::setTransactionStatusCode()
     * @uses OTA_HotelResNotifRS::setRetransmissionIndicator()
     * @uses OTA_HotelResNotifRS::setCorrelationID()
     * @param \OtaInterface\Otaconnect\StructType\SuccessType $success
     * @param \OtaInterface\Otaconnect\StructType\WarningsType $warnings
     * @param \OtaInterface\Otaconnect\StructType\HotelReservationsType $hotelReservations
     * @param \OtaInterface\Otaconnect\StructType\ErrorsType $errors
     * @param \OtaInterface\Otaconnect\StructType\POS_Type $pOS
     * @param string $resResponseType
     * @param string $echoToken
     * @param string $timeStamp
     * @param string $target
     * @param float $version
     * @param string $transactionIdentifier
     * @param int $sequenceNmbr
     * @param string $transactionStatusCode
     * @param bool $retransmissionIndicator
     * @param string $correlationID
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\SuccessType $success = null, \OtaInterface\Otaconnect\StructType\WarningsType $warnings = null, \OtaInterface\Otaconnect\StructType\HotelReservationsType $hotelReservations = null, \OtaInterface\Otaconnect\StructType\ErrorsType $errors = null, \OtaInterface\Otaconnect\StructType\POS_Type $pOS = null, $resResponseType = null, $echoToken = null, $timeStamp = null, $target = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, $correlationID = null)
    {
        $this
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setHotelReservations($hotelReservations)
            ->setErrors($errors)
            ->setPOS($pOS)
            ->setResResponseType($resResponseType)
            ->setEchoToken($echoToken)
            ->setTimeStamp($timeStamp)
            ->setTarget($target)
            ->setVersion($version)
            ->setTransactionIdentifier($transactionIdentifier)
            ->setSequenceNmbr($sequenceNmbr)
            ->setTransactionStatusCode($transactionStatusCode)
            ->setRetransmissionIndicator($retransmissionIndicator)
            ->setCorrelationID($correlationID);
    }
    /**
     * Get Success value
     * @return \OtaInterface\Otaconnect\StructType\SuccessType|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param \OtaInterface\Otaconnect\StructType\SuccessType $success
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setSuccess(\OtaInterface\Otaconnect\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get Warnings value
     * @return \OtaInterface\Otaconnect\StructType\WarningsType|null
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }
    /**
     * Set Warnings value
     * @param \OtaInterface\Otaconnect\StructType\WarningsType $warnings
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setWarnings(\OtaInterface\Otaconnect\StructType\WarningsType $warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
    }
    /**
     * Get HotelReservations value
     * @return \OtaInterface\Otaconnect\StructType\HotelReservationsType|null
     */
    public function getHotelReservations()
    {
        return $this->HotelReservations;
    }
    /**
     * Set HotelReservations value
     * @param \OtaInterface\Otaconnect\StructType\HotelReservationsType $hotelReservations
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setHotelReservations(\OtaInterface\Otaconnect\StructType\HotelReservationsType $hotelReservations = null)
    {
        $this->HotelReservations = $hotelReservations;
        return $this;
    }
    /**
     * Get Errors value
     * @return \OtaInterface\Otaconnect\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \OtaInterface\Otaconnect\StructType\ErrorsType $errors
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setErrors(\OtaInterface\Otaconnect\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get POS value
     * @return \OtaInterface\Otaconnect\StructType\POS_Type|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \OtaInterface\Otaconnect\StructType\POS_Type $pOS
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setPOS(\OtaInterface\Otaconnect\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get ResResponseType value
     * @return string|null
     */
    public function getResResponseType()
    {
        return $this->ResResponseType;
    }
    /**
     * Set ResResponseType value
     * @uses \OtaInterface\Otaconnect\EnumType\TransactionStatusType::valueIsValid()
     * @uses \OtaInterface\Otaconnect\EnumType\TransactionStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $resResponseType
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setResResponseType($resResponseType = null)
    {
        // validation for constraint: enumeration
        if (!\OtaInterface\Otaconnect\EnumType\TransactionStatusType::valueIsValid($resResponseType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $resResponseType, implode(', ', \OtaInterface\Otaconnect\EnumType\TransactionStatusType::getValidValues())), __LINE__);
        }
        $this->ResResponseType = $resResponseType;
        return $this;
    }
    /**
     * Get EchoToken value
     * @return string|null
     */
    public function getEchoToken()
    {
        return $this->EchoToken;
    }
    /**
     * Set EchoToken value
     * @param string $echoToken
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setEchoToken($echoToken = null)
    {
        // validation for constraint: string
        if (!is_null($echoToken) && !is_string($echoToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($echoToken)), __LINE__);
        }
        $this->EchoToken = $echoToken;
        return $this;
    }
    /**
     * Get TimeStamp value
     * @return string|null
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param string $timeStamp
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setTimeStamp($timeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        return $this;
    }
    /**
     * Get Target value
     * @return string|null
     */
    public function getTarget()
    {
        return $this->Target;
    }
    /**
     * Set Target value
     * @param string $target
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setTarget($target = null)
    {
        // validation for constraint: string
        if (!is_null($target) && !is_string($target)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($target)), __LINE__);
        }
        $this->Target = $target;
        return $this;
    }
    /**
     * Get Version value
     * @return float|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param float $version
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setVersion($version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionIdentifier value
     * @return string|null
     */
    public function getTransactionIdentifier()
    {
        return $this->TransactionIdentifier;
    }
    /**
     * Set TransactionIdentifier value
     * @param string $transactionIdentifier
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setTransactionIdentifier($transactionIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($transactionIdentifier) && !is_string($transactionIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionIdentifier)), __LINE__);
        }
        $this->TransactionIdentifier = $transactionIdentifier;
        return $this;
    }
    /**
     * Get SequenceNmbr value
     * @return int|null
     */
    public function getSequenceNmbr()
    {
        return $this->SequenceNmbr;
    }
    /**
     * Set SequenceNmbr value
     * @param int $sequenceNmbr
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setSequenceNmbr($sequenceNmbr = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNmbr) && !is_numeric($sequenceNmbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNmbr)), __LINE__);
        }
        $this->SequenceNmbr = $sequenceNmbr;
        return $this;
    }
    /**
     * Get TransactionStatusCode value
     * @return string|null
     */
    public function getTransactionStatusCode()
    {
        return $this->TransactionStatusCode;
    }
    /**
     * Set TransactionStatusCode value
     * @param string $transactionStatusCode
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setTransactionStatusCode($transactionStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($transactionStatusCode) && !is_string($transactionStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionStatusCode)), __LINE__);
        }
        $this->TransactionStatusCode = $transactionStatusCode;
        return $this;
    }
    /**
     * Get RetransmissionIndicator value
     * @return bool|null
     */
    public function getRetransmissionIndicator()
    {
        return $this->RetransmissionIndicator;
    }
    /**
     * Set RetransmissionIndicator value
     * @param bool $retransmissionIndicator
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setRetransmissionIndicator($retransmissionIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($retransmissionIndicator) && !is_bool($retransmissionIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($retransmissionIndicator)), __LINE__);
        }
        $this->RetransmissionIndicator = $retransmissionIndicator;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function setCorrelationID($correlationID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
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
