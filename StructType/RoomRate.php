<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomRate StructType
 * @subpackage Structs
 */
class RoomRate extends RoomRateType
{
    /**
     * The AdvanceBookingRestriction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AdvanceBookingRestriction
     */
    public $AdvanceBookingRestriction;
    /**
     * The Restrictions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Restrictions
     */
    public $Restrictions;
    /**
     * The ServiceRPHs
     * Meta informations extracted from the WSDL
     * - documentation: A container for the unique references to the services for the room stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $ServiceRPHs;
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\GuestCounts
     */
    public $GuestCounts;
    /**
     * Constructor method for RoomRate
     * @uses RoomRate::setAdvanceBookingRestriction()
     * @uses RoomRate::setRestrictions()
     * @uses RoomRate::setServiceRPHs()
     * @uses RoomRate::setGuestCounts()
     * @param \OtaInterface\Otaconnect\StructType\AdvanceBookingRestriction $advanceBookingRestriction
     * @param \OtaInterface\Otaconnect\StructType\Restrictions $restrictions
     * @param mixed $serviceRPHs
     * @param \OtaInterface\Otaconnect\StructType\GuestCounts $guestCounts
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\AdvanceBookingRestriction $advanceBookingRestriction = null, \OtaInterface\Otaconnect\StructType\Restrictions $restrictions = null, $serviceRPHs = null, \OtaInterface\Otaconnect\StructType\GuestCounts $guestCounts = null)
    {
        $this
            ->setAdvanceBookingRestriction($advanceBookingRestriction)
            ->setRestrictions($restrictions)
            ->setServiceRPHs($serviceRPHs)
            ->setGuestCounts($guestCounts);
    }
    /**
     * Get AdvanceBookingRestriction value
     * @return \OtaInterface\Otaconnect\StructType\AdvanceBookingRestriction|null
     */
    public function getAdvanceBookingRestriction()
    {
        return $this->AdvanceBookingRestriction;
    }
    /**
     * Set AdvanceBookingRestriction value
     * @param \OtaInterface\Otaconnect\StructType\AdvanceBookingRestriction $advanceBookingRestriction
     * @return \OtaInterface\Otaconnect\StructType\RoomRate
     */
    public function setAdvanceBookingRestriction(\OtaInterface\Otaconnect\StructType\AdvanceBookingRestriction $advanceBookingRestriction = null)
    {
        $this->AdvanceBookingRestriction = $advanceBookingRestriction;
        return $this;
    }
    /**
     * Get Restrictions value
     * @return \OtaInterface\Otaconnect\StructType\Restrictions|null
     */
    public function getRestrictions()
    {
        return $this->Restrictions;
    }
    /**
     * Set Restrictions value
     * @param \OtaInterface\Otaconnect\StructType\Restrictions $restrictions
     * @return \OtaInterface\Otaconnect\StructType\RoomRate
     */
    public function setRestrictions(\OtaInterface\Otaconnect\StructType\Restrictions $restrictions = null)
    {
        $this->Restrictions = $restrictions;
        return $this;
    }
    /**
     * Get ServiceRPHs value
     * @return mixed|null
     */
    public function getServiceRPHs()
    {
        return $this->ServiceRPHs;
    }
    /**
     * Set ServiceRPHs value
     * @param mixed $serviceRPHs
     * @return \OtaInterface\Otaconnect\StructType\RoomRate
     */
    public function setServiceRPHs($serviceRPHs = null)
    {
        $this->ServiceRPHs = $serviceRPHs;
        return $this;
    }
    /**
     * Get GuestCounts value
     * @return \OtaInterface\Otaconnect\StructType\GuestCounts|null
     */
    public function getGuestCounts()
    {
        return $this->GuestCounts;
    }
    /**
     * Set GuestCounts value
     * @param \OtaInterface\Otaconnect\StructType\GuestCounts $guestCounts
     * @return \OtaInterface\Otaconnect\StructType\RoomRate
     */
    public function setGuestCounts(\OtaInterface\Otaconnect\StructType\GuestCounts $guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RoomRate
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
