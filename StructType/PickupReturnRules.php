<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupReturnRules StructType
 * Meta informations extracted from the WSDL
 * - documentation: Pickup and return requirements for a specific rate.
 * @subpackage Structs
 */
class PickupReturnRules extends AbstractStructBase
{
    /**
     * The EarliestPickup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\EarliestPickup
     */
    public $EarliestPickup;
    /**
     * The LatestPickup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\LatestPickup
     */
    public $LatestPickup;
    /**
     * The LatestReturn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\LatestReturn
     */
    public $LatestReturn;
    /**
     * The EarliestReturn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\EarliestReturn
     */
    public $EarliestReturn;
    /**
     * The DayOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: The day of the week, this rule refers. If this attribute is used, each following element qualifies for this day.
     * - use: optional
     * @var string
     */
    public $DayOfWeek;
    /**
     * The MinimumKeep
     * Meta informations extracted from the WSDL
     * - documentation: The minimum time (e.g., number of rental days, number of rental hours) required to qualify for a specific rate.
     * - use: optional
     * @var string
     */
    public $MinimumKeep;
    /**
     * The MaximumKeep
     * Meta informations extracted from the WSDL
     * - documentation: The maximum time (e.g., number of rental days, number of rental hours) allowed to qualify for a specific rate.
     * - use: optional
     * @var string
     */
    public $MaximumKeep;
    /**
     * The MaximumRental
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of rental days a vehicle is allowed to be rented.
     * - use: optional
     * @var string
     */
    public $MaximumRental;
    /**
     * The OvernightInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the vehicle must be kept overnight.
     * - use: optional
     * @var bool
     */
    public $OvernightInd;
    /**
     * The ReturnAllowedInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the vehicle may be returned on this day of the week.
     * - use: optional
     * @var bool
     */
    public $ReturnAllowedInd;
    /**
     * Constructor method for PickupReturnRules
     * @uses PickupReturnRules::setEarliestPickup()
     * @uses PickupReturnRules::setLatestPickup()
     * @uses PickupReturnRules::setLatestReturn()
     * @uses PickupReturnRules::setEarliestReturn()
     * @uses PickupReturnRules::setDayOfWeek()
     * @uses PickupReturnRules::setMinimumKeep()
     * @uses PickupReturnRules::setMaximumKeep()
     * @uses PickupReturnRules::setMaximumRental()
     * @uses PickupReturnRules::setOvernightInd()
     * @uses PickupReturnRules::setReturnAllowedInd()
     * @param \OtaInterface\Otaconnect\StructType\EarliestPickup $earliestPickup
     * @param \OtaInterface\Otaconnect\StructType\LatestPickup $latestPickup
     * @param \OtaInterface\Otaconnect\StructType\LatestReturn $latestReturn
     * @param \OtaInterface\Otaconnect\StructType\EarliestReturn $earliestReturn
     * @param string $dayOfWeek
     * @param string $minimumKeep
     * @param string $maximumKeep
     * @param string $maximumRental
     * @param bool $overnightInd
     * @param bool $returnAllowedInd
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\EarliestPickup $earliestPickup = null, \OtaInterface\Otaconnect\StructType\LatestPickup $latestPickup = null, \OtaInterface\Otaconnect\StructType\LatestReturn $latestReturn = null, \OtaInterface\Otaconnect\StructType\EarliestReturn $earliestReturn = null, $dayOfWeek = null, $minimumKeep = null, $maximumKeep = null, $maximumRental = null, $overnightInd = null, $returnAllowedInd = null)
    {
        $this
            ->setEarliestPickup($earliestPickup)
            ->setLatestPickup($latestPickup)
            ->setLatestReturn($latestReturn)
            ->setEarliestReturn($earliestReturn)
            ->setDayOfWeek($dayOfWeek)
            ->setMinimumKeep($minimumKeep)
            ->setMaximumKeep($maximumKeep)
            ->setMaximumRental($maximumRental)
            ->setOvernightInd($overnightInd)
            ->setReturnAllowedInd($returnAllowedInd);
    }
    /**
     * Get EarliestPickup value
     * @return \OtaInterface\Otaconnect\StructType\EarliestPickup|null
     */
    public function getEarliestPickup()
    {
        return $this->EarliestPickup;
    }
    /**
     * Set EarliestPickup value
     * @param \OtaInterface\Otaconnect\StructType\EarliestPickup $earliestPickup
     * @return \OtaInterface\Otaconnect\StructType\PickupReturnRules
     */
    public function setEarliestPickup(\OtaInterface\Otaconnect\StructType\EarliestPickup $earliestPickup = null)
    {
        $this->EarliestPickup = $earliestPickup;
        return $this;
    }
    /**
     * Get LatestPickup value
     * @return \OtaInterface\Otaconnect\StructType\LatestPickup|null
     */
    public function getLatestPickup()
    {
        return $this->LatestPickup;
    }
    /**
     * Set LatestPickup value
     * @param \OtaInterface\Otaconnect\StructType\LatestPickup $latestPickup
     * @return \OtaInterface\Otaconnect\StructType\PickupReturnRules
     */
    public function setLatestPickup(\OtaInterface\Otaconnect\StructType\LatestPickup $latestPickup = null)
    {
        $this->LatestPickup = $latestPickup;
        return $this;
    }
    /**
     * Get LatestReturn value
     * @return \OtaInterface\Otaconnect\StructType\LatestReturn|null
     */
    public function getLatestReturn()
    {
        return $this->LatestReturn;
    }
    /**
     * Set LatestReturn value
     * @param \OtaInterface\Otaconnect\StructType\LatestReturn $latestReturn
     * @return \OtaInterface\Otaconnect\StructType\PickupReturnRules
     */
    public function setLatestReturn(\OtaInterface\Otaconnect\StructType\LatestReturn $latestReturn = null)
    {
        $this->LatestReturn = $latestReturn;
        return $this;
    }
    /**
     * Get EarliestReturn value
     * @return \OtaInterface\Otaconnect\StructType\EarliestReturn|null
     */
    public function getEarliestReturn()
    {
        return $this->EarliestReturn;
    }
    /**
     * Set EarliestReturn value
     * @param \OtaInterface\Otaconnect\StructType\EarliestReturn $earliestReturn
     * @return \OtaInterface\Otaconnect\StructType\PickupReturnRules
     */
    public function setEarliestReturn(\OtaInterface\Otaconnect\StructType\EarliestReturn $earliestReturn = null)
    {
        $this->EarliestReturn = $earliestReturn;
        return $this;
    }
    /**
     * Get DayOfWeek value
     * @return string|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @param string $dayOfWeek
     * @return \OtaInterface\Otaconnect\StructType\PickupReturnRules
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        // validation for constraint: string
        if (!is_null($dayOfWeek) && !is_string($dayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dayOfWeek)), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get MinimumKeep value
     * @return string|null
     */
    public function getMinimumKeep()
    {
        return $this->MinimumKeep;
    }
    /**
     * Set MinimumKeep value
     * @param string $minimumKeep
     * @return \OtaInterface\Otaconnect\StructType\PickupReturnRules
     */
    public function setMinimumKeep($minimumKeep = null)
    {
        // validation for constraint: string
        if (!is_null($minimumKeep) && !is_string($minimumKeep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minimumKeep)), __LINE__);
        }
        $this->MinimumKeep = $minimumKeep;
        return $this;
    }
    /**
     * Get MaximumKeep value
     * @return string|null
     */
    public function getMaximumKeep()
    {
        return $this->MaximumKeep;
    }
    /**
     * Set MaximumKeep value
     * @param string $maximumKeep
     * @return \OtaInterface\Otaconnect\StructType\PickupReturnRules
     */
    public function setMaximumKeep($maximumKeep = null)
    {
        // validation for constraint: string
        if (!is_null($maximumKeep) && !is_string($maximumKeep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximumKeep)), __LINE__);
        }
        $this->MaximumKeep = $maximumKeep;
        return $this;
    }
    /**
     * Get MaximumRental value
     * @return string|null
     */
    public function getMaximumRental()
    {
        return $this->MaximumRental;
    }
    /**
     * Set MaximumRental value
     * @param string $maximumRental
     * @return \OtaInterface\Otaconnect\StructType\PickupReturnRules
     */
    public function setMaximumRental($maximumRental = null)
    {
        // validation for constraint: string
        if (!is_null($maximumRental) && !is_string($maximumRental)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximumRental)), __LINE__);
        }
        $this->MaximumRental = $maximumRental;
        return $this;
    }
    /**
     * Get OvernightInd value
     * @return bool|null
     */
    public function getOvernightInd()
    {
        return $this->OvernightInd;
    }
    /**
     * Set OvernightInd value
     * @param bool $overnightInd
     * @return \OtaInterface\Otaconnect\StructType\PickupReturnRules
     */
    public function setOvernightInd($overnightInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($overnightInd) && !is_bool($overnightInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overnightInd)), __LINE__);
        }
        $this->OvernightInd = $overnightInd;
        return $this;
    }
    /**
     * Get ReturnAllowedInd value
     * @return bool|null
     */
    public function getReturnAllowedInd()
    {
        return $this->ReturnAllowedInd;
    }
    /**
     * Set ReturnAllowedInd value
     * @param bool $returnAllowedInd
     * @return \OtaInterface\Otaconnect\StructType\PickupReturnRules
     */
    public function setReturnAllowedInd($returnAllowedInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnAllowedInd) && !is_bool($returnAllowedInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnAllowedInd)), __LINE__);
        }
        $this->ReturnAllowedInd = $returnAllowedInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PickupReturnRules
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
