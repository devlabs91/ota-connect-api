<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleReservationRQCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleReservationRQCoreType complex type identifies the core, or common, information that is typically included when requesting the reservation of avehicle.
 * @subpackage Structs
 */
class VehicleReservationRQCoreType extends AbstractStructBase
{
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier by which to reference the reservation. This is typically referred to as a reservation number.
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $UniqueID;
    /**
     * The VehRentalCore
     * Meta informations extracted from the WSDL
     * - documentation: Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     * - minOccurs: 0
     * @var mixed
     */
    public $VehRentalCore;
    /**
     * The Customer
     * Meta informations extracted from the WSDL
     * - documentation: Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     * - minOccurs: 0
     * @var mixed
     */
    public $Customer;
    /**
     * The VendorPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the preferred Vendor Company for car rental. If a company name is supplied, the rates will be supplied for the specific Vendor Company. The company name is unique amongst the vendors. The name of the company is provided in
     * this element.
     * - minOccurs: 0
     * @var mixed
     */
    public $VendorPref;
    /**
     * The VehPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
     * - minOccurs: 0
     * @var mixed
     */
    public $VehPref;
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
     * - documentation: Indicates the type of rates to be booked, along with any discount number or promotional codes that may affect the rate.
     * - minOccurs: 0
     * @var mixed
     */
    public $RateQualifier;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Fees
     */
    public $Fees;
    /**
     * The VehicleCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\VehicleCharges
     */
    public $VehicleCharges;
    /**
     * The SpecialEquipPrefs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\SpecialEquipPrefs
     */
    public $SpecialEquipPrefs;
    /**
     * The RateDistance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RateDistance[]
     */
    public $RateDistance;
    /**
     * The TotalCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\TotalCharge
     */
    public $TotalCharge;
    /**
     * The Queue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Queue
     */
    public $Queue;
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
     * Constructor method for VehicleReservationRQCoreType
     * @uses VehicleReservationRQCoreType::setUniqueID()
     * @uses VehicleReservationRQCoreType::setVehRentalCore()
     * @uses VehicleReservationRQCoreType::setCustomer()
     * @uses VehicleReservationRQCoreType::setVendorPref()
     * @uses VehicleReservationRQCoreType::setVehPref()
     * @uses VehicleReservationRQCoreType::setDriverType()
     * @uses VehicleReservationRQCoreType::setRateQualifier()
     * @uses VehicleReservationRQCoreType::setFees()
     * @uses VehicleReservationRQCoreType::setVehicleCharges()
     * @uses VehicleReservationRQCoreType::setSpecialEquipPrefs()
     * @uses VehicleReservationRQCoreType::setRateDistance()
     * @uses VehicleReservationRQCoreType::setTotalCharge()
     * @uses VehicleReservationRQCoreType::setQueue()
     * @uses VehicleReservationRQCoreType::setTPA_Extensions()
     * @uses VehicleReservationRQCoreType::setStatus()
     * @param mixed[] $uniqueID
     * @param mixed $vehRentalCore
     * @param mixed $customer
     * @param mixed $vendorPref
     * @param mixed $vehPref
     * @param \OtaInterface\Otaconnect\StructType\DriverType[] $driverType
     * @param mixed $rateQualifier
     * @param \OtaInterface\Otaconnect\StructType\Fees $fees
     * @param \OtaInterface\Otaconnect\StructType\VehicleCharges $vehicleCharges
     * @param \OtaInterface\Otaconnect\StructType\SpecialEquipPrefs $specialEquipPrefs
     * @param \OtaInterface\Otaconnect\StructType\RateDistance[] $rateDistance
     * @param \OtaInterface\Otaconnect\StructType\TotalCharge $totalCharge
     * @param \OtaInterface\Otaconnect\StructType\Queue $queue
     * @param mixed $tPA_Extensions
     * @param string $status
     */
    public function __construct(array $uniqueID = array(), $vehRentalCore = null, $customer = null, $vendorPref = null, $vehPref = null, array $driverType = array(), $rateQualifier = null, \OtaInterface\Otaconnect\StructType\Fees $fees = null, \OtaInterface\Otaconnect\StructType\VehicleCharges $vehicleCharges = null, \OtaInterface\Otaconnect\StructType\SpecialEquipPrefs $specialEquipPrefs = null, array $rateDistance = array(), \OtaInterface\Otaconnect\StructType\TotalCharge $totalCharge = null, \OtaInterface\Otaconnect\StructType\Queue $queue = null, $tPA_Extensions = null, $status = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setVehRentalCore($vehRentalCore)
            ->setCustomer($customer)
            ->setVendorPref($vendorPref)
            ->setVehPref($vehPref)
            ->setDriverType($driverType)
            ->setRateQualifier($rateQualifier)
            ->setFees($fees)
            ->setVehicleCharges($vehicleCharges)
            ->setSpecialEquipPrefs($specialEquipPrefs)
            ->setRateDistance($rateDistance)
            ->setTotalCharge($totalCharge)
            ->setQueue($queue)
            ->setTPA_Extensions($tPA_Extensions)
            ->setStatus($status);
    }
    /**
     * Get UniqueID value
     * @return mixed[]|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @throws \InvalidArgumentException
     * @param mixed[] $uniqueID
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setUniqueID(array $uniqueID = array())
    {
        foreach ($uniqueID as $vehicleReservationRQCoreTypeUniqueIDItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of anyType, "%s" given', is_object($vehicleReservationRQCoreTypeUniqueIDItem) ? get_class($vehicleReservationRQCoreTypeUniqueIDItem) : gettype($vehicleReservationRQCoreTypeUniqueIDItem)), __LINE__);
            }
        }
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Add item to UniqueID value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function addToUniqueID($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UniqueID[] = $item;
        return $this;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setVehRentalCore($vehRentalCore = null)
    {
        $this->VehRentalCore = $vehRentalCore;
        return $this;
    }
    /**
     * Get Customer value
     * @return mixed|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param mixed $customer
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setCustomer($customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get VendorPref value
     * @return mixed|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @param mixed $vendorPref
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setVendorPref($vendorPref = null)
    {
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Get VehPref value
     * @return mixed|null
     */
    public function getVehPref()
    {
        return $this->VehPref;
    }
    /**
     * Set VehPref value
     * @param mixed $vehPref
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setVehPref($vehPref = null)
    {
        $this->VehPref = $vehPref;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setDriverType(array $driverType = array())
    {
        foreach ($driverType as $vehicleReservationRQCoreTypeDriverTypeItem) {
            // validation for constraint: itemType
            if (!$vehicleReservationRQCoreTypeDriverTypeItem instanceof \OtaInterface\Otaconnect\StructType\DriverType) {
                throw new \InvalidArgumentException(sprintf('The DriverType property can only contain items of \OtaInterface\Otaconnect\StructType\DriverType, "%s" given', is_object($vehicleReservationRQCoreTypeDriverTypeItem) ? get_class($vehicleReservationRQCoreTypeDriverTypeItem) : gettype($vehicleReservationRQCoreTypeDriverTypeItem)), __LINE__);
            }
        }
        $this->DriverType = $driverType;
        return $this;
    }
    /**
     * Add item to DriverType value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\DriverType $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
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
     * @return mixed|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @param mixed $rateQualifier
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setRateQualifier($rateQualifier = null)
    {
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Get Fees value
     * @return \OtaInterface\Otaconnect\StructType\Fees|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \OtaInterface\Otaconnect\StructType\Fees $fees
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setFees(\OtaInterface\Otaconnect\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get VehicleCharges value
     * @return \OtaInterface\Otaconnect\StructType\VehicleCharges|null
     */
    public function getVehicleCharges()
    {
        return $this->VehicleCharges;
    }
    /**
     * Set VehicleCharges value
     * @param \OtaInterface\Otaconnect\StructType\VehicleCharges $vehicleCharges
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setVehicleCharges(\OtaInterface\Otaconnect\StructType\VehicleCharges $vehicleCharges = null)
    {
        $this->VehicleCharges = $vehicleCharges;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setSpecialEquipPrefs(\OtaInterface\Otaconnect\StructType\SpecialEquipPrefs $specialEquipPrefs = null)
    {
        $this->SpecialEquipPrefs = $specialEquipPrefs;
        return $this;
    }
    /**
     * Get RateDistance value
     * @return \OtaInterface\Otaconnect\StructType\RateDistance[]|null
     */
    public function getRateDistance()
    {
        return $this->RateDistance;
    }
    /**
     * Set RateDistance value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RateDistance[] $rateDistance
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setRateDistance(array $rateDistance = array())
    {
        foreach ($rateDistance as $vehicleReservationRQCoreTypeRateDistanceItem) {
            // validation for constraint: itemType
            if (!$vehicleReservationRQCoreTypeRateDistanceItem instanceof \OtaInterface\Otaconnect\StructType\RateDistance) {
                throw new \InvalidArgumentException(sprintf('The RateDistance property can only contain items of \OtaInterface\Otaconnect\StructType\RateDistance, "%s" given', is_object($vehicleReservationRQCoreTypeRateDistanceItem) ? get_class($vehicleReservationRQCoreTypeRateDistanceItem) : gettype($vehicleReservationRQCoreTypeRateDistanceItem)), __LINE__);
            }
        }
        $this->RateDistance = $rateDistance;
        return $this;
    }
    /**
     * Add item to RateDistance value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RateDistance $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function addToRateDistance(\OtaInterface\Otaconnect\StructType\RateDistance $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\RateDistance) {
            throw new \InvalidArgumentException(sprintf('The RateDistance property can only contain items of \OtaInterface\Otaconnect\StructType\RateDistance, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateDistance[] = $item;
        return $this;
    }
    /**
     * Get TotalCharge value
     * @return \OtaInterface\Otaconnect\StructType\TotalCharge|null
     */
    public function getTotalCharge()
    {
        return $this->TotalCharge;
    }
    /**
     * Set TotalCharge value
     * @param \OtaInterface\Otaconnect\StructType\TotalCharge $totalCharge
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setTotalCharge(\OtaInterface\Otaconnect\StructType\TotalCharge $totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
        return $this;
    }
    /**
     * Get Queue value
     * @return \OtaInterface\Otaconnect\StructType\Queue|null
     */
    public function getQueue()
    {
        return $this->Queue;
    }
    /**
     * Set Queue value
     * @param \OtaInterface\Otaconnect\StructType\Queue $queue
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
     */
    public function setQueue(\OtaInterface\Otaconnect\StructType\Queue $queue = null)
    {
        $this->Queue = $queue;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehicleReservationRQCoreType
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
