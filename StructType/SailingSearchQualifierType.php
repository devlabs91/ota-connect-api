<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SailingSearchQualifierType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Search qualifiers that can be used to identify a cruise.
 * @subpackage Structs
 */
class SailingSearchQualifierType extends SearchQualifierType
{
    /**
     * The Port
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Port
     */
    public $Port;
    /**
     * Constructor method for SailingSearchQualifierType
     * @uses SailingSearchQualifierType::setPort()
     * @param \OtaInterface\Otaconnect\StructType\Port $port
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\Port $port = null)
    {
        $this
            ->setPort($port);
    }
    /**
     * Get Port value
     * @return \OtaInterface\Otaconnect\StructType\Port|null
     */
    public function getPort()
    {
        return $this->Port;
    }
    /**
     * Set Port value
     * @param \OtaInterface\Otaconnect\StructType\Port $port
     * @return \OtaInterface\Otaconnect\StructType\SailingSearchQualifierType
     */
    public function setPort(\OtaInterface\Otaconnect\StructType\Port $port = null)
    {
        $this->Port = $port;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\SailingSearchQualifierType
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
