<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyValueType StructType
 * @subpackage Structs
 */
class KeyValueType extends AbstractStructBase
{
    /**
     * The DSAKeyValue
     * @var \OtaInterface\Otaconnect\StructType\DSAKeyValueType
     */
    public $DSAKeyValue;
    /**
     * The RSAKeyValue
     * @var \OtaInterface\Otaconnect\StructType\RSAKeyValueType
     */
    public $RSAKeyValue;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for KeyValueType
     * @uses KeyValueType::setDSAKeyValue()
     * @uses KeyValueType::setRSAKeyValue()
     * @uses KeyValueType::setAny()
     * @param \OtaInterface\Otaconnect\StructType\DSAKeyValueType $dSAKeyValue
     * @param \OtaInterface\Otaconnect\StructType\RSAKeyValueType $rSAKeyValue
     * @param \DOMDocument $any
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\DSAKeyValueType $dSAKeyValue = null, \OtaInterface\Otaconnect\StructType\RSAKeyValueType $rSAKeyValue = null, \DOMDocument $any = null)
    {
        $this
            ->setDSAKeyValue($dSAKeyValue)
            ->setRSAKeyValue($rSAKeyValue)
            ->setAny($any);
    }
    /**
     * Get DSAKeyValue value
     * @return \OtaInterface\Otaconnect\StructType\DSAKeyValueType|null
     */
    public function getDSAKeyValue()
    {
        return $this->DSAKeyValue;
    }
    /**
     * Set DSAKeyValue value
     * @param \OtaInterface\Otaconnect\StructType\DSAKeyValueType $dSAKeyValue
     * @return \OtaInterface\Otaconnect\StructType\KeyValueType
     */
    public function setDSAKeyValue(\OtaInterface\Otaconnect\StructType\DSAKeyValueType $dSAKeyValue = null)
    {
        $this->DSAKeyValue = $dSAKeyValue;
        return $this;
    }
    /**
     * Get RSAKeyValue value
     * @return \OtaInterface\Otaconnect\StructType\RSAKeyValueType|null
     */
    public function getRSAKeyValue()
    {
        return $this->RSAKeyValue;
    }
    /**
     * Set RSAKeyValue value
     * @param \OtaInterface\Otaconnect\StructType\RSAKeyValueType $rSAKeyValue
     * @return \OtaInterface\Otaconnect\StructType\KeyValueType
     */
    public function setRSAKeyValue(\OtaInterface\Otaconnect\StructType\RSAKeyValueType $rSAKeyValue = null)
    {
        $this->RSAKeyValue = $rSAKeyValue;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \OtaInterface\Otaconnect\StructType\KeyValueType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \OtaInterface\Otaconnect\StructType\KeyValueType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\KeyValueType
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
