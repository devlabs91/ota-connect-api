<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleInfos StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of descriptions about various aspects of the vehicles.
 * @subpackage Structs
 */
class VehicleInfos extends AbstractStructBase
{
    /**
     * The VehicleInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\VehicleInfo[]
     */
    public $VehicleInfo;
    /**
     * Constructor method for VehicleInfos
     * @uses VehicleInfos::setVehicleInfo()
     * @param \OtaInterface\Otaconnect\StructType\VehicleInfo[] $vehicleInfo
     */
    public function __construct(array $vehicleInfo = array())
    {
        $this
            ->setVehicleInfo($vehicleInfo);
    }
    /**
     * Get VehicleInfo value
     * @return \OtaInterface\Otaconnect\StructType\VehicleInfo[]|null
     */
    public function getVehicleInfo()
    {
        return $this->VehicleInfo;
    }
    /**
     * Set VehicleInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\VehicleInfo[] $vehicleInfo
     * @return \OtaInterface\Otaconnect\StructType\VehicleInfos
     */
    public function setVehicleInfo(array $vehicleInfo = array())
    {
        foreach ($vehicleInfo as $vehicleInfosVehicleInfoItem) {
            // validation for constraint: itemType
            if (!$vehicleInfosVehicleInfoItem instanceof \OtaInterface\Otaconnect\StructType\VehicleInfo) {
                throw new \InvalidArgumentException(sprintf('The VehicleInfo property can only contain items of \OtaInterface\Otaconnect\StructType\VehicleInfo, "%s" given', is_object($vehicleInfosVehicleInfoItem) ? get_class($vehicleInfosVehicleInfoItem) : gettype($vehicleInfosVehicleInfoItem)), __LINE__);
            }
        }
        $this->VehicleInfo = $vehicleInfo;
        return $this;
    }
    /**
     * Add item to VehicleInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\VehicleInfo $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleInfos
     */
    public function addToVehicleInfo(\OtaInterface\Otaconnect\StructType\VehicleInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\VehicleInfo) {
            throw new \InvalidArgumentException(sprintf('The VehicleInfo property can only contain items of \OtaInterface\Otaconnect\StructType\VehicleInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehicleInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehicleInfos
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
