<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyInfoCode StructType
 * Meta informations extracted from the WSDL
 * - documentation: May be used to give further detail on the code or to remove an obsolete item.
 * @subpackage Structs
 */
class PolicyInfoCode extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether the policy applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with Name.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
    /**
     * Constructor method for PolicyInfoCode
     * @uses PolicyInfoCode::setDescription()
     * @uses PolicyInfoCode::setName()
     * @uses PolicyInfoCode::setExistsCode()
     * @param mixed[] $description
     * @param string $name
     * @param string $existsCode
     */
    public function __construct(array $description = array(), $name = null, $existsCode = null)
    {
        $this
            ->setDescription($description)
            ->setName($name)
            ->setExistsCode($existsCode);
    }
    /**
     * Get Description value
     * @return mixed[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param mixed[] $description
     * @return \OtaInterface\Otaconnect\StructType\PolicyInfoCode
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $policyInfoCodeDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($policyInfoCodeDescriptionItem) ? get_class($policyInfoCodeDescriptionItem) : gettype($policyInfoCodeDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\PolicyInfoCode
     */
    public function addToDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \OtaInterface\Otaconnect\StructType\PolicyInfoCode
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ExistsCode value
     * @return string|null
     */
    public function getExistsCode()
    {
        return $this->ExistsCode;
    }
    /**
     * Set ExistsCode value
     * @param string $existsCode
     * @return \OtaInterface\Otaconnect\StructType\PolicyInfoCode
     */
    public function setExistsCode($existsCode = null)
    {
        // validation for constraint: string
        if (!is_null($existsCode) && !is_string($existsCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($existsCode)), __LINE__);
        }
        $this->ExistsCode = $existsCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PolicyInfoCode
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
