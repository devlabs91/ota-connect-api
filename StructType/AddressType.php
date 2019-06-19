<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides address information. | Specifies if the associated data is formatted or not. When true, then it is formatted; when false, then not formatted. | Allows for control of the sharing of address information between parties.
 * @subpackage Structs
 */
class AddressType extends AbstractStructBase
{
    /**
     * The StreetNmbr
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\StreetNmbr
     */
    public $StreetNmbr;
    /**
     * The BldgRoom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\BldgRoom[]
     */
    public $BldgRoom;
    /**
     * The AddressLine
     * Meta informations extracted from the WSDL
     * - documentation: When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent
     * using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AddressLine;
    /**
     * The CityName
     * Meta informations extracted from the WSDL
     * - documentation: City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     * - minOccurs: 0
     * @var mixed
     */
    public $CityName;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: Post Office Code number.
     * - minOccurs: 0
     * @var mixed
     */
    public $PostalCode;
    /**
     * The County
     * Meta informations extracted from the WSDL
     * - documentation: County or Region Name (e.g., Fairfax).
     * - minOccurs: 0
     * @var mixed
     */
    public $County;
    /**
     * The StateProv
     * Meta informations extracted from the WSDL
     * - documentation: State or Province name (e.g., Texas).
     * - minOccurs: 0
     * @var mixed
     */
    public $StateProv;
    /**
     * The CountryName
     * Meta informations extracted from the WSDL
     * - documentation: Country name (e.g., Ireland).
     * - minOccurs: 0
     * @var mixed
     */
    public $CountryName;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Defines the type of address (e.g. home, business, other). Refer to OpenTravel Code List Communication Location Type (CLT).
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: A remark associated with this address.
     * - use: optional
     * @var string
     */
    public $Remark;
    /**
     * Constructor method for AddressType
     * @uses AddressType::setStreetNmbr()
     * @uses AddressType::setBldgRoom()
     * @uses AddressType::setAddressLine()
     * @uses AddressType::setCityName()
     * @uses AddressType::setPostalCode()
     * @uses AddressType::setCounty()
     * @uses AddressType::setStateProv()
     * @uses AddressType::setCountryName()
     * @uses AddressType::setType()
     * @uses AddressType::setRemark()
     * @param \OtaInterface\Otaconnect\StructType\StreetNmbr $streetNmbr
     * @param \OtaInterface\Otaconnect\StructType\BldgRoom[] $bldgRoom
     * @param mixed[] $addressLine
     * @param mixed $cityName
     * @param mixed $postalCode
     * @param mixed $county
     * @param mixed $stateProv
     * @param mixed $countryName
     * @param string $type
     * @param string $remark
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\StreetNmbr $streetNmbr = null, array $bldgRoom = array(), array $addressLine = array(), $cityName = null, $postalCode = null, $county = null, $stateProv = null, $countryName = null, $type = null, $remark = null)
    {
        $this
            ->setStreetNmbr($streetNmbr)
            ->setBldgRoom($bldgRoom)
            ->setAddressLine($addressLine)
            ->setCityName($cityName)
            ->setPostalCode($postalCode)
            ->setCounty($county)
            ->setStateProv($stateProv)
            ->setCountryName($countryName)
            ->setType($type)
            ->setRemark($remark);
    }
    /**
     * Get StreetNmbr value
     * @return \OtaInterface\Otaconnect\StructType\StreetNmbr|null
     */
    public function getStreetNmbr()
    {
        return $this->StreetNmbr;
    }
    /**
     * Set StreetNmbr value
     * @param \OtaInterface\Otaconnect\StructType\StreetNmbr $streetNmbr
     * @return \OtaInterface\Otaconnect\StructType\AddressType
     */
    public function setStreetNmbr(\OtaInterface\Otaconnect\StructType\StreetNmbr $streetNmbr = null)
    {
        $this->StreetNmbr = $streetNmbr;
        return $this;
    }
    /**
     * Get BldgRoom value
     * @return \OtaInterface\Otaconnect\StructType\BldgRoom[]|null
     */
    public function getBldgRoom()
    {
        return $this->BldgRoom;
    }
    /**
     * Set BldgRoom value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\BldgRoom[] $bldgRoom
     * @return \OtaInterface\Otaconnect\StructType\AddressType
     */
    public function setBldgRoom(array $bldgRoom = array())
    {
        foreach ($bldgRoom as $addressTypeBldgRoomItem) {
            // validation for constraint: itemType
            if (!$addressTypeBldgRoomItem instanceof \OtaInterface\Otaconnect\StructType\BldgRoom) {
                throw new \InvalidArgumentException(sprintf('The BldgRoom property can only contain items of \OtaInterface\Otaconnect\StructType\BldgRoom, "%s" given', is_object($addressTypeBldgRoomItem) ? get_class($addressTypeBldgRoomItem) : gettype($addressTypeBldgRoomItem)), __LINE__);
            }
        }
        $this->BldgRoom = $bldgRoom;
        return $this;
    }
    /**
     * Add item to BldgRoom value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\BldgRoom $item
     * @return \OtaInterface\Otaconnect\StructType\AddressType
     */
    public function addToBldgRoom(\OtaInterface\Otaconnect\StructType\BldgRoom $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\BldgRoom) {
            throw new \InvalidArgumentException(sprintf('The BldgRoom property can only contain items of \OtaInterface\Otaconnect\StructType\BldgRoom, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BldgRoom[] = $item;
        return $this;
    }
    /**
     * Get AddressLine value
     * @return mixed[]|null
     */
    public function getAddressLine()
    {
        return $this->AddressLine;
    }
    /**
     * Set AddressLine value
     * @throws \InvalidArgumentException
     * @param mixed[] $addressLine
     * @return \OtaInterface\Otaconnect\StructType\AddressType
     */
    public function setAddressLine(array $addressLine = array())
    {
        foreach ($addressLine as $addressTypeAddressLineItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AddressLine property can only contain items of anyType, "%s" given', is_object($addressTypeAddressLineItem) ? get_class($addressTypeAddressLineItem) : gettype($addressTypeAddressLineItem)), __LINE__);
            }
        }
        $this->AddressLine = $addressLine;
        return $this;
    }
    /**
     * Add item to AddressLine value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \OtaInterface\Otaconnect\StructType\AddressType
     */
    public function addToAddressLine($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AddressLine property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressLine[] = $item;
        return $this;
    }
    /**
     * Get CityName value
     * @return mixed|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param mixed $cityName
     * @return \OtaInterface\Otaconnect\StructType\AddressType
     */
    public function setCityName($cityName = null)
    {
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return mixed|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param mixed $postalCode
     * @return \OtaInterface\Otaconnect\StructType\AddressType
     */
    public function setPostalCode($postalCode = null)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get County value
     * @return mixed|null
     */
    public function getCounty()
    {
        return $this->County;
    }
    /**
     * Set County value
     * @param mixed $county
     * @return \OtaInterface\Otaconnect\StructType\AddressType
     */
    public function setCounty($county = null)
    {
        $this->County = $county;
        return $this;
    }
    /**
     * Get StateProv value
     * @return mixed|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param mixed $stateProv
     * @return \OtaInterface\Otaconnect\StructType\AddressType
     */
    public function setStateProv($stateProv = null)
    {
        $this->StateProv = $stateProv;
        return $this;
    }
    /**
     * Get CountryName value
     * @return mixed|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param mixed $countryName
     * @return \OtaInterface\Otaconnect\StructType\AddressType
     */
    public function setCountryName($countryName = null)
    {
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \OtaInterface\Otaconnect\StructType\AddressType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
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
     * @return \OtaInterface\Otaconnect\StructType\AddressType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AddressType
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
