<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationScheduleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of an operating schedule (e.g. a golf tee time may be more expensive during peak hours v. off peak hours). | The date span applicable to the operation schedule.
 * @subpackage Structs
 */
class OperationScheduleType extends AbstractStructBase
{
    /**
     * The OperationTimes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\OperationTimes
     */
    public $OperationTimes;
    /**
     * Constructor method for OperationScheduleType
     * @uses OperationScheduleType::setOperationTimes()
     * @param \OtaInterface\Otaconnect\StructType\OperationTimes $operationTimes
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\OperationTimes $operationTimes = null)
    {
        $this
            ->setOperationTimes($operationTimes);
    }
    /**
     * Get OperationTimes value
     * @return \OtaInterface\Otaconnect\StructType\OperationTimes|null
     */
    public function getOperationTimes()
    {
        return $this->OperationTimes;
    }
    /**
     * Set OperationTimes value
     * @param \OtaInterface\Otaconnect\StructType\OperationTimes $operationTimes
     * @return \OtaInterface\Otaconnect\StructType\OperationScheduleType
     */
    public function setOperationTimes(\OtaInterface\Otaconnect\StructType\OperationTimes $operationTimes = null)
    {
        $this->OperationTimes = $operationTimes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\OperationScheduleType
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
