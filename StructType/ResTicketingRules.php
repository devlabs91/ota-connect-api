<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResTicketingRules StructType
 * Meta informations extracted from the WSDL
 * - documentation: General container for rules regarding fare reservation, ticketing and sale restrictions
 * @subpackage Structs
 */
class ResTicketingRules extends AbstractStructBase
{
    /**
     * The AdvResTicketing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AdvResTicketing
     */
    public $AdvResTicketing;
    /**
     * Constructor method for ResTicketingRules
     * @uses ResTicketingRules::setAdvResTicketing()
     * @param \OtaInterface\Otaconnect\StructType\AdvResTicketing $advResTicketing
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\AdvResTicketing $advResTicketing = null)
    {
        $this
            ->setAdvResTicketing($advResTicketing);
    }
    /**
     * Get AdvResTicketing value
     * @return \OtaInterface\Otaconnect\StructType\AdvResTicketing|null
     */
    public function getAdvResTicketing()
    {
        return $this->AdvResTicketing;
    }
    /**
     * Set AdvResTicketing value
     * @param \OtaInterface\Otaconnect\StructType\AdvResTicketing $advResTicketing
     * @return \OtaInterface\Otaconnect\StructType\ResTicketingRules
     */
    public function setAdvResTicketing(\OtaInterface\Otaconnect\StructType\AdvResTicketing $advResTicketing = null)
    {
        $this->AdvResTicketing = $advResTicketing;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\ResTicketingRules
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
