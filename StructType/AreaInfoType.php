<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AreaInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines well-known locations and attractions of local interest in the geographical area of the hotel facility as well as other area hotels.
 * @subpackage Structs
 */
class AreaInfoType extends AbstractStructBase
{
    /**
     * The RefPoints
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RefPoints
     */
    public $RefPoints;
    /**
     * The Attractions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Attractions
     */
    public $Attractions;
    /**
     * The Recreations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Recreations
     */
    public $Recreations;
    /**
     * The OtherHotels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\OtherHotels
     */
    public $OtherHotels;
    /**
     * Constructor method for AreaInfoType
     * @uses AreaInfoType::setRefPoints()
     * @uses AreaInfoType::setAttractions()
     * @uses AreaInfoType::setRecreations()
     * @uses AreaInfoType::setOtherHotels()
     * @param \OtaInterface\Otaconnect\StructType\RefPoints $refPoints
     * @param \OtaInterface\Otaconnect\StructType\Attractions $attractions
     * @param \OtaInterface\Otaconnect\StructType\Recreations $recreations
     * @param \OtaInterface\Otaconnect\StructType\OtherHotels $otherHotels
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\RefPoints $refPoints = null, \OtaInterface\Otaconnect\StructType\Attractions $attractions = null, \OtaInterface\Otaconnect\StructType\Recreations $recreations = null, \OtaInterface\Otaconnect\StructType\OtherHotels $otherHotels = null)
    {
        $this
            ->setRefPoints($refPoints)
            ->setAttractions($attractions)
            ->setRecreations($recreations)
            ->setOtherHotels($otherHotels);
    }
    /**
     * Get RefPoints value
     * @return \OtaInterface\Otaconnect\StructType\RefPoints|null
     */
    public function getRefPoints()
    {
        return $this->RefPoints;
    }
    /**
     * Set RefPoints value
     * @param \OtaInterface\Otaconnect\StructType\RefPoints $refPoints
     * @return \OtaInterface\Otaconnect\StructType\AreaInfoType
     */
    public function setRefPoints(\OtaInterface\Otaconnect\StructType\RefPoints $refPoints = null)
    {
        $this->RefPoints = $refPoints;
        return $this;
    }
    /**
     * Get Attractions value
     * @return \OtaInterface\Otaconnect\StructType\Attractions|null
     */
    public function getAttractions()
    {
        return $this->Attractions;
    }
    /**
     * Set Attractions value
     * @param \OtaInterface\Otaconnect\StructType\Attractions $attractions
     * @return \OtaInterface\Otaconnect\StructType\AreaInfoType
     */
    public function setAttractions(\OtaInterface\Otaconnect\StructType\Attractions $attractions = null)
    {
        $this->Attractions = $attractions;
        return $this;
    }
    /**
     * Get Recreations value
     * @return \OtaInterface\Otaconnect\StructType\Recreations|null
     */
    public function getRecreations()
    {
        return $this->Recreations;
    }
    /**
     * Set Recreations value
     * @param \OtaInterface\Otaconnect\StructType\Recreations $recreations
     * @return \OtaInterface\Otaconnect\StructType\AreaInfoType
     */
    public function setRecreations(\OtaInterface\Otaconnect\StructType\Recreations $recreations = null)
    {
        $this->Recreations = $recreations;
        return $this;
    }
    /**
     * Get OtherHotels value
     * @return \OtaInterface\Otaconnect\StructType\OtherHotels|null
     */
    public function getOtherHotels()
    {
        return $this->OtherHotels;
    }
    /**
     * Set OtherHotels value
     * @param \OtaInterface\Otaconnect\StructType\OtherHotels $otherHotels
     * @return \OtaInterface\Otaconnect\StructType\AreaInfoType
     */
    public function setOtherHotels(\OtaInterface\Otaconnect\StructType\OtherHotels $otherHotels = null)
    {
        $this->OtherHotels = $otherHotels;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AreaInfoType
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
