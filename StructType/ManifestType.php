<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManifestType StructType
 * @subpackage Structs
 */
class ManifestType extends AbstractStructBase
{
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
     * Constructor method for ManifestType
     * @uses ManifestType::setReference()
     * @uses ManifestType::setId()
     * @param \OtaInterface\Otaconnect\StructType\ReferenceType $reference
     * @param string $id
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\ReferenceType $reference = null, $id = null)
    {
        $this
            ->setReference($reference)
            ->setId($id);
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
     * @return \OtaInterface\Otaconnect\StructType\ManifestType
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
     * @return \OtaInterface\Otaconnect\StructType\ManifestType
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
     * @return \OtaInterface\Otaconnect\StructType\ManifestType
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
