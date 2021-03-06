<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAgeRequirementsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Vehicle Location Requirements Type is used to define information on the age requirements that are in place with regard to the renting of a vehicle. These are requirement that typically must be met by the renter before a rental
 * may commence.
 * @subpackage Structs
 */
class VehicleAgeRequirementsType extends AbstractStructBase
{
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Age
     */
    public $Age;
    /**
     * Constructor method for VehicleAgeRequirementsType
     * @uses VehicleAgeRequirementsType::setAge()
     * @param \OtaInterface\Otaconnect\StructType\Age $age
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\Age $age = null)
    {
        $this
            ->setAge($age);
    }
    /**
     * Get Age value
     * @return \OtaInterface\Otaconnect\StructType\Age|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param \OtaInterface\Otaconnect\StructType\Age $age
     * @return \OtaInterface\Otaconnect\StructType\VehicleAgeRequirementsType
     */
    public function setAge(\OtaInterface\Otaconnect\StructType\Age $age = null)
    {
        $this->Age = $age;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehicleAgeRequirementsType
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
