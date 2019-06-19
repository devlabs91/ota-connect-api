<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepartureAirport StructType
 * Meta informations extracted from the WSDL
 * - documentation: The departure airport for the flight. | The departure airport/city code. | Departure point of flight segment. | Identifies the airport location for the departure. | Departure point of flight segment.
 * @subpackage Structs
 */
class DepartureAirport extends AbstractStructBase
{
    /**
     * Constructor method for DepartureAirport
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\DepartureAirport
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
