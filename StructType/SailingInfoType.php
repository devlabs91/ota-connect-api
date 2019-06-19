<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SailingInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information pertaining to the selected sailing.
 * @subpackage Structs
 */
class SailingInfoType extends AbstractStructBase
{
    /**
     * The SelectedSailing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\SelectedSailing
     */
    public $SelectedSailing;
    /**
     * The InclusivePackageOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\InclusivePackageOption
     */
    public $InclusivePackageOption;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Currency
     */
    public $Currency;
    /**
     * Constructor method for SailingInfoType
     * @uses SailingInfoType::setSelectedSailing()
     * @uses SailingInfoType::setInclusivePackageOption()
     * @uses SailingInfoType::setCurrency()
     * @param \OtaInterface\Otaconnect\StructType\SelectedSailing $selectedSailing
     * @param \OtaInterface\Otaconnect\StructType\InclusivePackageOption $inclusivePackageOption
     * @param \OtaInterface\Otaconnect\StructType\Currency $currency
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\SelectedSailing $selectedSailing = null, \OtaInterface\Otaconnect\StructType\InclusivePackageOption $inclusivePackageOption = null, \OtaInterface\Otaconnect\StructType\Currency $currency = null)
    {
        $this
            ->setSelectedSailing($selectedSailing)
            ->setInclusivePackageOption($inclusivePackageOption)
            ->setCurrency($currency);
    }
    /**
     * Get SelectedSailing value
     * @return \OtaInterface\Otaconnect\StructType\SelectedSailing|null
     */
    public function getSelectedSailing()
    {
        return $this->SelectedSailing;
    }
    /**
     * Set SelectedSailing value
     * @param \OtaInterface\Otaconnect\StructType\SelectedSailing $selectedSailing
     * @return \OtaInterface\Otaconnect\StructType\SailingInfoType
     */
    public function setSelectedSailing(\OtaInterface\Otaconnect\StructType\SelectedSailing $selectedSailing = null)
    {
        $this->SelectedSailing = $selectedSailing;
        return $this;
    }
    /**
     * Get InclusivePackageOption value
     * @return \OtaInterface\Otaconnect\StructType\InclusivePackageOption|null
     */
    public function getInclusivePackageOption()
    {
        return $this->InclusivePackageOption;
    }
    /**
     * Set InclusivePackageOption value
     * @param \OtaInterface\Otaconnect\StructType\InclusivePackageOption $inclusivePackageOption
     * @return \OtaInterface\Otaconnect\StructType\SailingInfoType
     */
    public function setInclusivePackageOption(\OtaInterface\Otaconnect\StructType\InclusivePackageOption $inclusivePackageOption = null)
    {
        $this->InclusivePackageOption = $inclusivePackageOption;
        return $this;
    }
    /**
     * Get Currency value
     * @return \OtaInterface\Otaconnect\StructType\Currency|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param \OtaInterface\Otaconnect\StructType\Currency $currency
     * @return \OtaInterface\Otaconnect\StructType\SailingInfoType
     */
    public function setCurrency(\OtaInterface\Otaconnect\StructType\Currency $currency = null)
    {
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\SailingInfoType
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
