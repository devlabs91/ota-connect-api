<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationSchedulesPlusChargeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The OperationSchedule class defines the dates and hours of operation in addition the charges that may apply.
 * @subpackage Structs
 */
class OperationSchedulesPlusChargeType extends AbstractStructBase
{
    /**
     * The OperationSchedule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\OperationSchedule[]
     */
    public $OperationSchedule;
    /**
     * Constructor method for OperationSchedulesPlusChargeType
     * @uses OperationSchedulesPlusChargeType::setOperationSchedule()
     * @param \OtaInterface\Otaconnect\StructType\OperationSchedule[] $operationSchedule
     */
    public function __construct(array $operationSchedule = array())
    {
        $this
            ->setOperationSchedule($operationSchedule);
    }
    /**
     * Get OperationSchedule value
     * @return \OtaInterface\Otaconnect\StructType\OperationSchedule[]|null
     */
    public function getOperationSchedule()
    {
        return $this->OperationSchedule;
    }
    /**
     * Set OperationSchedule value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\OperationSchedule[] $operationSchedule
     * @return \OtaInterface\Otaconnect\StructType\OperationSchedulesPlusChargeType
     */
    public function setOperationSchedule(array $operationSchedule = array())
    {
        foreach ($operationSchedule as $operationSchedulesPlusChargeTypeOperationScheduleItem) {
            // validation for constraint: itemType
            if (!$operationSchedulesPlusChargeTypeOperationScheduleItem instanceof \OtaInterface\Otaconnect\StructType\OperationSchedule) {
                throw new \InvalidArgumentException(sprintf('The OperationSchedule property can only contain items of \OtaInterface\Otaconnect\StructType\OperationSchedule, "%s" given', is_object($operationSchedulesPlusChargeTypeOperationScheduleItem) ? get_class($operationSchedulesPlusChargeTypeOperationScheduleItem) : gettype($operationSchedulesPlusChargeTypeOperationScheduleItem)), __LINE__);
            }
        }
        $this->OperationSchedule = $operationSchedule;
        return $this;
    }
    /**
     * Add item to OperationSchedule value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\OperationSchedule $item
     * @return \OtaInterface\Otaconnect\StructType\OperationSchedulesPlusChargeType
     */
    public function addToOperationSchedule(\OtaInterface\Otaconnect\StructType\OperationSchedule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\OperationSchedule) {
            throw new \InvalidArgumentException(sprintf('The OperationSchedule property can only contain items of \OtaInterface\Otaconnect\StructType\OperationSchedule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OperationSchedule[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\OperationSchedulesPlusChargeType
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
