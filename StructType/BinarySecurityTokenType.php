<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BinarySecurityTokenType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A security token that is encoded in binary
 * @subpackage Structs
 */
class BinarySecurityTokenType extends EncodedString
{
    /**
     * The _
     * @var \OtaInterface\Otaconnect\StructType\EncodedString
     */
    public $_;
    /**
     * The ValueType
     * @var string
     */
    public $ValueType;
    /**
     * Constructor method for BinarySecurityTokenType
     * @uses BinarySecurityTokenType::set_()
     * @uses BinarySecurityTokenType::setValueType()
     * @param \OtaInterface\Otaconnect\StructType\EncodedString $_
     * @param string $valueType
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\EncodedString $_ = null, $valueType = null)
    {
        $this
            ->set_($_)
            ->setValueType($valueType);
    }
    /**
     * Get _ value
     * @return \OtaInterface\Otaconnect\StructType\EncodedString|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \OtaInterface\Otaconnect\StructType\EncodedString $_
     * @return \OtaInterface\Otaconnect\StructType\BinarySecurityTokenType
     */
    public function set_(\OtaInterface\Otaconnect\StructType\EncodedString $_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Get ValueType value
     * @return string|null
     */
    public function getValueType()
    {
        return $this->ValueType;
    }
    /**
     * Set ValueType value
     * @param string $valueType
     * @return \OtaInterface\Otaconnect\StructType\BinarySecurityTokenType
     */
    public function setValueType($valueType = null)
    {
        // validation for constraint: string
        if (!is_null($valueType) && !is_string($valueType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valueType)), __LINE__);
        }
        $this->ValueType = $valueType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\BinarySecurityTokenType
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
