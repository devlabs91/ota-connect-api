<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for URLsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The URLs class identifies URI information.
 * @subpackage Structs
 */
class URLsType extends AbstractStructBase
{
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\URL[]
     */
    public $URL;
    /**
     * Constructor method for URLsType
     * @uses URLsType::setURL()
     * @param \OtaInterface\Otaconnect\StructType\URL[] $uRL
     */
    public function __construct(array $uRL = array())
    {
        $this
            ->setURL($uRL);
    }
    /**
     * Get URL value
     * @return \OtaInterface\Otaconnect\StructType\URL[]|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\URL[] $uRL
     * @return \OtaInterface\Otaconnect\StructType\URLsType
     */
    public function setURL(array $uRL = array())
    {
        foreach ($uRL as $uRLsTypeURLItem) {
            // validation for constraint: itemType
            if (!$uRLsTypeURLItem instanceof \OtaInterface\Otaconnect\StructType\URL) {
                throw new \InvalidArgumentException(sprintf('The URL property can only contain items of \OtaInterface\Otaconnect\StructType\URL, "%s" given', is_object($uRLsTypeURLItem) ? get_class($uRLsTypeURLItem) : gettype($uRLsTypeURLItem)), __LINE__);
            }
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Add item to URL value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\URL $item
     * @return \OtaInterface\Otaconnect\StructType\URLsType
     */
    public function addToURL(\OtaInterface\Otaconnect\StructType\URL $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\URL) {
            throw new \InvalidArgumentException(sprintf('The URL property can only contain items of \OtaInterface\Otaconnect\StructType\URL, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->URL[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\URLsType
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
