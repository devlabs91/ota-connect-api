<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumStay StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies restrictions for the longest length/period of time or last day to begin or complete the return.
 * @subpackage Structs
 */
class MaximumStay extends AbstractStructBase
{
    /**
     * The ReturnType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ReturnType;
    /**
     * The ReturnTimeOfDay
     * Meta informations extracted from the WSDL
     * - documentation: The time of day when return travel may commence.
     * - use: optional
     * @var string
     */
    public $ReturnTimeOfDay;
    /**
     * The MaxStay
     * Meta informations extracted from the WSDL
     * - documentation: The amount of elapsed time or number of occurrences of a day of the week that must occur to satisfy a maximum stay requirement.
     * - use: optional
     * @var string
     */
    public $MaxStay;
    /**
     * The StayUnit
     * Meta informations extracted from the WSDL
     * - documentation: The unit of elapsed time or the day of the week applied to the MaxStay value.
     * - use: optional
     * @var string
     */
    public $StayUnit;
    /**
     * The MaxStayDate
     * Meta informations extracted from the WSDL
     * - documentation: The specific date for the maximum stay requirement.
     * - use: optional
     * @var string
     */
    public $MaxStayDate;
    /**
     * The ComplicatedRulesInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, there are complicated rules for the maximum stay requirement.
     * - use: optional
     * @var bool
     */
    public $ComplicatedRulesInd;
    /**
     * Constructor method for MaximumStay
     * @uses MaximumStay::setReturnType()
     * @uses MaximumStay::setReturnTimeOfDay()
     * @uses MaximumStay::setMaxStay()
     * @uses MaximumStay::setStayUnit()
     * @uses MaximumStay::setMaxStayDate()
     * @uses MaximumStay::setComplicatedRulesInd()
     * @param string $returnType
     * @param string $returnTimeOfDay
     * @param string $maxStay
     * @param string $stayUnit
     * @param string $maxStayDate
     * @param bool $complicatedRulesInd
     */
    public function __construct($returnType = null, $returnTimeOfDay = null, $maxStay = null, $stayUnit = null, $maxStayDate = null, $complicatedRulesInd = null)
    {
        $this
            ->setReturnType($returnType)
            ->setReturnTimeOfDay($returnTimeOfDay)
            ->setMaxStay($maxStay)
            ->setStayUnit($stayUnit)
            ->setMaxStayDate($maxStayDate)
            ->setComplicatedRulesInd($complicatedRulesInd);
    }
    /**
     * Get ReturnType value
     * @return string|null
     */
    public function getReturnType()
    {
        return $this->ReturnType;
    }
    /**
     * Set ReturnType value
     * @param string $returnType
     * @return \OtaInterface\Otaconnect\StructType\MaximumStay
     */
    public function setReturnType($returnType = null)
    {
        // validation for constraint: string
        if (!is_null($returnType) && !is_string($returnType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnType)), __LINE__);
        }
        $this->ReturnType = $returnType;
        return $this;
    }
    /**
     * Get ReturnTimeOfDay value
     * @return string|null
     */
    public function getReturnTimeOfDay()
    {
        return $this->ReturnTimeOfDay;
    }
    /**
     * Set ReturnTimeOfDay value
     * @param string $returnTimeOfDay
     * @return \OtaInterface\Otaconnect\StructType\MaximumStay
     */
    public function setReturnTimeOfDay($returnTimeOfDay = null)
    {
        // validation for constraint: string
        if (!is_null($returnTimeOfDay) && !is_string($returnTimeOfDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnTimeOfDay)), __LINE__);
        }
        $this->ReturnTimeOfDay = $returnTimeOfDay;
        return $this;
    }
    /**
     * Get MaxStay value
     * @return string|null
     */
    public function getMaxStay()
    {
        return $this->MaxStay;
    }
    /**
     * Set MaxStay value
     * @param string $maxStay
     * @return \OtaInterface\Otaconnect\StructType\MaximumStay
     */
    public function setMaxStay($maxStay = null)
    {
        // validation for constraint: string
        if (!is_null($maxStay) && !is_string($maxStay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxStay)), __LINE__);
        }
        $this->MaxStay = $maxStay;
        return $this;
    }
    /**
     * Get StayUnit value
     * @return string|null
     */
    public function getStayUnit()
    {
        return $this->StayUnit;
    }
    /**
     * Set StayUnit value
     * @param string $stayUnit
     * @return \OtaInterface\Otaconnect\StructType\MaximumStay
     */
    public function setStayUnit($stayUnit = null)
    {
        // validation for constraint: string
        if (!is_null($stayUnit) && !is_string($stayUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stayUnit)), __LINE__);
        }
        $this->StayUnit = $stayUnit;
        return $this;
    }
    /**
     * Get MaxStayDate value
     * @return string|null
     */
    public function getMaxStayDate()
    {
        return $this->MaxStayDate;
    }
    /**
     * Set MaxStayDate value
     * @param string $maxStayDate
     * @return \OtaInterface\Otaconnect\StructType\MaximumStay
     */
    public function setMaxStayDate($maxStayDate = null)
    {
        // validation for constraint: string
        if (!is_null($maxStayDate) && !is_string($maxStayDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxStayDate)), __LINE__);
        }
        $this->MaxStayDate = $maxStayDate;
        return $this;
    }
    /**
     * Get ComplicatedRulesInd value
     * @return bool|null
     */
    public function getComplicatedRulesInd()
    {
        return $this->ComplicatedRulesInd;
    }
    /**
     * Set ComplicatedRulesInd value
     * @param bool $complicatedRulesInd
     * @return \OtaInterface\Otaconnect\StructType\MaximumStay
     */
    public function setComplicatedRulesInd($complicatedRulesInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($complicatedRulesInd) && !is_bool($complicatedRulesInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($complicatedRulesInd)), __LINE__);
        }
        $this->ComplicatedRulesInd = $complicatedRulesInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\MaximumStay
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
