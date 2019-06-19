<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRulesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of rules pertaining to the rental rate and/or vehicle.
 * @subpackage Structs
 */
class RateRulesType extends AbstractStructBase
{
    /**
     * The AdvanceBooking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AdvanceBooking
     */
    public $AdvanceBooking;
    /**
     * The PickupReturnRules
     * Meta informations extracted from the WSDL
     * - maxOccurs: 7
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PickupReturnRules[]
     */
    public $PickupReturnRules;
    /**
     * The RateGuarantee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RateGuarantee
     */
    public $RateGuarantee;
    /**
     * The PaymentRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PaymentRules
     */
    public $PaymentRules;
    /**
     * The CancelPenaltyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CancelPenaltyInfo[]
     */
    public $CancelPenaltyInfo;
    /**
     * The RateDeposit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RateDeposit
     */
    public $RateDeposit;
    /**
     * The MinimumKeep
     * Meta informations extracted from the WSDL
     * - documentation: The minimum time (e.g., number of rental days, number of rental hours) required to qualify for a specific rate.
     * - use: optional
     * @var string
     */
    public $MinimumKeep;
    /**
     * The MaximumKeep
     * Meta informations extracted from the WSDL
     * - documentation: The maximum time (e.g., number of rental days, number of rental hours) allowed to qualify for a specific rate.
     * - use: optional
     * @var string
     */
    public $MaximumKeep;
    /**
     * The MaximumRental
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of rental days a vehicle is allowed to be rented.
     * - use: optional
     * @var string
     */
    public $MaximumRental;
    /**
     * Constructor method for RateRulesType
     * @uses RateRulesType::setAdvanceBooking()
     * @uses RateRulesType::setPickupReturnRules()
     * @uses RateRulesType::setRateGuarantee()
     * @uses RateRulesType::setPaymentRules()
     * @uses RateRulesType::setCancelPenaltyInfo()
     * @uses RateRulesType::setRateDeposit()
     * @uses RateRulesType::setMinimumKeep()
     * @uses RateRulesType::setMaximumKeep()
     * @uses RateRulesType::setMaximumRental()
     * @param \OtaInterface\Otaconnect\StructType\AdvanceBooking $advanceBooking
     * @param \OtaInterface\Otaconnect\StructType\PickupReturnRules[] $pickupReturnRules
     * @param \OtaInterface\Otaconnect\StructType\RateGuarantee $rateGuarantee
     * @param \OtaInterface\Otaconnect\StructType\PaymentRules $paymentRules
     * @param \OtaInterface\Otaconnect\StructType\CancelPenaltyInfo[] $cancelPenaltyInfo
     * @param \OtaInterface\Otaconnect\StructType\RateDeposit $rateDeposit
     * @param string $minimumKeep
     * @param string $maximumKeep
     * @param string $maximumRental
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\AdvanceBooking $advanceBooking = null, array $pickupReturnRules = array(), \OtaInterface\Otaconnect\StructType\RateGuarantee $rateGuarantee = null, \OtaInterface\Otaconnect\StructType\PaymentRules $paymentRules = null, array $cancelPenaltyInfo = array(), \OtaInterface\Otaconnect\StructType\RateDeposit $rateDeposit = null, $minimumKeep = null, $maximumKeep = null, $maximumRental = null)
    {
        $this
            ->setAdvanceBooking($advanceBooking)
            ->setPickupReturnRules($pickupReturnRules)
            ->setRateGuarantee($rateGuarantee)
            ->setPaymentRules($paymentRules)
            ->setCancelPenaltyInfo($cancelPenaltyInfo)
            ->setRateDeposit($rateDeposit)
            ->setMinimumKeep($minimumKeep)
            ->setMaximumKeep($maximumKeep)
            ->setMaximumRental($maximumRental);
    }
    /**
     * Get AdvanceBooking value
     * @return \OtaInterface\Otaconnect\StructType\AdvanceBooking|null
     */
    public function getAdvanceBooking()
    {
        return $this->AdvanceBooking;
    }
    /**
     * Set AdvanceBooking value
     * @param \OtaInterface\Otaconnect\StructType\AdvanceBooking $advanceBooking
     * @return \OtaInterface\Otaconnect\StructType\RateRulesType
     */
    public function setAdvanceBooking(\OtaInterface\Otaconnect\StructType\AdvanceBooking $advanceBooking = null)
    {
        $this->AdvanceBooking = $advanceBooking;
        return $this;
    }
    /**
     * Get PickupReturnRules value
     * @return \OtaInterface\Otaconnect\StructType\PickupReturnRules[]|null
     */
    public function getPickupReturnRules()
    {
        return $this->PickupReturnRules;
    }
    /**
     * Set PickupReturnRules value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PickupReturnRules[] $pickupReturnRules
     * @return \OtaInterface\Otaconnect\StructType\RateRulesType
     */
    public function setPickupReturnRules(array $pickupReturnRules = array())
    {
        foreach ($pickupReturnRules as $rateRulesTypePickupReturnRulesItem) {
            // validation for constraint: itemType
            if (!$rateRulesTypePickupReturnRulesItem instanceof \OtaInterface\Otaconnect\StructType\PickupReturnRules) {
                throw new \InvalidArgumentException(sprintf('The PickupReturnRules property can only contain items of \OtaInterface\Otaconnect\StructType\PickupReturnRules, "%s" given', is_object($rateRulesTypePickupReturnRulesItem) ? get_class($rateRulesTypePickupReturnRulesItem) : gettype($rateRulesTypePickupReturnRulesItem)), __LINE__);
            }
        }
        $this->PickupReturnRules = $pickupReturnRules;
        return $this;
    }
    /**
     * Add item to PickupReturnRules value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PickupReturnRules $item
     * @return \OtaInterface\Otaconnect\StructType\RateRulesType
     */
    public function addToPickupReturnRules(\OtaInterface\Otaconnect\StructType\PickupReturnRules $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\PickupReturnRules) {
            throw new \InvalidArgumentException(sprintf('The PickupReturnRules property can only contain items of \OtaInterface\Otaconnect\StructType\PickupReturnRules, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PickupReturnRules[] = $item;
        return $this;
    }
    /**
     * Get RateGuarantee value
     * @return \OtaInterface\Otaconnect\StructType\RateGuarantee|null
     */
    public function getRateGuarantee()
    {
        return $this->RateGuarantee;
    }
    /**
     * Set RateGuarantee value
     * @param \OtaInterface\Otaconnect\StructType\RateGuarantee $rateGuarantee
     * @return \OtaInterface\Otaconnect\StructType\RateRulesType
     */
    public function setRateGuarantee(\OtaInterface\Otaconnect\StructType\RateGuarantee $rateGuarantee = null)
    {
        $this->RateGuarantee = $rateGuarantee;
        return $this;
    }
    /**
     * Get PaymentRules value
     * @return \OtaInterface\Otaconnect\StructType\PaymentRules|null
     */
    public function getPaymentRules()
    {
        return $this->PaymentRules;
    }
    /**
     * Set PaymentRules value
     * @param \OtaInterface\Otaconnect\StructType\PaymentRules $paymentRules
     * @return \OtaInterface\Otaconnect\StructType\RateRulesType
     */
    public function setPaymentRules(\OtaInterface\Otaconnect\StructType\PaymentRules $paymentRules = null)
    {
        $this->PaymentRules = $paymentRules;
        return $this;
    }
    /**
     * Get CancelPenaltyInfo value
     * @return \OtaInterface\Otaconnect\StructType\CancelPenaltyInfo[]|null
     */
    public function getCancelPenaltyInfo()
    {
        return $this->CancelPenaltyInfo;
    }
    /**
     * Set CancelPenaltyInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CancelPenaltyInfo[] $cancelPenaltyInfo
     * @return \OtaInterface\Otaconnect\StructType\RateRulesType
     */
    public function setCancelPenaltyInfo(array $cancelPenaltyInfo = array())
    {
        foreach ($cancelPenaltyInfo as $rateRulesTypeCancelPenaltyInfoItem) {
            // validation for constraint: itemType
            if (!$rateRulesTypeCancelPenaltyInfoItem instanceof \OtaInterface\Otaconnect\StructType\CancelPenaltyInfo) {
                throw new \InvalidArgumentException(sprintf('The CancelPenaltyInfo property can only contain items of \OtaInterface\Otaconnect\StructType\CancelPenaltyInfo, "%s" given', is_object($rateRulesTypeCancelPenaltyInfoItem) ? get_class($rateRulesTypeCancelPenaltyInfoItem) : gettype($rateRulesTypeCancelPenaltyInfoItem)), __LINE__);
            }
        }
        $this->CancelPenaltyInfo = $cancelPenaltyInfo;
        return $this;
    }
    /**
     * Add item to CancelPenaltyInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CancelPenaltyInfo $item
     * @return \OtaInterface\Otaconnect\StructType\RateRulesType
     */
    public function addToCancelPenaltyInfo(\OtaInterface\Otaconnect\StructType\CancelPenaltyInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\CancelPenaltyInfo) {
            throw new \InvalidArgumentException(sprintf('The CancelPenaltyInfo property can only contain items of \OtaInterface\Otaconnect\StructType\CancelPenaltyInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelPenaltyInfo[] = $item;
        return $this;
    }
    /**
     * Get RateDeposit value
     * @return \OtaInterface\Otaconnect\StructType\RateDeposit|null
     */
    public function getRateDeposit()
    {
        return $this->RateDeposit;
    }
    /**
     * Set RateDeposit value
     * @param \OtaInterface\Otaconnect\StructType\RateDeposit $rateDeposit
     * @return \OtaInterface\Otaconnect\StructType\RateRulesType
     */
    public function setRateDeposit(\OtaInterface\Otaconnect\StructType\RateDeposit $rateDeposit = null)
    {
        $this->RateDeposit = $rateDeposit;
        return $this;
    }
    /**
     * Get MinimumKeep value
     * @return string|null
     */
    public function getMinimumKeep()
    {
        return $this->MinimumKeep;
    }
    /**
     * Set MinimumKeep value
     * @param string $minimumKeep
     * @return \OtaInterface\Otaconnect\StructType\RateRulesType
     */
    public function setMinimumKeep($minimumKeep = null)
    {
        // validation for constraint: string
        if (!is_null($minimumKeep) && !is_string($minimumKeep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minimumKeep)), __LINE__);
        }
        $this->MinimumKeep = $minimumKeep;
        return $this;
    }
    /**
     * Get MaximumKeep value
     * @return string|null
     */
    public function getMaximumKeep()
    {
        return $this->MaximumKeep;
    }
    /**
     * Set MaximumKeep value
     * @param string $maximumKeep
     * @return \OtaInterface\Otaconnect\StructType\RateRulesType
     */
    public function setMaximumKeep($maximumKeep = null)
    {
        // validation for constraint: string
        if (!is_null($maximumKeep) && !is_string($maximumKeep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximumKeep)), __LINE__);
        }
        $this->MaximumKeep = $maximumKeep;
        return $this;
    }
    /**
     * Get MaximumRental value
     * @return string|null
     */
    public function getMaximumRental()
    {
        return $this->MaximumRental;
    }
    /**
     * Set MaximumRental value
     * @param string $maximumRental
     * @return \OtaInterface\Otaconnect\StructType\RateRulesType
     */
    public function setMaximumRental($maximumRental = null)
    {
        // validation for constraint: string
        if (!is_null($maximumRental) && !is_string($maximumRental)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximumRental)), __LINE__);
        }
        $this->MaximumRental = $maximumRental;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RateRulesType
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
