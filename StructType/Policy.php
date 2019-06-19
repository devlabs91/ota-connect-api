<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Policy StructType
 * Meta informations extracted from the WSDL
 * - documentation: Policy information for this hotel. | Describes the policies of the hotel, such as the type of payments, or whether children or pets are accepted. | Used to indicate the effective dates of the policy. | May be used to give further
 * detail on the code or to remove an obsolete item. | Used to indicate the effective day for the policy.
 * @subpackage Structs
 */
class Policy extends AbstractStructBase
{
    /**
     * The CheckInTime
     * Meta informations extracted from the WSDL
     * - documentation: The checkin time required by this hotel for a room stay.
     * - use: optional
     * @var string
     */
    public $CheckInTime;
    /**
     * The CheckOutTime
     * Meta informations extracted from the WSDL
     * - documentation: The checkout time required by this hotel for a room stay.
     * - use: optional
     * @var string
     */
    public $CheckOutTime;
    /**
     * The CancelPolicy
     * Meta informations extracted from the WSDL
     * - documentation: Defines the cancellation policy of the hotel facility.
     * - minOccurs: 0
     * @var mixed
     */
    public $CancelPolicy;
    /**
     * The GuaranteePaymentPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\GuaranteePaymentPolicy
     */
    public $GuaranteePaymentPolicy;
    /**
     * The PolicyInfoCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PolicyInfoCodes
     */
    public $PolicyInfoCodes;
    /**
     * The CheckoutCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CheckoutCharges
     */
    public $CheckoutCharges;
    /**
     * The PolicyInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PolicyInfo
     */
    public $PolicyInfo;
    /**
     * The TaxPolicies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\TaxPolicies
     */
    public $TaxPolicies;
    /**
     * The PetsPolicies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PetsPolicies
     */
    public $PetsPolicies;
    /**
     * The StayRequirements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\StayRequirements
     */
    public $StayRequirements;
    /**
     * The CommissionPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CommissionPolicy
     */
    public $CommissionPolicy;
    /**
     * The FeePolicies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\FeePolicies
     */
    public $FeePolicies;
    /**
     * The DefaultValidBookingMinOffset
     * Meta informations extracted from the WSDL
     * - documentation: Defines the default minimum number of days in advance that a booking must be made at this hotel.
     * - use: optional
     * @var int
     */
    public $DefaultValidBookingMinOffset;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: The code identifying this policy.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when the policy information for this hotel was last updated.
     * - use: optional
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for Policy
     * @uses Policy::setCheckInTime()
     * @uses Policy::setCheckOutTime()
     * @uses Policy::setCancelPolicy()
     * @uses Policy::setGuaranteePaymentPolicy()
     * @uses Policy::setPolicyInfoCodes()
     * @uses Policy::setCheckoutCharges()
     * @uses Policy::setPolicyInfo()
     * @uses Policy::setTaxPolicies()
     * @uses Policy::setPetsPolicies()
     * @uses Policy::setStayRequirements()
     * @uses Policy::setCommissionPolicy()
     * @uses Policy::setFeePolicies()
     * @uses Policy::setDefaultValidBookingMinOffset()
     * @uses Policy::setCode()
     * @uses Policy::setLastUpdated()
     * @param string $checkInTime
     * @param string $checkOutTime
     * @param mixed $cancelPolicy
     * @param \OtaInterface\Otaconnect\StructType\GuaranteePaymentPolicy $guaranteePaymentPolicy
     * @param \OtaInterface\Otaconnect\StructType\PolicyInfoCodes $policyInfoCodes
     * @param \OtaInterface\Otaconnect\StructType\CheckoutCharges $checkoutCharges
     * @param \OtaInterface\Otaconnect\StructType\PolicyInfo $policyInfo
     * @param \OtaInterface\Otaconnect\StructType\TaxPolicies $taxPolicies
     * @param \OtaInterface\Otaconnect\StructType\PetsPolicies $petsPolicies
     * @param \OtaInterface\Otaconnect\StructType\StayRequirements $stayRequirements
     * @param \OtaInterface\Otaconnect\StructType\CommissionPolicy $commissionPolicy
     * @param \OtaInterface\Otaconnect\StructType\FeePolicies $feePolicies
     * @param int $defaultValidBookingMinOffset
     * @param string $code
     * @param string $lastUpdated
     */
    public function __construct($checkInTime = null, $checkOutTime = null, $cancelPolicy = null, \OtaInterface\Otaconnect\StructType\GuaranteePaymentPolicy $guaranteePaymentPolicy = null, \OtaInterface\Otaconnect\StructType\PolicyInfoCodes $policyInfoCodes = null, \OtaInterface\Otaconnect\StructType\CheckoutCharges $checkoutCharges = null, \OtaInterface\Otaconnect\StructType\PolicyInfo $policyInfo = null, \OtaInterface\Otaconnect\StructType\TaxPolicies $taxPolicies = null, \OtaInterface\Otaconnect\StructType\PetsPolicies $petsPolicies = null, \OtaInterface\Otaconnect\StructType\StayRequirements $stayRequirements = null, \OtaInterface\Otaconnect\StructType\CommissionPolicy $commissionPolicy = null, \OtaInterface\Otaconnect\StructType\FeePolicies $feePolicies = null, $defaultValidBookingMinOffset = null, $code = null, $lastUpdated = null)
    {
        $this
            ->setCheckInTime($checkInTime)
            ->setCheckOutTime($checkOutTime)
            ->setCancelPolicy($cancelPolicy)
            ->setGuaranteePaymentPolicy($guaranteePaymentPolicy)
            ->setPolicyInfoCodes($policyInfoCodes)
            ->setCheckoutCharges($checkoutCharges)
            ->setPolicyInfo($policyInfo)
            ->setTaxPolicies($taxPolicies)
            ->setPetsPolicies($petsPolicies)
            ->setStayRequirements($stayRequirements)
            ->setCommissionPolicy($commissionPolicy)
            ->setFeePolicies($feePolicies)
            ->setDefaultValidBookingMinOffset($defaultValidBookingMinOffset)
            ->setCode($code)
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get CheckInTime value
     * @return string|null
     */
    public function getCheckInTime()
    {
        return $this->CheckInTime;
    }
    /**
     * Set CheckInTime value
     * @param string $checkInTime
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setCheckInTime($checkInTime = null)
    {
        // validation for constraint: string
        if (!is_null($checkInTime) && !is_string($checkInTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkInTime)), __LINE__);
        }
        $this->CheckInTime = $checkInTime;
        return $this;
    }
    /**
     * Get CheckOutTime value
     * @return string|null
     */
    public function getCheckOutTime()
    {
        return $this->CheckOutTime;
    }
    /**
     * Set CheckOutTime value
     * @param string $checkOutTime
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setCheckOutTime($checkOutTime = null)
    {
        // validation for constraint: string
        if (!is_null($checkOutTime) && !is_string($checkOutTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkOutTime)), __LINE__);
        }
        $this->CheckOutTime = $checkOutTime;
        return $this;
    }
    /**
     * Get CancelPolicy value
     * @return mixed|null
     */
    public function getCancelPolicy()
    {
        return $this->CancelPolicy;
    }
    /**
     * Set CancelPolicy value
     * @param mixed $cancelPolicy
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setCancelPolicy($cancelPolicy = null)
    {
        $this->CancelPolicy = $cancelPolicy;
        return $this;
    }
    /**
     * Get GuaranteePaymentPolicy value
     * @return \OtaInterface\Otaconnect\StructType\GuaranteePaymentPolicy|null
     */
    public function getGuaranteePaymentPolicy()
    {
        return $this->GuaranteePaymentPolicy;
    }
    /**
     * Set GuaranteePaymentPolicy value
     * @param \OtaInterface\Otaconnect\StructType\GuaranteePaymentPolicy $guaranteePaymentPolicy
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setGuaranteePaymentPolicy(\OtaInterface\Otaconnect\StructType\GuaranteePaymentPolicy $guaranteePaymentPolicy = null)
    {
        $this->GuaranteePaymentPolicy = $guaranteePaymentPolicy;
        return $this;
    }
    /**
     * Get PolicyInfoCodes value
     * @return \OtaInterface\Otaconnect\StructType\PolicyInfoCodes|null
     */
    public function getPolicyInfoCodes()
    {
        return $this->PolicyInfoCodes;
    }
    /**
     * Set PolicyInfoCodes value
     * @param \OtaInterface\Otaconnect\StructType\PolicyInfoCodes $policyInfoCodes
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setPolicyInfoCodes(\OtaInterface\Otaconnect\StructType\PolicyInfoCodes $policyInfoCodes = null)
    {
        $this->PolicyInfoCodes = $policyInfoCodes;
        return $this;
    }
    /**
     * Get CheckoutCharges value
     * @return \OtaInterface\Otaconnect\StructType\CheckoutCharges|null
     */
    public function getCheckoutCharges()
    {
        return $this->CheckoutCharges;
    }
    /**
     * Set CheckoutCharges value
     * @param \OtaInterface\Otaconnect\StructType\CheckoutCharges $checkoutCharges
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setCheckoutCharges(\OtaInterface\Otaconnect\StructType\CheckoutCharges $checkoutCharges = null)
    {
        $this->CheckoutCharges = $checkoutCharges;
        return $this;
    }
    /**
     * Get PolicyInfo value
     * @return \OtaInterface\Otaconnect\StructType\PolicyInfo|null
     */
    public function getPolicyInfo()
    {
        return $this->PolicyInfo;
    }
    /**
     * Set PolicyInfo value
     * @param \OtaInterface\Otaconnect\StructType\PolicyInfo $policyInfo
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setPolicyInfo(\OtaInterface\Otaconnect\StructType\PolicyInfo $policyInfo = null)
    {
        $this->PolicyInfo = $policyInfo;
        return $this;
    }
    /**
     * Get TaxPolicies value
     * @return \OtaInterface\Otaconnect\StructType\TaxPolicies|null
     */
    public function getTaxPolicies()
    {
        return $this->TaxPolicies;
    }
    /**
     * Set TaxPolicies value
     * @param \OtaInterface\Otaconnect\StructType\TaxPolicies $taxPolicies
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setTaxPolicies(\OtaInterface\Otaconnect\StructType\TaxPolicies $taxPolicies = null)
    {
        $this->TaxPolicies = $taxPolicies;
        return $this;
    }
    /**
     * Get PetsPolicies value
     * @return \OtaInterface\Otaconnect\StructType\PetsPolicies|null
     */
    public function getPetsPolicies()
    {
        return $this->PetsPolicies;
    }
    /**
     * Set PetsPolicies value
     * @param \OtaInterface\Otaconnect\StructType\PetsPolicies $petsPolicies
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setPetsPolicies(\OtaInterface\Otaconnect\StructType\PetsPolicies $petsPolicies = null)
    {
        $this->PetsPolicies = $petsPolicies;
        return $this;
    }
    /**
     * Get StayRequirements value
     * @return \OtaInterface\Otaconnect\StructType\StayRequirements|null
     */
    public function getStayRequirements()
    {
        return $this->StayRequirements;
    }
    /**
     * Set StayRequirements value
     * @param \OtaInterface\Otaconnect\StructType\StayRequirements $stayRequirements
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setStayRequirements(\OtaInterface\Otaconnect\StructType\StayRequirements $stayRequirements = null)
    {
        $this->StayRequirements = $stayRequirements;
        return $this;
    }
    /**
     * Get CommissionPolicy value
     * @return \OtaInterface\Otaconnect\StructType\CommissionPolicy|null
     */
    public function getCommissionPolicy()
    {
        return $this->CommissionPolicy;
    }
    /**
     * Set CommissionPolicy value
     * @param \OtaInterface\Otaconnect\StructType\CommissionPolicy $commissionPolicy
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setCommissionPolicy(\OtaInterface\Otaconnect\StructType\CommissionPolicy $commissionPolicy = null)
    {
        $this->CommissionPolicy = $commissionPolicy;
        return $this;
    }
    /**
     * Get FeePolicies value
     * @return \OtaInterface\Otaconnect\StructType\FeePolicies|null
     */
    public function getFeePolicies()
    {
        return $this->FeePolicies;
    }
    /**
     * Set FeePolicies value
     * @param \OtaInterface\Otaconnect\StructType\FeePolicies $feePolicies
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setFeePolicies(\OtaInterface\Otaconnect\StructType\FeePolicies $feePolicies = null)
    {
        $this->FeePolicies = $feePolicies;
        return $this;
    }
    /**
     * Get DefaultValidBookingMinOffset value
     * @return int|null
     */
    public function getDefaultValidBookingMinOffset()
    {
        return $this->DefaultValidBookingMinOffset;
    }
    /**
     * Set DefaultValidBookingMinOffset value
     * @param int $defaultValidBookingMinOffset
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setDefaultValidBookingMinOffset($defaultValidBookingMinOffset = null)
    {
        // validation for constraint: int
        if (!is_null($defaultValidBookingMinOffset) && !is_numeric($defaultValidBookingMinOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($defaultValidBookingMinOffset)), __LINE__);
        }
        $this->DefaultValidBookingMinOffset = $defaultValidBookingMinOffset;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \OtaInterface\Otaconnect\StructType\Policy
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Policy
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
