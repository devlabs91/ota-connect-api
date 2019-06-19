<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketDesignators StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is a collection of ticket designator elements.
 * @subpackage Structs
 */
class TicketDesignators extends AbstractStructBase
{
    /**
     * The TicketDesignator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * @var \OtaInterface\Otaconnect\StructType\TicketDesignator[]
     */
    public $TicketDesignator;
    /**
     * Constructor method for TicketDesignators
     * @uses TicketDesignators::setTicketDesignator()
     * @param \OtaInterface\Otaconnect\StructType\TicketDesignator[] $ticketDesignator
     */
    public function __construct(array $ticketDesignator = array())
    {
        $this
            ->setTicketDesignator($ticketDesignator);
    }
    /**
     * Get TicketDesignator value
     * @return \OtaInterface\Otaconnect\StructType\TicketDesignator[]|null
     */
    public function getTicketDesignator()
    {
        return $this->TicketDesignator;
    }
    /**
     * Set TicketDesignator value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\TicketDesignator[] $ticketDesignator
     * @return \OtaInterface\Otaconnect\StructType\TicketDesignators
     */
    public function setTicketDesignator(array $ticketDesignator = array())
    {
        foreach ($ticketDesignator as $ticketDesignatorsTicketDesignatorItem) {
            // validation for constraint: itemType
            if (!$ticketDesignatorsTicketDesignatorItem instanceof \OtaInterface\Otaconnect\StructType\TicketDesignator) {
                throw new \InvalidArgumentException(sprintf('The TicketDesignator property can only contain items of \OtaInterface\Otaconnect\StructType\TicketDesignator, "%s" given', is_object($ticketDesignatorsTicketDesignatorItem) ? get_class($ticketDesignatorsTicketDesignatorItem) : gettype($ticketDesignatorsTicketDesignatorItem)), __LINE__);
            }
        }
        $this->TicketDesignator = $ticketDesignator;
        return $this;
    }
    /**
     * Add item to TicketDesignator value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\TicketDesignator $item
     * @return \OtaInterface\Otaconnect\StructType\TicketDesignators
     */
    public function addToTicketDesignator(\OtaInterface\Otaconnect\StructType\TicketDesignator $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\TicketDesignator) {
            throw new \InvalidArgumentException(sprintf('The TicketDesignator property can only contain items of \OtaInterface\Otaconnect\StructType\TicketDesignator, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketDesignator[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\TicketDesignators
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
