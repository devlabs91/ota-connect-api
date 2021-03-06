<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InterestPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a preference for a traveler's interest. | Used to specify the preference level for a traveler's interest. | Used for Character Strings, length 1 to 64.
 * - maxLength: 64
 * - minLength: 1
 * @subpackage Structs
 */
class InterestPrefType extends AbstractStructBase
{
    /**
     * Constructor method for InterestPrefType
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
     * @return \OtaInterface\Otaconnect\StructType\InterestPrefType
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
