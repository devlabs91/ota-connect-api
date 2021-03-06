<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MiscellaneousCharges StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on additional miscellaneous charges that may apply to the rental.
 * @subpackage Structs
 */
class MiscellaneousCharges extends AbstractStructBase
{
    /**
     * The MiscellaneousCharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MiscellaneousCharge[]
     */
    public $MiscellaneousCharge;
    /**
     * The Info
     * Meta informations extracted from the WSDL
     * - documentation: General information about the additional miscellaneous charges that may apply.
     * - minOccurs: 0
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for MiscellaneousCharges
     * @uses MiscellaneousCharges::setMiscellaneousCharge()
     * @uses MiscellaneousCharges::setInfo()
     * @param \OtaInterface\Otaconnect\StructType\MiscellaneousCharge[] $miscellaneousCharge
     * @param mixed $info
     */
    public function __construct(array $miscellaneousCharge = array(), $info = null)
    {
        $this
            ->setMiscellaneousCharge($miscellaneousCharge)
            ->setInfo($info);
    }
    /**
     * Get MiscellaneousCharge value
     * @return \OtaInterface\Otaconnect\StructType\MiscellaneousCharge[]|null
     */
    public function getMiscellaneousCharge()
    {
        return $this->MiscellaneousCharge;
    }
    /**
     * Set MiscellaneousCharge value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\MiscellaneousCharge[] $miscellaneousCharge
     * @return \OtaInterface\Otaconnect\StructType\MiscellaneousCharges
     */
    public function setMiscellaneousCharge(array $miscellaneousCharge = array())
    {
        foreach ($miscellaneousCharge as $miscellaneousChargesMiscellaneousChargeItem) {
            // validation for constraint: itemType
            if (!$miscellaneousChargesMiscellaneousChargeItem instanceof \OtaInterface\Otaconnect\StructType\MiscellaneousCharge) {
                throw new \InvalidArgumentException(sprintf('The MiscellaneousCharge property can only contain items of \OtaInterface\Otaconnect\StructType\MiscellaneousCharge, "%s" given', is_object($miscellaneousChargesMiscellaneousChargeItem) ? get_class($miscellaneousChargesMiscellaneousChargeItem) : gettype($miscellaneousChargesMiscellaneousChargeItem)), __LINE__);
            }
        }
        $this->MiscellaneousCharge = $miscellaneousCharge;
        return $this;
    }
    /**
     * Add item to MiscellaneousCharge value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\MiscellaneousCharge $item
     * @return \OtaInterface\Otaconnect\StructType\MiscellaneousCharges
     */
    public function addToMiscellaneousCharge(\OtaInterface\Otaconnect\StructType\MiscellaneousCharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\MiscellaneousCharge) {
            throw new \InvalidArgumentException(sprintf('The MiscellaneousCharge property can only contain items of \OtaInterface\Otaconnect\StructType\MiscellaneousCharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MiscellaneousCharge[] = $item;
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
     * @return \OtaInterface\Otaconnect\StructType\MiscellaneousCharges
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
     * @return \OtaInterface\Otaconnect\StructType\MiscellaneousCharges
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
