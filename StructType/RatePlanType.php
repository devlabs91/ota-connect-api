<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the details of the rate plan as used in the booking process. | Policies and descriptions that apply to a rate plan. | Information significant to defining a rate plan.
 * - type: OTA_CodeType
 * - use: optional
 * @subpackage Structs
 */
class RatePlanType extends AbstractStructBase
{
    /**
     * The Guarantee
     * Meta informations extracted from the WSDL
     * - documentation: Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Guarantee;
    /**
     * The CancelPenalties
     * Meta informations extracted from the WSDL
     * - documentation: Collection of cancellation penalties.
     * - minOccurs: 0
     * @var mixed
     */
    public $CancelPenalties;
    /**
     * The RatePlanDescription
     * Meta informations extracted from the WSDL
     * - documentation: Describes the rate plan.
     * - minOccurs: 0
     * @var mixed
     */
    public $RatePlanDescription;
    /**
     * The RatePlanInclusions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RatePlanInclusions
     */
    public $RatePlanInclusions;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - documentation: Commission associated with the RatePlan. This can be a percentage or a flat amount.
     * - minOccurs: 0
     * @var mixed
     */
    public $Commission;
    /**
     * The MealsIncluded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MealsIncluded
     */
    public $MealsIncluded;
    /**
     * The RestrictionStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RestrictionStatus
     */
    public $RestrictionStatus;
    /**
     * The AdditionalDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $AdditionalDetails;
    /**
     * The BookingCode
     * Meta informations extracted from the WSDL
     * - documentation: This is used to indicate the item booked and is primarily used to exchange information with GDSs.
     * - use: optional
     * @var string
     */
    public $BookingCode;
    /**
     * The RatePlanCode
     * Meta informations extracted from the WSDL
     * - documentation: The RatePlanCode assigned by the receiving system for the inventory item in response to a new rate plan notification. (Implementation Notes: This would only be returned when the notification is of type New and the sender is
     * translating RatePlanCode values. On subsequent transactions for this rate plan, the sender would populate the RatePlanCode attribute with this value returned by the receiver.)
     * - use: optional
     * @var string
     */
    public $RatePlanCode;
    /**
     * The RateIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Information pertaining to the availability of the rate plan.
     * - use: optional
     * @var string
     */
    public $RateIndicator;
    /**
     * The RatePlanType
     * Meta informations extracted from the WSDL
     * - documentation: An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     * - use: optional
     * @var string
     */
    public $RatePlanType;
    /**
     * The RatePlanID
     * Meta informations extracted from the WSDL
     * - documentation: A text field used to provide a special ID code that is associated with the rate and is required in the reservation request in order to obtain the rate. Examples are a corporate ID number, a promotion code or a membership number.
     * - use: optional
     * @var string
     */
    public $RatePlanID;
    /**
     * The RatePlanName
     * Meta informations extracted from the WSDL
     * - documentation: Provides the name of the rate plan or group. Typically used with RatePlanType to further describe the rate plan.
     * - use: optional
     * @var string
     */
    public $RatePlanName;
    /**
     * The MarketCode
     * Meta informations extracted from the WSDL
     * - documentation: The code that relates to the market being sold to (e.g., the corporate market, packages).
     * - use: optional
     * @var string
     */
    public $MarketCode;
    /**
     * The AvailabilityStatus
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify an availability status for the rate plan.
     * - use: optional
     * @var string
     */
    public $AvailabilityStatus;
    /**
     * The ID_RequiredInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates proof of qualification for this rate is required.
     * - use: optional
     * @var bool
     */
    public $ID_RequiredInd;
    /**
     * The PriceViewableInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the price for this rate plan can be viewed by the guest. When false, the guest must contact another entity to obtain price information.
     * - use: optional
     * @var bool
     */
    public $PriceViewableInd;
    /**
     * The QualificationType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of document required by the guest to qualify for this rate plan. Refer to OpenTravel Code List Document Type (DOC).
     * - use: optional
     * @var string
     */
    public $QualificationType;
    /**
     * The AvailableQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Provides the number of rooms available within this rate plan.
     * - use: optional
     * @var int
     */
    public $AvailableQuantity;
    /**
     * The PrepaidIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates if the rate is a prepaid rate.
     * - use: optional
     * @var bool
     */
    public $PrepaidIndicator;
    /**
     * Constructor method for RatePlanType
     * @uses RatePlanType::setGuarantee()
     * @uses RatePlanType::setCancelPenalties()
     * @uses RatePlanType::setRatePlanDescription()
     * @uses RatePlanType::setRatePlanInclusions()
     * @uses RatePlanType::setCommission()
     * @uses RatePlanType::setMealsIncluded()
     * @uses RatePlanType::setRestrictionStatus()
     * @uses RatePlanType::setAdditionalDetails()
     * @uses RatePlanType::setBookingCode()
     * @uses RatePlanType::setRatePlanCode()
     * @uses RatePlanType::setRateIndicator()
     * @uses RatePlanType::setRatePlanType()
     * @uses RatePlanType::setRatePlanID()
     * @uses RatePlanType::setRatePlanName()
     * @uses RatePlanType::setMarketCode()
     * @uses RatePlanType::setAvailabilityStatus()
     * @uses RatePlanType::setID_RequiredInd()
     * @uses RatePlanType::setPriceViewableInd()
     * @uses RatePlanType::setQualificationType()
     * @uses RatePlanType::setAvailableQuantity()
     * @uses RatePlanType::setPrepaidIndicator()
     * @param mixed[] $guarantee
     * @param mixed $cancelPenalties
     * @param mixed $ratePlanDescription
     * @param \OtaInterface\Otaconnect\StructType\RatePlanInclusions $ratePlanInclusions
     * @param mixed $commission
     * @param \OtaInterface\Otaconnect\StructType\MealsIncluded $mealsIncluded
     * @param \OtaInterface\Otaconnect\StructType\RestrictionStatus $restrictionStatus
     * @param mixed $additionalDetails
     * @param string $bookingCode
     * @param string $ratePlanCode
     * @param string $rateIndicator
     * @param string $ratePlanType
     * @param string $ratePlanID
     * @param string $ratePlanName
     * @param string $marketCode
     * @param string $availabilityStatus
     * @param bool $iD_RequiredInd
     * @param bool $priceViewableInd
     * @param string $qualificationType
     * @param int $availableQuantity
     * @param bool $prepaidIndicator
     */
    public function __construct(array $guarantee = array(), $cancelPenalties = null, $ratePlanDescription = null, \OtaInterface\Otaconnect\StructType\RatePlanInclusions $ratePlanInclusions = null, $commission = null, \OtaInterface\Otaconnect\StructType\MealsIncluded $mealsIncluded = null, \OtaInterface\Otaconnect\StructType\RestrictionStatus $restrictionStatus = null, $additionalDetails = null, $bookingCode = null, $ratePlanCode = null, $rateIndicator = null, $ratePlanType = null, $ratePlanID = null, $ratePlanName = null, $marketCode = null, $availabilityStatus = null, $iD_RequiredInd = null, $priceViewableInd = null, $qualificationType = null, $availableQuantity = null, $prepaidIndicator = null)
    {
        $this
            ->setGuarantee($guarantee)
            ->setCancelPenalties($cancelPenalties)
            ->setRatePlanDescription($ratePlanDescription)
            ->setRatePlanInclusions($ratePlanInclusions)
            ->setCommission($commission)
            ->setMealsIncluded($mealsIncluded)
            ->setRestrictionStatus($restrictionStatus)
            ->setAdditionalDetails($additionalDetails)
            ->setBookingCode($bookingCode)
            ->setRatePlanCode($ratePlanCode)
            ->setRateIndicator($rateIndicator)
            ->setRatePlanType($ratePlanType)
            ->setRatePlanID($ratePlanID)
            ->setRatePlanName($ratePlanName)
            ->setMarketCode($marketCode)
            ->setAvailabilityStatus($availabilityStatus)
            ->setID_RequiredInd($iD_RequiredInd)
            ->setPriceViewableInd($priceViewableInd)
            ->setQualificationType($qualificationType)
            ->setAvailableQuantity($availableQuantity)
            ->setPrepaidIndicator($prepaidIndicator);
    }
    /**
     * Get Guarantee value
     * @return mixed[]|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @throws \InvalidArgumentException
     * @param mixed[] $guarantee
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setGuarantee(array $guarantee = array())
    {
        foreach ($guarantee as $ratePlanTypeGuaranteeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Guarantee property can only contain items of anyType, "%s" given', is_object($ratePlanTypeGuaranteeItem) ? get_class($ratePlanTypeGuaranteeItem) : gettype($ratePlanTypeGuaranteeItem)), __LINE__);
            }
        }
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Add item to Guarantee value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function addToGuarantee($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Guarantee property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Guarantee[] = $item;
        return $this;
    }
    /**
     * Get CancelPenalties value
     * @return mixed|null
     */
    public function getCancelPenalties()
    {
        return $this->CancelPenalties;
    }
    /**
     * Set CancelPenalties value
     * @param mixed $cancelPenalties
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setCancelPenalties($cancelPenalties = null)
    {
        $this->CancelPenalties = $cancelPenalties;
        return $this;
    }
    /**
     * Get RatePlanDescription value
     * @return mixed|null
     */
    public function getRatePlanDescription()
    {
        return $this->RatePlanDescription;
    }
    /**
     * Set RatePlanDescription value
     * @param mixed $ratePlanDescription
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setRatePlanDescription($ratePlanDescription = null)
    {
        $this->RatePlanDescription = $ratePlanDescription;
        return $this;
    }
    /**
     * Get RatePlanInclusions value
     * @return \OtaInterface\Otaconnect\StructType\RatePlanInclusions|null
     */
    public function getRatePlanInclusions()
    {
        return $this->RatePlanInclusions;
    }
    /**
     * Set RatePlanInclusions value
     * @param \OtaInterface\Otaconnect\StructType\RatePlanInclusions $ratePlanInclusions
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setRatePlanInclusions(\OtaInterface\Otaconnect\StructType\RatePlanInclusions $ratePlanInclusions = null)
    {
        $this->RatePlanInclusions = $ratePlanInclusions;
        return $this;
    }
    /**
     * Get Commission value
     * @return mixed|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param mixed $commission
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setCommission($commission = null)
    {
        $this->Commission = $commission;
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
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setMealsIncluded(\OtaInterface\Otaconnect\StructType\MealsIncluded $mealsIncluded = null)
    {
        $this->MealsIncluded = $mealsIncluded;
        return $this;
    }
    /**
     * Get RestrictionStatus value
     * @return \OtaInterface\Otaconnect\StructType\RestrictionStatus|null
     */
    public function getRestrictionStatus()
    {
        return $this->RestrictionStatus;
    }
    /**
     * Set RestrictionStatus value
     * @param \OtaInterface\Otaconnect\StructType\RestrictionStatus $restrictionStatus
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setRestrictionStatus(\OtaInterface\Otaconnect\StructType\RestrictionStatus $restrictionStatus = null)
    {
        $this->RestrictionStatus = $restrictionStatus;
        return $this;
    }
    /**
     * Get AdditionalDetails value
     * @return mixed|null
     */
    public function getAdditionalDetails()
    {
        return $this->AdditionalDetails;
    }
    /**
     * Set AdditionalDetails value
     * @param mixed $additionalDetails
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setAdditionalDetails($additionalDetails = null)
    {
        $this->AdditionalDetails = $additionalDetails;
        return $this;
    }
    /**
     * Get BookingCode value
     * @return string|null
     */
    public function getBookingCode()
    {
        return $this->BookingCode;
    }
    /**
     * Set BookingCode value
     * @param string $bookingCode
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setBookingCode($bookingCode = null)
    {
        // validation for constraint: string
        if (!is_null($bookingCode) && !is_string($bookingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingCode)), __LINE__);
        }
        $this->BookingCode = $bookingCode;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    /**
     * Get RateIndicator value
     * @return string|null
     */
    public function getRateIndicator()
    {
        return $this->RateIndicator;
    }
    /**
     * Set RateIndicator value
     * @param string $rateIndicator
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setRateIndicator($rateIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($rateIndicator) && !is_string($rateIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateIndicator)), __LINE__);
        }
        $this->RateIndicator = $rateIndicator;
        return $this;
    }
    /**
     * Get RatePlanType value
     * @return string|null
     */
    public function getRatePlanType()
    {
        return $this->RatePlanType;
    }
    /**
     * Set RatePlanType value
     * @param string $ratePlanType
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setRatePlanType($ratePlanType = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanType) && !is_string($ratePlanType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanType)), __LINE__);
        }
        $this->RatePlanType = $ratePlanType;
        return $this;
    }
    /**
     * Get RatePlanID value
     * @return string|null
     */
    public function getRatePlanID()
    {
        return $this->RatePlanID;
    }
    /**
     * Set RatePlanID value
     * @param string $ratePlanID
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setRatePlanID($ratePlanID = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanID) && !is_string($ratePlanID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanID)), __LINE__);
        }
        $this->RatePlanID = $ratePlanID;
        return $this;
    }
    /**
     * Get RatePlanName value
     * @return string|null
     */
    public function getRatePlanName()
    {
        return $this->RatePlanName;
    }
    /**
     * Set RatePlanName value
     * @param string $ratePlanName
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setRatePlanName($ratePlanName = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanName) && !is_string($ratePlanName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanName)), __LINE__);
        }
        $this->RatePlanName = $ratePlanName;
        return $this;
    }
    /**
     * Get MarketCode value
     * @return string|null
     */
    public function getMarketCode()
    {
        return $this->MarketCode;
    }
    /**
     * Set MarketCode value
     * @param string $marketCode
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setMarketCode($marketCode = null)
    {
        // validation for constraint: string
        if (!is_null($marketCode) && !is_string($marketCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marketCode)), __LINE__);
        }
        $this->MarketCode = $marketCode;
        return $this;
    }
    /**
     * Get AvailabilityStatus value
     * @return string|null
     */
    public function getAvailabilityStatus()
    {
        return $this->AvailabilityStatus;
    }
    /**
     * Set AvailabilityStatus value
     * @param string $availabilityStatus
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setAvailabilityStatus($availabilityStatus = null)
    {
        // validation for constraint: string
        if (!is_null($availabilityStatus) && !is_string($availabilityStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availabilityStatus)), __LINE__);
        }
        $this->AvailabilityStatus = $availabilityStatus;
        return $this;
    }
    /**
     * Get ID_RequiredInd value
     * @return bool|null
     */
    public function getID_RequiredInd()
    {
        return $this->ID_RequiredInd;
    }
    /**
     * Set ID_RequiredInd value
     * @param bool $iD_RequiredInd
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setID_RequiredInd($iD_RequiredInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($iD_RequiredInd) && !is_bool($iD_RequiredInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($iD_RequiredInd)), __LINE__);
        }
        $this->ID_RequiredInd = $iD_RequiredInd;
        return $this;
    }
    /**
     * Get PriceViewableInd value
     * @return bool|null
     */
    public function getPriceViewableInd()
    {
        return $this->PriceViewableInd;
    }
    /**
     * Set PriceViewableInd value
     * @param bool $priceViewableInd
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setPriceViewableInd($priceViewableInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($priceViewableInd) && !is_bool($priceViewableInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($priceViewableInd)), __LINE__);
        }
        $this->PriceViewableInd = $priceViewableInd;
        return $this;
    }
    /**
     * Get QualificationType value
     * @return string|null
     */
    public function getQualificationType()
    {
        return $this->QualificationType;
    }
    /**
     * Set QualificationType value
     * @param string $qualificationType
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setQualificationType($qualificationType = null)
    {
        // validation for constraint: string
        if (!is_null($qualificationType) && !is_string($qualificationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qualificationType)), __LINE__);
        }
        $this->QualificationType = $qualificationType;
        return $this;
    }
    /**
     * Get AvailableQuantity value
     * @return int|null
     */
    public function getAvailableQuantity()
    {
        return $this->AvailableQuantity;
    }
    /**
     * Set AvailableQuantity value
     * @param int $availableQuantity
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setAvailableQuantity($availableQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($availableQuantity) && !is_numeric($availableQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($availableQuantity)), __LINE__);
        }
        $this->AvailableQuantity = $availableQuantity;
        return $this;
    }
    /**
     * Get PrepaidIndicator value
     * @return bool|null
     */
    public function getPrepaidIndicator()
    {
        return $this->PrepaidIndicator;
    }
    /**
     * Set PrepaidIndicator value
     * @param bool $prepaidIndicator
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
     */
    public function setPrepaidIndicator($prepaidIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($prepaidIndicator) && !is_bool($prepaidIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($prepaidIndicator)), __LINE__);
        }
        $this->PrepaidIndicator = $prepaidIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RatePlanType
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
