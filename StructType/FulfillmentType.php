<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfillmentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Payment information relevant to a booking.
 * @subpackage Structs
 */
class FulfillmentType extends AbstractStructBase
{
    /**
     * The PaymentDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PaymentDetails
     */
    public $PaymentDetails;
    /**
     * The DeliveryAddress
     * Meta informations extracted from the WSDL
     * - documentation: Ticket delivery information for the booking request.
     * - minOccurs: 0
     * @var mixed
     */
    public $DeliveryAddress;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Purchaser name details
     * - minOccurs: 0
     * @var mixed
     */
    public $Name;
    /**
     * The Receipt
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Receipt
     */
    public $Receipt;
    /**
     * The PaymentText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\PaymentText[]
     */
    public $PaymentText;
    /**
     * Constructor method for FulfillmentType
     * @uses FulfillmentType::setPaymentDetails()
     * @uses FulfillmentType::setDeliveryAddress()
     * @uses FulfillmentType::setName()
     * @uses FulfillmentType::setReceipt()
     * @uses FulfillmentType::setPaymentText()
     * @param \OtaInterface\Otaconnect\StructType\PaymentDetails $paymentDetails
     * @param mixed $deliveryAddress
     * @param mixed $name
     * @param \OtaInterface\Otaconnect\StructType\Receipt $receipt
     * @param \OtaInterface\Otaconnect\StructType\PaymentText[] $paymentText
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\PaymentDetails $paymentDetails = null, $deliveryAddress = null, $name = null, \OtaInterface\Otaconnect\StructType\Receipt $receipt = null, array $paymentText = array())
    {
        $this
            ->setPaymentDetails($paymentDetails)
            ->setDeliveryAddress($deliveryAddress)
            ->setName($name)
            ->setReceipt($receipt)
            ->setPaymentText($paymentText);
    }
    /**
     * Get PaymentDetails value
     * @return \OtaInterface\Otaconnect\StructType\PaymentDetails|null
     */
    public function getPaymentDetails()
    {
        return $this->PaymentDetails;
    }
    /**
     * Set PaymentDetails value
     * @param \OtaInterface\Otaconnect\StructType\PaymentDetails $paymentDetails
     * @return \OtaInterface\Otaconnect\StructType\FulfillmentType
     */
    public function setPaymentDetails(\OtaInterface\Otaconnect\StructType\PaymentDetails $paymentDetails = null)
    {
        $this->PaymentDetails = $paymentDetails;
        return $this;
    }
    /**
     * Get DeliveryAddress value
     * @return mixed|null
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }
    /**
     * Set DeliveryAddress value
     * @param mixed $deliveryAddress
     * @return \OtaInterface\Otaconnect\StructType\FulfillmentType
     */
    public function setDeliveryAddress($deliveryAddress = null)
    {
        $this->DeliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * Get Name value
     * @return mixed|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param mixed $name
     * @return \OtaInterface\Otaconnect\StructType\FulfillmentType
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Receipt value
     * @return \OtaInterface\Otaconnect\StructType\Receipt|null
     */
    public function getReceipt()
    {
        return $this->Receipt;
    }
    /**
     * Set Receipt value
     * @param \OtaInterface\Otaconnect\StructType\Receipt $receipt
     * @return \OtaInterface\Otaconnect\StructType\FulfillmentType
     */
    public function setReceipt(\OtaInterface\Otaconnect\StructType\Receipt $receipt = null)
    {
        $this->Receipt = $receipt;
        return $this;
    }
    /**
     * Get PaymentText value
     * @return \OtaInterface\Otaconnect\StructType\PaymentText[]|null
     */
    public function getPaymentText()
    {
        return $this->PaymentText;
    }
    /**
     * Set PaymentText value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PaymentText[] $paymentText
     * @return \OtaInterface\Otaconnect\StructType\FulfillmentType
     */
    public function setPaymentText(array $paymentText = array())
    {
        foreach ($paymentText as $fulfillmentTypePaymentTextItem) {
            // validation for constraint: itemType
            if (!$fulfillmentTypePaymentTextItem instanceof \OtaInterface\Otaconnect\StructType\PaymentText) {
                throw new \InvalidArgumentException(sprintf('The PaymentText property can only contain items of \OtaInterface\Otaconnect\StructType\PaymentText, "%s" given', is_object($fulfillmentTypePaymentTextItem) ? get_class($fulfillmentTypePaymentTextItem) : gettype($fulfillmentTypePaymentTextItem)), __LINE__);
            }
        }
        $this->PaymentText = $paymentText;
        return $this;
    }
    /**
     * Add item to PaymentText value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\PaymentText $item
     * @return \OtaInterface\Otaconnect\StructType\FulfillmentType
     */
    public function addToPaymentText(\OtaInterface\Otaconnect\StructType\PaymentText $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\PaymentText) {
            throw new \InvalidArgumentException(sprintf('The PaymentText property can only contain items of \OtaInterface\Otaconnect\StructType\PaymentText, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentText[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\FulfillmentType
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
