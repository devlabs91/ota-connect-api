<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomShare StructType
 * Meta informations extracted from the WSDL
 * - documentation: Guests to share a room.
 * @subpackage Structs
 */
class RoomShare extends AbstractStructBase
{
    /**
     * The GuestRPHs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\GuestRPHs
     */
    public $GuestRPHs;
    /**
     * Constructor method for RoomShare
     * @uses RoomShare::setGuestRPHs()
     * @param \OtaInterface\Otaconnect\StructType\GuestRPHs $guestRPHs
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\GuestRPHs $guestRPHs = null)
    {
        $this
            ->setGuestRPHs($guestRPHs);
    }
    /**
     * Get GuestRPHs value
     * @return \OtaInterface\Otaconnect\StructType\GuestRPHs|null
     */
    public function getGuestRPHs()
    {
        return $this->GuestRPHs;
    }
    /**
     * Set GuestRPHs value
     * @param \OtaInterface\Otaconnect\StructType\GuestRPHs $guestRPHs
     * @return \OtaInterface\Otaconnect\StructType\RoomShare
     */
    public function setGuestRPHs(\OtaInterface\Otaconnect\StructType\GuestRPHs $guestRPHs = null)
    {
        $this->GuestRPHs = $guestRPHs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RoomShare
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
