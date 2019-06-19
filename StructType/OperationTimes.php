<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationTimes StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of OperationTimes.
 * @subpackage Structs
 */
class OperationTimes extends AbstractStructBase
{
    /**
     * The OperationTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 999
     * @var \OtaInterface\Otaconnect\StructType\OperationTime[]
     */
    public $OperationTime;
    /**
     * Constructor method for OperationTimes
     * @uses OperationTimes::setOperationTime()
     * @param \OtaInterface\Otaconnect\StructType\OperationTime[] $operationTime
     */
    public function __construct(array $operationTime = array())
    {
        $this
            ->setOperationTime($operationTime);
    }
    /**
     * Get OperationTime value
     * @return \OtaInterface\Otaconnect\StructType\OperationTime[]|null
     */
    public function getOperationTime()
    {
        return $this->OperationTime;
    }
    /**
     * Set OperationTime value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\OperationTime[] $operationTime
     * @return \OtaInterface\Otaconnect\StructType\OperationTimes
     */
    public function setOperationTime(array $operationTime = array())
    {
        foreach ($operationTime as $operationTimesOperationTimeItem) {
            // validation for constraint: itemType
            if (!$operationTimesOperationTimeItem instanceof \OtaInterface\Otaconnect\StructType\OperationTime) {
                throw new \InvalidArgumentException(sprintf('The OperationTime property can only contain items of \OtaInterface\Otaconnect\StructType\OperationTime, "%s" given', is_object($operationTimesOperationTimeItem) ? get_class($operationTimesOperationTimeItem) : gettype($operationTimesOperationTimeItem)), __LINE__);
            }
        }
        $this->OperationTime = $operationTime;
        return $this;
    }
    /**
     * Add item to OperationTime value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\OperationTime $item
     * @return \OtaInterface\Otaconnect\StructType\OperationTimes
     */
    public function addToOperationTime(\OtaInterface\Otaconnect\StructType\OperationTime $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\OperationTime) {
            throw new \InvalidArgumentException(sprintf('The OperationTime property can only contain items of \OtaInterface\Otaconnect\StructType\OperationTime, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OperationTime[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\OperationTimes
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
