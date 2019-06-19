<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationVehiclesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Vehicle Location Vehicles Type is used to define information on the vehicles that are offered for rental at this facility.
 * @subpackage Structs
 */
class VehicleLocationVehiclesType extends AbstractStructBase
{
    /**
     * The VehicleInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\VehicleInfos
     */
    public $VehicleInfos;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Vehicle[]
     */
    public $Vehicle;
    /**
     * Constructor method for VehicleLocationVehiclesType
     * @uses VehicleLocationVehiclesType::setVehicleInfos()
     * @uses VehicleLocationVehiclesType::setVehicle()
     * @param \OtaInterface\Otaconnect\StructType\VehicleInfos $vehicleInfos
     * @param \OtaInterface\Otaconnect\StructType\Vehicle[] $vehicle
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\VehicleInfos $vehicleInfos = null, array $vehicle = array())
    {
        $this
            ->setVehicleInfos($vehicleInfos)
            ->setVehicle($vehicle);
    }
    /**
     * Get VehicleInfos value
     * @return \OtaInterface\Otaconnect\StructType\VehicleInfos|null
     */
    public function getVehicleInfos()
    {
        return $this->VehicleInfos;
    }
    /**
     * Set VehicleInfos value
     * @param \OtaInterface\Otaconnect\StructType\VehicleInfos $vehicleInfos
     * @return \OtaInterface\Otaconnect\StructType\VehicleLocationVehiclesType
     */
    public function setVehicleInfos(\OtaInterface\Otaconnect\StructType\VehicleInfos $vehicleInfos = null)
    {
        $this->VehicleInfos = $vehicleInfos;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \OtaInterface\Otaconnect\StructType\Vehicle[]|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Vehicle[] $vehicle
     * @return \OtaInterface\Otaconnect\StructType\VehicleLocationVehiclesType
     */
    public function setVehicle(array $vehicle = array())
    {
        foreach ($vehicle as $vehicleLocationVehiclesTypeVehicleItem) {
            // validation for constraint: itemType
            if (!$vehicleLocationVehiclesTypeVehicleItem instanceof \OtaInterface\Otaconnect\StructType\Vehicle) {
                throw new \InvalidArgumentException(sprintf('The Vehicle property can only contain items of \OtaInterface\Otaconnect\StructType\Vehicle, "%s" given', is_object($vehicleLocationVehiclesTypeVehicleItem) ? get_class($vehicleLocationVehiclesTypeVehicleItem) : gettype($vehicleLocationVehiclesTypeVehicleItem)), __LINE__);
            }
        }
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Add item to Vehicle value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Vehicle $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleLocationVehiclesType
     */
    public function addToVehicle(\OtaInterface\Otaconnect\StructType\Vehicle $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Vehicle) {
            throw new \InvalidArgumentException(sprintf('The Vehicle property can only contain items of \OtaInterface\Otaconnect\StructType\Vehicle, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Vehicle[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehicleLocationVehiclesType
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
