<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvBlockType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to define the details of an inventory block.
 * @subpackage Structs
 */
class InvBlockType extends AbstractStructBase
{
    /**
     * The HotelRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\HotelRef
     */
    public $HotelRef;
    /**
     * The InvBlockDates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\InvBlockDates
     */
    public $InvBlockDates;
    /**
     * The RoomTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RoomTypes
     */
    public $RoomTypes;
    /**
     * The MethodInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MethodInfo
     */
    public $MethodInfo;
    /**
     * The BlockDescriptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\BlockDescriptions
     */
    public $BlockDescriptions;
    /**
     * The Contacts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Contacts
     */
    public $Contacts;
    /**
     * The DestinationSystemCodes
     * Meta informations extracted from the WSDL
     * - documentation: A collection of destination system codes. These are systems for which this inventory block is targeted.
     * - minOccurs: 0
     * @var mixed
     */
    public $DestinationSystemCodes;
    /**
     * Constructor method for InvBlockType
     * @uses InvBlockType::setHotelRef()
     * @uses InvBlockType::setInvBlockDates()
     * @uses InvBlockType::setRoomTypes()
     * @uses InvBlockType::setMethodInfo()
     * @uses InvBlockType::setBlockDescriptions()
     * @uses InvBlockType::setContacts()
     * @uses InvBlockType::setDestinationSystemCodes()
     * @param \OtaInterface\Otaconnect\StructType\HotelRef $hotelRef
     * @param \OtaInterface\Otaconnect\StructType\InvBlockDates $invBlockDates
     * @param \OtaInterface\Otaconnect\StructType\RoomTypes $roomTypes
     * @param \OtaInterface\Otaconnect\StructType\MethodInfo $methodInfo
     * @param \OtaInterface\Otaconnect\StructType\BlockDescriptions $blockDescriptions
     * @param \OtaInterface\Otaconnect\StructType\Contacts $contacts
     * @param mixed $destinationSystemCodes
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\HotelRef $hotelRef = null, \OtaInterface\Otaconnect\StructType\InvBlockDates $invBlockDates = null, \OtaInterface\Otaconnect\StructType\RoomTypes $roomTypes = null, \OtaInterface\Otaconnect\StructType\MethodInfo $methodInfo = null, \OtaInterface\Otaconnect\StructType\BlockDescriptions $blockDescriptions = null, \OtaInterface\Otaconnect\StructType\Contacts $contacts = null, $destinationSystemCodes = null)
    {
        $this
            ->setHotelRef($hotelRef)
            ->setInvBlockDates($invBlockDates)
            ->setRoomTypes($roomTypes)
            ->setMethodInfo($methodInfo)
            ->setBlockDescriptions($blockDescriptions)
            ->setContacts($contacts)
            ->setDestinationSystemCodes($destinationSystemCodes);
    }
    /**
     * Get HotelRef value
     * @return \OtaInterface\Otaconnect\StructType\HotelRef|null
     */
    public function getHotelRef()
    {
        return $this->HotelRef;
    }
    /**
     * Set HotelRef value
     * @param \OtaInterface\Otaconnect\StructType\HotelRef $hotelRef
     * @return \OtaInterface\Otaconnect\StructType\InvBlockType
     */
    public function setHotelRef(\OtaInterface\Otaconnect\StructType\HotelRef $hotelRef = null)
    {
        $this->HotelRef = $hotelRef;
        return $this;
    }
    /**
     * Get InvBlockDates value
     * @return \OtaInterface\Otaconnect\StructType\InvBlockDates|null
     */
    public function getInvBlockDates()
    {
        return $this->InvBlockDates;
    }
    /**
     * Set InvBlockDates value
     * @param \OtaInterface\Otaconnect\StructType\InvBlockDates $invBlockDates
     * @return \OtaInterface\Otaconnect\StructType\InvBlockType
     */
    public function setInvBlockDates(\OtaInterface\Otaconnect\StructType\InvBlockDates $invBlockDates = null)
    {
        $this->InvBlockDates = $invBlockDates;
        return $this;
    }
    /**
     * Get RoomTypes value
     * @return \OtaInterface\Otaconnect\StructType\RoomTypes|null
     */
    public function getRoomTypes()
    {
        return $this->RoomTypes;
    }
    /**
     * Set RoomTypes value
     * @param \OtaInterface\Otaconnect\StructType\RoomTypes $roomTypes
     * @return \OtaInterface\Otaconnect\StructType\InvBlockType
     */
    public function setRoomTypes(\OtaInterface\Otaconnect\StructType\RoomTypes $roomTypes = null)
    {
        $this->RoomTypes = $roomTypes;
        return $this;
    }
    /**
     * Get MethodInfo value
     * @return \OtaInterface\Otaconnect\StructType\MethodInfo|null
     */
    public function getMethodInfo()
    {
        return $this->MethodInfo;
    }
    /**
     * Set MethodInfo value
     * @param \OtaInterface\Otaconnect\StructType\MethodInfo $methodInfo
     * @return \OtaInterface\Otaconnect\StructType\InvBlockType
     */
    public function setMethodInfo(\OtaInterface\Otaconnect\StructType\MethodInfo $methodInfo = null)
    {
        $this->MethodInfo = $methodInfo;
        return $this;
    }
    /**
     * Get BlockDescriptions value
     * @return \OtaInterface\Otaconnect\StructType\BlockDescriptions|null
     */
    public function getBlockDescriptions()
    {
        return $this->BlockDescriptions;
    }
    /**
     * Set BlockDescriptions value
     * @param \OtaInterface\Otaconnect\StructType\BlockDescriptions $blockDescriptions
     * @return \OtaInterface\Otaconnect\StructType\InvBlockType
     */
    public function setBlockDescriptions(\OtaInterface\Otaconnect\StructType\BlockDescriptions $blockDescriptions = null)
    {
        $this->BlockDescriptions = $blockDescriptions;
        return $this;
    }
    /**
     * Get Contacts value
     * @return \OtaInterface\Otaconnect\StructType\Contacts|null
     */
    public function getContacts()
    {
        return $this->Contacts;
    }
    /**
     * Set Contacts value
     * @param \OtaInterface\Otaconnect\StructType\Contacts $contacts
     * @return \OtaInterface\Otaconnect\StructType\InvBlockType
     */
    public function setContacts(\OtaInterface\Otaconnect\StructType\Contacts $contacts = null)
    {
        $this->Contacts = $contacts;
        return $this;
    }
    /**
     * Get DestinationSystemCodes value
     * @return mixed|null
     */
    public function getDestinationSystemCodes()
    {
        return $this->DestinationSystemCodes;
    }
    /**
     * Set DestinationSystemCodes value
     * @param mixed $destinationSystemCodes
     * @return \OtaInterface\Otaconnect\StructType\InvBlockType
     */
    public function setDestinationSystemCodes($destinationSystemCodes = null)
    {
        $this->DestinationSystemCodes = $destinationSystemCodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\InvBlockType
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
