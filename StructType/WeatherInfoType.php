<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WeatherInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides detailed information regarding weather.
 * @subpackage Structs
 */
class WeatherInfoType extends AbstractStructBase
{
    /**
     * The Precipitation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Precipitation[]
     */
    public $Precipitation;
    /**
     * The Temperature
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Temperature[]
     */
    public $Temperature;
    /**
     * The Period
     * Meta informations extracted from the WSDL
     * - documentation: This may be used to define a time period for which a certain type of weather occurs (e.g. January or Spring).
     * - use: optional
     * @var string
     */
    public $Period;
    /**
     * Constructor method for WeatherInfoType
     * @uses WeatherInfoType::setPrecipitation()
     * @uses WeatherInfoType::setTemperature()
     * @uses WeatherInfoType::setPeriod()
     * @param \OtaInterface\Otaconnect\StructType\Precipitation[] $precipitation
     * @param \OtaInterface\Otaconnect\StructType\Temperature[] $temperature
     * @param string $period
     */
    public function __construct(array $precipitation = array(), array $temperature = array(), $period = null)
    {
        $this
            ->setPrecipitation($precipitation)
            ->setTemperature($temperature)
            ->setPeriod($period);
    }
    /**
     * Get Precipitation value
     * @return \OtaInterface\Otaconnect\StructType\Precipitation[]|null
     */
    public function getPrecipitation()
    {
        return $this->Precipitation;
    }
    /**
     * Set Precipitation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Precipitation[] $precipitation
     * @return \OtaInterface\Otaconnect\StructType\WeatherInfoType
     */
    public function setPrecipitation(array $precipitation = array())
    {
        foreach ($precipitation as $weatherInfoTypePrecipitationItem) {
            // validation for constraint: itemType
            if (!$weatherInfoTypePrecipitationItem instanceof \OtaInterface\Otaconnect\StructType\Precipitation) {
                throw new \InvalidArgumentException(sprintf('The Precipitation property can only contain items of \OtaInterface\Otaconnect\StructType\Precipitation, "%s" given', is_object($weatherInfoTypePrecipitationItem) ? get_class($weatherInfoTypePrecipitationItem) : gettype($weatherInfoTypePrecipitationItem)), __LINE__);
            }
        }
        $this->Precipitation = $precipitation;
        return $this;
    }
    /**
     * Add item to Precipitation value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Precipitation $item
     * @return \OtaInterface\Otaconnect\StructType\WeatherInfoType
     */
    public function addToPrecipitation(\OtaInterface\Otaconnect\StructType\Precipitation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Precipitation) {
            throw new \InvalidArgumentException(sprintf('The Precipitation property can only contain items of \OtaInterface\Otaconnect\StructType\Precipitation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Precipitation[] = $item;
        return $this;
    }
    /**
     * Get Temperature value
     * @return \OtaInterface\Otaconnect\StructType\Temperature[]|null
     */
    public function getTemperature()
    {
        return $this->Temperature;
    }
    /**
     * Set Temperature value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Temperature[] $temperature
     * @return \OtaInterface\Otaconnect\StructType\WeatherInfoType
     */
    public function setTemperature(array $temperature = array())
    {
        foreach ($temperature as $weatherInfoTypeTemperatureItem) {
            // validation for constraint: itemType
            if (!$weatherInfoTypeTemperatureItem instanceof \OtaInterface\Otaconnect\StructType\Temperature) {
                throw new \InvalidArgumentException(sprintf('The Temperature property can only contain items of \OtaInterface\Otaconnect\StructType\Temperature, "%s" given', is_object($weatherInfoTypeTemperatureItem) ? get_class($weatherInfoTypeTemperatureItem) : gettype($weatherInfoTypeTemperatureItem)), __LINE__);
            }
        }
        $this->Temperature = $temperature;
        return $this;
    }
    /**
     * Add item to Temperature value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Temperature $item
     * @return \OtaInterface\Otaconnect\StructType\WeatherInfoType
     */
    public function addToTemperature(\OtaInterface\Otaconnect\StructType\Temperature $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Temperature) {
            throw new \InvalidArgumentException(sprintf('The Temperature property can only contain items of \OtaInterface\Otaconnect\StructType\Temperature, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Temperature[] = $item;
        return $this;
    }
    /**
     * Get Period value
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @param string $period
     * @return \OtaInterface\Otaconnect\StructType\WeatherInfoType
     */
    public function setPeriod($period = null)
    {
        // validation for constraint: string
        if (!is_null($period) && !is_string($period)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($period)), __LINE__);
        }
        $this->Period = $period;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\WeatherInfoType
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
