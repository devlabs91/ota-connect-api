<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for POS_Type StructType
 * Meta informations extracted from the WSDL
 * - documentation: Point of Sale (POS) identifies the party or connection channel making the request.
 * @subpackage Structs
 */
class POS_Type extends AbstractStructBase
{
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - documentation: This holds the details about the requestor. It may be repeated to also accommodate the delivery systems.
     * - maxOccurs: 10
     * @var mixed[]
     */
    public $Source;
    /**
     * Constructor method for POS_Type
     * @uses POS_Type::setSource()
     * @param mixed[] $source
     */
    public function __construct(array $source = array())
    {
        $this
            ->setSource($source);
    }
    /**
     * Get Source value
     * @return mixed[]|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @throws \InvalidArgumentException
     * @param mixed[] $source
     * @return \OtaInterface\Otaconnect\StructType\POS_Type
     */
    public function setSource(array $source = array())
    {
        foreach ($source as $pOS_TypeSourceItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Source property can only contain items of anyType, "%s" given', is_object($pOS_TypeSourceItem) ? get_class($pOS_TypeSourceItem) : gettype($pOS_TypeSourceItem)), __LINE__);
            }
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Add item to Source value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\POS_Type
     */
    public function addToSource($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Source property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Source[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\POS_Type
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
