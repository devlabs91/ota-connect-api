<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Guest StructType
 * Meta informations extracted from the WSDL
 * - documentation: A person staying in a room.
 * @subpackage Structs
 */
class Guest extends ContactPersonType
{
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The confirmation number for a particular guest. This is used with the 'GuestAction' attribute value of 'Add-Update' to indicate an update.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The Loyalty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Loyalty[]
     */
    public $Loyalty;
    /**
     * The GuaranteePayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\GuaranteePayment[]
     */
    public $GuaranteePayment;
    /**
     * The AdditionalDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $AdditionalDetails;
    /**
     * The GuestAction
     * Meta informations extracted from the WSDL
     * - documentation: This attributes indicates the change in status of the guest.
     * - use: optional
     * @var string
     */
    public $GuestAction;
    /**
     * The PrintConfoInd
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether to send the printed confirmation.
     * - use: optional
     * @var bool
     */
    public $PrintConfoInd;
    /**
     * Constructor method for Guest
     * @uses Guest::setUniqueID()
     * @uses Guest::setLoyalty()
     * @uses Guest::setGuaranteePayment()
     * @uses Guest::setAdditionalDetails()
     * @uses Guest::setGuestAction()
     * @uses Guest::setPrintConfoInd()
     * @param mixed $uniqueID
     * @param \OtaInterface\Otaconnect\StructType\Loyalty[] $loyalty
     * @param \OtaInterface\Otaconnect\StructType\GuaranteePayment[] $guaranteePayment
     * @param mixed $additionalDetails
     * @param string $guestAction
     * @param bool $printConfoInd
     */
    public function __construct($uniqueID = null, array $loyalty = array(), array $guaranteePayment = array(), $additionalDetails = null, $guestAction = null, $printConfoInd = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setLoyalty($loyalty)
            ->setGuaranteePayment($guaranteePayment)
            ->setAdditionalDetails($additionalDetails)
            ->setGuestAction($guestAction)
            ->setPrintConfoInd($printConfoInd);
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \OtaInterface\Otaconnect\StructType\Guest
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get Loyalty value
     * @return \OtaInterface\Otaconnect\StructType\Loyalty[]|null
     */
    public function getLoyalty()
    {
        return $this->Loyalty;
    }
    /**
     * Set Loyalty value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Loyalty[] $loyalty
     * @return \OtaInterface\Otaconnect\StructType\Guest
     */
    public function setLoyalty(array $loyalty = array())
    {
        foreach ($loyalty as $guestLoyaltyItem) {
            // validation for constraint: itemType
            if (!$guestLoyaltyItem instanceof \OtaInterface\Otaconnect\StructType\Loyalty) {
                throw new \InvalidArgumentException(sprintf('The Loyalty property can only contain items of \OtaInterface\Otaconnect\StructType\Loyalty, "%s" given', is_object($guestLoyaltyItem) ? get_class($guestLoyaltyItem) : gettype($guestLoyaltyItem)), __LINE__);
            }
        }
        $this->Loyalty = $loyalty;
        return $this;
    }
    /**
     * Add item to Loyalty value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Loyalty $item
     * @return \OtaInterface\Otaconnect\StructType\Guest
     */
    public function addToLoyalty(\OtaInterface\Otaconnect\StructType\Loyalty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Loyalty) {
            throw new \InvalidArgumentException(sprintf('The Loyalty property can only contain items of \OtaInterface\Otaconnect\StructType\Loyalty, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Loyalty[] = $item;
        return $this;
    }
    /**
     * Get GuaranteePayment value
     * @return \OtaInterface\Otaconnect\StructType\GuaranteePayment[]|null
     */
    public function getGuaranteePayment()
    {
        return $this->GuaranteePayment;
    }
    /**
     * Set GuaranteePayment value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\GuaranteePayment[] $guaranteePayment
     * @return \OtaInterface\Otaconnect\StructType\Guest
     */
    public function setGuaranteePayment(array $guaranteePayment = array())
    {
        foreach ($guaranteePayment as $guestGuaranteePaymentItem) {
            // validation for constraint: itemType
            if (!$guestGuaranteePaymentItem instanceof \OtaInterface\Otaconnect\StructType\GuaranteePayment) {
                throw new \InvalidArgumentException(sprintf('The GuaranteePayment property can only contain items of \OtaInterface\Otaconnect\StructType\GuaranteePayment, "%s" given', is_object($guestGuaranteePaymentItem) ? get_class($guestGuaranteePaymentItem) : gettype($guestGuaranteePaymentItem)), __LINE__);
            }
        }
        $this->GuaranteePayment = $guaranteePayment;
        return $this;
    }
    /**
     * Add item to GuaranteePayment value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\GuaranteePayment $item
     * @return \OtaInterface\Otaconnect\StructType\Guest
     */
    public function addToGuaranteePayment(\OtaInterface\Otaconnect\StructType\GuaranteePayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\GuaranteePayment) {
            throw new \InvalidArgumentException(sprintf('The GuaranteePayment property can only contain items of \OtaInterface\Otaconnect\StructType\GuaranteePayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuaranteePayment[] = $item;
        return $this;
    }
    /**
     * Get AdditionalDetails value
     * @return mixed|null
     */
    public function getAdditionalDetails()
    {
        return $this->AdditionalDetails;
    }
    /**
     * Set AdditionalDetails value
     * @param mixed $additionalDetails
     * @return \OtaInterface\Otaconnect\StructType\Guest
     */
    public function setAdditionalDetails($additionalDetails = null)
    {
        $this->AdditionalDetails = $additionalDetails;
        return $this;
    }
    /**
     * Get GuestAction value
     * @return string|null
     */
    public function getGuestAction()
    {
        return $this->GuestAction;
    }
    /**
     * Set GuestAction value
     * @param string $guestAction
     * @return \OtaInterface\Otaconnect\StructType\Guest
     */
    public function setGuestAction($guestAction = null)
    {
        // validation for constraint: string
        if (!is_null($guestAction) && !is_string($guestAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guestAction)), __LINE__);
        }
        $this->GuestAction = $guestAction;
        return $this;
    }
    /**
     * Get PrintConfoInd value
     * @return bool|null
     */
    public function getPrintConfoInd()
    {
        return $this->PrintConfoInd;
    }
    /**
     * Set PrintConfoInd value
     * @param bool $printConfoInd
     * @return \OtaInterface\Otaconnect\StructType\Guest
     */
    public function setPrintConfoInd($printConfoInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($printConfoInd) && !is_bool($printConfoInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($printConfoInd)), __LINE__);
        }
        $this->PrintConfoInd = $printConfoInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Guest
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
