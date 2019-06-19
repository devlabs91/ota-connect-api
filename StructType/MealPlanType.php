<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealPlanType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of meal arrangements, booked or available according to context, with appropriate supplementary charges.
 * @subpackage Structs
 */
class MealPlanType extends AbstractStructBase
{
    /**
     * The CustomerCounts
     * Meta informations extracted from the WSDL
     * - documentation: Counts of the number of passengers in age categories. Used when individual passenger identification is not required.
     * - minOccurs: 0
     * @var mixed
     */
    public $CustomerCounts;
    /**
     * The PassengerRPHs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PassengerRPHs
     */
    public $PassengerRPHs;
    /**
     * The Prices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Prices
     */
    public $Prices;
    /**
     * The ListOfRoomRPH
     * Meta informations extracted from the WSDL
     * - documentation: A list of the Rooms with which this Meal Plan is available.
     * - use: optional
     * @var string
     */
    public $ListOfRoomRPH;
    /**
     * Constructor method for MealPlanType
     * @uses MealPlanType::setCustomerCounts()
     * @uses MealPlanType::setPassengerRPHs()
     * @uses MealPlanType::setPrices()
     * @uses MealPlanType::setListOfRoomRPH()
     * @param mixed $customerCounts
     * @param \OtaInterface\Otaconnect\StructType\PassengerRPHs $passengerRPHs
     * @param \OtaInterface\Otaconnect\StructType\Prices $prices
     * @param string $listOfRoomRPH
     */
    public function __construct($customerCounts = null, \OtaInterface\Otaconnect\StructType\PassengerRPHs $passengerRPHs = null, \OtaInterface\Otaconnect\StructType\Prices $prices = null, $listOfRoomRPH = null)
    {
        $this
            ->setCustomerCounts($customerCounts)
            ->setPassengerRPHs($passengerRPHs)
            ->setPrices($prices)
            ->setListOfRoomRPH($listOfRoomRPH);
    }
    /**
     * Get CustomerCounts value
     * @return mixed|null
     */
    public function getCustomerCounts()
    {
        return $this->CustomerCounts;
    }
    /**
     * Set CustomerCounts value
     * @param mixed $customerCounts
     * @return \OtaInterface\Otaconnect\StructType\MealPlanType
     */
    public function setCustomerCounts($customerCounts = null)
    {
        $this->CustomerCounts = $customerCounts;
        return $this;
    }
    /**
     * Get PassengerRPHs value
     * @return \OtaInterface\Otaconnect\StructType\PassengerRPHs|null
     */
    public function getPassengerRPHs()
    {
        return $this->PassengerRPHs;
    }
    /**
     * Set PassengerRPHs value
     * @param \OtaInterface\Otaconnect\StructType\PassengerRPHs $passengerRPHs
     * @return \OtaInterface\Otaconnect\StructType\MealPlanType
     */
    public function setPassengerRPHs(\OtaInterface\Otaconnect\StructType\PassengerRPHs $passengerRPHs = null)
    {
        $this->PassengerRPHs = $passengerRPHs;
        return $this;
    }
    /**
     * Get Prices value
     * @return \OtaInterface\Otaconnect\StructType\Prices|null
     */
    public function getPrices()
    {
        return $this->Prices;
    }
    /**
     * Set Prices value
     * @param \OtaInterface\Otaconnect\StructType\Prices $prices
     * @return \OtaInterface\Otaconnect\StructType\MealPlanType
     */
    public function setPrices(\OtaInterface\Otaconnect\StructType\Prices $prices = null)
    {
        $this->Prices = $prices;
        return $this;
    }
    /**
     * Get ListOfRoomRPH value
     * @return string|null
     */
    public function getListOfRoomRPH()
    {
        return $this->ListOfRoomRPH;
    }
    /**
     * Set ListOfRoomRPH value
     * @param string $listOfRoomRPH
     * @return \OtaInterface\Otaconnect\StructType\MealPlanType
     */
    public function setListOfRoomRPH($listOfRoomRPH = null)
    {
        // validation for constraint: string
        if (!is_null($listOfRoomRPH) && !is_string($listOfRoomRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listOfRoomRPH)), __LINE__);
        }
        $this->ListOfRoomRPH = $listOfRoomRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\MealPlanType
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
