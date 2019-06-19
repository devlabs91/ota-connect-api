<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EffectivePeriods StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of effective periods.
 * @subpackage Structs
 */
class EffectivePeriods extends AbstractStructBase
{
    /**
     * The EffectivePeriod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\EffectivePeriod[]
     */
    public $EffectivePeriod;
    /**
     * Constructor method for EffectivePeriods
     * @uses EffectivePeriods::setEffectivePeriod()
     * @param \OtaInterface\Otaconnect\StructType\EffectivePeriod[] $effectivePeriod
     */
    public function __construct(array $effectivePeriod = array())
    {
        $this
            ->setEffectivePeriod($effectivePeriod);
    }
    /**
     * Get EffectivePeriod value
     * @return \OtaInterface\Otaconnect\StructType\EffectivePeriod[]|null
     */
    public function getEffectivePeriod()
    {
        return $this->EffectivePeriod;
    }
    /**
     * Set EffectivePeriod value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\EffectivePeriod[] $effectivePeriod
     * @return \OtaInterface\Otaconnect\StructType\EffectivePeriods
     */
    public function setEffectivePeriod(array $effectivePeriod = array())
    {
        foreach ($effectivePeriod as $effectivePeriodsEffectivePeriodItem) {
            // validation for constraint: itemType
            if (!$effectivePeriodsEffectivePeriodItem instanceof \OtaInterface\Otaconnect\StructType\EffectivePeriod) {
                throw new \InvalidArgumentException(sprintf('The EffectivePeriod property can only contain items of \OtaInterface\Otaconnect\StructType\EffectivePeriod, "%s" given', is_object($effectivePeriodsEffectivePeriodItem) ? get_class($effectivePeriodsEffectivePeriodItem) : gettype($effectivePeriodsEffectivePeriodItem)), __LINE__);
            }
        }
        $this->EffectivePeriod = $effectivePeriod;
        return $this;
    }
    /**
     * Add item to EffectivePeriod value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\EffectivePeriod $item
     * @return \OtaInterface\Otaconnect\StructType\EffectivePeriods
     */
    public function addToEffectivePeriod(\OtaInterface\Otaconnect\StructType\EffectivePeriod $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\EffectivePeriod) {
            throw new \InvalidArgumentException(sprintf('The EffectivePeriod property can only contain items of \OtaInterface\Otaconnect\StructType\EffectivePeriod, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EffectivePeriod[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\EffectivePeriods
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
