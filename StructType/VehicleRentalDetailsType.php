<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This provides specific information regarding the milage and condition of the vehicle being rented.
 * @subpackage Structs
 */
class VehicleRentalDetailsType extends AbstractStructBase
{
    /**
     * The FuelLevelDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\FuelLevelDetails
     */
    public $FuelLevelDetails;
    /**
     * The OdometerReading
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\OdometerReading
     */
    public $OdometerReading;
    /**
     * The ConditionReport
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ConditionReport[]
     */
    public $ConditionReport;
    /**
     * The ParkingLocation
     * Meta informations extracted from the WSDL
     * - documentation: This identifies the physical location of the vehicle being rented (e.g., the parking space or stall number).
     * - use: optional
     * @var string
     */
    public $ParkingLocation;
    /**
     * Constructor method for VehicleRentalDetailsType
     * @uses VehicleRentalDetailsType::setFuelLevelDetails()
     * @uses VehicleRentalDetailsType::setOdometerReading()
     * @uses VehicleRentalDetailsType::setConditionReport()
     * @uses VehicleRentalDetailsType::setParkingLocation()
     * @param \OtaInterface\Otaconnect\StructType\FuelLevelDetails $fuelLevelDetails
     * @param \OtaInterface\Otaconnect\StructType\OdometerReading $odometerReading
     * @param \OtaInterface\Otaconnect\StructType\ConditionReport[] $conditionReport
     * @param string $parkingLocation
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\FuelLevelDetails $fuelLevelDetails = null, \OtaInterface\Otaconnect\StructType\OdometerReading $odometerReading = null, array $conditionReport = array(), $parkingLocation = null)
    {
        $this
            ->setFuelLevelDetails($fuelLevelDetails)
            ->setOdometerReading($odometerReading)
            ->setConditionReport($conditionReport)
            ->setParkingLocation($parkingLocation);
    }
    /**
     * Get FuelLevelDetails value
     * @return \OtaInterface\Otaconnect\StructType\FuelLevelDetails|null
     */
    public function getFuelLevelDetails()
    {
        return $this->FuelLevelDetails;
    }
    /**
     * Set FuelLevelDetails value
     * @param \OtaInterface\Otaconnect\StructType\FuelLevelDetails $fuelLevelDetails
     * @return \OtaInterface\Otaconnect\StructType\VehicleRentalDetailsType
     */
    public function setFuelLevelDetails(\OtaInterface\Otaconnect\StructType\FuelLevelDetails $fuelLevelDetails = null)
    {
        $this->FuelLevelDetails = $fuelLevelDetails;
        return $this;
    }
    /**
     * Get OdometerReading value
     * @return \OtaInterface\Otaconnect\StructType\OdometerReading|null
     */
    public function getOdometerReading()
    {
        return $this->OdometerReading;
    }
    /**
     * Set OdometerReading value
     * @param \OtaInterface\Otaconnect\StructType\OdometerReading $odometerReading
     * @return \OtaInterface\Otaconnect\StructType\VehicleRentalDetailsType
     */
    public function setOdometerReading(\OtaInterface\Otaconnect\StructType\OdometerReading $odometerReading = null)
    {
        $this->OdometerReading = $odometerReading;
        return $this;
    }
    /**
     * Get ConditionReport value
     * @return \OtaInterface\Otaconnect\StructType\ConditionReport[]|null
     */
    public function getConditionReport()
    {
        return $this->ConditionReport;
    }
    /**
     * Set ConditionReport value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ConditionReport[] $conditionReport
     * @return \OtaInterface\Otaconnect\StructType\VehicleRentalDetailsType
     */
    public function setConditionReport(array $conditionReport = array())
    {
        foreach ($conditionReport as $vehicleRentalDetailsTypeConditionReportItem) {
            // validation for constraint: itemType
            if (!$vehicleRentalDetailsTypeConditionReportItem instanceof \OtaInterface\Otaconnect\StructType\ConditionReport) {
                throw new \InvalidArgumentException(sprintf('The ConditionReport property can only contain items of \OtaInterface\Otaconnect\StructType\ConditionReport, "%s" given', is_object($vehicleRentalDetailsTypeConditionReportItem) ? get_class($vehicleRentalDetailsTypeConditionReportItem) : gettype($vehicleRentalDetailsTypeConditionReportItem)), __LINE__);
            }
        }
        $this->ConditionReport = $conditionReport;
        return $this;
    }
    /**
     * Add item to ConditionReport value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ConditionReport $item
     * @return \OtaInterface\Otaconnect\StructType\VehicleRentalDetailsType
     */
    public function addToConditionReport(\OtaInterface\Otaconnect\StructType\ConditionReport $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\ConditionReport) {
            throw new \InvalidArgumentException(sprintf('The ConditionReport property can only contain items of \OtaInterface\Otaconnect\StructType\ConditionReport, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConditionReport[] = $item;
        return $this;
    }
    /**
     * Get ParkingLocation value
     * @return string|null
     */
    public function getParkingLocation()
    {
        return $this->ParkingLocation;
    }
    /**
     * Set ParkingLocation value
     * @param string $parkingLocation
     * @return \OtaInterface\Otaconnect\StructType\VehicleRentalDetailsType
     */
    public function setParkingLocation($parkingLocation = null)
    {
        // validation for constraint: string
        if (!is_null($parkingLocation) && !is_string($parkingLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parkingLocation)), __LINE__);
        }
        $this->ParkingLocation = $parkingLocation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehicleRentalDetailsType
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
