<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Guests StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Guest.
 * @subpackage Structs
 */
class Guests extends AbstractStructBase
{
    /**
     * The Guest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\Guest[]
     */
    public $Guest;
    /**
     * Constructor method for Guests
     * @uses Guests::setGuest()
     * @param \OtaInterface\Otaconnect\StructType\Guest[] $guest
     */
    public function __construct(array $guest = array())
    {
        $this
            ->setGuest($guest);
    }
    /**
     * Get Guest value
     * @return \OtaInterface\Otaconnect\StructType\Guest[]|null
     */
    public function getGuest()
    {
        return $this->Guest;
    }
    /**
     * Set Guest value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Guest[] $guest
     * @return \OtaInterface\Otaconnect\StructType\Guests
     */
    public function setGuest(array $guest = array())
    {
        foreach ($guest as $guestsGuestItem) {
            // validation for constraint: itemType
            if (!$guestsGuestItem instanceof \OtaInterface\Otaconnect\StructType\Guest) {
                throw new \InvalidArgumentException(sprintf('The Guest property can only contain items of \OtaInterface\Otaconnect\StructType\Guest, "%s" given', is_object($guestsGuestItem) ? get_class($guestsGuestItem) : gettype($guestsGuestItem)), __LINE__);
            }
        }
        $this->Guest = $guest;
        return $this;
    }
    /**
     * Add item to Guest value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Guest $item
     * @return \OtaInterface\Otaconnect\StructType\Guests
     */
    public function addToGuest(\OtaInterface\Otaconnect\StructType\Guest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Guest) {
            throw new \InvalidArgumentException(sprintf('The Guest property can only contain items of \OtaInterface\Otaconnect\StructType\Guest, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Guest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Guests
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
