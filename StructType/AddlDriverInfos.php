<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddlDriverInfos StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of descriptions about the different requirements related to additional drivers. | The effective and discontinue dates for the additional driver information. | The charge for an additional driver.
 * @subpackage Structs
 */
class AddlDriverInfos extends AbstractStructBase
{
    /**
     * The AddlDriverInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\AddlDriverInfo[]
     */
    public $AddlDriverInfo;
    /**
     * The Vehicles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Vehicles
     */
    public $Vehicles;
    /**
     * The ChargeType
     * Meta informations extracted from the WSDL
     * - documentation: To specify if the charge is per rental, day, etc. Refer to OpenTravel Charge Type code list (CHG).
     * - use: optional
     * @var string
     */
    public $ChargeType;
    /**
     * Constructor method for AddlDriverInfos
     * @uses AddlDriverInfos::setAddlDriverInfo()
     * @uses AddlDriverInfos::setVehicles()
     * @uses AddlDriverInfos::setChargeType()
     * @param \OtaInterface\Otaconnect\StructType\AddlDriverInfo[] $addlDriverInfo
     * @param \OtaInterface\Otaconnect\StructType\Vehicles $vehicles
     * @param string $chargeType
     */
    public function __construct(array $addlDriverInfo = array(), \OtaInterface\Otaconnect\StructType\Vehicles $vehicles = null, $chargeType = null)
    {
        $this
            ->setAddlDriverInfo($addlDriverInfo)
            ->setVehicles($vehicles)
            ->setChargeType($chargeType);
    }
    /**
     * Get AddlDriverInfo value
     * @return \OtaInterface\Otaconnect\StructType\AddlDriverInfo[]|null
     */
    public function getAddlDriverInfo()
    {
        return $this->AddlDriverInfo;
    }
    /**
     * Set AddlDriverInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AddlDriverInfo[] $addlDriverInfo
     * @return \OtaInterface\Otaconnect\StructType\AddlDriverInfos
     */
    public function setAddlDriverInfo(array $addlDriverInfo = array())
    {
        foreach ($addlDriverInfo as $addlDriverInfosAddlDriverInfoItem) {
            // validation for constraint: itemType
            if (!$addlDriverInfosAddlDriverInfoItem instanceof \OtaInterface\Otaconnect\StructType\AddlDriverInfo) {
                throw new \InvalidArgumentException(sprintf('The AddlDriverInfo property can only contain items of \OtaInterface\Otaconnect\StructType\AddlDriverInfo, "%s" given', is_object($addlDriverInfosAddlDriverInfoItem) ? get_class($addlDriverInfosAddlDriverInfoItem) : gettype($addlDriverInfosAddlDriverInfoItem)), __LINE__);
            }
        }
        $this->AddlDriverInfo = $addlDriverInfo;
        return $this;
    }
    /**
     * Add item to AddlDriverInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AddlDriverInfo $item
     * @return \OtaInterface\Otaconnect\StructType\AddlDriverInfos
     */
    public function addToAddlDriverInfo(\OtaInterface\Otaconnect\StructType\AddlDriverInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\AddlDriverInfo) {
            throw new \InvalidArgumentException(sprintf('The AddlDriverInfo property can only contain items of \OtaInterface\Otaconnect\StructType\AddlDriverInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddlDriverInfo[] = $item;
        return $this;
    }
    /**
     * Get Vehicles value
     * @return \OtaInterface\Otaconnect\StructType\Vehicles|null
     */
    public function getVehicles()
    {
        return $this->Vehicles;
    }
    /**
     * Set Vehicles value
     * @param \OtaInterface\Otaconnect\StructType\Vehicles $vehicles
     * @return \OtaInterface\Otaconnect\StructType\AddlDriverInfos
     */
    public function setVehicles(\OtaInterface\Otaconnect\StructType\Vehicles $vehicles = null)
    {
        $this->Vehicles = $vehicles;
        return $this;
    }
    /**
     * Get ChargeType value
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->ChargeType;
    }
    /**
     * Set ChargeType value
     * @param string $chargeType
     * @return \OtaInterface\Otaconnect\StructType\AddlDriverInfos
     */
    public function setChargeType($chargeType = null)
    {
        // validation for constraint: string
        if (!is_null($chargeType) && !is_string($chargeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeType)), __LINE__);
        }
        $this->ChargeType = $chargeType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AddlDriverInfos
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
