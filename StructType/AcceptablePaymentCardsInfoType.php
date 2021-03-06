<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptablePaymentCardsInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This complex type identifies payment cards that are acceptable for a specific form of payment, along with the ability to provide free text information regarding payment cards.
 * @subpackage Structs
 */
class AcceptablePaymentCardsInfoType extends AbstractStructBase
{
    /**
     * The AcceptablePaymentCards
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AcceptablePaymentCards
     */
    public $AcceptablePaymentCards;
    /**
     * The Info
     * Meta informations extracted from the WSDL
     * - documentation: General information regarding the use of payment cards.
     * - minOccurs: 0
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for AcceptablePaymentCardsInfoType
     * @uses AcceptablePaymentCardsInfoType::setAcceptablePaymentCards()
     * @uses AcceptablePaymentCardsInfoType::setInfo()
     * @param \OtaInterface\Otaconnect\StructType\AcceptablePaymentCards $acceptablePaymentCards
     * @param mixed $info
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\AcceptablePaymentCards $acceptablePaymentCards = null, $info = null)
    {
        $this
            ->setAcceptablePaymentCards($acceptablePaymentCards)
            ->setInfo($info);
    }
    /**
     * Get AcceptablePaymentCards value
     * @return \OtaInterface\Otaconnect\StructType\AcceptablePaymentCards|null
     */
    public function getAcceptablePaymentCards()
    {
        return $this->AcceptablePaymentCards;
    }
    /**
     * Set AcceptablePaymentCards value
     * @param \OtaInterface\Otaconnect\StructType\AcceptablePaymentCards $acceptablePaymentCards
     * @return \OtaInterface\Otaconnect\StructType\AcceptablePaymentCardsInfoType
     */
    public function setAcceptablePaymentCards(\OtaInterface\Otaconnect\StructType\AcceptablePaymentCards $acceptablePaymentCards = null)
    {
        $this->AcceptablePaymentCards = $acceptablePaymentCards;
        return $this;
    }
    /**
     * Get Info value
     * @return mixed|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param mixed $info
     * @return \OtaInterface\Otaconnect\StructType\AcceptablePaymentCardsInfoType
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AcceptablePaymentCardsInfoType
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
