<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgRoomInventoryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes a type of room/cabin/apartment etc.
 * @subpackage Structs
 */
class PkgRoomInventoryType extends RoomStayCandidateType
{
    /**
     * The SupplementCharges
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SupplementCharges;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: A full description of the room/apartment etc.
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The MaxAdults
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of adults allowed in a unit of accommodation.
     * - use: optional
     * @var string
     */
    public $MaxAdults;
    /**
     * The CotQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of cots/cribs available in a room/apartment etc.
     * - use: optional
     * @var string
     */
    public $CotQuantity;
    /**
     * The FreeChildFlag
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether a free child is permitted in a room/apartment etc.
     * - use: optional
     * @var bool
     */
    public $FreeChildFlag;
    /**
     * Constructor method for PkgRoomInventoryType
     * @uses PkgRoomInventoryType::setSupplementCharges()
     * @uses PkgRoomInventoryType::setDescription()
     * @uses PkgRoomInventoryType::setMaxAdults()
     * @uses PkgRoomInventoryType::setCotQuantity()
     * @uses PkgRoomInventoryType::setFreeChildFlag()
     * @param mixed[] $supplementCharges
     * @param string $description
     * @param string $maxAdults
     * @param string $cotQuantity
     * @param bool $freeChildFlag
     */
    public function __construct(array $supplementCharges = array(), $description = null, $maxAdults = null, $cotQuantity = null, $freeChildFlag = null)
    {
        $this
            ->setSupplementCharges($supplementCharges)
            ->setDescription($description)
            ->setMaxAdults($maxAdults)
            ->setCotQuantity($cotQuantity)
            ->setFreeChildFlag($freeChildFlag);
    }
    /**
     * Get SupplementCharges value
     * @return mixed[]|null
     */
    public function getSupplementCharges()
    {
        return $this->SupplementCharges;
    }
    /**
     * Set SupplementCharges value
     * @throws \InvalidArgumentException
     * @param mixed[] $supplementCharges
     * @return \OtaInterface\Otaconnect\StructType\PkgRoomInventoryType
     */
    public function setSupplementCharges(array $supplementCharges = array())
    {
        foreach ($supplementCharges as $pkgRoomInventoryTypeSupplementChargesItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SupplementCharges property can only contain items of anyType, "%s" given', is_object($pkgRoomInventoryTypeSupplementChargesItem) ? get_class($pkgRoomInventoryTypeSupplementChargesItem) : gettype($pkgRoomInventoryTypeSupplementChargesItem)), __LINE__);
            }
        }
        $this->SupplementCharges = $supplementCharges;
        return $this;
    }
    /**
     * Add item to SupplementCharges value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\PkgRoomInventoryType
     */
    public function addToSupplementCharges($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SupplementCharges property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SupplementCharges[] = $item;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \OtaInterface\Otaconnect\StructType\PkgRoomInventoryType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get MaxAdults value
     * @return string|null
     */
    public function getMaxAdults()
    {
        return $this->MaxAdults;
    }
    /**
     * Set MaxAdults value
     * @param string $maxAdults
     * @return \OtaInterface\Otaconnect\StructType\PkgRoomInventoryType
     */
    public function setMaxAdults($maxAdults = null)
    {
        // validation for constraint: string
        if (!is_null($maxAdults) && !is_string($maxAdults)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxAdults)), __LINE__);
        }
        $this->MaxAdults = $maxAdults;
        return $this;
    }
    /**
     * Get CotQuantity value
     * @return string|null
     */
    public function getCotQuantity()
    {
        return $this->CotQuantity;
    }
    /**
     * Set CotQuantity value
     * @param string $cotQuantity
     * @return \OtaInterface\Otaconnect\StructType\PkgRoomInventoryType
     */
    public function setCotQuantity($cotQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($cotQuantity) && !is_string($cotQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cotQuantity)), __LINE__);
        }
        $this->CotQuantity = $cotQuantity;
        return $this;
    }
    /**
     * Get FreeChildFlag value
     * @return bool|null
     */
    public function getFreeChildFlag()
    {
        return $this->FreeChildFlag;
    }
    /**
     * Set FreeChildFlag value
     * @param bool $freeChildFlag
     * @return \OtaInterface\Otaconnect\StructType\PkgRoomInventoryType
     */
    public function setFreeChildFlag($freeChildFlag = null)
    {
        // validation for constraint: boolean
        if (!is_null($freeChildFlag) && !is_bool($freeChildFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($freeChildFlag)), __LINE__);
        }
        $this->FreeChildFlag = $freeChildFlag;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PkgRoomInventoryType
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
