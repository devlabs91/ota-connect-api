<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PetsPolicies StructType
 * @subpackage Structs
 */
class PetsPolicies extends AbstractStructBase
{
    /**
     * The PetsPolicy
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PetsPolicy[]
     */
    public $PetsPolicy;
    /**
     * The PetsAllowedCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PetsAllowedCode;
    /**
     * Constructor method for PetsPolicies
     * @uses PetsPolicies::setPetsPolicy()
     * @uses PetsPolicies::setPetsAllowedCode()
     * @param \OtaInterface\Otaconnect\StructType\PetsPolicy[] $petsPolicy
     * @param string $petsAllowedCode
     */
    public function __construct(array $petsPolicy = array(), $petsAllowedCode = null)
    {
        $this
            ->setPetsPolicy($petsPolicy)
            ->setPetsAllowedCode($petsAllowedCode);
    }
    /**
     * Get PetsPolicy value
     * @return \OtaInterface\Otaconnect\StructType\PetsPolicy[]|null
     */
    public function getPetsPolicy()
    {
        return $this->PetsPolicy;
    }
    /**
     * Set PetsPolicy value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PetsPolicy[] $petsPolicy
     * @return \OtaInterface\Otaconnect\StructType\PetsPolicies
     */
    public function setPetsPolicy(array $petsPolicy = array())
    {
        foreach ($petsPolicy as $petsPoliciesPetsPolicyItem) {
            // validation for constraint: itemType
            if (!$petsPoliciesPetsPolicyItem instanceof \OtaInterface\Otaconnect\StructType\PetsPolicy) {
                throw new \InvalidArgumentException(sprintf('The PetsPolicy property can only contain items of \OtaInterface\Otaconnect\StructType\PetsPolicy, "%s" given', is_object($petsPoliciesPetsPolicyItem) ? get_class($petsPoliciesPetsPolicyItem) : gettype($petsPoliciesPetsPolicyItem)), __LINE__);
            }
        }
        $this->PetsPolicy = $petsPolicy;
        return $this;
    }
    /**
     * Add item to PetsPolicy value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PetsPolicy $item
     * @return \OtaInterface\Otaconnect\StructType\PetsPolicies
     */
    public function addToPetsPolicy(\OtaInterface\Otaconnect\StructType\PetsPolicy $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\PetsPolicy) {
            throw new \InvalidArgumentException(sprintf('The PetsPolicy property can only contain items of \OtaInterface\Otaconnect\StructType\PetsPolicy, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PetsPolicy[] = $item;
        return $this;
    }
    /**
     * Get PetsAllowedCode value
     * @return string|null
     */
    public function getPetsAllowedCode()
    {
        return $this->PetsAllowedCode;
    }
    /**
     * Set PetsAllowedCode value
     * @param string $petsAllowedCode
     * @return \OtaInterface\Otaconnect\StructType\PetsPolicies
     */
    public function setPetsAllowedCode($petsAllowedCode = null)
    {
        // validation for constraint: string
        if (!is_null($petsAllowedCode) && !is_string($petsAllowedCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($petsAllowedCode)), __LINE__);
        }
        $this->PetsAllowedCode = $petsAllowedCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PetsPolicies
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
