<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelResModifyType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Full structure of a hotel reservation modification.
 * @subpackage Structs
 */
class HotelResModifyType extends AbstractStructBase
{
    /**
     * The HotelResModify
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\HotelResModify[]
     */
    public $HotelResModify;
    /**
     * The RoutingHops
     * Meta informations extracted from the WSDL
     * - documentation: A collection of routing hops.
     * - minOccurs: 0
     * @var mixed
     */
    public $RoutingHops;
    /**
     * The WrittenConfInst
     * Meta informations extracted from the WSDL
     * - documentation: To indicate a confirmation is to be sent for this batch of reservations.
     * - minOccurs: 0
     * @var mixed
     */
    public $WrittenConfInst;
    /**
     * Constructor method for HotelResModifyType
     * @uses HotelResModifyType::setHotelResModify()
     * @uses HotelResModifyType::setRoutingHops()
     * @uses HotelResModifyType::setWrittenConfInst()
     * @param \OtaInterface\Otaconnect\StructType\HotelResModify[] $hotelResModify
     * @param mixed $routingHops
     * @param mixed $writtenConfInst
     */
    public function __construct(array $hotelResModify = array(), $routingHops = null, $writtenConfInst = null)
    {
        $this
            ->setHotelResModify($hotelResModify)
            ->setRoutingHops($routingHops)
            ->setWrittenConfInst($writtenConfInst);
    }
    /**
     * Get HotelResModify value
     * @return \OtaInterface\Otaconnect\StructType\HotelResModify[]|null
     */
    public function getHotelResModify()
    {
        return $this->HotelResModify;
    }
    /**
     * Set HotelResModify value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelResModify[] $hotelResModify
     * @return \OtaInterface\Otaconnect\StructType\HotelResModifyType
     */
    public function setHotelResModify(array $hotelResModify = array())
    {
        foreach ($hotelResModify as $hotelResModifyTypeHotelResModifyItem) {
            // validation for constraint: itemType
            if (!$hotelResModifyTypeHotelResModifyItem instanceof \OtaInterface\Otaconnect\StructType\HotelResModify) {
                throw new \InvalidArgumentException(sprintf('The HotelResModify property can only contain items of \OtaInterface\Otaconnect\StructType\HotelResModify, "%s" given', is_object($hotelResModifyTypeHotelResModifyItem) ? get_class($hotelResModifyTypeHotelResModifyItem) : gettype($hotelResModifyTypeHotelResModifyItem)), __LINE__);
            }
        }
        $this->HotelResModify = $hotelResModify;
        return $this;
    }
    /**
     * Add item to HotelResModify value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelResModify $item
     * @return \OtaInterface\Otaconnect\StructType\HotelResModifyType
     */
    public function addToHotelResModify(\OtaInterface\Otaconnect\StructType\HotelResModify $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\HotelResModify) {
            throw new \InvalidArgumentException(sprintf('The HotelResModify property can only contain items of \OtaInterface\Otaconnect\StructType\HotelResModify, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelResModify[] = $item;
        return $this;
    }
    /**
     * Get RoutingHops value
     * @return mixed|null
     */
    public function getRoutingHops()
    {
        return $this->RoutingHops;
    }
    /**
     * Set RoutingHops value
     * @param mixed $routingHops
     * @return \OtaInterface\Otaconnect\StructType\HotelResModifyType
     */
    public function setRoutingHops($routingHops = null)
    {
        $this->RoutingHops = $routingHops;
        return $this;
    }
    /**
     * Get WrittenConfInst value
     * @return mixed|null
     */
    public function getWrittenConfInst()
    {
        return $this->WrittenConfInst;
    }
    /**
     * Set WrittenConfInst value
     * @param mixed $writtenConfInst
     * @return \OtaInterface\Otaconnect\StructType\HotelResModifyType
     */
    public function setWrittenConfInst($writtenConfInst = null)
    {
        $this->WrittenConfInst = $writtenConfInst;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\HotelResModifyType
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
