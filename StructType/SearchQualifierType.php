<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchQualifierType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Search qualifiers that can be used in cruise availability/fare/category to avail special search data. | Contains the berth and price category codes. | Specifies the fare and group codes. | Identifies the loyalty membership of a guest
 * or prospect.
 * @subpackage Structs
 */
class SearchQualifierType extends AbstractStructBase
{
    /**
     * The ReservationID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the passenger's reservation number.
     * - minOccurs: 0
     * @var mixed
     */
    public $ReservationID;
    /**
     * The Residency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Residency
     */
    public $Residency;
    /**
     * The PriceRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PriceRange
     */
    public $PriceRange;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var string[]
     */
    public $Status;
    /**
     * The Dining
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Dining
     */
    public $Dining;
    /**
     * The CabinNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the cabin number.
     * - use: optional
     * @var string
     */
    public $CabinNumber;
    /**
     * The HeldIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates the CabinNumber has a hold on it. When false, the CabinNumber does not have a hold.
     * - use: optional
     * @var bool
     */
    public $HeldIndicator;
    /**
     * The MaxOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the Max occupancy of the Cabin.
     * - use: optional
     * @var string
     */
    public $MaxOccupancy;
    /**
     * The CategoryLocation
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the cabin category location (e.g., inside, outside).
     * - use: optional
     * @var string
     */
    public $CategoryLocation;
    /**
     * The SortOrderCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the order in which the response information should be sorted. Refer to OpenTravel Code List Sort Order (SOC).
     * - use: optional
     * @var string
     */
    public $SortOrderCode;
    /**
     * Constructor method for SearchQualifierType
     * @uses SearchQualifierType::setReservationID()
     * @uses SearchQualifierType::setResidency()
     * @uses SearchQualifierType::setPriceRange()
     * @uses SearchQualifierType::setStatus()
     * @uses SearchQualifierType::setDining()
     * @uses SearchQualifierType::setCabinNumber()
     * @uses SearchQualifierType::setHeldIndicator()
     * @uses SearchQualifierType::setMaxOccupancy()
     * @uses SearchQualifierType::setCategoryLocation()
     * @uses SearchQualifierType::setSortOrderCode()
     * @param mixed $reservationID
     * @param \OtaInterface\Otaconnect\StructType\Residency $residency
     * @param \OtaInterface\Otaconnect\StructType\PriceRange $priceRange
     * @param string[] $status
     * @param \OtaInterface\Otaconnect\StructType\Dining $dining
     * @param string $cabinNumber
     * @param bool $heldIndicator
     * @param string $maxOccupancy
     * @param string $categoryLocation
     * @param string $sortOrderCode
     */
    public function __construct($reservationID = null, \OtaInterface\Otaconnect\StructType\Residency $residency = null, \OtaInterface\Otaconnect\StructType\PriceRange $priceRange = null, array $status = array(), \OtaInterface\Otaconnect\StructType\Dining $dining = null, $cabinNumber = null, $heldIndicator = null, $maxOccupancy = null, $categoryLocation = null, $sortOrderCode = null)
    {
        $this
            ->setReservationID($reservationID)
            ->setResidency($residency)
            ->setPriceRange($priceRange)
            ->setStatus($status)
            ->setDining($dining)
            ->setCabinNumber($cabinNumber)
            ->setHeldIndicator($heldIndicator)
            ->setMaxOccupancy($maxOccupancy)
            ->setCategoryLocation($categoryLocation)
            ->setSortOrderCode($sortOrderCode);
    }
    /**
     * Get ReservationID value
     * @return mixed|null
     */
    public function getReservationID()
    {
        return $this->ReservationID;
    }
    /**
     * Set ReservationID value
     * @param mixed $reservationID
     * @return \OtaInterface\Otaconnect\StructType\SearchQualifierType
     */
    public function setReservationID($reservationID = null)
    {
        $this->ReservationID = $reservationID;
        return $this;
    }
    /**
     * Get Residency value
     * @return \OtaInterface\Otaconnect\StructType\Residency|null
     */
    public function getResidency()
    {
        return $this->Residency;
    }
    /**
     * Set Residency value
     * @param \OtaInterface\Otaconnect\StructType\Residency $residency
     * @return \OtaInterface\Otaconnect\StructType\SearchQualifierType
     */
    public function setResidency(\OtaInterface\Otaconnect\StructType\Residency $residency = null)
    {
        $this->Residency = $residency;
        return $this;
    }
    /**
     * Get PriceRange value
     * @return \OtaInterface\Otaconnect\StructType\PriceRange|null
     */
    public function getPriceRange()
    {
        return $this->PriceRange;
    }
    /**
     * Set PriceRange value
     * @param \OtaInterface\Otaconnect\StructType\PriceRange $priceRange
     * @return \OtaInterface\Otaconnect\StructType\SearchQualifierType
     */
    public function setPriceRange(\OtaInterface\Otaconnect\StructType\PriceRange $priceRange = null)
    {
        $this->PriceRange = $priceRange;
        return $this;
    }
    /**
     * Get Status value
     * @return string[]|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \OtaInterface\Otaconnect\EnumType\Status::valueIsValid()
     * @uses \OtaInterface\Otaconnect\EnumType\Status::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $status
     * @return \OtaInterface\Otaconnect\StructType\SearchQualifierType
     */
    public function setStatus(array $status = array())
    {
        $invalidValues = array();
        foreach ($status as $searchQualifierTypeStatusItem) {
            if (!\OtaInterface\Otaconnect\EnumType\Status::valueIsValid($searchQualifierTypeStatusItem)) {
                $invalidValues[] = var_export($searchQualifierTypeStatusItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \OtaInterface\Otaconnect\EnumType\Status::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Add item to Status value
     * @uses \OtaInterface\Otaconnect\EnumType\Status::valueIsValid()
     * @uses \OtaInterface\Otaconnect\EnumType\Status::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \OtaInterface\Otaconnect\StructType\SearchQualifierType
     */
    public function addToStatus($item)
    {
        // validation for constraint: enumeration
        if (!\OtaInterface\Otaconnect\EnumType\Status::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \OtaInterface\Otaconnect\EnumType\Status::getValidValues())), __LINE__);
        }
        $this->Status[] = $item;
        return $this;
    }
    /**
     * Get Dining value
     * @return \OtaInterface\Otaconnect\StructType\Dining|null
     */
    public function getDining()
    {
        return $this->Dining;
    }
    /**
     * Set Dining value
     * @param \OtaInterface\Otaconnect\StructType\Dining $dining
     * @return \OtaInterface\Otaconnect\StructType\SearchQualifierType
     */
    public function setDining(\OtaInterface\Otaconnect\StructType\Dining $dining = null)
    {
        $this->Dining = $dining;
        return $this;
    }
    /**
     * Get CabinNumber value
     * @return string|null
     */
    public function getCabinNumber()
    {
        return $this->CabinNumber;
    }
    /**
     * Set CabinNumber value
     * @param string $cabinNumber
     * @return \OtaInterface\Otaconnect\StructType\SearchQualifierType
     */
    public function setCabinNumber($cabinNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cabinNumber) && !is_string($cabinNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinNumber)), __LINE__);
        }
        $this->CabinNumber = $cabinNumber;
        return $this;
    }
    /**
     * Get HeldIndicator value
     * @return bool|null
     */
    public function getHeldIndicator()
    {
        return $this->HeldIndicator;
    }
    /**
     * Set HeldIndicator value
     * @param bool $heldIndicator
     * @return \OtaInterface\Otaconnect\StructType\SearchQualifierType
     */
    public function setHeldIndicator($heldIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($heldIndicator) && !is_bool($heldIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($heldIndicator)), __LINE__);
        }
        $this->HeldIndicator = $heldIndicator;
        return $this;
    }
    /**
     * Get MaxOccupancy value
     * @return string|null
     */
    public function getMaxOccupancy()
    {
        return $this->MaxOccupancy;
    }
    /**
     * Set MaxOccupancy value
     * @param string $maxOccupancy
     * @return \OtaInterface\Otaconnect\StructType\SearchQualifierType
     */
    public function setMaxOccupancy($maxOccupancy = null)
    {
        // validation for constraint: string
        if (!is_null($maxOccupancy) && !is_string($maxOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxOccupancy)), __LINE__);
        }
        $this->MaxOccupancy = $maxOccupancy;
        return $this;
    }
    /**
     * Get CategoryLocation value
     * @return string|null
     */
    public function getCategoryLocation()
    {
        return $this->CategoryLocation;
    }
    /**
     * Set CategoryLocation value
     * @param string $categoryLocation
     * @return \OtaInterface\Otaconnect\StructType\SearchQualifierType
     */
    public function setCategoryLocation($categoryLocation = null)
    {
        // validation for constraint: string
        if (!is_null($categoryLocation) && !is_string($categoryLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryLocation)), __LINE__);
        }
        $this->CategoryLocation = $categoryLocation;
        return $this;
    }
    /**
     * Get SortOrderCode value
     * @return string|null
     */
    public function getSortOrderCode()
    {
        return $this->SortOrderCode;
    }
    /**
     * Set SortOrderCode value
     * @param string $sortOrderCode
     * @return \OtaInterface\Otaconnect\StructType\SearchQualifierType
     */
    public function setSortOrderCode($sortOrderCode = null)
    {
        // validation for constraint: string
        if (!is_null($sortOrderCode) && !is_string($sortOrderCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sortOrderCode)), __LINE__);
        }
        $this->SortOrderCode = $sortOrderCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\SearchQualifierType
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
