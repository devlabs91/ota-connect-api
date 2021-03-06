<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingRulesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of BookingRule.
 * @subpackage Structs
 */
class BookingRulesType extends AbstractStructBase
{
    /**
     * The BookingRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\BookingRule[]
     */
    public $BookingRule;
    /**
     * Constructor method for BookingRulesType
     * @uses BookingRulesType::setBookingRule()
     * @param \OtaInterface\Otaconnect\StructType\BookingRule[] $bookingRule
     */
    public function __construct(array $bookingRule = array())
    {
        $this
            ->setBookingRule($bookingRule);
    }
    /**
     * Get BookingRule value
     * @return \OtaInterface\Otaconnect\StructType\BookingRule[]|null
     */
    public function getBookingRule()
    {
        return $this->BookingRule;
    }
    /**
     * Set BookingRule value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\BookingRule[] $bookingRule
     * @return \OtaInterface\Otaconnect\StructType\BookingRulesType
     */
    public function setBookingRule(array $bookingRule = array())
    {
        foreach ($bookingRule as $bookingRulesTypeBookingRuleItem) {
            // validation for constraint: itemType
            if (!$bookingRulesTypeBookingRuleItem instanceof \OtaInterface\Otaconnect\StructType\BookingRule) {
                throw new \InvalidArgumentException(sprintf('The BookingRule property can only contain items of \OtaInterface\Otaconnect\StructType\BookingRule, "%s" given', is_object($bookingRulesTypeBookingRuleItem) ? get_class($bookingRulesTypeBookingRuleItem) : gettype($bookingRulesTypeBookingRuleItem)), __LINE__);
            }
        }
        $this->BookingRule = $bookingRule;
        return $this;
    }
    /**
     * Add item to BookingRule value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\BookingRule $item
     * @return \OtaInterface\Otaconnect\StructType\BookingRulesType
     */
    public function addToBookingRule(\OtaInterface\Otaconnect\StructType\BookingRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\BookingRule) {
            throw new \InvalidArgumentException(sprintf('The BookingRule property can only contain items of \OtaInterface\Otaconnect\StructType\BookingRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookingRule[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\BookingRulesType
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
