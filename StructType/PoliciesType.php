<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PoliciesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the policies of the hotel, such as the type of payments, or whether children or pets are accepted.
 * @subpackage Structs
 */
class PoliciesType extends AbstractStructBase
{
    /**
     * The Policy
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\Policy[]
     */
    public $Policy;
    /**
     * Constructor method for PoliciesType
     * @uses PoliciesType::setPolicy()
     * @param \OtaInterface\Otaconnect\StructType\Policy[] $policy
     */
    public function __construct(array $policy = array())
    {
        $this
            ->setPolicy($policy);
    }
    /**
     * Get Policy value
     * @return \OtaInterface\Otaconnect\StructType\Policy[]|null
     */
    public function getPolicy()
    {
        return $this->Policy;
    }
    /**
     * Set Policy value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Policy[] $policy
     * @return \OtaInterface\Otaconnect\StructType\PoliciesType
     */
    public function setPolicy(array $policy = array())
    {
        foreach ($policy as $policiesTypePolicyItem) {
            // validation for constraint: itemType
            if (!$policiesTypePolicyItem instanceof \OtaInterface\Otaconnect\StructType\Policy) {
                throw new \InvalidArgumentException(sprintf('The Policy property can only contain items of \OtaInterface\Otaconnect\StructType\Policy, "%s" given', is_object($policiesTypePolicyItem) ? get_class($policiesTypePolicyItem) : gettype($policiesTypePolicyItem)), __LINE__);
            }
        }
        $this->Policy = $policy;
        return $this;
    }
    /**
     * Add item to Policy value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Policy $item
     * @return \OtaInterface\Otaconnect\StructType\PoliciesType
     */
    public function addToPolicy(\OtaInterface\Otaconnect\StructType\Policy $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Policy) {
            throw new \InvalidArgumentException(sprintf('The Policy property can only contain items of \OtaInterface\Otaconnect\StructType\Policy, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Policy[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PoliciesType
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
