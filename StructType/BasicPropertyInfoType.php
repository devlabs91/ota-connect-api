<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicPropertyInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: An abbreviated short summary of hotel descriptive information.
 * @subpackage Structs
 */
class BasicPropertyInfoType extends AbstractStructBase
{
    /**
     * The VendorMessages
     * Meta informations extracted from the WSDL
     * - documentation: A collection of VenderMessages.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $VendorMessages;
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Position
     */
    public $Position;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: Public address of the hotel property.
     * - minOccurs: 0
     * @var mixed
     */
    public $Address;
    /**
     * The ContactNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ContactNumbers
     */
    public $ContactNumbers;
    /**
     * The Award
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Award[]
     */
    public $Award;
    /**
     * The RelativePosition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $RelativePosition;
    /**
     * The HotelAmenity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\HotelAmenity[]
     */
    public $HotelAmenity;
    /**
     * The Recreation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Recreation[]
     */
    public $Recreation;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Service[]
     */
    public $Service;
    /**
     * The Policy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Policy
     */
    public $Policy;
    /**
     * The HotelSegmentCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the segment (e.g., luxury, upscale, extended stay) of the hotel. Refer to OpenTravel Codelist Segment Category Code (SEG).
     * - use: optional
     * @var string
     */
    public $HotelSegmentCategoryCode;
    /**
     * The SupplierIntegrationLevel
     * Meta informations extracted from the WSDL
     * - documentation: The level of integration of a property to provide automated transaction information. The lower the number, the higher the integration (e.g., a 1 means the supplier has the highest level of integration automation).
     * - use: optional
     * @var int
     */
    public $SupplierIntegrationLevel;
    /**
     * The MaxGroupRoomQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Provides the maximum number of rooms that can be booked in a property for a group.
     * - use: optional
     * @var int
     */
    public $MaxGroupRoomQuantity;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: The code specifying a monetary unit. Use ISO 4217, three alpha code.
     * - use: optional
     * @var string
     */
    public $CurrencyCode;
    /**
     * Constructor method for BasicPropertyInfoType
     * @uses BasicPropertyInfoType::setVendorMessages()
     * @uses BasicPropertyInfoType::setPosition()
     * @uses BasicPropertyInfoType::setAddress()
     * @uses BasicPropertyInfoType::setContactNumbers()
     * @uses BasicPropertyInfoType::setAward()
     * @uses BasicPropertyInfoType::setRelativePosition()
     * @uses BasicPropertyInfoType::setHotelAmenity()
     * @uses BasicPropertyInfoType::setRecreation()
     * @uses BasicPropertyInfoType::setService()
     * @uses BasicPropertyInfoType::setPolicy()
     * @uses BasicPropertyInfoType::setHotelSegmentCategoryCode()
     * @uses BasicPropertyInfoType::setSupplierIntegrationLevel()
     * @uses BasicPropertyInfoType::setMaxGroupRoomQuantity()
     * @uses BasicPropertyInfoType::setCurrencyCode()
     * @param mixed[] $vendorMessages
     * @param \OtaInterface\Otaconnect\StructType\Position $position
     * @param mixed $address
     * @param \OtaInterface\Otaconnect\StructType\ContactNumbers $contactNumbers
     * @param \OtaInterface\Otaconnect\StructType\Award[] $award
     * @param mixed $relativePosition
     * @param \OtaInterface\Otaconnect\StructType\HotelAmenity[] $hotelAmenity
     * @param \OtaInterface\Otaconnect\StructType\Recreation[] $recreation
     * @param \OtaInterface\Otaconnect\StructType\Service[] $service
     * @param \OtaInterface\Otaconnect\StructType\Policy $policy
     * @param string $hotelSegmentCategoryCode
     * @param int $supplierIntegrationLevel
     * @param int $maxGroupRoomQuantity
     * @param string $currencyCode
     */
    public function __construct(array $vendorMessages = array(), \OtaInterface\Otaconnect\StructType\Position $position = null, $address = null, \OtaInterface\Otaconnect\StructType\ContactNumbers $contactNumbers = null, array $award = array(), $relativePosition = null, array $hotelAmenity = array(), array $recreation = array(), array $service = array(), \OtaInterface\Otaconnect\StructType\Policy $policy = null, $hotelSegmentCategoryCode = null, $supplierIntegrationLevel = null, $maxGroupRoomQuantity = null, $currencyCode = null)
    {
        $this
            ->setVendorMessages($vendorMessages)
            ->setPosition($position)
            ->setAddress($address)
            ->setContactNumbers($contactNumbers)
            ->setAward($award)
            ->setRelativePosition($relativePosition)
            ->setHotelAmenity($hotelAmenity)
            ->setRecreation($recreation)
            ->setService($service)
            ->setPolicy($policy)
            ->setHotelSegmentCategoryCode($hotelSegmentCategoryCode)
            ->setSupplierIntegrationLevel($supplierIntegrationLevel)
            ->setMaxGroupRoomQuantity($maxGroupRoomQuantity)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get VendorMessages value
     * @return mixed[]|null
     */
    public function getVendorMessages()
    {
        return $this->VendorMessages;
    }
    /**
     * Set VendorMessages value
     * @throws \InvalidArgumentException
     * @param mixed[] $vendorMessages
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setVendorMessages(array $vendorMessages = array())
    {
        foreach ($vendorMessages as $basicPropertyInfoTypeVendorMessagesItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VendorMessages property can only contain items of anyType, "%s" given', is_object($basicPropertyInfoTypeVendorMessagesItem) ? get_class($basicPropertyInfoTypeVendorMessagesItem) : gettype($basicPropertyInfoTypeVendorMessagesItem)), __LINE__);
            }
        }
        $this->VendorMessages = $vendorMessages;
        return $this;
    }
    /**
     * Add item to VendorMessages value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function addToVendorMessages($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VendorMessages property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VendorMessages[] = $item;
        return $this;
    }
    /**
     * Get Position value
     * @return \OtaInterface\Otaconnect\StructType\Position|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param \OtaInterface\Otaconnect\StructType\Position $position
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setPosition(\OtaInterface\Otaconnect\StructType\Position $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Address value
     * @return mixed|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param mixed $address
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get ContactNumbers value
     * @return \OtaInterface\Otaconnect\StructType\ContactNumbers|null
     */
    public function getContactNumbers()
    {
        return $this->ContactNumbers;
    }
    /**
     * Set ContactNumbers value
     * @param \OtaInterface\Otaconnect\StructType\ContactNumbers $contactNumbers
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setContactNumbers(\OtaInterface\Otaconnect\StructType\ContactNumbers $contactNumbers = null)
    {
        $this->ContactNumbers = $contactNumbers;
        return $this;
    }
    /**
     * Get Award value
     * @return \OtaInterface\Otaconnect\StructType\Award[]|null
     */
    public function getAward()
    {
        return $this->Award;
    }
    /**
     * Set Award value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Award[] $award
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setAward(array $award = array())
    {
        foreach ($award as $basicPropertyInfoTypeAwardItem) {
            // validation for constraint: itemType
            if (!$basicPropertyInfoTypeAwardItem instanceof \OtaInterface\Otaconnect\StructType\Award) {
                throw new \InvalidArgumentException(sprintf('The Award property can only contain items of \OtaInterface\Otaconnect\StructType\Award, "%s" given', is_object($basicPropertyInfoTypeAwardItem) ? get_class($basicPropertyInfoTypeAwardItem) : gettype($basicPropertyInfoTypeAwardItem)), __LINE__);
            }
        }
        $this->Award = $award;
        return $this;
    }
    /**
     * Add item to Award value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Award $item
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function addToAward(\OtaInterface\Otaconnect\StructType\Award $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Award) {
            throw new \InvalidArgumentException(sprintf('The Award property can only contain items of \OtaInterface\Otaconnect\StructType\Award, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Award[] = $item;
        return $this;
    }
    /**
     * Get RelativePosition value
     * @return mixed|null
     */
    public function getRelativePosition()
    {
        return $this->RelativePosition;
    }
    /**
     * Set RelativePosition value
     * @param mixed $relativePosition
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setRelativePosition($relativePosition = null)
    {
        $this->RelativePosition = $relativePosition;
        return $this;
    }
    /**
     * Get HotelAmenity value
     * @return \OtaInterface\Otaconnect\StructType\HotelAmenity[]|null
     */
    public function getHotelAmenity()
    {
        return $this->HotelAmenity;
    }
    /**
     * Set HotelAmenity value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelAmenity[] $hotelAmenity
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setHotelAmenity(array $hotelAmenity = array())
    {
        foreach ($hotelAmenity as $basicPropertyInfoTypeHotelAmenityItem) {
            // validation for constraint: itemType
            if (!$basicPropertyInfoTypeHotelAmenityItem instanceof \OtaInterface\Otaconnect\StructType\HotelAmenity) {
                throw new \InvalidArgumentException(sprintf('The HotelAmenity property can only contain items of \OtaInterface\Otaconnect\StructType\HotelAmenity, "%s" given', is_object($basicPropertyInfoTypeHotelAmenityItem) ? get_class($basicPropertyInfoTypeHotelAmenityItem) : gettype($basicPropertyInfoTypeHotelAmenityItem)), __LINE__);
            }
        }
        $this->HotelAmenity = $hotelAmenity;
        return $this;
    }
    /**
     * Add item to HotelAmenity value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelAmenity $item
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function addToHotelAmenity(\OtaInterface\Otaconnect\StructType\HotelAmenity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\HotelAmenity) {
            throw new \InvalidArgumentException(sprintf('The HotelAmenity property can only contain items of \OtaInterface\Otaconnect\StructType\HotelAmenity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelAmenity[] = $item;
        return $this;
    }
    /**
     * Get Recreation value
     * @return \OtaInterface\Otaconnect\StructType\Recreation[]|null
     */
    public function getRecreation()
    {
        return $this->Recreation;
    }
    /**
     * Set Recreation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Recreation[] $recreation
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setRecreation(array $recreation = array())
    {
        foreach ($recreation as $basicPropertyInfoTypeRecreationItem) {
            // validation for constraint: itemType
            if (!$basicPropertyInfoTypeRecreationItem instanceof \OtaInterface\Otaconnect\StructType\Recreation) {
                throw new \InvalidArgumentException(sprintf('The Recreation property can only contain items of \OtaInterface\Otaconnect\StructType\Recreation, "%s" given', is_object($basicPropertyInfoTypeRecreationItem) ? get_class($basicPropertyInfoTypeRecreationItem) : gettype($basicPropertyInfoTypeRecreationItem)), __LINE__);
            }
        }
        $this->Recreation = $recreation;
        return $this;
    }
    /**
     * Add item to Recreation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Recreation $item
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function addToRecreation(\OtaInterface\Otaconnect\StructType\Recreation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Recreation) {
            throw new \InvalidArgumentException(sprintf('The Recreation property can only contain items of \OtaInterface\Otaconnect\StructType\Recreation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Recreation[] = $item;
        return $this;
    }
    /**
     * Get Service value
     * @return \OtaInterface\Otaconnect\StructType\Service[]|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Service[] $service
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setService(array $service = array())
    {
        foreach ($service as $basicPropertyInfoTypeServiceItem) {
            // validation for constraint: itemType
            if (!$basicPropertyInfoTypeServiceItem instanceof \OtaInterface\Otaconnect\StructType\Service) {
                throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \OtaInterface\Otaconnect\StructType\Service, "%s" given', is_object($basicPropertyInfoTypeServiceItem) ? get_class($basicPropertyInfoTypeServiceItem) : gettype($basicPropertyInfoTypeServiceItem)), __LINE__);
            }
        }
        $this->Service = $service;
        return $this;
    }
    /**
     * Add item to Service value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Service $item
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function addToService(\OtaInterface\Otaconnect\StructType\Service $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Service) {
            throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \OtaInterface\Otaconnect\StructType\Service, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Service[] = $item;
        return $this;
    }
    /**
     * Get Policy value
     * @return \OtaInterface\Otaconnect\StructType\Policy|null
     */
    public function getPolicy()
    {
        return $this->Policy;
    }
    /**
     * Set Policy value
     * @param \OtaInterface\Otaconnect\StructType\Policy $policy
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setPolicy(\OtaInterface\Otaconnect\StructType\Policy $policy = null)
    {
        $this->Policy = $policy;
        return $this;
    }
    /**
     * Get HotelSegmentCategoryCode value
     * @return string|null
     */
    public function getHotelSegmentCategoryCode()
    {
        return $this->HotelSegmentCategoryCode;
    }
    /**
     * Set HotelSegmentCategoryCode value
     * @param string $hotelSegmentCategoryCode
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setHotelSegmentCategoryCode($hotelSegmentCategoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelSegmentCategoryCode) && !is_string($hotelSegmentCategoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelSegmentCategoryCode)), __LINE__);
        }
        $this->HotelSegmentCategoryCode = $hotelSegmentCategoryCode;
        return $this;
    }
    /**
     * Get SupplierIntegrationLevel value
     * @return int|null
     */
    public function getSupplierIntegrationLevel()
    {
        return $this->SupplierIntegrationLevel;
    }
    /**
     * Set SupplierIntegrationLevel value
     * @param int $supplierIntegrationLevel
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setSupplierIntegrationLevel($supplierIntegrationLevel = null)
    {
        // validation for constraint: int
        if (!is_null($supplierIntegrationLevel) && !is_numeric($supplierIntegrationLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($supplierIntegrationLevel)), __LINE__);
        }
        $this->SupplierIntegrationLevel = $supplierIntegrationLevel;
        return $this;
    }
    /**
     * Get MaxGroupRoomQuantity value
     * @return int|null
     */
    public function getMaxGroupRoomQuantity()
    {
        return $this->MaxGroupRoomQuantity;
    }
    /**
     * Set MaxGroupRoomQuantity value
     * @param int $maxGroupRoomQuantity
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setMaxGroupRoomQuantity($maxGroupRoomQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($maxGroupRoomQuantity) && !is_numeric($maxGroupRoomQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxGroupRoomQuantity)), __LINE__);
        }
        $this->MaxGroupRoomQuantity = $maxGroupRoomQuantity;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType
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
