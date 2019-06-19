<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureType StructType
 * @subpackage Structs
 */
class SignatureType extends AbstractStructBase
{
    /**
     * The SignedInfo
     * @var \OtaInterface\Otaconnect\StructType\SignedInfoType
     */
    public $SignedInfo;
    /**
     * The SignatureValue
     * @var \OtaInterface\Otaconnect\StructType\SignatureValueType
     */
    public $SignatureValue;
    /**
     * The KeyInfo
     * @var \OtaInterface\Otaconnect\StructType\KeyInfoType
     */
    public $KeyInfo;
    /**
     * The Object
     * @var \OtaInterface\Otaconnect\StructType\ObjectType
     */
    public $Object;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for SignatureType
     * @uses SignatureType::setSignedInfo()
     * @uses SignatureType::setSignatureValue()
     * @uses SignatureType::setKeyInfo()
     * @uses SignatureType::setObject()
     * @uses SignatureType::setId()
     * @param \OtaInterface\Otaconnect\StructType\SignedInfoType $signedInfo
     * @param \OtaInterface\Otaconnect\StructType\SignatureValueType $signatureValue
     * @param \OtaInterface\Otaconnect\StructType\KeyInfoType $keyInfo
     * @param \OtaInterface\Otaconnect\StructType\ObjectType $object
     * @param string $id
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\SignedInfoType $signedInfo = null, \OtaInterface\Otaconnect\StructType\SignatureValueType $signatureValue = null, \OtaInterface\Otaconnect\StructType\KeyInfoType $keyInfo = null, \OtaInterface\Otaconnect\StructType\ObjectType $object = null, $id = null)
    {
        $this
            ->setSignedInfo($signedInfo)
            ->setSignatureValue($signatureValue)
            ->setKeyInfo($keyInfo)
            ->setObject($object)
            ->setId($id);
    }
    /**
     * Get SignedInfo value
     * @return \OtaInterface\Otaconnect\StructType\SignedInfoType|null
     */
    public function getSignedInfo()
    {
        return $this->SignedInfo;
    }
    /**
     * Set SignedInfo value
     * @param \OtaInterface\Otaconnect\StructType\SignedInfoType $signedInfo
     * @return \OtaInterface\Otaconnect\StructType\SignatureType
     */
    public function setSignedInfo(\OtaInterface\Otaconnect\StructType\SignedInfoType $signedInfo = null)
    {
        $this->SignedInfo = $signedInfo;
        return $this;
    }
    /**
     * Get SignatureValue value
     * @return \OtaInterface\Otaconnect\StructType\SignatureValueType|null
     */
    public function getSignatureValue()
    {
        return $this->SignatureValue;
    }
    /**
     * Set SignatureValue value
     * @param \OtaInterface\Otaconnect\StructType\SignatureValueType $signatureValue
     * @return \OtaInterface\Otaconnect\StructType\SignatureType
     */
    public function setSignatureValue(\OtaInterface\Otaconnect\StructType\SignatureValueType $signatureValue = null)
    {
        $this->SignatureValue = $signatureValue;
        return $this;
    }
    /**
     * Get KeyInfo value
     * @return \OtaInterface\Otaconnect\StructType\KeyInfoType|null
     */
    public function getKeyInfo()
    {
        return $this->KeyInfo;
    }
    /**
     * Set KeyInfo value
     * @param \OtaInterface\Otaconnect\StructType\KeyInfoType $keyInfo
     * @return \OtaInterface\Otaconnect\StructType\SignatureType
     */
    public function setKeyInfo(\OtaInterface\Otaconnect\StructType\KeyInfoType $keyInfo = null)
    {
        $this->KeyInfo = $keyInfo;
        return $this;
    }
    /**
     * Get Object value
     * @return \OtaInterface\Otaconnect\StructType\ObjectType|null
     */
    public function getObject()
    {
        return $this->Object;
    }
    /**
     * Set Object value
     * @param \OtaInterface\Otaconnect\StructType\ObjectType $object
     * @return \OtaInterface\Otaconnect\StructType\SignatureType
     */
    public function setObject(\OtaInterface\Otaconnect\StructType\ObjectType $object = null)
    {
        $this->Object = $object;
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
     * @return \OtaInterface\Otaconnect\StructType\SignatureType
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
     * @return \OtaInterface\Otaconnect\StructType\SignatureType
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
