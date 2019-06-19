<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Surcharges StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on additional surcharges that may apply to the rental. | The efective date range for the surcharge information.
 * @subpackage Structs
 */
class Surcharges extends AbstractStructBase
{
    /**
     * The Surcharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Surcharge[]
     */
    public $Surcharge;
    /**
     * The Info
     * Meta informations extracted from the WSDL
     * - documentation: General information about the additional surcharges that may apply.
     * - minOccurs: 0
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for Surcharges
     * @uses Surcharges::setSurcharge()
     * @uses Surcharges::setInfo()
     * @param \OtaInterface\Otaconnect\StructType\Surcharge[] $surcharge
     * @param mixed $info
     */
    public function __construct(array $surcharge = array(), $info = null)
    {
        $this
            ->setSurcharge($surcharge)
            ->setInfo($info);
    }
    /**
     * Get Surcharge value
     * @return \OtaInterface\Otaconnect\StructType\Surcharge[]|null
     */
    public function getSurcharge()
    {
        return $this->Surcharge;
    }
    /**
     * Set Surcharge value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Surcharge[] $surcharge
     * @return \OtaInterface\Otaconnect\StructType\Surcharges
     */
    public function setSurcharge(array $surcharge = array())
    {
        foreach ($surcharge as $surchargesSurchargeItem) {
            // validation for constraint: itemType
            if (!$surchargesSurchargeItem instanceof \OtaInterface\Otaconnect\StructType\Surcharge) {
                throw new \InvalidArgumentException(sprintf('The Surcharge property can only contain items of \OtaInterface\Otaconnect\StructType\Surcharge, "%s" given', is_object($surchargesSurchargeItem) ? get_class($surchargesSurchargeItem) : gettype($surchargesSurchargeItem)), __LINE__);
            }
        }
        $this->Surcharge = $surcharge;
        return $this;
    }
    /**
     * Add item to Surcharge value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Surcharge $item
     * @return \OtaInterface\Otaconnect\StructType\Surcharges
     */
    public function addToSurcharge(\OtaInterface\Otaconnect\StructType\Surcharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Surcharge) {
            throw new \InvalidArgumentException(sprintf('The Surcharge property can only contain items of \OtaInterface\Otaconnect\StructType\Surcharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Surcharge[] = $item;
        return $this;
    }
    /**
     * Get Info value
     * @return mixed|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param mixed $info
     * @return \OtaInterface\Otaconnect\StructType\Surcharges
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Surcharges
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
