<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountPricing StructType
 * Meta informations extracted from the WSDL
 * - documentation: The information needed when a passenger presents a discount/promotional coupon for a dollar/percentage off the fare or when a passenger qualifies for a percentage discount such as a senior discount. | The information needed when a
 * passenger presents a discount/promotional coupon for a dollar/percentage of the fare or when a passenger qualifies for a percentage discount such as a senior discount.
 * @subpackage Structs
 */
class DiscountPricing extends AbstractStructBase
{
    /**
     * The FlightReference
     * Meta informations extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\FlightReference[]
     */
    public $FlightReference;
    /**
     * Constructor method for DiscountPricing
     * @uses DiscountPricing::setFlightReference()
     * @param \OtaInterface\Otaconnect\StructType\FlightReference[] $flightReference
     */
    public function __construct(array $flightReference = array())
    {
        $this
            ->setFlightReference($flightReference);
    }
    /**
     * Get FlightReference value
     * @return \OtaInterface\Otaconnect\StructType\FlightReference[]|null
     */
    public function getFlightReference()
    {
        return $this->FlightReference;
    }
    /**
     * Set FlightReference value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\FlightReference[] $flightReference
     * @return \OtaInterface\Otaconnect\StructType\DiscountPricing
     */
    public function setFlightReference(array $flightReference = array())
    {
        foreach ($flightReference as $discountPricingFlightReferenceItem) {
            // validation for constraint: itemType
            if (!$discountPricingFlightReferenceItem instanceof \OtaInterface\Otaconnect\StructType\FlightReference) {
                throw new \InvalidArgumentException(sprintf('The FlightReference property can only contain items of \OtaInterface\Otaconnect\StructType\FlightReference, "%s" given', is_object($discountPricingFlightReferenceItem) ? get_class($discountPricingFlightReferenceItem) : gettype($discountPricingFlightReferenceItem)), __LINE__);
            }
        }
        $this->FlightReference = $flightReference;
        return $this;
    }
    /**
     * Add item to FlightReference value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\FlightReference $item
     * @return \OtaInterface\Otaconnect\StructType\DiscountPricing
     */
    public function addToFlightReference(\OtaInterface\Otaconnect\StructType\FlightReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\FlightReference) {
            throw new \InvalidArgumentException(sprintf('The FlightReference property can only contain items of \OtaInterface\Otaconnect\StructType\FlightReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightReference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\DiscountPricing
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
