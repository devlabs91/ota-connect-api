<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItineraryItemResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response data for any valid item of inventory. | Defines the chronological and sequential order of an item in a package
 * @subpackage Structs
 */
class ItineraryItemResponseType extends AbstractStructBase
{
    /**
     * The Accommodation
     * @var \OtaInterface\Otaconnect\StructType\Accommodation
     */
    public $Accommodation;
    /**
     * The Flight
     * Meta informations extracted from the WSDL
     * - documentation: Details of a flight item required in the package
     * @var mixed
     */
    public $Flight;
    /**
     * The RentalCar
     * @var \OtaInterface\Otaconnect\StructType\RentalCar
     */
    public $RentalCar;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: (Reference Place Holder) - an index code to identify an instance in a collection of like items. For example, used to assign individual passengers or clients to particular itinerary items.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for ItineraryItemResponseType
     * @uses ItineraryItemResponseType::setAccommodation()
     * @uses ItineraryItemResponseType::setFlight()
     * @uses ItineraryItemResponseType::setRentalCar()
     * @uses ItineraryItemResponseType::setRPH()
     * @param \OtaInterface\Otaconnect\StructType\Accommodation $accommodation
     * @param mixed $flight
     * @param \OtaInterface\Otaconnect\StructType\RentalCar $rentalCar
     * @param string $rPH
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\Accommodation $accommodation = null, $flight = null, \OtaInterface\Otaconnect\StructType\RentalCar $rentalCar = null, $rPH = null)
    {
        $this
            ->setAccommodation($accommodation)
            ->setFlight($flight)
            ->setRentalCar($rentalCar)
            ->setRPH($rPH);
    }
    /**
     * Get Accommodation value
     * @return \OtaInterface\Otaconnect\StructType\Accommodation|null
     */
    public function getAccommodation()
    {
        return $this->Accommodation;
    }
    /**
     * Set Accommodation value
     * @param \OtaInterface\Otaconnect\StructType\Accommodation $accommodation
     * @return \OtaInterface\Otaconnect\StructType\ItineraryItemResponseType
     */
    public function setAccommodation(\OtaInterface\Otaconnect\StructType\Accommodation $accommodation = null)
    {
        $this->Accommodation = $accommodation;
        return $this;
    }
    /**
     * Get Flight value
     * @return mixed|null
     */
    public function getFlight()
    {
        return $this->Flight;
    }
    /**
     * Set Flight value
     * @param mixed $flight
     * @return \OtaInterface\Otaconnect\StructType\ItineraryItemResponseType
     */
    public function setFlight($flight = null)
    {
        $this->Flight = $flight;
        return $this;
    }
    /**
     * Get RentalCar value
     * @return \OtaInterface\Otaconnect\StructType\RentalCar|null
     */
    public function getRentalCar()
    {
        return $this->RentalCar;
    }
    /**
     * Set RentalCar value
     * @param \OtaInterface\Otaconnect\StructType\RentalCar $rentalCar
     * @return \OtaInterface\Otaconnect\StructType\ItineraryItemResponseType
     */
    public function setRentalCar(\OtaInterface\Otaconnect\StructType\RentalCar $rentalCar = null)
    {
        $this->RentalCar = $rentalCar;
        return $this;
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
     * @return \OtaInterface\Otaconnect\StructType\ItineraryItemResponseType
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
     * @return \OtaInterface\Otaconnect\StructType\ItineraryItemResponseType
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
