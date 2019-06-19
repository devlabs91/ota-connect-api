<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SailingBaseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines base sailing information.
 * @subpackage Structs
 */
class SailingBaseType extends AbstractStructBase
{
    /**
     * The CruiseLine
     * @var \OtaInterface\Otaconnect\StructType\CruiseLine
     */
    public $CruiseLine;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Region
     */
    public $Region;
    /**
     * The DeparturePort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\DeparturePort
     */
    public $DeparturePort;
    /**
     * The ArrivalPort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ArrivalPort
     */
    public $ArrivalPort;
    /**
     * The ListOfSailingDescriptionCode
     * Meta informations extracted from the WSDL
     * - documentation: Different qualifiers of the sailing (e.g., groups exist on this sailing; inclusive packages available; or no itinerary description available). Refer to OpenTravel Code Table Sailing Description Code (SAI).
     * - use: optional
     * @var string
     */
    public $ListOfSailingDescriptionCode;
    /**
     * Constructor method for SailingBaseType
     * @uses SailingBaseType::setCruiseLine()
     * @uses SailingBaseType::setRegion()
     * @uses SailingBaseType::setDeparturePort()
     * @uses SailingBaseType::setArrivalPort()
     * @uses SailingBaseType::setListOfSailingDescriptionCode()
     * @param \OtaInterface\Otaconnect\StructType\CruiseLine $cruiseLine
     * @param \OtaInterface\Otaconnect\StructType\Region $region
     * @param \OtaInterface\Otaconnect\StructType\DeparturePort $departurePort
     * @param \OtaInterface\Otaconnect\StructType\ArrivalPort $arrivalPort
     * @param string $listOfSailingDescriptionCode
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\CruiseLine $cruiseLine = null, \OtaInterface\Otaconnect\StructType\Region $region = null, \OtaInterface\Otaconnect\StructType\DeparturePort $departurePort = null, \OtaInterface\Otaconnect\StructType\ArrivalPort $arrivalPort = null, $listOfSailingDescriptionCode = null)
    {
        $this
            ->setCruiseLine($cruiseLine)
            ->setRegion($region)
            ->setDeparturePort($departurePort)
            ->setArrivalPort($arrivalPort)
            ->setListOfSailingDescriptionCode($listOfSailingDescriptionCode);
    }
    /**
     * Get CruiseLine value
     * @return \OtaInterface\Otaconnect\StructType\CruiseLine|null
     */
    public function getCruiseLine()
    {
        return $this->CruiseLine;
    }
    /**
     * Set CruiseLine value
     * @param \OtaInterface\Otaconnect\StructType\CruiseLine $cruiseLine
     * @return \OtaInterface\Otaconnect\StructType\SailingBaseType
     */
    public function setCruiseLine(\OtaInterface\Otaconnect\StructType\CruiseLine $cruiseLine = null)
    {
        $this->CruiseLine = $cruiseLine;
        return $this;
    }
    /**
     * Get Region value
     * @return \OtaInterface\Otaconnect\StructType\Region|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param \OtaInterface\Otaconnect\StructType\Region $region
     * @return \OtaInterface\Otaconnect\StructType\SailingBaseType
     */
    public function setRegion(\OtaInterface\Otaconnect\StructType\Region $region = null)
    {
        $this->Region = $region;
        return $this;
    }
    /**
     * Get DeparturePort value
     * @return \OtaInterface\Otaconnect\StructType\DeparturePort|null
     */
    public function getDeparturePort()
    {
        return $this->DeparturePort;
    }
    /**
     * Set DeparturePort value
     * @param \OtaInterface\Otaconnect\StructType\DeparturePort $departurePort
     * @return \OtaInterface\Otaconnect\StructType\SailingBaseType
     */
    public function setDeparturePort(\OtaInterface\Otaconnect\StructType\DeparturePort $departurePort = null)
    {
        $this->DeparturePort = $departurePort;
        return $this;
    }
    /**
     * Get ArrivalPort value
     * @return \OtaInterface\Otaconnect\StructType\ArrivalPort|null
     */
    public function getArrivalPort()
    {
        return $this->ArrivalPort;
    }
    /**
     * Set ArrivalPort value
     * @param \OtaInterface\Otaconnect\StructType\ArrivalPort $arrivalPort
     * @return \OtaInterface\Otaconnect\StructType\SailingBaseType
     */
    public function setArrivalPort(\OtaInterface\Otaconnect\StructType\ArrivalPort $arrivalPort = null)
    {
        $this->ArrivalPort = $arrivalPort;
        return $this;
    }
    /**
     * Get ListOfSailingDescriptionCode value
     * @return string|null
     */
    public function getListOfSailingDescriptionCode()
    {
        return $this->ListOfSailingDescriptionCode;
    }
    /**
     * Set ListOfSailingDescriptionCode value
     * @param string $listOfSailingDescriptionCode
     * @return \OtaInterface\Otaconnect\StructType\SailingBaseType
     */
    public function setListOfSailingDescriptionCode($listOfSailingDescriptionCode = null)
    {
        // validation for constraint: string
        if (!is_null($listOfSailingDescriptionCode) && !is_string($listOfSailingDescriptionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listOfSailingDescriptionCode)), __LINE__);
        }
        $this->ListOfSailingDescriptionCode = $listOfSailingDescriptionCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\SailingBaseType
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
