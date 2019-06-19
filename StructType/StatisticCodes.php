<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatisticCodes StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of StatisticCode elements. Used if data is partitioned/aggregated.
 * @subpackage Structs
 */
class StatisticCodes extends AbstractStructBase
{
    /**
     * The StatisticCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * @var \OtaInterface\Otaconnect\StructType\StatisticCode[]
     */
    public $StatisticCode;
    /**
     * Constructor method for StatisticCodes
     * @uses StatisticCodes::setStatisticCode()
     * @param \OtaInterface\Otaconnect\StructType\StatisticCode[] $statisticCode
     */
    public function __construct(array $statisticCode = array())
    {
        $this
            ->setStatisticCode($statisticCode);
    }
    /**
     * Get StatisticCode value
     * @return \OtaInterface\Otaconnect\StructType\StatisticCode[]|null
     */
    public function getStatisticCode()
    {
        return $this->StatisticCode;
    }
    /**
     * Set StatisticCode value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\StatisticCode[] $statisticCode
     * @return \OtaInterface\Otaconnect\StructType\StatisticCodes
     */
    public function setStatisticCode(array $statisticCode = array())
    {
        foreach ($statisticCode as $statisticCodesStatisticCodeItem) {
            // validation for constraint: itemType
            if (!$statisticCodesStatisticCodeItem instanceof \OtaInterface\Otaconnect\StructType\StatisticCode) {
                throw new \InvalidArgumentException(sprintf('The StatisticCode property can only contain items of \OtaInterface\Otaconnect\StructType\StatisticCode, "%s" given', is_object($statisticCodesStatisticCodeItem) ? get_class($statisticCodesStatisticCodeItem) : gettype($statisticCodesStatisticCodeItem)), __LINE__);
            }
        }
        $this->StatisticCode = $statisticCode;
        return $this;
    }
    /**
     * Add item to StatisticCode value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\StatisticCode $item
     * @return \OtaInterface\Otaconnect\StructType\StatisticCodes
     */
    public function addToStatisticCode(\OtaInterface\Otaconnect\StructType\StatisticCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\StatisticCode) {
            throw new \InvalidArgumentException(sprintf('The StatisticCode property can only contain items of \OtaInterface\Otaconnect\StructType\StatisticCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StatisticCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\StatisticCodes
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
