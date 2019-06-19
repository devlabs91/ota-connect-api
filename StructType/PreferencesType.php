<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Needs of the traveler related to travel experiences. | Allows for control of the sharing of data between parties.
 * @subpackage Structs
 */
class PreferencesType extends AbstractStructBase
{
    /**
     * The PrefCollection
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\PrefCollection[]
     */
    public $PrefCollection;
    /**
     * Constructor method for PreferencesType
     * @uses PreferencesType::setPrefCollection()
     * @param \OtaInterface\Otaconnect\StructType\PrefCollection[] $prefCollection
     */
    public function __construct(array $prefCollection = array())
    {
        $this
            ->setPrefCollection($prefCollection);
    }
    /**
     * Get PrefCollection value
     * @return \OtaInterface\Otaconnect\StructType\PrefCollection[]|null
     */
    public function getPrefCollection()
    {
        return $this->PrefCollection;
    }
    /**
     * Set PrefCollection value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PrefCollection[] $prefCollection
     * @return \OtaInterface\Otaconnect\StructType\PreferencesType
     */
    public function setPrefCollection(array $prefCollection = array())
    {
        foreach ($prefCollection as $preferencesTypePrefCollectionItem) {
            // validation for constraint: itemType
            if (!$preferencesTypePrefCollectionItem instanceof \OtaInterface\Otaconnect\StructType\PrefCollection) {
                throw new \InvalidArgumentException(sprintf('The PrefCollection property can only contain items of \OtaInterface\Otaconnect\StructType\PrefCollection, "%s" given', is_object($preferencesTypePrefCollectionItem) ? get_class($preferencesTypePrefCollectionItem) : gettype($preferencesTypePrefCollectionItem)), __LINE__);
            }
        }
        $this->PrefCollection = $prefCollection;
        return $this;
    }
    /**
     * Add item to PrefCollection value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PrefCollection $item
     * @return \OtaInterface\Otaconnect\StructType\PreferencesType
     */
    public function addToPrefCollection(\OtaInterface\Otaconnect\StructType\PrefCollection $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\PrefCollection) {
            throw new \InvalidArgumentException(sprintf('The PrefCollection property can only contain items of \OtaInterface\Otaconnect\StructType\PrefCollection, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PrefCollection[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PreferencesType
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
