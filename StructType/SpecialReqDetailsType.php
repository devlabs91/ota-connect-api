<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialReqDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Remarks, OSIs, Seat Requests etc.
 * @subpackage Structs
 */
class SpecialReqDetailsType extends AbstractStructBase
{
    /**
     * The SeatRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\SeatRequests
     */
    public $SeatRequests;
    /**
     * The SpecialServiceRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\SpecialServiceRequests
     */
    public $SpecialServiceRequests;
    /**
     * The OtherServiceInformations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\OtherServiceInformations
     */
    public $OtherServiceInformations;
    /**
     * The Remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Remarks
     */
    public $Remarks;
    /**
     * The SpecialRemarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\SpecialRemarks
     */
    public $SpecialRemarks;
    /**
     * Constructor method for SpecialReqDetailsType
     * @uses SpecialReqDetailsType::setSeatRequests()
     * @uses SpecialReqDetailsType::setSpecialServiceRequests()
     * @uses SpecialReqDetailsType::setOtherServiceInformations()
     * @uses SpecialReqDetailsType::setRemarks()
     * @uses SpecialReqDetailsType::setSpecialRemarks()
     * @param \OtaInterface\Otaconnect\StructType\SeatRequests $seatRequests
     * @param \OtaInterface\Otaconnect\StructType\SpecialServiceRequests $specialServiceRequests
     * @param \OtaInterface\Otaconnect\StructType\OtherServiceInformations $otherServiceInformations
     * @param \OtaInterface\Otaconnect\StructType\Remarks $remarks
     * @param \OtaInterface\Otaconnect\StructType\SpecialRemarks $specialRemarks
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\SeatRequests $seatRequests = null, \OtaInterface\Otaconnect\StructType\SpecialServiceRequests $specialServiceRequests = null, \OtaInterface\Otaconnect\StructType\OtherServiceInformations $otherServiceInformations = null, \OtaInterface\Otaconnect\StructType\Remarks $remarks = null, \OtaInterface\Otaconnect\StructType\SpecialRemarks $specialRemarks = null)
    {
        $this
            ->setSeatRequests($seatRequests)
            ->setSpecialServiceRequests($specialServiceRequests)
            ->setOtherServiceInformations($otherServiceInformations)
            ->setRemarks($remarks)
            ->setSpecialRemarks($specialRemarks);
    }
    /**
     * Get SeatRequests value
     * @return \OtaInterface\Otaconnect\StructType\SeatRequests|null
     */
    public function getSeatRequests()
    {
        return $this->SeatRequests;
    }
    /**
     * Set SeatRequests value
     * @param \OtaInterface\Otaconnect\StructType\SeatRequests $seatRequests
     * @return \OtaInterface\Otaconnect\StructType\SpecialReqDetailsType
     */
    public function setSeatRequests(\OtaInterface\Otaconnect\StructType\SeatRequests $seatRequests = null)
    {
        $this->SeatRequests = $seatRequests;
        return $this;
    }
    /**
     * Get SpecialServiceRequests value
     * @return \OtaInterface\Otaconnect\StructType\SpecialServiceRequests|null
     */
    public function getSpecialServiceRequests()
    {
        return $this->SpecialServiceRequests;
    }
    /**
     * Set SpecialServiceRequests value
     * @param \OtaInterface\Otaconnect\StructType\SpecialServiceRequests $specialServiceRequests
     * @return \OtaInterface\Otaconnect\StructType\SpecialReqDetailsType
     */
    public function setSpecialServiceRequests(\OtaInterface\Otaconnect\StructType\SpecialServiceRequests $specialServiceRequests = null)
    {
        $this->SpecialServiceRequests = $specialServiceRequests;
        return $this;
    }
    /**
     * Get OtherServiceInformations value
     * @return \OtaInterface\Otaconnect\StructType\OtherServiceInformations|null
     */
    public function getOtherServiceInformations()
    {
        return $this->OtherServiceInformations;
    }
    /**
     * Set OtherServiceInformations value
     * @param \OtaInterface\Otaconnect\StructType\OtherServiceInformations $otherServiceInformations
     * @return \OtaInterface\Otaconnect\StructType\SpecialReqDetailsType
     */
    public function setOtherServiceInformations(\OtaInterface\Otaconnect\StructType\OtherServiceInformations $otherServiceInformations = null)
    {
        $this->OtherServiceInformations = $otherServiceInformations;
        return $this;
    }
    /**
     * Get Remarks value
     * @return \OtaInterface\Otaconnect\StructType\Remarks|null
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param \OtaInterface\Otaconnect\StructType\Remarks $remarks
     * @return \OtaInterface\Otaconnect\StructType\SpecialReqDetailsType
     */
    public function setRemarks(\OtaInterface\Otaconnect\StructType\Remarks $remarks = null)
    {
        $this->Remarks = $remarks;
        return $this;
    }
    /**
     * Get SpecialRemarks value
     * @return \OtaInterface\Otaconnect\StructType\SpecialRemarks|null
     */
    public function getSpecialRemarks()
    {
        return $this->SpecialRemarks;
    }
    /**
     * Set SpecialRemarks value
     * @param \OtaInterface\Otaconnect\StructType\SpecialRemarks $specialRemarks
     * @return \OtaInterface\Otaconnect\StructType\SpecialReqDetailsType
     */
    public function setSpecialRemarks(\OtaInterface\Otaconnect\StructType\SpecialRemarks $specialRemarks = null)
    {
        $this->SpecialRemarks = $specialRemarks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\SpecialReqDetailsType
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
