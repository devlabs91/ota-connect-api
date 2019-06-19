<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedEquip StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to indicate special equipment is returned.
 * @subpackage Structs
 */
class PricedEquip extends AbstractStructBase
{
    /**
     * The Equipment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * @var \OtaInterface\Otaconnect\StructType\Equipment[]
     */
    public $Equipment;
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Charge;
    /**
     * Constructor method for PricedEquip
     * @uses PricedEquip::setEquipment()
     * @uses PricedEquip::setCharge()
     * @param \OtaInterface\Otaconnect\StructType\Equipment[] $equipment
     * @param mixed $charge
     */
    public function __construct(array $equipment = array(), $charge = null)
    {
        $this
            ->setEquipment($equipment)
            ->setCharge($charge);
    }
    /**
     * Get Equipment value
     * @return \OtaInterface\Otaconnect\StructType\Equipment[]|null
     */
    public function getEquipment()
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Equipment[] $equipment
     * @return \OtaInterface\Otaconnect\StructType\PricedEquip
     */
    public function setEquipment(array $equipment = array())
    {
        foreach ($equipment as $pricedEquipEquipmentItem) {
            // validation for constraint: itemType
            if (!$pricedEquipEquipmentItem instanceof \OtaInterface\Otaconnect\StructType\Equipment) {
                throw new \InvalidArgumentException(sprintf('The Equipment property can only contain items of \OtaInterface\Otaconnect\StructType\Equipment, "%s" given', is_object($pricedEquipEquipmentItem) ? get_class($pricedEquipEquipmentItem) : gettype($pricedEquipEquipmentItem)), __LINE__);
            }
        }
        $this->Equipment = $equipment;
        return $this;
    }
    /**
     * Add item to Equipment value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Equipment $item
     * @return \OtaInterface\Otaconnect\StructType\PricedEquip
     */
    public function addToEquipment(\OtaInterface\Otaconnect\StructType\Equipment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Equipment) {
            throw new \InvalidArgumentException(sprintf('The Equipment property can only contain items of \OtaInterface\Otaconnect\StructType\Equipment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Equipment[] = $item;
        return $this;
    }
    /**
     * Get Charge value
     * @return mixed|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param mixed $charge
     * @return \OtaInterface\Otaconnect\StructType\PricedEquip
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PricedEquip
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
