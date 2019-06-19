<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PTCFareBreakdownType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Per passenger type code pricing for this itinerary. Set if fareBreakdown was requested.
 * @subpackage Structs
 */
class PTCFareBreakdownType extends AbstractStructBase
{
    /**
     * The PassengerTypeQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Number of individuals traveling under this PTC
     * @var mixed
     */
    public $PassengerTypeQuantity;
    /**
     * The FareBasisCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\FareBasisCodes
     */
    public $FareBasisCodes;
    /**
     * The PassengerFare
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PassengerFare[]
     */
    public $PassengerFare;
    /**
     * The TravelerRefNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\TravelerRefNumber[]
     */
    public $TravelerRefNumber;
    /**
     * The TicketDesignators
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\TicketDesignators
     */
    public $TicketDesignators;
    /**
     * The Endorsements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Endorsements
     */
    public $Endorsements;
    /**
     * The FareInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\FareInfo[]
     */
    public $FareInfo;
    /**
     * The PricingUnit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PricingUnit[]
     */
    public $PricingUnit;
    /**
     * The PricingSource
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the fare is public, private or both.
     * - use: optional
     * @var string
     */
    public $PricingSource;
    /**
     * The FlightRefNumberRPHList
     * Meta informations extracted from the WSDL
     * - documentation: One or more flights to which this fare applies.
     * - use: optional
     * @var string
     */
    public $FlightRefNumberRPHList;
    /**
     * Constructor method for PTCFareBreakdownType
     * @uses PTCFareBreakdownType::setPassengerTypeQuantity()
     * @uses PTCFareBreakdownType::setFareBasisCodes()
     * @uses PTCFareBreakdownType::setPassengerFare()
     * @uses PTCFareBreakdownType::setTravelerRefNumber()
     * @uses PTCFareBreakdownType::setTicketDesignators()
     * @uses PTCFareBreakdownType::setEndorsements()
     * @uses PTCFareBreakdownType::setFareInfo()
     * @uses PTCFareBreakdownType::setPricingUnit()
     * @uses PTCFareBreakdownType::setPricingSource()
     * @uses PTCFareBreakdownType::setFlightRefNumberRPHList()
     * @param mixed $passengerTypeQuantity
     * @param \OtaInterface\Otaconnect\StructType\FareBasisCodes $fareBasisCodes
     * @param \OtaInterface\Otaconnect\StructType\PassengerFare[] $passengerFare
     * @param \OtaInterface\Otaconnect\StructType\TravelerRefNumber[] $travelerRefNumber
     * @param \OtaInterface\Otaconnect\StructType\TicketDesignators $ticketDesignators
     * @param \OtaInterface\Otaconnect\StructType\Endorsements $endorsements
     * @param \OtaInterface\Otaconnect\StructType\FareInfo[] $fareInfo
     * @param \OtaInterface\Otaconnect\StructType\PricingUnit[] $pricingUnit
     * @param string $pricingSource
     * @param string $flightRefNumberRPHList
     */
    public function __construct($passengerTypeQuantity = null, \OtaInterface\Otaconnect\StructType\FareBasisCodes $fareBasisCodes = null, array $passengerFare = array(), array $travelerRefNumber = array(), \OtaInterface\Otaconnect\StructType\TicketDesignators $ticketDesignators = null, \OtaInterface\Otaconnect\StructType\Endorsements $endorsements = null, array $fareInfo = array(), array $pricingUnit = array(), $pricingSource = null, $flightRefNumberRPHList = null)
    {
        $this
            ->setPassengerTypeQuantity($passengerTypeQuantity)
            ->setFareBasisCodes($fareBasisCodes)
            ->setPassengerFare($passengerFare)
            ->setTravelerRefNumber($travelerRefNumber)
            ->setTicketDesignators($ticketDesignators)
            ->setEndorsements($endorsements)
            ->setFareInfo($fareInfo)
            ->setPricingUnit($pricingUnit)
            ->setPricingSource($pricingSource)
            ->setFlightRefNumberRPHList($flightRefNumberRPHList);
    }
    /**
     * Get PassengerTypeQuantity value
     * @return mixed|null
     */
    public function getPassengerTypeQuantity()
    {
        return $this->PassengerTypeQuantity;
    }
    /**
     * Set PassengerTypeQuantity value
     * @param mixed $passengerTypeQuantity
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function setPassengerTypeQuantity($passengerTypeQuantity = null)
    {
        $this->PassengerTypeQuantity = $passengerTypeQuantity;
        return $this;
    }
    /**
     * Get FareBasisCodes value
     * @return \OtaInterface\Otaconnect\StructType\FareBasisCodes|null
     */
    public function getFareBasisCodes()
    {
        return $this->FareBasisCodes;
    }
    /**
     * Set FareBasisCodes value
     * @param \OtaInterface\Otaconnect\StructType\FareBasisCodes $fareBasisCodes
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function setFareBasisCodes(\OtaInterface\Otaconnect\StructType\FareBasisCodes $fareBasisCodes = null)
    {
        $this->FareBasisCodes = $fareBasisCodes;
        return $this;
    }
    /**
     * Get PassengerFare value
     * @return \OtaInterface\Otaconnect\StructType\PassengerFare[]|null
     */
    public function getPassengerFare()
    {
        return $this->PassengerFare;
    }
    /**
     * Set PassengerFare value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PassengerFare[] $passengerFare
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function setPassengerFare(array $passengerFare = array())
    {
        foreach ($passengerFare as $pTCFareBreakdownTypePassengerFareItem) {
            // validation for constraint: itemType
            if (!$pTCFareBreakdownTypePassengerFareItem instanceof \OtaInterface\Otaconnect\StructType\PassengerFare) {
                throw new \InvalidArgumentException(sprintf('The PassengerFare property can only contain items of \OtaInterface\Otaconnect\StructType\PassengerFare, "%s" given', is_object($pTCFareBreakdownTypePassengerFareItem) ? get_class($pTCFareBreakdownTypePassengerFareItem) : gettype($pTCFareBreakdownTypePassengerFareItem)), __LINE__);
            }
        }
        $this->PassengerFare = $passengerFare;
        return $this;
    }
    /**
     * Add item to PassengerFare value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PassengerFare $item
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function addToPassengerFare(\OtaInterface\Otaconnect\StructType\PassengerFare $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\PassengerFare) {
            throw new \InvalidArgumentException(sprintf('The PassengerFare property can only contain items of \OtaInterface\Otaconnect\StructType\PassengerFare, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PassengerFare[] = $item;
        return $this;
    }
    /**
     * Get TravelerRefNumber value
     * @return \OtaInterface\Otaconnect\StructType\TravelerRefNumber[]|null
     */
    public function getTravelerRefNumber()
    {
        return $this->TravelerRefNumber;
    }
    /**
     * Set TravelerRefNumber value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\TravelerRefNumber[] $travelerRefNumber
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function setTravelerRefNumber(array $travelerRefNumber = array())
    {
        foreach ($travelerRefNumber as $pTCFareBreakdownTypeTravelerRefNumberItem) {
            // validation for constraint: itemType
            if (!$pTCFareBreakdownTypeTravelerRefNumberItem instanceof \OtaInterface\Otaconnect\StructType\TravelerRefNumber) {
                throw new \InvalidArgumentException(sprintf('The TravelerRefNumber property can only contain items of \OtaInterface\Otaconnect\StructType\TravelerRefNumber, "%s" given', is_object($pTCFareBreakdownTypeTravelerRefNumberItem) ? get_class($pTCFareBreakdownTypeTravelerRefNumberItem) : gettype($pTCFareBreakdownTypeTravelerRefNumberItem)), __LINE__);
            }
        }
        $this->TravelerRefNumber = $travelerRefNumber;
        return $this;
    }
    /**
     * Add item to TravelerRefNumber value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\TravelerRefNumber $item
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function addToTravelerRefNumber(\OtaInterface\Otaconnect\StructType\TravelerRefNumber $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\TravelerRefNumber) {
            throw new \InvalidArgumentException(sprintf('The TravelerRefNumber property can only contain items of \OtaInterface\Otaconnect\StructType\TravelerRefNumber, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravelerRefNumber[] = $item;
        return $this;
    }
    /**
     * Get TicketDesignators value
     * @return \OtaInterface\Otaconnect\StructType\TicketDesignators|null
     */
    public function getTicketDesignators()
    {
        return $this->TicketDesignators;
    }
    /**
     * Set TicketDesignators value
     * @param \OtaInterface\Otaconnect\StructType\TicketDesignators $ticketDesignators
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function setTicketDesignators(\OtaInterface\Otaconnect\StructType\TicketDesignators $ticketDesignators = null)
    {
        $this->TicketDesignators = $ticketDesignators;
        return $this;
    }
    /**
     * Get Endorsements value
     * @return \OtaInterface\Otaconnect\StructType\Endorsements|null
     */
    public function getEndorsements()
    {
        return $this->Endorsements;
    }
    /**
     * Set Endorsements value
     * @param \OtaInterface\Otaconnect\StructType\Endorsements $endorsements
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function setEndorsements(\OtaInterface\Otaconnect\StructType\Endorsements $endorsements = null)
    {
        $this->Endorsements = $endorsements;
        return $this;
    }
    /**
     * Get FareInfo value
     * @return \OtaInterface\Otaconnect\StructType\FareInfo[]|null
     */
    public function getFareInfo()
    {
        return $this->FareInfo;
    }
    /**
     * Set FareInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\FareInfo[] $fareInfo
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function setFareInfo(array $fareInfo = array())
    {
        foreach ($fareInfo as $pTCFareBreakdownTypeFareInfoItem) {
            // validation for constraint: itemType
            if (!$pTCFareBreakdownTypeFareInfoItem instanceof \OtaInterface\Otaconnect\StructType\FareInfo) {
                throw new \InvalidArgumentException(sprintf('The FareInfo property can only contain items of \OtaInterface\Otaconnect\StructType\FareInfo, "%s" given', is_object($pTCFareBreakdownTypeFareInfoItem) ? get_class($pTCFareBreakdownTypeFareInfoItem) : gettype($pTCFareBreakdownTypeFareInfoItem)), __LINE__);
            }
        }
        $this->FareInfo = $fareInfo;
        return $this;
    }
    /**
     * Add item to FareInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\FareInfo $item
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function addToFareInfo(\OtaInterface\Otaconnect\StructType\FareInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\FareInfo) {
            throw new \InvalidArgumentException(sprintf('The FareInfo property can only contain items of \OtaInterface\Otaconnect\StructType\FareInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareInfo[] = $item;
        return $this;
    }
    /**
     * Get PricingUnit value
     * @return \OtaInterface\Otaconnect\StructType\PricingUnit[]|null
     */
    public function getPricingUnit()
    {
        return $this->PricingUnit;
    }
    /**
     * Set PricingUnit value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PricingUnit[] $pricingUnit
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function setPricingUnit(array $pricingUnit = array())
    {
        foreach ($pricingUnit as $pTCFareBreakdownTypePricingUnitItem) {
            // validation for constraint: itemType
            if (!$pTCFareBreakdownTypePricingUnitItem instanceof \OtaInterface\Otaconnect\StructType\PricingUnit) {
                throw new \InvalidArgumentException(sprintf('The PricingUnit property can only contain items of \OtaInterface\Otaconnect\StructType\PricingUnit, "%s" given', is_object($pTCFareBreakdownTypePricingUnitItem) ? get_class($pTCFareBreakdownTypePricingUnitItem) : gettype($pTCFareBreakdownTypePricingUnitItem)), __LINE__);
            }
        }
        $this->PricingUnit = $pricingUnit;
        return $this;
    }
    /**
     * Add item to PricingUnit value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PricingUnit $item
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function addToPricingUnit(\OtaInterface\Otaconnect\StructType\PricingUnit $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\PricingUnit) {
            throw new \InvalidArgumentException(sprintf('The PricingUnit property can only contain items of \OtaInterface\Otaconnect\StructType\PricingUnit, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PricingUnit[] = $item;
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
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
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
     * Get FlightRefNumberRPHList value
     * @return string|null
     */
    public function getFlightRefNumberRPHList()
    {
        return $this->FlightRefNumberRPHList;
    }
    /**
     * Set FlightRefNumberRPHList value
     * @param string $flightRefNumberRPHList
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
     */
    public function setFlightRefNumberRPHList($flightRefNumberRPHList = null)
    {
        // validation for constraint: string
        if (!is_null($flightRefNumberRPHList) && !is_string($flightRefNumberRPHList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightRefNumberRPHList)), __LINE__);
        }
        $this->FlightRefNumberRPHList = $flightRefNumberRPHList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PTCFareBreakdownType
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
