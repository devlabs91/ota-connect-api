<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatRequests StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Seat Request
 * @subpackage Structs
 */
class SeatRequests extends AbstractStructBase
{
    /**
     * The SeatRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\SeatRequest[]
     */
    public $SeatRequest;
    /**
     * Constructor method for SeatRequests
     * @uses SeatRequests::setSeatRequest()
     * @param \OtaInterface\Otaconnect\StructType\SeatRequest[] $seatRequest
     */
    public function __construct(array $seatRequest = array())
    {
        $this
            ->setSeatRequest($seatRequest);
    }
    /**
     * Get SeatRequest value
     * @return \OtaInterface\Otaconnect\StructType\SeatRequest[]|null
     */
    public function getSeatRequest()
    {
        return $this->SeatRequest;
    }
    /**
     * Set SeatRequest value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\SeatRequest[] $seatRequest
     * @return \OtaInterface\Otaconnect\StructType\SeatRequests
     */
    public function setSeatRequest(array $seatRequest = array())
    {
        foreach ($seatRequest as $seatRequestsSeatRequestItem) {
            // validation for constraint: itemType
            if (!$seatRequestsSeatRequestItem instanceof \OtaInterface\Otaconnect\StructType\SeatRequest) {
                throw new \InvalidArgumentException(sprintf('The SeatRequest property can only contain items of \OtaInterface\Otaconnect\StructType\SeatRequest, "%s" given', is_object($seatRequestsSeatRequestItem) ? get_class($seatRequestsSeatRequestItem) : gettype($seatRequestsSeatRequestItem)), __LINE__);
            }
        }
        $this->SeatRequest = $seatRequest;
        return $this;
    }
    /**
     * Add item to SeatRequest value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\SeatRequest $item
     * @return \OtaInterface\Otaconnect\StructType\SeatRequests
     */
    public function addToSeatRequest(\OtaInterface\Otaconnect\StructType\SeatRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\SeatRequest) {
            throw new \InvalidArgumentException(sprintf('The SeatRequest property can only contain items of \OtaInterface\Otaconnect\StructType\SeatRequest, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatRequest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\SeatRequests
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
