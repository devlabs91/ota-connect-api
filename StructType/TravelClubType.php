<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelClubType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a travel club that offers special privileges and related services. | Allows for control of the sharing of travel club data. | The effective and expiry dates for this travel club membership.
 * @subpackage Structs
 */
class TravelClubType extends AbstractStructBase
{
    /**
     * The TravelClubName
     * Meta informations extracted from the WSDL
     * - documentation: Name of the travel club.
     * @var mixed
     */
    public $TravelClubName;
    /**
     * The ClubMemberName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ClubMemberName
     */
    public $ClubMemberName;
    /**
     * Constructor method for TravelClubType
     * @uses TravelClubType::setTravelClubName()
     * @uses TravelClubType::setClubMemberName()
     * @param mixed $travelClubName
     * @param \OtaInterface\Otaconnect\StructType\ClubMemberName $clubMemberName
     */
    public function __construct($travelClubName = null, \OtaInterface\Otaconnect\StructType\ClubMemberName $clubMemberName = null)
    {
        $this
            ->setTravelClubName($travelClubName)
            ->setClubMemberName($clubMemberName);
    }
    /**
     * Get TravelClubName value
     * @return mixed|null
     */
    public function getTravelClubName()
    {
        return $this->TravelClubName;
    }
    /**
     * Set TravelClubName value
     * @param mixed $travelClubName
     * @return \OtaInterface\Otaconnect\StructType\TravelClubType
     */
    public function setTravelClubName($travelClubName = null)
    {
        $this->TravelClubName = $travelClubName;
        return $this;
    }
    /**
     * Get ClubMemberName value
     * @return \OtaInterface\Otaconnect\StructType\ClubMemberName|null
     */
    public function getClubMemberName()
    {
        return $this->ClubMemberName;
    }
    /**
     * Set ClubMemberName value
     * @param \OtaInterface\Otaconnect\StructType\ClubMemberName $clubMemberName
     * @return \OtaInterface\Otaconnect\StructType\TravelClubType
     */
    public function setClubMemberName(\OtaInterface\Otaconnect\StructType\ClubMemberName $clubMemberName = null)
    {
        $this->ClubMemberName = $clubMemberName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\TravelClubType
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
