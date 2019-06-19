<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginDestinationOptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A container for flight segments.
 * @subpackage Structs
 */
class OriginDestinationOptionType extends AbstractStructBase
{
    /**
     * The FlightSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 8
     * @var \OtaInterface\Otaconnect\StructType\FlightSegment[]
     */
    public $FlightSegment;
    /**
     * Constructor method for OriginDestinationOptionType
     * @uses OriginDestinationOptionType::setFlightSegment()
     * @param \OtaInterface\Otaconnect\StructType\FlightSegment[] $flightSegment
     */
    public function __construct(array $flightSegment = array())
    {
        $this
            ->setFlightSegment($flightSegment);
    }
    /**
     * Get FlightSegment value
     * @return \OtaInterface\Otaconnect\StructType\FlightSegment[]|null
     */
    public function getFlightSegment()
    {
        return $this->FlightSegment;
    }
    /**
     * Set FlightSegment value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\FlightSegment[] $flightSegment
     * @return \OtaInterface\Otaconnect\StructType\OriginDestinationOptionType
     */
    public function setFlightSegment(array $flightSegment = array())
    {
        foreach ($flightSegment as $originDestinationOptionTypeFlightSegmentItem) {
            // validation for constraint: itemType
            if (!$originDestinationOptionTypeFlightSegmentItem instanceof \OtaInterface\Otaconnect\StructType\FlightSegment) {
                throw new \InvalidArgumentException(sprintf('The FlightSegment property can only contain items of \OtaInterface\Otaconnect\StructType\FlightSegment, "%s" given', is_object($originDestinationOptionTypeFlightSegmentItem) ? get_class($originDestinationOptionTypeFlightSegmentItem) : gettype($originDestinationOptionTypeFlightSegmentItem)), __LINE__);
            }
        }
        $this->FlightSegment = $flightSegment;
        return $this;
    }
    /**
     * Add item to FlightSegment value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\FlightSegment $item
     * @return \OtaInterface\Otaconnect\StructType\OriginDestinationOptionType
     */
    public function addToFlightSegment(\OtaInterface\Otaconnect\StructType\FlightSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\FlightSegment) {
            throw new \InvalidArgumentException(sprintf('The FlightSegment property can only contain items of \OtaInterface\Otaconnect\StructType\FlightSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightSegment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\OriginDestinationOptionType
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
