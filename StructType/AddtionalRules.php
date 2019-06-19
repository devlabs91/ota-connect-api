<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddtionalRules StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Additional rules.
 * @subpackage Structs
 */
class AddtionalRules extends AbstractStructBase
{
    /**
     * The AdditionalRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $AdditionalRule;
    /**
     * Constructor method for AddtionalRules
     * @uses AddtionalRules::setAdditionalRule()
     * @param string[] $additionalRule
     */
    public function __construct(array $additionalRule = array())
    {
        $this
            ->setAdditionalRule($additionalRule);
    }
    /**
     * Get AdditionalRule value
     * @return string[]|null
     */
    public function getAdditionalRule()
    {
        return $this->AdditionalRule;
    }
    /**
     * Set AdditionalRule value
     * @uses \OtaInterface\Otaconnect\EnumType\AdditionalRule::valueIsValid()
     * @uses \OtaInterface\Otaconnect\EnumType\AdditionalRule::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $additionalRule
     * @return \OtaInterface\Otaconnect\StructType\AddtionalRules
     */
    public function setAdditionalRule(array $additionalRule = array())
    {
        $invalidValues = array();
        foreach ($additionalRule as $addtionalRulesAdditionalRuleItem) {
            if (!\OtaInterface\Otaconnect\EnumType\AdditionalRule::valueIsValid($addtionalRulesAdditionalRuleItem)) {
                $invalidValues[] = var_export($addtionalRulesAdditionalRuleItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \OtaInterface\Otaconnect\EnumType\AdditionalRule::getValidValues())), __LINE__);
        }
        $this->AdditionalRule = $additionalRule;
        return $this;
    }
    /**
     * Add item to AdditionalRule value
     * @uses \OtaInterface\Otaconnect\EnumType\AdditionalRule::valueIsValid()
     * @uses \OtaInterface\Otaconnect\EnumType\AdditionalRule::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \OtaInterface\Otaconnect\StructType\AddtionalRules
     */
    public function addToAdditionalRule($item)
    {
        // validation for constraint: enumeration
        if (!\OtaInterface\Otaconnect\EnumType\AdditionalRule::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \OtaInterface\Otaconnect\EnumType\AdditionalRule::getValidValues())), __LINE__);
        }
        $this->AdditionalRule[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AddtionalRules
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
