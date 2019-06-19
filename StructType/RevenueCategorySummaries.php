<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueCategorySummaries StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of RevenueCategorySummary elements. Used if revenue values reported.
 * @subpackage Structs
 */
class RevenueCategorySummaries extends AbstractStructBase
{
    /**
     * The RevenueCategorySummary
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\RevenueCategorySummary[]
     */
    public $RevenueCategorySummary;
    /**
     * Constructor method for RevenueCategorySummaries
     * @uses RevenueCategorySummaries::setRevenueCategorySummary()
     * @param \OtaInterface\Otaconnect\StructType\RevenueCategorySummary[] $revenueCategorySummary
     */
    public function __construct(array $revenueCategorySummary = array())
    {
        $this
            ->setRevenueCategorySummary($revenueCategorySummary);
    }
    /**
     * Get RevenueCategorySummary value
     * @return \OtaInterface\Otaconnect\StructType\RevenueCategorySummary[]|null
     */
    public function getRevenueCategorySummary()
    {
        return $this->RevenueCategorySummary;
    }
    /**
     * Set RevenueCategorySummary value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RevenueCategorySummary[] $revenueCategorySummary
     * @return \OtaInterface\Otaconnect\StructType\RevenueCategorySummaries
     */
    public function setRevenueCategorySummary(array $revenueCategorySummary = array())
    {
        foreach ($revenueCategorySummary as $revenueCategorySummariesRevenueCategorySummaryItem) {
            // validation for constraint: itemType
            if (!$revenueCategorySummariesRevenueCategorySummaryItem instanceof \OtaInterface\Otaconnect\StructType\RevenueCategorySummary) {
                throw new \InvalidArgumentException(sprintf('The RevenueCategorySummary property can only contain items of \OtaInterface\Otaconnect\StructType\RevenueCategorySummary, "%s" given', is_object($revenueCategorySummariesRevenueCategorySummaryItem) ? get_class($revenueCategorySummariesRevenueCategorySummaryItem) : gettype($revenueCategorySummariesRevenueCategorySummaryItem)), __LINE__);
            }
        }
        $this->RevenueCategorySummary = $revenueCategorySummary;
        return $this;
    }
    /**
     * Add item to RevenueCategorySummary value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RevenueCategorySummary $item
     * @return \OtaInterface\Otaconnect\StructType\RevenueCategorySummaries
     */
    public function addToRevenueCategorySummary(\OtaInterface\Otaconnect\StructType\RevenueCategorySummary $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\RevenueCategorySummary) {
            throw new \InvalidArgumentException(sprintf('The RevenueCategorySummary property can only contain items of \OtaInterface\Otaconnect\StructType\RevenueCategorySummary, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RevenueCategorySummary[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RevenueCategorySummaries
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
