<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthorizationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information with which a traveller's identification is verified and/or charges are authorized. | ToDo - this types should be moved to OTA_CommonTypes. It's required in a common types file, since the both AuthRQ/RS use it.
 * @subpackage Structs
 */
class AuthorizationType extends AbstractStructBase
{
    /**
     * The CheckAuthorization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CheckAuthorization
     */
    public $CheckAuthorization;
    /**
     * The CreditCardAuthorization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CreditCardAuthorization
     */
    public $CreditCardAuthorization;
    /**
     * The AccountAuthorization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AccountAuthorization
     */
    public $AccountAuthorization;
    /**
     * The DriversLicenseAuthorization
     * Meta informations extracted from the WSDL
     * - documentation: Information used for validating a drivers license or for supporting a check or credit card authorization request.
     * - minOccurs: 0
     * @var mixed
     */
    public $DriversLicenseAuthorization;
    /**
     * The BookingReferenceID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\BookingReferenceID
     */
    public $BookingReferenceID;
    /**
     * The PrincipalCompanyCode
     * Meta informations extracted from the WSDL
     * - documentation: The code associated with the company (e.g., two to three character airline designator) submitting a request to an authorization vendor system.
     * - use: optional
     * @var string
     */
    public $PrincipalCompanyCode;
    /**
     * The RefNumber
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an authorization request. It may be used to link a response to a corresponding request item.
     * - use: optional
     * @var string
     */
    public $RefNumber;
    /**
     * Constructor method for AuthorizationType
     * @uses AuthorizationType::setCheckAuthorization()
     * @uses AuthorizationType::setCreditCardAuthorization()
     * @uses AuthorizationType::setAccountAuthorization()
     * @uses AuthorizationType::setDriversLicenseAuthorization()
     * @uses AuthorizationType::setBookingReferenceID()
     * @uses AuthorizationType::setPrincipalCompanyCode()
     * @uses AuthorizationType::setRefNumber()
     * @param \OtaInterface\Otaconnect\StructType\CheckAuthorization $checkAuthorization
     * @param \OtaInterface\Otaconnect\StructType\CreditCardAuthorization $creditCardAuthorization
     * @param \OtaInterface\Otaconnect\StructType\AccountAuthorization $accountAuthorization
     * @param mixed $driversLicenseAuthorization
     * @param \OtaInterface\Otaconnect\StructType\BookingReferenceID $bookingReferenceID
     * @param string $principalCompanyCode
     * @param string $refNumber
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\CheckAuthorization $checkAuthorization = null, \OtaInterface\Otaconnect\StructType\CreditCardAuthorization $creditCardAuthorization = null, \OtaInterface\Otaconnect\StructType\AccountAuthorization $accountAuthorization = null, $driversLicenseAuthorization = null, \OtaInterface\Otaconnect\StructType\BookingReferenceID $bookingReferenceID = null, $principalCompanyCode = null, $refNumber = null)
    {
        $this
            ->setCheckAuthorization($checkAuthorization)
            ->setCreditCardAuthorization($creditCardAuthorization)
            ->setAccountAuthorization($accountAuthorization)
            ->setDriversLicenseAuthorization($driversLicenseAuthorization)
            ->setBookingReferenceID($bookingReferenceID)
            ->setPrincipalCompanyCode($principalCompanyCode)
            ->setRefNumber($refNumber);
    }
    /**
     * Get CheckAuthorization value
     * @return \OtaInterface\Otaconnect\StructType\CheckAuthorization|null
     */
    public function getCheckAuthorization()
    {
        return $this->CheckAuthorization;
    }
    /**
     * Set CheckAuthorization value
     * @param \OtaInterface\Otaconnect\StructType\CheckAuthorization $checkAuthorization
     * @return \OtaInterface\Otaconnect\StructType\AuthorizationType
     */
    public function setCheckAuthorization(\OtaInterface\Otaconnect\StructType\CheckAuthorization $checkAuthorization = null)
    {
        $this->CheckAuthorization = $checkAuthorization;
        return $this;
    }
    /**
     * Get CreditCardAuthorization value
     * @return \OtaInterface\Otaconnect\StructType\CreditCardAuthorization|null
     */
    public function getCreditCardAuthorization()
    {
        return $this->CreditCardAuthorization;
    }
    /**
     * Set CreditCardAuthorization value
     * @param \OtaInterface\Otaconnect\StructType\CreditCardAuthorization $creditCardAuthorization
     * @return \OtaInterface\Otaconnect\StructType\AuthorizationType
     */
    public function setCreditCardAuthorization(\OtaInterface\Otaconnect\StructType\CreditCardAuthorization $creditCardAuthorization = null)
    {
        $this->CreditCardAuthorization = $creditCardAuthorization;
        return $this;
    }
    /**
     * Get AccountAuthorization value
     * @return \OtaInterface\Otaconnect\StructType\AccountAuthorization|null
     */
    public function getAccountAuthorization()
    {
        return $this->AccountAuthorization;
    }
    /**
     * Set AccountAuthorization value
     * @param \OtaInterface\Otaconnect\StructType\AccountAuthorization $accountAuthorization
     * @return \OtaInterface\Otaconnect\StructType\AuthorizationType
     */
    public function setAccountAuthorization(\OtaInterface\Otaconnect\StructType\AccountAuthorization $accountAuthorization = null)
    {
        $this->AccountAuthorization = $accountAuthorization;
        return $this;
    }
    /**
     * Get DriversLicenseAuthorization value
     * @return mixed|null
     */
    public function getDriversLicenseAuthorization()
    {
        return $this->DriversLicenseAuthorization;
    }
    /**
     * Set DriversLicenseAuthorization value
     * @param mixed $driversLicenseAuthorization
     * @return \OtaInterface\Otaconnect\StructType\AuthorizationType
     */
    public function setDriversLicenseAuthorization($driversLicenseAuthorization = null)
    {
        $this->DriversLicenseAuthorization = $driversLicenseAuthorization;
        return $this;
    }
    /**
     * Get BookingReferenceID value
     * @return \OtaInterface\Otaconnect\StructType\BookingReferenceID|null
     */
    public function getBookingReferenceID()
    {
        return $this->BookingReferenceID;
    }
    /**
     * Set BookingReferenceID value
     * @param \OtaInterface\Otaconnect\StructType\BookingReferenceID $bookingReferenceID
     * @return \OtaInterface\Otaconnect\StructType\AuthorizationType
     */
    public function setBookingReferenceID(\OtaInterface\Otaconnect\StructType\BookingReferenceID $bookingReferenceID = null)
    {
        $this->BookingReferenceID = $bookingReferenceID;
        return $this;
    }
    /**
     * Get PrincipalCompanyCode value
     * @return string|null
     */
    public function getPrincipalCompanyCode()
    {
        return $this->PrincipalCompanyCode;
    }
    /**
     * Set PrincipalCompanyCode value
     * @param string $principalCompanyCode
     * @return \OtaInterface\Otaconnect\StructType\AuthorizationType
     */
    public function setPrincipalCompanyCode($principalCompanyCode = null)
    {
        // validation for constraint: string
        if (!is_null($principalCompanyCode) && !is_string($principalCompanyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($principalCompanyCode)), __LINE__);
        }
        $this->PrincipalCompanyCode = $principalCompanyCode;
        return $this;
    }
    /**
     * Get RefNumber value
     * @return string|null
     */
    public function getRefNumber()
    {
        return $this->RefNumber;
    }
    /**
     * Set RefNumber value
     * @param string $refNumber
     * @return \OtaInterface\Otaconnect\StructType\AuthorizationType
     */
    public function setRefNumber($refNumber = null)
    {
        // validation for constraint: string
        if (!is_null($refNumber) && !is_string($refNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refNumber)), __LINE__);
        }
        $this->RefNumber = $refNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AuthorizationType
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
