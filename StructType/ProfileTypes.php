<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileTypes StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of profile types.
 * @subpackage Structs
 */
class ProfileTypes extends AbstractStructBase
{
    /**
     * The ProfileType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\ProfileType[]
     */
    public $ProfileType;
    /**
     * Constructor method for ProfileTypes
     * @uses ProfileTypes::setProfileType()
     * @param \OtaInterface\Otaconnect\StructType\ProfileType[] $profileType
     */
    public function __construct(array $profileType = array())
    {
        $this
            ->setProfileType($profileType);
    }
    /**
     * Get ProfileType value
     * @return \OtaInterface\Otaconnect\StructType\ProfileType[]|null
     */
    public function getProfileType()
    {
        return $this->ProfileType;
    }
    /**
     * Set ProfileType value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ProfileType[] $profileType
     * @return \OtaInterface\Otaconnect\StructType\ProfileTypes
     */
    public function setProfileType(array $profileType = array())
    {
        foreach ($profileType as $profileTypesProfileTypeItem) {
            // validation for constraint: itemType
            if (!$profileTypesProfileTypeItem instanceof \OtaInterface\Otaconnect\StructType\ProfileType) {
                throw new \InvalidArgumentException(sprintf('The ProfileType property can only contain items of \OtaInterface\Otaconnect\StructType\ProfileType, "%s" given', is_object($profileTypesProfileTypeItem) ? get_class($profileTypesProfileTypeItem) : gettype($profileTypesProfileTypeItem)), __LINE__);
            }
        }
        $this->ProfileType = $profileType;
        return $this;
    }
    /**
     * Add item to ProfileType value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ProfileType $item
     * @return \OtaInterface\Otaconnect\StructType\ProfileTypes
     */
    public function addToProfileType(\OtaInterface\Otaconnect\StructType\ProfileType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\ProfileType) {
            throw new \InvalidArgumentException(sprintf('The ProfileType property can only contain items of \OtaInterface\Otaconnect\StructType\ProfileType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProfileType[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\ProfileTypes
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
