<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerCountsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: CustomerCounts- Categorization of all Customers in a reservation or request. The total number of Customers will equal the sum of the Count attribute of all CustomerCount objects in this collection and assumes that the
 * AgeQualifyingCode will be used to determine how each Customer should be billed. Each booking segment has its own CustomerCount attribute to help determine billing, headcount, etc. The CustomerCount collection cannot be modified using a delta. It must
 * be resent in its entirety if modified.
 * @subpackage Structs
 */
class CustomerCountsType extends AbstractStructBase
{
    /**
     * The CustomerCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\CustomerCount[]
     */
    public $CustomerCount;
    /**
     * Constructor method for CustomerCountsType
     * @uses CustomerCountsType::setCustomerCount()
     * @param \OtaInterface\Otaconnect\StructType\CustomerCount[] $customerCount
     */
    public function __construct(array $customerCount = array())
    {
        $this
            ->setCustomerCount($customerCount);
    }
    /**
     * Get CustomerCount value
     * @return \OtaInterface\Otaconnect\StructType\CustomerCount[]|null
     */
    public function getCustomerCount()
    {
        return $this->CustomerCount;
    }
    /**
     * Set CustomerCount value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CustomerCount[] $customerCount
     * @return \OtaInterface\Otaconnect\StructType\CustomerCountsType
     */
    public function setCustomerCount(array $customerCount = array())
    {
        foreach ($customerCount as $customerCountsTypeCustomerCountItem) {
            // validation for constraint: itemType
            if (!$customerCountsTypeCustomerCountItem instanceof \OtaInterface\Otaconnect\StructType\CustomerCount) {
                throw new \InvalidArgumentException(sprintf('The CustomerCount property can only contain items of \OtaInterface\Otaconnect\StructType\CustomerCount, "%s" given', is_object($customerCountsTypeCustomerCountItem) ? get_class($customerCountsTypeCustomerCountItem) : gettype($customerCountsTypeCustomerCountItem)), __LINE__);
            }
        }
        $this->CustomerCount = $customerCount;
        return $this;
    }
    /**
     * Add item to CustomerCount value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\CustomerCount $item
     * @return \OtaInterface\Otaconnect\StructType\CustomerCountsType
     */
    public function addToCustomerCount(\OtaInterface\Otaconnect\StructType\CustomerCount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\CustomerCount) {
            throw new \InvalidArgumentException(sprintf('The CustomerCount property can only contain items of \OtaInterface\Otaconnect\StructType\CustomerCount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerCount[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\CustomerCountsType
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
