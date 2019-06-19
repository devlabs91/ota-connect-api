<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationCodes StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collections of strings that identify the locations, such as regions or countries, etc., associated with this viewership record.
 * @subpackage Structs
 */
class LocationCodes extends AbstractStructBase
{
    /**
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\LocationCode[]
     */
    public $LocationCode;
    /**
     * The LocationCodesInclusive
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the collection of Location Codes is inclusive or exclusive. | Values: false=Exclusive, true=Inclusive.
     * - use: optional
     * @var bool
     */
    public $LocationCodesInclusive;
    /**
     * Constructor method for LocationCodes
     * @uses LocationCodes::setLocationCode()
     * @uses LocationCodes::setLocationCodesInclusive()
     * @param \OtaInterface\Otaconnect\StructType\LocationCode[] $locationCode
     * @param bool $locationCodesInclusive
     */
    public function __construct(array $locationCode = array(), $locationCodesInclusive = null)
    {
        $this
            ->setLocationCode($locationCode)
            ->setLocationCodesInclusive($locationCodesInclusive);
    }
    /**
     * Get LocationCode value
     * @return \OtaInterface\Otaconnect\StructType\LocationCode[]|null
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\LocationCode[] $locationCode
     * @return \OtaInterface\Otaconnect\StructType\LocationCodes
     */
    public function setLocationCode(array $locationCode = array())
    {
        foreach ($locationCode as $locationCodesLocationCodeItem) {
            // validation for constraint: itemType
            if (!$locationCodesLocationCodeItem instanceof \OtaInterface\Otaconnect\StructType\LocationCode) {
                throw new \InvalidArgumentException(sprintf('The LocationCode property can only contain items of \OtaInterface\Otaconnect\StructType\LocationCode, "%s" given', is_object($locationCodesLocationCodeItem) ? get_class($locationCodesLocationCodeItem) : gettype($locationCodesLocationCodeItem)), __LINE__);
            }
        }
        $this->LocationCode = $locationCode;
        return $this;
    }
    /**
     * Add item to LocationCode value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\LocationCode $item
     * @return \OtaInterface\Otaconnect\StructType\LocationCodes
     */
    public function addToLocationCode(\OtaInterface\Otaconnect\StructType\LocationCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\LocationCode) {
            throw new \InvalidArgumentException(sprintf('The LocationCode property can only contain items of \OtaInterface\Otaconnect\StructType\LocationCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LocationCode[] = $item;
        return $this;
    }
    /**
     * Get LocationCodesInclusive value
     * @return bool|null
     */
    public function getLocationCodesInclusive()
    {
        return $this->LocationCodesInclusive;
    }
    /**
     * Set LocationCodesInclusive value
     * @param bool $locationCodesInclusive
     * @return \OtaInterface\Otaconnect\StructType\LocationCodes
     */
    public function setLocationCodesInclusive($locationCodesInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($locationCodesInclusive) && !is_bool($locationCodesInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($locationCodesInclusive)), __LINE__);
        }
        $this->LocationCodesInclusive = $locationCodesInclusive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\LocationCodes
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
