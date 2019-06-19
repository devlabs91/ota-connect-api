<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateUploadType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the details of a rate.
 * @subpackage Structs
 */
class RateUploadType extends AbstractStructBase
{
    /**
     * The BaseByGuestAmts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\BaseByGuestAmts
     */
    public $BaseByGuestAmts;
    /**
     * The AdditionalGuestAmounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AdditionalGuestAmounts
     */
    public $AdditionalGuestAmounts;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Fees.
     * - minOccurs: 0
     * @var mixed
     */
    public $Fees;
    /**
     * The GuaranteePolicies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\GuaranteePolicies
     */
    public $GuaranteePolicies;
    /**
     * The CancelPolicies
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Cancellation Policies.
     * - minOccurs: 0
     * @var mixed
     */
    public $CancelPolicies;
    /**
     * The PaymentPolicies
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Payment Policies.
     * - minOccurs: 0
     * @var mixed
     */
    public $PaymentPolicies;
    /**
     * The RateDescription
     * Meta informations extracted from the WSDL
     * - documentation: Desription of Rate being uploaded.
     * - minOccurs: 0
     * @var mixed
     */
    public $RateDescription;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier element allows the trading partners to uniquely identify each Rate being uploaded, for traceable transactions.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The MealsIncluded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MealsIncluded
     */
    public $MealsIncluded;
    /**
     * The AdditionalCharges
     * Meta informations extracted from the WSDL
     * - documentation: Breakout of additional charges as part of the rate plan.
     * - minOccurs: 0
     * @var mixed
     */
    public $AdditionalCharges;
    /**
     * The NumberOfUnits
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of rooms blocked or capped for this rate plan.
     * - use: optional
     * @var int
     */
    public $NumberOfUnits;
    /**
     * The RateTimeUnit
     * Meta informations extracted from the WSDL
     * - documentation: Enumeration of time units upon which the RateAmount is based (e.g., daily, weekly, single rate for full stay).
     * - use: optional
     * @var string
     */
    public $RateTimeUnit;
    /**
     * The UnitMultiplier
     * Meta informations extracted from the WSDL
     * - documentation: The number of RateTimeUnits that the rate Amount is based upon (e.g., flat rate for 3 days).
     * - use: optional
     * @var string
     */
    public $UnitMultiplier;
    /**
     * The MinGuestApplicable
     * Meta informations extracted from the WSDL
     * - documentation: Minimum number of occupants for which this rate is valid (ex 1).
     * - use: optional
     * @var string
     */
    public $MinGuestApplicable;
    /**
     * The MaxGuestApplicable
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of occupants for which this rate is valid (ex 2).
     * - use: optional
     * @var string
     */
    public $MaxGuestApplicable;
    /**
     * The MinLOS
     * Meta informations extracted from the WSDL
     * - documentation: The minimum length of stay required by this rate plan.
     * - use: optional
     * @var string
     */
    public $MinLOS;
    /**
     * The MaxLOS
     * Meta informations extracted from the WSDL
     * - documentation: The maximum length of stay allowed by this rate plan.
     * - use: optional
     * @var string
     */
    public $MaxLOS;
    /**
     * The StayOverDate
     * Meta informations extracted from the WSDL
     * - documentation: Indicates a specific day on which the guest must stay over in order to be eligible for the quoted rate plan.
     * - use: optional
     * @var string
     */
    public $StayOverDate;
    /**
     * The RateTier
     * Meta informations extracted from the WSDL
     * - documentation: Hotel systems often have different tiers for a given rate plan; this attribute is used to designate a specific tier within the rate plan (e.g. high, medium, low).
     * - use: optional
     * @var string
     */
    public $RateTier;
    /**
     * Constructor method for RateUploadType
     * @uses RateUploadType::setBaseByGuestAmts()
     * @uses RateUploadType::setAdditionalGuestAmounts()
     * @uses RateUploadType::setFees()
     * @uses RateUploadType::setGuaranteePolicies()
     * @uses RateUploadType::setCancelPolicies()
     * @uses RateUploadType::setPaymentPolicies()
     * @uses RateUploadType::setRateDescription()
     * @uses RateUploadType::setUniqueID()
     * @uses RateUploadType::setMealsIncluded()
     * @uses RateUploadType::setAdditionalCharges()
     * @uses RateUploadType::setNumberOfUnits()
     * @uses RateUploadType::setRateTimeUnit()
     * @uses RateUploadType::setUnitMultiplier()
     * @uses RateUploadType::setMinGuestApplicable()
     * @uses RateUploadType::setMaxGuestApplicable()
     * @uses RateUploadType::setMinLOS()
     * @uses RateUploadType::setMaxLOS()
     * @uses RateUploadType::setStayOverDate()
     * @uses RateUploadType::setRateTier()
     * @param \OtaInterface\Otaconnect\StructType\BaseByGuestAmts $baseByGuestAmts
     * @param \OtaInterface\Otaconnect\StructType\AdditionalGuestAmounts $additionalGuestAmounts
     * @param mixed $fees
     * @param \OtaInterface\Otaconnect\StructType\GuaranteePolicies $guaranteePolicies
     * @param mixed $cancelPolicies
     * @param mixed $paymentPolicies
     * @param mixed $rateDescription
     * @param mixed $uniqueID
     * @param \OtaInterface\Otaconnect\StructType\MealsIncluded $mealsIncluded
     * @param mixed $additionalCharges
     * @param int $numberOfUnits
     * @param string $rateTimeUnit
     * @param string $unitMultiplier
     * @param string $minGuestApplicable
     * @param string $maxGuestApplicable
     * @param string $minLOS
     * @param string $maxLOS
     * @param string $stayOverDate
     * @param string $rateTier
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\BaseByGuestAmts $baseByGuestAmts = null, \OtaInterface\Otaconnect\StructType\AdditionalGuestAmounts $additionalGuestAmounts = null, $fees = null, \OtaInterface\Otaconnect\StructType\GuaranteePolicies $guaranteePolicies = null, $cancelPolicies = null, $paymentPolicies = null, $rateDescription = null, $uniqueID = null, \OtaInterface\Otaconnect\StructType\MealsIncluded $mealsIncluded = null, $additionalCharges = null, $numberOfUnits = null, $rateTimeUnit = null, $unitMultiplier = null, $minGuestApplicable = null, $maxGuestApplicable = null, $minLOS = null, $maxLOS = null, $stayOverDate = null, $rateTier = null)
    {
        $this
            ->setBaseByGuestAmts($baseByGuestAmts)
            ->setAdditionalGuestAmounts($additionalGuestAmounts)
            ->setFees($fees)
            ->setGuaranteePolicies($guaranteePolicies)
            ->setCancelPolicies($cancelPolicies)
            ->setPaymentPolicies($paymentPolicies)
            ->setRateDescription($rateDescription)
            ->setUniqueID($uniqueID)
            ->setMealsIncluded($mealsIncluded)
            ->setAdditionalCharges($additionalCharges)
            ->setNumberOfUnits($numberOfUnits)
            ->setRateTimeUnit($rateTimeUnit)
            ->setUnitMultiplier($unitMultiplier)
            ->setMinGuestApplicable($minGuestApplicable)
            ->setMaxGuestApplicable($maxGuestApplicable)
            ->setMinLOS($minLOS)
            ->setMaxLOS($maxLOS)
            ->setStayOverDate($stayOverDate)
            ->setRateTier($rateTier);
    }
    /**
     * Get BaseByGuestAmts value
     * @return \OtaInterface\Otaconnect\StructType\BaseByGuestAmts|null
     */
    public function getBaseByGuestAmts()
    {
        return $this->BaseByGuestAmts;
    }
    /**
     * Set BaseByGuestAmts value
     * @param \OtaInterface\Otaconnect\StructType\BaseByGuestAmts $baseByGuestAmts
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setBaseByGuestAmts(\OtaInterface\Otaconnect\StructType\BaseByGuestAmts $baseByGuestAmts = null)
    {
        $this->BaseByGuestAmts = $baseByGuestAmts;
        return $this;
    }
    /**
     * Get AdditionalGuestAmounts value
     * @return \OtaInterface\Otaconnect\StructType\AdditionalGuestAmounts|null
     */
    public function getAdditionalGuestAmounts()
    {
        return $this->AdditionalGuestAmounts;
    }
    /**
     * Set AdditionalGuestAmounts value
     * @param \OtaInterface\Otaconnect\StructType\AdditionalGuestAmounts $additionalGuestAmounts
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setAdditionalGuestAmounts(\OtaInterface\Otaconnect\StructType\AdditionalGuestAmounts $additionalGuestAmounts = null)
    {
        $this->AdditionalGuestAmounts = $additionalGuestAmounts;
        return $this;
    }
    /**
     * Get Fees value
     * @return mixed|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param mixed $fees
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setFees($fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get GuaranteePolicies value
     * @return \OtaInterface\Otaconnect\StructType\GuaranteePolicies|null
     */
    public function getGuaranteePolicies()
    {
        return $this->GuaranteePolicies;
    }
    /**
     * Set GuaranteePolicies value
     * @param \OtaInterface\Otaconnect\StructType\GuaranteePolicies $guaranteePolicies
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setGuaranteePolicies(\OtaInterface\Otaconnect\StructType\GuaranteePolicies $guaranteePolicies = null)
    {
        $this->GuaranteePolicies = $guaranteePolicies;
        return $this;
    }
    /**
     * Get CancelPolicies value
     * @return mixed|null
     */
    public function getCancelPolicies()
    {
        return $this->CancelPolicies;
    }
    /**
     * Set CancelPolicies value
     * @param mixed $cancelPolicies
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setCancelPolicies($cancelPolicies = null)
    {
        $this->CancelPolicies = $cancelPolicies;
        return $this;
    }
    /**
     * Get PaymentPolicies value
     * @return mixed|null
     */
    public function getPaymentPolicies()
    {
        return $this->PaymentPolicies;
    }
    /**
     * Set PaymentPolicies value
     * @param mixed $paymentPolicies
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setPaymentPolicies($paymentPolicies = null)
    {
        $this->PaymentPolicies = $paymentPolicies;
        return $this;
    }
    /**
     * Get RateDescription value
     * @return mixed|null
     */
    public function getRateDescription()
    {
        return $this->RateDescription;
    }
    /**
     * Set RateDescription value
     * @param mixed $rateDescription
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setRateDescription($rateDescription = null)
    {
        $this->RateDescription = $rateDescription;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get MealsIncluded value
     * @return \OtaInterface\Otaconnect\StructType\MealsIncluded|null
     */
    public function getMealsIncluded()
    {
        return $this->MealsIncluded;
    }
    /**
     * Set MealsIncluded value
     * @param \OtaInterface\Otaconnect\StructType\MealsIncluded $mealsIncluded
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setMealsIncluded(\OtaInterface\Otaconnect\StructType\MealsIncluded $mealsIncluded = null)
    {
        $this->MealsIncluded = $mealsIncluded;
        return $this;
    }
    /**
     * Get AdditionalCharges value
     * @return mixed|null
     */
    public function getAdditionalCharges()
    {
        return $this->AdditionalCharges;
    }
    /**
     * Set AdditionalCharges value
     * @param mixed $additionalCharges
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setAdditionalCharges($additionalCharges = null)
    {
        $this->AdditionalCharges = $additionalCharges;
        return $this;
    }
    /**
     * Get NumberOfUnits value
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param int $numberOfUnits
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfUnits) && !is_numeric($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfUnits)), __LINE__);
        }
        $this->NumberOfUnits = $numberOfUnits;
        return $this;
    }
    /**
     * Get RateTimeUnit value
     * @return string|null
     */
    public function getRateTimeUnit()
    {
        return $this->RateTimeUnit;
    }
    /**
     * Set RateTimeUnit value
     * @param string $rateTimeUnit
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setRateTimeUnit($rateTimeUnit = null)
    {
        // validation for constraint: string
        if (!is_null($rateTimeUnit) && !is_string($rateTimeUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateTimeUnit)), __LINE__);
        }
        $this->RateTimeUnit = $rateTimeUnit;
        return $this;
    }
    /**
     * Get UnitMultiplier value
     * @return string|null
     */
    public function getUnitMultiplier()
    {
        return $this->UnitMultiplier;
    }
    /**
     * Set UnitMultiplier value
     * @param string $unitMultiplier
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setUnitMultiplier($unitMultiplier = null)
    {
        // validation for constraint: string
        if (!is_null($unitMultiplier) && !is_string($unitMultiplier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitMultiplier)), __LINE__);
        }
        $this->UnitMultiplier = $unitMultiplier;
        return $this;
    }
    /**
     * Get MinGuestApplicable value
     * @return string|null
     */
    public function getMinGuestApplicable()
    {
        return $this->MinGuestApplicable;
    }
    /**
     * Set MinGuestApplicable value
     * @param string $minGuestApplicable
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setMinGuestApplicable($minGuestApplicable = null)
    {
        // validation for constraint: string
        if (!is_null($minGuestApplicable) && !is_string($minGuestApplicable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minGuestApplicable)), __LINE__);
        }
        $this->MinGuestApplicable = $minGuestApplicable;
        return $this;
    }
    /**
     * Get MaxGuestApplicable value
     * @return string|null
     */
    public function getMaxGuestApplicable()
    {
        return $this->MaxGuestApplicable;
    }
    /**
     * Set MaxGuestApplicable value
     * @param string $maxGuestApplicable
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setMaxGuestApplicable($maxGuestApplicable = null)
    {
        // validation for constraint: string
        if (!is_null($maxGuestApplicable) && !is_string($maxGuestApplicable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxGuestApplicable)), __LINE__);
        }
        $this->MaxGuestApplicable = $maxGuestApplicable;
        return $this;
    }
    /**
     * Get MinLOS value
     * @return string|null
     */
    public function getMinLOS()
    {
        return $this->MinLOS;
    }
    /**
     * Set MinLOS value
     * @param string $minLOS
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setMinLOS($minLOS = null)
    {
        // validation for constraint: string
        if (!is_null($minLOS) && !is_string($minLOS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minLOS)), __LINE__);
        }
        $this->MinLOS = $minLOS;
        return $this;
    }
    /**
     * Get MaxLOS value
     * @return string|null
     */
    public function getMaxLOS()
    {
        return $this->MaxLOS;
    }
    /**
     * Set MaxLOS value
     * @param string $maxLOS
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setMaxLOS($maxLOS = null)
    {
        // validation for constraint: string
        if (!is_null($maxLOS) && !is_string($maxLOS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxLOS)), __LINE__);
        }
        $this->MaxLOS = $maxLOS;
        return $this;
    }
    /**
     * Get StayOverDate value
     * @return string|null
     */
    public function getStayOverDate()
    {
        return $this->StayOverDate;
    }
    /**
     * Set StayOverDate value
     * @param string $stayOverDate
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setStayOverDate($stayOverDate = null)
    {
        // validation for constraint: string
        if (!is_null($stayOverDate) && !is_string($stayOverDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stayOverDate)), __LINE__);
        }
        $this->StayOverDate = $stayOverDate;
        return $this;
    }
    /**
     * Get RateTier value
     * @return string|null
     */
    public function getRateTier()
    {
        return $this->RateTier;
    }
    /**
     * Set RateTier value
     * @param string $rateTier
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
     */
    public function setRateTier($rateTier = null)
    {
        // validation for constraint: string
        if (!is_null($rateTier) && !is_string($rateTier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateTier)), __LINE__);
        }
        $this->RateTier = $rateTier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RateUploadType
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
