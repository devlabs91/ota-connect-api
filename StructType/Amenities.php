<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amenities StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of room level amenities. | A collection of available amenities. | A collection of amenity information. | Collection of room amenity items available to the guest.
 * @subpackage Structs
 */
class Amenities extends AbstractStructBase
{
    /**
     * The Amenity
     * Meta informations extracted from the WSDL
     * - documentation: Used to provide room amenity information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Amenity[]
     */
    public $Amenity;
    /**
     * Constructor method for Amenities
     * @uses Amenities::setAmenity()
     * @param \OtaInterface\Otaconnect\StructType\Amenity[] $amenity
     */
    public function __construct(array $amenity = array())
    {
        $this
            ->setAmenity($amenity);
    }
    /**
     * Get Amenity value
     * @return \OtaInterface\Otaconnect\StructType\Amenity[]|null
     */
    public function getAmenity()
    {
        return $this->Amenity;
    }
    /**
     * Set Amenity value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Amenity[] $amenity
     * @return \OtaInterface\Otaconnect\StructType\Amenities
     */
    public function setAmenity(array $amenity = array())
    {
        foreach ($amenity as $amenitiesAmenityItem) {
            // validation for constraint: itemType
            if (!$amenitiesAmenityItem instanceof \OtaInterface\Otaconnect\StructType\Amenity) {
                throw new \InvalidArgumentException(sprintf('The Amenity property can only contain items of \OtaInterface\Otaconnect\StructType\Amenity, "%s" given', is_object($amenitiesAmenityItem) ? get_class($amenitiesAmenityItem) : gettype($amenitiesAmenityItem)), __LINE__);
            }
        }
        $this->Amenity = $amenity;
        return $this;
    }
    /**
     * Add item to Amenity value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Amenity $item
     * @return \OtaInterface\Otaconnect\StructType\Amenities
     */
    public function addToAmenity(\OtaInterface\Otaconnect\StructType\Amenity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Amenity) {
            throw new \InvalidArgumentException(sprintf('The Amenity property can only contain items of \OtaInterface\Otaconnect\StructType\Amenity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Amenity[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Amenities
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
