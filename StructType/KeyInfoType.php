<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyInfoType StructType
 * @subpackage Structs
 */
class KeyInfoType extends AbstractStructBase
{
    /**
     * The KeyName
     * @var string
     */
    public $KeyName;
    /**
     * The KeyValue
     * @var \OtaInterface\Otaconnect\StructType\KeyValueType
     */
    public $KeyValue;
    /**
     * The RetrievalMethod
     * @var \OtaInterface\Otaconnect\StructType\RetrievalMethodType
     */
    public $RetrievalMethod;
    /**
     * The X509Data
     * @var \OtaInterface\Otaconnect\StructType\X509DataType
     */
    public $X509Data;
    /**
     * The PGPData
     * @var \OtaInterface\Otaconnect\StructType\PGPDataType
     */
    public $PGPData;
    /**
     * The SPKIData
     * @var \OtaInterface\Otaconnect\StructType\SPKIDataType
     */
    public $SPKIData;
    /**
     * The MgmtData
     * @var string
     */
    public $MgmtData;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for KeyInfoType
     * @uses KeyInfoType::setKeyName()
     * @uses KeyInfoType::setKeyValue()
     * @uses KeyInfoType::setRetrievalMethod()
     * @uses KeyInfoType::setX509Data()
     * @uses KeyInfoType::setPGPData()
     * @uses KeyInfoType::setSPKIData()
     * @uses KeyInfoType::setMgmtData()
     * @uses KeyInfoType::setAny()
     * @uses KeyInfoType::setId()
     * @param string $keyName
     * @param \OtaInterface\Otaconnect\StructType\KeyValueType $keyValue
     * @param \OtaInterface\Otaconnect\StructType\RetrievalMethodType $retrievalMethod
     * @param \OtaInterface\Otaconnect\StructType\X509DataType $x509Data
     * @param \OtaInterface\Otaconnect\StructType\PGPDataType $pGPData
     * @param \OtaInterface\Otaconnect\StructType\SPKIDataType $sPKIData
     * @param string $mgmtData
     * @param \DOMDocument $any
     * @param string $id
     */
    public function __construct($keyName = null, \OtaInterface\Otaconnect\StructType\KeyValueType $keyValue = null, \OtaInterface\Otaconnect\StructType\RetrievalMethodType $retrievalMethod = null, \OtaInterface\Otaconnect\StructType\X509DataType $x509Data = null, \OtaInterface\Otaconnect\StructType\PGPDataType $pGPData = null, \OtaInterface\Otaconnect\StructType\SPKIDataType $sPKIData = null, $mgmtData = null, \DOMDocument $any = null, $id = null)
    {
        $this
            ->setKeyName($keyName)
            ->setKeyValue($keyValue)
            ->setRetrievalMethod($retrievalMethod)
            ->setX509Data($x509Data)
            ->setPGPData($pGPData)
            ->setSPKIData($sPKIData)
            ->setMgmtData($mgmtData)
            ->setAny($any)
            ->setId($id);
    }
    /**
     * Get KeyName value
     * @return string|null
     */
    public function getKeyName()
    {
        return $this->KeyName;
    }
    /**
     * Set KeyName value
     * @param string $keyName
     * @return \OtaInterface\Otaconnect\StructType\KeyInfoType
     */
    public function setKeyName($keyName = null)
    {
        // validation for constraint: string
        if (!is_null($keyName) && !is_string($keyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($keyName)), __LINE__);
        }
        $this->KeyName = $keyName;
        return $this;
    }
    /**
     * Get KeyValue value
     * @return \OtaInterface\Otaconnect\StructType\KeyValueType|null
     */
    public function getKeyValue()
    {
        return $this->KeyValue;
    }
    /**
     * Set KeyValue value
     * @param \OtaInterface\Otaconnect\StructType\KeyValueType $keyValue
     * @return \OtaInterface\Otaconnect\StructType\KeyInfoType
     */
    public function setKeyValue(\OtaInterface\Otaconnect\StructType\KeyValueType $keyValue = null)
    {
        $this->KeyValue = $keyValue;
        return $this;
    }
    /**
     * Get RetrievalMethod value
     * @return \OtaInterface\Otaconnect\StructType\RetrievalMethodType|null
     */
    public function getRetrievalMethod()
    {
        return $this->RetrievalMethod;
    }
    /**
     * Set RetrievalMethod value
     * @param \OtaInterface\Otaconnect\StructType\RetrievalMethodType $retrievalMethod
     * @return \OtaInterface\Otaconnect\StructType\KeyInfoType
     */
    public function setRetrievalMethod(\OtaInterface\Otaconnect\StructType\RetrievalMethodType $retrievalMethod = null)
    {
        $this->RetrievalMethod = $retrievalMethod;
        return $this;
    }
    /**
     * Get X509Data value
     * @return \OtaInterface\Otaconnect\StructType\X509DataType|null
     */
    public function getX509Data()
    {
        return $this->X509Data;
    }
    /**
     * Set X509Data value
     * @param \OtaInterface\Otaconnect\StructType\X509DataType $x509Data
     * @return \OtaInterface\Otaconnect\StructType\KeyInfoType
     */
    public function setX509Data(\OtaInterface\Otaconnect\StructType\X509DataType $x509Data = null)
    {
        $this->X509Data = $x509Data;
        return $this;
    }
    /**
     * Get PGPData value
     * @return \OtaInterface\Otaconnect\StructType\PGPDataType|null
     */
    public function getPGPData()
    {
        return $this->PGPData;
    }
    /**
     * Set PGPData value
     * @param \OtaInterface\Otaconnect\StructType\PGPDataType $pGPData
     * @return \OtaInterface\Otaconnect\StructType\KeyInfoType
     */
    public function setPGPData(\OtaInterface\Otaconnect\StructType\PGPDataType $pGPData = null)
    {
        $this->PGPData = $pGPData;
        return $this;
    }
    /**
     * Get SPKIData value
     * @return \OtaInterface\Otaconnect\StructType\SPKIDataType|null
     */
    public function getSPKIData()
    {
        return $this->SPKIData;
    }
    /**
     * Set SPKIData value
     * @param \OtaInterface\Otaconnect\StructType\SPKIDataType $sPKIData
     * @return \OtaInterface\Otaconnect\StructType\KeyInfoType
     */
    public function setSPKIData(\OtaInterface\Otaconnect\StructType\SPKIDataType $sPKIData = null)
    {
        $this->SPKIData = $sPKIData;
        return $this;
    }
    /**
     * Get MgmtData value
     * @return string|null
     */
    public function getMgmtData()
    {
        return $this->MgmtData;
    }
    /**
     * Set MgmtData value
     * @param string $mgmtData
     * @return \OtaInterface\Otaconnect\StructType\KeyInfoType
     */
    public function setMgmtData($mgmtData = null)
    {
        // validation for constraint: string
        if (!is_null($mgmtData) && !is_string($mgmtData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mgmtData)), __LINE__);
        }
        $this->MgmtData = $mgmtData;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \OtaInterface\Otaconnect\StructType\KeyInfoType::setAny()
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
     * @return \OtaInterface\Otaconnect\StructType\KeyInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \OtaInterface\Otaconnect\StructType\KeyInfoType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\KeyInfoType
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
