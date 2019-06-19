<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelStay StructType
 * Meta informations extracted from the WSDL
 * - documentation: A quick view of the requested hotels' general availability for each day in the requested range.
 * @subpackage Structs
 */
class HotelStay extends AbstractStructBase
{
    /**
     * The Availability
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Availability[]
     */
    public $Availability;
    /**
     * The BasicPropertyInfo
     * Meta informations extracted from the WSDL
     * - documentation: Property Information for the Hotel Stay.
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public $BasicPropertyInfo;
    /**
     * The RoomStayRPH
     * Meta informations extracted from the WSDL
     * - documentation: References one or more room stays associated with this hotel stay. | List of Reference Place Holders. | The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign
     * individual passengers or clients to particular itinerary items).
     * - use: optional
     * - pattern: [0-9]{1,8}
     * @var string
     */
    public $RoomStayRPH;
    /**
     * Constructor method for HotelStay
     * @uses HotelStay::setAvailability()
     * @uses HotelStay::setBasicPropertyInfo()
     * @uses HotelStay::setRoomStayRPH()
     * @param \OtaInterface\Otaconnect\StructType\Availability[] $availability
     * @param \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType $basicPropertyInfo
     * @param string $roomStayRPH
     */
    public function __construct(array $availability = array(), \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType $basicPropertyInfo = null, $roomStayRPH = null)
    {
        $this
            ->setAvailability($availability)
            ->setBasicPropertyInfo($basicPropertyInfo)
            ->setRoomStayRPH($roomStayRPH);
    }
    /**
     * Get Availability value
     * @return \OtaInterface\Otaconnect\StructType\Availability[]|null
     */
    public function getAvailability()
    {
        return $this->Availability;
    }
    /**
     * Set Availability value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Availability[] $availability
     * @return \OtaInterface\Otaconnect\StructType\HotelStay
     */
    public function setAvailability(array $availability = array())
    {
        foreach ($availability as $hotelStayAvailabilityItem) {
            // validation for constraint: itemType
            if (!$hotelStayAvailabilityItem instanceof \OtaInterface\Otaconnect\StructType\Availability) {
                throw new \InvalidArgumentException(sprintf('The Availability property can only contain items of \OtaInterface\Otaconnect\StructType\Availability, "%s" given', is_object($hotelStayAvailabilityItem) ? get_class($hotelStayAvailabilityItem) : gettype($hotelStayAvailabilityItem)), __LINE__);
            }
        }
        $this->Availability = $availability;
        return $this;
    }
    /**
     * Add item to Availability value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Availability $item
     * @return \OtaInterface\Otaconnect\StructType\HotelStay
     */
    public function addToAvailability(\OtaInterface\Otaconnect\StructType\Availability $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Availability) {
            throw new \InvalidArgumentException(sprintf('The Availability property can only contain items of \OtaInterface\Otaconnect\StructType\Availability, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Availability[] = $item;
        return $this;
    }
    /**
     * Get BasicPropertyInfo value
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType|null
     */
    public function getBasicPropertyInfo()
    {
        return $this->BasicPropertyInfo;
    }
    /**
     * Set BasicPropertyInfo value
     * @param \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType $basicPropertyInfo
     * @return \OtaInterface\Otaconnect\StructType\HotelStay
     */
    public function setBasicPropertyInfo(\OtaInterface\Otaconnect\StructType\BasicPropertyInfoType $basicPropertyInfo = null)
    {
        $this->BasicPropertyInfo = $basicPropertyInfo;
        return $this;
    }
    /**
     * Get RoomStayRPH value
     * @return string|null
     */
    public function getRoomStayRPH()
    {
        return $this->RoomStayRPH;
    }
    /**
     * Set RoomStayRPH value
     * @param string $roomStayRPH
     * @return \OtaInterface\Otaconnect\StructType\HotelStay
     */
    public function setRoomStayRPH($roomStayRPH = null)
    {
        // validation for constraint: pattern
        if (is_scalar($roomStayRPH) && !preg_match('/[0-9]{1,8}/', $roomStayRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,8}", "%s" given', var_export($roomStayRPH, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($roomStayRPH) && !is_string($roomStayRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomStayRPH)), __LINE__);
        }
        $this->RoomStayRPH = $roomStayRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\HotelStay
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
