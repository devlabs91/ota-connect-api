<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehPrefs StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
 * @subpackage Structs
 */
class VehPrefs extends AbstractStructBase
{
    /**
     * The VehPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * @var \OtaInterface\Otaconnect\StructType\VehPref[]
     */
    public $VehPref;
    /**
     * Constructor method for VehPrefs
     * @uses VehPrefs::setVehPref()
     * @param \OtaInterface\Otaconnect\StructType\VehPref[] $vehPref
     */
    public function __construct(array $vehPref = array())
    {
        $this
            ->setVehPref($vehPref);
    }
    /**
     * Get VehPref value
     * @return \OtaInterface\Otaconnect\StructType\VehPref[]|null
     */
    public function getVehPref()
    {
        return $this->VehPref;
    }
    /**
     * Set VehPref value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\VehPref[] $vehPref
     * @return \OtaInterface\Otaconnect\StructType\VehPrefs
     */
    public function setVehPref(array $vehPref = array())
    {
        foreach ($vehPref as $vehPrefsVehPrefItem) {
            // validation for constraint: itemType
            if (!$vehPrefsVehPrefItem instanceof \OtaInterface\Otaconnect\StructType\VehPref) {
                throw new \InvalidArgumentException(sprintf('The VehPref property can only contain items of \OtaInterface\Otaconnect\StructType\VehPref, "%s" given', is_object($vehPrefsVehPrefItem) ? get_class($vehPrefsVehPrefItem) : gettype($vehPrefsVehPrefItem)), __LINE__);
            }
        }
        $this->VehPref = $vehPref;
        return $this;
    }
    /**
     * Add item to VehPref value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\VehPref $item
     * @return \OtaInterface\Otaconnect\StructType\VehPrefs
     */
    public function addToVehPref(\OtaInterface\Otaconnect\StructType\VehPref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\VehPref) {
            throw new \InvalidArgumentException(sprintf('The VehPref property can only contain items of \OtaInterface\Otaconnect\StructType\VehPref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehPref[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\VehPrefs
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
