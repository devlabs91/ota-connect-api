<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRefs StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of hotel identifiers to which the rate plan applies.
 * @subpackage Structs
 */
class HotelRefs extends AbstractStructBase
{
    /**
     * The HotelRef
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\HotelRef[]
     */
    public $HotelRef;
    /**
     * Constructor method for HotelRefs
     * @uses HotelRefs::setHotelRef()
     * @param \OtaInterface\Otaconnect\StructType\HotelRef[] $hotelRef
     */
    public function __construct(array $hotelRef = array())
    {
        $this
            ->setHotelRef($hotelRef);
    }
    /**
     * Get HotelRef value
     * @return \OtaInterface\Otaconnect\StructType\HotelRef[]|null
     */
    public function getHotelRef()
    {
        return $this->HotelRef;
    }
    /**
     * Set HotelRef value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelRef[] $hotelRef
     * @return \OtaInterface\Otaconnect\StructType\HotelRefs
     */
    public function setHotelRef(array $hotelRef = array())
    {
        foreach ($hotelRef as $hotelRefsHotelRefItem) {
            // validation for constraint: itemType
            if (!$hotelRefsHotelRefItem instanceof \OtaInterface\Otaconnect\StructType\HotelRef) {
                throw new \InvalidArgumentException(sprintf('The HotelRef property can only contain items of \OtaInterface\Otaconnect\StructType\HotelRef, "%s" given', is_object($hotelRefsHotelRefItem) ? get_class($hotelRefsHotelRefItem) : gettype($hotelRefsHotelRefItem)), __LINE__);
            }
        }
        $this->HotelRef = $hotelRef;
        return $this;
    }
    /**
     * Add item to HotelRef value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelRef $item
     * @return \OtaInterface\Otaconnect\StructType\HotelRefs
     */
    public function addToHotelRef(\OtaInterface\Otaconnect\StructType\HotelRef $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\HotelRef) {
            throw new \InvalidArgumentException(sprintf('The HotelRef property can only contain items of \OtaInterface\Otaconnect\StructType\HotelRef, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelRef[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\HotelRefs
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
