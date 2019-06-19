<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The type of fare required (e.g. unrestricted, excursion). Refer to the Fare Qualifier OpenTravel Code list (FAQ). | Holds a base fare, tax, total and currency information on a price | Used to indicate a negotiated fare and, if so,
 * the fare code.
 * - union: UpperCaseAlphaLength1to3 | OTA_CodeType
 * - use: required
 * @subpackage Structs
 */
class FareType extends AbstractStructBase
{
    /**
     * The BaseFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\BaseFare
     */
    public $BaseFare;
    /**
     * The EquivFare
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\EquivFare[]
     */
    public $EquivFare;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Taxes
     */
    public $Taxes;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Fees
     */
    public $Fees;
    /**
     * The TotalFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\TotalFare
     */
    public $TotalFare;
    /**
     * The FareConstruction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\FareConstruction
     */
    public $FareConstruction;
    /**
     * The UnstructuredFareCalc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\UnstructuredFareCalc
     */
    public $UnstructuredFareCalc;
    /**
     * The FareBaggageAllowance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\FareBaggageAllowance[]
     */
    public $FareBaggageAllowance;
    /**
     * The TourCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\TourCode
     */
    public $TourCode;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Remark[]
     */
    public $Remark;
    /**
     * The OriginalIssueInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\OriginalIssueInfo
     */
    public $OriginalIssueInfo;
    /**
     * The ExchangeInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ExchangeInfo
     */
    public $ExchangeInfo;
    /**
     * The Discounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Discounts
     */
    public $Discounts;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The TicketDesignatorCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a discount code applicable to the fare.
     * - use: optional
     * @var string
     */
    public $TicketDesignatorCode;
    /**
     * The TotalNbrTrips
     * Meta informations extracted from the WSDL
     * - documentation: The total number of trips in this itinerary.
     * - use: optional
     * @var string
     */
    public $TotalNbrTrips;
    /**
     * The TotalNbrPTC
     * Meta informations extracted from the WSDL
     * - documentation: The total number of passenger type codes in this priced itinerary.
     * - use: optional
     * @var string
     */
    public $TotalNbrPTC;
    /**
     * Constructor method for FareType
     * @uses FareType::setBaseFare()
     * @uses FareType::setEquivFare()
     * @uses FareType::setTaxes()
     * @uses FareType::setFees()
     * @uses FareType::setTotalFare()
     * @uses FareType::setFareConstruction()
     * @uses FareType::setUnstructuredFareCalc()
     * @uses FareType::setFareBaggageAllowance()
     * @uses FareType::setTourCode()
     * @uses FareType::setRemark()
     * @uses FareType::setOriginalIssueInfo()
     * @uses FareType::setExchangeInfo()
     * @uses FareType::setDiscounts()
     * @uses FareType::setTPA_Extensions()
     * @uses FareType::setTicketDesignatorCode()
     * @uses FareType::setTotalNbrTrips()
     * @uses FareType::setTotalNbrPTC()
     * @param \OtaInterface\Otaconnect\StructType\BaseFare $baseFare
     * @param \OtaInterface\Otaconnect\StructType\EquivFare[] $equivFare
     * @param \OtaInterface\Otaconnect\StructType\Taxes $taxes
     * @param \OtaInterface\Otaconnect\StructType\Fees $fees
     * @param \OtaInterface\Otaconnect\StructType\TotalFare $totalFare
     * @param \OtaInterface\Otaconnect\StructType\FareConstruction $fareConstruction
     * @param \OtaInterface\Otaconnect\StructType\UnstructuredFareCalc $unstructuredFareCalc
     * @param \OtaInterface\Otaconnect\StructType\FareBaggageAllowance[] $fareBaggageAllowance
     * @param \OtaInterface\Otaconnect\StructType\TourCode $tourCode
     * @param \OtaInterface\Otaconnect\StructType\Remark[] $remark
     * @param \OtaInterface\Otaconnect\StructType\OriginalIssueInfo $originalIssueInfo
     * @param \OtaInterface\Otaconnect\StructType\ExchangeInfo $exchangeInfo
     * @param \OtaInterface\Otaconnect\StructType\Discounts $discounts
     * @param mixed $tPA_Extensions
     * @param string $ticketDesignatorCode
     * @param string $totalNbrTrips
     * @param string $totalNbrPTC
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\BaseFare $baseFare = null, array $equivFare = array(), \OtaInterface\Otaconnect\StructType\Taxes $taxes = null, \OtaInterface\Otaconnect\StructType\Fees $fees = null, \OtaInterface\Otaconnect\StructType\TotalFare $totalFare = null, \OtaInterface\Otaconnect\StructType\FareConstruction $fareConstruction = null, \OtaInterface\Otaconnect\StructType\UnstructuredFareCalc $unstructuredFareCalc = null, array $fareBaggageAllowance = array(), \OtaInterface\Otaconnect\StructType\TourCode $tourCode = null, array $remark = array(), \OtaInterface\Otaconnect\StructType\OriginalIssueInfo $originalIssueInfo = null, \OtaInterface\Otaconnect\StructType\ExchangeInfo $exchangeInfo = null, \OtaInterface\Otaconnect\StructType\Discounts $discounts = null, $tPA_Extensions = null, $ticketDesignatorCode = null, $totalNbrTrips = null, $totalNbrPTC = null)
    {
        $this
            ->setBaseFare($baseFare)
            ->setEquivFare($equivFare)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setTotalFare($totalFare)
            ->setFareConstruction($fareConstruction)
            ->setUnstructuredFareCalc($unstructuredFareCalc)
            ->setFareBaggageAllowance($fareBaggageAllowance)
            ->setTourCode($tourCode)
            ->setRemark($remark)
            ->setOriginalIssueInfo($originalIssueInfo)
            ->setExchangeInfo($exchangeInfo)
            ->setDiscounts($discounts)
            ->setTPA_Extensions($tPA_Extensions)
            ->setTicketDesignatorCode($ticketDesignatorCode)
            ->setTotalNbrTrips($totalNbrTrips)
            ->setTotalNbrPTC($totalNbrPTC);
    }
    /**
     * Get BaseFare value
     * @return \OtaInterface\Otaconnect\StructType\BaseFare|null
     */
    public function getBaseFare()
    {
        return $this->BaseFare;
    }
    /**
     * Set BaseFare value
     * @param \OtaInterface\Otaconnect\StructType\BaseFare $baseFare
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setBaseFare(\OtaInterface\Otaconnect\StructType\BaseFare $baseFare = null)
    {
        $this->BaseFare = $baseFare;
        return $this;
    }
    /**
     * Get EquivFare value
     * @return \OtaInterface\Otaconnect\StructType\EquivFare[]|null
     */
    public function getEquivFare()
    {
        return $this->EquivFare;
    }
    /**
     * Set EquivFare value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\EquivFare[] $equivFare
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setEquivFare(array $equivFare = array())
    {
        foreach ($equivFare as $fareTypeEquivFareItem) {
            // validation for constraint: itemType
            if (!$fareTypeEquivFareItem instanceof \OtaInterface\Otaconnect\StructType\EquivFare) {
                throw new \InvalidArgumentException(sprintf('The EquivFare property can only contain items of \OtaInterface\Otaconnect\StructType\EquivFare, "%s" given', is_object($fareTypeEquivFareItem) ? get_class($fareTypeEquivFareItem) : gettype($fareTypeEquivFareItem)), __LINE__);
            }
        }
        $this->EquivFare = $equivFare;
        return $this;
    }
    /**
     * Add item to EquivFare value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\EquivFare $item
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function addToEquivFare(\OtaInterface\Otaconnect\StructType\EquivFare $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\EquivFare) {
            throw new \InvalidArgumentException(sprintf('The EquivFare property can only contain items of \OtaInterface\Otaconnect\StructType\EquivFare, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EquivFare[] = $item;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \OtaInterface\Otaconnect\StructType\Taxes|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \OtaInterface\Otaconnect\StructType\Taxes $taxes
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setTaxes(\OtaInterface\Otaconnect\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get Fees value
     * @return \OtaInterface\Otaconnect\StructType\Fees|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \OtaInterface\Otaconnect\StructType\Fees $fees
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setFees(\OtaInterface\Otaconnect\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get TotalFare value
     * @return \OtaInterface\Otaconnect\StructType\TotalFare|null
     */
    public function getTotalFare()
    {
        return $this->TotalFare;
    }
    /**
     * Set TotalFare value
     * @param \OtaInterface\Otaconnect\StructType\TotalFare $totalFare
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setTotalFare(\OtaInterface\Otaconnect\StructType\TotalFare $totalFare = null)
    {
        $this->TotalFare = $totalFare;
        return $this;
    }
    /**
     * Get FareConstruction value
     * @return \OtaInterface\Otaconnect\StructType\FareConstruction|null
     */
    public function getFareConstruction()
    {
        return $this->FareConstruction;
    }
    /**
     * Set FareConstruction value
     * @param \OtaInterface\Otaconnect\StructType\FareConstruction $fareConstruction
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setFareConstruction(\OtaInterface\Otaconnect\StructType\FareConstruction $fareConstruction = null)
    {
        $this->FareConstruction = $fareConstruction;
        return $this;
    }
    /**
     * Get UnstructuredFareCalc value
     * @return \OtaInterface\Otaconnect\StructType\UnstructuredFareCalc|null
     */
    public function getUnstructuredFareCalc()
    {
        return $this->UnstructuredFareCalc;
    }
    /**
     * Set UnstructuredFareCalc value
     * @param \OtaInterface\Otaconnect\StructType\UnstructuredFareCalc $unstructuredFareCalc
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setUnstructuredFareCalc(\OtaInterface\Otaconnect\StructType\UnstructuredFareCalc $unstructuredFareCalc = null)
    {
        $this->UnstructuredFareCalc = $unstructuredFareCalc;
        return $this;
    }
    /**
     * Get FareBaggageAllowance value
     * @return \OtaInterface\Otaconnect\StructType\FareBaggageAllowance[]|null
     */
    public function getFareBaggageAllowance()
    {
        return $this->FareBaggageAllowance;
    }
    /**
     * Set FareBaggageAllowance value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\FareBaggageAllowance[] $fareBaggageAllowance
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setFareBaggageAllowance(array $fareBaggageAllowance = array())
    {
        foreach ($fareBaggageAllowance as $fareTypeFareBaggageAllowanceItem) {
            // validation for constraint: itemType
            if (!$fareTypeFareBaggageAllowanceItem instanceof \OtaInterface\Otaconnect\StructType\FareBaggageAllowance) {
                throw new \InvalidArgumentException(sprintf('The FareBaggageAllowance property can only contain items of \OtaInterface\Otaconnect\StructType\FareBaggageAllowance, "%s" given', is_object($fareTypeFareBaggageAllowanceItem) ? get_class($fareTypeFareBaggageAllowanceItem) : gettype($fareTypeFareBaggageAllowanceItem)), __LINE__);
            }
        }
        $this->FareBaggageAllowance = $fareBaggageAllowance;
        return $this;
    }
    /**
     * Add item to FareBaggageAllowance value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\FareBaggageAllowance $item
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function addToFareBaggageAllowance(\OtaInterface\Otaconnect\StructType\FareBaggageAllowance $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\FareBaggageAllowance) {
            throw new \InvalidArgumentException(sprintf('The FareBaggageAllowance property can only contain items of \OtaInterface\Otaconnect\StructType\FareBaggageAllowance, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareBaggageAllowance[] = $item;
        return $this;
    }
    /**
     * Get TourCode value
     * @return \OtaInterface\Otaconnect\StructType\TourCode|null
     */
    public function getTourCode()
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param \OtaInterface\Otaconnect\StructType\TourCode $tourCode
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setTourCode(\OtaInterface\Otaconnect\StructType\TourCode $tourCode = null)
    {
        $this->TourCode = $tourCode;
        return $this;
    }
    /**
     * Get Remark value
     * @return \OtaInterface\Otaconnect\StructType\Remark[]|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Remark[] $remark
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setRemark(array $remark = array())
    {
        foreach ($remark as $fareTypeRemarkItem) {
            // validation for constraint: itemType
            if (!$fareTypeRemarkItem instanceof \OtaInterface\Otaconnect\StructType\Remark) {
                throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \OtaInterface\Otaconnect\StructType\Remark, "%s" given', is_object($fareTypeRemarkItem) ? get_class($fareTypeRemarkItem) : gettype($fareTypeRemarkItem)), __LINE__);
            }
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Remark $item
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function addToRemark(\OtaInterface\Otaconnect\StructType\Remark $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Remark) {
            throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \OtaInterface\Otaconnect\StructType\Remark, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Remark[] = $item;
        return $this;
    }
    /**
     * Get OriginalIssueInfo value
     * @return \OtaInterface\Otaconnect\StructType\OriginalIssueInfo|null
     */
    public function getOriginalIssueInfo()
    {
        return $this->OriginalIssueInfo;
    }
    /**
     * Set OriginalIssueInfo value
     * @param \OtaInterface\Otaconnect\StructType\OriginalIssueInfo $originalIssueInfo
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setOriginalIssueInfo(\OtaInterface\Otaconnect\StructType\OriginalIssueInfo $originalIssueInfo = null)
    {
        $this->OriginalIssueInfo = $originalIssueInfo;
        return $this;
    }
    /**
     * Get ExchangeInfo value
     * @return \OtaInterface\Otaconnect\StructType\ExchangeInfo|null
     */
    public function getExchangeInfo()
    {
        return $this->ExchangeInfo;
    }
    /**
     * Set ExchangeInfo value
     * @param \OtaInterface\Otaconnect\StructType\ExchangeInfo $exchangeInfo
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setExchangeInfo(\OtaInterface\Otaconnect\StructType\ExchangeInfo $exchangeInfo = null)
    {
        $this->ExchangeInfo = $exchangeInfo;
        return $this;
    }
    /**
     * Get Discounts value
     * @return \OtaInterface\Otaconnect\StructType\Discounts|null
     */
    public function getDiscounts()
    {
        return $this->Discounts;
    }
    /**
     * Set Discounts value
     * @param \OtaInterface\Otaconnect\StructType\Discounts $discounts
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setDiscounts(\OtaInterface\Otaconnect\StructType\Discounts $discounts = null)
    {
        $this->Discounts = $discounts;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get TicketDesignatorCode value
     * @return string|null
     */
    public function getTicketDesignatorCode()
    {
        return $this->TicketDesignatorCode;
    }
    /**
     * Set TicketDesignatorCode value
     * @param string $ticketDesignatorCode
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setTicketDesignatorCode($ticketDesignatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($ticketDesignatorCode) && !is_string($ticketDesignatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketDesignatorCode)), __LINE__);
        }
        $this->TicketDesignatorCode = $ticketDesignatorCode;
        return $this;
    }
    /**
     * Get TotalNbrTrips value
     * @return string|null
     */
    public function getTotalNbrTrips()
    {
        return $this->TotalNbrTrips;
    }
    /**
     * Set TotalNbrTrips value
     * @param string $totalNbrTrips
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setTotalNbrTrips($totalNbrTrips = null)
    {
        // validation for constraint: string
        if (!is_null($totalNbrTrips) && !is_string($totalNbrTrips)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalNbrTrips)), __LINE__);
        }
        $this->TotalNbrTrips = $totalNbrTrips;
        return $this;
    }
    /**
     * Get TotalNbrPTC value
     * @return string|null
     */
    public function getTotalNbrPTC()
    {
        return $this->TotalNbrPTC;
    }
    /**
     * Set TotalNbrPTC value
     * @param string $totalNbrPTC
     * @return \OtaInterface\Otaconnect\StructType\FareType
     */
    public function setTotalNbrPTC($totalNbrPTC = null)
    {
        // validation for constraint: string
        if (!is_null($totalNbrPTC) && !is_string($totalNbrPTC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalNbrPTC)), __LINE__);
        }
        $this->TotalNbrPTC = $totalNbrPTC;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\FareType
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
