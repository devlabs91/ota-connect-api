<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAdditionalDriverRequirementsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Vehicle Additional Driver Requirements Type is used to define information about additional drivers that are in place with regard to the renting of a vehicle. These are requirement that typically must be met by the renter before a
 * rental may commence.
 * @subpackage Structs
 */
class VehicleAdditionalDriverRequirementsType extends AbstractStructBase
{
    /**
     * The AddlDriverInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AddlDriverInfos
     */
    public $AddlDriverInfos;
    /**
     * Constructor method for VehicleAdditionalDriverRequirementsType
     * @uses VehicleAdditionalDriverRequirementsType::setAddlDriverInfos()
     * @param \OtaInterface\Otaconnect\StructType\AddlDriverInfos $addlDriverInfos
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\AddlDriverInfos $addlDriverInfos = null)
    {
        $this
            ->setAddlDriverInfos($addlDriverInfos);
    }
    /**
     * Get AddlDriverInfos value
     * @return \OtaInterface\Otaconnect\StructType\AddlDriverInfos|null
     */
    public function getAddlDriverInfos()
    {
        return $this->AddlDriverInfos;
    }
    /**
     * Set AddlDriverInfos value
     * @param \OtaInterface\Otaconnect\StructType\AddlDriverInfos $addlDriverInfos
     * @return \OtaInterface\Otaconnect\StructType\VehicleAdditionalDriverRequirementsType
     */
    public function setAddlDriverInfos(\OtaInterface\Otaconnect\StructType\AddlDriverInfos $addlDriverInfos = null)
    {
        $this->AddlDriverInfos = $addlDriverInfos;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehicleAdditionalDriverRequirementsType
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
