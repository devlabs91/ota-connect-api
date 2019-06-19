<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrievalMethodType StructType
 * @subpackage Structs
 */
class RetrievalMethodType extends AbstractStructBase
{
    /**
     * The Transforms
     * @var \OtaInterface\Otaconnect\StructType\TransformsType
     */
    public $Transforms;
    /**
     * The URI
     * @var string
     */
    public $URI;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for RetrievalMethodType
     * @uses RetrievalMethodType::setTransforms()
     * @uses RetrievalMethodType::setURI()
     * @uses RetrievalMethodType::setType()
     * @param \OtaInterface\Otaconnect\StructType\TransformsType $transforms
     * @param string $uRI
     * @param string $type
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\TransformsType $transforms = null, $uRI = null, $type = null)
    {
        $this
            ->setTransforms($transforms)
            ->setURI($uRI)
            ->setType($type);
    }
    /**
     * Get Transforms value
     * @return \OtaInterface\Otaconnect\StructType\TransformsType|null
     */
    public function getTransforms()
    {
        return $this->Transforms;
    }
    /**
     * Set Transforms value
     * @param \OtaInterface\Otaconnect\StructType\TransformsType $transforms
     * @return \OtaInterface\Otaconnect\StructType\RetrievalMethodType
     */
    public function setTransforms(\OtaInterface\Otaconnect\StructType\TransformsType $transforms = null)
    {
        $this->Transforms = $transforms;
        return $this;
    }
    /**
     * Get URI value
     * @return string|null
     */
    public function getURI()
    {
        return $this->URI;
    }
    /**
     * Set URI value
     * @param string $uRI
     * @return \OtaInterface\Otaconnect\StructType\RetrievalMethodType
     */
    public function setURI($uRI = null)
    {
        // validation for constraint: string
        if (!is_null($uRI) && !is_string($uRI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRI)), __LINE__);
        }
        $this->URI = $uRI;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \OtaInterface\Otaconnect\StructType\RetrievalMethodType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RetrievalMethodType
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
