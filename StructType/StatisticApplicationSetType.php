<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatisticApplicationSetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Includes the statistic data reported and the codes for which it has been aggregated, if applicable. The applicable date range for the data is defined in its attributes.
 * @subpackage Structs
 */
class StatisticApplicationSetType extends AbstractStructBase
{
    /**
     * The StatisticCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\StatisticCodes
     */
    public $StatisticCodes;
    /**
     * The RevenueCategorySummaries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\RevenueCategorySummaries
     */
    public $RevenueCategorySummaries;
    /**
     * The CountCategorySummaries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CountCategorySummaries
     */
    public $CountCategorySummaries;
    /**
     * The ReportSummaries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\ReportSummaries
     */
    public $ReportSummaries;
    /**
     * Constructor method for StatisticApplicationSetType
     * @uses StatisticApplicationSetType::setStatisticCodes()
     * @uses StatisticApplicationSetType::setRevenueCategorySummaries()
     * @uses StatisticApplicationSetType::setCountCategorySummaries()
     * @uses StatisticApplicationSetType::setReportSummaries()
     * @param \OtaInterface\Otaconnect\StructType\StatisticCodes $statisticCodes
     * @param \OtaInterface\Otaconnect\StructType\RevenueCategorySummaries $revenueCategorySummaries
     * @param \OtaInterface\Otaconnect\StructType\CountCategorySummaries $countCategorySummaries
     * @param \OtaInterface\Otaconnect\StructType\ReportSummaries $reportSummaries
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\StatisticCodes $statisticCodes = null, \OtaInterface\Otaconnect\StructType\RevenueCategorySummaries $revenueCategorySummaries = null, \OtaInterface\Otaconnect\StructType\CountCategorySummaries $countCategorySummaries = null, \OtaInterface\Otaconnect\StructType\ReportSummaries $reportSummaries = null)
    {
        $this
            ->setStatisticCodes($statisticCodes)
            ->setRevenueCategorySummaries($revenueCategorySummaries)
            ->setCountCategorySummaries($countCategorySummaries)
            ->setReportSummaries($reportSummaries);
    }
    /**
     * Get StatisticCodes value
     * @return \OtaInterface\Otaconnect\StructType\StatisticCodes|null
     */
    public function getStatisticCodes()
    {
        return $this->StatisticCodes;
    }
    /**
     * Set StatisticCodes value
     * @param \OtaInterface\Otaconnect\StructType\StatisticCodes $statisticCodes
     * @return \OtaInterface\Otaconnect\StructType\StatisticApplicationSetType
     */
    public function setStatisticCodes(\OtaInterface\Otaconnect\StructType\StatisticCodes $statisticCodes = null)
    {
        $this->StatisticCodes = $statisticCodes;
        return $this;
    }
    /**
     * Get RevenueCategorySummaries value
     * @return \OtaInterface\Otaconnect\StructType\RevenueCategorySummaries|null
     */
    public function getRevenueCategorySummaries()
    {
        return $this->RevenueCategorySummaries;
    }
    /**
     * Set RevenueCategorySummaries value
     * @param \OtaInterface\Otaconnect\StructType\RevenueCategorySummaries $revenueCategorySummaries
     * @return \OtaInterface\Otaconnect\StructType\StatisticApplicationSetType
     */
    public function setRevenueCategorySummaries(\OtaInterface\Otaconnect\StructType\RevenueCategorySummaries $revenueCategorySummaries = null)
    {
        $this->RevenueCategorySummaries = $revenueCategorySummaries;
        return $this;
    }
    /**
     * Get CountCategorySummaries value
     * @return \OtaInterface\Otaconnect\StructType\CountCategorySummaries|null
     */
    public function getCountCategorySummaries()
    {
        return $this->CountCategorySummaries;
    }
    /**
     * Set CountCategorySummaries value
     * @param \OtaInterface\Otaconnect\StructType\CountCategorySummaries $countCategorySummaries
     * @return \OtaInterface\Otaconnect\StructType\StatisticApplicationSetType
     */
    public function setCountCategorySummaries(\OtaInterface\Otaconnect\StructType\CountCategorySummaries $countCategorySummaries = null)
    {
        $this->CountCategorySummaries = $countCategorySummaries;
        return $this;
    }
    /**
     * Get ReportSummaries value
     * @return \OtaInterface\Otaconnect\StructType\ReportSummaries|null
     */
    public function getReportSummaries()
    {
        return $this->ReportSummaries;
    }
    /**
     * Set ReportSummaries value
     * @param \OtaInterface\Otaconnect\StructType\ReportSummaries $reportSummaries
     * @return \OtaInterface\Otaconnect\StructType\StatisticApplicationSetType
     */
    public function setReportSummaries(\OtaInterface\Otaconnect\StructType\ReportSummaries $reportSummaries = null)
    {
        $this->ReportSummaries = $reportSummaries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\StatisticApplicationSetType
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
