<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleChargeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies specific charges.
 * @subpackage Structs
 */
class VehicleChargeType extends AbstractStructBase
{
    /**
     * The TaxAmounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\TaxAmounts
     */
    public $TaxAmounts;
    /**
     * The MinMax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MinMax
     */
    public $MinMax;
    /**
     * The Calculation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Calculation[]
     */
    public $Calculation;
    /**
     * The TaxInclusive
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $TaxInclusive;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The GuaranteedInd
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $GuaranteedInd;
    /**
     * The IncludedInRate
     * Meta informations extracted from the WSDL
     * - documentation: An indication if this amount is included in the base vehicle rate, or is an additonal cost. | false
     * - use: optional
     * @var bool
     */
    public $IncludedInRate;
    /**
     * The IncludedInEstTotalInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates the item's charges are included in the estimated total amount (in TotalCharge) and when false, the item is not included in the estimated total amount.
     * - use: optional
     * @var bool
     */
    public $IncludedInEstTotalInd;
    /**
     * The RateConvertInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the rate has been converted to a different currency.
     * - use: optional
     * @var bool
     */
    public $RateConvertInd;
    /**
     * Constructor method for VehicleChargeType
     * @uses VehicleChargeType::setTaxAmounts()
     * @uses VehicleChargeType::setMinMax()
     * @uses VehicleChargeType::setCalculation()
     * @uses VehicleChargeType::setTaxInclusive()
     * @uses VehicleChargeType::setDescription()
     * @uses VehicleChargeType::setGuaranteedInd()
     * @uses VehicleChargeType::setIncludedInRate()
     * @uses VehicleChargeType::setIncludedInEstTotalInd()
     * @uses VehicleChargeType::setRateConvertInd()
     * @param \OtaInterface\Otaconnect\StructType\TaxAmounts $taxAmounts
     * @param \OtaInterface\Otaconnect\StructType\MinMax $minMax
     * @param \OtaInterface\Otaconnect\StructType\Calculation[] $calculation
     * @param bool $taxInclusive
     * @param string $description
     * @param bool $guaranteedInd
     * @param bool $includedInRate
     * @param bool $includedInEstTotalInd
     * @param bool $rateConvertInd
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\TaxAmounts $taxAmounts = null, \OtaInterface\Otaconnect\StructType\MinMax $minMax = null, array $calculation = array(), $taxInclusive = null, $description = null, $guaranteedInd = null, $includedInRate = null, $includedInEstTotalInd = null, $rateConvertInd = null)
    {
        $this
            ->setTaxAmounts($taxAmounts)
            ->setMinMax($minMax)
            ->setCalculation($calculation)
            ->setTaxInclusive($taxInclusive)
            ->setDescription($description)
            ->setGuaranteedInd($guaranteedInd)
            ->setIncludedInRate($includedInRate)
            ->setIncludedInEstTotalInd($includedInEstTotalInd)
            ->setRateConvertInd($rateConvertInd);
    }
    /**
     * Get TaxAmounts value
     * @return \OtaInterface\Otaconnect\StructType\TaxAmounts|null
     */
    public function getTaxAmounts()
    {
        return $this->TaxAmounts;
    }
    /**
     * Set TaxAmounts value
     * @param \OtaInterface\Otaconnect\StructType\TaxAmounts $taxAmounts
     * @return \OtaInterface\Otaconnect\StructType\VehicleChargeType
     */
    public function setTaxAmounts(\OtaInterface\Otaconnect\StructType\TaxAmounts $taxAmounts = null)
    {
        $this->TaxAmounts = $taxAmounts;
        return $this;
    }
    /**
     * Get MinMax value
     * @return \OtaInterface\Otaconnect\StructType\MinMax|null
     */
    public function getMinMax()
    {
        return $this->MinMax;
    }
    /**
     * Set MinMax value
     * @param \OtaInterface\Otaconnect\StructType\MinMax $minMax
     * @return \OtaInterface\Otaconnect\StructType\VehicleChargeType
     */
    public function setMinMax(\OtaInterface\Otaconnect\StructType\MinMax $minMax = null)
    {
        $this->MinMax = $minMax;
        return $this;
    }
    /**
     * Get Calculation value
     * @return \OtaInterface\Otaconnect\StructType\Calculation[]|null
     */
    public function getCalculation()
    {
        return $this->Calculation;
    }
    /**
     * Set Calculation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Calculation[] $calculation
     * @return \OtaInterface\Otaconnect\StructType\VehicleChargeType
     */
    public function setCalculation(array $calculation = array())
    {
        foreach ($calculation as $vehicleChargeTypeCalculationItem) {
            // validation for constraint: itemType
            if (!$vehicleChargeTypeCalculationItem instanceof \OtaInterface\Otaconnect\StructType\Calculation) {
                throw new \InvalidArgumentException(sprintf('The Calculation property can only contain items of \OtaInterface\Otaconnect\StructType\Calculation, "%s" given', is_object($vehicleChargeTypeCalculationItem) ? get_class($vehicleChargeTypeCalculationItem) : gettype($vehicleChargeTypeCalculationItem)), __LINE__);
            }
        }
        $this->Calculation = $calculation;
        return $this;
    }
    /**
     * Add item to Calculation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Calculation $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleChargeType
     */
    public function addToCalculation(\OtaInterface\Otaconnect\StructType\Calculation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Calculation) {
            throw new \InvalidArgumentException(sprintf('The Calculation property can only contain items of \OtaInterface\Otaconnect\StructType\Calculation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Calculation[] = $item;
        return $this;
    }
    /**
     * Get TaxInclusive value
     * @return bool|null
     */
    public function getTaxInclusive()
    {
        return $this->TaxInclusive;
    }
    /**
     * Set TaxInclusive value
     * @param bool $taxInclusive
     * @return \OtaInterface\Otaconnect\StructType\VehicleChargeType
     */
    public function setTaxInclusive($taxInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($taxInclusive) && !is_bool($taxInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($taxInclusive)), __LINE__);
        }
        $this->TaxInclusive = $taxInclusive;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \OtaInterface\Otaconnect\StructType\VehicleChargeType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get GuaranteedInd value
     * @return bool|null
     */
    public function getGuaranteedInd()
    {
        return $this->GuaranteedInd;
    }
    /**
     * Set GuaranteedInd value
     * @param bool $guaranteedInd
     * @return \OtaInterface\Otaconnect\StructType\VehicleChargeType
     */
    public function setGuaranteedInd($guaranteedInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteedInd) && !is_bool($guaranteedInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guaranteedInd)), __LINE__);
        }
        $this->GuaranteedInd = $guaranteedInd;
        return $this;
    }
    /**
     * Get IncludedInRate value
     * @return bool|null
     */
    public function getIncludedInRate()
    {
        return $this->IncludedInRate;
    }
    /**
     * Set IncludedInRate value
     * @param bool $includedInRate
     * @return \OtaInterface\Otaconnect\StructType\VehicleChargeType
     */
    public function setIncludedInRate($includedInRate = null)
    {
        // validation for constraint: boolean
        if (!is_null($includedInRate) && !is_bool($includedInRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includedInRate)), __LINE__);
        }
        $this->IncludedInRate = $includedInRate;
        return $this;
    }
    /**
     * Get IncludedInEstTotalInd value
     * @return bool|null
     */
    public function getIncludedInEstTotalInd()
    {
        return $this->IncludedInEstTotalInd;
    }
    /**
     * Set IncludedInEstTotalInd value
     * @param bool $includedInEstTotalInd
     * @return \OtaInterface\Otaconnect\StructType\VehicleChargeType
     */
    public function setIncludedInEstTotalInd($includedInEstTotalInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($includedInEstTotalInd) && !is_bool($includedInEstTotalInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includedInEstTotalInd)), __LINE__);
        }
        $this->IncludedInEstTotalInd = $includedInEstTotalInd;
        return $this;
    }
    /**
     * Get RateConvertInd value
     * @return bool|null
     */
    public function getRateConvertInd()
    {
        return $this->RateConvertInd;
    }
    /**
     * Set RateConvertInd value
     * @param bool $rateConvertInd
     * @return \OtaInterface\Otaconnect\StructType\VehicleChargeType
     */
    public function setRateConvertInd($rateConvertInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($rateConvertInd) && !is_bool($rateConvertInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rateConvertInd)), __LINE__);
        }
        $this->RateConvertInd = $rateConvertInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehicleChargeType
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
