<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemSearchCriterionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the criterion for a search.
 * @subpackage Structs
 */
class ItemSearchCriterionType extends AbstractStructBase
{
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Position
     */
    public $Position;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Address
     */
    public $Address;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Telephone
     */
    public $Telephone;
    /**
     * The RefPoint
     * Meta informations extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RefPoint[]
     */
    public $RefPoint;
    /**
     * The CodeRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CodeRef
     */
    public $CodeRef;
    /**
     * The HotelRef
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\HotelRef[]
     */
    public $HotelRef;
    /**
     * The Radius
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Radius
     */
    public $Radius;
    /**
     * The MapArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MapArea
     */
    public $MapArea;
    /**
     * The ExactMatch
     * Meta informations extracted from the WSDL
     * - documentation: Values of "true" or "false", indicating whether the string of the search value must be an exact match.
     * - use: optional
     * @var bool
     */
    public $ExactMatch;
    /**
     * The ImportanceType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ImportanceType;
    /**
     * The Ranking
     * Meta informations extracted from the WSDL
     * - documentation: Defines a ranking scale expressed as integers; meaning and scale are based on individual implementations.
     * - use: optional
     * @var int
     */
    public $Ranking;
    /**
     * Constructor method for ItemSearchCriterionType
     * @uses ItemSearchCriterionType::setPosition()
     * @uses ItemSearchCriterionType::setAddress()
     * @uses ItemSearchCriterionType::setTelephone()
     * @uses ItemSearchCriterionType::setRefPoint()
     * @uses ItemSearchCriterionType::setCodeRef()
     * @uses ItemSearchCriterionType::setHotelRef()
     * @uses ItemSearchCriterionType::setRadius()
     * @uses ItemSearchCriterionType::setMapArea()
     * @uses ItemSearchCriterionType::setExactMatch()
     * @uses ItemSearchCriterionType::setImportanceType()
     * @uses ItemSearchCriterionType::setRanking()
     * @param \OtaInterface\Otaconnect\StructType\Position $position
     * @param \OtaInterface\Otaconnect\StructType\Address $address
     * @param \OtaInterface\Otaconnect\StructType\Telephone $telephone
     * @param \OtaInterface\Otaconnect\StructType\RefPoint[] $refPoint
     * @param \OtaInterface\Otaconnect\StructType\CodeRef $codeRef
     * @param \OtaInterface\Otaconnect\StructType\HotelRef[] $hotelRef
     * @param \OtaInterface\Otaconnect\StructType\Radius $radius
     * @param \OtaInterface\Otaconnect\StructType\MapArea $mapArea
     * @param bool $exactMatch
     * @param string $importanceType
     * @param int $ranking
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\Position $position = null, \OtaInterface\Otaconnect\StructType\Address $address = null, \OtaInterface\Otaconnect\StructType\Telephone $telephone = null, array $refPoint = array(), \OtaInterface\Otaconnect\StructType\CodeRef $codeRef = null, array $hotelRef = array(), \OtaInterface\Otaconnect\StructType\Radius $radius = null, \OtaInterface\Otaconnect\StructType\MapArea $mapArea = null, $exactMatch = null, $importanceType = null, $ranking = null)
    {
        $this
            ->setPosition($position)
            ->setAddress($address)
            ->setTelephone($telephone)
            ->setRefPoint($refPoint)
            ->setCodeRef($codeRef)
            ->setHotelRef($hotelRef)
            ->setRadius($radius)
            ->setMapArea($mapArea)
            ->setExactMatch($exactMatch)
            ->setImportanceType($importanceType)
            ->setRanking($ranking);
    }
    /**
     * Get Position value
     * @return \OtaInterface\Otaconnect\StructType\Position|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param \OtaInterface\Otaconnect\StructType\Position $position
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function setPosition(\OtaInterface\Otaconnect\StructType\Position $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Address value
     * @return \OtaInterface\Otaconnect\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \OtaInterface\Otaconnect\StructType\Address $address
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function setAddress(\OtaInterface\Otaconnect\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \OtaInterface\Otaconnect\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \OtaInterface\Otaconnect\StructType\Telephone $telephone
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function setTelephone(\OtaInterface\Otaconnect\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get RefPoint value
     * @return \OtaInterface\Otaconnect\StructType\RefPoint[]|null
     */
    public function getRefPoint()
    {
        return $this->RefPoint;
    }
    /**
     * Set RefPoint value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RefPoint[] $refPoint
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function setRefPoint(array $refPoint = array())
    {
        foreach ($refPoint as $itemSearchCriterionTypeRefPointItem) {
            // validation for constraint: itemType
            if (!$itemSearchCriterionTypeRefPointItem instanceof \OtaInterface\Otaconnect\StructType\RefPoint) {
                throw new \InvalidArgumentException(sprintf('The RefPoint property can only contain items of \OtaInterface\Otaconnect\StructType\RefPoint, "%s" given', is_object($itemSearchCriterionTypeRefPointItem) ? get_class($itemSearchCriterionTypeRefPointItem) : gettype($itemSearchCriterionTypeRefPointItem)), __LINE__);
            }
        }
        $this->RefPoint = $refPoint;
        return $this;
    }
    /**
     * Add item to RefPoint value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RefPoint $item
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function addToRefPoint(\OtaInterface\Otaconnect\StructType\RefPoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\RefPoint) {
            throw new \InvalidArgumentException(sprintf('The RefPoint property can only contain items of \OtaInterface\Otaconnect\StructType\RefPoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RefPoint[] = $item;
        return $this;
    }
    /**
     * Get CodeRef value
     * @return \OtaInterface\Otaconnect\StructType\CodeRef|null
     */
    public function getCodeRef()
    {
        return $this->CodeRef;
    }
    /**
     * Set CodeRef value
     * @param \OtaInterface\Otaconnect\StructType\CodeRef $codeRef
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function setCodeRef(\OtaInterface\Otaconnect\StructType\CodeRef $codeRef = null)
    {
        $this->CodeRef = $codeRef;
        return $this;
    }
    /**
     * Get HotelRef value
     * @return \OtaInterface\Otaconnect\StructType\HotelRef[]|null
     */
    public function getHotelRef()
    {
        return $this->HotelRef;
    }
    /**
     * Set HotelRef value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelRef[] $hotelRef
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function setHotelRef(array $hotelRef = array())
    {
        foreach ($hotelRef as $itemSearchCriterionTypeHotelRefItem) {
            // validation for constraint: itemType
            if (!$itemSearchCriterionTypeHotelRefItem instanceof \OtaInterface\Otaconnect\StructType\HotelRef) {
                throw new \InvalidArgumentException(sprintf('The HotelRef property can only contain items of \OtaInterface\Otaconnect\StructType\HotelRef, "%s" given', is_object($itemSearchCriterionTypeHotelRefItem) ? get_class($itemSearchCriterionTypeHotelRefItem) : gettype($itemSearchCriterionTypeHotelRefItem)), __LINE__);
            }
        }
        $this->HotelRef = $hotelRef;
        return $this;
    }
    /**
     * Add item to HotelRef value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\HotelRef $item
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function addToHotelRef(\OtaInterface\Otaconnect\StructType\HotelRef $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\HotelRef) {
            throw new \InvalidArgumentException(sprintf('The HotelRef property can only contain items of \OtaInterface\Otaconnect\StructType\HotelRef, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelRef[] = $item;
        return $this;
    }
    /**
     * Get Radius value
     * @return \OtaInterface\Otaconnect\StructType\Radius|null
     */
    public function getRadius()
    {
        return $this->Radius;
    }
    /**
     * Set Radius value
     * @param \OtaInterface\Otaconnect\StructType\Radius $radius
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function setRadius(\OtaInterface\Otaconnect\StructType\Radius $radius = null)
    {
        $this->Radius = $radius;
        return $this;
    }
    /**
     * Get MapArea value
     * @return \OtaInterface\Otaconnect\StructType\MapArea|null
     */
    public function getMapArea()
    {
        return $this->MapArea;
    }
    /**
     * Set MapArea value
     * @param \OtaInterface\Otaconnect\StructType\MapArea $mapArea
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function setMapArea(\OtaInterface\Otaconnect\StructType\MapArea $mapArea = null)
    {
        $this->MapArea = $mapArea;
        return $this;
    }
    /**
     * Get ExactMatch value
     * @return bool|null
     */
    public function getExactMatch()
    {
        return $this->ExactMatch;
    }
    /**
     * Set ExactMatch value
     * @param bool $exactMatch
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function setExactMatch($exactMatch = null)
    {
        // validation for constraint: boolean
        if (!is_null($exactMatch) && !is_bool($exactMatch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exactMatch)), __LINE__);
        }
        $this->ExactMatch = $exactMatch;
        return $this;
    }
    /**
     * Get ImportanceType value
     * @return string|null
     */
    public function getImportanceType()
    {
        return $this->ImportanceType;
    }
    /**
     * Set ImportanceType value
     * @param string $importanceType
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function setImportanceType($importanceType = null)
    {
        // validation for constraint: string
        if (!is_null($importanceType) && !is_string($importanceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($importanceType)), __LINE__);
        }
        $this->ImportanceType = $importanceType;
        return $this;
    }
    /**
     * Get Ranking value
     * @return int|null
     */
    public function getRanking()
    {
        return $this->Ranking;
    }
    /**
     * Set Ranking value
     * @param int $ranking
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
     */
    public function setRanking($ranking = null)
    {
        // validation for constraint: int
        if (!is_null($ranking) && !is_numeric($ranking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ranking)), __LINE__);
        }
        $this->Ranking = $ranking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\ItemSearchCriterionType
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
