<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceRequestInformation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies pricing source, if negotiated fares are requested and if it is a reprice request.
 * @subpackage Structs
 */
class PriceRequestInformation extends PriceRequestInformationType
{
    /**
     * The FareRestrictionPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\FareRestrictionPref[]
     */
    public $FareRestrictionPref;
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify tax information which may be used to override the taxes in the pricing system.
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Tax;
    /**
     * The DiscountPricing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\DiscountPricing
     */
    public $DiscountPricing;
    /**
     * The SegmentOverride
     * Meta informations extracted from the WSDL
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\SegmentOverride[]
     */
    public $SegmentOverride;
    /**
     * The Account
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Account[]
     */
    public $Account;
    /**
     * The LocationRequirement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\LocationRequirement
     */
    public $LocationRequirement;
    /**
     * Constructor method for PriceRequestInformation
     * @uses PriceRequestInformation::setFareRestrictionPref()
     * @uses PriceRequestInformation::setTax()
     * @uses PriceRequestInformation::setDiscountPricing()
     * @uses PriceRequestInformation::setSegmentOverride()
     * @uses PriceRequestInformation::setAccount()
     * @uses PriceRequestInformation::setLocationRequirement()
     * @param \OtaInterface\Otaconnect\StructType\FareRestrictionPref[] $fareRestrictionPref
     * @param mixed[] $tax
     * @param \OtaInterface\Otaconnect\StructType\DiscountPricing $discountPricing
     * @param \OtaInterface\Otaconnect\StructType\SegmentOverride[] $segmentOverride
     * @param \OtaInterface\Otaconnect\StructType\Account[] $account
     * @param \OtaInterface\Otaconnect\StructType\LocationRequirement $locationRequirement
     */
    public function __construct(array $fareRestrictionPref = array(), array $tax = array(), \OtaInterface\Otaconnect\StructType\DiscountPricing $discountPricing = null, array $segmentOverride = array(), array $account = array(), \OtaInterface\Otaconnect\StructType\LocationRequirement $locationRequirement = null)
    {
        $this
            ->setFareRestrictionPref($fareRestrictionPref)
            ->setTax($tax)
            ->setDiscountPricing($discountPricing)
            ->setSegmentOverride($segmentOverride)
            ->setAccount($account)
            ->setLocationRequirement($locationRequirement);
    }
    /**
     * Get FareRestrictionPref value
     * @return \OtaInterface\Otaconnect\StructType\FareRestrictionPref[]|null
     */
    public function getFareRestrictionPref()
    {
        return $this->FareRestrictionPref;
    }
    /**
     * Set FareRestrictionPref value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\FareRestrictionPref[] $fareRestrictionPref
     * @return \OtaInterface\Otaconnect\StructType\PriceRequestInformation
     */
    public function setFareRestrictionPref(array $fareRestrictionPref = array())
    {
        foreach ($fareRestrictionPref as $priceRequestInformationFareRestrictionPrefItem) {
            // validation for constraint: itemType
            if (!$priceRequestInformationFareRestrictionPrefItem instanceof \OtaInterface\Otaconnect\StructType\FareRestrictionPref) {
                throw new \InvalidArgumentException(sprintf('The FareRestrictionPref property can only contain items of \OtaInterface\Otaconnect\StructType\FareRestrictionPref, "%s" given', is_object($priceRequestInformationFareRestrictionPrefItem) ? get_class($priceRequestInformationFareRestrictionPrefItem) : gettype($priceRequestInformationFareRestrictionPrefItem)), __LINE__);
            }
        }
        $this->FareRestrictionPref = $fareRestrictionPref;
        return $this;
    }
    /**
     * Add item to FareRestrictionPref value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\FareRestrictionPref $item
     * @return \OtaInterface\Otaconnect\StructType\PriceRequestInformation
     */
    public function addToFareRestrictionPref(\OtaInterface\Otaconnect\StructType\FareRestrictionPref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\FareRestrictionPref) {
            throw new \InvalidArgumentException(sprintf('The FareRestrictionPref property can only contain items of \OtaInterface\Otaconnect\StructType\FareRestrictionPref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareRestrictionPref[] = $item;
        return $this;
    }
    /**
     * Get Tax value
     * @return mixed[]|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @throws \InvalidArgumentException
     * @param mixed[] $tax
     * @return \OtaInterface\Otaconnect\StructType\PriceRequestInformation
     */
    public function setTax(array $tax = array())
    {
        foreach ($tax as $priceRequestInformationTaxItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of anyType, "%s" given', is_object($priceRequestInformationTaxItem) ? get_class($priceRequestInformationTaxItem) : gettype($priceRequestInformationTaxItem)), __LINE__);
            }
        }
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\PriceRequestInformation
     */
    public function addToTax($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Tax[] = $item;
        return $this;
    }
    /**
     * Get DiscountPricing value
     * @return \OtaInterface\Otaconnect\StructType\DiscountPricing|null
     */
    public function getDiscountPricing()
    {
        return $this->DiscountPricing;
    }
    /**
     * Set DiscountPricing value
     * @param \OtaInterface\Otaconnect\StructType\DiscountPricing $discountPricing
     * @return \OtaInterface\Otaconnect\StructType\PriceRequestInformation
     */
    public function setDiscountPricing(\OtaInterface\Otaconnect\StructType\DiscountPricing $discountPricing = null)
    {
        $this->DiscountPricing = $discountPricing;
        return $this;
    }
    /**
     * Get SegmentOverride value
     * @return \OtaInterface\Otaconnect\StructType\SegmentOverride[]|null
     */
    public function getSegmentOverride()
    {
        return $this->SegmentOverride;
    }
    /**
     * Set SegmentOverride value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\SegmentOverride[] $segmentOverride
     * @return \OtaInterface\Otaconnect\StructType\PriceRequestInformation
     */
    public function setSegmentOverride(array $segmentOverride = array())
    {
        foreach ($segmentOverride as $priceRequestInformationSegmentOverrideItem) {
            // validation for constraint: itemType
            if (!$priceRequestInformationSegmentOverrideItem instanceof \OtaInterface\Otaconnect\StructType\SegmentOverride) {
                throw new \InvalidArgumentException(sprintf('The SegmentOverride property can only contain items of \OtaInterface\Otaconnect\StructType\SegmentOverride, "%s" given', is_object($priceRequestInformationSegmentOverrideItem) ? get_class($priceRequestInformationSegmentOverrideItem) : gettype($priceRequestInformationSegmentOverrideItem)), __LINE__);
            }
        }
        $this->SegmentOverride = $segmentOverride;
        return $this;
    }
    /**
     * Add item to SegmentOverride value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\SegmentOverride $item
     * @return \OtaInterface\Otaconnect\StructType\PriceRequestInformation
     */
    public function addToSegmentOverride(\OtaInterface\Otaconnect\StructType\SegmentOverride $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\SegmentOverride) {
            throw new \InvalidArgumentException(sprintf('The SegmentOverride property can only contain items of \OtaInterface\Otaconnect\StructType\SegmentOverride, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SegmentOverride[] = $item;
        return $this;
    }
    /**
     * Get Account value
     * @return \OtaInterface\Otaconnect\StructType\Account[]|null
     */
    public function getAccount()
    {
        return $this->Account;
    }
    /**
     * Set Account value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Account[] $account
     * @return \OtaInterface\Otaconnect\StructType\PriceRequestInformation
     */
    public function setAccount(array $account = array())
    {
        foreach ($account as $priceRequestInformationAccountItem) {
            // validation for constraint: itemType
            if (!$priceRequestInformationAccountItem instanceof \OtaInterface\Otaconnect\StructType\Account) {
                throw new \InvalidArgumentException(sprintf('The Account property can only contain items of \OtaInterface\Otaconnect\StructType\Account, "%s" given', is_object($priceRequestInformationAccountItem) ? get_class($priceRequestInformationAccountItem) : gettype($priceRequestInformationAccountItem)), __LINE__);
            }
        }
        $this->Account = $account;
        return $this;
    }
    /**
     * Add item to Account value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Account $item
     * @return \OtaInterface\Otaconnect\StructType\PriceRequestInformation
     */
    public function addToAccount(\OtaInterface\Otaconnect\StructType\Account $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Account) {
            throw new \InvalidArgumentException(sprintf('The Account property can only contain items of \OtaInterface\Otaconnect\StructType\Account, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Account[] = $item;
        return $this;
    }
    /**
     * Get LocationRequirement value
     * @return \OtaInterface\Otaconnect\StructType\LocationRequirement|null
     */
    public function getLocationRequirement()
    {
        return $this->LocationRequirement;
    }
    /**
     * Set LocationRequirement value
     * @param \OtaInterface\Otaconnect\StructType\LocationRequirement $locationRequirement
     * @return \OtaInterface\Otaconnect\StructType\PriceRequestInformation
     */
    public function setLocationRequirement(\OtaInterface\Otaconnect\StructType\LocationRequirement $locationRequirement = null)
    {
        $this->LocationRequirement = $locationRequirement;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PriceRequestInformation
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
