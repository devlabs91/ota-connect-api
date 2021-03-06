<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResGuestRPHsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of unsigned integers serving as reference placeholders, and used as an index identifying which guests occupy this room
 * @subpackage Structs
 */
class ResGuestRPHsType extends AbstractStructBase
{
    /**
     * The ResGuestRPH
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\ResGuestRPH[]
     */
    public $ResGuestRPH;
    /**
     * Constructor method for ResGuestRPHsType
     * @uses ResGuestRPHsType::setResGuestRPH()
     * @param \OtaInterface\Otaconnect\StructType\ResGuestRPH[] $resGuestRPH
     */
    public function __construct(array $resGuestRPH = array())
    {
        $this
            ->setResGuestRPH($resGuestRPH);
    }
    /**
     * Get ResGuestRPH value
     * @return \OtaInterface\Otaconnect\StructType\ResGuestRPH[]|null
     */
    public function getResGuestRPH()
    {
        return $this->ResGuestRPH;
    }
    /**
     * Set ResGuestRPH value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ResGuestRPH[] $resGuestRPH
     * @return \OtaInterface\Otaconnect\StructType\ResGuestRPHsType
     */
    public function setResGuestRPH(array $resGuestRPH = array())
    {
        foreach ($resGuestRPH as $resGuestRPHsTypeResGuestRPHItem) {
            // validation for constraint: itemType
            if (!$resGuestRPHsTypeResGuestRPHItem instanceof \OtaInterface\Otaconnect\StructType\ResGuestRPH) {
                throw new \InvalidArgumentException(sprintf('The ResGuestRPH property can only contain items of \OtaInterface\Otaconnect\StructType\ResGuestRPH, "%s" given', is_object($resGuestRPHsTypeResGuestRPHItem) ? get_class($resGuestRPHsTypeResGuestRPHItem) : gettype($resGuestRPHsTypeResGuestRPHItem)), __LINE__);
            }
        }
        $this->ResGuestRPH = $resGuestRPH;
        return $this;
    }
    /**
     * Add item to ResGuestRPH value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\ResGuestRPH $item
     * @return \OtaInterface\Otaconnect\StructType\ResGuestRPHsType
     */
    public function addToResGuestRPH(\OtaInterface\Otaconnect\StructType\ResGuestRPH $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\ResGuestRPH) {
            throw new \InvalidArgumentException(sprintf('The ResGuestRPH property can only contain items of \OtaInterface\Otaconnect\StructType\ResGuestRPH, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ResGuestRPH[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\ResGuestRPHsType
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
