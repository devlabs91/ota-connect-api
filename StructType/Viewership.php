<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Viewership StructType
 * Meta informations extracted from the WSDL
 * - documentation: Viewership defines a system that is allowed to view the rateplan identified in a Hotel Rate Plan Notification message. This may also be used to define a system that is able to view the hotel content.
 * @subpackage Structs
 */
class Viewership extends AbstractStructBase
{
    /**
     * The ViewershipCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ViewershipCodes
     */
    public $ViewershipCodes;
    /**
     * The SystemCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\SystemCodes
     */
    public $SystemCodes;
    /**
     * The ProfileTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ProfileTypes
     */
    public $ProfileTypes;
    /**
     * The ProfileRefs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ProfileRefs
     */
    public $ProfileRefs;
    /**
     * The Profiles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Profiles
     */
    public $Profiles;
    /**
     * The LocationCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\LocationCodes
     */
    public $LocationCodes;
    /**
     * The BookingChannelCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\BookingChannelCodes
     */
    public $BookingChannelCodes;
    /**
     * The DistributorTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\DistributorTypes
     */
    public $DistributorTypes;
    /**
     * The ViewershipRPH
     * Meta informations extracted from the WSDL
     * - documentation: This is a reference placeholder, used as an index for multiple Viewership classes.
     * - use: optional
     * @var string
     */
    public $ViewershipRPH;
    /**
     * The ViewOnly
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this rate plan is bookable by the entity having viewership. Values: false= Bookable, true= View Only (not bookable).
     * - use: optional
     * @var bool
     */
    public $ViewOnly;
    /**
     * Constructor method for Viewership
     * @uses Viewership::setViewershipCodes()
     * @uses Viewership::setSystemCodes()
     * @uses Viewership::setProfileTypes()
     * @uses Viewership::setProfileRefs()
     * @uses Viewership::setProfiles()
     * @uses Viewership::setLocationCodes()
     * @uses Viewership::setBookingChannelCodes()
     * @uses Viewership::setDistributorTypes()
     * @uses Viewership::setViewershipRPH()
     * @uses Viewership::setViewOnly()
     * @param \OtaInterface\Otaconnect\StructType\ViewershipCodes $viewershipCodes
     * @param \OtaInterface\Otaconnect\StructType\SystemCodes $systemCodes
     * @param \OtaInterface\Otaconnect\StructType\ProfileTypes $profileTypes
     * @param \OtaInterface\Otaconnect\StructType\ProfileRefs $profileRefs
     * @param \OtaInterface\Otaconnect\StructType\Profiles $profiles
     * @param \OtaInterface\Otaconnect\StructType\LocationCodes $locationCodes
     * @param \OtaInterface\Otaconnect\StructType\BookingChannelCodes $bookingChannelCodes
     * @param \OtaInterface\Otaconnect\StructType\DistributorTypes $distributorTypes
     * @param string $viewershipRPH
     * @param bool $viewOnly
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\ViewershipCodes $viewershipCodes = null, \OtaInterface\Otaconnect\StructType\SystemCodes $systemCodes = null, \OtaInterface\Otaconnect\StructType\ProfileTypes $profileTypes = null, \OtaInterface\Otaconnect\StructType\ProfileRefs $profileRefs = null, \OtaInterface\Otaconnect\StructType\Profiles $profiles = null, \OtaInterface\Otaconnect\StructType\LocationCodes $locationCodes = null, \OtaInterface\Otaconnect\StructType\BookingChannelCodes $bookingChannelCodes = null, \OtaInterface\Otaconnect\StructType\DistributorTypes $distributorTypes = null, $viewershipRPH = null, $viewOnly = null)
    {
        $this
            ->setViewershipCodes($viewershipCodes)
            ->setSystemCodes($systemCodes)
            ->setProfileTypes($profileTypes)
            ->setProfileRefs($profileRefs)
            ->setProfiles($profiles)
            ->setLocationCodes($locationCodes)
            ->setBookingChannelCodes($bookingChannelCodes)
            ->setDistributorTypes($distributorTypes)
            ->setViewershipRPH($viewershipRPH)
            ->setViewOnly($viewOnly);
    }
    /**
     * Get ViewershipCodes value
     * @return \OtaInterface\Otaconnect\StructType\ViewershipCodes|null
     */
    public function getViewershipCodes()
    {
        return $this->ViewershipCodes;
    }
    /**
     * Set ViewershipCodes value
     * @param \OtaInterface\Otaconnect\StructType\ViewershipCodes $viewershipCodes
     * @return \OtaInterface\Otaconnect\StructType\Viewership
     */
    public function setViewershipCodes(\OtaInterface\Otaconnect\StructType\ViewershipCodes $viewershipCodes = null)
    {
        $this->ViewershipCodes = $viewershipCodes;
        return $this;
    }
    /**
     * Get SystemCodes value
     * @return \OtaInterface\Otaconnect\StructType\SystemCodes|null
     */
    public function getSystemCodes()
    {
        return $this->SystemCodes;
    }
    /**
     * Set SystemCodes value
     * @param \OtaInterface\Otaconnect\StructType\SystemCodes $systemCodes
     * @return \OtaInterface\Otaconnect\StructType\Viewership
     */
    public function setSystemCodes(\OtaInterface\Otaconnect\StructType\SystemCodes $systemCodes = null)
    {
        $this->SystemCodes = $systemCodes;
        return $this;
    }
    /**
     * Get ProfileTypes value
     * @return \OtaInterface\Otaconnect\StructType\ProfileTypes|null
     */
    public function getProfileTypes()
    {
        return $this->ProfileTypes;
    }
    /**
     * Set ProfileTypes value
     * @param \OtaInterface\Otaconnect\StructType\ProfileTypes $profileTypes
     * @return \OtaInterface\Otaconnect\StructType\Viewership
     */
    public function setProfileTypes(\OtaInterface\Otaconnect\StructType\ProfileTypes $profileTypes = null)
    {
        $this->ProfileTypes = $profileTypes;
        return $this;
    }
    /**
     * Get ProfileRefs value
     * @return \OtaInterface\Otaconnect\StructType\ProfileRefs|null
     */
    public function getProfileRefs()
    {
        return $this->ProfileRefs;
    }
    /**
     * Set ProfileRefs value
     * @param \OtaInterface\Otaconnect\StructType\ProfileRefs $profileRefs
     * @return \OtaInterface\Otaconnect\StructType\Viewership
     */
    public function setProfileRefs(\OtaInterface\Otaconnect\StructType\ProfileRefs $profileRefs = null)
    {
        $this->ProfileRefs = $profileRefs;
        return $this;
    }
    /**
     * Get Profiles value
     * @return \OtaInterface\Otaconnect\StructType\Profiles|null
     */
    public function getProfiles()
    {
        return $this->Profiles;
    }
    /**
     * Set Profiles value
     * @param \OtaInterface\Otaconnect\StructType\Profiles $profiles
     * @return \OtaInterface\Otaconnect\StructType\Viewership
     */
    public function setProfiles(\OtaInterface\Otaconnect\StructType\Profiles $profiles = null)
    {
        $this->Profiles = $profiles;
        return $this;
    }
    /**
     * Get LocationCodes value
     * @return \OtaInterface\Otaconnect\StructType\LocationCodes|null
     */
    public function getLocationCodes()
    {
        return $this->LocationCodes;
    }
    /**
     * Set LocationCodes value
     * @param \OtaInterface\Otaconnect\StructType\LocationCodes $locationCodes
     * @return \OtaInterface\Otaconnect\StructType\Viewership
     */
    public function setLocationCodes(\OtaInterface\Otaconnect\StructType\LocationCodes $locationCodes = null)
    {
        $this->LocationCodes = $locationCodes;
        return $this;
    }
    /**
     * Get BookingChannelCodes value
     * @return \OtaInterface\Otaconnect\StructType\BookingChannelCodes|null
     */
    public function getBookingChannelCodes()
    {
        return $this->BookingChannelCodes;
    }
    /**
     * Set BookingChannelCodes value
     * @param \OtaInterface\Otaconnect\StructType\BookingChannelCodes $bookingChannelCodes
     * @return \OtaInterface\Otaconnect\StructType\Viewership
     */
    public function setBookingChannelCodes(\OtaInterface\Otaconnect\StructType\BookingChannelCodes $bookingChannelCodes = null)
    {
        $this->BookingChannelCodes = $bookingChannelCodes;
        return $this;
    }
    /**
     * Get DistributorTypes value
     * @return \OtaInterface\Otaconnect\StructType\DistributorTypes|null
     */
    public function getDistributorTypes()
    {
        return $this->DistributorTypes;
    }
    /**
     * Set DistributorTypes value
     * @param \OtaInterface\Otaconnect\StructType\DistributorTypes $distributorTypes
     * @return \OtaInterface\Otaconnect\StructType\Viewership
     */
    public function setDistributorTypes(\OtaInterface\Otaconnect\StructType\DistributorTypes $distributorTypes = null)
    {
        $this->DistributorTypes = $distributorTypes;
        return $this;
    }
    /**
     * Get ViewershipRPH value
     * @return string|null
     */
    public function getViewershipRPH()
    {
        return $this->ViewershipRPH;
    }
    /**
     * Set ViewershipRPH value
     * @param string $viewershipRPH
     * @return \OtaInterface\Otaconnect\StructType\Viewership
     */
    public function setViewershipRPH($viewershipRPH = null)
    {
        // validation for constraint: string
        if (!is_null($viewershipRPH) && !is_string($viewershipRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($viewershipRPH)), __LINE__);
        }
        $this->ViewershipRPH = $viewershipRPH;
        return $this;
    }
    /**
     * Get ViewOnly value
     * @return bool|null
     */
    public function getViewOnly()
    {
        return $this->ViewOnly;
    }
    /**
     * Set ViewOnly value
     * @param bool $viewOnly
     * @return \OtaInterface\Otaconnect\StructType\Viewership
     */
    public function setViewOnly($viewOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($viewOnly) && !is_bool($viewOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($viewOnly)), __LINE__);
        }
        $this->ViewOnly = $viewOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Viewership
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
