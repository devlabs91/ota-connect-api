<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRoomListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the details of a rooming list.
 * @subpackage Structs
 */
class HotelRoomListType extends AbstractStructBase
{
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The unique indicator for the group rooming list or tour operator booking reference.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The Guests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Guests
     */
    public $Guests;
    /**
     * The MasterContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MasterContact
     */
    public $MasterContact;
    /**
     * The MasterAccount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MasterAccount
     */
    public $MasterAccount;
    /**
     * The RoomStays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RoomStays
     */
    public $RoomStays;
    /**
     * The Event
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Event
     */
    public $Event;
    /**
     * The GroupBlockCode
     * Meta informations extracted from the WSDL
     * - documentation: The code that identifies which group within a specific hotel for which this room list has been provided.
     * - use: optional
     * @var string
     */
    public $GroupBlockCode;
    /**
     * The CreationDate
     * Meta informations extracted from the WSDL
     * - documentation: Date this room list was initially created.
     * - use: optional
     * @var string
     */
    public $CreationDate;
    /**
     * Constructor method for HotelRoomListType
     * @uses HotelRoomListType::setUniqueID()
     * @uses HotelRoomListType::setGuests()
     * @uses HotelRoomListType::setMasterContact()
     * @uses HotelRoomListType::setMasterAccount()
     * @uses HotelRoomListType::setRoomStays()
     * @uses HotelRoomListType::setEvent()
     * @uses HotelRoomListType::setGroupBlockCode()
     * @uses HotelRoomListType::setCreationDate()
     * @param mixed $uniqueID
     * @param \OtaInterface\Otaconnect\StructType\Guests $guests
     * @param \OtaInterface\Otaconnect\StructType\MasterContact $masterContact
     * @param \OtaInterface\Otaconnect\StructType\MasterAccount $masterAccount
     * @param \OtaInterface\Otaconnect\StructType\RoomStays $roomStays
     * @param \OtaInterface\Otaconnect\StructType\Event $event
     * @param string $groupBlockCode
     * @param string $creationDate
     */
    public function __construct($uniqueID = null, \OtaInterface\Otaconnect\StructType\Guests $guests = null, \OtaInterface\Otaconnect\StructType\MasterContact $masterContact = null, \OtaInterface\Otaconnect\StructType\MasterAccount $masterAccount = null, \OtaInterface\Otaconnect\StructType\RoomStays $roomStays = null, \OtaInterface\Otaconnect\StructType\Event $event = null, $groupBlockCode = null, $creationDate = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setGuests($guests)
            ->setMasterContact($masterContact)
            ->setMasterAccount($masterAccount)
            ->setRoomStays($roomStays)
            ->setEvent($event)
            ->setGroupBlockCode($groupBlockCode)
            ->setCreationDate($creationDate);
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \OtaInterface\Otaconnect\StructType\HotelRoomListType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get Guests value
     * @return \OtaInterface\Otaconnect\StructType\Guests|null
     */
    public function getGuests()
    {
        return $this->Guests;
    }
    /**
     * Set Guests value
     * @param \OtaInterface\Otaconnect\StructType\Guests $guests
     * @return \OtaInterface\Otaconnect\StructType\HotelRoomListType
     */
    public function setGuests(\OtaInterface\Otaconnect\StructType\Guests $guests = null)
    {
        $this->Guests = $guests;
        return $this;
    }
    /**
     * Get MasterContact value
     * @return \OtaInterface\Otaconnect\StructType\MasterContact|null
     */
    public function getMasterContact()
    {
        return $this->MasterContact;
    }
    /**
     * Set MasterContact value
     * @param \OtaInterface\Otaconnect\StructType\MasterContact $masterContact
     * @return \OtaInterface\Otaconnect\StructType\HotelRoomListType
     */
    public function setMasterContact(\OtaInterface\Otaconnect\StructType\MasterContact $masterContact = null)
    {
        $this->MasterContact = $masterContact;
        return $this;
    }
    /**
     * Get MasterAccount value
     * @return \OtaInterface\Otaconnect\StructType\MasterAccount|null
     */
    public function getMasterAccount()
    {
        return $this->MasterAccount;
    }
    /**
     * Set MasterAccount value
     * @param \OtaInterface\Otaconnect\StructType\MasterAccount $masterAccount
     * @return \OtaInterface\Otaconnect\StructType\HotelRoomListType
     */
    public function setMasterAccount(\OtaInterface\Otaconnect\StructType\MasterAccount $masterAccount = null)
    {
        $this->MasterAccount = $masterAccount;
        return $this;
    }
    /**
     * Get RoomStays value
     * @return \OtaInterface\Otaconnect\StructType\RoomStays|null
     */
    public function getRoomStays()
    {
        return $this->RoomStays;
    }
    /**
     * Set RoomStays value
     * @param \OtaInterface\Otaconnect\StructType\RoomStays $roomStays
     * @return \OtaInterface\Otaconnect\StructType\HotelRoomListType
     */
    public function setRoomStays(\OtaInterface\Otaconnect\StructType\RoomStays $roomStays = null)
    {
        $this->RoomStays = $roomStays;
        return $this;
    }
    /**
     * Get Event value
     * @return \OtaInterface\Otaconnect\StructType\Event|null
     */
    public function getEvent()
    {
        return $this->Event;
    }
    /**
     * Set Event value
     * @param \OtaInterface\Otaconnect\StructType\Event $event
     * @return \OtaInterface\Otaconnect\StructType\HotelRoomListType
     */
    public function setEvent(\OtaInterface\Otaconnect\StructType\Event $event = null)
    {
        $this->Event = $event;
        return $this;
    }
    /**
     * Get GroupBlockCode value
     * @return string|null
     */
    public function getGroupBlockCode()
    {
        return $this->GroupBlockCode;
    }
    /**
     * Set GroupBlockCode value
     * @param string $groupBlockCode
     * @return \OtaInterface\Otaconnect\StructType\HotelRoomListType
     */
    public function setGroupBlockCode($groupBlockCode = null)
    {
        // validation for constraint: string
        if (!is_null($groupBlockCode) && !is_string($groupBlockCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupBlockCode)), __LINE__);
        }
        $this->GroupBlockCode = $groupBlockCode;
        return $this;
    }
    /**
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \OtaInterface\Otaconnect\StructType\HotelRoomListType
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\HotelRoomListType
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
