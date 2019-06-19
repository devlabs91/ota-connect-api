<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistribSystems StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of DistribSystem elements.
 * @subpackage Structs
 */
class DistribSystems extends AbstractStructBase
{
    /**
     * The DistribSystem
     * @var \OtaInterface\Otaconnect\StructType\DistribSystem
     */
    public $DistribSystem;
    /**
     * Constructor method for DistribSystems
     * @uses DistribSystems::setDistribSystem()
     * @param \OtaInterface\Otaconnect\StructType\DistribSystem $distribSystem
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\DistribSystem $distribSystem = null)
    {
        $this
            ->setDistribSystem($distribSystem);
    }
    /**
     * Get DistribSystem value
     * @return \OtaInterface\Otaconnect\StructType\DistribSystem|null
     */
    public function getDistribSystem()
    {
        return $this->DistribSystem;
    }
    /**
     * Set DistribSystem value
     * @param \OtaInterface\Otaconnect\StructType\DistribSystem $distribSystem
     * @return \OtaInterface\Otaconnect\StructType\DistribSystems
     */
    public function setDistribSystem(\OtaInterface\Otaconnect\StructType\DistribSystem $distribSystem = null)
    {
        $this->DistribSystem = $distribSystem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\DistribSystems
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
