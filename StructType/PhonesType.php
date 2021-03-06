<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhonesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides detailed phone information.
 * @subpackage Structs
 */
class PhonesType extends AbstractStructBase
{
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\Phone[]
     */
    public $Phone;
    /**
     * Constructor method for PhonesType
     * @uses PhonesType::setPhone()
     * @param \OtaInterface\Otaconnect\StructType\Phone[] $phone
     */
    public function __construct(array $phone = array())
    {
        $this
            ->setPhone($phone);
    }
    /**
     * Get Phone value
     * @return \OtaInterface\Otaconnect\StructType\Phone[]|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Phone[] $phone
     * @return \OtaInterface\Otaconnect\StructType\PhonesType
     */
    public function setPhone(array $phone = array())
    {
        foreach ($phone as $phonesTypePhoneItem) {
            // validation for constraint: itemType
            if (!$phonesTypePhoneItem instanceof \OtaInterface\Otaconnect\StructType\Phone) {
                throw new \InvalidArgumentException(sprintf('The Phone property can only contain items of \OtaInterface\Otaconnect\StructType\Phone, "%s" given', is_object($phonesTypePhoneItem) ? get_class($phonesTypePhoneItem) : gettype($phonesTypePhoneItem)), __LINE__);
            }
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Add item to Phone value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Phone $item
     * @return \OtaInterface\Otaconnect\StructType\PhonesType
     */
    public function addToPhone(\OtaInterface\Otaconnect\StructType\Phone $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Phone) {
            throw new \InvalidArgumentException(sprintf('The Phone property can only contain items of \OtaInterface\Otaconnect\StructType\Phone, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Phone[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PhonesType
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
