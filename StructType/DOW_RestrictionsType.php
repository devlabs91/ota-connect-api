<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DOW_RestrictionsType StructType
 * @subpackage Structs
 */
class DOW_RestrictionsType extends AbstractStructBase
{
    /**
     * The AvailableDaysOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AvailableDaysOfWeek
     */
    public $AvailableDaysOfWeek;
    /**
     * The ArrivalDaysOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ArrivalDaysOfWeek
     */
    public $ArrivalDaysOfWeek;
    /**
     * The DepartureDaysOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\DepartureDaysOfWeek
     */
    public $DepartureDaysOfWeek;
    /**
     * The RequiredDaysOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RequiredDaysOfWeek
     */
    public $RequiredDaysOfWeek;
    /**
     * Constructor method for DOW_RestrictionsType
     * @uses DOW_RestrictionsType::setAvailableDaysOfWeek()
     * @uses DOW_RestrictionsType::setArrivalDaysOfWeek()
     * @uses DOW_RestrictionsType::setDepartureDaysOfWeek()
     * @uses DOW_RestrictionsType::setRequiredDaysOfWeek()
     * @param \OtaInterface\Otaconnect\StructType\AvailableDaysOfWeek $availableDaysOfWeek
     * @param \OtaInterface\Otaconnect\StructType\ArrivalDaysOfWeek $arrivalDaysOfWeek
     * @param \OtaInterface\Otaconnect\StructType\DepartureDaysOfWeek $departureDaysOfWeek
     * @param \OtaInterface\Otaconnect\StructType\RequiredDaysOfWeek $requiredDaysOfWeek
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\AvailableDaysOfWeek $availableDaysOfWeek = null, \OtaInterface\Otaconnect\StructType\ArrivalDaysOfWeek $arrivalDaysOfWeek = null, \OtaInterface\Otaconnect\StructType\DepartureDaysOfWeek $departureDaysOfWeek = null, \OtaInterface\Otaconnect\StructType\RequiredDaysOfWeek $requiredDaysOfWeek = null)
    {
        $this
            ->setAvailableDaysOfWeek($availableDaysOfWeek)
            ->setArrivalDaysOfWeek($arrivalDaysOfWeek)
            ->setDepartureDaysOfWeek($departureDaysOfWeek)
            ->setRequiredDaysOfWeek($requiredDaysOfWeek);
    }
    /**
     * Get AvailableDaysOfWeek value
     * @return \OtaInterface\Otaconnect\StructType\AvailableDaysOfWeek|null
     */
    public function getAvailableDaysOfWeek()
    {
        return $this->AvailableDaysOfWeek;
    }
    /**
     * Set AvailableDaysOfWeek value
     * @param \OtaInterface\Otaconnect\StructType\AvailableDaysOfWeek $availableDaysOfWeek
     * @return \OtaInterface\Otaconnect\StructType\DOW_RestrictionsType
     */
    public function setAvailableDaysOfWeek(\OtaInterface\Otaconnect\StructType\AvailableDaysOfWeek $availableDaysOfWeek = null)
    {
        $this->AvailableDaysOfWeek = $availableDaysOfWeek;
        return $this;
    }
    /**
     * Get ArrivalDaysOfWeek value
     * @return \OtaInterface\Otaconnect\StructType\ArrivalDaysOfWeek|null
     */
    public function getArrivalDaysOfWeek()
    {
        return $this->ArrivalDaysOfWeek;
    }
    /**
     * Set ArrivalDaysOfWeek value
     * @param \OtaInterface\Otaconnect\StructType\ArrivalDaysOfWeek $arrivalDaysOfWeek
     * @return \OtaInterface\Otaconnect\StructType\DOW_RestrictionsType
     */
    public function setArrivalDaysOfWeek(\OtaInterface\Otaconnect\StructType\ArrivalDaysOfWeek $arrivalDaysOfWeek = null)
    {
        $this->ArrivalDaysOfWeek = $arrivalDaysOfWeek;
        return $this;
    }
    /**
     * Get DepartureDaysOfWeek value
     * @return \OtaInterface\Otaconnect\StructType\DepartureDaysOfWeek|null
     */
    public function getDepartureDaysOfWeek()
    {
        return $this->DepartureDaysOfWeek;
    }
    /**
     * Set DepartureDaysOfWeek value
     * @param \OtaInterface\Otaconnect\StructType\DepartureDaysOfWeek $departureDaysOfWeek
     * @return \OtaInterface\Otaconnect\StructType\DOW_RestrictionsType
     */
    public function setDepartureDaysOfWeek(\OtaInterface\Otaconnect\StructType\DepartureDaysOfWeek $departureDaysOfWeek = null)
    {
        $this->DepartureDaysOfWeek = $departureDaysOfWeek;
        return $this;
    }
    /**
     * Get RequiredDaysOfWeek value
     * @return \OtaInterface\Otaconnect\StructType\RequiredDaysOfWeek|null
     */
    public function getRequiredDaysOfWeek()
    {
        return $this->RequiredDaysOfWeek;
    }
    /**
     * Set RequiredDaysOfWeek value
     * @param \OtaInterface\Otaconnect\StructType\RequiredDaysOfWeek $requiredDaysOfWeek
     * @return \OtaInterface\Otaconnect\StructType\DOW_RestrictionsType
     */
    public function setRequiredDaysOfWeek(\OtaInterface\Otaconnect\StructType\RequiredDaysOfWeek $requiredDaysOfWeek = null)
    {
        $this->RequiredDaysOfWeek = $requiredDaysOfWeek;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\DOW_RestrictionsType
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
