<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomSharesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of RoomShare.
 * @subpackage Structs
 */
class RoomSharesType extends AbstractStructBase
{
    /**
     * The RoomShare
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\RoomShare[]
     */
    public $RoomShare;
    /**
     * Constructor method for RoomSharesType
     * @uses RoomSharesType::setRoomShare()
     * @param \OtaInterface\Otaconnect\StructType\RoomShare[] $roomShare
     */
    public function __construct(array $roomShare = array())
    {
        $this
            ->setRoomShare($roomShare);
    }
    /**
     * Get RoomShare value
     * @return \OtaInterface\Otaconnect\StructType\RoomShare[]|null
     */
    public function getRoomShare()
    {
        return $this->RoomShare;
    }
    /**
     * Set RoomShare value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RoomShare[] $roomShare
     * @return \OtaInterface\Otaconnect\StructType\RoomSharesType
     */
    public function setRoomShare(array $roomShare = array())
    {
        foreach ($roomShare as $roomSharesTypeRoomShareItem) {
            // validation for constraint: itemType
            if (!$roomSharesTypeRoomShareItem instanceof \OtaInterface\Otaconnect\StructType\RoomShare) {
                throw new \InvalidArgumentException(sprintf('The RoomShare property can only contain items of \OtaInterface\Otaconnect\StructType\RoomShare, "%s" given', is_object($roomSharesTypeRoomShareItem) ? get_class($roomSharesTypeRoomShareItem) : gettype($roomSharesTypeRoomShareItem)), __LINE__);
            }
        }
        $this->RoomShare = $roomShare;
        return $this;
    }
    /**
     * Add item to RoomShare value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RoomShare $item
     * @return \OtaInterface\Otaconnect\StructType\RoomSharesType
     */
    public function addToRoomShare(\OtaInterface\Otaconnect\StructType\RoomShare $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\RoomShare) {
            throw new \InvalidArgumentException(sprintf('The RoomShare property can only contain items of \OtaInterface\Otaconnect\StructType\RoomShare, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomShare[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RoomSharesType
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
