<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyConversions StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of currency conversion elements.
 * @subpackage Structs
 */
class CurrencyConversions extends AbstractStructBase
{
    /**
     * The CurrencyConversion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\CurrencyConversion[]
     */
    public $CurrencyConversion;
    /**
     * Constructor method for CurrencyConversions
     * @uses CurrencyConversions::setCurrencyConversion()
     * @param \OtaInterface\Otaconnect\StructType\CurrencyConversion[] $currencyConversion
     */
    public function __construct(array $currencyConversion = array())
    {
        $this
            ->setCurrencyConversion($currencyConversion);
    }
    /**
     * Get CurrencyConversion value
     * @return \OtaInterface\Otaconnect\StructType\CurrencyConversion[]|null
     */
    public function getCurrencyConversion()
    {
        return $this->CurrencyConversion;
    }
    /**
     * Set CurrencyConversion value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CurrencyConversion[] $currencyConversion
     * @return \OtaInterface\Otaconnect\StructType\CurrencyConversions
     */
    public function setCurrencyConversion(array $currencyConversion = array())
    {
        foreach ($currencyConversion as $currencyConversionsCurrencyConversionItem) {
            // validation for constraint: itemType
            if (!$currencyConversionsCurrencyConversionItem instanceof \OtaInterface\Otaconnect\StructType\CurrencyConversion) {
                throw new \InvalidArgumentException(sprintf('The CurrencyConversion property can only contain items of \OtaInterface\Otaconnect\StructType\CurrencyConversion, "%s" given', is_object($currencyConversionsCurrencyConversionItem) ? get_class($currencyConversionsCurrencyConversionItem) : gettype($currencyConversionsCurrencyConversionItem)), __LINE__);
            }
        }
        $this->CurrencyConversion = $currencyConversion;
        return $this;
    }
    /**
     * Add item to CurrencyConversion value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CurrencyConversion $item
     * @return \OtaInterface\Otaconnect\StructType\CurrencyConversions
     */
    public function addToCurrencyConversion(\OtaInterface\Otaconnect\StructType\CurrencyConversion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\CurrencyConversion) {
            throw new \InvalidArgumentException(sprintf('The CurrencyConversion property can only contain items of \OtaInterface\Otaconnect\StructType\CurrencyConversion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CurrencyConversion[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\CurrencyConversions
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
