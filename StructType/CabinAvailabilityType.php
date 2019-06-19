<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinAvailabilityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Construct for holding cabin class information, such as seat availability or meal codes. Can be up to three of these per flight segment or air leg - First, Business and Economy.
 * @subpackage Structs
 */
class CabinAvailabilityType extends AbstractStructBase
{
    /**
     * The CabinType
     * Meta informations extracted from the WSDL
     * - documentation: A section of an aircraft identified by the service level (e.g., First, Business, Economy)
     * - use: required
     * @var string
     */
    public $CabinType;
    /**
     * The Meal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Meal[]
     */
    public $Meal;
    /**
     * The BaggageAllowance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\BaggageAllowance
     */
    public $BaggageAllowance;
    /**
     * Constructor method for CabinAvailabilityType
     * @uses CabinAvailabilityType::setCabinType()
     * @uses CabinAvailabilityType::setMeal()
     * @uses CabinAvailabilityType::setBaggageAllowance()
     * @param string $cabinType
     * @param \OtaInterface\Otaconnect\StructType\Meal[] $meal
     * @param \OtaInterface\Otaconnect\StructType\BaggageAllowance $baggageAllowance
     */
    public function __construct($cabinType = null, array $meal = array(), \OtaInterface\Otaconnect\StructType\BaggageAllowance $baggageAllowance = null)
    {
        $this
            ->setCabinType($cabinType)
            ->setMeal($meal)
            ->setBaggageAllowance($baggageAllowance);
    }
    /**
     * Get CabinType value
     * @return string
     */
    public function getCabinType()
    {
        return $this->CabinType;
    }
    /**
     * Set CabinType value
     * @param string $cabinType
     * @return \OtaInterface\Otaconnect\StructType\CabinAvailabilityType
     */
    public function setCabinType($cabinType = null)
    {
        // validation for constraint: string
        if (!is_null($cabinType) && !is_string($cabinType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinType)), __LINE__);
        }
        $this->CabinType = $cabinType;
        return $this;
    }
    /**
     * Get Meal value
     * @return \OtaInterface\Otaconnect\StructType\Meal[]|null
     */
    public function getMeal()
    {
        return $this->Meal;
    }
    /**
     * Set Meal value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Meal[] $meal
     * @return \OtaInterface\Otaconnect\StructType\CabinAvailabilityType
     */
    public function setMeal(array $meal = array())
    {
        foreach ($meal as $cabinAvailabilityTypeMealItem) {
            // validation for constraint: itemType
            if (!$cabinAvailabilityTypeMealItem instanceof \OtaInterface\Otaconnect\StructType\Meal) {
                throw new \InvalidArgumentException(sprintf('The Meal property can only contain items of \OtaInterface\Otaconnect\StructType\Meal, "%s" given', is_object($cabinAvailabilityTypeMealItem) ? get_class($cabinAvailabilityTypeMealItem) : gettype($cabinAvailabilityTypeMealItem)), __LINE__);
            }
        }
        $this->Meal = $meal;
        return $this;
    }
    /**
     * Add item to Meal value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Meal $item
     * @return \OtaInterface\Otaconnect\StructType\CabinAvailabilityType
     */
    public function addToMeal(\OtaInterface\Otaconnect\StructType\Meal $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Meal) {
            throw new \InvalidArgumentException(sprintf('The Meal property can only contain items of \OtaInterface\Otaconnect\StructType\Meal, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Meal[] = $item;
        return $this;
    }
    /**
     * Get BaggageAllowance value
     * @return \OtaInterface\Otaconnect\StructType\BaggageAllowance|null
     */
    public function getBaggageAllowance()
    {
        return $this->BaggageAllowance;
    }
    /**
     * Set BaggageAllowance value
     * @param \OtaInterface\Otaconnect\StructType\BaggageAllowance $baggageAllowance
     * @return \OtaInterface\Otaconnect\StructType\CabinAvailabilityType
     */
    public function setBaggageAllowance(\OtaInterface\Otaconnect\StructType\BaggageAllowance $baggageAllowance = null)
    {
        $this->BaggageAllowance = $baggageAllowance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\CabinAvailabilityType
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
