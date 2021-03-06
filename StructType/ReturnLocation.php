<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnLocation StructType
 * Meta informations extracted from the WSDL
 * - documentation: A code to identify the return location, along with an optional code context.
 * @subpackage Structs
 */
class ReturnLocation extends LocationType
{
    /**
     * The ExtendedLocationCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the unique location code (e.g. ATL10).
     * - use: optional
     * @var string
     */
    public $ExtendedLocationCode;
    /**
     * The CounterLocation
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the location of a car rental site for an airport/city code. Refer to OpenTravel Code List Vehicle Where At Facility (VWF).
     * - use: optional
     * @var string
     */
    public $CounterLocation;
    /**
     * Constructor method for ReturnLocation
     * @uses ReturnLocation::setExtendedLocationCode()
     * @uses ReturnLocation::setCounterLocation()
     * @param string $extendedLocationCode
     * @param string $counterLocation
     */
    public function __construct($extendedLocationCode = null, $counterLocation = null)
    {
        $this
            ->setExtendedLocationCode($extendedLocationCode)
            ->setCounterLocation($counterLocation);
    }
    /**
     * Get ExtendedLocationCode value
     * @return string|null
     */
    public function getExtendedLocationCode()
    {
        return $this->ExtendedLocationCode;
    }
    /**
     * Set ExtendedLocationCode value
     * @param string $extendedLocationCode
     * @return \OtaInterface\Otaconnect\StructType\ReturnLocation
     */
    public function setExtendedLocationCode($extendedLocationCode = null)
    {
        // validation for constraint: string
        if (!is_null($extendedLocationCode) && !is_string($extendedLocationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendedLocationCode)), __LINE__);
        }
        $this->ExtendedLocationCode = $extendedLocationCode;
        return $this;
    }
    /**
     * Get CounterLocation value
     * @return string|null
     */
    public function getCounterLocation()
    {
        return $this->CounterLocation;
    }
    /**
     * Set CounterLocation value
     * @param string $counterLocation
     * @return \OtaInterface\Otaconnect\StructType\ReturnLocation
     */
    public function setCounterLocation($counterLocation = null)
    {
        // validation for constraint: string
        if (!is_null($counterLocation) && !is_string($counterLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($counterLocation)), __LINE__);
        }
        $this->CounterLocation = $counterLocation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\ReturnLocation
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
