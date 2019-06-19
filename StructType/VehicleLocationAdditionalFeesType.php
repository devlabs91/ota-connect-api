<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationAdditionalFeesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Vehicle Location Additional Fees Type is used to define information on additional fees, taxes and surcharges that are included in the cost of a rental, when renting from this facility. Different facilities are required to impose
 * different fees and surcharges based upon location and local laws.
 * @subpackage Structs
 */
class VehicleLocationAdditionalFeesType extends AbstractStructBase
{
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Taxes
     */
    public $Taxes;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Fees
     */
    public $Fees;
    /**
     * The Surcharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Surcharges
     */
    public $Surcharges;
    /**
     * The MiscellaneousCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MiscellaneousCharges
     */
    public $MiscellaneousCharges;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleLocationAdditionalFeesType
     * @uses VehicleLocationAdditionalFeesType::setTaxes()
     * @uses VehicleLocationAdditionalFeesType::setFees()
     * @uses VehicleLocationAdditionalFeesType::setSurcharges()
     * @uses VehicleLocationAdditionalFeesType::setMiscellaneousCharges()
     * @uses VehicleLocationAdditionalFeesType::setTPA_Extensions()
     * @param \OtaInterface\Otaconnect\StructType\Taxes $taxes
     * @param \OtaInterface\Otaconnect\StructType\Fees $fees
     * @param \OtaInterface\Otaconnect\StructType\Surcharges $surcharges
     * @param \OtaInterface\Otaconnect\StructType\MiscellaneousCharges $miscellaneousCharges
     * @param mixed $tPA_Extensions
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\Taxes $taxes = null, \OtaInterface\Otaconnect\StructType\Fees $fees = null, \OtaInterface\Otaconnect\StructType\Surcharges $surcharges = null, \OtaInterface\Otaconnect\StructType\MiscellaneousCharges $miscellaneousCharges = null, $tPA_Extensions = null)
    {
        $this
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setSurcharges($surcharges)
            ->setMiscellaneousCharges($miscellaneousCharges)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get Taxes value
     * @return \OtaInterface\Otaconnect\StructType\Taxes|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \OtaInterface\Otaconnect\StructType\Taxes $taxes
     * @return \OtaInterface\Otaconnect\StructType\VehicleLocationAdditionalFeesType
     */
    public function setTaxes(\OtaInterface\Otaconnect\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleLocationAdditionalFeesType
     */
    public function setFees(\OtaInterface\Otaconnect\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get Surcharges value
     * @return \OtaInterface\Otaconnect\StructType\Surcharges|null
     */
    public function getSurcharges()
    {
        return $this->Surcharges;
    }
    /**
     * Set Surcharges value
     * @param \OtaInterface\Otaconnect\StructType\Surcharges $surcharges
     * @return \OtaInterface\Otaconnect\StructType\VehicleLocationAdditionalFeesType
     */
    public function setSurcharges(\OtaInterface\Otaconnect\StructType\Surcharges $surcharges = null)
    {
        $this->Surcharges = $surcharges;
        return $this;
    }
    /**
     * Get MiscellaneousCharges value
     * @return \OtaInterface\Otaconnect\StructType\MiscellaneousCharges|null
     */
    public function getMiscellaneousCharges()
    {
        return $this->MiscellaneousCharges;
    }
    /**
     * Set MiscellaneousCharges value
     * @param \OtaInterface\Otaconnect\StructType\MiscellaneousCharges $miscellaneousCharges
     * @return \OtaInterface\Otaconnect\StructType\VehicleLocationAdditionalFeesType
     */
    public function setMiscellaneousCharges(\OtaInterface\Otaconnect\StructType\MiscellaneousCharges $miscellaneousCharges = null)
    {
        $this->MiscellaneousCharges = $miscellaneousCharges;
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
     * @return \OtaInterface\Otaconnect\StructType\VehicleLocationAdditionalFeesType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehicleLocationAdditionalFeesType
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
