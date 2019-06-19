<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileRPHs StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of ProfileRPH.
 * @subpackage Structs
 */
class ProfileRPHs extends AbstractStructBase
{
    /**
     * The ProfileRPH
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\ProfileRPH[]
     */
    public $ProfileRPH;
    /**
     * Constructor method for ProfileRPHs
     * @uses ProfileRPHs::setProfileRPH()
     * @param \OtaInterface\Otaconnect\StructType\ProfileRPH[] $profileRPH
     */
    public function __construct(array $profileRPH = array())
    {
        $this
            ->setProfileRPH($profileRPH);
    }
    /**
     * Get ProfileRPH value
     * @return \OtaInterface\Otaconnect\StructType\ProfileRPH[]|null
     */
    public function getProfileRPH()
    {
        return $this->ProfileRPH;
    }
    /**
     * Set ProfileRPH value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ProfileRPH[] $profileRPH
     * @return \OtaInterface\Otaconnect\StructType\ProfileRPHs
     */
    public function setProfileRPH(array $profileRPH = array())
    {
        foreach ($profileRPH as $profileRPHsProfileRPHItem) {
            // validation for constraint: itemType
            if (!$profileRPHsProfileRPHItem instanceof \OtaInterface\Otaconnect\StructType\ProfileRPH) {
                throw new \InvalidArgumentException(sprintf('The ProfileRPH property can only contain items of \OtaInterface\Otaconnect\StructType\ProfileRPH, "%s" given', is_object($profileRPHsProfileRPHItem) ? get_class($profileRPHsProfileRPHItem) : gettype($profileRPHsProfileRPHItem)), __LINE__);
            }
        }
        $this->ProfileRPH = $profileRPH;
        return $this;
    }
    /**
     * Add item to ProfileRPH value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ProfileRPH $item
     * @return \OtaInterface\Otaconnect\StructType\ProfileRPHs
     */
    public function addToProfileRPH(\OtaInterface\Otaconnect\StructType\ProfileRPH $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\ProfileRPH) {
            throw new \InvalidArgumentException(sprintf('The ProfileRPH property can only contain items of \OtaInterface\Otaconnect\StructType\ProfileRPH, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProfileRPH[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\ProfileRPHs
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
