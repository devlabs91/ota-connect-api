<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BlockDescriptions StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of free form information about the inventory block.
 * @subpackage Structs
 */
class BlockDescriptions extends AbstractStructBase
{
    /**
     * The BlockDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\BlockDescription[]
     */
    public $BlockDescription;
    /**
     * Constructor method for BlockDescriptions
     * @uses BlockDescriptions::setBlockDescription()
     * @param \OtaInterface\Otaconnect\StructType\BlockDescription[] $blockDescription
     */
    public function __construct(array $blockDescription = array())
    {
        $this
            ->setBlockDescription($blockDescription);
    }
    /**
     * Get BlockDescription value
     * @return \OtaInterface\Otaconnect\StructType\BlockDescription[]|null
     */
    public function getBlockDescription()
    {
        return $this->BlockDescription;
    }
    /**
     * Set BlockDescription value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\BlockDescription[] $blockDescription
     * @return \OtaInterface\Otaconnect\StructType\BlockDescriptions
     */
    public function setBlockDescription(array $blockDescription = array())
    {
        foreach ($blockDescription as $blockDescriptionsBlockDescriptionItem) {
            // validation for constraint: itemType
            if (!$blockDescriptionsBlockDescriptionItem instanceof \OtaInterface\Otaconnect\StructType\BlockDescription) {
                throw new \InvalidArgumentException(sprintf('The BlockDescription property can only contain items of \OtaInterface\Otaconnect\StructType\BlockDescription, "%s" given', is_object($blockDescriptionsBlockDescriptionItem) ? get_class($blockDescriptionsBlockDescriptionItem) : gettype($blockDescriptionsBlockDescriptionItem)), __LINE__);
            }
        }
        $this->BlockDescription = $blockDescription;
        return $this;
    }
    /**
     * Add item to BlockDescription value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\BlockDescription $item
     * @return \OtaInterface\Otaconnect\StructType\BlockDescriptions
     */
    public function addToBlockDescription(\OtaInterface\Otaconnect\StructType\BlockDescription $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\BlockDescription) {
            throw new \InvalidArgumentException(sprintf('The BlockDescription property can only contain items of \OtaInterface\Otaconnect\StructType\BlockDescription, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BlockDescription[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\BlockDescriptions
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
