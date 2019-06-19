<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Attractions StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Attraction objects identifying the local interest attractions in the vicinity of this hotel facility.
 * @subpackage Structs
 */
class Attractions extends AbstractStructBase
{
    /**
     * The Attraction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\Attraction[]
     */
    public $Attraction;
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when Attractions was last updated.
     * - use: optional
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for Attractions
     * @uses Attractions::setAttraction()
     * @uses Attractions::setLastUpdated()
     * @param \OtaInterface\Otaconnect\StructType\Attraction[] $attraction
     * @param string $lastUpdated
     */
    public function __construct(array $attraction = array(), $lastUpdated = null)
    {
        $this
            ->setAttraction($attraction)
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get Attraction value
     * @return \OtaInterface\Otaconnect\StructType\Attraction[]|null
     */
    public function getAttraction()
    {
        return $this->Attraction;
    }
    /**
     * Set Attraction value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Attraction[] $attraction
     * @return \OtaInterface\Otaconnect\StructType\Attractions
     */
    public function setAttraction(array $attraction = array())
    {
        foreach ($attraction as $attractionsAttractionItem) {
            // validation for constraint: itemType
            if (!$attractionsAttractionItem instanceof \OtaInterface\Otaconnect\StructType\Attraction) {
                throw new \InvalidArgumentException(sprintf('The Attraction property can only contain items of \OtaInterface\Otaconnect\StructType\Attraction, "%s" given', is_object($attractionsAttractionItem) ? get_class($attractionsAttractionItem) : gettype($attractionsAttractionItem)), __LINE__);
            }
        }
        $this->Attraction = $attraction;
        return $this;
    }
    /**
     * Add item to Attraction value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Attraction $item
     * @return \OtaInterface\Otaconnect\StructType\Attractions
     */
    public function addToAttraction(\OtaInterface\Otaconnect\StructType\Attraction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Attraction) {
            throw new \InvalidArgumentException(sprintf('The Attraction property can only contain items of \OtaInterface\Otaconnect\StructType\Attraction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Attraction[] = $item;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \OtaInterface\Otaconnect\StructType\Attractions
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Attractions
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
