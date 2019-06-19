<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignaturePropertiesType StructType
 * @subpackage Structs
 */
class SignaturePropertiesType extends AbstractStructBase
{
    /**
     * The SignatureProperty
     * @var \OtaInterface\Otaconnect\StructType\SignaturePropertyType
     */
    public $SignatureProperty;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for SignaturePropertiesType
     * @uses SignaturePropertiesType::setSignatureProperty()
     * @uses SignaturePropertiesType::setId()
     * @param \OtaInterface\Otaconnect\StructType\SignaturePropertyType $signatureProperty
     * @param string $id
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\SignaturePropertyType $signatureProperty = null, $id = null)
    {
        $this
            ->setSignatureProperty($signatureProperty)
            ->setId($id);
    }
    /**
     * Get SignatureProperty value
     * @return \OtaInterface\Otaconnect\StructType\SignaturePropertyType|null
     */
    public function getSignatureProperty()
    {
        return $this->SignatureProperty;
    }
    /**
     * Set SignatureProperty value
     * @param \OtaInterface\Otaconnect\StructType\SignaturePropertyType $signatureProperty
     * @return \OtaInterface\Otaconnect\StructType\SignaturePropertiesType
     */
    public function setSignatureProperty(\OtaInterface\Otaconnect\StructType\SignaturePropertyType $signatureProperty = null)
    {
        $this->SignatureProperty = $signatureProperty;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \OtaInterface\Otaconnect\StructType\SignaturePropertiesType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\SignaturePropertiesType
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
