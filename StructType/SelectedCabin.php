<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectedCabin StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the selected cabin information.
 * @subpackage Structs
 */
class SelectedCabin extends CabinOptionType
{
    /**
     * The CabinAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CabinAttributes
     */
    public $CabinAttributes;
    /**
     * Constructor method for SelectedCabin
     * @uses SelectedCabin::setCabinAttributes()
     * @param \OtaInterface\Otaconnect\StructType\CabinAttributes $cabinAttributes
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\CabinAttributes $cabinAttributes = null)
    {
        $this
            ->setCabinAttributes($cabinAttributes);
    }
    /**
     * Get CabinAttributes value
     * @return \OtaInterface\Otaconnect\StructType\CabinAttributes|null
     */
    public function getCabinAttributes()
    {
        return $this->CabinAttributes;
    }
    /**
     * Set CabinAttributes value
     * @param \OtaInterface\Otaconnect\StructType\CabinAttributes $cabinAttributes
     * @return \OtaInterface\Otaconnect\StructType\SelectedCabin
     */
    public function setCabinAttributes(\OtaInterface\Otaconnect\StructType\CabinAttributes $cabinAttributes = null)
    {
        $this->CabinAttributes = $cabinAttributes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\SelectedCabin
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
