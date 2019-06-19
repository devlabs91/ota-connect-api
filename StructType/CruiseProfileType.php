<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseProfileType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to specify the data requirements.
 * @subpackage Structs
 */
class CruiseProfileType extends AbstractStructBase
{
    /**
     * The ProfileTypeIdentifier
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ProfileTypeIdentifier;
    /**
     * The CruiseProfile
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\CruiseProfile[]
     */
    public $CruiseProfile;
    /**
     * Constructor method for CruiseProfileType
     * @uses CruiseProfileType::setProfileTypeIdentifier()
     * @uses CruiseProfileType::setCruiseProfile()
     * @param string $profileTypeIdentifier
     * @param \OtaInterface\Otaconnect\StructType\CruiseProfile[] $cruiseProfile
     */
    public function __construct($profileTypeIdentifier = null, array $cruiseProfile = array())
    {
        $this
            ->setProfileTypeIdentifier($profileTypeIdentifier)
            ->setCruiseProfile($cruiseProfile);
    }
    /**
     * Get ProfileTypeIdentifier value
     * @return string
     */
    public function getProfileTypeIdentifier()
    {
        return $this->ProfileTypeIdentifier;
    }
    /**
     * Set ProfileTypeIdentifier value
     * @param string $profileTypeIdentifier
     * @return \OtaInterface\Otaconnect\StructType\CruiseProfileType
     */
    public function setProfileTypeIdentifier($profileTypeIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($profileTypeIdentifier) && !is_string($profileTypeIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileTypeIdentifier)), __LINE__);
        }
        $this->ProfileTypeIdentifier = $profileTypeIdentifier;
        return $this;
    }
    /**
     * Get CruiseProfile value
     * @return \OtaInterface\Otaconnect\StructType\CruiseProfile[]|null
     */
    public function getCruiseProfile()
    {
        return $this->CruiseProfile;
    }
    /**
     * Set CruiseProfile value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CruiseProfile[] $cruiseProfile
     * @return \OtaInterface\Otaconnect\StructType\CruiseProfileType
     */
    public function setCruiseProfile(array $cruiseProfile = array())
    {
        foreach ($cruiseProfile as $cruiseProfileTypeCruiseProfileItem) {
            // validation for constraint: itemType
            if (!$cruiseProfileTypeCruiseProfileItem instanceof \OtaInterface\Otaconnect\StructType\CruiseProfile) {
                throw new \InvalidArgumentException(sprintf('The CruiseProfile property can only contain items of \OtaInterface\Otaconnect\StructType\CruiseProfile, "%s" given', is_object($cruiseProfileTypeCruiseProfileItem) ? get_class($cruiseProfileTypeCruiseProfileItem) : gettype($cruiseProfileTypeCruiseProfileItem)), __LINE__);
            }
        }
        $this->CruiseProfile = $cruiseProfile;
        return $this;
    }
    /**
     * Add item to CruiseProfile value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CruiseProfile $item
     * @return \OtaInterface\Otaconnect\StructType\CruiseProfileType
     */
    public function addToCruiseProfile(\OtaInterface\Otaconnect\StructType\CruiseProfile $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\CruiseProfile) {
            throw new \InvalidArgumentException(sprintf('The CruiseProfile property can only contain items of \OtaInterface\Otaconnect\StructType\CruiseProfile, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CruiseProfile[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\CruiseProfileType
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
