<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgInvoiceDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: A list of all the items making up a costed booking
 * @subpackage Structs
 */
class PkgInvoiceDetail extends AbstractStructBase
{
    /**
     * The CostingItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\CostingItems
     */
    public $CostingItems;
    /**
     * The GrossAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\GrossAmount
     */
    public $GrossAmount;
    /**
     * The DepositAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\DepositAmount
     */
    public $DepositAmount;
    /**
     * The AgentCommission
     * Meta informations extracted from the WSDL
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AgentCommission[]
     */
    public $AgentCommission;
    /**
     * The NetAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\NetAmount
     */
    public $NetAmount;
    /**
     * The TaxItems
     * Meta informations extracted from the WSDL
     * - documentation: A collection of tax item lines.
     * - minOccurs: 0
     * @var mixed
     */
    public $TaxItems;
    /**
     * The BalanceDueAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\BalanceDueAmount
     */
    public $BalanceDueAmount;
    /**
     * The AmountReceived
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AmountReceived
     */
    public $AmountReceived;
    /**
     * Constructor method for PkgInvoiceDetail
     * @uses PkgInvoiceDetail::setCostingItems()
     * @uses PkgInvoiceDetail::setGrossAmount()
     * @uses PkgInvoiceDetail::setDepositAmount()
     * @uses PkgInvoiceDetail::setAgentCommission()
     * @uses PkgInvoiceDetail::setNetAmount()
     * @uses PkgInvoiceDetail::setTaxItems()
     * @uses PkgInvoiceDetail::setBalanceDueAmount()
     * @uses PkgInvoiceDetail::setAmountReceived()
     * @param \OtaInterface\Otaconnect\StructType\CostingItems $costingItems
     * @param \OtaInterface\Otaconnect\StructType\GrossAmount $grossAmount
     * @param \OtaInterface\Otaconnect\StructType\DepositAmount $depositAmount
     * @param \OtaInterface\Otaconnect\StructType\AgentCommission[] $agentCommission
     * @param \OtaInterface\Otaconnect\StructType\NetAmount $netAmount
     * @param mixed $taxItems
     * @param \OtaInterface\Otaconnect\StructType\BalanceDueAmount $balanceDueAmount
     * @param \OtaInterface\Otaconnect\StructType\AmountReceived $amountReceived
     */
    public function __construct(\OtaInterface\Otaconnect\StructType\CostingItems $costingItems = null, \OtaInterface\Otaconnect\StructType\GrossAmount $grossAmount = null, \OtaInterface\Otaconnect\StructType\DepositAmount $depositAmount = null, array $agentCommission = array(), \OtaInterface\Otaconnect\StructType\NetAmount $netAmount = null, $taxItems = null, \OtaInterface\Otaconnect\StructType\BalanceDueAmount $balanceDueAmount = null, \OtaInterface\Otaconnect\StructType\AmountReceived $amountReceived = null)
    {
        $this
            ->setCostingItems($costingItems)
            ->setGrossAmount($grossAmount)
            ->setDepositAmount($depositAmount)
            ->setAgentCommission($agentCommission)
            ->setNetAmount($netAmount)
            ->setTaxItems($taxItems)
            ->setBalanceDueAmount($balanceDueAmount)
            ->setAmountReceived($amountReceived);
    }
    /**
     * Get CostingItems value
     * @return \OtaInterface\Otaconnect\StructType\CostingItems|null
     */
    public function getCostingItems()
    {
        return $this->CostingItems;
    }
    /**
     * Set CostingItems value
     * @param \OtaInterface\Otaconnect\StructType\CostingItems $costingItems
     * @return \OtaInterface\Otaconnect\StructType\PkgInvoiceDetail
     */
    public function setCostingItems(\OtaInterface\Otaconnect\StructType\CostingItems $costingItems = null)
    {
        $this->CostingItems = $costingItems;
        return $this;
    }
    /**
     * Get GrossAmount value
     * @return \OtaInterface\Otaconnect\StructType\GrossAmount|null
     */
    public function getGrossAmount()
    {
        return $this->GrossAmount;
    }
    /**
     * Set GrossAmount value
     * @param \OtaInterface\Otaconnect\StructType\GrossAmount $grossAmount
     * @return \OtaInterface\Otaconnect\StructType\PkgInvoiceDetail
     */
    public function setGrossAmount(\OtaInterface\Otaconnect\StructType\GrossAmount $grossAmount = null)
    {
        $this->GrossAmount = $grossAmount;
        return $this;
    }
    /**
     * Get DepositAmount value
     * @return \OtaInterface\Otaconnect\StructType\DepositAmount|null
     */
    public function getDepositAmount()
    {
        return $this->DepositAmount;
    }
    /**
     * Set DepositAmount value
     * @param \OtaInterface\Otaconnect\StructType\DepositAmount $depositAmount
     * @return \OtaInterface\Otaconnect\StructType\PkgInvoiceDetail
     */
    public function setDepositAmount(\OtaInterface\Otaconnect\StructType\DepositAmount $depositAmount = null)
    {
        $this->DepositAmount = $depositAmount;
        return $this;
    }
    /**
     * Get AgentCommission value
     * @return \OtaInterface\Otaconnect\StructType\AgentCommission[]|null
     */
    public function getAgentCommission()
    {
        return $this->AgentCommission;
    }
    /**
     * Set AgentCommission value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AgentCommission[] $agentCommission
     * @return \OtaInterface\Otaconnect\StructType\PkgInvoiceDetail
     */
    public function setAgentCommission(array $agentCommission = array())
    {
        foreach ($agentCommission as $pkgInvoiceDetailAgentCommissionItem) {
            // validation for constraint: itemType
            if (!$pkgInvoiceDetailAgentCommissionItem instanceof \OtaInterface\Otaconnect\StructType\AgentCommission) {
                throw new \InvalidArgumentException(sprintf('The AgentCommission property can only contain items of \OtaInterface\Otaconnect\StructType\AgentCommission, "%s" given', is_object($pkgInvoiceDetailAgentCommissionItem) ? get_class($pkgInvoiceDetailAgentCommissionItem) : gettype($pkgInvoiceDetailAgentCommissionItem)), __LINE__);
            }
        }
        $this->AgentCommission = $agentCommission;
        return $this;
    }
    /**
     * Add item to AgentCommission value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AgentCommission $item
     * @return \OtaInterface\Otaconnect\StructType\PkgInvoiceDetail
     */
    public function addToAgentCommission(\OtaInterface\Otaconnect\StructType\AgentCommission $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\AgentCommission) {
            throw new \InvalidArgumentException(sprintf('The AgentCommission property can only contain items of \OtaInterface\Otaconnect\StructType\AgentCommission, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AgentCommission[] = $item;
        return $this;
    }
    /**
     * Get NetAmount value
     * @return \OtaInterface\Otaconnect\StructType\NetAmount|null
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }
    /**
     * Set NetAmount value
     * @param \OtaInterface\Otaconnect\StructType\NetAmount $netAmount
     * @return \OtaInterface\Otaconnect\StructType\PkgInvoiceDetail
     */
    public function setNetAmount(\OtaInterface\Otaconnect\StructType\NetAmount $netAmount = null)
    {
        $this->NetAmount = $netAmount;
        return $this;
    }
    /**
     * Get TaxItems value
     * @return mixed|null
     */
    public function getTaxItems()
    {
        return $this->TaxItems;
    }
    /**
     * Set TaxItems value
     * @param mixed $taxItems
     * @return \OtaInterface\Otaconnect\StructType\PkgInvoiceDetail
     */
    public function setTaxItems($taxItems = null)
    {
        $this->TaxItems = $taxItems;
        return $this;
    }
    /**
     * Get BalanceDueAmount value
     * @return \OtaInterface\Otaconnect\StructType\BalanceDueAmount|null
     */
    public function getBalanceDueAmount()
    {
        return $this->BalanceDueAmount;
    }
    /**
     * Set BalanceDueAmount value
     * @param \OtaInterface\Otaconnect\StructType\BalanceDueAmount $balanceDueAmount
     * @return \OtaInterface\Otaconnect\StructType\PkgInvoiceDetail
     */
    public function setBalanceDueAmount(\OtaInterface\Otaconnect\StructType\BalanceDueAmount $balanceDueAmount = null)
    {
        $this->BalanceDueAmount = $balanceDueAmount;
        return $this;
    }
    /**
     * Get AmountReceived value
     * @return \OtaInterface\Otaconnect\StructType\AmountReceived|null
     */
    public function getAmountReceived()
    {
        return $this->AmountReceived;
    }
    /**
     * Set AmountReceived value
     * @param \OtaInterface\Otaconnect\StructType\AmountReceived $amountReceived
     * @return \OtaInterface\Otaconnect\StructType\PkgInvoiceDetail
     */
    public function setAmountReceived(\OtaInterface\Otaconnect\StructType\AmountReceived $amountReceived = null)
    {
        $this->AmountReceived = $amountReceived;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\PkgInvoiceDetail
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
