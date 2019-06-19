<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgPassengerRPHs StructType
 * Meta informations extracted from the WSDL
 * - documentation: A container to allow one to relate individual passengers to an inventory or chargeable item.
 * @subpackage Structs
 */
class PkgPassengerRPHs extends AbstractStructBase
{
    /**
     * The PassengerRPH
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\PassengerRPH[]
     */
    public $PassengerRPH;
    /**
     * Constructor method for PkgPassengerRPHs
     * @uses PkgPassengerRPHs::setPassengerRPH()
     * @param \OtaInterface\Otaconnect\StructType\PassengerRPH[] $passengerRPH
     */
    public function __construct(array $passengerRPH = array())
    {
        $this
            ->setPassengerRPH($passengerRPH);
    }
    /**
     * Get PassengerRPH value
     * @return \OtaInterface\Otaconnect\StructType\PassengerRPH[]|null
     */
    public function getPassengerRPH()
    {
        return $this->PassengerRPH;
    }
    /**
     * Set PassengerRPH value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PassengerRPH[] $passengerRPH
     * @return \OtaInterface\Otaconnect\StructType\PkgPassengerRPHs
     */
    public function setPassengerRPH(array $passengerRPH = array())
    {
        foreach ($passengerRPH as $pkgPassengerRPHsPassengerRPHItem) {
            // validation for constraint: itemType
            if (!$pkgPassengerRPHsPassengerRPHItem instanceof \OtaInterface\Otaconnect\StructType\PassengerRPH) {
                throw new \InvalidArgumentException(sprintf('The PassengerRPH property can only contain items of \OtaInterface\Otaconnect\StructType\PassengerRPH, "%s" given', is_object($pkgPassengerRPHsPassengerRPHItem) ? get_class($pkgPassengerRPHsPassengerRPHItem) : gettype($pkgPassengerRPHsPassengerRPHItem)), __LINE__);
            }
        }
        $this->PassengerRPH = $passengerRPH;
        return $this;
    }
    /**
     * Add item to PassengerRPH value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PassengerRPH $item
     * @return \OtaInterface\Otaconnect\StructType\PkgPassengerRPHs
     */
    public function addToPassengerRPH(\OtaInterface\Otaconnect\StructType\PassengerRPH $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\PassengerRPH) {
            throw new \InvalidArgumentException(sprintf('The PassengerRPH property can only contain items of \OtaInterface\Otaconnect\StructType\PassengerRPH, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PassengerRPH[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PkgPassengerRPHs
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
