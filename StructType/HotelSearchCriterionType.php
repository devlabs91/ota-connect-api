<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSearchCriterionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Profile objects or Unique IDs of Profiles.
 * @subpackage Structs
 */
class HotelSearchCriterionType extends ItemSearchCriterionType
{
    /**
     * The HotelAmenity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\HotelAmenity[]
     */
    public $HotelAmenity;
    /**
     * The RoomAmenity
     * Meta informations extracted from the WSDL
     * - documentation: Room level amenities for searches.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RoomAmenity;
    /**
     * The HotelFeature
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\HotelFeature[]
     */
    public $HotelFeature;
    /**
     * The Award
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Award[]
     */
    public $Award;
    /**
     * The Recreation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Recreation[]
     */
    public $Recreation;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Service[]
     */
    public $Service;
    /**
     * The Transportation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Transportation[]
     */
    public $Transportation;
    /**
     * The StayDateRange
     * Meta informations extracted from the WSDL
     * - documentation: Range of dates, or fixed set of dates for Availability Request. Date range can also be specified by using start dates and number of nights (minimum, maximum or fixed).
     * - minOccurs: 0
     * @var mixed
     */
    public $StayDateRange;
    /**
     * The RateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RateRange[]
     */
    public $RateRange;
    /**
     * The RatePlanCandidates
     * Meta informations extracted from the WSDL
     * - documentation: Collection of requested rate plans.
     * - minOccurs: 0
     * @var mixed
     */
    public $RatePlanCandidates;
    /**
     * The Profiles
     * Meta informations extracted from the WSDL
     * - documentation: A collection of profile objects or unique IDs of profiles.
     * - minOccurs: 0
     * @var mixed
     */
    public $Profiles;
    /**
     * The RoomStayCandidates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RoomStayCandidates
     */
    public $RoomStayCandidates;
    /**
     * The AcceptedPayments
     * Meta informations extracted from the WSDL
     * - documentation: Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     * - minOccurs: 0
     * @var mixed
     */
    public $AcceptedPayments;
    /**
     * The Media
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Media[]
     */
    public $Media;
    /**
     * The HotelMeetingFacility
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\HotelMeetingFacility
     */
    public $HotelMeetingFacility;
    /**
     * The MealPlan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MealPlan
     */
    public $MealPlan;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for HotelSearchCriterionType
     * @uses HotelSearchCriterionType::setHotelAmenity()
     * @uses HotelSearchCriterionType::setRoomAmenity()
     * @uses HotelSearchCriterionType::setHotelFeature()
     * @uses HotelSearchCriterionType::setAward()
     * @uses HotelSearchCriterionType::setRecreation()
     * @uses HotelSearchCriterionType::setService()
     * @uses HotelSearchCriterionType::setTransportation()
     * @uses HotelSearchCriterionType::setStayDateRange()
     * @uses HotelSearchCriterionType::setRateRange()
     * @uses HotelSearchCriterionType::setRatePlanCandidates()
     * @uses HotelSearchCriterionType::setProfiles()
     * @uses HotelSearchCriterionType::setRoomStayCandidates()
     * @uses HotelSearchCriterionType::setAcceptedPayments()
     * @uses HotelSearchCriterionType::setMedia()
     * @uses HotelSearchCriterionType::setHotelMeetingFacility()
     * @uses HotelSearchCriterionType::setMealPlan()
     * @uses HotelSearchCriterionType::setTPA_Extensions()
     * @param \OtaInterface\Otaconnect\StructType\HotelAmenity[] $hotelAmenity
     * @param mixed[] $roomAmenity
     * @param \OtaInterface\Otaconnect\StructType\HotelFeature[] $hotelFeature
     * @param \OtaInterface\Otaconnect\StructType\Award[] $award
     * @param \OtaInterface\Otaconnect\StructType\Recreation[] $recreation
     * @param \OtaInterface\Otaconnect\StructType\Service[] $service
     * @param \OtaInterface\Otaconnect\StructType\Transportation[] $transportation
     * @param mixed $stayDateRange
     * @param \OtaInterface\Otaconnect\StructType\RateRange[] $rateRange
     * @param mixed $ratePlanCandidates
     * @param mixed $profiles
     * @param \OtaInterface\Otaconnect\StructType\RoomStayCandidates $roomStayCandidates
     * @param mixed $acceptedPayments
     * @param \OtaInterface\Otaconnect\StructType\Media[] $media
     * @param \OtaInterface\Otaconnect\StructType\HotelMeetingFacility $hotelMeetingFacility
     * @param \OtaInterface\Otaconnect\StructType\MealPlan $mealPlan
     * @param mixed $tPA_Extensions
     */
    public function __construct(array $hotelAmenity = array(), array $roomAmenity = array(), array $hotelFeature = array(), array $award = array(), array $recreation = array(), array $service = array(), array $transportation = array(), $stayDateRange = null, array $rateRange = array(), $ratePlanCandidates = null, $profiles = null, \OtaInterface\Otaconnect\StructType\RoomStayCandidates $roomStayCandidates = null, $acceptedPayments = null, array $media = array(), \OtaInterface\Otaconnect\StructType\HotelMeetingFacility $hotelMeetingFacility = null, \OtaInterface\Otaconnect\StructType\MealPlan $mealPlan = null, $tPA_Extensions = null)
    {
        $this
            ->setHotelAmenity($hotelAmenity)
            ->setRoomAmenity($roomAmenity)
            ->setHotelFeature($hotelFeature)
            ->setAward($award)
            ->setRecreation($recreation)
            ->setService($service)
            ->setTransportation($transportation)
            ->setStayDateRange($stayDateRange)
            ->setRateRange($rateRange)
            ->setRatePlanCandidates($ratePlanCandidates)
            ->setProfiles($profiles)
            ->setRoomStayCandidates($roomStayCandidates)
            ->setAcceptedPayments($acceptedPayments)
            ->setMedia($media)
            ->setHotelMeetingFacility($hotelMeetingFacility)
            ->setMealPlan($mealPlan)
            ->setTPA_Extensions($tPA_Extensions);
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
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setHotelAmenity(array $hotelAmenity = array())
    {
        foreach ($hotelAmenity as $hotelSearchCriterionTypeHotelAmenityItem) {
            // validation for constraint: itemType
            if (!$hotelSearchCriterionTypeHotelAmenityItem instanceof \OtaInterface\Otaconnect\StructType\HotelAmenity) {
                throw new \InvalidArgumentException(sprintf('The HotelAmenity property can only contain items of \OtaInterface\Otaconnect\StructType\HotelAmenity, "%s" given', is_object($hotelSearchCriterionTypeHotelAmenityItem) ? get_class($hotelSearchCriterionTypeHotelAmenityItem) : gettype($hotelSearchCriterionTypeHotelAmenityItem)), __LINE__);
            }
        }
        $this->HotelAmenity = $hotelAmenity;
        return $this;
    }
    /**
     * Add item to HotelAmenity value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelAmenity $item
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
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
     * Get RoomAmenity value
     * @return mixed[]|null
     */
    public function getRoomAmenity()
    {
        return $this->RoomAmenity;
    }
    /**
     * Set RoomAmenity value
     * @throws \InvalidArgumentException
     * @param mixed[] $roomAmenity
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setRoomAmenity(array $roomAmenity = array())
    {
        foreach ($roomAmenity as $hotelSearchCriterionTypeRoomAmenityItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RoomAmenity property can only contain items of anyType, "%s" given', is_object($hotelSearchCriterionTypeRoomAmenityItem) ? get_class($hotelSearchCriterionTypeRoomAmenityItem) : gettype($hotelSearchCriterionTypeRoomAmenityItem)), __LINE__);
            }
        }
        $this->RoomAmenity = $roomAmenity;
        return $this;
    }
    /**
     * Add item to RoomAmenity value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function addToRoomAmenity($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RoomAmenity property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomAmenity[] = $item;
        return $this;
    }
    /**
     * Get HotelFeature value
     * @return \OtaInterface\Otaconnect\StructType\HotelFeature[]|null
     */
    public function getHotelFeature()
    {
        return $this->HotelFeature;
    }
    /**
     * Set HotelFeature value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelFeature[] $hotelFeature
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setHotelFeature(array $hotelFeature = array())
    {
        foreach ($hotelFeature as $hotelSearchCriterionTypeHotelFeatureItem) {
            // validation for constraint: itemType
            if (!$hotelSearchCriterionTypeHotelFeatureItem instanceof \OtaInterface\Otaconnect\StructType\HotelFeature) {
                throw new \InvalidArgumentException(sprintf('The HotelFeature property can only contain items of \OtaInterface\Otaconnect\StructType\HotelFeature, "%s" given', is_object($hotelSearchCriterionTypeHotelFeatureItem) ? get_class($hotelSearchCriterionTypeHotelFeatureItem) : gettype($hotelSearchCriterionTypeHotelFeatureItem)), __LINE__);
            }
        }
        $this->HotelFeature = $hotelFeature;
        return $this;
    }
    /**
     * Add item to HotelFeature value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelFeature $item
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function addToHotelFeature(\OtaInterface\Otaconnect\StructType\HotelFeature $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\HotelFeature) {
            throw new \InvalidArgumentException(sprintf('The HotelFeature property can only contain items of \OtaInterface\Otaconnect\StructType\HotelFeature, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelFeature[] = $item;
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
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setAward(array $award = array())
    {
        foreach ($award as $hotelSearchCriterionTypeAwardItem) {
            // validation for constraint: itemType
            if (!$hotelSearchCriterionTypeAwardItem instanceof \OtaInterface\Otaconnect\StructType\Award) {
                throw new \InvalidArgumentException(sprintf('The Award property can only contain items of \OtaInterface\Otaconnect\StructType\Award, "%s" given', is_object($hotelSearchCriterionTypeAwardItem) ? get_class($hotelSearchCriterionTypeAwardItem) : gettype($hotelSearchCriterionTypeAwardItem)), __LINE__);
            }
        }
        $this->Award = $award;
        return $this;
    }
    /**
     * Add item to Award value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Award $item
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
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
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setRecreation(array $recreation = array())
    {
        foreach ($recreation as $hotelSearchCriterionTypeRecreationItem) {
            // validation for constraint: itemType
            if (!$hotelSearchCriterionTypeRecreationItem instanceof \OtaInterface\Otaconnect\StructType\Recreation) {
                throw new \InvalidArgumentException(sprintf('The Recreation property can only contain items of \OtaInterface\Otaconnect\StructType\Recreation, "%s" given', is_object($hotelSearchCriterionTypeRecreationItem) ? get_class($hotelSearchCriterionTypeRecreationItem) : gettype($hotelSearchCriterionTypeRecreationItem)), __LINE__);
            }
        }
        $this->Recreation = $recreation;
        return $this;
    }
    /**
     * Add item to Recreation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Recreation $item
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
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
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setService(array $service = array())
    {
        foreach ($service as $hotelSearchCriterionTypeServiceItem) {
            // validation for constraint: itemType
            if (!$hotelSearchCriterionTypeServiceItem instanceof \OtaInterface\Otaconnect\StructType\Service) {
                throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \OtaInterface\Otaconnect\StructType\Service, "%s" given', is_object($hotelSearchCriterionTypeServiceItem) ? get_class($hotelSearchCriterionTypeServiceItem) : gettype($hotelSearchCriterionTypeServiceItem)), __LINE__);
            }
        }
        $this->Service = $service;
        return $this;
    }
    /**
     * Add item to Service value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Service $item
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
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
     * Get Transportation value
     * @return \OtaInterface\Otaconnect\StructType\Transportation[]|null
     */
    public function getTransportation()
    {
        return $this->Transportation;
    }
    /**
     * Set Transportation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Transportation[] $transportation
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setTransportation(array $transportation = array())
    {
        foreach ($transportation as $hotelSearchCriterionTypeTransportationItem) {
            // validation for constraint: itemType
            if (!$hotelSearchCriterionTypeTransportationItem instanceof \OtaInterface\Otaconnect\StructType\Transportation) {
                throw new \InvalidArgumentException(sprintf('The Transportation property can only contain items of \OtaInterface\Otaconnect\StructType\Transportation, "%s" given', is_object($hotelSearchCriterionTypeTransportationItem) ? get_class($hotelSearchCriterionTypeTransportationItem) : gettype($hotelSearchCriterionTypeTransportationItem)), __LINE__);
            }
        }
        $this->Transportation = $transportation;
        return $this;
    }
    /**
     * Add item to Transportation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Transportation $item
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function addToTransportation(\OtaInterface\Otaconnect\StructType\Transportation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Transportation) {
            throw new \InvalidArgumentException(sprintf('The Transportation property can only contain items of \OtaInterface\Otaconnect\StructType\Transportation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Transportation[] = $item;
        return $this;
    }
    /**
     * Get StayDateRange value
     * @return mixed|null
     */
    public function getStayDateRange()
    {
        return $this->StayDateRange;
    }
    /**
     * Set StayDateRange value
     * @param mixed $stayDateRange
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setStayDateRange($stayDateRange = null)
    {
        $this->StayDateRange = $stayDateRange;
        return $this;
    }
    /**
     * Get RateRange value
     * @return \OtaInterface\Otaconnect\StructType\RateRange[]|null
     */
    public function getRateRange()
    {
        return $this->RateRange;
    }
    /**
     * Set RateRange value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RateRange[] $rateRange
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setRateRange(array $rateRange = array())
    {
        foreach ($rateRange as $hotelSearchCriterionTypeRateRangeItem) {
            // validation for constraint: itemType
            if (!$hotelSearchCriterionTypeRateRangeItem instanceof \OtaInterface\Otaconnect\StructType\RateRange) {
                throw new \InvalidArgumentException(sprintf('The RateRange property can only contain items of \OtaInterface\Otaconnect\StructType\RateRange, "%s" given', is_object($hotelSearchCriterionTypeRateRangeItem) ? get_class($hotelSearchCriterionTypeRateRangeItem) : gettype($hotelSearchCriterionTypeRateRangeItem)), __LINE__);
            }
        }
        $this->RateRange = $rateRange;
        return $this;
    }
    /**
     * Add item to RateRange value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RateRange $item
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function addToRateRange(\OtaInterface\Otaconnect\StructType\RateRange $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\RateRange) {
            throw new \InvalidArgumentException(sprintf('The RateRange property can only contain items of \OtaInterface\Otaconnect\StructType\RateRange, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateRange[] = $item;
        return $this;
    }
    /**
     * Get RatePlanCandidates value
     * @return mixed|null
     */
    public function getRatePlanCandidates()
    {
        return $this->RatePlanCandidates;
    }
    /**
     * Set RatePlanCandidates value
     * @param mixed $ratePlanCandidates
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setRatePlanCandidates($ratePlanCandidates = null)
    {
        $this->RatePlanCandidates = $ratePlanCandidates;
        return $this;
    }
    /**
     * Get Profiles value
     * @return mixed|null
     */
    public function getProfiles()
    {
        return $this->Profiles;
    }
    /**
     * Set Profiles value
     * @param mixed $profiles
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setProfiles($profiles = null)
    {
        $this->Profiles = $profiles;
        return $this;
    }
    /**
     * Get RoomStayCandidates value
     * @return \OtaInterface\Otaconnect\StructType\RoomStayCandidates|null
     */
    public function getRoomStayCandidates()
    {
        return $this->RoomStayCandidates;
    }
    /**
     * Set RoomStayCandidates value
     * @param \OtaInterface\Otaconnect\StructType\RoomStayCandidates $roomStayCandidates
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setRoomStayCandidates(\OtaInterface\Otaconnect\StructType\RoomStayCandidates $roomStayCandidates = null)
    {
        $this->RoomStayCandidates = $roomStayCandidates;
        return $this;
    }
    /**
     * Get AcceptedPayments value
     * @return mixed|null
     */
    public function getAcceptedPayments()
    {
        return $this->AcceptedPayments;
    }
    /**
     * Set AcceptedPayments value
     * @param mixed $acceptedPayments
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setAcceptedPayments($acceptedPayments = null)
    {
        $this->AcceptedPayments = $acceptedPayments;
        return $this;
    }
    /**
     * Get Media value
     * @return \OtaInterface\Otaconnect\StructType\Media[]|null
     */
    public function getMedia()
    {
        return $this->Media;
    }
    /**
     * Set Media value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Media[] $media
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setMedia(array $media = array())
    {
        foreach ($media as $hotelSearchCriterionTypeMediaItem) {
            // validation for constraint: itemType
            if (!$hotelSearchCriterionTypeMediaItem instanceof \OtaInterface\Otaconnect\StructType\Media) {
                throw new \InvalidArgumentException(sprintf('The Media property can only contain items of \OtaInterface\Otaconnect\StructType\Media, "%s" given', is_object($hotelSearchCriterionTypeMediaItem) ? get_class($hotelSearchCriterionTypeMediaItem) : gettype($hotelSearchCriterionTypeMediaItem)), __LINE__);
            }
        }
        $this->Media = $media;
        return $this;
    }
    /**
     * Add item to Media value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Media $item
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function addToMedia(\OtaInterface\Otaconnect\StructType\Media $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Media) {
            throw new \InvalidArgumentException(sprintf('The Media property can only contain items of \OtaInterface\Otaconnect\StructType\Media, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Media[] = $item;
        return $this;
    }
    /**
     * Get HotelMeetingFacility value
     * @return \OtaInterface\Otaconnect\StructType\HotelMeetingFacility|null
     */
    public function getHotelMeetingFacility()
    {
        return $this->HotelMeetingFacility;
    }
    /**
     * Set HotelMeetingFacility value
     * @param \OtaInterface\Otaconnect\StructType\HotelMeetingFacility $hotelMeetingFacility
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setHotelMeetingFacility(\OtaInterface\Otaconnect\StructType\HotelMeetingFacility $hotelMeetingFacility = null)
    {
        $this->HotelMeetingFacility = $hotelMeetingFacility;
        return $this;
    }
    /**
     * Get MealPlan value
     * @return \OtaInterface\Otaconnect\StructType\MealPlan|null
     */
    public function getMealPlan()
    {
        return $this->MealPlan;
    }
    /**
     * Set MealPlan value
     * @param \OtaInterface\Otaconnect\StructType\MealPlan $mealPlan
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setMealPlan(\OtaInterface\Otaconnect\StructType\MealPlan $mealPlan = null)
    {
        $this->MealPlan = $mealPlan;
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
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\HotelSearchCriterionType
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
