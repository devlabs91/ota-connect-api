<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies an address preference. | Allows for control of the sharing of address preferences between parties.
 * @subpackage Structs
 */
class AddressPrefType extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: Defines a physical address.
     * @var mixed
     */
    public $Address;
    /**
     * Constructor method for AddressPrefType
     * @uses AddressPrefType::setAddress()
     * @param mixed $address
     */
    public function __construct($address = null)
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * @return mixed|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param mixed $address
     * @return \OtaInterface\Otaconnect\StructType\AddressPrefType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AddressPrefType
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
