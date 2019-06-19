<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignedInfoType StructType
 * @subpackage Structs
 */
class SignedInfoType extends AbstractStructBase
{
    /**
     * The CanonicalizationMethod
     * @var \OtaInterface\Otaconnect\StructType\CanonicalizationMethodType
     */
    public $CanonicalizationMethod;
    /**
     * The SignatureMethod
     * @var \OtaInterface\Otaconnect\StructType\SignatureMethodType
     */
    public $SignatureMethod;
    /**
     * The Reference
     * @var \OtaInterface\Otaconnect\StructType\ReferenceType
     */
    public $Reference;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for SignedInfoType
     * @uses SignedInfoType::setCanonicalizationMethod()
     * @uses SignedInfoType::setSignatureMethod()
     * @uses SignedInfoType::setReference()
     * @uses SignedInfoType::setId()
     * @param \OtaInterface\Otaconnect\StructType\CanonicalizationMethodType $canonicalizationMethod
     * @param \OtaInterface\Otaconnect\StructType\SignatureMethodType $signatureMethod
     * @param \OtaInterface\Otaconnect\StructType\ReferenceType $reference
     * @param string $id
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\CanonicalizationMethodType $canonicalizationMethod = null, \OtaInterface\Otaconnect\StructType\SignatureMethodType $signatureMethod = null, \OtaInterface\Otaconnect\StructType\ReferenceType $reference = null, $id = null)
    {
        $this
            ->setCanonicalizationMethod($canonicalizationMethod)
            ->setSignatureMethod($signatureMethod)
            ->setReference($reference)
            ->setId($id);
    }
    /**
     * Get CanonicalizationMethod value
     * @return \OtaInterface\Otaconnect\StructType\CanonicalizationMethodType|null
     */
    public function getCanonicalizationMethod()
    {
        return $this->CanonicalizationMethod;
    }
    /**
     * Set CanonicalizationMethod value
     * @param \OtaInterface\Otaconnect\StructType\CanonicalizationMethodType $canonicalizationMethod
     * @return \OtaInterface\Otaconnect\StructType\SignedInfoType
     */
    public function setCanonicalizationMethod(\OtaInterface\Otaconnect\StructType\CanonicalizationMethodType $canonicalizationMethod = null)
    {
        $this->CanonicalizationMethod = $canonicalizationMethod;
        return $this;
    }
    /**
     * Get SignatureMethod value
     * @return \OtaInterface\Otaconnect\StructType\SignatureMethodType|null
     */
    public function getSignatureMethod()
    {
        return $this->SignatureMethod;
    }
    /**
     * Set SignatureMethod value
     * @param \OtaInterface\Otaconnect\StructType\SignatureMethodType $signatureMethod
     * @return \OtaInterface\Otaconnect\StructType\SignedInfoType
     */
    public function setSignatureMethod(\OtaInterface\Otaconnect\StructType\SignatureMethodType $signatureMethod = null)
    {
        $this->SignatureMethod = $signatureMethod;
        return $this;
    }
    /**
     * Get Reference value
     * @return \OtaInterface\Otaconnect\StructType\ReferenceType|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param \OtaInterface\Otaconnect\StructType\ReferenceType $reference
     * @return \OtaInterface\Otaconnect\StructType\SignedInfoType
     */
    public function setReference(\OtaInterface\Otaconnect\StructType\ReferenceType $reference = null)
    {
        $this->Reference = $reference;
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
     * @return \OtaInterface\Otaconnect\StructType\SignedInfoType
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
     * @return \OtaInterface\Otaconnect\StructType\SignedInfoType
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
