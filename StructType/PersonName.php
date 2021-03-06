<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonName StructType
 * Meta informations extracted from the WSDL
 * - documentation: Detailed name information.
 * @subpackage Structs
 */
class PersonName extends PersonNameType
{
    /**
     * The PartialName
     * Meta informations extracted from the WSDL
     * - documentation: When true the full name is not provided.
     * - use: optional
     * @var bool
     */
    public $PartialName;
    /**
     * Constructor method for PersonName
     * @uses PersonName::setPartialName()
     * @param bool $partialName
     */
    public function __construct($partialName = null)
    {
        $this
            ->setPartialName($partialName);
    }
    /**
     * Get PartialName value
     * @return bool|null
     */
    public function getPartialName()
    {
        return $this->PartialName;
    }
    /**
     * Set PartialName value
     * @param bool $partialName
     * @return \OtaInterface\Otaconnect\StructType\PersonName
     */
    public function setPartialName($partialName = null)
    {
        // validation for constraint: boolean
        if (!is_null($partialName) && !is_bool($partialName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($partialName)), __LINE__);
        }
        $this->PartialName = $partialName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PersonName
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
