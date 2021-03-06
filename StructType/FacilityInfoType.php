<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FacilityInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The FacilityInfo class that describes the facilities provided at the hotel, including meeting rooms restaurants.
 * @subpackage Structs
 */
class FacilityInfoType extends AbstractStructBase
{
    /**
     * The MeetingRooms
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MeetingRooms
     */
    public $MeetingRooms;
    /**
     * The GuestRooms
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\GuestRooms
     */
    public $GuestRooms;
    /**
     * The Restaurants
     * Meta informations extracted from the WSDL
     * - documentation: Collection of restaurants offered by hotel.
     * - minOccurs: 0
     * @var mixed
     */
    public $Restaurants;
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when this hotel information was last updated in the system.
     * - use: optional
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for FacilityInfoType
     * @uses FacilityInfoType::setMeetingRooms()
     * @uses FacilityInfoType::setGuestRooms()
     * @uses FacilityInfoType::setRestaurants()
     * @uses FacilityInfoType::setLastUpdated()
     * @param \OtaInterface\Otaconnect\StructType\MeetingRooms $meetingRooms
     * @param \OtaInterface\Otaconnect\StructType\GuestRooms $guestRooms
     * @param mixed $restaurants
     * @param string $lastUpdated
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\MeetingRooms $meetingRooms = null, \OtaInterface\Otaconnect\StructType\GuestRooms $guestRooms = null, $restaurants = null, $lastUpdated = null)
    {
        $this
            ->setMeetingRooms($meetingRooms)
            ->setGuestRooms($guestRooms)
            ->setRestaurants($restaurants)
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get MeetingRooms value
     * @return \OtaInterface\Otaconnect\StructType\MeetingRooms|null
     */
    public function getMeetingRooms()
    {
        return $this->MeetingRooms;
    }
    /**
     * Set MeetingRooms value
     * @param \OtaInterface\Otaconnect\StructType\MeetingRooms $meetingRooms
     * @return \OtaInterface\Otaconnect\StructType\FacilityInfoType
     */
    public function setMeetingRooms(\OtaInterface\Otaconnect\StructType\MeetingRooms $meetingRooms = null)
    {
        $this->MeetingRooms = $meetingRooms;
        return $this;
    }
    /**
     * Get GuestRooms value
     * @return \OtaInterface\Otaconnect\StructType\GuestRooms|null
     */
    public function getGuestRooms()
    {
        return $this->GuestRooms;
    }
    /**
     * Set GuestRooms value
     * @param \OtaInterface\Otaconnect\StructType\GuestRooms $guestRooms
     * @return \OtaInterface\Otaconnect\StructType\FacilityInfoType
     */
    public function setGuestRooms(\OtaInterface\Otaconnect\StructType\GuestRooms $guestRooms = null)
    {
        $this->GuestRooms = $guestRooms;
        return $this;
    }
    /**
     * Get Restaurants value
     * @return mixed|null
     */
    public function getRestaurants()
    {
        return $this->Restaurants;
    }
    /**
     * Set Restaurants value
     * @param mixed $restaurants
     * @return \OtaInterface\Otaconnect\StructType\FacilityInfoType
     */
    public function setRestaurants($restaurants = null)
    {
        $this->Restaurants = $restaurants;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \OtaInterface\Otaconnect\StructType\FacilityInfoType
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\FacilityInfoType
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
