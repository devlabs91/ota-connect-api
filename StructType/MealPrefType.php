<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a food and beverage preference. | Used to specify the preference level for a meal type. | Used for Character Strings, length 0 to 64.
 * - maxLength: 64
 * - minLength: 0
 * @subpackage Structs
 */
class MealPrefType extends AbstractStructBase
{
    /**
     * The MealType
     * Meta informations extracted from the WSDL
     * - documentation: Type of meal required (e.g.,vegetarian, Kosher, low fat, etc.)
     * - use: optional
     * @var string
     */
    public $MealType;
    /**
     * The FavoriteFood
     * Meta informations extracted from the WSDL
     * - documentation: Dining preferences used with this collection.
     * - use: optional
     * @var string
     */
    public $FavoriteFood;
    /**
     * The Beverage
     * Meta informations extracted from the WSDL
     * - documentation: Type of drink(s) preferred.
     * - use: optional
     * @var string
     */
    public $Beverage;
    /**
     * Constructor method for MealPrefType
     * @uses MealPrefType::setMealType()
     * @uses MealPrefType::setFavoriteFood()
     * @uses MealPrefType::setBeverage()
     * @param string $mealType
     * @param string $favoriteFood
     * @param string $beverage
     */
    public function __construct($mealType = null, $favoriteFood = null, $beverage = null)
    {
        $this
            ->setMealType($mealType)
            ->setFavoriteFood($favoriteFood)
            ->setBeverage($beverage);
    }
    /**
     * Get MealType value
     * @return string|null
     */
    public function getMealType()
    {
        return $this->MealType;
    }
    /**
     * Set MealType value
     * @param string $mealType
     * @return \OtaInterface\Otaconnect\StructType\MealPrefType
     */
    public function setMealType($mealType = null)
    {
        // validation for constraint: string
        if (!is_null($mealType) && !is_string($mealType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealType)), __LINE__);
        }
        $this->MealType = $mealType;
        return $this;
    }
    /**
     * Get FavoriteFood value
     * @return string|null
     */
    public function getFavoriteFood()
    {
        return $this->FavoriteFood;
    }
    /**
     * Set FavoriteFood value
     * @param string $favoriteFood
     * @return \OtaInterface\Otaconnect\StructType\MealPrefType
     */
    public function setFavoriteFood($favoriteFood = null)
    {
        // validation for constraint: string
        if (!is_null($favoriteFood) && !is_string($favoriteFood)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($favoriteFood)), __LINE__);
        }
        $this->FavoriteFood = $favoriteFood;
        return $this;
    }
    /**
     * Get Beverage value
     * @return string|null
     */
    public function getBeverage()
    {
        return $this->Beverage;
    }
    /**
     * Set Beverage value
     * @param string $beverage
     * @return \OtaInterface\Otaconnect\StructType\MealPrefType
     */
    public function setBeverage($beverage = null)
    {
        // validation for constraint: string
        if (!is_null($beverage) && !is_string($beverage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($beverage)), __LINE__);
        }
        $this->Beverage = $beverage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\MealPrefType
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
