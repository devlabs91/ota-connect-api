<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelPaymentFormType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines how an account will be settled at checkout.
 * @subpackage Structs
 */
class HotelPaymentFormType extends PaymentFormType
{
    /**
     * The MasterAccountUsage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MasterAccountUsage
     */
    public $MasterAccountUsage;
    /**
     * Constructor method for HotelPaymentFormType
     * @uses HotelPaymentFormType::setMasterAccountUsage()
     * @param \OtaInterface\Otaconnect\StructType\MasterAccountUsage $masterAccountUsage
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\MasterAccountUsage $masterAccountUsage = null)
    {
        $this
            ->setMasterAccountUsage($masterAccountUsage);
    }
    /**
     * Get MasterAccountUsage value
     * @return \OtaInterface\Otaconnect\StructType\MasterAccountUsage|null
     */
    public function getMasterAccountUsage()
    {
        return $this->MasterAccountUsage;
    }
    /**
     * Set MasterAccountUsage value
     * @param \OtaInterface\Otaconnect\StructType\MasterAccountUsage $masterAccountUsage
     * @return \OtaInterface\Otaconnect\StructType\HotelPaymentFormType
     */
    public function setMasterAccountUsage(\OtaInterface\Otaconnect\StructType\MasterAccountUsage $masterAccountUsage = null)
    {
        $this->MasterAccountUsage = $masterAccountUsage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\HotelPaymentFormType
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
