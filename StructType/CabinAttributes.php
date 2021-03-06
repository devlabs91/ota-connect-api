<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinAttributes StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of category-level cabin attributes. | Collection of cabin attributes.
 * @subpackage Structs
 */
class CabinAttributes extends AbstractStructBase
{
    /**
     * The CabinAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\CabinAttribute[]
     */
    public $CabinAttribute;
    /**
     * Constructor method for CabinAttributes
     * @uses CabinAttributes::setCabinAttribute()
     * @param \OtaInterface\Otaconnect\StructType\CabinAttribute[] $cabinAttribute
     */
    public function __construct(array $cabinAttribute = array())
    {
        $this
            ->setCabinAttribute($cabinAttribute);
    }
    /**
     * Get CabinAttribute value
     * @return \OtaInterface\Otaconnect\StructType\CabinAttribute[]|null
     */
    public function getCabinAttribute()
    {
        return $this->CabinAttribute;
    }
    /**
     * Set CabinAttribute value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CabinAttribute[] $cabinAttribute
     * @return \OtaInterface\Otaconnect\StructType\CabinAttributes
     */
    public function setCabinAttribute(array $cabinAttribute = array())
    {
        foreach ($cabinAttribute as $cabinAttributesCabinAttributeItem) {
            // validation for constraint: itemType
            if (!$cabinAttributesCabinAttributeItem instanceof \OtaInterface\Otaconnect\StructType\CabinAttribute) {
                throw new \InvalidArgumentException(sprintf('The CabinAttribute property can only contain items of \OtaInterface\Otaconnect\StructType\CabinAttribute, "%s" given', is_object($cabinAttributesCabinAttributeItem) ? get_class($cabinAttributesCabinAttributeItem) : gettype($cabinAttributesCabinAttributeItem)), __LINE__);
            }
        }
        $this->CabinAttribute = $cabinAttribute;
        return $this;
    }
    /**
     * Add item to CabinAttribute value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CabinAttribute $item
     * @return \OtaInterface\Otaconnect\StructType\CabinAttributes
     */
    public function addToCabinAttribute(\OtaInterface\Otaconnect\StructType\CabinAttribute $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\CabinAttribute) {
            throw new \InvalidArgumentException(sprintf('The CabinAttribute property can only contain items of \OtaInterface\Otaconnect\StructType\CabinAttribute, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CabinAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\CabinAttributes
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
