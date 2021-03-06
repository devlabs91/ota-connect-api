<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirAccommodations StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of air accommodations.
 * @subpackage Structs
 */
class AirAccommodations extends AbstractStructBase
{
    /**
     * The AirAccommodation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AirAccommodation[]
     */
    public $AirAccommodation;
    /**
     * Constructor method for AirAccommodations
     * @uses AirAccommodations::setAirAccommodation()
     * @param \OtaInterface\Otaconnect\StructType\AirAccommodation[] $airAccommodation
     */
    public function __construct(array $airAccommodation = array())
    {
        $this
            ->setAirAccommodation($airAccommodation);
    }
    /**
     * Get AirAccommodation value
     * @return \OtaInterface\Otaconnect\StructType\AirAccommodation[]|null
     */
    public function getAirAccommodation()
    {
        return $this->AirAccommodation;
    }
    /**
     * Set AirAccommodation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AirAccommodation[] $airAccommodation
     * @return \OtaInterface\Otaconnect\StructType\AirAccommodations
     */
    public function setAirAccommodation(array $airAccommodation = array())
    {
        foreach ($airAccommodation as $airAccommodationsAirAccommodationItem) {
            // validation for constraint: itemType
            if (!$airAccommodationsAirAccommodationItem instanceof \OtaInterface\Otaconnect\StructType\AirAccommodation) {
                throw new \InvalidArgumentException(sprintf('The AirAccommodation property can only contain items of \OtaInterface\Otaconnect\StructType\AirAccommodation, "%s" given', is_object($airAccommodationsAirAccommodationItem) ? get_class($airAccommodationsAirAccommodationItem) : gettype($airAccommodationsAirAccommodationItem)), __LINE__);
            }
        }
        $this->AirAccommodation = $airAccommodation;
        return $this;
    }
    /**
     * Add item to AirAccommodation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AirAccommodation $item
     * @return \OtaInterface\Otaconnect\StructType\AirAccommodations
     */
    public function addToAirAccommodation(\OtaInterface\Otaconnect\StructType\AirAccommodation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\AirAccommodation) {
            throw new \InvalidArgumentException(sprintf('The AirAccommodation property can only contain items of \OtaInterface\Otaconnect\StructType\AirAccommodation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AirAccommodation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AirAccommodations
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
