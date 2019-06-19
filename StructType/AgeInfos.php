<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgeInfos StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of descriptions about the different requirements related to age of driver
 * @subpackage Structs
 */
class AgeInfos extends AbstractStructBase
{
    /**
     * The AgeInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\AgeInfo[]
     */
    public $AgeInfo;
    /**
     * Constructor method for AgeInfos
     * @uses AgeInfos::setAgeInfo()
     * @param \OtaInterface\Otaconnect\StructType\AgeInfo[] $ageInfo
     */
    public function __construct(array $ageInfo = array())
    {
        $this
            ->setAgeInfo($ageInfo);
    }
    /**
     * Get AgeInfo value
     * @return \OtaInterface\Otaconnect\StructType\AgeInfo[]|null
     */
    public function getAgeInfo()
    {
        return $this->AgeInfo;
    }
    /**
     * Set AgeInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AgeInfo[] $ageInfo
     * @return \OtaInterface\Otaconnect\StructType\AgeInfos
     */
    public function setAgeInfo(array $ageInfo = array())
    {
        foreach ($ageInfo as $ageInfosAgeInfoItem) {
            // validation for constraint: itemType
            if (!$ageInfosAgeInfoItem instanceof \OtaInterface\Otaconnect\StructType\AgeInfo) {
                throw new \InvalidArgumentException(sprintf('The AgeInfo property can only contain items of \OtaInterface\Otaconnect\StructType\AgeInfo, "%s" given', is_object($ageInfosAgeInfoItem) ? get_class($ageInfosAgeInfoItem) : gettype($ageInfosAgeInfoItem)), __LINE__);
            }
        }
        $this->AgeInfo = $ageInfo;
        return $this;
    }
    /**
     * Add item to AgeInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AgeInfo $item
     * @return \OtaInterface\Otaconnect\StructType\AgeInfos
     */
    public function addToAgeInfo(\OtaInterface\Otaconnect\StructType\AgeInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\AgeInfo) {
            throw new \InvalidArgumentException(sprintf('The AgeInfo property can only contain items of \OtaInterface\Otaconnect\StructType\AgeInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AgeInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AgeInfos
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
