<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Restrictions StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collections of restrictions.
 * @subpackage Structs
 */
class Restrictions extends AbstractStructBase
{
    /**
     * The Restriction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Restriction;
    /**
     * Constructor method for Restrictions
     * @uses Restrictions::setRestriction()
     * @param string[] $restriction
     */
    public function __construct(array $restriction = array())
    {
        $this
            ->setRestriction($restriction);
    }
    /**
     * Get Restriction value
     * @return string[]|null
     */
    public function getRestriction()
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @uses \OtaInterface\Otaconnect\EnumType\Restriction::valueIsValid()
     * @uses \OtaInterface\Otaconnect\EnumType\Restriction::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $restriction
     * @return \OtaInterface\Otaconnect\StructType\Restrictions
     */
    public function setRestriction(array $restriction = array())
    {
        $invalidValues = array();
        foreach ($restriction as $restrictionsRestrictionItem) {
            if (!\OtaInterface\Otaconnect\EnumType\Restriction::valueIsValid($restrictionsRestrictionItem)) {
                $invalidValues[] = var_export($restrictionsRestrictionItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \OtaInterface\Otaconnect\EnumType\Restriction::getValidValues())), __LINE__);
        }
        $this->Restriction = $restriction;
        return $this;
    }
    /**
     * Add item to Restriction value
     * @uses \OtaInterface\Otaconnect\EnumType\Restriction::valueIsValid()
     * @uses \OtaInterface\Otaconnect\EnumType\Restriction::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \OtaInterface\Otaconnect\StructType\Restrictions
     */
    public function addToRestriction($item)
    {
        // validation for constraint: enumeration
        if (!\OtaInterface\Otaconnect\EnumType\Restriction::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \OtaInterface\Otaconnect\EnumType\Restriction::getValidValues())), __LINE__);
        }
        $this->Restriction[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Restrictions
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
