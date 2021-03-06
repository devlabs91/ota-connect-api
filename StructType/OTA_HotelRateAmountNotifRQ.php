<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelRateAmountNotifRQ StructType
 * Meta informations extracted from the WSDL
 * - documentation: This message is used to provide a notification of a new rate plan created for a hotel, and to synchronize the rate plan between systems for booking. | This element defines standard attributes that appear on the root element for all
 * OpenTravel Messages.
 * @subpackage Structs
 */
class OTA_HotelRateAmountNotifRQ extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - documentation: POS provides a mechanisim to indicate the source of the message.
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\POS_Type
     */
    public $POS;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier element allows the trading partners to uniquely identify each RateAmountNotifRQ, (i.e. the entire message) for transaction tracability.
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\UniqueID_Type
     */
    public $UniqueID;
    /**
     * The RateAmountMessages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RateAmountMessages
     */
    public $RateAmountMessages;
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
     * Constructor method for OTA_HotelRateAmountNotifRQ
     * @uses OTA_HotelRateAmountNotifRQ::setPOS()
     * @uses OTA_HotelRateAmountNotifRQ::setUniqueID()
     * @uses OTA_HotelRateAmountNotifRQ::setRateAmountMessages()
     * @uses OTA_HotelRateAmountNotifRQ::setEchoToken()
     * @uses OTA_HotelRateAmountNotifRQ::setTimeStamp()
     * @uses OTA_HotelRateAmountNotifRQ::setTarget()
     * @uses OTA_HotelRateAmountNotifRQ::setVersion()
     * @uses OTA_HotelRateAmountNotifRQ::setTransactionIdentifier()
     * @uses OTA_HotelRateAmountNotifRQ::setSequenceNmbr()
     * @uses OTA_HotelRateAmountNotifRQ::setTransactionStatusCode()
     * @uses OTA_HotelRateAmountNotifRQ::setRetransmissionIndicator()
     * @uses OTA_HotelRateAmountNotifRQ::setCorrelationID()
     * @param \OtaInterface\Otaconnect\StructType\POS_Type $pOS
     * @param \OtaInterface\Otaconnect\StructType\UniqueID_Type $uniqueID
     * @param \OtaInterface\Otaconnect\StructType\RateAmountMessages $rateAmountMessages
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
    public function __construct(\OtaInterface\Otaconnect\StructType\POS_Type $pOS = null, \OtaInterface\Otaconnect\StructType\UniqueID_Type $uniqueID = null, \OtaInterface\Otaconnect\StructType\RateAmountMessages $rateAmountMessages = null, $echoToken = null, $timeStamp = null, $target = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, $correlationID = null)
    {
        $this
            ->setPOS($pOS)
            ->setUniqueID($uniqueID)
            ->setRateAmountMessages($rateAmountMessages)
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setPOS(\OtaInterface\Otaconnect\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return \OtaInterface\Otaconnect\StructType\UniqueID_Type|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param \OtaInterface\Otaconnect\StructType\UniqueID_Type $uniqueID
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setUniqueID(\OtaInterface\Otaconnect\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get RateAmountMessages value
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessages|null
     */
    public function getRateAmountMessages()
    {
        return $this->RateAmountMessages;
    }
    /**
     * Set RateAmountMessages value
     * @param \OtaInterface\Otaconnect\StructType\RateAmountMessages $rateAmountMessages
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setRateAmountMessages(\OtaInterface\Otaconnect\StructType\RateAmountMessages $rateAmountMessages = null)
    {
        $this->RateAmountMessages = $rateAmountMessages;
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ
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
