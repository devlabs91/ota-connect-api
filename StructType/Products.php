<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Products StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of products.
 * @subpackage Structs
 */
class Products extends AbstractStructBase
{
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\Product[]
     */
    public $Product;
    /**
     * Constructor method for Products
     * @uses Products::setProduct()
     * @param \OtaInterface\Otaconnect\StructType\Product[] $product
     */
    public function __construct(array $product = array())
    {
        $this
            ->setProduct($product);
    }
    /**
     * Get Product value
     * @return \OtaInterface\Otaconnect\StructType\Product[]|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Product[] $product
     * @return \OtaInterface\Otaconnect\StructType\Products
     */
    public function setProduct(array $product = array())
    {
        foreach ($product as $productsProductItem) {
            // validation for constraint: itemType
            if (!$productsProductItem instanceof \OtaInterface\Otaconnect\StructType\Product) {
                throw new \InvalidArgumentException(sprintf('The Product property can only contain items of \OtaInterface\Otaconnect\StructType\Product, "%s" given', is_object($productsProductItem) ? get_class($productsProductItem) : gettype($productsProductItem)), __LINE__);
            }
        }
        $this->Product = $product;
        return $this;
    }
    /**
     * Add item to Product value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Product $item
     * @return \OtaInterface\Otaconnect\StructType\Products
     */
    public function addToProduct(\OtaInterface\Otaconnect\StructType\Product $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Product) {
            throw new \InvalidArgumentException(sprintf('The Product property can only contain items of \OtaInterface\Otaconnect\StructType\Product, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Product[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Products
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
