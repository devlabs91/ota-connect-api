<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptablePaymentCards StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of payment cards that are acceptable as a form of payment.
 * @subpackage Structs
 */
class AcceptablePaymentCards extends AbstractStructBase
{
    /**
     * The AcceptablePaymentCard
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\AcceptablePaymentCard[]
     */
    public $AcceptablePaymentCard;
    /**
     * Constructor method for AcceptablePaymentCards
     * @uses AcceptablePaymentCards::setAcceptablePaymentCard()
     * @param \OtaInterface\Otaconnect\StructType\AcceptablePaymentCard[] $acceptablePaymentCard
     */
    public function __construct(array $acceptablePaymentCard = array())
    {
        $this
            ->setAcceptablePaymentCard($acceptablePaymentCard);
    }
    /**
     * Get AcceptablePaymentCard value
     * @return \OtaInterface\Otaconnect\StructType\AcceptablePaymentCard[]|null
     */
    public function getAcceptablePaymentCard()
    {
        return $this->AcceptablePaymentCard;
    }
    /**
     * Set AcceptablePaymentCard value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AcceptablePaymentCard[] $acceptablePaymentCard
     * @return \OtaInterface\Otaconnect\StructType\AcceptablePaymentCards
     */
    public function setAcceptablePaymentCard(array $acceptablePaymentCard = array())
    {
        foreach ($acceptablePaymentCard as $acceptablePaymentCardsAcceptablePaymentCardItem) {
            // validation for constraint: itemType
            if (!$acceptablePaymentCardsAcceptablePaymentCardItem instanceof \OtaInterface\Otaconnect\StructType\AcceptablePaymentCard) {
                throw new \InvalidArgumentException(sprintf('The AcceptablePaymentCard property can only contain items of \OtaInterface\Otaconnect\StructType\AcceptablePaymentCard, "%s" given', is_object($acceptablePaymentCardsAcceptablePaymentCardItem) ? get_class($acceptablePaymentCardsAcceptablePaymentCardItem) : gettype($acceptablePaymentCardsAcceptablePaymentCardItem)), __LINE__);
            }
        }
        $this->AcceptablePaymentCard = $acceptablePaymentCard;
        return $this;
    }
    /**
     * Add item to AcceptablePaymentCard value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AcceptablePaymentCard $item
     * @return \OtaInterface\Otaconnect\StructType\AcceptablePaymentCards
     */
    public function addToAcceptablePaymentCard(\OtaInterface\Otaconnect\StructType\AcceptablePaymentCard $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\AcceptablePaymentCard) {
            throw new \InvalidArgumentException(sprintf('The AcceptablePaymentCard property can only contain items of \OtaInterface\Otaconnect\StructType\AcceptablePaymentCard, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AcceptablePaymentCard[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AcceptablePaymentCards
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
