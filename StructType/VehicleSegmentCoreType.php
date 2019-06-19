<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleSegmentCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleSegmentCoreType complex type identifies the core, or common, data that descibes the information assocated with a vehicle segment. Such information is typically provided in a reservation.
 * @subpackage Structs
 */
class VehicleSegmentCoreType extends AbstractStructBase
{
    /**
     * The ConfID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * @var \OtaInterface\Otaconnect\StructType\ConfID[]
     */
    public $ConfID;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the vendor associated with this information.
     * - minOccurs: 0
     * @var mixed
     */
    public $Vendor;
    /**
     * The VehRentalCore
     * Meta informations extracted from the WSDL
     * - documentation: Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     * - minOccurs: 0
     * @var mixed
     */
    public $VehRentalCore;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - documentation: Information on one specific vehicle along with detailed information on the charges associated with this vehicle.
     * - minOccurs: 0
     * @var mixed
     */
    public $Vehicle;
    /**
     * The RentalRate
     * Meta informations extracted from the WSDL
     * - documentation: Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate.
     * - minOccurs: 0
     * @var mixed
     */
    public $RentalRate;
    /**
     * The PricedEquips
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PricedEquips
     */
    public $PricedEquips;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Fees
     */
    public $Fees;
    /**
     * The TotalCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\TotalCharge
     */
    public $TotalCharge;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The IndexNumber
     * Meta informations extracted from the WSDL
     * - documentation: A unique number (e.g., segment number or index number) used to further identify a booked item within a list of booked items in a multi-segment PNR. Typically not used in messages to car suppliers.
     * - use: optional
     * @var string
     */
    public $IndexNumber;
    /**
     * Constructor method for VehicleSegmentCoreType
     * @uses VehicleSegmentCoreType::setConfID()
     * @uses VehicleSegmentCoreType::setVendor()
     * @uses VehicleSegmentCoreType::setVehRentalCore()
     * @uses VehicleSegmentCoreType::setVehicle()
     * @uses VehicleSegmentCoreType::setRentalRate()
     * @uses VehicleSegmentCoreType::setPricedEquips()
     * @uses VehicleSegmentCoreType::setFees()
     * @uses VehicleSegmentCoreType::setTotalCharge()
     * @uses VehicleSegmentCoreType::setTPA_Extensions()
     * @uses VehicleSegmentCoreType::setIndexNumber()
     * @param \OtaInterface\Otaconnect\StructType\ConfID[] $confID
     * @param mixed $vendor
     * @param mixed $vehRentalCore
     * @param mixed $vehicle
     * @param mixed $rentalRate
     * @param \OtaInterface\Otaconnect\StructType\PricedEquips $pricedEquips
     * @param \OtaInterface\Otaconnect\StructType\Fees $fees
     * @param \OtaInterface\Otaconnect\StructType\TotalCharge $totalCharge
     * @param mixed $tPA_Extensions
     * @param string $indexNumber
     */
    public function __construct(array $confID = array(), $vendor = null, $vehRentalCore = null, $vehicle = null, $rentalRate = null, \OtaInterface\Otaconnect\StructType\PricedEquips $pricedEquips = null, \OtaInterface\Otaconnect\StructType\Fees $fees = null, \OtaInterface\Otaconnect\StructType\TotalCharge $totalCharge = null, $tPA_Extensions = null, $indexNumber = null)
    {
        $this
            ->setConfID($confID)
            ->setVendor($vendor)
            ->setVehRentalCore($vehRentalCore)
            ->setVehicle($vehicle)
            ->setRentalRate($rentalRate)
            ->setPricedEquips($pricedEquips)
            ->setFees($fees)
            ->setTotalCharge($totalCharge)
            ->setTPA_Extensions($tPA_Extensions)
            ->setIndexNumber($indexNumber);
    }
    /**
     * Get ConfID value
     * @return \OtaInterface\Otaconnect\StructType\ConfID[]|null
     */
    public function getConfID()
    {
        return $this->ConfID;
    }
    /**
     * Set ConfID value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ConfID[] $confID
     * @return \OtaInterface\Otaconnect\StructType\VehicleSegmentCoreType
     */
    public function setConfID(array $confID = array())
    {
        foreach ($confID as $vehicleSegmentCoreTypeConfIDItem) {
            // validation for constraint: itemType
            if (!$vehicleSegmentCoreTypeConfIDItem instanceof \OtaInterface\Otaconnect\StructType\ConfID) {
                throw new \InvalidArgumentException(sprintf('The ConfID property can only contain items of \OtaInterface\Otaconnect\StructType\ConfID, "%s" given', is_object($vehicleSegmentCoreTypeConfIDItem) ? get_class($vehicleSegmentCoreTypeConfIDItem) : gettype($vehicleSegmentCoreTypeConfIDItem)), __LINE__);
            }
        }
        $this->ConfID = $confID;
        return $this;
    }
    /**
     * Add item to ConfID value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ConfID $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleSegmentCoreType
     */
    public function addToConfID(\OtaInterface\Otaconnect\StructType\ConfID $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\ConfID) {
            throw new \InvalidArgumentException(sprintf('The ConfID property can only contain items of \OtaInterface\Otaconnect\StructType\ConfID, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConfID[] = $item;
        return $this;
    }
    /**
     * Get Vendor value
     * @return mixed|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param mixed $vendor
     * @return \OtaInterface\Otaconnect\StructType\VehicleSegmentCoreType
     */
    public function setVendor($vendor = null)
    {
        $this->Vendor = $vendor;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleSegmentCoreType
     */
    public function setVehRentalCore($vehRentalCore = null)
    {
        $this->VehRentalCore = $vehRentalCore;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return mixed|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param mixed $vehicle
     * @return \OtaInterface\Otaconnect\StructType\VehicleSegmentCoreType
     */
    public function setVehicle($vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get RentalRate value
     * @return mixed|null
     */
    public function getRentalRate()
    {
        return $this->RentalRate;
    }
    /**
     * Set RentalRate value
     * @param mixed $rentalRate
     * @return \OtaInterface\Otaconnect\StructType\VehicleSegmentCoreType
     */
    public function setRentalRate($rentalRate = null)
    {
        $this->RentalRate = $rentalRate;
        return $this;
    }
    /**
     * Get PricedEquips value
     * @return \OtaInterface\Otaconnect\StructType\PricedEquips|null
     */
    public function getPricedEquips()
    {
        return $this->PricedEquips;
    }
    /**
     * Set PricedEquips value
     * @param \OtaInterface\Otaconnect\StructType\PricedEquips $pricedEquips
     * @return \OtaInterface\Otaconnect\StructType\VehicleSegmentCoreType
     */
    public function setPricedEquips(\OtaInterface\Otaconnect\StructType\PricedEquips $pricedEquips = null)
    {
        $this->PricedEquips = $pricedEquips;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleSegmentCoreType
     */
    public function setFees(\OtaInterface\Otaconnect\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleSegmentCoreType
     */
    public function setTotalCharge(\OtaInterface\Otaconnect\StructType\TotalCharge $totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleSegmentCoreType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get IndexNumber value
     * @return string|null
     */
    public function getIndexNumber()
    {
        return $this->IndexNumber;
    }
    /**
     * Set IndexNumber value
     * @param string $indexNumber
     * @return \OtaInterface\Otaconnect\StructType\VehicleSegmentCoreType
     */
    public function setIndexNumber($indexNumber = null)
    {
        // validation for constraint: string
        if (!is_null($indexNumber) && !is_string($indexNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indexNumber)), __LINE__);
        }
        $this->IndexNumber = $indexNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehicleSegmentCoreType
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
