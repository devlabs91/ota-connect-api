<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleAvailCoreType complex type identifies the data that describes common, or core, information made available as part of describing the availability and rate of one or more vehicles.
 * @subpackage Structs
 */
class VehicleAvailCoreType extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Status;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - documentation: Information on one specific vehicle along with detailed information on the charges associated with this vehicle.
     * @var mixed
     */
    public $Vehicle;
    /**
     * The RentalRate
     * Meta informations extracted from the WSDL
     * - documentation: Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow
     * different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RentalRate;
    /**
     * The TotalCharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\TotalCharge[]
     */
    public $TotalCharge;
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
     * The Reference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Reference
     */
    public $Reference;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Vendor
     */
    public $Vendor;
    /**
     * The VendorLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\VendorLocation
     */
    public $VendorLocation;
    /**
     * The DropOffLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\DropOffLocation
     */
    public $DropOffLocation;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Discount[]
     */
    public $Discount;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The IsAlternateInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, this vehicle is an alternate to what was requested.
     * - use: optional
     * @var bool
     */
    public $IsAlternateInd;
    /**
     * Constructor method for VehicleAvailCoreType
     * @uses VehicleAvailCoreType::setStatus()
     * @uses VehicleAvailCoreType::setVehicle()
     * @uses VehicleAvailCoreType::setRentalRate()
     * @uses VehicleAvailCoreType::setTotalCharge()
     * @uses VehicleAvailCoreType::setPricedEquips()
     * @uses VehicleAvailCoreType::setFees()
     * @uses VehicleAvailCoreType::setReference()
     * @uses VehicleAvailCoreType::setVendor()
     * @uses VehicleAvailCoreType::setVendorLocation()
     * @uses VehicleAvailCoreType::setDropOffLocation()
     * @uses VehicleAvailCoreType::setDiscount()
     * @uses VehicleAvailCoreType::setTPA_Extensions()
     * @uses VehicleAvailCoreType::setIsAlternateInd()
     * @param string $status
     * @param mixed $vehicle
     * @param mixed[] $rentalRate
     * @param \OtaInterface\Otaconnect\StructType\TotalCharge[] $totalCharge
     * @param \OtaInterface\Otaconnect\StructType\PricedEquips $pricedEquips
     * @param \OtaInterface\Otaconnect\StructType\Fees $fees
     * @param \OtaInterface\Otaconnect\StructType\Reference $reference
     * @param \OtaInterface\Otaconnect\StructType\Vendor $vendor
     * @param \OtaInterface\Otaconnect\StructType\VendorLocation $vendorLocation
     * @param \OtaInterface\Otaconnect\StructType\DropOffLocation $dropOffLocation
     * @param \OtaInterface\Otaconnect\StructType\Discount[] $discount
     * @param mixed $tPA_Extensions
     * @param bool $isAlternateInd
     */
    public function __construct($status = null, $vehicle = null, array $rentalRate = array(), array $totalCharge = array(), \OtaInterface\Otaconnect\StructType\PricedEquips $pricedEquips = null, \OtaInterface\Otaconnect\StructType\Fees $fees = null, \OtaInterface\Otaconnect\StructType\Reference $reference = null, \OtaInterface\Otaconnect\StructType\Vendor $vendor = null, \OtaInterface\Otaconnect\StructType\VendorLocation $vendorLocation = null, \OtaInterface\Otaconnect\StructType\DropOffLocation $dropOffLocation = null, array $discount = array(), $tPA_Extensions = null, $isAlternateInd = null)
    {
        $this
            ->setStatus($status)
            ->setVehicle($vehicle)
            ->setRentalRate($rentalRate)
            ->setTotalCharge($totalCharge)
            ->setPricedEquips($pricedEquips)
            ->setFees($fees)
            ->setReference($reference)
            ->setVendor($vendor)
            ->setVendorLocation($vendorLocation)
            ->setDropOffLocation($dropOffLocation)
            ->setDiscount($discount)
            ->setTPA_Extensions($tPA_Extensions)
            ->setIsAlternateInd($isAlternateInd);
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function setVehicle($vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get RentalRate value
     * @return mixed[]|null
     */
    public function getRentalRate()
    {
        return $this->RentalRate;
    }
    /**
     * Set RentalRate value
     * @throws \InvalidArgumentException
     * @param mixed[] $rentalRate
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function setRentalRate(array $rentalRate = array())
    {
        foreach ($rentalRate as $vehicleAvailCoreTypeRentalRateItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RentalRate property can only contain items of anyType, "%s" given', is_object($vehicleAvailCoreTypeRentalRateItem) ? get_class($vehicleAvailCoreTypeRentalRateItem) : gettype($vehicleAvailCoreTypeRentalRateItem)), __LINE__);
            }
        }
        $this->RentalRate = $rentalRate;
        return $this;
    }
    /**
     * Add item to RentalRate value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function addToRentalRate($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RentalRate property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RentalRate[] = $item;
        return $this;
    }
    /**
     * Get TotalCharge value
     * @return \OtaInterface\Otaconnect\StructType\TotalCharge[]|null
     */
    public function getTotalCharge()
    {
        return $this->TotalCharge;
    }
    /**
     * Set TotalCharge value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\TotalCharge[] $totalCharge
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function setTotalCharge(array $totalCharge = array())
    {
        foreach ($totalCharge as $vehicleAvailCoreTypeTotalChargeItem) {
            // validation for constraint: itemType
            if (!$vehicleAvailCoreTypeTotalChargeItem instanceof \OtaInterface\Otaconnect\StructType\TotalCharge) {
                throw new \InvalidArgumentException(sprintf('The TotalCharge property can only contain items of \OtaInterface\Otaconnect\StructType\TotalCharge, "%s" given', is_object($vehicleAvailCoreTypeTotalChargeItem) ? get_class($vehicleAvailCoreTypeTotalChargeItem) : gettype($vehicleAvailCoreTypeTotalChargeItem)), __LINE__);
            }
        }
        $this->TotalCharge = $totalCharge;
        return $this;
    }
    /**
     * Add item to TotalCharge value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\TotalCharge $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function addToTotalCharge(\OtaInterface\Otaconnect\StructType\TotalCharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\TotalCharge) {
            throw new \InvalidArgumentException(sprintf('The TotalCharge property can only contain items of \OtaInterface\Otaconnect\StructType\TotalCharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TotalCharge[] = $item;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function setFees(\OtaInterface\Otaconnect\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get Reference value
     * @return \OtaInterface\Otaconnect\StructType\Reference|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param \OtaInterface\Otaconnect\StructType\Reference $reference
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function setReference(\OtaInterface\Otaconnect\StructType\Reference $reference = null)
    {
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \OtaInterface\Otaconnect\StructType\Vendor|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \OtaInterface\Otaconnect\StructType\Vendor $vendor
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function setVendor(\OtaInterface\Otaconnect\StructType\Vendor $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get VendorLocation value
     * @return \OtaInterface\Otaconnect\StructType\VendorLocation|null
     */
    public function getVendorLocation()
    {
        return $this->VendorLocation;
    }
    /**
     * Set VendorLocation value
     * @param \OtaInterface\Otaconnect\StructType\VendorLocation $vendorLocation
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function setVendorLocation(\OtaInterface\Otaconnect\StructType\VendorLocation $vendorLocation = null)
    {
        $this->VendorLocation = $vendorLocation;
        return $this;
    }
    /**
     * Get DropOffLocation value
     * @return \OtaInterface\Otaconnect\StructType\DropOffLocation|null
     */
    public function getDropOffLocation()
    {
        return $this->DropOffLocation;
    }
    /**
     * Set DropOffLocation value
     * @param \OtaInterface\Otaconnect\StructType\DropOffLocation $dropOffLocation
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function setDropOffLocation(\OtaInterface\Otaconnect\StructType\DropOffLocation $dropOffLocation = null)
    {
        $this->DropOffLocation = $dropOffLocation;
        return $this;
    }
    /**
     * Get Discount value
     * @return \OtaInterface\Otaconnect\StructType\Discount[]|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Discount[] $discount
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function setDiscount(array $discount = array())
    {
        foreach ($discount as $vehicleAvailCoreTypeDiscountItem) {
            // validation for constraint: itemType
            if (!$vehicleAvailCoreTypeDiscountItem instanceof \OtaInterface\Otaconnect\StructType\Discount) {
                throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \OtaInterface\Otaconnect\StructType\Discount, "%s" given', is_object($vehicleAvailCoreTypeDiscountItem) ? get_class($vehicleAvailCoreTypeDiscountItem) : gettype($vehicleAvailCoreTypeDiscountItem)), __LINE__);
            }
        }
        $this->Discount = $discount;
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Discount $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function addToDiscount(\OtaInterface\Otaconnect\StructType\Discount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Discount) {
            throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \OtaInterface\Otaconnect\StructType\Discount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Discount[] = $item;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get IsAlternateInd value
     * @return bool|null
     */
    public function getIsAlternateInd()
    {
        return $this->IsAlternateInd;
    }
    /**
     * Set IsAlternateInd value
     * @param bool $isAlternateInd
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
     */
    public function setIsAlternateInd($isAlternateInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAlternateInd) && !is_bool($isAlternateInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAlternateInd)), __LINE__);
        }
        $this->IsAlternateInd = $isAlternateInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehicleAvailCoreType
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
