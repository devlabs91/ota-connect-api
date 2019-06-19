<?php

namespace OtaInterface\Otaconnect\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Hotel ServiceType
 * @subpackage Services
 */
class Hotel extends AbstractSoapClientBase
{
    /**
     * Sets the Security SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \OtaInterface\Otaconnect\StructType\SecurityHeaderType $security
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderSecurity(\OtaInterface\Otaconnect\StructType\SecurityHeaderType $security, $nameSpace = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'Security', $security, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named HotelResNotifRQ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Security
     * - SOAPHeaderNamespaces: http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes: \OtaInterface\Otaconnect\StructType\SecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRQ $oTA_HotelResNotifRQ
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS|bool
     */
    public function HotelResNotifRQ(\OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRQ $oTA_HotelResNotifRQ)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelResNotifRQ($oTA_HotelResNotifRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelAvailRQ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Security
     * - SOAPHeaderNamespaces: http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes: \OtaInterface\Otaconnect\StructType\SecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRQ $oTA_HotelAvailRQ
     * @return \OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS|bool
     */
    public function HotelAvailRQ(\OtaInterface\Otaconnect\StructType\OTA_HotelAvailRQ $oTA_HotelAvailRQ)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelAvailRQ($oTA_HotelAvailRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelAvailNotifRQ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Security
     * - SOAPHeaderNamespaces: http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes: \OtaInterface\Otaconnect\StructType\SecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \OtaInterface\Otaconnect\StructType\OTA_HotelAvailNotifRQ $oTA_HotelAvailNotifRQ
     * @return \OtaInterface\Otaconnect\StructType\MessageAcknowledgementType|bool
     */
    public function HotelAvailNotifRQ(\OtaInterface\Otaconnect\StructType\OTA_HotelAvailNotifRQ $oTA_HotelAvailNotifRQ)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelAvailNotifRQ($oTA_HotelAvailNotifRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HotelRateAmountNotifRQ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: Security
     * - SOAPHeaderNamespaces: http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes: \OtaInterface\Otaconnect\StructType\SecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ $oTA_HotelRateAmountNotifRQ
     * @return \OtaInterface\Otaconnect\StructType\MessageAcknowledgementType|bool
     */
    public function HotelRateAmountNotifRQ(\OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ $oTA_HotelRateAmountNotifRQ)
    {
        try {
            $this->setResult($this->getSoapClient()->HotelRateAmountNotifRQ($oTA_HotelRateAmountNotifRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \OtaInterface\Otaconnect\StructType\MessageAcknowledgementType|\OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS|\OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS
     */
    public function getResult()
    {
        return parent::getResult();
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
