<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CuisineCodes StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of cuisine types of restaurant.
 * @subpackage Structs
 */
class CuisineCodes extends AbstractStructBase
{
    /**
     * The CuisineCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\CuisineCode[]
     */
    public $CuisineCode;
    /**
     * Constructor method for CuisineCodes
     * @uses CuisineCodes::setCuisineCode()
     * @param \OtaInterface\Otaconnect\StructType\CuisineCode[] $cuisineCode
     */
    public function __construct(array $cuisineCode = array())
    {
        $this
            ->setCuisineCode($cuisineCode);
    }
    /**
     * Get CuisineCode value
     * @return \OtaInterface\Otaconnect\StructType\CuisineCode[]|null
     */
    public function getCuisineCode()
    {
        return $this->CuisineCode;
    }
    /**
     * Set CuisineCode value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CuisineCode[] $cuisineCode
     * @return \OtaInterface\Otaconnect\StructType\CuisineCodes
     */
    public function setCuisineCode(array $cuisineCode = array())
    {
        foreach ($cuisineCode as $cuisineCodesCuisineCodeItem) {
            // validation for constraint: itemType
            if (!$cuisineCodesCuisineCodeItem instanceof \OtaInterface\Otaconnect\StructType\CuisineCode) {
                throw new \InvalidArgumentException(sprintf('The CuisineCode property can only contain items of \OtaInterface\Otaconnect\StructType\CuisineCode, "%s" given', is_object($cuisineCodesCuisineCodeItem) ? get_class($cuisineCodesCuisineCodeItem) : gettype($cuisineCodesCuisineCodeItem)), __LINE__);
            }
        }
        $this->CuisineCode = $cuisineCode;
        return $this;
    }
    /**
     * Add item to CuisineCode value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CuisineCode $item
     * @return \OtaInterface\Otaconnect\StructType\CuisineCodes
     */
    public function addToCuisineCode(\OtaInterface\Otaconnect\StructType\CuisineCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\CuisineCode) {
            throw new \InvalidArgumentException(sprintf('The CuisineCode property can only contain items of \OtaInterface\Otaconnect\StructType\CuisineCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CuisineCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\CuisineCodes
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
