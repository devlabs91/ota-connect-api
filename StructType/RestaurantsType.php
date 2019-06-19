<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestaurantsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides detailed information regarding restaurants.
 * @subpackage Structs
 */
class RestaurantsType extends AbstractStructBase
{
    /**
     * The Restaurant
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Restaurant[]
     */
    public $Restaurant;
    /**
     * The SrvcInfoCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\SrvcInfoCodes
     */
    public $SrvcInfoCodes;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the total number of food and beverage outlets for a property.
     * - use: optional
     * @var int
     */
    public $Quantity;
    /**
     * Constructor method for RestaurantsType
     * @uses RestaurantsType::setRestaurant()
     * @uses RestaurantsType::setSrvcInfoCodes()
     * @uses RestaurantsType::setQuantity()
     * @param \OtaInterface\Otaconnect\StructType\Restaurant[] $restaurant
     * @param \OtaInterface\Otaconnect\StructType\SrvcInfoCodes $srvcInfoCodes
     * @param int $quantity
     */
    public function __construct(array $restaurant = array(), \OtaInterface\Otaconnect\StructType\SrvcInfoCodes $srvcInfoCodes = null, $quantity = null)
    {
        $this
            ->setRestaurant($restaurant)
            ->setSrvcInfoCodes($srvcInfoCodes)
            ->setQuantity($quantity);
    }
    /**
     * Get Restaurant value
     * @return \OtaInterface\Otaconnect\StructType\Restaurant[]|null
     */
    public function getRestaurant()
    {
        return $this->Restaurant;
    }
    /**
     * Set Restaurant value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Restaurant[] $restaurant
     * @return \OtaInterface\Otaconnect\StructType\RestaurantsType
     */
    public function setRestaurant(array $restaurant = array())
    {
        foreach ($restaurant as $restaurantsTypeRestaurantItem) {
            // validation for constraint: itemType
            if (!$restaurantsTypeRestaurantItem instanceof \OtaInterface\Otaconnect\StructType\Restaurant) {
                throw new \InvalidArgumentException(sprintf('The Restaurant property can only contain items of \OtaInterface\Otaconnect\StructType\Restaurant, "%s" given', is_object($restaurantsTypeRestaurantItem) ? get_class($restaurantsTypeRestaurantItem) : gettype($restaurantsTypeRestaurantItem)), __LINE__);
            }
        }
        $this->Restaurant = $restaurant;
        return $this;
    }
    /**
     * Add item to Restaurant value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Restaurant $item
     * @return \OtaInterface\Otaconnect\StructType\RestaurantsType
     */
    public function addToRestaurant(\OtaInterface\Otaconnect\StructType\Restaurant $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Restaurant) {
            throw new \InvalidArgumentException(sprintf('The Restaurant property can only contain items of \OtaInterface\Otaconnect\StructType\Restaurant, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Restaurant[] = $item;
        return $this;
    }
    /**
     * Get SrvcInfoCodes value
     * @return \OtaInterface\Otaconnect\StructType\SrvcInfoCodes|null
     */
    public function getSrvcInfoCodes()
    {
        return $this->SrvcInfoCodes;
    }
    /**
     * Set SrvcInfoCodes value
     * @param \OtaInterface\Otaconnect\StructType\SrvcInfoCodes $srvcInfoCodes
     * @return \OtaInterface\Otaconnect\StructType\RestaurantsType
     */
    public function setSrvcInfoCodes(\OtaInterface\Otaconnect\StructType\SrvcInfoCodes $srvcInfoCodes = null)
    {
        $this->SrvcInfoCodes = $srvcInfoCodes;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \OtaInterface\Otaconnect\StructType\RestaurantsType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RestaurantsType
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
