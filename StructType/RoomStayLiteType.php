<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStayLiteType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Summary version of the RoomStayType, initially created for the Travel Itinerary Message set.
 * @subpackage Structs
 */
class RoomStayLiteType extends AbstractStructBase
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
     * - documentation: Number of guests associated with this reservation.
     * - minOccurs: 0
     * @var mixed
     */
    public $GuestCounts;
    /**
     * The TimeSpan
     * Meta informations extracted from the WSDL
     * - documentation: Date and time of check-in and check-out.
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
     * The DepositPayment
     * Meta informations extracted from the WSDL
     * - documentation: A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $DepositPayment;
    /**
     * The BasicPropertyInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\BasicPropertyInfo
     */
    public $BasicPropertyInfo;
    /**
     * Constructor method for RoomStayLiteType
     * @uses RoomStayLiteType::setRoomTypes()
     * @uses RoomStayLiteType::setRatePlans()
     * @uses RoomStayLiteType::setRoomRates()
     * @uses RoomStayLiteType::setGuestCounts()
     * @uses RoomStayLiteType::setTimeSpan()
     * @uses RoomStayLiteType::setGuarantee()
     * @uses RoomStayLiteType::setDepositPayment()
     * @uses RoomStayLiteType::setBasicPropertyInfo()
     * @param \OtaInterface\Otaconnect\StructType\RoomTypes $roomTypes
     * @param \OtaInterface\Otaconnect\StructType\RatePlans $ratePlans
     * @param \OtaInterface\Otaconnect\StructType\RoomRates $roomRates
     * @param mixed $guestCounts
     * @param mixed $timeSpan
     * @param mixed[] $guarantee
     * @param mixed[] $depositPayment
     * @param \OtaInterface\Otaconnect\StructType\BasicPropertyInfo $basicPropertyInfo
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\RoomTypes $roomTypes = null, \OtaInterface\Otaconnect\StructType\RatePlans $ratePlans = null, \OtaInterface\Otaconnect\StructType\RoomRates $roomRates = null, $guestCounts = null, $timeSpan = null, array $guarantee = array(), array $depositPayment = array(), \OtaInterface\Otaconnect\StructType\BasicPropertyInfo $basicPropertyInfo = null)
    {
        $this
            ->setRoomTypes($roomTypes)
            ->setRatePlans($ratePlans)
            ->setRoomRates($roomRates)
            ->setGuestCounts($guestCounts)
            ->setTimeSpan($timeSpan)
            ->setGuarantee($guarantee)
            ->setDepositPayment($depositPayment)
            ->setBasicPropertyInfo($basicPropertyInfo);
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
     * @return \OtaInterface\Otaconnect\StructType\RoomStayLiteType
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
     * @return \OtaInterface\Otaconnect\StructType\RoomStayLiteType
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
     * @return \OtaInterface\Otaconnect\StructType\RoomStayLiteType
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
     * @return \OtaInterface\Otaconnect\StructType\RoomStayLiteType
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
     * @return \OtaInterface\Otaconnect\StructType\RoomStayLiteType
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
     * @return \OtaInterface\Otaconnect\StructType\RoomStayLiteType
     */
    public function setGuarantee(array $guarantee = array())
    {
        foreach ($guarantee as $roomStayLiteTypeGuaranteeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Guarantee property can only contain items of anyType, "%s" given', is_object($roomStayLiteTypeGuaranteeItem) ? get_class($roomStayLiteTypeGuaranteeItem) : gettype($roomStayLiteTypeGuaranteeItem)), __LINE__);
            }
        }
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Add item to Guarantee value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\RoomStayLiteType
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
     * Get DepositPayment value
     * @return mixed[]|null
     */
    public function getDepositPayment()
    {
        return $this->DepositPayment;
    }
    /**
     * Set DepositPayment value
     * @throws \InvalidArgumentException
     * @param mixed[] $depositPayment
     * @return \OtaInterface\Otaconnect\StructType\RoomStayLiteType
     */
    public function setDepositPayment(array $depositPayment = array())
    {
        foreach ($depositPayment as $roomStayLiteTypeDepositPaymentItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The DepositPayment property can only contain items of anyType, "%s" given', is_object($roomStayLiteTypeDepositPaymentItem) ? get_class($roomStayLiteTypeDepositPaymentItem) : gettype($roomStayLiteTypeDepositPaymentItem)), __LINE__);
            }
        }
        $this->DepositPayment = $depositPayment;
        return $this;
    }
    /**
     * Add item to DepositPayment value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\RoomStayLiteType
     */
    public function addToDepositPayment($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The DepositPayment property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DepositPayment[] = $item;
        return $this;
    }
    /**
     * Get BasicPropertyInfo value
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfo|null
     */
    public function getBasicPropertyInfo()
    {
        return $this->BasicPropertyInfo;
    }
    /**
     * Set BasicPropertyInfo value
     * @param \OtaInterface\Otaconnect\StructType\BasicPropertyInfo $basicPropertyInfo
     * @return \OtaInterface\Otaconnect\StructType\RoomStayLiteType
     */
    public function setBasicPropertyInfo(\OtaInterface\Otaconnect\StructType\BasicPropertyInfo $basicPropertyInfo = null)
    {
        $this->BasicPropertyInfo = $basicPropertyInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RoomStayLiteType
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
