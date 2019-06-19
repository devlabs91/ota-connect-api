<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentCardType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identification about a specific credit card. | Allows for control of the sharing of payment card data between parties. | Date the card becomes valid for use (optional) and the date the card expires (required) in ISO 8601 prescribed
 * format.
 * @subpackage Structs
 */
class PaymentCardType extends AbstractStructBase
{
    /**
     * The CardHolderName
     * Meta informations extracted from the WSDL
     * - documentation: Name of the card holder.
     * - minOccurs: 0
     * @var mixed
     */
    public $CardHolderName;
    /**
     * The CardIssuerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CardIssuerName
     */
    public $CardIssuerName;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: Card holder's address used for additional authorization checks.
     * - minOccurs: 0
     * @var mixed
     */
    public $Address;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Telephone[]
     */
    public $Telephone;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - documentation: Card holder's email address(es) used for additional authorization checks.
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Email;
    /**
     * The CustLoyalty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CustLoyalty[]
     */
    public $CustLoyalty;
    /**
     * The SignatureOnFile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\SignatureOnFile
     */
    public $SignatureOnFile;
    /**
     * The MagneticStripe
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\MagneticStripe
     */
    public $MagneticStripe;
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of magnetic striped card. Refer to OpenTravel Code List Card Type (CDT).
     * - use: optional
     * @var string
     */
    public $CardType;
    /**
     * The CardCode
     * Meta informations extracted from the WSDL
     * - documentation: The 2 character code of the credit card issuer.
     * - use: optional
     * @var string
     */
    public $CardCode;
    /**
     * The CardNumber
     * Meta informations extracted from the WSDL
     * - documentation: Credit card number embossed on the card.
     * - use: optional
     * @var string
     */
    public $CardNumber;
    /**
     * The SeriesCode
     * Meta informations extracted from the WSDL
     * - documentation: Verification digits printed on the card following the embossed number. This may also accommodate the customer identification/batch number (CID), card verification value (CVV2 ), card validation code number (CVC2) on credit card.
     * - use: optional
     * @var string
     */
    public $SeriesCode;
    /**
     * The MaskedCardNumber
     * Meta informations extracted from the WSDL
     * - documentation: May be used to send a concealed credit card number (e.g., xxxxxxxxxxxx9922).
     * - use: optional
     * @var string
     */
    public $MaskedCardNumber;
    /**
     * The CardHolderRPH
     * Meta informations extracted from the WSDL
     * - documentation: Provides a reference pointer that links the payment card to the payment card holder.
     * - use: optional
     * @var string
     */
    public $CardHolderRPH;
    /**
     * The ExtendPaymentIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, the credit card company is requested to delay the date on which the amount of this transaction is applied to the customer's account.
     * - use: optional
     * @var bool
     */
    public $ExtendPaymentIndicator;
    /**
     * The CountryOfIssue
     * Meta informations extracted from the WSDL
     * - documentation: Code for the country where the credit card was issued.
     * - use: optional
     * @var string
     */
    public $CountryOfIssue;
    /**
     * The ExtendedPaymentQuantity
     * Meta informations extracted from the WSDL
     * - documentation: A code used to specifiy the installment payment plan or number of payment installments.
     * - use: optional
     * @var string
     */
    public $ExtendedPaymentQuantity;
    /**
     * The SignatureOnFileIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, the cardholder signature is on file.
     * - use: optional
     * @var bool
     */
    public $SignatureOnFileIndicator;
    /**
     * The CompanyCardReference
     * Meta informations extracted from the WSDL
     * - documentation: Reference to the company sponsor for this particular card (e.g. a Universal Airline Travel Plan (UATP) card or any loyalty scheme sponsored card).
     * - use: optional
     * @var string
     */
    public $CompanyCardReference;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: A remark associated with this payment card.
     * - use: optional
     * @var string
     */
    public $Remark;
    /**
     * The EncryptionKey
     * Meta informations extracted from the WSDL
     * - documentation: Database key necessary to retrieve the full credit card (compliant with PCI DSS standards).
     * - use: optional
     * @var string
     */
    public $EncryptionKey;
    /**
     * Constructor method for PaymentCardType
     * @uses PaymentCardType::setCardHolderName()
     * @uses PaymentCardType::setCardIssuerName()
     * @uses PaymentCardType::setAddress()
     * @uses PaymentCardType::setTelephone()
     * @uses PaymentCardType::setEmail()
     * @uses PaymentCardType::setCustLoyalty()
     * @uses PaymentCardType::setSignatureOnFile()
     * @uses PaymentCardType::setMagneticStripe()
     * @uses PaymentCardType::setCardType()
     * @uses PaymentCardType::setCardCode()
     * @uses PaymentCardType::setCardNumber()
     * @uses PaymentCardType::setSeriesCode()
     * @uses PaymentCardType::setMaskedCardNumber()
     * @uses PaymentCardType::setCardHolderRPH()
     * @uses PaymentCardType::setExtendPaymentIndicator()
     * @uses PaymentCardType::setCountryOfIssue()
     * @uses PaymentCardType::setExtendedPaymentQuantity()
     * @uses PaymentCardType::setSignatureOnFileIndicator()
     * @uses PaymentCardType::setCompanyCardReference()
     * @uses PaymentCardType::setRemark()
     * @uses PaymentCardType::setEncryptionKey()
     * @param mixed $cardHolderName
     * @param \OtaInterface\Otaconnect\StructType\CardIssuerName $cardIssuerName
     * @param mixed $address
     * @param \OtaInterface\Otaconnect\StructType\Telephone[] $telephone
     * @param mixed[] $email
     * @param \OtaInterface\Otaconnect\StructType\CustLoyalty[] $custLoyalty
     * @param \OtaInterface\Otaconnect\StructType\SignatureOnFile $signatureOnFile
     * @param \OtaInterface\Otaconnect\StructType\MagneticStripe $magneticStripe
     * @param string $cardType
     * @param string $cardCode
     * @param string $cardNumber
     * @param string $seriesCode
     * @param string $maskedCardNumber
     * @param string $cardHolderRPH
     * @param bool $extendPaymentIndicator
     * @param string $countryOfIssue
     * @param string $extendedPaymentQuantity
     * @param bool $signatureOnFileIndicator
     * @param string $companyCardReference
     * @param string $remark
     * @param string $encryptionKey
     */
    public function __construct($cardHolderName = null, \OtaInterface\Otaconnect\StructType\CardIssuerName $cardIssuerName = null, $address = null, array $telephone = array(), array $email = array(), array $custLoyalty = array(), \OtaInterface\Otaconnect\StructType\SignatureOnFile $signatureOnFile = null, \OtaInterface\Otaconnect\StructType\MagneticStripe $magneticStripe = null, $cardType = null, $cardCode = null, $cardNumber = null, $seriesCode = null, $maskedCardNumber = null, $cardHolderRPH = null, $extendPaymentIndicator = null, $countryOfIssue = null, $extendedPaymentQuantity = null, $signatureOnFileIndicator = null, $companyCardReference = null, $remark = null, $encryptionKey = null)
    {
        $this
            ->setCardHolderName($cardHolderName)
            ->setCardIssuerName($cardIssuerName)
            ->setAddress($address)
            ->setTelephone($telephone)
            ->setEmail($email)
            ->setCustLoyalty($custLoyalty)
            ->setSignatureOnFile($signatureOnFile)
            ->setMagneticStripe($magneticStripe)
            ->setCardType($cardType)
            ->setCardCode($cardCode)
            ->setCardNumber($cardNumber)
            ->setSeriesCode($seriesCode)
            ->setMaskedCardNumber($maskedCardNumber)
            ->setCardHolderRPH($cardHolderRPH)
            ->setExtendPaymentIndicator($extendPaymentIndicator)
            ->setCountryOfIssue($countryOfIssue)
            ->setExtendedPaymentQuantity($extendedPaymentQuantity)
            ->setSignatureOnFileIndicator($signatureOnFileIndicator)
            ->setCompanyCardReference($companyCardReference)
            ->setRemark($remark)
            ->setEncryptionKey($encryptionKey);
    }
    /**
     * Get CardHolderName value
     * @return mixed|null
     */
    public function getCardHolderName()
    {
        return $this->CardHolderName;
    }
    /**
     * Set CardHolderName value
     * @param mixed $cardHolderName
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setCardHolderName($cardHolderName = null)
    {
        $this->CardHolderName = $cardHolderName;
        return $this;
    }
    /**
     * Get CardIssuerName value
     * @return \OtaInterface\Otaconnect\StructType\CardIssuerName|null
     */
    public function getCardIssuerName()
    {
        return $this->CardIssuerName;
    }
    /**
     * Set CardIssuerName value
     * @param \OtaInterface\Otaconnect\StructType\CardIssuerName $cardIssuerName
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setCardIssuerName(\OtaInterface\Otaconnect\StructType\CardIssuerName $cardIssuerName = null)
    {
        $this->CardIssuerName = $cardIssuerName;
        return $this;
    }
    /**
     * Get Address value
     * @return mixed|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param mixed $address
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \OtaInterface\Otaconnect\StructType\Telephone[]|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Telephone[] $telephone
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $paymentCardTypeTelephoneItem) {
            // validation for constraint: itemType
            if (!$paymentCardTypeTelephoneItem instanceof \OtaInterface\Otaconnect\StructType\Telephone) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \OtaInterface\Otaconnect\StructType\Telephone, "%s" given', is_object($paymentCardTypeTelephoneItem) ? get_class($paymentCardTypeTelephoneItem) : gettype($paymentCardTypeTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Telephone $item
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function addToTelephone(\OtaInterface\Otaconnect\StructType\Telephone $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Telephone) {
            throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \OtaInterface\Otaconnect\StructType\Telephone, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Telephone[] = $item;
        return $this;
    }
    /**
     * Get Email value
     * @return mixed[]|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @throws \InvalidArgumentException
     * @param mixed[] $email
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $paymentCardTypeEmailItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of anyType, "%s" given', is_object($paymentCardTypeEmailItem) ? get_class($paymentCardTypeEmailItem) : gettype($paymentCardTypeEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function addToEmail($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Email property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Email[] = $item;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return \OtaInterface\Otaconnect\StructType\CustLoyalty[]|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CustLoyalty[] $custLoyalty
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setCustLoyalty(array $custLoyalty = array())
    {
        foreach ($custLoyalty as $paymentCardTypeCustLoyaltyItem) {
            // validation for constraint: itemType
            if (!$paymentCardTypeCustLoyaltyItem instanceof \OtaInterface\Otaconnect\StructType\CustLoyalty) {
                throw new \InvalidArgumentException(sprintf('The CustLoyalty property can only contain items of \OtaInterface\Otaconnect\StructType\CustLoyalty, "%s" given', is_object($paymentCardTypeCustLoyaltyItem) ? get_class($paymentCardTypeCustLoyaltyItem) : gettype($paymentCardTypeCustLoyaltyItem)), __LINE__);
            }
        }
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Add item to CustLoyalty value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CustLoyalty $item
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function addToCustLoyalty(\OtaInterface\Otaconnect\StructType\CustLoyalty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\CustLoyalty) {
            throw new \InvalidArgumentException(sprintf('The CustLoyalty property can only contain items of \OtaInterface\Otaconnect\StructType\CustLoyalty, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustLoyalty[] = $item;
        return $this;
    }
    /**
     * Get SignatureOnFile value
     * @return \OtaInterface\Otaconnect\StructType\SignatureOnFile|null
     */
    public function getSignatureOnFile()
    {
        return $this->SignatureOnFile;
    }
    /**
     * Set SignatureOnFile value
     * @param \OtaInterface\Otaconnect\StructType\SignatureOnFile $signatureOnFile
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setSignatureOnFile(\OtaInterface\Otaconnect\StructType\SignatureOnFile $signatureOnFile = null)
    {
        $this->SignatureOnFile = $signatureOnFile;
        return $this;
    }
    /**
     * Get MagneticStripe value
     * @return \OtaInterface\Otaconnect\StructType\MagneticStripe|null
     */
    public function getMagneticStripe()
    {
        return $this->MagneticStripe;
    }
    /**
     * Set MagneticStripe value
     * @param \OtaInterface\Otaconnect\StructType\MagneticStripe $magneticStripe
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setMagneticStripe(\OtaInterface\Otaconnect\StructType\MagneticStripe $magneticStripe = null)
    {
        $this->MagneticStripe = $magneticStripe;
        return $this;
    }
    /**
     * Get CardType value
     * @return string|null
     */
    public function getCardType()
    {
        return $this->CardType;
    }
    /**
     * Set CardType value
     * @param string $cardType
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setCardType($cardType = null)
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardType)), __LINE__);
        }
        $this->CardType = $cardType;
        return $this;
    }
    /**
     * Get CardCode value
     * @return string|null
     */
    public function getCardCode()
    {
        return $this->CardCode;
    }
    /**
     * Set CardCode value
     * @param string $cardCode
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setCardCode($cardCode = null)
    {
        // validation for constraint: string
        if (!is_null($cardCode) && !is_string($cardCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardCode)), __LINE__);
        }
        $this->CardCode = $cardCode;
        return $this;
    }
    /**
     * Get CardNumber value
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }
    /**
     * Set CardNumber value
     * @param string $cardNumber
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setCardNumber($cardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cardNumber) && !is_string($cardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardNumber)), __LINE__);
        }
        $this->CardNumber = $cardNumber;
        return $this;
    }
    /**
     * Get SeriesCode value
     * @return string|null
     */
    public function getSeriesCode()
    {
        return $this->SeriesCode;
    }
    /**
     * Set SeriesCode value
     * @param string $seriesCode
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setSeriesCode($seriesCode = null)
    {
        // validation for constraint: string
        if (!is_null($seriesCode) && !is_string($seriesCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seriesCode)), __LINE__);
        }
        $this->SeriesCode = $seriesCode;
        return $this;
    }
    /**
     * Get MaskedCardNumber value
     * @return string|null
     */
    public function getMaskedCardNumber()
    {
        return $this->MaskedCardNumber;
    }
    /**
     * Set MaskedCardNumber value
     * @param string $maskedCardNumber
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setMaskedCardNumber($maskedCardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($maskedCardNumber) && !is_string($maskedCardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maskedCardNumber)), __LINE__);
        }
        $this->MaskedCardNumber = $maskedCardNumber;
        return $this;
    }
    /**
     * Get CardHolderRPH value
     * @return string|null
     */
    public function getCardHolderRPH()
    {
        return $this->CardHolderRPH;
    }
    /**
     * Set CardHolderRPH value
     * @param string $cardHolderRPH
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setCardHolderRPH($cardHolderRPH = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderRPH) && !is_string($cardHolderRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderRPH)), __LINE__);
        }
        $this->CardHolderRPH = $cardHolderRPH;
        return $this;
    }
    /**
     * Get ExtendPaymentIndicator value
     * @return bool|null
     */
    public function getExtendPaymentIndicator()
    {
        return $this->ExtendPaymentIndicator;
    }
    /**
     * Set ExtendPaymentIndicator value
     * @param bool $extendPaymentIndicator
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setExtendPaymentIndicator($extendPaymentIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($extendPaymentIndicator) && !is_bool($extendPaymentIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($extendPaymentIndicator)), __LINE__);
        }
        $this->ExtendPaymentIndicator = $extendPaymentIndicator;
        return $this;
    }
    /**
     * Get CountryOfIssue value
     * @return string|null
     */
    public function getCountryOfIssue()
    {
        return $this->CountryOfIssue;
    }
    /**
     * Set CountryOfIssue value
     * @param string $countryOfIssue
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setCountryOfIssue($countryOfIssue = null)
    {
        // validation for constraint: string
        if (!is_null($countryOfIssue) && !is_string($countryOfIssue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryOfIssue)), __LINE__);
        }
        $this->CountryOfIssue = $countryOfIssue;
        return $this;
    }
    /**
     * Get ExtendedPaymentQuantity value
     * @return string|null
     */
    public function getExtendedPaymentQuantity()
    {
        return $this->ExtendedPaymentQuantity;
    }
    /**
     * Set ExtendedPaymentQuantity value
     * @param string $extendedPaymentQuantity
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setExtendedPaymentQuantity($extendedPaymentQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($extendedPaymentQuantity) && !is_string($extendedPaymentQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendedPaymentQuantity)), __LINE__);
        }
        $this->ExtendedPaymentQuantity = $extendedPaymentQuantity;
        return $this;
    }
    /**
     * Get SignatureOnFileIndicator value
     * @return bool|null
     */
    public function getSignatureOnFileIndicator()
    {
        return $this->SignatureOnFileIndicator;
    }
    /**
     * Set SignatureOnFileIndicator value
     * @param bool $signatureOnFileIndicator
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setSignatureOnFileIndicator($signatureOnFileIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($signatureOnFileIndicator) && !is_bool($signatureOnFileIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($signatureOnFileIndicator)), __LINE__);
        }
        $this->SignatureOnFileIndicator = $signatureOnFileIndicator;
        return $this;
    }
    /**
     * Get CompanyCardReference value
     * @return string|null
     */
    public function getCompanyCardReference()
    {
        return $this->CompanyCardReference;
    }
    /**
     * Set CompanyCardReference value
     * @param string $companyCardReference
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setCompanyCardReference($companyCardReference = null)
    {
        // validation for constraint: string
        if (!is_null($companyCardReference) && !is_string($companyCardReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyCardReference)), __LINE__);
        }
        $this->CompanyCardReference = $companyCardReference;
        return $this;
    }
    /**
     * Get Remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param string $remark
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remark)), __LINE__);
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get EncryptionKey value
     * @return string|null
     */
    public function getEncryptionKey()
    {
        return $this->EncryptionKey;
    }
    /**
     * Set EncryptionKey value
     * @param string $encryptionKey
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
     */
    public function setEncryptionKey($encryptionKey = null)
    {
        // validation for constraint: string
        if (!is_null($encryptionKey) && !is_string($encryptionKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encryptionKey)), __LINE__);
        }
        $this->EncryptionKey = $encryptionKey;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PaymentCardType
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
