<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComponent StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the data for a component of the fare. | The currency code and the amount for the fare component.
 * @subpackage Structs
 */
class FareComponent extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - documentation: The fare component number.
     * - use: required
     * @var string
     */
    public $Number;
    /**
     * The FlightLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\FlightLeg[]
     */
    public $FlightLeg;
    /**
     * Constructor method for FareComponent
     * @uses FareComponent::setNumber()
     * @uses FareComponent::setFlightLeg()
     * @param string $number
     * @param \OtaInterface\Otaconnect\StructType\FlightLeg[] $flightLeg
     */
    public function __construct($number = null, array $flightLeg = array())
    {
        $this
            ->setNumber($number)
            ->setFlightLeg($flightLeg);
    }
    /**
     * Get Number value
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \OtaInterface\Otaconnect\StructType\FareComponent
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get FlightLeg value
     * @return \OtaInterface\Otaconnect\StructType\FlightLeg[]|null
     */
    public function getFlightLeg()
    {
        return $this->FlightLeg;
    }
    /**
     * Set FlightLeg value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\FlightLeg[] $flightLeg
     * @return \OtaInterface\Otaconnect\StructType\FareComponent
     */
    public function setFlightLeg(array $flightLeg = array())
    {
        foreach ($flightLeg as $fareComponentFlightLegItem) {
            // validation for constraint: itemType
            if (!$fareComponentFlightLegItem instanceof \OtaInterface\Otaconnect\StructType\FlightLeg) {
                throw new \InvalidArgumentException(sprintf('The FlightLeg property can only contain items of \OtaInterface\Otaconnect\StructType\FlightLeg, "%s" given', is_object($fareComponentFlightLegItem) ? get_class($fareComponentFlightLegItem) : gettype($fareComponentFlightLegItem)), __LINE__);
            }
        }
        $this->FlightLeg = $flightLeg;
        return $this;
    }
    /**
     * Add item to FlightLeg value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\FlightLeg $item
     * @return \OtaInterface\Otaconnect\StructType\FareComponent
     */
    public function addToFlightLeg(\OtaInterface\Otaconnect\StructType\FlightLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\FlightLeg) {
            throw new \InvalidArgumentException(sprintf('The FlightLeg property can only contain items of \OtaInterface\Otaconnect\StructType\FlightLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightLeg[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\FareComponent
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
