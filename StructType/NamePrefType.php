<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NamePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables a preference to be indicated for name information. | Used to indicate a level of preference for name information.
 * @subpackage Structs
 */
class NamePrefType extends AbstractStructBase
{
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for a person or profile.
     * @var mixed
     */
    public $UniqueID;
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - documentation: Name information.
     * @var mixed
     */
    public $PersonName;
    /**
     * Constructor method for NamePrefType
     * @uses NamePrefType::setUniqueID()
     * @uses NamePrefType::setPersonName()
     * @param mixed $uniqueID
     * @param mixed $personName
     */
    public function __construct($uniqueID = null, $personName = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setPersonName($personName);
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \OtaInterface\Otaconnect\StructType\NamePrefType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get PersonName value
     * @return mixed|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param mixed $personName
     * @return \OtaInterface\Otaconnect\StructType\NamePrefType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\NamePrefType
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
