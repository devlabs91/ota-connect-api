<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestPrices StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the guest level price information.
 * @subpackage Structs
 */
class GuestPrices extends AbstractStructBase
{
    /**
     * The GuestPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * @var \OtaInterface\Otaconnect\StructType\GuestPrice[]
     */
    public $GuestPrice;
    /**
     * Constructor method for GuestPrices
     * @uses GuestPrices::setGuestPrice()
     * @param \OtaInterface\Otaconnect\StructType\GuestPrice[] $guestPrice
     */
    public function __construct(array $guestPrice = array())
    {
        $this
            ->setGuestPrice($guestPrice);
    }
    /**
     * Get GuestPrice value
     * @return \OtaInterface\Otaconnect\StructType\GuestPrice[]|null
     */
    public function getGuestPrice()
    {
        return $this->GuestPrice;
    }
    /**
     * Set GuestPrice value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\GuestPrice[] $guestPrice
     * @return \OtaInterface\Otaconnect\StructType\GuestPrices
     */
    public function setGuestPrice(array $guestPrice = array())
    {
        foreach ($guestPrice as $guestPricesGuestPriceItem) {
            // validation for constraint: itemType
            if (!$guestPricesGuestPriceItem instanceof \OtaInterface\Otaconnect\StructType\GuestPrice) {
                throw new \InvalidArgumentException(sprintf('The GuestPrice property can only contain items of \OtaInterface\Otaconnect\StructType\GuestPrice, "%s" given', is_object($guestPricesGuestPriceItem) ? get_class($guestPricesGuestPriceItem) : gettype($guestPricesGuestPriceItem)), __LINE__);
            }
        }
        $this->GuestPrice = $guestPrice;
        return $this;
    }
    /**
     * Add item to GuestPrice value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\GuestPrice $item
     * @return \OtaInterface\Otaconnect\StructType\GuestPrices
     */
    public function addToGuestPrice(\OtaInterface\Otaconnect\StructType\GuestPrice $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\GuestPrice) {
            throw new \InvalidArgumentException(sprintf('The GuestPrice property can only contain items of \OtaInterface\Otaconnect\StructType\GuestPrice, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuestPrice[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\GuestPrices
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
