<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The HotelAddress class defines the addresses at this hotel facility.
 * @subpackage Structs
 */
class AddressesType extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\Address[]
     */
    public $Address;
    /**
     * Constructor method for AddressesType
     * @uses AddressesType::setAddress()
     * @param \OtaInterface\Otaconnect\StructType\Address[] $address
     */
    public function __construct(array $address = array())
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * @return \OtaInterface\Otaconnect\StructType\Address[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Address[] $address
     * @return \OtaInterface\Otaconnect\StructType\AddressesType
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $addressesTypeAddressItem) {
            // validation for constraint: itemType
            if (!$addressesTypeAddressItem instanceof \OtaInterface\Otaconnect\StructType\Address) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \OtaInterface\Otaconnect\StructType\Address, "%s" given', is_object($addressesTypeAddressItem) ? get_class($addressesTypeAddressItem) : gettype($addressesTypeAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Address $item
     * @return \OtaInterface\Otaconnect\StructType\AddressesType
     */
    public function addToAddress(\OtaInterface\Otaconnect\StructType\Address $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Address) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \OtaInterface\Otaconnect\StructType\Address, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Address[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AddressesType
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
