<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelResModify StructType
 * Meta informations extracted from the WSDL
 * - documentation: A full overlay of reservation information containing the modified data.
 * @subpackage Structs
 */
class HotelResModify extends HotelReservationType
{
    /**
     * The Verification
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Verification[]
     */
    public $Verification;
    /**
     * Constructor method for HotelResModify
     * @uses HotelResModify::setVerification()
     * @param \OtaInterface\Otaconnect\StructType\Verification[] $verification
     */
    public function __construct(array $verification = array())
    {
        $this
            ->setVerification($verification);
    }
    /**
     * Get Verification value
     * @return \OtaInterface\Otaconnect\StructType\Verification[]|null
     */
    public function getVerification()
    {
        return $this->Verification;
    }
    /**
     * Set Verification value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Verification[] $verification
     * @return \OtaInterface\Otaconnect\StructType\HotelResModify
     */
    public function setVerification(array $verification = array())
    {
        foreach ($verification as $hotelResModifyVerificationItem) {
            // validation for constraint: itemType
            if (!$hotelResModifyVerificationItem instanceof \OtaInterface\Otaconnect\StructType\Verification) {
                throw new \InvalidArgumentException(sprintf('The Verification property can only contain items of \OtaInterface\Otaconnect\StructType\Verification, "%s" given', is_object($hotelResModifyVerificationItem) ? get_class($hotelResModifyVerificationItem) : gettype($hotelResModifyVerificationItem)), __LINE__);
            }
        }
        $this->Verification = $verification;
        return $this;
    }
    /**
     * Add item to Verification value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Verification $item
     * @return \OtaInterface\Otaconnect\StructType\HotelResModify
     */
    public function addToVerification(\OtaInterface\Otaconnect\StructType\Verification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Verification) {
            throw new \InvalidArgumentException(sprintf('The Verification property can only contain items of \OtaInterface\Otaconnect\StructType\Verification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Verification[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\HotelResModify
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
