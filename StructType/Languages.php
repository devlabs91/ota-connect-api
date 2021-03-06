<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Languages StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of language details pertaining to the hotel.
 * @subpackage Structs
 */
class Languages extends AbstractStructBase
{
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * @var \OtaInterface\Otaconnect\StructType\Language[]
     */
    public $Language;
    /**
     * Constructor method for Languages
     * @uses Languages::setLanguage()
     * @param \OtaInterface\Otaconnect\StructType\Language[] $language
     */
    public function __construct(array $language = array())
    {
        $this
            ->setLanguage($language);
    }
    /**
     * Get Language value
     * @return \OtaInterface\Otaconnect\StructType\Language[]|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Language[] $language
     * @return \OtaInterface\Otaconnect\StructType\Languages
     */
    public function setLanguage(array $language = array())
    {
        foreach ($language as $languagesLanguageItem) {
            // validation for constraint: itemType
            if (!$languagesLanguageItem instanceof \OtaInterface\Otaconnect\StructType\Language) {
                throw new \InvalidArgumentException(sprintf('The Language property can only contain items of \OtaInterface\Otaconnect\StructType\Language, "%s" given', is_object($languagesLanguageItem) ? get_class($languagesLanguageItem) : gettype($languagesLanguageItem)), __LINE__);
            }
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Add item to Language value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Language $item
     * @return \OtaInterface\Otaconnect\StructType\Languages
     */
    public function addToLanguage(\OtaInterface\Otaconnect\StructType\Language $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Language) {
            throw new \InvalidArgumentException(sprintf('The Language property can only contain items of \OtaInterface\Otaconnect\StructType\Language, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Language[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Languages
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
