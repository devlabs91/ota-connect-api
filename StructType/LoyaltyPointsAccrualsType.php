<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyPointsAccrualsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of SelectedLoyalty classes that are used to report earned bonuses.
 * @subpackage Structs
 */
class LoyaltyPointsAccrualsType extends AbstractStructBase
{
    /**
     * The SelectedLoyalty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\SelectedLoyalty[]
     */
    public $SelectedLoyalty;
    /**
     * Constructor method for LoyaltyPointsAccrualsType
     * @uses LoyaltyPointsAccrualsType::setSelectedLoyalty()
     * @param \OtaInterface\Otaconnect\StructType\SelectedLoyalty[] $selectedLoyalty
     */
    public function __construct(array $selectedLoyalty = array())
    {
        $this
            ->setSelectedLoyalty($selectedLoyalty);
    }
    /**
     * Get SelectedLoyalty value
     * @return \OtaInterface\Otaconnect\StructType\SelectedLoyalty[]|null
     */
    public function getSelectedLoyalty()
    {
        return $this->SelectedLoyalty;
    }
    /**
     * Set SelectedLoyalty value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\SelectedLoyalty[] $selectedLoyalty
     * @return \OtaInterface\Otaconnect\StructType\LoyaltyPointsAccrualsType
     */
    public function setSelectedLoyalty(array $selectedLoyalty = array())
    {
        foreach ($selectedLoyalty as $loyaltyPointsAccrualsTypeSelectedLoyaltyItem) {
            // validation for constraint: itemType
            if (!$loyaltyPointsAccrualsTypeSelectedLoyaltyItem instanceof \OtaInterface\Otaconnect\StructType\SelectedLoyalty) {
                throw new \InvalidArgumentException(sprintf('The SelectedLoyalty property can only contain items of \OtaInterface\Otaconnect\StructType\SelectedLoyalty, "%s" given', is_object($loyaltyPointsAccrualsTypeSelectedLoyaltyItem) ? get_class($loyaltyPointsAccrualsTypeSelectedLoyaltyItem) : gettype($loyaltyPointsAccrualsTypeSelectedLoyaltyItem)), __LINE__);
            }
        }
        $this->SelectedLoyalty = $selectedLoyalty;
        return $this;
    }
    /**
     * Add item to SelectedLoyalty value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\SelectedLoyalty $item
     * @return \OtaInterface\Otaconnect\StructType\LoyaltyPointsAccrualsType
     */
    public function addToSelectedLoyalty(\OtaInterface\Otaconnect\StructType\SelectedLoyalty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\SelectedLoyalty) {
            throw new \InvalidArgumentException(sprintf('The SelectedLoyalty property can only contain items of \OtaInterface\Otaconnect\StructType\SelectedLoyalty, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SelectedLoyalty[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\LoyaltyPointsAccrualsType
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
