<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingPrices StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the booking prices for the booking.
 * @subpackage Structs
 */
class BookingPrices extends AbstractStructBase
{
    /**
     * The BookingPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\BookingPrice[]
     */
    public $BookingPrice;
    /**
     * Constructor method for BookingPrices
     * @uses BookingPrices::setBookingPrice()
     * @param \OtaInterface\Otaconnect\StructType\BookingPrice[] $bookingPrice
     */
    public function __construct(array $bookingPrice = array())
    {
        $this
            ->setBookingPrice($bookingPrice);
    }
    /**
     * Get BookingPrice value
     * @return \OtaInterface\Otaconnect\StructType\BookingPrice[]|null
     */
    public function getBookingPrice()
    {
        return $this->BookingPrice;
    }
    /**
     * Set BookingPrice value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\BookingPrice[] $bookingPrice
     * @return \OtaInterface\Otaconnect\StructType\BookingPrices
     */
    public function setBookingPrice(array $bookingPrice = array())
    {
        foreach ($bookingPrice as $bookingPricesBookingPriceItem) {
            // validation for constraint: itemType
            if (!$bookingPricesBookingPriceItem instanceof \OtaInterface\Otaconnect\StructType\BookingPrice) {
                throw new \InvalidArgumentException(sprintf('The BookingPrice property can only contain items of \OtaInterface\Otaconnect\StructType\BookingPrice, "%s" given', is_object($bookingPricesBookingPriceItem) ? get_class($bookingPricesBookingPriceItem) : gettype($bookingPricesBookingPriceItem)), __LINE__);
            }
        }
        $this->BookingPrice = $bookingPrice;
        return $this;
    }
    /**
     * Add item to BookingPrice value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\BookingPrice $item
     * @return \OtaInterface\Otaconnect\StructType\BookingPrices
     */
    public function addToBookingPrice(\OtaInterface\Otaconnect\StructType\BookingPrice $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\BookingPrice) {
            throw new \InvalidArgumentException(sprintf('The BookingPrice property can only contain items of \OtaInterface\Otaconnect\StructType\BookingPrice, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookingPrice[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\BookingPrices
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
