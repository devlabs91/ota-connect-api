<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains summary fare rule information as well as detailed Rule Information for Fare Basis Codes. Information may be actual rules data or the results returned from a rules-based inquiry.
 * @subpackage Structs
 */
class RuleInfoType extends AbstractStructBase
{
    /**
     * The ResTicketingRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ResTicketingRules
     */
    public $ResTicketingRules;
    /**
     * The LengthOfStayRules
     * Meta informations extracted from the WSDL
     * - documentation: Rules providing minimum or maximum stay restrictions.
     * - minOccurs: 0
     * @var mixed
     */
    public $LengthOfStayRules;
    /**
     * The ChargesRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ChargesRules
     */
    public $ChargesRules;
    /**
     * Constructor method for RuleInfoType
     * @uses RuleInfoType::setResTicketingRules()
     * @uses RuleInfoType::setLengthOfStayRules()
     * @uses RuleInfoType::setChargesRules()
     * @param \OtaInterface\Otaconnect\StructType\ResTicketingRules $resTicketingRules
     * @param mixed $lengthOfStayRules
     * @param \OtaInterface\Otaconnect\StructType\ChargesRules $chargesRules
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\ResTicketingRules $resTicketingRules = null, $lengthOfStayRules = null, \OtaInterface\Otaconnect\StructType\ChargesRules $chargesRules = null)
    {
        $this
            ->setResTicketingRules($resTicketingRules)
            ->setLengthOfStayRules($lengthOfStayRules)
            ->setChargesRules($chargesRules);
    }
    /**
     * Get ResTicketingRules value
     * @return \OtaInterface\Otaconnect\StructType\ResTicketingRules|null
     */
    public function getResTicketingRules()
    {
        return $this->ResTicketingRules;
    }
    /**
     * Set ResTicketingRules value
     * @param \OtaInterface\Otaconnect\StructType\ResTicketingRules $resTicketingRules
     * @return \OtaInterface\Otaconnect\StructType\RuleInfoType
     */
    public function setResTicketingRules(\OtaInterface\Otaconnect\StructType\ResTicketingRules $resTicketingRules = null)
    {
        $this->ResTicketingRules = $resTicketingRules;
        return $this;
    }
    /**
     * Get LengthOfStayRules value
     * @return mixed|null
     */
    public function getLengthOfStayRules()
    {
        return $this->LengthOfStayRules;
    }
    /**
     * Set LengthOfStayRules value
     * @param mixed $lengthOfStayRules
     * @return \OtaInterface\Otaconnect\StructType\RuleInfoType
     */
    public function setLengthOfStayRules($lengthOfStayRules = null)
    {
        $this->LengthOfStayRules = $lengthOfStayRules;
        return $this;
    }
    /**
     * Get ChargesRules value
     * @return \OtaInterface\Otaconnect\StructType\ChargesRules|null
     */
    public function getChargesRules()
    {
        return $this->ChargesRules;
    }
    /**
     * Set ChargesRules value
     * @param \OtaInterface\Otaconnect\StructType\ChargesRules $chargesRules
     * @return \OtaInterface\Otaconnect\StructType\RuleInfoType
     */
    public function setChargesRules(\OtaInterface\Otaconnect\StructType\ChargesRules $chargesRules = null)
    {
        $this->ChargesRules = $chargesRules;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\RuleInfoType
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
