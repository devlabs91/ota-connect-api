<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestPrice StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the guest and prices at the guest level.
 * @subpackage Structs
 */
class GuestPrice extends GuestType
{
    /**
     * The PriceInfos
     * @var \OtaInterface\Otaconnect\StructType\PriceInfos
     */
    public $PriceInfos;
    /**
     * Constructor method for GuestPrice
     * @uses GuestPrice::setPriceInfos()
     * @param \OtaInterface\Otaconnect\StructType\PriceInfos $priceInfos
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\PriceInfos $priceInfos = null)
    {
        $this
            ->setPriceInfos($priceInfos);
    }
    /**
     * Get PriceInfos value
     * @return \OtaInterface\Otaconnect\StructType\PriceInfos|null
     */
    public function getPriceInfos()
    {
        return $this->PriceInfos;
    }
    /**
     * Set PriceInfos value
     * @param \OtaInterface\Otaconnect\StructType\PriceInfos $priceInfos
     * @return \OtaInterface\Otaconnect\StructType\GuestPrice
     */
    public function setPriceInfos(\OtaInterface\Otaconnect\StructType\PriceInfos $priceInfos = null)
    {
        $this->PriceInfos = $priceInfos;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\GuestPrice
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
