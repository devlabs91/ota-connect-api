<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AreasType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines an area determined by the hotel reservation system.
 * @subpackage Structs
 */
class AreasType extends AbstractStructBase
{
    /**
     * The Area
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\Area[]
     */
    public $Area;
    /**
     * Constructor method for AreasType
     * @uses AreasType::setArea()
     * @param \OtaInterface\Otaconnect\StructType\Area[] $area
     */
    public function __construct(array $area = array())
    {
        $this
            ->setArea($area);
    }
    /**
     * Get Area value
     * @return \OtaInterface\Otaconnect\StructType\Area[]|null
     */
    public function getArea()
    {
        return $this->Area;
    }
    /**
     * Set Area value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Area[] $area
     * @return \OtaInterface\Otaconnect\StructType\AreasType
     */
    public function setArea(array $area = array())
    {
        foreach ($area as $areasTypeAreaItem) {
            // validation for constraint: itemType
            if (!$areasTypeAreaItem instanceof \OtaInterface\Otaconnect\StructType\Area) {
                throw new \InvalidArgumentException(sprintf('The Area property can only contain items of \OtaInterface\Otaconnect\StructType\Area, "%s" given', is_object($areasTypeAreaItem) ? get_class($areasTypeAreaItem) : gettype($areasTypeAreaItem)), __LINE__);
            }
        }
        $this->Area = $area;
        return $this;
    }
    /**
     * Add item to Area value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Area $item
     * @return \OtaInterface\Otaconnect\StructType\AreasType
     */
    public function addToArea(\OtaInterface\Otaconnect\StructType\Area $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Area) {
            throw new \InvalidArgumentException(sprintf('The Area property can only contain items of \OtaInterface\Otaconnect\StructType\Area, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Area[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AreasType
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
