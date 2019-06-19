<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestRooms StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of guest room types that are comprised within the hotel.
 * @subpackage Structs
 */
class GuestRooms extends AbstractStructBase
{
    /**
     * The GuestRoom
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\GuestRoom[]
     */
    public $GuestRoom;
    /**
     * The MaxOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of guests the hotel can accommodate at one time.
     * - use: optional
     * @var int
     */
    public $MaxOccupancy;
    /**
     * Constructor method for GuestRooms
     * @uses GuestRooms::setGuestRoom()
     * @uses GuestRooms::setMaxOccupancy()
     * @param \OtaInterface\Otaconnect\StructType\GuestRoom[] $guestRoom
     * @param int $maxOccupancy
     */
    public function __construct(array $guestRoom = array(), $maxOccupancy = null)
    {
        $this
            ->setGuestRoom($guestRoom)
            ->setMaxOccupancy($maxOccupancy);
    }
    /**
     * Get GuestRoom value
     * @return \OtaInterface\Otaconnect\StructType\GuestRoom[]|null
     */
    public function getGuestRoom()
    {
        return $this->GuestRoom;
    }
    /**
     * Set GuestRoom value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\GuestRoom[] $guestRoom
     * @return \OtaInterface\Otaconnect\StructType\GuestRooms
     */
    public function setGuestRoom(array $guestRoom = array())
    {
        foreach ($guestRoom as $guestRoomsGuestRoomItem) {
            // validation for constraint: itemType
            if (!$guestRoomsGuestRoomItem instanceof \OtaInterface\Otaconnect\StructType\GuestRoom) {
                throw new \InvalidArgumentException(sprintf('The GuestRoom property can only contain items of \OtaInterface\Otaconnect\StructType\GuestRoom, "%s" given', is_object($guestRoomsGuestRoomItem) ? get_class($guestRoomsGuestRoomItem) : gettype($guestRoomsGuestRoomItem)), __LINE__);
            }
        }
        $this->GuestRoom = $guestRoom;
        return $this;
    }
    /**
     * Add item to GuestRoom value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\GuestRoom $item
     * @return \OtaInterface\Otaconnect\StructType\GuestRooms
     */
    public function addToGuestRoom(\OtaInterface\Otaconnect\StructType\GuestRoom $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\GuestRoom) {
            throw new \InvalidArgumentException(sprintf('The GuestRoom property can only contain items of \OtaInterface\Otaconnect\StructType\GuestRoom, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuestRoom[] = $item;
        return $this;
    }
    /**
     * Get MaxOccupancy value
     * @return int|null
     */
    public function getMaxOccupancy()
    {
        return $this->MaxOccupancy;
    }
    /**
     * Set MaxOccupancy value
     * @param int $maxOccupancy
     * @return \OtaInterface\Otaconnect\StructType\GuestRooms
     */
    public function setMaxOccupancy($maxOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($maxOccupancy) && !is_numeric($maxOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxOccupancy)), __LINE__);
        }
        $this->MaxOccupancy = $maxOccupancy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\GuestRooms
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
