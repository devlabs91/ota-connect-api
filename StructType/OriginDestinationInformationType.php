<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginDestinationInformationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Origin and Destination location, and time information for the request. Also includes the ability to specify a connection location for the search.
 * @subpackage Structs
 */
class OriginDestinationInformationType extends TravelDateTimeType
{
    /**
     * The OriginLocation
     * @var \OtaInterface\Otaconnect\StructType\OriginLocation
     */
    public $OriginLocation;
    /**
     * The DestinationLocation
     * @var \OtaInterface\Otaconnect\StructType\DestinationLocation
     */
    public $DestinationLocation;
    /**
     * The ConnectionLocations
     * Meta informations extracted from the WSDL
     * - documentation: Travel Connection Location - for example, air uses the IATA 3 letter code.
     * - minOccurs: 0
     * @var mixed
     */
    public $ConnectionLocations;
    /**
     * Constructor method for OriginDestinationInformationType
     * @uses OriginDestinationInformationType::setOriginLocation()
     * @uses OriginDestinationInformationType::setDestinationLocation()
     * @uses OriginDestinationInformationType::setConnectionLocations()
     * @param \OtaInterface\Otaconnect\StructType\OriginLocation $originLocation
     * @param \OtaInterface\Otaconnect\StructType\DestinationLocation $destinationLocation
     * @param mixed $connectionLocations
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\OriginLocation $originLocation = null, \OtaInterface\Otaconnect\StructType\DestinationLocation $destinationLocation = null, $connectionLocations = null)
    {
        $this
            ->setOriginLocation($originLocation)
            ->setDestinationLocation($destinationLocation)
            ->setConnectionLocations($connectionLocations);
    }
    /**
     * Get OriginLocation value
     * @return \OtaInterface\Otaconnect\StructType\OriginLocation|null
     */
    public function getOriginLocation()
    {
        return $this->OriginLocation;
    }
    /**
     * Set OriginLocation value
     * @param \OtaInterface\Otaconnect\StructType\OriginLocation $originLocation
     * @return \OtaInterface\Otaconnect\StructType\OriginDestinationInformationType
     */
    public function setOriginLocation(\OtaInterface\Otaconnect\StructType\OriginLocation $originLocation = null)
    {
        $this->OriginLocation = $originLocation;
        return $this;
    }
    /**
     * Get DestinationLocation value
     * @return \OtaInterface\Otaconnect\StructType\DestinationLocation|null
     */
    public function getDestinationLocation()
    {
        return $this->DestinationLocation;
    }
    /**
     * Set DestinationLocation value
     * @param \OtaInterface\Otaconnect\StructType\DestinationLocation $destinationLocation
     * @return \OtaInterface\Otaconnect\StructType\OriginDestinationInformationType
     */
    public function setDestinationLocation(\OtaInterface\Otaconnect\StructType\DestinationLocation $destinationLocation = null)
    {
        $this->DestinationLocation = $destinationLocation;
        return $this;
    }
    /**
     * Get ConnectionLocations value
     * @return mixed|null
     */
    public function getConnectionLocations()
    {
        return $this->ConnectionLocations;
    }
    /**
     * Set ConnectionLocations value
     * @param mixed $connectionLocations
     * @return \OtaInterface\Otaconnect\StructType\OriginDestinationInformationType
     */
    public function setConnectionLocations($connectionLocations = null)
    {
        $this->ConnectionLocations = $connectionLocations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\OriginDestinationInformationType
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
