<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StayRestrictionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining Min and Max Stay Restrictions.
 * @subpackage Structs
 */
class StayRestrictionsType extends AbstractStructBase
{
    /**
     * The MinimumStay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MinimumStay
     */
    public $MinimumStay;
    /**
     * The MaximumStay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MaximumStay
     */
    public $MaximumStay;
    /**
     * The StayRestrictionsInd
     * Meta informations extracted from the WSDL
     * - documentation: True indicates that Stay Restrictions exist.
     * - use: optional
     * @var bool
     */
    public $StayRestrictionsInd;
    /**
     * Constructor method for StayRestrictionsType
     * @uses StayRestrictionsType::setMinimumStay()
     * @uses StayRestrictionsType::setMaximumStay()
     * @uses StayRestrictionsType::setStayRestrictionsInd()
     * @param \OtaInterface\Otaconnect\StructType\MinimumStay $minimumStay
     * @param \OtaInterface\Otaconnect\StructType\MaximumStay $maximumStay
     * @param bool $stayRestrictionsInd
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\MinimumStay $minimumStay = null, \OtaInterface\Otaconnect\StructType\MaximumStay $maximumStay = null, $stayRestrictionsInd = null)
    {
        $this
            ->setMinimumStay($minimumStay)
            ->setMaximumStay($maximumStay)
            ->setStayRestrictionsInd($stayRestrictionsInd);
    }
    /**
     * Get MinimumStay value
     * @return \OtaInterface\Otaconnect\StructType\MinimumStay|null
     */
    public function getMinimumStay()
    {
        return $this->MinimumStay;
    }
    /**
     * Set MinimumStay value
     * @param \OtaInterface\Otaconnect\StructType\MinimumStay $minimumStay
     * @return \OtaInterface\Otaconnect\StructType\StayRestrictionsType
     */
    public function setMinimumStay(\OtaInterface\Otaconnect\StructType\MinimumStay $minimumStay = null)
    {
        $this->MinimumStay = $minimumStay;
        return $this;
    }
    /**
     * Get MaximumStay value
     * @return \OtaInterface\Otaconnect\StructType\MaximumStay|null
     */
    public function getMaximumStay()
    {
        return $this->MaximumStay;
    }
    /**
     * Set MaximumStay value
     * @param \OtaInterface\Otaconnect\StructType\MaximumStay $maximumStay
     * @return \OtaInterface\Otaconnect\StructType\StayRestrictionsType
     */
    public function setMaximumStay(\OtaInterface\Otaconnect\StructType\MaximumStay $maximumStay = null)
    {
        $this->MaximumStay = $maximumStay;
        return $this;
    }
    /**
     * Get StayRestrictionsInd value
     * @return bool|null
     */
    public function getStayRestrictionsInd()
    {
        return $this->StayRestrictionsInd;
    }
    /**
     * Set StayRestrictionsInd value
     * @param bool $stayRestrictionsInd
     * @return \OtaInterface\Otaconnect\StructType\StayRestrictionsType
     */
    public function setStayRestrictionsInd($stayRestrictionsInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($stayRestrictionsInd) && !is_bool($stayRestrictionsInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($stayRestrictionsInd)), __LINE__);
        }
        $this->StayRestrictionsInd = $stayRestrictionsInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\StayRestrictionsType
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
