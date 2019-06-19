<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRetrieveResRQAdditionalInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleRetrieveInfoRQType complex type defines the supplemental data by which an existing reservation can be identified for retrieval
 * @subpackage Structs
 */
class VehicleRetrieveResRQAdditionalInfoType extends AbstractStructBase
{
    /**
     * The PickUpLocation
     * Meta informations extracted from the WSDL
     * - documentation: A code to identify the pick up location, along with an optional code context.
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\LocationType
     */
    public $PickUpLocation;
    /**
     * The ReturnLocation
     * Meta informations extracted from the WSDL
     * - documentation: A code to identify the return location, along with an optional code context.
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\LocationType
     */
    public $ReturnLocation;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Telephone
     */
    public $Telephone;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - documentation: The vendor with whom the reservation has been made.
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CompanyNameType
     */
    public $Vendor;
    /**
     * The VehPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\VehiclePrefType
     */
    public $VehPref;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - documentation: An email address associated with the reservation to be retrieved.
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\EmailType
     */
    public $Email;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: Free text description regarding the rental to be retrieved.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ParagraphType[]
     */
    public $Remark;
    /**
     * The SearchDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\SearchDateRange[]
     */
    public $SearchDateRange;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The PickUpDateTime
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PickUpDateTime;
    /**
     * Constructor method for VehicleRetrieveResRQAdditionalInfoType
     * @uses VehicleRetrieveResRQAdditionalInfoType::setPickUpLocation()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setReturnLocation()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setTelephone()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setVendor()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setVehPref()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setEmail()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setRemark()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setSearchDateRange()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setPickUpDateTime()
     * @param \OtaInterface\Otaconnect\StructType\LocationType $pickUpLocation
     * @param \OtaInterface\Otaconnect\StructType\LocationType $returnLocation
     * @param \OtaInterface\Otaconnect\StructType\Telephone $telephone
     * @param \OtaInterface\Otaconnect\StructType\CompanyNameType $vendor
     * @param \OtaInterface\Otaconnect\StructType\VehiclePrefType $vehPref
     * @param \OtaInterface\Otaconnect\StructType\EmailType $email
     * @param \OtaInterface\Otaconnect\StructType\ParagraphType[] $remark
     * @param \OtaInterface\Otaconnect\StructType\SearchDateRange[] $searchDateRange
     * @param mixed $tPA_Extensions
     * @param string $pickUpDateTime
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\LocationType $pickUpLocation = null, \OtaInterface\Otaconnect\StructType\LocationType $returnLocation = null, \OtaInterface\Otaconnect\StructType\Telephone $telephone = null, \OtaInterface\Otaconnect\StructType\CompanyNameType $vendor = null, \OtaInterface\Otaconnect\StructType\VehiclePrefType $vehPref = null, \OtaInterface\Otaconnect\StructType\EmailType $email = null, array $remark = array(), array $searchDateRange = array(), $tPA_Extensions = null, $pickUpDateTime = null)
    {
        $this
            ->setPickUpLocation($pickUpLocation)
            ->setReturnLocation($returnLocation)
            ->setTelephone($telephone)
            ->setVendor($vendor)
            ->setVehPref($vehPref)
            ->setEmail($email)
            ->setRemark($remark)
            ->setSearchDateRange($searchDateRange)
            ->setTPA_Extensions($tPA_Extensions)
            ->setPickUpDateTime($pickUpDateTime);
    }
    /**
     * Get PickUpLocation value
     * @return \OtaInterface\Otaconnect\StructType\LocationType|null
     */
    public function getPickUpLocation()
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param \OtaInterface\Otaconnect\StructType\LocationType $pickUpLocation
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setPickUpLocation(\OtaInterface\Otaconnect\StructType\LocationType $pickUpLocation = null)
    {
        $this->PickUpLocation = $pickUpLocation;
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return \OtaInterface\Otaconnect\StructType\LocationType|null
     */
    public function getReturnLocation()
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param \OtaInterface\Otaconnect\StructType\LocationType $returnLocation
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setReturnLocation(\OtaInterface\Otaconnect\StructType\LocationType $returnLocation = null)
    {
        $this->ReturnLocation = $returnLocation;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \OtaInterface\Otaconnect\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \OtaInterface\Otaconnect\StructType\Telephone $telephone
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setTelephone(\OtaInterface\Otaconnect\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \OtaInterface\Otaconnect\StructType\CompanyNameType|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \OtaInterface\Otaconnect\StructType\CompanyNameType $vendor
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setVendor(\OtaInterface\Otaconnect\StructType\CompanyNameType $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get VehPref value
     * @return \OtaInterface\Otaconnect\StructType\VehiclePrefType|null
     */
    public function getVehPref()
    {
        return $this->VehPref;
    }
    /**
     * Set VehPref value
     * @param \OtaInterface\Otaconnect\StructType\VehiclePrefType $vehPref
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setVehPref(\OtaInterface\Otaconnect\StructType\VehiclePrefType $vehPref = null)
    {
        $this->VehPref = $vehPref;
        return $this;
    }
    /**
     * Get Email value
     * @return \OtaInterface\Otaconnect\StructType\EmailType|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \OtaInterface\Otaconnect\StructType\EmailType $email
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setEmail(\OtaInterface\Otaconnect\StructType\EmailType $email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Remark value
     * @return \OtaInterface\Otaconnect\StructType\ParagraphType[]|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ParagraphType[] $remark
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setRemark(array $remark = array())
    {
        foreach ($remark as $vehicleRetrieveResRQAdditionalInfoTypeRemarkItem) {
            // validation for constraint: itemType
            if (!$vehicleRetrieveResRQAdditionalInfoTypeRemarkItem instanceof \OtaInterface\Otaconnect\StructType\ParagraphType) {
                throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \OtaInterface\Otaconnect\StructType\ParagraphType, "%s" given', is_object($vehicleRetrieveResRQAdditionalInfoTypeRemarkItem) ? get_class($vehicleRetrieveResRQAdditionalInfoTypeRemarkItem) : gettype($vehicleRetrieveResRQAdditionalInfoTypeRemarkItem)), __LINE__);
            }
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ParagraphType $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function addToRemark(\OtaInterface\Otaconnect\StructType\ParagraphType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\ParagraphType) {
            throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \OtaInterface\Otaconnect\StructType\ParagraphType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Remark[] = $item;
        return $this;
    }
    /**
     * Get SearchDateRange value
     * @return \OtaInterface\Otaconnect\StructType\SearchDateRange[]|null
     */
    public function getSearchDateRange()
    {
        return $this->SearchDateRange;
    }
    /**
     * Set SearchDateRange value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\SearchDateRange[] $searchDateRange
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setSearchDateRange(array $searchDateRange = array())
    {
        foreach ($searchDateRange as $vehicleRetrieveResRQAdditionalInfoTypeSearchDateRangeItem) {
            // validation for constraint: itemType
            if (!$vehicleRetrieveResRQAdditionalInfoTypeSearchDateRangeItem instanceof \OtaInterface\Otaconnect\StructType\SearchDateRange) {
                throw new \InvalidArgumentException(sprintf('The SearchDateRange property can only contain items of \OtaInterface\Otaconnect\StructType\SearchDateRange, "%s" given', is_object($vehicleRetrieveResRQAdditionalInfoTypeSearchDateRangeItem) ? get_class($vehicleRetrieveResRQAdditionalInfoTypeSearchDateRangeItem) : gettype($vehicleRetrieveResRQAdditionalInfoTypeSearchDateRangeItem)), __LINE__);
            }
        }
        $this->SearchDateRange = $searchDateRange;
        return $this;
    }
    /**
     * Add item to SearchDateRange value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\SearchDateRange $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function addToSearchDateRange(\OtaInterface\Otaconnect\StructType\SearchDateRange $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\SearchDateRange) {
            throw new \InvalidArgumentException(sprintf('The SearchDateRange property can only contain items of \OtaInterface\Otaconnect\StructType\SearchDateRange, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SearchDateRange[] = $item;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get PickUpDateTime value
     * @return string|null
     */
    public function getPickUpDateTime()
    {
        return $this->PickUpDateTime;
    }
    /**
     * Set PickUpDateTime value
     * @param string $pickUpDateTime
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setPickUpDateTime($pickUpDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($pickUpDateTime) && !is_string($pickUpDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickUpDateTime)), __LINE__);
        }
        $this->PickUpDateTime = $pickUpDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehicleRetrieveResRQAdditionalInfoType
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
