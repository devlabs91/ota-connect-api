<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtrasInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes an optional service which is not included in the standard package but may be booked in addition. | Selection type and rule code for an extra.
 * @subpackage Structs
 */
class ExtrasInfoType extends ExtrasCoreType
{
    /**
     * The Criteria
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Criteria
     */
    public $Criteria;
    /**
     * The Periods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Periods
     */
    public $Periods;
    /**
     * The AdditionalInfoPrompt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AdditionalInfoPrompt[]
     */
    public $AdditionalInfoPrompt;
    /**
     * The ParentExtras
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ParentExtras
     */
    public $ParentExtras;
    /**
     * The ExtraLocationInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ExtraLocationInfo[]
     */
    public $ExtraLocationInfo;
    /**
     * The ApplyTo
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ApplyTo;
    /**
     * Constructor method for ExtrasInfoType
     * @uses ExtrasInfoType::setCriteria()
     * @uses ExtrasInfoType::setPeriods()
     * @uses ExtrasInfoType::setAdditionalInfoPrompt()
     * @uses ExtrasInfoType::setParentExtras()
     * @uses ExtrasInfoType::setExtraLocationInfo()
     * @uses ExtrasInfoType::setApplyTo()
     * @param \OtaInterface\Otaconnect\StructType\Criteria $criteria
     * @param \OtaInterface\Otaconnect\StructType\Periods $periods
     * @param \OtaInterface\Otaconnect\StructType\AdditionalInfoPrompt[] $additionalInfoPrompt
     * @param \OtaInterface\Otaconnect\StructType\ParentExtras $parentExtras
     * @param \OtaInterface\Otaconnect\StructType\ExtraLocationInfo[] $extraLocationInfo
     * @param string $applyTo
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\Criteria $criteria = null, \OtaInterface\Otaconnect\StructType\Periods $periods = null, array $additionalInfoPrompt = array(), \OtaInterface\Otaconnect\StructType\ParentExtras $parentExtras = null, array $extraLocationInfo = array(), $applyTo = null)
    {
        $this
            ->setCriteria($criteria)
            ->setPeriods($periods)
            ->setAdditionalInfoPrompt($additionalInfoPrompt)
            ->setParentExtras($parentExtras)
            ->setExtraLocationInfo($extraLocationInfo)
            ->setApplyTo($applyTo);
    }
    /**
     * Get Criteria value
     * @return \OtaInterface\Otaconnect\StructType\Criteria|null
     */
    public function getCriteria()
    {
        return $this->Criteria;
    }
    /**
     * Set Criteria value
     * @param \OtaInterface\Otaconnect\StructType\Criteria $criteria
     * @return \OtaInterface\Otaconnect\StructType\ExtrasInfoType
     */
    public function setCriteria(\OtaInterface\Otaconnect\StructType\Criteria $criteria = null)
    {
        $this->Criteria = $criteria;
        return $this;
    }
    /**
     * Get Periods value
     * @return \OtaInterface\Otaconnect\StructType\Periods|null
     */
    public function getPeriods()
    {
        return $this->Periods;
    }
    /**
     * Set Periods value
     * @param \OtaInterface\Otaconnect\StructType\Periods $periods
     * @return \OtaInterface\Otaconnect\StructType\ExtrasInfoType
     */
    public function setPeriods(\OtaInterface\Otaconnect\StructType\Periods $periods = null)
    {
        $this->Periods = $periods;
        return $this;
    }
    /**
     * Get AdditionalInfoPrompt value
     * @return \OtaInterface\Otaconnect\StructType\AdditionalInfoPrompt[]|null
     */
    public function getAdditionalInfoPrompt()
    {
        return $this->AdditionalInfoPrompt;
    }
    /**
     * Set AdditionalInfoPrompt value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AdditionalInfoPrompt[] $additionalInfoPrompt
     * @return \OtaInterface\Otaconnect\StructType\ExtrasInfoType
     */
    public function setAdditionalInfoPrompt(array $additionalInfoPrompt = array())
    {
        foreach ($additionalInfoPrompt as $extrasInfoTypeAdditionalInfoPromptItem) {
            // validation for constraint: itemType
            if (!$extrasInfoTypeAdditionalInfoPromptItem instanceof \OtaInterface\Otaconnect\StructType\AdditionalInfoPrompt) {
                throw new \InvalidArgumentException(sprintf('The AdditionalInfoPrompt property can only contain items of \OtaInterface\Otaconnect\StructType\AdditionalInfoPrompt, "%s" given', is_object($extrasInfoTypeAdditionalInfoPromptItem) ? get_class($extrasInfoTypeAdditionalInfoPromptItem) : gettype($extrasInfoTypeAdditionalInfoPromptItem)), __LINE__);
            }
        }
        $this->AdditionalInfoPrompt = $additionalInfoPrompt;
        return $this;
    }
    /**
     * Add item to AdditionalInfoPrompt value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AdditionalInfoPrompt $item
     * @return \OtaInterface\Otaconnect\StructType\ExtrasInfoType
     */
    public function addToAdditionalInfoPrompt(\OtaInterface\Otaconnect\StructType\AdditionalInfoPrompt $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\AdditionalInfoPrompt) {
            throw new \InvalidArgumentException(sprintf('The AdditionalInfoPrompt property can only contain items of \OtaInterface\Otaconnect\StructType\AdditionalInfoPrompt, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalInfoPrompt[] = $item;
        return $this;
    }
    /**
     * Get ParentExtras value
     * @return \OtaInterface\Otaconnect\StructType\ParentExtras|null
     */
    public function getParentExtras()
    {
        return $this->ParentExtras;
    }
    /**
     * Set ParentExtras value
     * @param \OtaInterface\Otaconnect\StructType\ParentExtras $parentExtras
     * @return \OtaInterface\Otaconnect\StructType\ExtrasInfoType
     */
    public function setParentExtras(\OtaInterface\Otaconnect\StructType\ParentExtras $parentExtras = null)
    {
        $this->ParentExtras = $parentExtras;
        return $this;
    }
    /**
     * Get ExtraLocationInfo value
     * @return \OtaInterface\Otaconnect\StructType\ExtraLocationInfo[]|null
     */
    public function getExtraLocationInfo()
    {
        return $this->ExtraLocationInfo;
    }
    /**
     * Set ExtraLocationInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ExtraLocationInfo[] $extraLocationInfo
     * @return \OtaInterface\Otaconnect\StructType\ExtrasInfoType
     */
    public function setExtraLocationInfo(array $extraLocationInfo = array())
    {
        foreach ($extraLocationInfo as $extrasInfoTypeExtraLocationInfoItem) {
            // validation for constraint: itemType
            if (!$extrasInfoTypeExtraLocationInfoItem instanceof \OtaInterface\Otaconnect\StructType\ExtraLocationInfo) {
                throw new \InvalidArgumentException(sprintf('The ExtraLocationInfo property can only contain items of \OtaInterface\Otaconnect\StructType\ExtraLocationInfo, "%s" given', is_object($extrasInfoTypeExtraLocationInfoItem) ? get_class($extrasInfoTypeExtraLocationInfoItem) : gettype($extrasInfoTypeExtraLocationInfoItem)), __LINE__);
            }
        }
        $this->ExtraLocationInfo = $extraLocationInfo;
        return $this;
    }
    /**
     * Add item to ExtraLocationInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ExtraLocationInfo $item
     * @return \OtaInterface\Otaconnect\StructType\ExtrasInfoType
     */
    public function addToExtraLocationInfo(\OtaInterface\Otaconnect\StructType\ExtraLocationInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\ExtraLocationInfo) {
            throw new \InvalidArgumentException(sprintf('The ExtraLocationInfo property can only contain items of \OtaInterface\Otaconnect\StructType\ExtraLocationInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExtraLocationInfo[] = $item;
        return $this;
    }
    /**
     * Get ApplyTo value
     * @return string|null
     */
    public function getApplyTo()
    {
        return $this->ApplyTo;
    }
    /**
     * Set ApplyTo value
     * @param string $applyTo
     * @return \OtaInterface\Otaconnect\StructType\ExtrasInfoType
     */
    public function setApplyTo($applyTo = null)
    {
        // validation for constraint: string
        if (!is_null($applyTo) && !is_string($applyTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applyTo)), __LINE__);
        }
        $this->ApplyTo = $applyTo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\ExtrasInfoType
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
