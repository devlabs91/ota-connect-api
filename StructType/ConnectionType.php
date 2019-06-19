<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: To specify connection locations, preference level for each, min connection time, and whether location is specified for stopping or changing.
 * @subpackage Structs
 */
class ConnectionType extends AbstractStructBase
{
    /**
     * The ConnectionLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * @var \OtaInterface\Otaconnect\StructType\ConnectionLocation[]
     */
    public $ConnectionLocation;
    /**
     * Constructor method for ConnectionType
     * @uses ConnectionType::setConnectionLocation()
     * @param \OtaInterface\Otaconnect\StructType\ConnectionLocation[] $connectionLocation
     */
    public function __construct(array $connectionLocation = array())
    {
        $this
            ->setConnectionLocation($connectionLocation);
    }
    /**
     * Get ConnectionLocation value
     * @return \OtaInterface\Otaconnect\StructType\ConnectionLocation[]|null
     */
    public function getConnectionLocation()
    {
        return $this->ConnectionLocation;
    }
    /**
     * Set ConnectionLocation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ConnectionLocation[] $connectionLocation
     * @return \OtaInterface\Otaconnect\StructType\ConnectionType
     */
    public function setConnectionLocation(array $connectionLocation = array())
    {
        foreach ($connectionLocation as $connectionTypeConnectionLocationItem) {
            // validation for constraint: itemType
            if (!$connectionTypeConnectionLocationItem instanceof \OtaInterface\Otaconnect\StructType\ConnectionLocation) {
                throw new \InvalidArgumentException(sprintf('The ConnectionLocation property can only contain items of \OtaInterface\Otaconnect\StructType\ConnectionLocation, "%s" given', is_object($connectionTypeConnectionLocationItem) ? get_class($connectionTypeConnectionLocationItem) : gettype($connectionTypeConnectionLocationItem)), __LINE__);
            }
        }
        $this->ConnectionLocation = $connectionLocation;
        return $this;
    }
    /**
     * Add item to ConnectionLocation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ConnectionLocation $item
     * @return \OtaInterface\Otaconnect\StructType\ConnectionType
     */
    public function addToConnectionLocation(\OtaInterface\Otaconnect\StructType\ConnectionLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\ConnectionLocation) {
            throw new \InvalidArgumentException(sprintf('The ConnectionLocation property can only contain items of \OtaInterface\Otaconnect\StructType\ConnectionLocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConnectionLocation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\ConnectionType
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
