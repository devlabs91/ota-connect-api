<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirItineraryPricingInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Pricing Information for an Air Itinerary
 * @subpackage Structs
 */
class AirItineraryPricingInfoType extends AbstractStructBase
{
    /**
     * The ItinTotalFare
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ItinTotalFare[]
     */
    public $ItinTotalFare;
    /**
     * The PTC_FareBreakdowns
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PTC_FareBreakdowns
     */
    public $PTC_FareBreakdowns;
    /**
     * The FareInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\FareInfos
     */
    public $FareInfos;
    /**
     * The PriceRequestInformation
     * Meta informations extracted from the WSDL
     * - documentation: Identifies pricing source, if negotiated fares are requested and if it is a reprice request.
     * - minOccurs: 0
     * @var mixed
     */
    public $PriceRequestInformation;
    /**
     * The PricingSource
     * Meta informations extracted from the WSDL
     * - documentation: Used to indicate whether the pricing is public or private
     * - use: optional
     * @var string
     */
    public $PricingSource;
    /**
     * The ValidatingAirlineCode
     * Meta informations extracted from the WSDL
     * - documentation: The code of the validating airline.
     * - use: optional
     * @var string
     */
    public $ValidatingAirlineCode;
    /**
     * The QuoteID
     * Meta informations extracted from the WSDL
     * - documentation: A text field used to provide a special ID code that is associated with the priced itinerary that may be used in the reservation request in order to obtain the quoted rate.
     * - use: optional
     * @var string
     */
    public $QuoteID;
    /**
     * Constructor method for AirItineraryPricingInfoType
     * @uses AirItineraryPricingInfoType::setItinTotalFare()
     * @uses AirItineraryPricingInfoType::setPTC_FareBreakdowns()
     * @uses AirItineraryPricingInfoType::setFareInfos()
     * @uses AirItineraryPricingInfoType::setPriceRequestInformation()
     * @uses AirItineraryPricingInfoType::setPricingSource()
     * @uses AirItineraryPricingInfoType::setValidatingAirlineCode()
     * @uses AirItineraryPricingInfoType::setQuoteID()
     * @param \OtaInterface\Otaconnect\StructType\ItinTotalFare[] $itinTotalFare
     * @param \OtaInterface\Otaconnect\StructType\PTC_FareBreakdowns $pTC_FareBreakdowns
     * @param \OtaInterface\Otaconnect\StructType\FareInfos $fareInfos
     * @param mixed $priceRequestInformation
     * @param string $pricingSource
     * @param string $validatingAirlineCode
     * @param string $quoteID
     */
    public function __construct(array $itinTotalFare = array(), \OtaInterface\Otaconnect\StructType\PTC_FareBreakdowns $pTC_FareBreakdowns = null, \OtaInterface\Otaconnect\StructType\FareInfos $fareInfos = null, $priceRequestInformation = null, $pricingSource = null, $validatingAirlineCode = null, $quoteID = null)
    {
        $this
            ->setItinTotalFare($itinTotalFare)
            ->setPTC_FareBreakdowns($pTC_FareBreakdowns)
            ->setFareInfos($fareInfos)
            ->setPriceRequestInformation($priceRequestInformation)
            ->setPricingSource($pricingSource)
            ->setValidatingAirlineCode($validatingAirlineCode)
            ->setQuoteID($quoteID);
    }
    /**
     * Get ItinTotalFare value
     * @return \OtaInterface\Otaconnect\StructType\ItinTotalFare[]|null
     */
    public function getItinTotalFare()
    {
        return $this->ItinTotalFare;
    }
    /**
     * Set ItinTotalFare value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ItinTotalFare[] $itinTotalFare
     * @return \OtaInterface\Otaconnect\StructType\AirItineraryPricingInfoType
     */
    public function setItinTotalFare(array $itinTotalFare = array())
    {
        foreach ($itinTotalFare as $airItineraryPricingInfoTypeItinTotalFareItem) {
            // validation for constraint: itemType
            if (!$airItineraryPricingInfoTypeItinTotalFareItem instanceof \OtaInterface\Otaconnect\StructType\ItinTotalFare) {
                throw new \InvalidArgumentException(sprintf('The ItinTotalFare property can only contain items of \OtaInterface\Otaconnect\StructType\ItinTotalFare, "%s" given', is_object($airItineraryPricingInfoTypeItinTotalFareItem) ? get_class($airItineraryPricingInfoTypeItinTotalFareItem) : gettype($airItineraryPricingInfoTypeItinTotalFareItem)), __LINE__);
            }
        }
        $this->ItinTotalFare = $itinTotalFare;
        return $this;
    }
    /**
     * Add item to ItinTotalFare value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ItinTotalFare $item
     * @return \OtaInterface\Otaconnect\StructType\AirItineraryPricingInfoType
     */
    public function addToItinTotalFare(\OtaInterface\Otaconnect\StructType\ItinTotalFare $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\ItinTotalFare) {
            throw new \InvalidArgumentException(sprintf('The ItinTotalFare property can only contain items of \OtaInterface\Otaconnect\StructType\ItinTotalFare, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItinTotalFare[] = $item;
        return $this;
    }
    /**
     * Get PTC_FareBreakdowns value
     * @return \OtaInterface\Otaconnect\StructType\PTC_FareBreakdowns|null
     */
    public function getPTC_FareBreakdowns()
    {
        return $this->PTC_FareBreakdowns;
    }
    /**
     * Set PTC_FareBreakdowns value
     * @param \OtaInterface\Otaconnect\StructType\PTC_FareBreakdowns $pTC_FareBreakdowns
     * @return \OtaInterface\Otaconnect\StructType\AirItineraryPricingInfoType
     */
    public function setPTC_FareBreakdowns(\OtaInterface\Otaconnect\StructType\PTC_FareBreakdowns $pTC_FareBreakdowns = null)
    {
        $this->PTC_FareBreakdowns = $pTC_FareBreakdowns;
        return $this;
    }
    /**
     * Get FareInfos value
     * @return \OtaInterface\Otaconnect\StructType\FareInfos|null
     */
    public function getFareInfos()
    {
        return $this->FareInfos;
    }
    /**
     * Set FareInfos value
     * @param \OtaInterface\Otaconnect\StructType\FareInfos $fareInfos
     * @return \OtaInterface\Otaconnect\StructType\AirItineraryPricingInfoType
     */
    public function setFareInfos(\OtaInterface\Otaconnect\StructType\FareInfos $fareInfos = null)
    {
        $this->FareInfos = $fareInfos;
        return $this;
    }
    /**
     * Get PriceRequestInformation value
     * @return mixed|null
     */
    public function getPriceRequestInformation()
    {
        return $this->PriceRequestInformation;
    }
    /**
     * Set PriceRequestInformation value
     * @param mixed $priceRequestInformation
     * @return \OtaInterface\Otaconnect\StructType\AirItineraryPricingInfoType
     */
    public function setPriceRequestInformation($priceRequestInformation = null)
    {
        $this->PriceRequestInformation = $priceRequestInformation;
        return $this;
    }
    /**
     * Get PricingSource value
     * @return string|null
     */
    public function getPricingSource()
    {
        return $this->PricingSource;
    }
    /**
     * Set PricingSource value
     * @param string $pricingSource
     * @return \OtaInterface\Otaconnect\StructType\AirItineraryPricingInfoType
     */
    public function setPricingSource($pricingSource = null)
    {
        // validation for constraint: string
        if (!is_null($pricingSource) && !is_string($pricingSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pricingSource)), __LINE__);
        }
        $this->PricingSource = $pricingSource;
        return $this;
    }
    /**
     * Get ValidatingAirlineCode value
     * @return string|null
     */
    public function getValidatingAirlineCode()
    {
        return $this->ValidatingAirlineCode;
    }
    /**
     * Set ValidatingAirlineCode value
     * @param string $validatingAirlineCode
     * @return \OtaInterface\Otaconnect\StructType\AirItineraryPricingInfoType
     */
    public function setValidatingAirlineCode($validatingAirlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($validatingAirlineCode) && !is_string($validatingAirlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validatingAirlineCode)), __LINE__);
        }
        $this->ValidatingAirlineCode = $validatingAirlineCode;
        return $this;
    }
    /**
     * Get QuoteID value
     * @return string|null
     */
    public function getQuoteID()
    {
        return $this->QuoteID;
    }
    /**
     * Set QuoteID value
     * @param string $quoteID
     * @return \OtaInterface\Otaconnect\StructType\AirItineraryPricingInfoType
     */
    public function setQuoteID($quoteID = null)
    {
        // validation for constraint: string
        if (!is_null($quoteID) && !is_string($quoteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quoteID)), __LINE__);
        }
        $this->QuoteID = $quoteID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AirItineraryPricingInfoType
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
