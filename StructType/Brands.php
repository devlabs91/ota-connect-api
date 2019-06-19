<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Brands StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of Brands.
 * @subpackage Structs
 */
class Brands extends AbstractStructBase
{
    /**
     * The Brand
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\Brand[]
     */
    public $Brand;
    /**
     * Constructor method for Brands
     * @uses Brands::setBrand()
     * @param \OtaInterface\Otaconnect\StructType\Brand[] $brand
     */
    public function __construct(array $brand = array())
    {
        $this
            ->setBrand($brand);
    }
    /**
     * Get Brand value
     * @return \OtaInterface\Otaconnect\StructType\Brand[]|null
     */
    public function getBrand()
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Brand[] $brand
     * @return \OtaInterface\Otaconnect\StructType\Brands
     */
    public function setBrand(array $brand = array())
    {
        foreach ($brand as $brandsBrandItem) {
            // validation for constraint: itemType
            if (!$brandsBrandItem instanceof \OtaInterface\Otaconnect\StructType\Brand) {
                throw new \InvalidArgumentException(sprintf('The Brand property can only contain items of \OtaInterface\Otaconnect\StructType\Brand, "%s" given', is_object($brandsBrandItem) ? get_class($brandsBrandItem) : gettype($brandsBrandItem)), __LINE__);
            }
        }
        $this->Brand = $brand;
        return $this;
    }
    /**
     * Add item to Brand value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Brand $item
     * @return \OtaInterface\Otaconnect\StructType\Brands
     */
    public function addToBrand(\OtaInterface\Otaconnect\StructType\Brand $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Brand) {
            throw new \InvalidArgumentException(sprintf('The Brand property can only contain items of \OtaInterface\Otaconnect\StructType\Brand, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Brand[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Brands
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
