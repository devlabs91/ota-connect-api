<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRestrictionPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: Constrains the pricing to those fares with restrictions that satisfy user-imposed limitations. | Used to specify a fare restriction and the preference level for the restriction.
 * @subpackage Structs
 */
class FareRestrictionPref extends AbstractStructBase
{
    /**
     * Constructor method for FareRestrictionPref
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
     * @return \OtaInterface\Otaconnect\StructType\FareRestrictionPref
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
