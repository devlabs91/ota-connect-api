<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhonePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a telephone number preference.
 * @subpackage Structs
 */
class PhonePrefType extends AbstractStructBase
{
    /**
     * The Telephone
     * @var \OtaInterface\Otaconnect\StructType\Telephone
     */
    public $Telephone;
    /**
     * Constructor method for PhonePrefType
     * @uses PhonePrefType::setTelephone()
     * @param \OtaInterface\Otaconnect\StructType\Telephone $telephone
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\Telephone $telephone = null)
    {
        $this
            ->setTelephone($telephone);
    }
    /**
     * Get Telephone value
     * @return \OtaInterface\Otaconnect\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \OtaInterface\Otaconnect\StructType\Telephone $telephone
     * @return \OtaInterface\Otaconnect\StructType\PhonePrefType
     */
    public function setTelephone(\OtaInterface\Otaconnect\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PhonePrefType
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
