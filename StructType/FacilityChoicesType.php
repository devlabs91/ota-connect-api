<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FacilityChoicesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the available facilities for the enquiror's chosen property and stay.
 * @subpackage Structs
 */
class FacilityChoicesType extends AbstractStructBase
{
    /**
     * The AvailableRooms
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AvailableRooms
     */
    public $AvailableRooms;
    /**
     * The AvailableMealPlans
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AvailableMealPlans
     */
    public $AvailableMealPlans;
    /**
     * The RoomPrices
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RoomPrices[]
     */
    public $RoomPrices;
    /**
     * Constructor method for FacilityChoicesType
     * @uses FacilityChoicesType::setAvailableRooms()
     * @uses FacilityChoicesType::setAvailableMealPlans()
     * @uses FacilityChoicesType::setRoomPrices()
     * @param \OtaInterface\Otaconnect\StructType\AvailableRooms $availableRooms
     * @param \OtaInterface\Otaconnect\StructType\AvailableMealPlans $availableMealPlans
     * @param \OtaInterface\Otaconnect\StructType\RoomPrices[] $roomPrices
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\AvailableRooms $availableRooms = null, \OtaInterface\Otaconnect\StructType\AvailableMealPlans $availableMealPlans = null, array $roomPrices = array())
    {
        $this
            ->setAvailableRooms($availableRooms)
            ->setAvailableMealPlans($availableMealPlans)
            ->setRoomPrices($roomPrices);
    }
    /**
     * Get AvailableRooms value
     * @return \OtaInterface\Otaconnect\StructType\AvailableRooms|null
     */
    public function getAvailableRooms()
    {
        return $this->AvailableRooms;
    }
    /**
     * Set AvailableRooms value
     * @param \OtaInterface\Otaconnect\StructType\AvailableRooms $availableRooms
     * @return \OtaInterface\Otaconnect\StructType\FacilityChoicesType
     */
    public function setAvailableRooms(\OtaInterface\Otaconnect\StructType\AvailableRooms $availableRooms = null)
    {
        $this->AvailableRooms = $availableRooms;
        return $this;
    }
    /**
     * Get AvailableMealPlans value
     * @return \OtaInterface\Otaconnect\StructType\AvailableMealPlans|null
     */
    public function getAvailableMealPlans()
    {
        return $this->AvailableMealPlans;
    }
    /**
     * Set AvailableMealPlans value
     * @param \OtaInterface\Otaconnect\StructType\AvailableMealPlans $availableMealPlans
     * @return \OtaInterface\Otaconnect\StructType\FacilityChoicesType
     */
    public function setAvailableMealPlans(\OtaInterface\Otaconnect\StructType\AvailableMealPlans $availableMealPlans = null)
    {
        $this->AvailableMealPlans = $availableMealPlans;
        return $this;
    }
    /**
     * Get RoomPrices value
     * @return \OtaInterface\Otaconnect\StructType\RoomPrices[]|null
     */
    public function getRoomPrices()
    {
        return $this->RoomPrices;
    }
    /**
     * Set RoomPrices value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RoomPrices[] $roomPrices
     * @return \OtaInterface\Otaconnect\StructType\FacilityChoicesType
     */
    public function setRoomPrices(array $roomPrices = array())
    {
        foreach ($roomPrices as $facilityChoicesTypeRoomPricesItem) {
            // validation for constraint: itemType
            if (!$facilityChoicesTypeRoomPricesItem instanceof \OtaInterface\Otaconnect\StructType\RoomPrices) {
                throw new \InvalidArgumentException(sprintf('The RoomPrices property can only contain items of \OtaInterface\Otaconnect\StructType\RoomPrices, "%s" given', is_object($facilityChoicesTypeRoomPricesItem) ? get_class($facilityChoicesTypeRoomPricesItem) : gettype($facilityChoicesTypeRoomPricesItem)), __LINE__);
            }
        }
        $this->RoomPrices = $roomPrices;
        return $this;
    }
    /**
     * Add item to RoomPrices value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RoomPrices $item
     * @return \OtaInterface\Otaconnect\StructType\FacilityChoicesType
     */
    public function addToRoomPrices(\OtaInterface\Otaconnect\StructType\RoomPrices $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\RoomPrices) {
            throw new \InvalidArgumentException(sprintf('The RoomPrices property can only contain items of \OtaInterface\Otaconnect\StructType\RoomPrices, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomPrices[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\FacilityChoicesType
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
