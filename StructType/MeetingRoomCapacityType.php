<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingRoomCapacityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The MeetingRoomCapacity object that defines the largest room seating capacity for a meeting room at the hotel facility.
 * @subpackage Structs
 */
class MeetingRoomCapacityType extends AbstractStructBase
{
    /**
     * The Occupancy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Occupancy
     */
    public $Occupancy;
    /**
     * The MeetingRoomFormatCode
     * Meta informations extracted from the WSDL
     * - documentation: The code for the format of a meeting room at the hotel facility, such as U-shape, banquet, conference style, etc. A hotel may indicate all formats that apply to the meeting room. Refer to OpenTravel Code List Meeting Room Format Code
     * (MRF).
     * - use: optional
     * @var string
     */
    public $MeetingRoomFormatCode;
    /**
     * Constructor method for MeetingRoomCapacityType
     * @uses MeetingRoomCapacityType::setOccupancy()
     * @uses MeetingRoomCapacityType::setMeetingRoomFormatCode()
     * @param \OtaInterface\Otaconnect\StructType\Occupancy $occupancy
     * @param string $meetingRoomFormatCode
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\Occupancy $occupancy = null, $meetingRoomFormatCode = null)
    {
        $this
            ->setOccupancy($occupancy)
            ->setMeetingRoomFormatCode($meetingRoomFormatCode);
    }
    /**
     * Get Occupancy value
     * @return \OtaInterface\Otaconnect\StructType\Occupancy|null
     */
    public function getOccupancy()
    {
        return $this->Occupancy;
    }
    /**
     * Set Occupancy value
     * @param \OtaInterface\Otaconnect\StructType\Occupancy $occupancy
     * @return \OtaInterface\Otaconnect\StructType\MeetingRoomCapacityType
     */
    public function setOccupancy(\OtaInterface\Otaconnect\StructType\Occupancy $occupancy = null)
    {
        $this->Occupancy = $occupancy;
        return $this;
    }
    /**
     * Get MeetingRoomFormatCode value
     * @return string|null
     */
    public function getMeetingRoomFormatCode()
    {
        return $this->MeetingRoomFormatCode;
    }
    /**
     * Set MeetingRoomFormatCode value
     * @param string $meetingRoomFormatCode
     * @return \OtaInterface\Otaconnect\StructType\MeetingRoomCapacityType
     */
    public function setMeetingRoomFormatCode($meetingRoomFormatCode = null)
    {
        // validation for constraint: string
        if (!is_null($meetingRoomFormatCode) && !is_string($meetingRoomFormatCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($meetingRoomFormatCode)), __LINE__);
        }
        $this->MeetingRoomFormatCode = $meetingRoomFormatCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\MeetingRoomCapacityType
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
