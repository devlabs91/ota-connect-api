<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatMapDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of a seat map for a particular aircraft
 * @subpackage Structs
 */
class SeatMapDetailsType extends AbstractStructBase
{
    /**
     * The CabinClass
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * @var \OtaInterface\Otaconnect\StructType\CabinClass[]
     */
    public $CabinClass;
    /**
     * The TravelerRefNumberRPHs
     * Meta informations extracted from the WSDL
     * - documentation: The reference number is used as a cross reference between the AirTravelerType and the SeatMapDetails. This will be used only if different seat maps are valid for different passengers for the same flight segment.
     * - use: optional
     * @var string
     */
    public $TravelerRefNumberRPHs;
    /**
     * Constructor method for SeatMapDetailsType
     * @uses SeatMapDetailsType::setCabinClass()
     * @uses SeatMapDetailsType::setTravelerRefNumberRPHs()
     * @param \OtaInterface\Otaconnect\StructType\CabinClass[] $cabinClass
     * @param string $travelerRefNumberRPHs
     */
    public function __construct(array $cabinClass = array(), $travelerRefNumberRPHs = null)
    {
        $this
            ->setCabinClass($cabinClass)
            ->setTravelerRefNumberRPHs($travelerRefNumberRPHs);
    }
    /**
     * Get CabinClass value
     * @return \OtaInterface\Otaconnect\StructType\CabinClass[]|null
     */
    public function getCabinClass()
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CabinClass[] $cabinClass
     * @return \OtaInterface\Otaconnect\StructType\SeatMapDetailsType
     */
    public function setCabinClass(array $cabinClass = array())
    {
        foreach ($cabinClass as $seatMapDetailsTypeCabinClassItem) {
            // validation for constraint: itemType
            if (!$seatMapDetailsTypeCabinClassItem instanceof \OtaInterface\Otaconnect\StructType\CabinClass) {
                throw new \InvalidArgumentException(sprintf('The CabinClass property can only contain items of \OtaInterface\Otaconnect\StructType\CabinClass, "%s" given', is_object($seatMapDetailsTypeCabinClassItem) ? get_class($seatMapDetailsTypeCabinClassItem) : gettype($seatMapDetailsTypeCabinClassItem)), __LINE__);
            }
        }
        $this->CabinClass = $cabinClass;
        return $this;
    }
    /**
     * Add item to CabinClass value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CabinClass $item
     * @return \OtaInterface\Otaconnect\StructType\SeatMapDetailsType
     */
    public function addToCabinClass(\OtaInterface\Otaconnect\StructType\CabinClass $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\CabinClass) {
            throw new \InvalidArgumentException(sprintf('The CabinClass property can only contain items of \OtaInterface\Otaconnect\StructType\CabinClass, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CabinClass[] = $item;
        return $this;
    }
    /**
     * Get TravelerRefNumberRPHs value
     * @return string|null
     */
    public function getTravelerRefNumberRPHs()
    {
        return $this->TravelerRefNumberRPHs;
    }
    /**
     * Set TravelerRefNumberRPHs value
     * @param string $travelerRefNumberRPHs
     * @return \OtaInterface\Otaconnect\StructType\SeatMapDetailsType
     */
    public function setTravelerRefNumberRPHs($travelerRefNumberRPHs = null)
    {
        // validation for constraint: string
        if (!is_null($travelerRefNumberRPHs) && !is_string($travelerRefNumberRPHs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelerRefNumberRPHs)), __LINE__);
        }
        $this->TravelerRefNumberRPHs = $travelerRefNumberRPHs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\SeatMapDetailsType
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
