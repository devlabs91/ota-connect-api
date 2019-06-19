<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Profile types associated with the viewership, i.e, the types of profiles allowed to view this information. Please refer the OpenTravel Code List PRT. | Root element for profile content. | Used to indicate whether information can be
 * shared. | Used to specify a profile type. | Creation date time, creator ID, last modification date time and last modifier ID.
 * - type: OTA_CodeType
 * - use: optional
 * @subpackage Structs
 */
class ProfileType extends AbstractStructBase
{
    /**
     * The Accesses
     * Meta informations extracted from the WSDL
     * - documentation: A collection of actions taken on a record.
     * - minOccurs: 0
     * @var mixed
     */
    public $Accesses;
    /**
     * The Customer
     * Meta informations extracted from the WSDL
     * - documentation: Detailed customer information for this profile.
     * - minOccurs: 0
     * @var mixed
     */
    public $Customer;
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\UserID[]
     */
    public $UserID;
    /**
     * The PrefCollections
     * Meta informations extracted from the WSDL
     * - documentation: A collection of preference collections.
     * - minOccurs: 0
     * @var mixed
     */
    public $PrefCollections;
    /**
     * The CompanyInfo
     * Meta informations extracted from the WSDL
     * - documentation: Company information related to the profile.
     * - minOccurs: 0
     * @var mixed
     */
    public $CompanyInfo;
    /**
     * The Affiliations
     * Meta informations extracted from the WSDL
     * - documentation: Affiliation information related to the profile.
     * - minOccurs: 0
     * @var mixed
     */
    public $Affiliations;
    /**
     * The Agreements
     * Meta informations extracted from the WSDL
     * - documentation: Agreement information related to the profile.
     * - minOccurs: 0
     * @var mixed
     */
    public $Agreements;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Comments
     */
    public $Comments;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: This is a reference placeholder, used as an index for this guest in this reservation.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - documentation: Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     * - use: optional
     * @var string
     */
    public $StatusCode;
    /**
     * Constructor method for ProfileType
     * @uses ProfileType::setAccesses()
     * @uses ProfileType::setCustomer()
     * @uses ProfileType::setUserID()
     * @uses ProfileType::setPrefCollections()
     * @uses ProfileType::setCompanyInfo()
     * @uses ProfileType::setAffiliations()
     * @uses ProfileType::setAgreements()
     * @uses ProfileType::setComments()
     * @uses ProfileType::setTPA_Extensions()
     * @uses ProfileType::setRPH()
     * @uses ProfileType::setStatusCode()
     * @param mixed $accesses
     * @param mixed $customer
     * @param \OtaInterface\Otaconnect\StructType\UserID[] $userID
     * @param mixed $prefCollections
     * @param mixed $companyInfo
     * @param mixed $affiliations
     * @param mixed $agreements
     * @param \OtaInterface\Otaconnect\StructType\Comments $comments
     * @param mixed $tPA_Extensions
     * @param string $rPH
     * @param string $statusCode
     */
    public function __construct($accesses = null, $customer = null, array $userID = array(), $prefCollections = null, $companyInfo = null, $affiliations = null, $agreements = null, \OtaInterface\Otaconnect\StructType\Comments $comments = null, $tPA_Extensions = null, $rPH = null, $statusCode = null)
    {
        $this
            ->setAccesses($accesses)
            ->setCustomer($customer)
            ->setUserID($userID)
            ->setPrefCollections($prefCollections)
            ->setCompanyInfo($companyInfo)
            ->setAffiliations($affiliations)
            ->setAgreements($agreements)
            ->setComments($comments)
            ->setTPA_Extensions($tPA_Extensions)
            ->setRPH($rPH)
            ->setStatusCode($statusCode);
    }
    /**
     * Get Accesses value
     * @return mixed|null
     */
    public function getAccesses()
    {
        return $this->Accesses;
    }
    /**
     * Set Accesses value
     * @param mixed $accesses
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
     */
    public function setAccesses($accesses = null)
    {
        $this->Accesses = $accesses;
        return $this;
    }
    /**
     * Get Customer value
     * @return mixed|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param mixed $customer
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
     */
    public function setCustomer($customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get UserID value
     * @return \OtaInterface\Otaconnect\StructType\UserID[]|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\UserID[] $userID
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
     */
    public function setUserID(array $userID = array())
    {
        foreach ($userID as $profileTypeUserIDItem) {
            // validation for constraint: itemType
            if (!$profileTypeUserIDItem instanceof \OtaInterface\Otaconnect\StructType\UserID) {
                throw new \InvalidArgumentException(sprintf('The UserID property can only contain items of \OtaInterface\Otaconnect\StructType\UserID, "%s" given', is_object($profileTypeUserIDItem) ? get_class($profileTypeUserIDItem) : gettype($profileTypeUserIDItem)), __LINE__);
            }
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Add item to UserID value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\UserID $item
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
     */
    public function addToUserID(\OtaInterface\Otaconnect\StructType\UserID $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\UserID) {
            throw new \InvalidArgumentException(sprintf('The UserID property can only contain items of \OtaInterface\Otaconnect\StructType\UserID, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UserID[] = $item;
        return $this;
    }
    /**
     * Get PrefCollections value
     * @return mixed|null
     */
    public function getPrefCollections()
    {
        return $this->PrefCollections;
    }
    /**
     * Set PrefCollections value
     * @param mixed $prefCollections
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
     */
    public function setPrefCollections($prefCollections = null)
    {
        $this->PrefCollections = $prefCollections;
        return $this;
    }
    /**
     * Get CompanyInfo value
     * @return mixed|null
     */
    public function getCompanyInfo()
    {
        return $this->CompanyInfo;
    }
    /**
     * Set CompanyInfo value
     * @param mixed $companyInfo
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
     */
    public function setCompanyInfo($companyInfo = null)
    {
        $this->CompanyInfo = $companyInfo;
        return $this;
    }
    /**
     * Get Affiliations value
     * @return mixed|null
     */
    public function getAffiliations()
    {
        return $this->Affiliations;
    }
    /**
     * Set Affiliations value
     * @param mixed $affiliations
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
     */
    public function setAffiliations($affiliations = null)
    {
        $this->Affiliations = $affiliations;
        return $this;
    }
    /**
     * Get Agreements value
     * @return mixed|null
     */
    public function getAgreements()
    {
        return $this->Agreements;
    }
    /**
     * Set Agreements value
     * @param mixed $agreements
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
     */
    public function setAgreements($agreements = null)
    {
        $this->Agreements = $agreements;
        return $this;
    }
    /**
     * Get Comments value
     * @return \OtaInterface\Otaconnect\StructType\Comments|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param \OtaInterface\Otaconnect\StructType\Comments $comments
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
     */
    public function setComments(\OtaInterface\Otaconnect\StructType\Comments $comments = null)
    {
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\ProfileType
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
