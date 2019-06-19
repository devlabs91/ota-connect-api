<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SrvcInfoCodes StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of type of restaurant offered. | Collection of type of restaurant offered.
 * @subpackage Structs
 */
class SrvcInfoCodes extends AbstractStructBase
{
    /**
     * The SrvcInfoCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\SrvcInfoCode[]
     */
    public $SrvcInfoCode;
    /**
     * Constructor method for SrvcInfoCodes
     * @uses SrvcInfoCodes::setSrvcInfoCode()
     * @param \OtaInterface\Otaconnect\StructType\SrvcInfoCode[] $srvcInfoCode
     */
    public function __construct(array $srvcInfoCode = array())
    {
        $this
            ->setSrvcInfoCode($srvcInfoCode);
    }
    /**
     * Get SrvcInfoCode value
     * @return \OtaInterface\Otaconnect\StructType\SrvcInfoCode[]|null
     */
    public function getSrvcInfoCode()
    {
        return $this->SrvcInfoCode;
    }
    /**
     * Set SrvcInfoCode value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\SrvcInfoCode[] $srvcInfoCode
     * @return \OtaInterface\Otaconnect\StructType\SrvcInfoCodes
     */
    public function setSrvcInfoCode(array $srvcInfoCode = array())
    {
        foreach ($srvcInfoCode as $srvcInfoCodesSrvcInfoCodeItem) {
            // validation for constraint: itemType
            if (!$srvcInfoCodesSrvcInfoCodeItem instanceof \OtaInterface\Otaconnect\StructType\SrvcInfoCode) {
                throw new \InvalidArgumentException(sprintf('The SrvcInfoCode property can only contain items of \OtaInterface\Otaconnect\StructType\SrvcInfoCode, "%s" given', is_object($srvcInfoCodesSrvcInfoCodeItem) ? get_class($srvcInfoCodesSrvcInfoCodeItem) : gettype($srvcInfoCodesSrvcInfoCodeItem)), __LINE__);
            }
        }
        $this->SrvcInfoCode = $srvcInfoCode;
        return $this;
    }
    /**
     * Add item to SrvcInfoCode value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\SrvcInfoCode $item
     * @return \OtaInterface\Otaconnect\StructType\SrvcInfoCodes
     */
    public function addToSrvcInfoCode(\OtaInterface\Otaconnect\StructType\SrvcInfoCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\SrvcInfoCode) {
            throw new \InvalidArgumentException(sprintf('The SrvcInfoCode property can only contain items of \OtaInterface\Otaconnect\StructType\SrvcInfoCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SrvcInfoCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\SrvcInfoCodes
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
