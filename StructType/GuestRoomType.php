<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestRoomType StructType
 * Meta informations extracted from the WSDL
 * - documentation: GuestRoomType is used to contain all the information on a guest room.
 * @subpackage Structs
 */
class GuestRoomType extends AbstractStructBase
{
    /**
     * The Quantities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Quantities
     */
    public $Quantities;
    /**
     * The Occupancy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Occupancy[]
     */
    public $Occupancy;
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Room
     */
    public $Room;
    /**
     * The Amenities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Amenities
     */
    public $Amenities;
    /**
     * The RoomLevelFees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RoomLevelFees
     */
    public $RoomLevelFees;
    /**
     * The AdditionalGuestAmount
     * Meta informations extracted from the WSDL
     * - documentation: Additional guest amounts which are attached to room, not rate.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AdditionalGuestAmount;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Description of the Room.
     * - minOccurs: 0
     * @var mixed
     */
    public $Description;
    /**
     * Constructor method for GuestRoomType
     * @uses GuestRoomType::setQuantities()
     * @uses GuestRoomType::setOccupancy()
     * @uses GuestRoomType::setRoom()
     * @uses GuestRoomType::setAmenities()
     * @uses GuestRoomType::setRoomLevelFees()
     * @uses GuestRoomType::setAdditionalGuestAmount()
     * @uses GuestRoomType::setDescription()
     * @param \OtaInterface\Otaconnect\StructType\Quantities $quantities
     * @param \OtaInterface\Otaconnect\StructType\Occupancy[] $occupancy
     * @param \OtaInterface\Otaconnect\StructType\Room $room
     * @param \OtaInterface\Otaconnect\StructType\Amenities $amenities
     * @param \OtaInterface\Otaconnect\StructType\RoomLevelFees $roomLevelFees
     * @param mixed[] $additionalGuestAmount
     * @param mixed $description
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\Quantities $quantities = null, array $occupancy = array(), \OtaInterface\Otaconnect\StructType\Room $room = null, \OtaInterface\Otaconnect\StructType\Amenities $amenities = null, \OtaInterface\Otaconnect\StructType\RoomLevelFees $roomLevelFees = null, array $additionalGuestAmount = array(), $description = null)
    {
        $this
            ->setQuantities($quantities)
            ->setOccupancy($occupancy)
            ->setRoom($room)
            ->setAmenities($amenities)
            ->setRoomLevelFees($roomLevelFees)
            ->setAdditionalGuestAmount($additionalGuestAmount)
            ->setDescription($description);
    }
    /**
     * Get Quantities value
     * @return \OtaInterface\Otaconnect\StructType\Quantities|null
     */
    public function getQuantities()
    {
        return $this->Quantities;
    }
    /**
     * Set Quantities value
     * @param \OtaInterface\Otaconnect\StructType\Quantities $quantities
     * @return \OtaInterface\Otaconnect\StructType\GuestRoomType
     */
    public function setQuantities(\OtaInterface\Otaconnect\StructType\Quantities $quantities = null)
    {
        $this->Quantities = $quantities;
        return $this;
    }
    /**
     * Get Occupancy value
     * @return \OtaInterface\Otaconnect\StructType\Occupancy[]|null
     */
    public function getOccupancy()
    {
        return $this->Occupancy;
    }
    /**
     * Set Occupancy value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Occupancy[] $occupancy
     * @return \OtaInterface\Otaconnect\StructType\GuestRoomType
     */
    public function setOccupancy(array $occupancy = array())
    {
        foreach ($occupancy as $guestRoomTypeOccupancyItem) {
            // validation for constraint: itemType
            if (!$guestRoomTypeOccupancyItem instanceof \OtaInterface\Otaconnect\StructType\Occupancy) {
                throw new \InvalidArgumentException(sprintf('The Occupancy property can only contain items of \OtaInterface\Otaconnect\StructType\Occupancy, "%s" given', is_object($guestRoomTypeOccupancyItem) ? get_class($guestRoomTypeOccupancyItem) : gettype($guestRoomTypeOccupancyItem)), __LINE__);
            }
        }
        $this->Occupancy = $occupancy;
        return $this;
    }
    /**
     * Add item to Occupancy value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Occupancy $item
     * @return \OtaInterface\Otaconnect\StructType\GuestRoomType
     */
    public function addToOccupancy(\OtaInterface\Otaconnect\StructType\Occupancy $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Occupancy) {
            throw new \InvalidArgumentException(sprintf('The Occupancy property can only contain items of \OtaInterface\Otaconnect\StructType\Occupancy, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Occupancy[] = $item;
        return $this;
    }
    /**
     * Get Room value
     * @return \OtaInterface\Otaconnect\StructType\Room|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @param \OtaInterface\Otaconnect\StructType\Room $room
     * @return \OtaInterface\Otaconnect\StructType\GuestRoomType
     */
    public function setRoom(\OtaInterface\Otaconnect\StructType\Room $room = null)
    {
        $this->Room = $room;
        return $this;
    }
    /**
     * Get Amenities value
     * @return \OtaInterface\Otaconnect\StructType\Amenities|null
     */
    public function getAmenities()
    {
        return $this->Amenities;
    }
    /**
     * Set Amenities value
     * @param \OtaInterface\Otaconnect\StructType\Amenities $amenities
     * @return \OtaInterface\Otaconnect\StructType\GuestRoomType
     */
    public function setAmenities(\OtaInterface\Otaconnect\StructType\Amenities $amenities = null)
    {
        $this->Amenities = $amenities;
        return $this;
    }
    /**
     * Get RoomLevelFees value
     * @return \OtaInterface\Otaconnect\StructType\RoomLevelFees|null
     */
    public function getRoomLevelFees()
    {
        return $this->RoomLevelFees;
    }
    /**
     * Set RoomLevelFees value
     * @param \OtaInterface\Otaconnect\StructType\RoomLevelFees $roomLevelFees
     * @return \OtaInterface\Otaconnect\StructType\GuestRoomType
     */
    public function setRoomLevelFees(\OtaInterface\Otaconnect\StructType\RoomLevelFees $roomLevelFees = null)
    {
        $this->RoomLevelFees = $roomLevelFees;
        return $this;
    }
    /**
     * Get AdditionalGuestAmount value
     * @return mixed[]|null
     */
    public function getAdditionalGuestAmount()
    {
        return $this->AdditionalGuestAmount;
    }
    /**
     * Set AdditionalGuestAmount value
     * @throws \InvalidArgumentException
     * @param mixed[] $additionalGuestAmount
     * @return \OtaInterface\Otaconnect\StructType\GuestRoomType
     */
    public function setAdditionalGuestAmount(array $additionalGuestAmount = array())
    {
        foreach ($additionalGuestAmount as $guestRoomTypeAdditionalGuestAmountItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AdditionalGuestAmount property can only contain items of anyType, "%s" given', is_object($guestRoomTypeAdditionalGuestAmountItem) ? get_class($guestRoomTypeAdditionalGuestAmountItem) : gettype($guestRoomTypeAdditionalGuestAmountItem)), __LINE__);
            }
        }
        $this->AdditionalGuestAmount = $additionalGuestAmount;
        return $this;
    }
    /**
     * Add item to AdditionalGuestAmount value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\GuestRoomType
     */
    public function addToAdditionalGuestAmount($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AdditionalGuestAmount property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalGuestAmount[] = $item;
        return $this;
    }
    /**
     * Get Description value
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param mixed $description
     * @return \OtaInterface\Otaconnect\StructType\GuestRoomType
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\GuestRoomType
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
