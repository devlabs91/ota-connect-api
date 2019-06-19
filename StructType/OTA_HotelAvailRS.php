<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelAvailRS StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns information about hotel properties that meet the requested criteria, indicating whether the requested service, rate, room stay, etc. is available within the date(s) specified. The response message may include Warnings from
 * business processing rules, or Errors if the request did not succeed.
 * @subpackage Structs
 */
class OTA_HotelAvailRS extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\POS_Type
     */
    public $POS;
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
     * The Profiles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ProfilesType
     */
    public $Profiles;
    /**
     * The HotelStays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\HotelStays
     */
    public $HotelStays;
    /**
     * The RoomStays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RoomStays
     */
    public $RoomStays;
    /**
     * The Services
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ServicesType
     */
    public $Services;
    /**
     * The Areas
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AreasType
     */
    public $Areas;
    /**
     * The Criteria
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Criteria
     */
    public $Criteria;
    /**
     * The CurrencyConversions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CurrencyConversions
     */
    public $CurrencyConversions;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Errors
     * @var \OtaInterface\Otaconnect\StructType\ErrorsType
     */
    public $Errors;
    /**
     * The SearchCacheLevel
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $SearchCacheLevel;
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
     * Constructor method for OTA_HotelAvailRS
     * @uses OTA_HotelAvailRS::setPOS()
     * @uses OTA_HotelAvailRS::setSuccess()
     * @uses OTA_HotelAvailRS::setWarnings()
     * @uses OTA_HotelAvailRS::setProfiles()
     * @uses OTA_HotelAvailRS::setHotelStays()
     * @uses OTA_HotelAvailRS::setRoomStays()
     * @uses OTA_HotelAvailRS::setServices()
     * @uses OTA_HotelAvailRS::setAreas()
     * @uses OTA_HotelAvailRS::setCriteria()
     * @uses OTA_HotelAvailRS::setCurrencyConversions()
     * @uses OTA_HotelAvailRS::setTPA_Extensions()
     * @uses OTA_HotelAvailRS::setErrors()
     * @uses OTA_HotelAvailRS::setSearchCacheLevel()
     * @uses OTA_HotelAvailRS::setEchoToken()
     * @uses OTA_HotelAvailRS::setTimeStamp()
     * @uses OTA_HotelAvailRS::setTarget()
     * @uses OTA_HotelAvailRS::setVersion()
     * @uses OTA_HotelAvailRS::setTransactionIdentifier()
     * @uses OTA_HotelAvailRS::setSequenceNmbr()
     * @uses OTA_HotelAvailRS::setTransactionStatusCode()
     * @uses OTA_HotelAvailRS::setRetransmissionIndicator()
     * @uses OTA_HotelAvailRS::setCorrelationID()
     * @param \OtaInterface\Otaconnect\StructType\POS_Type $pOS
     * @param \OtaInterface\Otaconnect\StructType\SuccessType $success
     * @param \OtaInterface\Otaconnect\StructType\WarningsType $warnings
     * @param \OtaInterface\Otaconnect\StructType\ProfilesType $profiles
     * @param \OtaInterface\Otaconnect\StructType\HotelStays $hotelStays
     * @param \OtaInterface\Otaconnect\StructType\RoomStays $roomStays
     * @param \OtaInterface\Otaconnect\StructType\ServicesType $services
     * @param \OtaInterface\Otaconnect\StructType\AreasType $areas
     * @param \OtaInterface\Otaconnect\StructType\Criteria $criteria
     * @param \OtaInterface\Otaconnect\StructType\CurrencyConversions $currencyConversions
     * @param mixed $tPA_Extensions
     * @param \OtaInterface\Otaconnect\StructType\ErrorsType $errors
     * @param string $searchCacheLevel
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
    public function __construct(\OtaInterface\Otaconnect\StructType\POS_Type $pOS = null, \OtaInterface\Otaconnect\StructType\SuccessType $success = null, \OtaInterface\Otaconnect\StructType\WarningsType $warnings = null, \OtaInterface\Otaconnect\StructType\ProfilesType $profiles = null, \OtaInterface\Otaconnect\StructType\HotelStays $hotelStays = null, \OtaInterface\Otaconnect\StructType\RoomStays $roomStays = null, \OtaInterface\Otaconnect\StructType\ServicesType $services = null, \OtaInterface\Otaconnect\StructType\AreasType $areas = null, \OtaInterface\Otaconnect\StructType\Criteria $criteria = null, \OtaInterface\Otaconnect\StructType\CurrencyConversions $currencyConversions = null, $tPA_Extensions = null, \OtaInterface\Otaconnect\StructType\ErrorsType $errors = null, $searchCacheLevel = null, $echoToken = null, $timeStamp = null, $target = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, $correlationID = null)
    {
        $this
            ->setPOS($pOS)
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setProfiles($profiles)
            ->setHotelStays($hotelStays)
            ->setRoomStays($roomStays)
            ->setServices($services)
            ->setAreas($areas)
            ->setCriteria($criteria)
            ->setCurrencyConversions($currencyConversions)
            ->setTPA_Extensions($tPA_Extensions)
            ->setErrors($errors)
            ->setSearchCacheLevel($searchCacheLevel)
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
     */
    public function setPOS(\OtaInterface\Otaconnect\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
     */
    public function setWarnings(\OtaInterface\Otaconnect\StructType\WarningsType $warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
    }
    /**
     * Get Profiles value
     * @return \OtaInterface\Otaconnect\StructType\ProfilesType|null
     */
    public function getProfiles()
    {
        return $this->Profiles;
    }
    /**
     * Set Profiles value
     * @param \OtaInterface\Otaconnect\StructType\ProfilesType $profiles
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
     */
    public function setProfiles(\OtaInterface\Otaconnect\StructType\ProfilesType $profiles = null)
    {
        $this->Profiles = $profiles;
        return $this;
    }
    /**
     * Get HotelStays value
     * @return \OtaInterface\Otaconnect\StructType\HotelStays|null
     */
    public function getHotelStays()
    {
        return $this->HotelStays;
    }
    /**
     * Set HotelStays value
     * @param \OtaInterface\Otaconnect\StructType\HotelStays $hotelStays
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
     */
    public function setHotelStays(\OtaInterface\Otaconnect\StructType\HotelStays $hotelStays = null)
    {
        $this->HotelStays = $hotelStays;
        return $this;
    }
    /**
     * Get RoomStays value
     * @return \OtaInterface\Otaconnect\StructType\RoomStays|null
     */
    public function getRoomStays()
    {
        return $this->RoomStays;
    }
    /**
     * Set RoomStays value
     * @param \OtaInterface\Otaconnect\StructType\RoomStays $roomStays
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
     */
    public function setRoomStays(\OtaInterface\Otaconnect\StructType\RoomStays $roomStays = null)
    {
        $this->RoomStays = $roomStays;
        return $this;
    }
    /**
     * Get Services value
     * @return \OtaInterface\Otaconnect\StructType\ServicesType|null
     */
    public function getServices()
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param \OtaInterface\Otaconnect\StructType\ServicesType $services
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
     */
    public function setServices(\OtaInterface\Otaconnect\StructType\ServicesType $services = null)
    {
        $this->Services = $services;
        return $this;
    }
    /**
     * Get Areas value
     * @return \OtaInterface\Otaconnect\StructType\AreasType|null
     */
    public function getAreas()
    {
        return $this->Areas;
    }
    /**
     * Set Areas value
     * @param \OtaInterface\Otaconnect\StructType\AreasType $areas
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
     */
    public function setAreas(\OtaInterface\Otaconnect\StructType\AreasType $areas = null)
    {
        $this->Areas = $areas;
        return $this;
    }
    /**
     * Get Criteria value
     * @return \OtaInterface\Otaconnect\StructType\Criteria|null
     */
    public function getCriteria()
    {
        return $this->Criteria;
    }
    /**
     * Set Criteria value
     * @param \OtaInterface\Otaconnect\StructType\Criteria $criteria
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
     */
    public function setCriteria(\OtaInterface\Otaconnect\StructType\Criteria $criteria = null)
    {
        $this->Criteria = $criteria;
        return $this;
    }
    /**
     * Get CurrencyConversions value
     * @return \OtaInterface\Otaconnect\StructType\CurrencyConversions|null
     */
    public function getCurrencyConversions()
    {
        return $this->CurrencyConversions;
    }
    /**
     * Set CurrencyConversions value
     * @param \OtaInterface\Otaconnect\StructType\CurrencyConversions $currencyConversions
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
     */
    public function setCurrencyConversions(\OtaInterface\Otaconnect\StructType\CurrencyConversions $currencyConversions = null)
    {
        $this->CurrencyConversions = $currencyConversions;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
     */
    public function setErrors(\OtaInterface\Otaconnect\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get SearchCacheLevel value
     * @return string|null
     */
    public function getSearchCacheLevel()
    {
        return $this->SearchCacheLevel;
    }
    /**
     * Set SearchCacheLevel value
     * @param string $searchCacheLevel
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
     */
    public function setSearchCacheLevel($searchCacheLevel = null)
    {
        // validation for constraint: string
        if (!is_null($searchCacheLevel) && !is_string($searchCacheLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchCacheLevel)), __LINE__);
        }
        $this->SearchCacheLevel = $searchCacheLevel;
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS
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
