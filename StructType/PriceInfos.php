<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceInfos StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of price infos. | Collection of price info.
 * @subpackage Structs
 */
class PriceInfos extends AbstractStructBase
{
    /**
     * The PriceInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\PriceInfo[]
     */
    public $PriceInfo;
    /**
     * Constructor method for PriceInfos
     * @uses PriceInfos::setPriceInfo()
     * @param \OtaInterface\Otaconnect\StructType\PriceInfo[] $priceInfo
     */
    public function __construct(array $priceInfo = array())
    {
        $this
            ->setPriceInfo($priceInfo);
    }
    /**
     * Get PriceInfo value
     * @return \OtaInterface\Otaconnect\StructType\PriceInfo[]|null
     */
    public function getPriceInfo()
    {
        return $this->PriceInfo;
    }
    /**
     * Set PriceInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PriceInfo[] $priceInfo
     * @return \OtaInterface\Otaconnect\StructType\PriceInfos
     */
    public function setPriceInfo(array $priceInfo = array())
    {
        foreach ($priceInfo as $priceInfosPriceInfoItem) {
            // validation for constraint: itemType
            if (!$priceInfosPriceInfoItem instanceof \OtaInterface\Otaconnect\StructType\PriceInfo) {
                throw new \InvalidArgumentException(sprintf('The PriceInfo property can only contain items of \OtaInterface\Otaconnect\StructType\PriceInfo, "%s" given', is_object($priceInfosPriceInfoItem) ? get_class($priceInfosPriceInfoItem) : gettype($priceInfosPriceInfoItem)), __LINE__);
            }
        }
        $this->PriceInfo = $priceInfo;
        return $this;
    }
    /**
     * Add item to PriceInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PriceInfo $item
     * @return \OtaInterface\Otaconnect\StructType\PriceInfos
     */
    public function addToPriceInfo(\OtaInterface\Otaconnect\StructType\PriceInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\PriceInfo) {
            throw new \InvalidArgumentException(sprintf('The PriceInfo property can only contain items of \OtaInterface\Otaconnect\StructType\PriceInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PriceInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PriceInfos
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
