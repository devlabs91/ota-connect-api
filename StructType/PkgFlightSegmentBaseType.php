<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgFlightSegmentBaseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Construct for holding a flight segment availability object.
 * @subpackage Structs
 */
class PkgFlightSegmentBaseType extends AbstractStructBase
{
    /**
     * The DepartureAirport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\DepartureAirport
     */
    public $DepartureAirport;
    /**
     * The ArrivalAirport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ArrivalAirport
     */
    public $ArrivalAirport;
    /**
     * The OperatingAirline
     * Meta informations extracted from the WSDL
     * - documentation: The operating airline of the flight if it is a codeshare flight.
     * - minOccurs: 0
     * @var mixed
     */
    public $OperatingAirline;
    /**
     * The Equipment
     * Meta informations extracted from the WSDL
     * - documentation: The type of equipment used for the flight..
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Equipment;
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the date and time of a flight departure.
     * - use: optional
     * @var string
     */
    public $DepartureDateTime;
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the date and time of a flight arrival.
     * - use: optional
     * @var string
     */
    public $ArrivalDateTime;
    /**
     * The StopQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of stops the flight makes
     * - use: optional
     * @var int
     */
    public $StopQuantity;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: (Reference Place Holder) - an index code to identify an instance in a collection of like items. For example, used to assign individual passengers or clients to particular itinerary items.
     * @var string
     */
    public $RPH;
    /**
     * The InfoSource
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify the source of the data being exchanged as determined by trading partners.
     * - use: optional
     * @var string
     */
    public $InfoSource;
    /**
     * Constructor method for PkgFlightSegmentBaseType
     * @uses PkgFlightSegmentBaseType::setDepartureAirport()
     * @uses PkgFlightSegmentBaseType::setArrivalAirport()
     * @uses PkgFlightSegmentBaseType::setOperatingAirline()
     * @uses PkgFlightSegmentBaseType::setEquipment()
     * @uses PkgFlightSegmentBaseType::setDepartureDateTime()
     * @uses PkgFlightSegmentBaseType::setArrivalDateTime()
     * @uses PkgFlightSegmentBaseType::setStopQuantity()
     * @uses PkgFlightSegmentBaseType::setRPH()
     * @uses PkgFlightSegmentBaseType::setInfoSource()
     * @param \OtaInterface\Otaconnect\StructType\DepartureAirport $departureAirport
     * @param \OtaInterface\Otaconnect\StructType\ArrivalAirport $arrivalAirport
     * @param mixed $operatingAirline
     * @param mixed[] $equipment
     * @param string $departureDateTime
     * @param string $arrivalDateTime
     * @param int $stopQuantity
     * @param string $rPH
     * @param string $infoSource
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\DepartureAirport $departureAirport = null, \OtaInterface\Otaconnect\StructType\ArrivalAirport $arrivalAirport = null, $operatingAirline = null, array $equipment = array(), $departureDateTime = null, $arrivalDateTime = null, $stopQuantity = null, $rPH = null, $infoSource = null)
    {
        $this
            ->setDepartureAirport($departureAirport)
            ->setArrivalAirport($arrivalAirport)
            ->setOperatingAirline($operatingAirline)
            ->setEquipment($equipment)
            ->setDepartureDateTime($departureDateTime)
            ->setArrivalDateTime($arrivalDateTime)
            ->setStopQuantity($stopQuantity)
            ->setRPH($rPH)
            ->setInfoSource($infoSource);
    }
    /**
     * Get DepartureAirport value
     * @return \OtaInterface\Otaconnect\StructType\DepartureAirport|null
     */
    public function getDepartureAirport()
    {
        return $this->DepartureAirport;
    }
    /**
     * Set DepartureAirport value
     * @param \OtaInterface\Otaconnect\StructType\DepartureAirport $departureAirport
     * @return \OtaInterface\Otaconnect\StructType\PkgFlightSegmentBaseType
     */
    public function setDepartureAirport(\OtaInterface\Otaconnect\StructType\DepartureAirport $departureAirport = null)
    {
        $this->DepartureAirport = $departureAirport;
        return $this;
    }
    /**
     * Get ArrivalAirport value
     * @return \OtaInterface\Otaconnect\StructType\ArrivalAirport|null
     */
    public function getArrivalAirport()
    {
        return $this->ArrivalAirport;
    }
    /**
     * Set ArrivalAirport value
     * @param \OtaInterface\Otaconnect\StructType\ArrivalAirport $arrivalAirport
     * @return \OtaInterface\Otaconnect\StructType\PkgFlightSegmentBaseType
     */
    public function setArrivalAirport(\OtaInterface\Otaconnect\StructType\ArrivalAirport $arrivalAirport = null)
    {
        $this->ArrivalAirport = $arrivalAirport;
        return $this;
    }
    /**
     * Get OperatingAirline value
     * @return mixed|null
     */
    public function getOperatingAirline()
    {
        return $this->OperatingAirline;
    }
    /**
     * Set OperatingAirline value
     * @param mixed $operatingAirline
     * @return \OtaInterface\Otaconnect\StructType\PkgFlightSegmentBaseType
     */
    public function setOperatingAirline($operatingAirline = null)
    {
        $this->OperatingAirline = $operatingAirline;
        return $this;
    }
    /**
     * Get Equipment value
     * @return mixed[]|null
     */
    public function getEquipment()
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @throws \InvalidArgumentException
     * @param mixed[] $equipment
     * @return \OtaInterface\Otaconnect\StructType\PkgFlightSegmentBaseType
     */
    public function setEquipment(array $equipment = array())
    {
        foreach ($equipment as $pkgFlightSegmentBaseTypeEquipmentItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Equipment property can only contain items of anyType, "%s" given', is_object($pkgFlightSegmentBaseTypeEquipmentItem) ? get_class($pkgFlightSegmentBaseTypeEquipmentItem) : gettype($pkgFlightSegmentBaseTypeEquipmentItem)), __LINE__);
            }
        }
        $this->Equipment = $equipment;
        return $this;
    }
    /**
     * Add item to Equipment value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\PkgFlightSegmentBaseType
     */
    public function addToEquipment($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Equipment property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Equipment[] = $item;
        return $this;
    }
    /**
     * Get DepartureDateTime value
     * @return string|null
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }
    /**
     * Set DepartureDateTime value
     * @param string $departureDateTime
     * @return \OtaInterface\Otaconnect\StructType\PkgFlightSegmentBaseType
     */
    public function setDepartureDateTime($departureDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureDateTime) && !is_string($departureDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDateTime)), __LINE__);
        }
        $this->DepartureDateTime = $departureDateTime;
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return string|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param string $arrivalDateTime
     * @return \OtaInterface\Otaconnect\StructType\PkgFlightSegmentBaseType
     */
    public function setArrivalDateTime($arrivalDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDateTime) && !is_string($arrivalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDateTime)), __LINE__);
        }
        $this->ArrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Get StopQuantity value
     * @return int|null
     */
    public function getStopQuantity()
    {
        return $this->StopQuantity;
    }
    /**
     * Set StopQuantity value
     * @param int $stopQuantity
     * @return \OtaInterface\Otaconnect\StructType\PkgFlightSegmentBaseType
     */
    public function setStopQuantity($stopQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($stopQuantity) && !is_numeric($stopQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($stopQuantity)), __LINE__);
        }
        $this->StopQuantity = $stopQuantity;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \OtaInterface\Otaconnect\StructType\PkgFlightSegmentBaseType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get InfoSource value
     * @return string|null
     */
    public function getInfoSource()
    {
        return $this->InfoSource;
    }
    /**
     * Set InfoSource value
     * @param string $infoSource
     * @return \OtaInterface\Otaconnect\StructType\PkgFlightSegmentBaseType
     */
    public function setInfoSource($infoSource = null)
    {
        // validation for constraint: string
        if (!is_null($infoSource) && !is_string($infoSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($infoSource)), __LINE__);
        }
        $this->InfoSource = $infoSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PkgFlightSegmentBaseType
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
