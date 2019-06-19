<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateAmountMessages StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of RateAmountMessages that define the rate changes to be made.
 * @subpackage Structs
 */
class RateAmountMessages extends AbstractStructBase
{
    /**
     * The RateAmountMessage
     * Meta informations extracted from the WSDL
     * - documentation: RateAmountMessages that define the rate changes to be made.
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\RateAmountMessageType[]
     */
    public $RateAmountMessage;
    /**
     * The ChainCode
     * @var string
     */
    public $ChainCode;
    /**
     * The BrandCode
     * @var string
     */
    public $BrandCode;
    /**
     * The HotelCode
     * @var string
     */
    public $HotelCode;
    /**
     * The HotelCityCode
     * @var string
     */
    public $HotelCityCode;
    /**
     * The HotelName
     * @var string
     */
    public $HotelName;
    /**
     * The HotelCodeContext
     * @var string
     */
    public $HotelCodeContext;
    /**
     * The ChainName
     * @var string
     */
    public $ChainName;
    /**
     * The BrandName
     * @var string
     */
    public $BrandName;
    /**
     * Constructor method for RateAmountMessages
     * @uses RateAmountMessages::setRateAmountMessage()
     * @uses RateAmountMessages::setChainCode()
     * @uses RateAmountMessages::setBrandCode()
     * @uses RateAmountMessages::setHotelCode()
     * @uses RateAmountMessages::setHotelCityCode()
     * @uses RateAmountMessages::setHotelName()
     * @uses RateAmountMessages::setHotelCodeContext()
     * @uses RateAmountMessages::setChainName()
     * @uses RateAmountMessages::setBrandName()
     * @param \OtaInterface\Otaconnect\StructType\RateAmountMessageType[] $rateAmountMessage
     * @param string $chainCode
     * @param string $brandCode
     * @param string $hotelCode
     * @param string $hotelCityCode
     * @param string $hotelName
     * @param string $hotelCodeContext
     * @param string $chainName
     * @param string $brandName
     */
    public function __construct(array $rateAmountMessage = array(), $chainCode = null, $brandCode = null, $hotelCode = null, $hotelCityCode = null, $hotelName = null, $hotelCodeContext = null, $chainName = null, $brandName = null)
    {
        $this
            ->setRateAmountMessage($rateAmountMessage)
            ->setChainCode($chainCode)
            ->setBrandCode($brandCode)
            ->setHotelCode($hotelCode)
            ->setHotelCityCode($hotelCityCode)
            ->setHotelName($hotelName)
            ->setHotelCodeContext($hotelCodeContext)
            ->setChainName($chainName)
            ->setBrandName($brandName);
    }
    /**
     * Get RateAmountMessage value
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessageType[]|null
     */
    public function getRateAmountMessage()
    {
        return $this->RateAmountMessage;
    }
    /**
     * Set RateAmountMessage value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RateAmountMessageType[] $rateAmountMessage
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessages
     */
    public function setRateAmountMessage(array $rateAmountMessage = array())
    {
        foreach ($rateAmountMessage as $rateAmountMessagesRateAmountMessageItem) {
            // validation for constraint: itemType
            if (!$rateAmountMessagesRateAmountMessageItem instanceof \OtaInterface\Otaconnect\StructType\RateAmountMessageType) {
                throw new \InvalidArgumentException(sprintf('The RateAmountMessage property can only contain items of \OtaInterface\Otaconnect\StructType\RateAmountMessageType, "%s" given', is_object($rateAmountMessagesRateAmountMessageItem) ? get_class($rateAmountMessagesRateAmountMessageItem) : gettype($rateAmountMessagesRateAmountMessageItem)), __LINE__);
            }
        }
        $this->RateAmountMessage = $rateAmountMessage;
        return $this;
    }
    /**
     * Add item to RateAmountMessage value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\RateAmountMessageType $item
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessages
     */
    public function addToRateAmountMessage(\OtaInterface\Otaconnect\StructType\RateAmountMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\RateAmountMessageType) {
            throw new \InvalidArgumentException(sprintf('The RateAmountMessage property can only contain items of \OtaInterface\Otaconnect\StructType\RateAmountMessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateAmountMessage[] = $item;
        return $this;
    }
    /**
     * Get ChainCode value
     * @return string|null
     */
    public function getChainCode()
    {
        return $this->ChainCode;
    }
    /**
     * Set ChainCode value
     * @param string $chainCode
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessages
     */
    public function setChainCode($chainCode = null)
    {
        // validation for constraint: string
        if (!is_null($chainCode) && !is_string($chainCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chainCode)), __LINE__);
        }
        $this->ChainCode = $chainCode;
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
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessages
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
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode()
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessages
     */
    public function setHotelCode($hotelCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        return $this;
    }
    /**
     * Get HotelCityCode value
     * @return string|null
     */
    public function getHotelCityCode()
    {
        return $this->HotelCityCode;
    }
    /**
     * Set HotelCityCode value
     * @param string $hotelCityCode
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessages
     */
    public function setHotelCityCode($hotelCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCityCode) && !is_string($hotelCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCityCode)), __LINE__);
        }
        $this->HotelCityCode = $hotelCityCode;
        return $this;
    }
    /**
     * Get HotelName value
     * @return string|null
     */
    public function getHotelName()
    {
        return $this->HotelName;
    }
    /**
     * Set HotelName value
     * @param string $hotelName
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessages
     */
    public function setHotelName($hotelName = null)
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelName)), __LINE__);
        }
        $this->HotelName = $hotelName;
        return $this;
    }
    /**
     * Get HotelCodeContext value
     * @return string|null
     */
    public function getHotelCodeContext()
    {
        return $this->HotelCodeContext;
    }
    /**
     * Set HotelCodeContext value
     * @param string $hotelCodeContext
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessages
     */
    public function setHotelCodeContext($hotelCodeContext = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCodeContext) && !is_string($hotelCodeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCodeContext)), __LINE__);
        }
        $this->HotelCodeContext = $hotelCodeContext;
        return $this;
    }
    /**
     * Get ChainName value
     * @return string|null
     */
    public function getChainName()
    {
        return $this->ChainName;
    }
    /**
     * Set ChainName value
     * @param string $chainName
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessages
     */
    public function setChainName($chainName = null)
    {
        // validation for constraint: string
        if (!is_null($chainName) && !is_string($chainName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chainName)), __LINE__);
        }
        $this->ChainName = $chainName;
        return $this;
    }
    /**
     * Get BrandName value
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->BrandName;
    }
    /**
     * Set BrandName value
     * @param string $brandName
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessages
     */
    public function setBrandName($brandName = null)
    {
        // validation for constraint: string
        if (!is_null($brandName) && !is_string($brandName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandName)), __LINE__);
        }
        $this->BrandName = $brandName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RateAmountMessages
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
