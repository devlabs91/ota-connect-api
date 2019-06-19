<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseBookingInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains pricing and payment information for the booking.
 * @subpackage Structs
 */
class CruiseBookingInfoType extends AbstractStructBase
{
    /**
     * The BookingPrices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\BookingPrices
     */
    public $BookingPrices;
    /**
     * The PaymentSchedule
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PaymentSchedule
     */
    public $PaymentSchedule;
    /**
     * The GuestPrices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\GuestPrices
     */
    public $GuestPrices;
    /**
     * The PolicyInfo
     * Meta informations extracted from the WSDL
     * - documentation: May be used to provide price policy information.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PolicyInfo;
    /**
     * Constructor method for CruiseBookingInfoType
     * @uses CruiseBookingInfoType::setBookingPrices()
     * @uses CruiseBookingInfoType::setPaymentSchedule()
     * @uses CruiseBookingInfoType::setGuestPrices()
     * @uses CruiseBookingInfoType::setPolicyInfo()
     * @param \OtaInterface\Otaconnect\StructType\BookingPrices $bookingPrices
     * @param \OtaInterface\Otaconnect\StructType\PaymentSchedule $paymentSchedule
     * @param \OtaInterface\Otaconnect\StructType\GuestPrices $guestPrices
     * @param mixed[] $policyInfo
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\BookingPrices $bookingPrices = null, \OtaInterface\Otaconnect\StructType\PaymentSchedule $paymentSchedule = null, \OtaInterface\Otaconnect\StructType\GuestPrices $guestPrices = null, array $policyInfo = array())
    {
        $this
            ->setBookingPrices($bookingPrices)
            ->setPaymentSchedule($paymentSchedule)
            ->setGuestPrices($guestPrices)
            ->setPolicyInfo($policyInfo);
    }
    /**
     * Get BookingPrices value
     * @return \OtaInterface\Otaconnect\StructType\BookingPrices|null
     */
    public function getBookingPrices()
    {
        return $this->BookingPrices;
    }
    /**
     * Set BookingPrices value
     * @param \OtaInterface\Otaconnect\StructType\BookingPrices $bookingPrices
     * @return \OtaInterface\Otaconnect\StructType\CruiseBookingInfoType
     */
    public function setBookingPrices(\OtaInterface\Otaconnect\StructType\BookingPrices $bookingPrices = null)
    {
        $this->BookingPrices = $bookingPrices;
        return $this;
    }
    /**
     * Get PaymentSchedule value
     * @return \OtaInterface\Otaconnect\StructType\PaymentSchedule|null
     */
    public function getPaymentSchedule()
    {
        return $this->PaymentSchedule;
    }
    /**
     * Set PaymentSchedule value
     * @param \OtaInterface\Otaconnect\StructType\PaymentSchedule $paymentSchedule
     * @return \OtaInterface\Otaconnect\StructType\CruiseBookingInfoType
     */
    public function setPaymentSchedule(\OtaInterface\Otaconnect\StructType\PaymentSchedule $paymentSchedule = null)
    {
        $this->PaymentSchedule = $paymentSchedule;
        return $this;
    }
    /**
     * Get GuestPrices value
     * @return \OtaInterface\Otaconnect\StructType\GuestPrices|null
     */
    public function getGuestPrices()
    {
        return $this->GuestPrices;
    }
    /**
     * Set GuestPrices value
     * @param \OtaInterface\Otaconnect\StructType\GuestPrices $guestPrices
     * @return \OtaInterface\Otaconnect\StructType\CruiseBookingInfoType
     */
    public function setGuestPrices(\OtaInterface\Otaconnect\StructType\GuestPrices $guestPrices = null)
    {
        $this->GuestPrices = $guestPrices;
        return $this;
    }
    /**
     * Get PolicyInfo value
     * @return mixed[]|null
     */
    public function getPolicyInfo()
    {
        return $this->PolicyInfo;
    }
    /**
     * Set PolicyInfo value
     * @throws \InvalidArgumentException
     * @param mixed[] $policyInfo
     * @return \OtaInterface\Otaconnect\StructType\CruiseBookingInfoType
     */
    public function setPolicyInfo(array $policyInfo = array())
    {
        foreach ($policyInfo as $cruiseBookingInfoTypePolicyInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PolicyInfo property can only contain items of anyType, "%s" given', is_object($cruiseBookingInfoTypePolicyInfoItem) ? get_class($cruiseBookingInfoTypePolicyInfoItem) : gettype($cruiseBookingInfoTypePolicyInfoItem)), __LINE__);
            }
        }
        $this->PolicyInfo = $policyInfo;
        return $this;
    }
    /**
     * Add item to PolicyInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\CruiseBookingInfoType
     */
    public function addToPolicyInfo($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PolicyInfo property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PolicyInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\CruiseBookingInfoType
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
