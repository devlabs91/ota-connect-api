<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdvResTicketingType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container used to hold information regarding advance reservation and/or advance ticketing.
 * @subpackage Structs
 */
class AdvResTicketingType extends AbstractStructBase
{
    /**
     * The AdvReservation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AdvReservation
     */
    public $AdvReservation;
    /**
     * The AdvTicketing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AdvTicketing
     */
    public $AdvTicketing;
    /**
     * The AdvResInd
     * Meta informations extracted from the WSDL
     * - documentation: Indicator for identifying whether or not advance reservation restrictions are involved in the request or response.
     * @var bool
     */
    public $AdvResInd;
    /**
     * The AdvTicketingInd
     * Meta informations extracted from the WSDL
     * - documentation: Indicator for identifying whether or not advance ticketing restrictions are involved in the request or response.
     * - use: optional
     * @var bool
     */
    public $AdvTicketingInd;
    /**
     * The RequestedTicketingDate
     * Meta informations extracted from the WSDL
     * - documentation: The date a traveller wishes to ticket their reservation.
     * - use: optional
     * @var string
     */
    public $RequestedTicketingDate;
    /**
     * Constructor method for AdvResTicketingType
     * @uses AdvResTicketingType::setAdvReservation()
     * @uses AdvResTicketingType::setAdvTicketing()
     * @uses AdvResTicketingType::setAdvResInd()
     * @uses AdvResTicketingType::setAdvTicketingInd()
     * @uses AdvResTicketingType::setRequestedTicketingDate()
     * @param \OtaInterface\Otaconnect\StructType\AdvReservation $advReservation
     * @param \OtaInterface\Otaconnect\StructType\AdvTicketing $advTicketing
     * @param bool $advResInd
     * @param bool $advTicketingInd
     * @param string $requestedTicketingDate
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\AdvReservation $advReservation = null, \OtaInterface\Otaconnect\StructType\AdvTicketing $advTicketing = null, $advResInd = null, $advTicketingInd = null, $requestedTicketingDate = null)
    {
        $this
            ->setAdvReservation($advReservation)
            ->setAdvTicketing($advTicketing)
            ->setAdvResInd($advResInd)
            ->setAdvTicketingInd($advTicketingInd)
            ->setRequestedTicketingDate($requestedTicketingDate);
    }
    /**
     * Get AdvReservation value
     * @return \OtaInterface\Otaconnect\StructType\AdvReservation|null
     */
    public function getAdvReservation()
    {
        return $this->AdvReservation;
    }
    /**
     * Set AdvReservation value
     * @param \OtaInterface\Otaconnect\StructType\AdvReservation $advReservation
     * @return \OtaInterface\Otaconnect\StructType\AdvResTicketingType
     */
    public function setAdvReservation(\OtaInterface\Otaconnect\StructType\AdvReservation $advReservation = null)
    {
        $this->AdvReservation = $advReservation;
        return $this;
    }
    /**
     * Get AdvTicketing value
     * @return \OtaInterface\Otaconnect\StructType\AdvTicketing|null
     */
    public function getAdvTicketing()
    {
        return $this->AdvTicketing;
    }
    /**
     * Set AdvTicketing value
     * @param \OtaInterface\Otaconnect\StructType\AdvTicketing $advTicketing
     * @return \OtaInterface\Otaconnect\StructType\AdvResTicketingType
     */
    public function setAdvTicketing(\OtaInterface\Otaconnect\StructType\AdvTicketing $advTicketing = null)
    {
        $this->AdvTicketing = $advTicketing;
        return $this;
    }
    /**
     * Get AdvResInd value
     * @return bool|null
     */
    public function getAdvResInd()
    {
        return $this->AdvResInd;
    }
    /**
     * Set AdvResInd value
     * @param bool $advResInd
     * @return \OtaInterface\Otaconnect\StructType\AdvResTicketingType
     */
    public function setAdvResInd($advResInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($advResInd) && !is_bool($advResInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($advResInd)), __LINE__);
        }
        $this->AdvResInd = $advResInd;
        return $this;
    }
    /**
     * Get AdvTicketingInd value
     * @return bool|null
     */
    public function getAdvTicketingInd()
    {
        return $this->AdvTicketingInd;
    }
    /**
     * Set AdvTicketingInd value
     * @param bool $advTicketingInd
     * @return \OtaInterface\Otaconnect\StructType\AdvResTicketingType
     */
    public function setAdvTicketingInd($advTicketingInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($advTicketingInd) && !is_bool($advTicketingInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($advTicketingInd)), __LINE__);
        }
        $this->AdvTicketingInd = $advTicketingInd;
        return $this;
    }
    /**
     * Get RequestedTicketingDate value
     * @return string|null
     */
    public function getRequestedTicketingDate()
    {
        return $this->RequestedTicketingDate;
    }
    /**
     * Set RequestedTicketingDate value
     * @param string $requestedTicketingDate
     * @return \OtaInterface\Otaconnect\StructType\AdvResTicketingType
     */
    public function setRequestedTicketingDate($requestedTicketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($requestedTicketingDate) && !is_string($requestedTicketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestedTicketingDate)), __LINE__);
        }
        $this->RequestedTicketingDate = $requestedTicketingDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AdvResTicketingType
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
