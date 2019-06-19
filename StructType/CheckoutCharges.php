<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckoutCharges StructType
 * @subpackage Structs
 */
class CheckoutCharges extends AbstractStructBase
{
    /**
     * The CheckoutCharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * @var \OtaInterface\Otaconnect\StructType\CheckoutCharge[]
     */
    public $CheckoutCharge;
    /**
     * Constructor method for CheckoutCharges
     * @uses CheckoutCharges::setCheckoutCharge()
     * @param \OtaInterface\Otaconnect\StructType\CheckoutCharge[] $checkoutCharge
     */
    public function __construct(array $checkoutCharge = array())
    {
        $this
            ->setCheckoutCharge($checkoutCharge);
    }
    /**
     * Get CheckoutCharge value
     * @return \OtaInterface\Otaconnect\StructType\CheckoutCharge[]|null
     */
    public function getCheckoutCharge()
    {
        return $this->CheckoutCharge;
    }
    /**
     * Set CheckoutCharge value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CheckoutCharge[] $checkoutCharge
     * @return \OtaInterface\Otaconnect\StructType\CheckoutCharges
     */
    public function setCheckoutCharge(array $checkoutCharge = array())
    {
        foreach ($checkoutCharge as $checkoutChargesCheckoutChargeItem) {
            // validation for constraint: itemType
            if (!$checkoutChargesCheckoutChargeItem instanceof \OtaInterface\Otaconnect\StructType\CheckoutCharge) {
                throw new \InvalidArgumentException(sprintf('The CheckoutCharge property can only contain items of \OtaInterface\Otaconnect\StructType\CheckoutCharge, "%s" given', is_object($checkoutChargesCheckoutChargeItem) ? get_class($checkoutChargesCheckoutChargeItem) : gettype($checkoutChargesCheckoutChargeItem)), __LINE__);
            }
        }
        $this->CheckoutCharge = $checkoutCharge;
        return $this;
    }
    /**
     * Add item to CheckoutCharge value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CheckoutCharge $item
     * @return \OtaInterface\Otaconnect\StructType\CheckoutCharges
     */
    public function addToCheckoutCharge(\OtaInterface\Otaconnect\StructType\CheckoutCharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\CheckoutCharge) {
            throw new \InvalidArgumentException(sprintf('The CheckoutCharge property can only contain items of \OtaInterface\Otaconnect\StructType\CheckoutCharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CheckoutCharge[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\CheckoutCharges
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
