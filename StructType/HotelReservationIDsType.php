<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReservationIDsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A Collection of HotelReservationID objects for a given reservation. The collection of all ReservationIDs can include Passenger Name Record (PNR), Guest Name Record (GNR) and Guest Folio numbers. Associated with each can be a
 * Confirmation number which is usually given to the guest.
 * @subpackage Structs
 */
class HotelReservationIDsType extends AbstractStructBase
{
    /**
     * The HotelReservationID
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\HotelReservationID[]
     */
    public $HotelReservationID;
    /**
     * Constructor method for HotelReservationIDsType
     * @uses HotelReservationIDsType::setHotelReservationID()
     * @param \OtaInterface\Otaconnect\StructType\HotelReservationID[] $hotelReservationID
     */
    public function __construct(array $hotelReservationID = array())
    {
        $this
            ->setHotelReservationID($hotelReservationID);
    }
    /**
     * Get HotelReservationID value
     * @return \OtaInterface\Otaconnect\StructType\HotelReservationID[]|null
     */
    public function getHotelReservationID()
    {
        return $this->HotelReservationID;
    }
    /**
     * Set HotelReservationID value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelReservationID[] $hotelReservationID
     * @return \OtaInterface\Otaconnect\StructType\HotelReservationIDsType
     */
    public function setHotelReservationID(array $hotelReservationID = array())
    {
        foreach ($hotelReservationID as $hotelReservationIDsTypeHotelReservationIDItem) {
            // validation for constraint: itemType
            if (!$hotelReservationIDsTypeHotelReservationIDItem instanceof \OtaInterface\Otaconnect\StructType\HotelReservationID) {
                throw new \InvalidArgumentException(sprintf('The HotelReservationID property can only contain items of \OtaInterface\Otaconnect\StructType\HotelReservationID, "%s" given', is_object($hotelReservationIDsTypeHotelReservationIDItem) ? get_class($hotelReservationIDsTypeHotelReservationIDItem) : gettype($hotelReservationIDsTypeHotelReservationIDItem)), __LINE__);
            }
        }
        $this->HotelReservationID = $hotelReservationID;
        return $this;
    }
    /**
     * Add item to HotelReservationID value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelReservationID $item
     * @return \OtaInterface\Otaconnect\StructType\HotelReservationIDsType
     */
    public function addToHotelReservationID(\OtaInterface\Otaconnect\StructType\HotelReservationID $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\HotelReservationID) {
            throw new \InvalidArgumentException(sprintf('The HotelReservationID property can only contain items of \OtaInterface\Otaconnect\StructType\HotelReservationID, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelReservationID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\HotelReservationIDsType
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
