<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExchangeInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Exchange ticket/document information.
 * @subpackage Structs
 */
class ExchangeInfo extends AbstractStructBase
{
    /**
     * The CouponInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CouponInfo[]
     */
    public $CouponInfo;
    /**
     * The OriginalOriginDestination
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\OriginalOriginDestination
     */
    public $OriginalOriginDestination;
    /**
     * The TicketDocumentNbr
     * Meta informations extracted from the WSDL
     * - documentation: The new ticket/document number.
     * - use: optional
     * @var string
     */
    public $TicketDocumentNbr;
    /**
     * Constructor method for ExchangeInfo
     * @uses ExchangeInfo::setCouponInfo()
     * @uses ExchangeInfo::setOriginalOriginDestination()
     * @uses ExchangeInfo::setTicketDocumentNbr()
     * @param \OtaInterface\Otaconnect\StructType\CouponInfo[] $couponInfo
     * @param \OtaInterface\Otaconnect\StructType\OriginalOriginDestination $originalOriginDestination
     * @param string $ticketDocumentNbr
     */
    public function __construct(array $couponInfo = array(), \OtaInterface\Otaconnect\StructType\OriginalOriginDestination $originalOriginDestination = null, $ticketDocumentNbr = null)
    {
        $this
            ->setCouponInfo($couponInfo)
            ->setOriginalOriginDestination($originalOriginDestination)
            ->setTicketDocumentNbr($ticketDocumentNbr);
    }
    /**
     * Get CouponInfo value
     * @return \OtaInterface\Otaconnect\StructType\CouponInfo[]|null
     */
    public function getCouponInfo()
    {
        return $this->CouponInfo;
    }
    /**
     * Set CouponInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CouponInfo[] $couponInfo
     * @return \OtaInterface\Otaconnect\StructType\ExchangeInfo
     */
    public function setCouponInfo(array $couponInfo = array())
    {
        foreach ($couponInfo as $exchangeInfoCouponInfoItem) {
            // validation for constraint: itemType
            if (!$exchangeInfoCouponInfoItem instanceof \OtaInterface\Otaconnect\StructType\CouponInfo) {
                throw new \InvalidArgumentException(sprintf('The CouponInfo property can only contain items of \OtaInterface\Otaconnect\StructType\CouponInfo, "%s" given', is_object($exchangeInfoCouponInfoItem) ? get_class($exchangeInfoCouponInfoItem) : gettype($exchangeInfoCouponInfoItem)), __LINE__);
            }
        }
        $this->CouponInfo = $couponInfo;
        return $this;
    }
    /**
     * Add item to CouponInfo value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CouponInfo $item
     * @return \OtaInterface\Otaconnect\StructType\ExchangeInfo
     */
    public function addToCouponInfo(\OtaInterface\Otaconnect\StructType\CouponInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\CouponInfo) {
            throw new \InvalidArgumentException(sprintf('The CouponInfo property can only contain items of \OtaInterface\Otaconnect\StructType\CouponInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CouponInfo[] = $item;
        return $this;
    }
    /**
     * Get OriginalOriginDestination value
     * @return \OtaInterface\Otaconnect\StructType\OriginalOriginDestination|null
     */
    public function getOriginalOriginDestination()
    {
        return $this->OriginalOriginDestination;
    }
    /**
     * Set OriginalOriginDestination value
     * @param \OtaInterface\Otaconnect\StructType\OriginalOriginDestination $originalOriginDestination
     * @return \OtaInterface\Otaconnect\StructType\ExchangeInfo
     */
    public function setOriginalOriginDestination(\OtaInterface\Otaconnect\StructType\OriginalOriginDestination $originalOriginDestination = null)
    {
        $this->OriginalOriginDestination = $originalOriginDestination;
        return $this;
    }
    /**
     * Get TicketDocumentNbr value
     * @return string|null
     */
    public function getTicketDocumentNbr()
    {
        return $this->TicketDocumentNbr;
    }
    /**
     * Set TicketDocumentNbr value
     * @param string $ticketDocumentNbr
     * @return \OtaInterface\Otaconnect\StructType\ExchangeInfo
     */
    public function setTicketDocumentNbr($ticketDocumentNbr = null)
    {
        // validation for constraint: string
        if (!is_null($ticketDocumentNbr) && !is_string($ticketDocumentNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketDocumentNbr)), __LINE__);
        }
        $this->TicketDocumentNbr = $ticketDocumentNbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\ExchangeInfo
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
