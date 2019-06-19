<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoverageFees StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of fees associated with this coverage, insurance or waiver. There may be multiple charges if the charge varies by vehicle type.
 * @subpackage Structs
 */
class CoverageFees extends AbstractStructBase
{
    /**
     * The CoverageFee
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\CoverageFee[]
     */
    public $CoverageFee;
    /**
     * Constructor method for CoverageFees
     * @uses CoverageFees::setCoverageFee()
     * @param \OtaInterface\Otaconnect\StructType\CoverageFee[] $coverageFee
     */
    public function __construct(array $coverageFee = array())
    {
        $this
            ->setCoverageFee($coverageFee);
    }
    /**
     * Get CoverageFee value
     * @return \OtaInterface\Otaconnect\StructType\CoverageFee[]|null
     */
    public function getCoverageFee()
    {
        return $this->CoverageFee;
    }
    /**
     * Set CoverageFee value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CoverageFee[] $coverageFee
     * @return \OtaInterface\Otaconnect\StructType\CoverageFees
     */
    public function setCoverageFee(array $coverageFee = array())
    {
        foreach ($coverageFee as $coverageFeesCoverageFeeItem) {
            // validation for constraint: itemType
            if (!$coverageFeesCoverageFeeItem instanceof \OtaInterface\Otaconnect\StructType\CoverageFee) {
                throw new \InvalidArgumentException(sprintf('The CoverageFee property can only contain items of \OtaInterface\Otaconnect\StructType\CoverageFee, "%s" given', is_object($coverageFeesCoverageFeeItem) ? get_class($coverageFeesCoverageFeeItem) : gettype($coverageFeesCoverageFeeItem)), __LINE__);
            }
        }
        $this->CoverageFee = $coverageFee;
        return $this;
    }
    /**
     * Add item to CoverageFee value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CoverageFee $item
     * @return \OtaInterface\Otaconnect\StructType\CoverageFees
     */
    public function addToCoverageFee(\OtaInterface\Otaconnect\StructType\CoverageFee $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\CoverageFee) {
            throw new \InvalidArgumentException(sprintf('The CoverageFee property can only contain items of \OtaInterface\Otaconnect\StructType\CoverageFee, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CoverageFee[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\CoverageFees
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
