<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rates StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of rate changes to be synchronized between systems.
 * @subpackage Structs
 */
class Rates extends AbstractStructBase
{
    /**
     * The Rate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\Rate[]
     */
    public $Rate;
    /**
     * Constructor method for Rates
     * @uses Rates::setRate()
     * @param \OtaInterface\Otaconnect\StructType\Rate[] $rate
     */
    public function __construct(array $rate = array())
    {
        $this
            ->setRate($rate);
    }
    /**
     * Get Rate value
     * @return \OtaInterface\Otaconnect\StructType\Rate[]|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Rate[] $rate
     * @return \OtaInterface\Otaconnect\StructType\Rates
     */
    public function setRate(array $rate = array())
    {
        foreach ($rate as $ratesRateItem) {
            // validation for constraint: itemType
            if (!$ratesRateItem instanceof \OtaInterface\Otaconnect\StructType\Rate) {
                throw new \InvalidArgumentException(sprintf('The Rate property can only contain items of \OtaInterface\Otaconnect\StructType\Rate, "%s" given', is_object($ratesRateItem) ? get_class($ratesRateItem) : gettype($ratesRateItem)), __LINE__);
            }
        }
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Add item to Rate value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Rate $item
     * @return \OtaInterface\Otaconnect\StructType\Rates
     */
    public function addToRate(\OtaInterface\Otaconnect\StructType\Rate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Rate) {
            throw new \InvalidArgumentException(sprintf('The Rate property can only contain items of \OtaInterface\Otaconnect\StructType\Rate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Rate[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Rates
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
