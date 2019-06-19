<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyalPrograms StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of LoyalPrograms.
 * @subpackage Structs
 */
class LoyalPrograms extends AbstractStructBase
{
    /**
     * The LoyalProgram
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\LoyalProgram[]
     */
    public $LoyalProgram;
    /**
     * Constructor method for LoyalPrograms
     * @uses LoyalPrograms::setLoyalProgram()
     * @param \OtaInterface\Otaconnect\StructType\LoyalProgram[] $loyalProgram
     */
    public function __construct(array $loyalProgram = array())
    {
        $this
            ->setLoyalProgram($loyalProgram);
    }
    /**
     * Get LoyalProgram value
     * @return \OtaInterface\Otaconnect\StructType\LoyalProgram[]|null
     */
    public function getLoyalProgram()
    {
        return $this->LoyalProgram;
    }
    /**
     * Set LoyalProgram value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\LoyalProgram[] $loyalProgram
     * @return \OtaInterface\Otaconnect\StructType\LoyalPrograms
     */
    public function setLoyalProgram(array $loyalProgram = array())
    {
        foreach ($loyalProgram as $loyalProgramsLoyalProgramItem) {
            // validation for constraint: itemType
            if (!$loyalProgramsLoyalProgramItem instanceof \OtaInterface\Otaconnect\StructType\LoyalProgram) {
                throw new \InvalidArgumentException(sprintf('The LoyalProgram property can only contain items of \OtaInterface\Otaconnect\StructType\LoyalProgram, "%s" given', is_object($loyalProgramsLoyalProgramItem) ? get_class($loyalProgramsLoyalProgramItem) : gettype($loyalProgramsLoyalProgramItem)), __LINE__);
            }
        }
        $this->LoyalProgram = $loyalProgram;
        return $this;
    }
    /**
     * Add item to LoyalProgram value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\LoyalProgram $item
     * @return \OtaInterface\Otaconnect\StructType\LoyalPrograms
     */
    public function addToLoyalProgram(\OtaInterface\Otaconnect\StructType\LoyalProgram $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\LoyalProgram) {
            throw new \InvalidArgumentException(sprintf('The LoyalProgram property can only contain items of \OtaInterface\Otaconnect\StructType\LoyalProgram, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LoyalProgram[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\LoyalPrograms
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
