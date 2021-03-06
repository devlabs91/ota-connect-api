<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvBlockCutoff StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used for information regarding inventory block cutoff dates. | The usage here provides details regarding the inventory count cutoffs. This attribute group was reused and does not apply to blocks, even though the word "block" appears
 * in the attribute group name.
 * @subpackage Structs
 */
class InvBlockCutoff extends AbstractStructBase
{
    /**
     * Constructor method for InvBlockCutoff
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
     * @return \OtaInterface\Otaconnect\StructType\InvBlockCutoff
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
