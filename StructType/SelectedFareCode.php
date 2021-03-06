<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectedFareCode StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the fare code and the group code if any. Fare codes are specific to cruise lines.
 * @subpackage Structs
 */
class SelectedFareCode extends AbstractStructBase
{
    /**
     * Constructor method for SelectedFareCode
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
     * @return \OtaInterface\Otaconnect\StructType\SelectedFareCode
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
