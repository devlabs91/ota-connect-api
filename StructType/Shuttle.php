<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Shuttle StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on the shuttle services associated with this location. Some locations use a shuttle bus to transfer the customers from an airport terminal to the rental facility.
 * @subpackage Structs
 */
class Shuttle extends AbstractStructBase
{
    /**
     * The ShuttleInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ShuttleInfos
     */
    public $ShuttleInfos;
    /**
     * The OperationSchedules
     * Meta informations extracted from the WSDL
     * - documentation: A collection of operation schedules, used to define the hours of operation for the shuttle services.
     * - minOccurs: 0
     * @var mixed
     */
    public $OperationSchedules;
    /**
     * Constructor method for Shuttle
     * @uses Shuttle::setShuttleInfos()
     * @uses Shuttle::setOperationSchedules()
     * @param \OtaInterface\Otaconnect\StructType\ShuttleInfos $shuttleInfos
     * @param mixed $operationSchedules
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\ShuttleInfos $shuttleInfos = null, $operationSchedules = null)
    {
        $this
            ->setShuttleInfos($shuttleInfos)
            ->setOperationSchedules($operationSchedules);
    }
    /**
     * Get ShuttleInfos value
     * @return \OtaInterface\Otaconnect\StructType\ShuttleInfos|null
     */
    public function getShuttleInfos()
    {
        return $this->ShuttleInfos;
    }
    /**
     * Set ShuttleInfos value
     * @param \OtaInterface\Otaconnect\StructType\ShuttleInfos $shuttleInfos
     * @return \OtaInterface\Otaconnect\StructType\Shuttle
     */
    public function setShuttleInfos(\OtaInterface\Otaconnect\StructType\ShuttleInfos $shuttleInfos = null)
    {
        $this->ShuttleInfos = $shuttleInfos;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return mixed|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param mixed $operationSchedules
     * @return \OtaInterface\Otaconnect\StructType\Shuttle
     */
    public function setOperationSchedules($operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Shuttle
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
