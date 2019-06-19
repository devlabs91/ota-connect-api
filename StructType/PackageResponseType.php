<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines a complete package holiday response.
 * @subpackage Structs
 */
class PackageResponseType extends AbstractStructBase
{
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - documentation: A link to details of a package.
     * - minOccurs: 0
     * @var mixed
     */
    public $URL;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - documentation: Details of the company offering the package.
     * - minOccurs: 0
     * @var mixed
     */
    public $CompanyName;
    /**
     * The DateRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\DateRange
     */
    public $DateRange;
    /**
     * The ItineraryItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ItineraryItems
     */
    public $ItineraryItems;
    /**
     * The Extras
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Extras
     */
    public $Extras;
    /**
     * The Cautions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Cautions
     */
    public $Cautions;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The type of package e.g. Flight-only, Air-Inclusive. Refer to OpenTravel Code List Package Type (PKG).
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The TravelCode
     * Meta informations extracted from the WSDL
     * - documentation: The supplier's code to identify the travel arrangement for the package
     * - use: optional
     * @var string
     */
    public $TravelCode;
    /**
     * The TourCode
     * Meta informations extracted from the WSDL
     * - documentation: The supplier's code to identify the accommodation/tour arrangement for a package.
     * - use: optional
     * @var string
     */
    public $TourCode;
    /**
     * The BoardCode
     * Meta informations extracted from the WSDL
     * - documentation: The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering
     * - use: optional
     * @var string
     */
    public $BoardCode;
    /**
     * The PromotionCode
     * Meta informations extracted from the WSDL
     * - documentation: A code to request a specific promotional price.
     * - use: optional
     * @var string
     */
    public $PromotionCode;
    /**
     * The BrandCode
     * Meta informations extracted from the WSDL
     * - documentation: The code for the tour operator's product brand (e.g., Thomascook, JMC, Sunset).
     * - use: optional
     * @var string
     */
    public $BrandCode;
    /**
     * The ProductCode
     * Meta informations extracted from the WSDL
     * - documentation: The tour operator's code for the product within the brand (e.g., Summersun, Greece).
     * - use: optional
     * @var string
     */
    public $ProductCode;
    /**
     * Constructor method for PackageResponseType
     * @uses PackageResponseType::setURL()
     * @uses PackageResponseType::setCompanyName()
     * @uses PackageResponseType::setDateRange()
     * @uses PackageResponseType::setItineraryItems()
     * @uses PackageResponseType::setExtras()
     * @uses PackageResponseType::setCautions()
     * @uses PackageResponseType::setType()
     * @uses PackageResponseType::setTravelCode()
     * @uses PackageResponseType::setTourCode()
     * @uses PackageResponseType::setBoardCode()
     * @uses PackageResponseType::setPromotionCode()
     * @uses PackageResponseType::setBrandCode()
     * @uses PackageResponseType::setProductCode()
     * @param mixed $uRL
     * @param mixed $companyName
     * @param \OtaInterface\Otaconnect\StructType\DateRange $dateRange
     * @param \OtaInterface\Otaconnect\StructType\ItineraryItems $itineraryItems
     * @param \OtaInterface\Otaconnect\StructType\Extras $extras
     * @param \OtaInterface\Otaconnect\StructType\Cautions $cautions
     * @param string $type
     * @param string $travelCode
     * @param string $tourCode
     * @param string $boardCode
     * @param string $promotionCode
     * @param string $brandCode
     * @param string $productCode
     */
    public function __construct($uRL = null, $companyName = null, \OtaInterface\Otaconnect\StructType\DateRange $dateRange = null, \OtaInterface\Otaconnect\StructType\ItineraryItems $itineraryItems = null, \OtaInterface\Otaconnect\StructType\Extras $extras = null, \OtaInterface\Otaconnect\StructType\Cautions $cautions = null, $type = null, $travelCode = null, $tourCode = null, $boardCode = null, $promotionCode = null, $brandCode = null, $productCode = null)
    {
        $this
            ->setURL($uRL)
            ->setCompanyName($companyName)
            ->setDateRange($dateRange)
            ->setItineraryItems($itineraryItems)
            ->setExtras($extras)
            ->setCautions($cautions)
            ->setType($type)
            ->setTravelCode($travelCode)
            ->setTourCode($tourCode)
            ->setBoardCode($boardCode)
            ->setPromotionCode($promotionCode)
            ->setBrandCode($brandCode)
            ->setProductCode($productCode);
    }
    /**
     * Get URL value
     * @return mixed|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param mixed $uRL
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setURL($uRL = null)
    {
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return mixed|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param mixed $companyName
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get DateRange value
     * @return \OtaInterface\Otaconnect\StructType\DateRange|null
     */
    public function getDateRange()
    {
        return $this->DateRange;
    }
    /**
     * Set DateRange value
     * @param \OtaInterface\Otaconnect\StructType\DateRange $dateRange
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setDateRange(\OtaInterface\Otaconnect\StructType\DateRange $dateRange = null)
    {
        $this->DateRange = $dateRange;
        return $this;
    }
    /**
     * Get ItineraryItems value
     * @return \OtaInterface\Otaconnect\StructType\ItineraryItems|null
     */
    public function getItineraryItems()
    {
        return $this->ItineraryItems;
    }
    /**
     * Set ItineraryItems value
     * @param \OtaInterface\Otaconnect\StructType\ItineraryItems $itineraryItems
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setItineraryItems(\OtaInterface\Otaconnect\StructType\ItineraryItems $itineraryItems = null)
    {
        $this->ItineraryItems = $itineraryItems;
        return $this;
    }
    /**
     * Get Extras value
     * @return \OtaInterface\Otaconnect\StructType\Extras|null
     */
    public function getExtras()
    {
        return $this->Extras;
    }
    /**
     * Set Extras value
     * @param \OtaInterface\Otaconnect\StructType\Extras $extras
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setExtras(\OtaInterface\Otaconnect\StructType\Extras $extras = null)
    {
        $this->Extras = $extras;
        return $this;
    }
    /**
     * Get Cautions value
     * @return \OtaInterface\Otaconnect\StructType\Cautions|null
     */
    public function getCautions()
    {
        return $this->Cautions;
    }
    /**
     * Set Cautions value
     * @param \OtaInterface\Otaconnect\StructType\Cautions $cautions
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setCautions(\OtaInterface\Otaconnect\StructType\Cautions $cautions = null)
    {
        $this->Cautions = $cautions;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get TravelCode value
     * @return string|null
     */
    public function getTravelCode()
    {
        return $this->TravelCode;
    }
    /**
     * Set TravelCode value
     * @param string $travelCode
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setTravelCode($travelCode = null)
    {
        // validation for constraint: string
        if (!is_null($travelCode) && !is_string($travelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelCode)), __LINE__);
        }
        $this->TravelCode = $travelCode;
        return $this;
    }
    /**
     * Get TourCode value
     * @return string|null
     */
    public function getTourCode()
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param string $tourCode
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setTourCode($tourCode = null)
    {
        // validation for constraint: string
        if (!is_null($tourCode) && !is_string($tourCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourCode)), __LINE__);
        }
        $this->TourCode = $tourCode;
        return $this;
    }
    /**
     * Get BoardCode value
     * @return string|null
     */
    public function getBoardCode()
    {
        return $this->BoardCode;
    }
    /**
     * Set BoardCode value
     * @param string $boardCode
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setBoardCode($boardCode = null)
    {
        // validation for constraint: string
        if (!is_null($boardCode) && !is_string($boardCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($boardCode)), __LINE__);
        }
        $this->BoardCode = $boardCode;
        return $this;
    }
    /**
     * Get PromotionCode value
     * @return string|null
     */
    public function getPromotionCode()
    {
        return $this->PromotionCode;
    }
    /**
     * Set PromotionCode value
     * @param string $promotionCode
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setPromotionCode($promotionCode = null)
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionCode)), __LINE__);
        }
        $this->PromotionCode = $promotionCode;
        return $this;
    }
    /**
     * Get BrandCode value
     * @return string|null
     */
    public function getBrandCode()
    {
        return $this->BrandCode;
    }
    /**
     * Set BrandCode value
     * @param string $brandCode
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setBrandCode($brandCode = null)
    {
        // validation for constraint: string
        if (!is_null($brandCode) && !is_string($brandCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandCode)), __LINE__);
        }
        $this->BrandCode = $brandCode;
        return $this;
    }
    /**
     * Get ProductCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }
    /**
     * Set ProductCode value
     * @param string $productCode
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productCode)), __LINE__);
        }
        $this->ProductCode = $productCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PackageResponseType
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
