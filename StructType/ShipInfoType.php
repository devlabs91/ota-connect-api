<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the ship details. | Specifies a vendor and ship.
 * @subpackage Structs
 */
class ShipInfoType extends AbstractStructBase
{
    /**
     * The Ship
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Ship
     */
    public $Ship;
    /**
     * The ShipLength
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ShipLength
     */
    public $ShipLength;
    /**
     * The ShipVoltage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ShipVoltage
     */
    public $ShipVoltage;
    /**
     * Constructor method for ShipInfoType
     * @uses ShipInfoType::setShip()
     * @uses ShipInfoType::setShipLength()
     * @uses ShipInfoType::setShipVoltage()
     * @param \OtaInterface\Otaconnect\StructType\Ship $ship
     * @param \OtaInterface\Otaconnect\StructType\ShipLength $shipLength
     * @param \OtaInterface\Otaconnect\StructType\ShipVoltage $shipVoltage
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\Ship $ship = null, \OtaInterface\Otaconnect\StructType\ShipLength $shipLength = null, \OtaInterface\Otaconnect\StructType\ShipVoltage $shipVoltage = null)
    {
        $this
            ->setShip($ship)
            ->setShipLength($shipLength)
            ->setShipVoltage($shipVoltage);
    }
    /**
     * Get Ship value
     * @return \OtaInterface\Otaconnect\StructType\Ship|null
     */
    public function getShip()
    {
        return $this->Ship;
    }
    /**
     * Set Ship value
     * @param \OtaInterface\Otaconnect\StructType\Ship $ship
     * @return \OtaInterface\Otaconnect\StructType\ShipInfoType
     */
    public function setShip(\OtaInterface\Otaconnect\StructType\Ship $ship = null)
    {
        $this->Ship = $ship;
        return $this;
    }
    /**
     * Get ShipLength value
     * @return \OtaInterface\Otaconnect\StructType\ShipLength|null
     */
    public function getShipLength()
    {
        return $this->ShipLength;
    }
    /**
     * Set ShipLength value
     * @param \OtaInterface\Otaconnect\StructType\ShipLength $shipLength
     * @return \OtaInterface\Otaconnect\StructType\ShipInfoType
     */
    public function setShipLength(\OtaInterface\Otaconnect\StructType\ShipLength $shipLength = null)
    {
        $this->ShipLength = $shipLength;
        return $this;
    }
    /**
     * Get ShipVoltage value
     * @return \OtaInterface\Otaconnect\StructType\ShipVoltage|null
     */
    public function getShipVoltage()
    {
        return $this->ShipVoltage;
    }
    /**
     * Set ShipVoltage value
     * @param \OtaInterface\Otaconnect\StructType\ShipVoltage $shipVoltage
     * @return \OtaInterface\Otaconnect\StructType\ShipInfoType
     */
    public function setShipVoltage(\OtaInterface\Otaconnect\StructType\ShipVoltage $shipVoltage = null)
    {
        $this->ShipVoltage = $shipVoltage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\ShipInfoType
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
