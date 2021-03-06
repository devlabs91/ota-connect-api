<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecipientInfosType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about one or more recipients.
 * @subpackage Structs
 */
class RecipientInfosType extends AbstractStructBase
{
    /**
     * The RecipientInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\RecipientInfo[]
     */
    public $RecipientInfo;
    /**
     * Constructor method for RecipientInfosType
     * @uses RecipientInfosType::setRecipientInfo()
     * @param \OtaInterface\Otaconnect\StructType\RecipientInfo[] $recipientInfo
     */
    public function __construct(array $recipientInfo = array())
    {
        $this
            ->setRecipientInfo($recipientInfo);
    }
    /**
     * Get RecipientInfo value
     * @return \OtaInterface\Otaconnect\StructType\RecipientInfo[]|null
     */
    public function getRecipientInfo()
    {
        return $this->RecipientInfo;
    }
    /**
     * Set RecipientInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RecipientInfo[] $recipientInfo
     * @return \OtaInterface\Otaconnect\StructType\RecipientInfosType
     */
    public function setRecipientInfo(array $recipientInfo = array())
    {
        foreach ($recipientInfo as $recipientInfosTypeRecipientInfoItem) {
            // validation for constraint: itemType
            if (!$recipientInfosTypeRecipientInfoItem instanceof \OtaInterface\Otaconnect\StructType\RecipientInfo) {
                throw new \InvalidArgumentException(sprintf('The RecipientInfo property can only contain items of \OtaInterface\Otaconnect\StructType\RecipientInfo, "%s" given', is_object($recipientInfosTypeRecipientInfoItem) ? get_class($recipientInfosTypeRecipientInfoItem) : gettype($recipientInfosTypeRecipientInfoItem)), __LINE__);
            }
        }
        $this->RecipientInfo = $recipientInfo;
        return $this;
    }
    /**
     * Add item to RecipientInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RecipientInfo $item
     * @return \OtaInterface\Otaconnect\StructType\RecipientInfosType
     */
    public function addToRecipientInfo(\OtaInterface\Otaconnect\StructType\RecipientInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\RecipientInfo) {
            throw new \InvalidArgumentException(sprintf('The RecipientInfo property can only contain items of \OtaInterface\Otaconnect\StructType\RecipientInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RecipientInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RecipientInfosType
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
