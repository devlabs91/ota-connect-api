<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyInfoCodes StructType
 * @subpackage Structs
 */
class PolicyInfoCodes extends AbstractStructBase
{
    /**
     * The PolicyInfoCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\PolicyInfoCode[]
     */
    public $PolicyInfoCode;
    /**
     * Constructor method for PolicyInfoCodes
     * @uses PolicyInfoCodes::setPolicyInfoCode()
     * @param \OtaInterface\Otaconnect\StructType\PolicyInfoCode[] $policyInfoCode
     */
    public function __construct(array $policyInfoCode = array())
    {
        $this
            ->setPolicyInfoCode($policyInfoCode);
    }
    /**
     * Get PolicyInfoCode value
     * @return \OtaInterface\Otaconnect\StructType\PolicyInfoCode[]|null
     */
    public function getPolicyInfoCode()
    {
        return $this->PolicyInfoCode;
    }
    /**
     * Set PolicyInfoCode value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PolicyInfoCode[] $policyInfoCode
     * @return \OtaInterface\Otaconnect\StructType\PolicyInfoCodes
     */
    public function setPolicyInfoCode(array $policyInfoCode = array())
    {
        foreach ($policyInfoCode as $policyInfoCodesPolicyInfoCodeItem) {
            // validation for constraint: itemType
            if (!$policyInfoCodesPolicyInfoCodeItem instanceof \OtaInterface\Otaconnect\StructType\PolicyInfoCode) {
                throw new \InvalidArgumentException(sprintf('The PolicyInfoCode property can only contain items of \OtaInterface\Otaconnect\StructType\PolicyInfoCode, "%s" given', is_object($policyInfoCodesPolicyInfoCodeItem) ? get_class($policyInfoCodesPolicyInfoCodeItem) : gettype($policyInfoCodesPolicyInfoCodeItem)), __LINE__);
            }
        }
        $this->PolicyInfoCode = $policyInfoCode;
        return $this;
    }
    /**
     * Add item to PolicyInfoCode value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PolicyInfoCode $item
     * @return \OtaInterface\Otaconnect\StructType\PolicyInfoCodes
     */
    public function addToPolicyInfoCode(\OtaInterface\Otaconnect\StructType\PolicyInfoCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\PolicyInfoCode) {
            throw new \InvalidArgumentException(sprintf('The PolicyInfoCode property can only contain items of \OtaInterface\Otaconnect\StructType\PolicyInfoCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PolicyInfoCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PolicyInfoCodes
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
