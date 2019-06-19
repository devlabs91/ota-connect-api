<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailRQCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleAvailRQCoreType complex type identifies the data that is common in a request for vehicle availability and rates.
 * @subpackage Structs
 */
class VehicleAvailRQCoreType extends AbstractStructBase
{
    /**
     * The VehRentalCore
     * Meta informations extracted from the WSDL
     * - documentation: Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     * @var mixed
     */
    public $VehRentalCore;
    /**
     * The VendorPrefs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\VendorPrefs
     */
    public $VendorPrefs;
    /**
     * The VehPrefs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\VehPrefs
     */
    public $VehPrefs;
    /**
     * The DriverType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\DriverType[]
     */
    public $DriverType;
    /**
     * The RateQualifier
     * Meta informations extracted from the WSDL
     * - maxOccurs: 13
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RateQualifier[]
     */
    public $RateQualifier;
    /**
     * The RateRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RateRange
     */
    public $RateRange;
    /**
     * The SpecialEquipPrefs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\SpecialEquipPrefs
     */
    public $SpecialEquipPrefs;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Status;
    /**
     * The TargetSource
     * Meta informations extracted from the WSDL
     * - documentation: To specify from which source the information being requested should be obtained, e.g., vendor, GDS system, etc.
     * - use: optional
     * @var string
     */
    public $TargetSource;
    /**
     * Constructor method for VehicleAvailRQCoreType
     * @uses VehicleAvailRQCoreType::setVehRentalCore()
     * @uses VehicleAvailRQCoreType::setVendorPrefs()
     * @uses VehicleAvailRQCoreType::setVehPrefs()
     * @uses VehicleAvailRQCoreType::setDriverType()
     * @uses VehicleAvailRQCoreType::setRateQualifier()
     * @uses VehicleAvailRQCoreType::setRateRange()
     * @uses VehicleAvailRQCoreType::setSpecialEquipPrefs()
     * @uses VehicleAvailRQCoreType::setTPA_Extensions()
     * @uses VehicleAvailRQCoreType::setStatus()
     * @uses VehicleAvailRQCoreType::setTargetSource()
     * @param mixed $vehRentalCore
     * @param \OtaInterface\Otaconnect\StructType\VendorPrefs $vendorPrefs
     * @param \OtaInterface\Otaconnect\StructType\VehPrefs $vehPrefs
     * @param \OtaInterface\Otaconnect\StructType\DriverType[] $driverType
     * @param \OtaInterface\Otaconnect\StructType\RateQualifier[] $rateQualifier
     * @param \OtaInterface\Otaconnect\StructType\RateRange $rateRange
     * @param \OtaInterface\Otaconnect\StructType\SpecialEquipPrefs $specialEquipPrefs
     * @param mixed $tPA_Extensions
     * @param string $status
     * @param string $targetSource
     */
    public function __construct($vehRentalCore = null, \OtaInterface\Otaconnect\StructType\VendorPrefs $vendorPrefs = null, \OtaInterface\Otaconnect\StructType\VehPrefs $vehPrefs = null, array $driverType = array(), array $rateQualifier = array(), \OtaInterface\Otaconnect\StructType\RateRange $rateRange = null, \OtaInterface\Otaconnect\StructType\SpecialEquipPrefs $specialEquipPrefs = null, $tPA_Extensions = null, $status = null, $targetSource = null)
    {
        $this
            ->setVehRentalCore($vehRentalCore)
            ->setVendorPrefs($vendorPrefs)
            ->setVehPrefs($vehPrefs)
            ->setDriverType($driverType)
            ->setRateQualifier($rateQualifier)
            ->setRateRange($rateRange)
            ->setSpecialEquipPrefs($specialEquipPrefs)
            ->setTPA_Extensions($tPA_Extensions)
            ->setStatus($status)
            ->setTargetSource($targetSource);
    }
    /**
     * Get VehRentalCore value
     * @return mixed|null
     */
    public function getVehRentalCore()
    {
        return $this->VehRentalCore;
    }
    /**
     * Set VehRentalCore value
     * @param mixed $vehRentalCore
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
     */
    public function setVehRentalCore($vehRentalCore = null)
    {
        $this->VehRentalCore = $vehRentalCore;
        return $this;
    }
    /**
     * Get VendorPrefs value
     * @return \OtaInterface\Otaconnect\StructType\VendorPrefs|null
     */
    public function getVendorPrefs()
    {
        return $this->VendorPrefs;
    }
    /**
     * Set VendorPrefs value
     * @param \OtaInterface\Otaconnect\StructType\VendorPrefs $vendorPrefs
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
     */
    public function setVendorPrefs(\OtaInterface\Otaconnect\StructType\VendorPrefs $vendorPrefs = null)
    {
        $this->VendorPrefs = $vendorPrefs;
        return $this;
    }
    /**
     * Get VehPrefs value
     * @return \OtaInterface\Otaconnect\StructType\VehPrefs|null
     */
    public function getVehPrefs()
    {
        return $this->VehPrefs;
    }
    /**
     * Set VehPrefs value
     * @param \OtaInterface\Otaconnect\StructType\VehPrefs $vehPrefs
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
     */
    public function setVehPrefs(\OtaInterface\Otaconnect\StructType\VehPrefs $vehPrefs = null)
    {
        $this->VehPrefs = $vehPrefs;
        return $this;
    }
    /**
     * Get DriverType value
     * @return \OtaInterface\Otaconnect\StructType\DriverType[]|null
     */
    public function getDriverType()
    {
        return $this->DriverType;
    }
    /**
     * Set DriverType value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\DriverType[] $driverType
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
     */
    public function setDriverType(array $driverType = array())
    {
        foreach ($driverType as $vehicleAvailRQCoreTypeDriverTypeItem) {
            // validation for constraint: itemType
            if (!$vehicleAvailRQCoreTypeDriverTypeItem instanceof \OtaInterface\Otaconnect\StructType\DriverType) {
                throw new \InvalidArgumentException(sprintf('The DriverType property can only contain items of \OtaInterface\Otaconnect\StructType\DriverType, "%s" given', is_object($vehicleAvailRQCoreTypeDriverTypeItem) ? get_class($vehicleAvailRQCoreTypeDriverTypeItem) : gettype($vehicleAvailRQCoreTypeDriverTypeItem)), __LINE__);
            }
        }
        $this->DriverType = $driverType;
        return $this;
    }
    /**
     * Add item to DriverType value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\DriverType $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
     */
    public function addToDriverType(\OtaInterface\Otaconnect\StructType\DriverType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\DriverType) {
            throw new \InvalidArgumentException(sprintf('The DriverType property can only contain items of \OtaInterface\Otaconnect\StructType\DriverType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DriverType[] = $item;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return \OtaInterface\Otaconnect\StructType\RateQualifier[]|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RateQualifier[] $rateQualifier
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
     */
    public function setRateQualifier(array $rateQualifier = array())
    {
        foreach ($rateQualifier as $vehicleAvailRQCoreTypeRateQualifierItem) {
            // validation for constraint: itemType
            if (!$vehicleAvailRQCoreTypeRateQualifierItem instanceof \OtaInterface\Otaconnect\StructType\RateQualifier) {
                throw new \InvalidArgumentException(sprintf('The RateQualifier property can only contain items of \OtaInterface\Otaconnect\StructType\RateQualifier, "%s" given', is_object($vehicleAvailRQCoreTypeRateQualifierItem) ? get_class($vehicleAvailRQCoreTypeRateQualifierItem) : gettype($vehicleAvailRQCoreTypeRateQualifierItem)), __LINE__);
            }
        }
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Add item to RateQualifier value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RateQualifier $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
     */
    public function addToRateQualifier(\OtaInterface\Otaconnect\StructType\RateQualifier $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\RateQualifier) {
            throw new \InvalidArgumentException(sprintf('The RateQualifier property can only contain items of \OtaInterface\Otaconnect\StructType\RateQualifier, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateQualifier[] = $item;
        return $this;
    }
    /**
     * Get RateRange value
     * @return \OtaInterface\Otaconnect\StructType\RateRange|null
     */
    public function getRateRange()
    {
        return $this->RateRange;
    }
    /**
     * Set RateRange value
     * @param \OtaInterface\Otaconnect\StructType\RateRange $rateRange
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
     */
    public function setRateRange(\OtaInterface\Otaconnect\StructType\RateRange $rateRange = null)
    {
        $this->RateRange = $rateRange;
        return $this;
    }
    /**
     * Get SpecialEquipPrefs value
     * @return \OtaInterface\Otaconnect\StructType\SpecialEquipPrefs|null
     */
    public function getSpecialEquipPrefs()
    {
        return $this->SpecialEquipPrefs;
    }
    /**
     * Set SpecialEquipPrefs value
     * @param \OtaInterface\Otaconnect\StructType\SpecialEquipPrefs $specialEquipPrefs
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
     */
    public function setSpecialEquipPrefs(\OtaInterface\Otaconnect\StructType\SpecialEquipPrefs $specialEquipPrefs = null)
    {
        $this->SpecialEquipPrefs = $specialEquipPrefs;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get TargetSource value
     * @return string|null
     */
    public function getTargetSource()
    {
        return $this->TargetSource;
    }
    /**
     * Set TargetSource value
     * @param string $targetSource
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
     */
    public function setTargetSource($targetSource = null)
    {
        // validation for constraint: string
        if (!is_null($targetSource) && !is_string($targetSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($targetSource)), __LINE__);
        }
        $this->TargetSource = $targetSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailRQCoreType
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
