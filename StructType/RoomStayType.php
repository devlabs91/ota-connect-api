<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details on the Room Stay including Guest Counts, Time Span of this Room Stay, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Room Stay and finally finacial information related
 * to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
 * @subpackage Structs
 */
class RoomStayType extends AbstractStructBase
{
    /**
     * The RoomTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RoomTypes
     */
    public $RoomTypes;
    /**
     * The RatePlans
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RatePlans
     */
    public $RatePlans;
    /**
     * The RoomRates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RoomRates
     */
    public $RoomRates;
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Guest Counts associated with Room Stay. A child Guest Count element is required for each distinct age group.
     * - minOccurs: 0
     * @var mixed
     */
    public $GuestCounts;
    /**
     * The TimeSpan
     * Meta informations extracted from the WSDL
     * - documentation: The Time Span which covers the Room Stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $TimeSpan;
    /**
     * The Guarantee
     * Meta informations extracted from the WSDL
     * - documentation: The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Guarantee;
    /**
     * The DepositPayments
     * Meta informations extracted from the WSDL
     * - documentation: A collection of deposit and/or payments for the Room Stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $DepositPayments;
    /**
     * The CancelPenalties
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Cancellation Penalties objects for the Room Stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $CancelPenalties;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - documentation: Discount percentage and/or Amount, code and textual reason for discount.
     * - minOccurs: 0
     * @var mixed
     */
    public $Discount;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - documentation: The total amount charged for the Room Stay including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
     * - minOccurs: 0
     * @var mixed
     */
    public $Total;
    /**
     * The BasicPropertyInfo
     * Meta informations extracted from the WSDL
     * - documentation: Property Information for the Room Stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $BasicPropertyInfo;
    /**
     * The MapURL
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MapURL
     */
    public $MapURL;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The MarketCode
     * Meta informations extracted from the WSDL
     * - documentation: The code that relates to the market being sold to (e.g., the corporate market, packages).
     * - use: optional
     * @var string
     */
    public $MarketCode;
    /**
     * The SourceOfBusiness
     * Meta informations extracted from the WSDL
     * - documentation: To specify where the business came from e.g. radio, newspaper ad, etc.
     * - use: optional
     * @var string
     */
    public $SourceOfBusiness;
    /**
     * The DiscountCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DiscountCode;
    /**
     * The RoomStayStatus
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the status of the room stay.
     * - use: optional
     * @var string
     */
    public $RoomStayStatus;
    /**
     * The WarningRPH
     * Meta informations extracted from the WSDL
     * - documentation: This references the RPH found in the Warning element. Used to identify the warnings associated with this RoomStay.
     * - use: optional
     * @var string
     */
    public $WarningRPH;
    /**
     * The RoomStayLanguage
     * Meta informations extracted from the WSDL
     * - documentation: Language of the response for the RoomStay (property). Note that the requested language may not be available for all properties and so the language of the response for each property may vary.
     * - use: optional
     * @var string
     */
    public $RoomStayLanguage;
    /**
     * Constructor method for RoomStayType
     * @uses RoomStayType::setRoomTypes()
     * @uses RoomStayType::setRatePlans()
     * @uses RoomStayType::setRoomRates()
     * @uses RoomStayType::setGuestCounts()
     * @uses RoomStayType::setTimeSpan()
     * @uses RoomStayType::setGuarantee()
     * @uses RoomStayType::setDepositPayments()
     * @uses RoomStayType::setCancelPenalties()
     * @uses RoomStayType::setDiscount()
     * @uses RoomStayType::setTotal()
     * @uses RoomStayType::setBasicPropertyInfo()
     * @uses RoomStayType::setMapURL()
     * @uses RoomStayType::setTPA_Extensions()
     * @uses RoomStayType::setMarketCode()
     * @uses RoomStayType::setSourceOfBusiness()
     * @uses RoomStayType::setDiscountCode()
     * @uses RoomStayType::setRoomStayStatus()
     * @uses RoomStayType::setWarningRPH()
     * @uses RoomStayType::setRoomStayLanguage()
     * @param \OtaInterface\Otaconnect\StructType\RoomTypes $roomTypes
     * @param \OtaInterface\Otaconnect\StructType\RatePlans $ratePlans
     * @param \OtaInterface\Otaconnect\StructType\RoomRates $roomRates
     * @param mixed $guestCounts
     * @param mixed $timeSpan
     * @param mixed[] $guarantee
     * @param mixed $depositPayments
     * @param mixed $cancelPenalties
     * @param mixed $discount
     * @param mixed $total
     * @param mixed $basicPropertyInfo
     * @param \OtaInterface\Otaconnect\StructType\MapURL $mapURL
     * @param mixed $tPA_Extensions
     * @param string $marketCode
     * @param string $sourceOfBusiness
     * @param string $discountCode
     * @param string $roomStayStatus
     * @param string $warningRPH
     * @param string $roomStayLanguage
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\RoomTypes $roomTypes = null, \OtaInterface\Otaconnect\StructType\RatePlans $ratePlans = null, \OtaInterface\Otaconnect\StructType\RoomRates $roomRates = null, $guestCounts = null, $timeSpan = null, array $guarantee = array(), $depositPayments = null, $cancelPenalties = null, $discount = null, $total = null, $basicPropertyInfo = null, \OtaInterface\Otaconnect\StructType\MapURL $mapURL = null, $tPA_Extensions = null, $marketCode = null, $sourceOfBusiness = null, $discountCode = null, $roomStayStatus = null, $warningRPH = null, $roomStayLanguage = null)
    {
        $this
            ->setRoomTypes($roomTypes)
            ->setRatePlans($ratePlans)
            ->setRoomRates($roomRates)
            ->setGuestCounts($guestCounts)
            ->setTimeSpan($timeSpan)
            ->setGuarantee($guarantee)
            ->setDepositPayments($depositPayments)
            ->setCancelPenalties($cancelPenalties)
            ->setDiscount($discount)
            ->setTotal($total)
            ->setBasicPropertyInfo($basicPropertyInfo)
            ->setMapURL($mapURL)
            ->setTPA_Extensions($tPA_Extensions)
            ->setMarketCode($marketCode)
            ->setSourceOfBusiness($sourceOfBusiness)
            ->setDiscountCode($discountCode)
            ->setRoomStayStatus($roomStayStatus)
            ->setWarningRPH($warningRPH)
            ->setRoomStayLanguage($roomStayLanguage);
    }
    /**
     * Get RoomTypes value
     * @return \OtaInterface\Otaconnect\StructType\RoomTypes|null
     */
    public function getRoomTypes()
    {
        return $this->RoomTypes;
    }
    /**
     * Set RoomTypes value
     * @param \OtaInterface\Otaconnect\StructType\RoomTypes $roomTypes
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setRoomTypes(\OtaInterface\Otaconnect\StructType\RoomTypes $roomTypes = null)
    {
        $this->RoomTypes = $roomTypes;
        return $this;
    }
    /**
     * Get RatePlans value
     * @return \OtaInterface\Otaconnect\StructType\RatePlans|null
     */
    public function getRatePlans()
    {
        return $this->RatePlans;
    }
    /**
     * Set RatePlans value
     * @param \OtaInterface\Otaconnect\StructType\RatePlans $ratePlans
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setRatePlans(\OtaInterface\Otaconnect\StructType\RatePlans $ratePlans = null)
    {
        $this->RatePlans = $ratePlans;
        return $this;
    }
    /**
     * Get RoomRates value
     * @return \OtaInterface\Otaconnect\StructType\RoomRates|null
     */
    public function getRoomRates()
    {
        return $this->RoomRates;
    }
    /**
     * Set RoomRates value
     * @param \OtaInterface\Otaconnect\StructType\RoomRates $roomRates
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setRoomRates(\OtaInterface\Otaconnect\StructType\RoomRates $roomRates = null)
    {
        $this->RoomRates = $roomRates;
        return $this;
    }
    /**
     * Get GuestCounts value
     * @return mixed|null
     */
    public function getGuestCounts()
    {
        return $this->GuestCounts;
    }
    /**
     * Set GuestCounts value
     * @param mixed $guestCounts
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setGuestCounts($guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Get TimeSpan value
     * @return mixed|null
     */
    public function getTimeSpan()
    {
        return $this->TimeSpan;
    }
    /**
     * Set TimeSpan value
     * @param mixed $timeSpan
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setTimeSpan($timeSpan = null)
    {
        $this->TimeSpan = $timeSpan;
        return $this;
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
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setGuarantee(array $guarantee = array())
    {
        foreach ($guarantee as $roomStayTypeGuaranteeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Guarantee property can only contain items of anyType, "%s" given', is_object($roomStayTypeGuaranteeItem) ? get_class($roomStayTypeGuaranteeItem) : gettype($roomStayTypeGuaranteeItem)), __LINE__);
            }
        }
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Add item to Guarantee value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
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
     * Get DepositPayments value
     * @return mixed|null
     */
    public function getDepositPayments()
    {
        return $this->DepositPayments;
    }
    /**
     * Set DepositPayments value
     * @param mixed $depositPayments
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setDepositPayments($depositPayments = null)
    {
        $this->DepositPayments = $depositPayments;
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
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setCancelPenalties($cancelPenalties = null)
    {
        $this->CancelPenalties = $cancelPenalties;
        return $this;
    }
    /**
     * Get Discount value
     * @return mixed|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @param mixed $discount
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setDiscount($discount = null)
    {
        $this->Discount = $discount;
        return $this;
    }
    /**
     * Get Total value
     * @return mixed|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param mixed $total
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setTotal($total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get BasicPropertyInfo value
     * @return mixed|null
     */
    public function getBasicPropertyInfo()
    {
        return $this->BasicPropertyInfo;
    }
    /**
     * Set BasicPropertyInfo value
     * @param mixed $basicPropertyInfo
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setBasicPropertyInfo($basicPropertyInfo = null)
    {
        $this->BasicPropertyInfo = $basicPropertyInfo;
        return $this;
    }
    /**
     * Get MapURL value
     * @return \OtaInterface\Otaconnect\StructType\MapURL|null
     */
    public function getMapURL()
    {
        return $this->MapURL;
    }
    /**
     * Set MapURL value
     * @param \OtaInterface\Otaconnect\StructType\MapURL $mapURL
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setMapURL(\OtaInterface\Otaconnect\StructType\MapURL $mapURL = null)
    {
        $this->MapURL = $mapURL;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
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
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
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
     * Get SourceOfBusiness value
     * @return string|null
     */
    public function getSourceOfBusiness()
    {
        return $this->SourceOfBusiness;
    }
    /**
     * Set SourceOfBusiness value
     * @param string $sourceOfBusiness
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setSourceOfBusiness($sourceOfBusiness = null)
    {
        // validation for constraint: string
        if (!is_null($sourceOfBusiness) && !is_string($sourceOfBusiness)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceOfBusiness)), __LINE__);
        }
        $this->SourceOfBusiness = $sourceOfBusiness;
        return $this;
    }
    /**
     * Get DiscountCode value
     * @return string|null
     */
    public function getDiscountCode()
    {
        return $this->DiscountCode;
    }
    /**
     * Set DiscountCode value
     * @param string $discountCode
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setDiscountCode($discountCode = null)
    {
        // validation for constraint: string
        if (!is_null($discountCode) && !is_string($discountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discountCode)), __LINE__);
        }
        $this->DiscountCode = $discountCode;
        return $this;
    }
    /**
     * Get RoomStayStatus value
     * @return string|null
     */
    public function getRoomStayStatus()
    {
        return $this->RoomStayStatus;
    }
    /**
     * Set RoomStayStatus value
     * @param string $roomStayStatus
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setRoomStayStatus($roomStayStatus = null)
    {
        // validation for constraint: string
        if (!is_null($roomStayStatus) && !is_string($roomStayStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomStayStatus)), __LINE__);
        }
        $this->RoomStayStatus = $roomStayStatus;
        return $this;
    }
    /**
     * Get WarningRPH value
     * @return string|null
     */
    public function getWarningRPH()
    {
        return $this->WarningRPH;
    }
    /**
     * Set WarningRPH value
     * @param string $warningRPH
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setWarningRPH($warningRPH = null)
    {
        // validation for constraint: string
        if (!is_null($warningRPH) && !is_string($warningRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warningRPH)), __LINE__);
        }
        $this->WarningRPH = $warningRPH;
        return $this;
    }
    /**
     * Get RoomStayLanguage value
     * @return string|null
     */
    public function getRoomStayLanguage()
    {
        return $this->RoomStayLanguage;
    }
    /**
     * Set RoomStayLanguage value
     * @param string $roomStayLanguage
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
     */
    public function setRoomStayLanguage($roomStayLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($roomStayLanguage) && !is_string($roomStayLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomStayLanguage)), __LINE__);
        }
        $this->RoomStayLanguage = $roomStayLanguage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RoomStayType
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
