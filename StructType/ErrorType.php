<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Standard way to indicate that an error occurred during the processing of an OpenTravel message. If the message successfully processes, but there are business errors, those errors should be passed in the warning element.
 * @subpackage Structs
 */
class ErrorType extends FreeTextType
{
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * The ShortText
     * @var string
     */
    public $ShortText;
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * Constructor method for ErrorType
     * @uses ErrorType::setType()
     * @uses ErrorType::setShortText()
     * @uses ErrorType::setCode()
     * @param string $type
     * @param string $shortText
     * @param string $code
     */
//    public function __construct($type = null, $shortText = null, $code = null)
//    {
//        $this
//            ->setType($type)
//            ->setShortText($shortText)
//            ->setCode($code);
//    }
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
     * @return \OtaInterface\Otaconnect\StructType\ErrorType
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
     * Get ShortText value
     * @return string|null
     */
    public function getShortText()
    {
        return $this->ShortText;
    }
    /**
     * Set ShortText value
     * @param string $shortText
     * @return \OtaInterface\Otaconnect\StructType\ErrorType
     */
    public function setShortText($shortText = null)
    {
        // validation for constraint: string
        if (!is_null($shortText) && !is_string($shortText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortText)), __LINE__);
        }
        $this->ShortText = $shortText;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \OtaInterface\Otaconnect\StructType\ErrorType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\ErrorType
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
