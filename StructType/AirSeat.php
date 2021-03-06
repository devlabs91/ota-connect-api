<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSeat StructType
 * Meta informations extracted from the WSDL
 * - documentation: A Seat within a row | Describes the seat attributes.
 * @subpackage Structs
 */
class AirSeat extends AbstractStructBase
{
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: Should be used for situations in which a passenger in the input request is already assigned a seat. The RPH value will correspond to the RPH in the element TravelRefNumber within the element TravelerInfoSummary.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for AirSeat
     * @uses AirSeat::setRPH()
     * @param string $rPH
     */
    public function __construct($rPH = null)
    {
        $this
            ->setRPH($rPH);
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
     * @return \OtaInterface\Otaconnect\StructType\AirSeat
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AirSeat
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
